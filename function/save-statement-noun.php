<?php

// Check if the form has been submitted
if (isset($_POST['user_ID'])) {
    // Get the form data
    $round = $_POST['round'];
    $return = $_POST['return'];
    $alert = $_POST['alert'];
    $user_ID = $_POST['user_ID'];
    $lesson_activity_number = $_POST['lesson_activity_number'];

    include "conn.php";

    // Check for a successful connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Loop through the form inputs and update recognizing_noun_activity table
    for ($i = 1; $i <= 8; $i++) {
        $inputName = "{$round}_statement_$i";
        $inputNameImage = $inputName . "_image";
        $correctNounsName = $inputName . "_correct_nouns";

        // Check if an image is uploaded
        if (!empty($_FILES[$inputNameImage]['tmp_name'])) {
            // Read image data
            $imageData = file_get_contents($_FILES[$inputNameImage]['tmp_name']);
            $imageData = mysqli_real_escape_string($conn, $imageData);
            
            // Update the database with the image
            $query = "INSERT INTO recognizing_noun_activity 
                        (`user_ID`, `lesson_activity_number`, `{$inputName}_image`, `{$inputName}`, `{$correctNounsName}`)
                      VALUES ('$user_ID', '$lesson_activity_number', '$imageData', '{$_POST[$inputName]}', '{$_POST[$correctNounsName]}')
                      ON DUPLICATE KEY UPDATE
                        `{$inputName}_image` = VALUES(`{$inputName}_image`),
                        `{$inputName}` = VALUES(`{$inputName}`),
                        `{$correctNounsName}` = VALUES(`{$correctNounsName}`)";
        } else {
            // Update the database without the image
            $query = "INSERT INTO recognizing_noun_activity 
                        (`user_ID`, `lesson_activity_number`, `{$inputName}`, `{$correctNounsName}`)
                      VALUES ('$user_ID', '$lesson_activity_number', '{$_POST[$inputName]}', '{$_POST[$correctNounsName]}')
                      ON DUPLICATE KEY UPDATE
                        `{$inputName}` = VALUES(`{$inputName}`),
                        `{$correctNounsName}` = VALUES(`{$correctNounsName}`)";
        }

        // Execute the query
        $result = mysqli_query($conn, $query);

        // Check for errors
        if (!$result) {
            echo "Error: " . mysqli_error($conn);
            // Handle the error as needed
        }
    }

    // Close the database connection
    mysqli_close($conn);

    // Start the session and set the alert
    session_start();
    $_SESSION['alertThis'] = $alert;

    // Redirect to the specified return page
    header("Location: $return");
    exit();
}

?>
