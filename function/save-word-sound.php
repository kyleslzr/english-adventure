<?php
// Check if the form has been submitted
if (isset($_POST['user_ID'])) {
    // Get the form data
    $round = $_POST['round'];
    $return = $_POST['return'];
    $alert = $_POST['alert'];
    $user_ID = $_POST['user_ID'];

    include "conn.php";

    // Check for a successful connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Loop through the form inputs and update lesson tutorial URL
    for ($i = 1; $i <= 15; $i++) {
        $inputName =  $round ."_word_$i";
        $statusName =  $round ."_word_". $i . "_status";

        $word = isset($_POST[$inputName]) ? $_POST[$inputName] : '';
        $status = isset($_POST[$statusName]) ? $_POST[$statusName] : '';

        // Create a prepared statement with placeholders
        $query = "INSERT INTO word_sound_activity (`user_ID`, `$inputName`, `$statusName`)
                  VALUES (?, ?, ?)
                  ON DUPLICATE KEY UPDATE `$inputName` = VALUES(`$inputName`), `$statusName` = VALUES(`$statusName`)";

        // Prepare the statement
        $stmt = mysqli_prepare($conn, $query);

        // Bind parameters to the prepared statement
        mysqli_stmt_bind_param($stmt, "iss", $user_ID, $word, $status);

        // Execute the prepared statement
        if (!mysqli_stmt_execute($stmt)) {
            echo "Error: " . mysqli_error($conn);
            // Handle the error as needed
        }

        // Close the prepared statement
        mysqli_stmt_close($stmt);
    }

    // Close the database connection
    mysqli_close($conn);

    // Start the session and set the alert
    session_start();
    $_SESSION['alertThis'] = $alert;

    // Redirect to the specified return page
    header("Location: " . $return);
    exit();
}
?>
