<?php

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['user_ID'])) {
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

    // Loop through the form inputs and update recognizing_noun_activity table
    for ($i = 1; $i <= 10; $i++) {
        $inputName = "{$round}_statement_$i"; // e.g., l22_easy_statement_1
        $inputNameImage = "{$inputName}_image";
        $statusName = "{$inputName}_status";
        $choiceAnswer1Name = "{$inputName}_choice_answer_1";
        $choiceAnswer2Name = "{$inputName}_choice_answer_2";

        // Check if an image is uploaded
        if (!empty($_FILES[$inputNameImage]['tmp_name'])) {
            // Read image data
            $imageData = file_get_contents($_FILES[$inputNameImage]['tmp_name']);
            $imageData = mysqli_real_escape_string($conn, $imageData);
            
            // Update the database with the image
            $query = "INSERT INTO recognizing_word_activity_3 
                        (`user_ID`, `{$inputName}_image`, `{$inputName}`, `{$statusName}`, `{$choiceAnswer1Name}`, `{$choiceAnswer2Name}`)
                      VALUES ('$user_ID', '$imageData', '{$_POST[$inputName]}', '{$_POST[$statusName]}', '{$_POST[$choiceAnswer1Name]}', '{$_POST[$choiceAnswer2Name]}')
                      ON DUPLICATE KEY UPDATE
                        `{$inputName}_image` = VALUES(`{$inputName}_image`),
                        `{$inputName}` = VALUES(`{$inputName}`),
                        `{$statusName}` = VALUES(`{$statusName}`),
                        `{$choiceAnswer1Name}` = VALUES(`{$choiceAnswer1Name}`),
                        `{$choiceAnswer2Name}` = VALUES(`{$choiceAnswer2Name}`)";
        } else {
            // Update the database without the image
            $query = "INSERT INTO recognizing_word_activity_3
                        (`user_ID`, `{$inputName}`, `{$statusName}`, `{$choiceAnswer1Name}`, `{$choiceAnswer2Name}`)
                      VALUES ('$user_ID', '{$_POST[$inputName]}', '{$_POST[$statusName]}', '{$_POST[$choiceAnswer1Name]}', '{$_POST[$choiceAnswer2Name]}')
                      ON DUPLICATE KEY UPDATE
                        `{$inputName}` = VALUES(`{$inputName}`),
                        `{$statusName}` = VALUES(`{$statusName}`),
                        `{$choiceAnswer1Name}` = VALUES(`{$choiceAnswer1Name}`),
                        `{$choiceAnswer2Name}` = VALUES(`{$choiceAnswer2Name}`)";
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
