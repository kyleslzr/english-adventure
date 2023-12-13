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
    for ($i = 1; $i <= 6; $i++) {
        $inputName = "{$round}_word_$i"; // e.g., l21_easy_word_1
        $inputNameImage = "{$inputName}_image"; // l21_easy_word_1_image
        $choiceAnswer = "{$inputName}_correct_word"; // l21_easy_word_1_correct_word

        // Check if an image is uploaded
        if (!empty($_FILES[$inputNameImage]['tmp_name'])) {
            // Read image data
            $imageData = file_get_contents($_FILES[$inputNameImage]['tmp_name']);
            $imageData = mysqli_real_escape_string($conn, $imageData);
            
            // Update the database with the image
            $query = "INSERT INTO `word_sound_activity_3`
                        (`user_ID`, `{$inputNameImage}`, `{$choiceAnswer}`)
                      VALUES ('$user_ID', '$imageData', '{$_POST[$choiceAnswer]}')
                      ON DUPLICATE KEY UPDATE
                        `{$inputNameImage}` = VALUES(`{$inputNameImage}`),
                        `{$choiceAnswer}` = VALUES(`{$choiceAnswer}`)";
        } else {
            // Update the database without the image
            $query = "INSERT INTO `word_sound_activity_3`
                        (`user_ID`, `{$choiceAnswer}`)
                      VALUES ('$user_ID', '{$_POST[$choiceAnswer]}')
                      ON DUPLICATE KEY UPDATE
                        `{$choiceAnswer}` = VALUES(`{$choiceAnswer}`)";
        }

        // Execute the query
        $result = mysqli_query($conn, $query);

        // Check for errors
        if (!$result) {
            echo "Error: " . mysqli_error($conn);
            // Handle the error as needed
        } else {
            echo "Query executed successfully.";
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
