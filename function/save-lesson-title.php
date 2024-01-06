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

    // Check if the record exists
    $check_query = "SELECT COUNT(*) FROM lesson_titles WHERE user_ID = ? AND lesson_activity_number = ?";
    $check_stmt = mysqli_prepare($conn, $check_query);
    mysqli_stmt_bind_param($check_stmt, "ii", $user_ID, $lesson_activity_number);
    mysqli_stmt_execute($check_stmt);
    mysqli_stmt_bind_result($check_stmt, $count);
    mysqli_stmt_fetch($check_stmt);
    mysqli_stmt_close($check_stmt);

    // Decide whether to insert or update
    if ($count > 0) {
        // Update the existing record
        $update_query = "UPDATE lesson_titles SET lesson_title = ?, directions = ? WHERE user_ID = ? AND lesson_activity_number = ?";
        $update_stmt = mysqli_prepare($conn, $update_query);
        mysqli_stmt_bind_param($update_stmt, "ssii", $lesson_title, $lesson_directions, $user_ID, $lesson_activity_number);
        $result = mysqli_stmt_execute($update_stmt);
        mysqli_stmt_close($update_stmt);
    } else {
        // Insert a new record
        $insert_query = "INSERT INTO lesson_titles (`user_ID`, `lesson_activity_number`, `lesson_title`, `directions`)
                         VALUES (?, ?, ?, ?)";
        $insert_stmt = mysqli_prepare($conn, $insert_query);
        mysqli_stmt_bind_param($insert_stmt, "iiss", $user_ID, $lesson_activity_number, $lesson_title, $lesson_directions);
        $result = mysqli_stmt_execute($insert_stmt);
        mysqli_stmt_close($insert_stmt);
    }

    // Check the result and handle accordingly
    if ($result) {
        session_start();
        $_SESSION['alertThis'] = $alert;
        mysqli_close($conn);
        header("Location: " . $return);
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
