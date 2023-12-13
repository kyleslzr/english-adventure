<?php
// Check if the form has been submitted
if (isset($_POST['user_ID'])) {
    // Get the form data
    $return = $_POST['return'];
    $alert = $_POST['alert'];
    $user_ID = $_POST['user_ID'];
    $lesson_activity_number = $_POST['lesson_activity_number'];
    $lesson_title = $_POST['lesson_title'];
    $lesson_directions = $_POST['lesson_directions'];

    include "conn.php";

    // Check for a successful connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Create a prepared statement with placeholders
    $query = "INSERT INTO lesson_titles (`user_ID`, `lesson_activity_number`, `lesson_title`, `directions`)
              VALUES (?, ?, ?, ?)
              ON DUPLICATE KEY UPDATE `lesson_title` = ?, `directions` = ?";

    // Prepare the statement
    $stmt = mysqli_prepare($conn, $query);

    // Bind parameters to the prepared statement
    mysqli_stmt_bind_param($stmt, "iissss", $user_ID, $lesson_activity_number, $lesson_title, $lesson_directions, $lesson_title, $lesson_directions);

    // Execute the prepared statement
    if (mysqli_stmt_execute($stmt)) {
        session_start();  // Make sure to start the session
        $_SESSION['alertThis'] = $alert;
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        
        header("Location: " . $return);
        exit();
    } else {
        // Handle the case where the execution fails
        echo "Error: " . mysqli_error($conn);
    }

    // Close the prepared statement and database connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
