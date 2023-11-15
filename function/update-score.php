<?php
include "conn.php";

// Get the action (increment or decrement) and new score from the AJAX request
$action = $_POST['action'];
$newScore = $_POST['newScore'];

// You should perform additional validation and security checks here

// Get the record_ID from the AJAX request to identify the record to update
$record_ID = $_POST['record_ID'];
$lesson_activity = $_POST['lessonActivity'];

// Update the score in the database based on the record_ID
if ($action === 'increment') {
    $sql = "UPDATE pupil_record SET $row $lesson_activity = $lesson_activity + 1 WHERE record_ID = ?";
} elseif ($action === 'decrement') {
    $sql = "UPDATE pupil_record SET $lesson_activity = $lesson_activity - 1 WHERE record_ID = ?";
}

// Create a prepared statement for the update
$stmt = mysqli_prepare($conn, $sql);

if ($stmt === false) {
    echo "Error: " . mysqli_error($conn);
} else {
    // Bind the record_ID to the prepared statement
    mysqli_stmt_bind_param($stmt, "i", $record_ID);

    // Execute the update
    if (mysqli_stmt_execute($stmt)) {
        // Update successful
        echo "Score updated successfully.";
    } else {
        // Update failed
        echo "Error: " . mysqli_error($conn);
    }

    // Close the prepared statement
    mysqli_stmt_close($stmt);
}

// Close the database connection
mysqli_close($conn);
?>
