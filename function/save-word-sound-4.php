<?php

// // Check if the form has been submitted
// if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['user_ID'])) {
//      // Get the form data
//      $round = $_POST['round'];
//      $return = $_POST['return'];
//      $alert = $_POST['alert'];
//      $user_ID = $_POST['user_ID'];

//      include "conn.php";

//      // Check for a successful connection
//      if (!$conn) {
//           die("Connection failed: " . mysqli_connect_error());
//      }

//      // Loop through the form inputs and update recognizing_noun_activity table
//      for ($i = 1; $i <= 10; $i++) {
//           $inputName = "{$round}_word_$i";
//           $inputNameImage = "{$inputName}_image";
//           $choiceAnswer = "{$inputName}_correct_word";

//           // Initialize query for update without image
//           $query = "INSERT INTO `word_sound_activity_4`
//                         (`user_ID`, `{$choiceAnswer}`)
//                       VALUES ('$user_ID', '{$_POST[$choiceAnswer]}')
//                       ON DUPLICATE KEY UPDATE
//                         `{$choiceAnswer}` = VALUES(`{$choiceAnswer}`)";

//           // Check if an image is uploaded
//           if (!empty($_FILES[$inputNameImage]['tmp_name'])) {
//                $imageData = file_get_contents($_FILES[$inputNameImage]['tmp_name']);
//                $imageData = mysqli_real_escape_string($conn, $imageData);

//                // Update the database with the image
//                $query = "INSERT INTO `word_sound_activity_4`
//                         (`user_ID`, `{$inputNameImage}`, `{$choiceAnswer}`)
//                       VALUES ('$user_ID', '$imageData', '{$_POST[$choiceAnswer]}')
//                       ON DUPLICATE KEY UPDATE
//                         `{$inputNameImage}` = VALUES(`{$inputNameImage}`),
//                         `{$choiceAnswer}` = VALUES(`{$choiceAnswer}`)";
//           }

//           // Execute the query
//           $result = mysqli_query($conn, $query);

//           // Check for errors
//           if (!$result) {
//                echo "Error: " . mysqli_error($conn);
//                // Handle the error as needed
//           } else {
//                echo "Query executed successfully.";
//                // Start the session and set the alert
//           }
//      }

//      // Close the database connection
//      mysqli_close($conn);

//      session_start();
//      $_SESSION['alertThis'] = $alert;

//      // Redirect to the specified return page
//      header("Location: $return");
//      exit();
// }

?>
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
          $inputName = "{$round}_word_$i"; // e.g., l21_easy_word_1
          $inputNameImage = "{$inputName}_image"; // l21_easy_word_1_image
          $inputNameImage2 = "{$inputName}_image_2"; // l21_easy_word_1_image_2
          $inputNameImage3 = "{$inputName}_image_3"; // l21_easy_word_1_image_2
          $inputNameImage4 = "{$inputName}_image_4"; // l21_easy_word_1_image_2

          $choiceAnswer = "{$inputName}_correct_word"; // l21_easy_word_1_correct_word

          // Check if an image is uploaded
          if (!empty($_FILES[$inputNameImage]['tmp_name'])) {
               $imageData = file_get_contents($_FILES[$inputNameImage]['tmp_name']);
               $imageData = mysqli_real_escape_string($conn, $imageData);

               // Update the database with the image
               $query = "INSERT INTO `word_sound_activity_4`
                        (`user_ID`, `{$inputNameImage}`, `{$choiceAnswer}`)
                      VALUES ('$user_ID', '$imageData', '{$_POST[$choiceAnswer]}')
                      ON DUPLICATE KEY UPDATE
                        `{$inputNameImage}` = VALUES(`{$inputNameImage}`),
                        `{$choiceAnswer}` = VALUES(`{$choiceAnswer}`)";  
          } else {
               // Update the database without the image
               $query = "INSERT INTO `word_sound_activity_4`
                        (`user_ID`, `{$choiceAnswer}`)
                      VALUES ('$user_ID', '{$_POST[$choiceAnswer]}')
                      ON DUPLICATE KEY UPDATE
                        `{$choiceAnswer}` = VALUES(`{$choiceAnswer}`)";
          }


          // Check if an image is uploaded
          if (!empty($_FILES[$inputNameImage2]['tmp_name'])) {
               $imageData2 = file_get_contents($_FILES[$inputNameImage2]['tmp_name']);
               $imageData2 = mysqli_real_escape_string($conn, $imageData2);

               // Update the database with the image
               $query2 = "INSERT INTO `word_sound_activity_4`
                        (`user_ID`, `{$inputNameImage2}`, `{$choiceAnswer}`)
                      VALUES ('$user_ID', '$imageData2', '{$_POST[$choiceAnswer]}')
                      ON DUPLICATE KEY UPDATE
                        `{$inputNameImage2}` = VALUES(`{$inputNameImage2}`),
                        `{$choiceAnswer}` = VALUES(`{$choiceAnswer}`)";  
          } else {
               // Update the database without the image
               $query2 = "INSERT INTO `word_sound_activity_4`
                        (`user_ID`, `{$choiceAnswer}`)
                      VALUES ('$user_ID', '{$_POST[$choiceAnswer]}')
                      ON DUPLICATE KEY UPDATE
                        `{$choiceAnswer}` = VALUES(`{$choiceAnswer}`)";
          }

          // Check if an image is uploaded
          if (!empty($_FILES[$inputNameImage3]['tmp_name'])) {
               $imageData3 = file_get_contents($_FILES[$inputNameImage3]['tmp_name']);
               $imageData3 = mysqli_real_escape_string($conn, $imageData3);

               // Update the database with the image
               $query3 = "INSERT INTO `word_sound_activity_4`
                         (`user_ID`, `{$inputNameImage3}`, `{$choiceAnswer}`)
                         VALUES ('$user_ID', '$imageData3', '{$_POST[$choiceAnswer]}')
                         ON DUPLICATE KEY UPDATE
                         `{$inputNameImage3}` = VALUES(`{$inputNameImage3}`),
                         `{$choiceAnswer}` = VALUES(`{$choiceAnswer}`)";  
          } else {
               // Update the database without the image
               $query3 = "INSERT INTO `word_sound_activity_4`
                         (`user_ID`, `{$choiceAnswer}`)
                         VALUES ('$user_ID', '{$_POST[$choiceAnswer]}')
                         ON DUPLICATE KEY UPDATE
                         `{$choiceAnswer}` = VALUES(`{$choiceAnswer}`)";
          }

          // Check if an image is uploaded
          if (!empty($_FILES[$inputNameImage4]['tmp_name'])) {
               $imageData4 = file_get_contents($_FILES[$inputNameImage4]['tmp_name']);
               $imageData4 = mysqli_real_escape_string($conn, $imageData4);

               // Update the database with the image
               $query4 = "INSERT INTO `word_sound_activity_4`
                        (`user_ID`, `{$inputNameImage4}`, `{$choiceAnswer}`)
                      VALUES ('$user_ID', '$imageData4', '{$_POST[$choiceAnswer]}')
                      ON DUPLICATE KEY UPDATE
                        `{$inputNameImage4}` = VALUES(`{$inputNameImage4}`),
                        `{$choiceAnswer}` = VALUES(`{$choiceAnswer}`)";  
          } else {
               // Update the database without the image
               $query4 = "INSERT INTO `word_sound_activity_4`
                        (`user_ID`, `{$choiceAnswer}`)
                      VALUES ('$user_ID', '{$_POST[$choiceAnswer]}')
                      ON DUPLICATE KEY UPDATE
                        `{$choiceAnswer}` = VALUES(`{$choiceAnswer}`)";
          }

          // Execute the query
          $result = mysqli_query($conn, $query);
          $result2 = mysqli_query($conn, $query2);
          $result3 = mysqli_query($conn, $query3);
          $result4 = mysqli_query($conn, $query4);

          // Check for errors
          if (!$result) {
               echo "Error: " . mysqli_error($conn);
               // Handle the error as needed
          } else {
               echo "Query executed successfully.";
               // Start the session and set the alert
          }
     }

     // Close the database connection
     mysqli_close($conn);

     session_start();
     $_SESSION['alertThis'] = $alert;

     // Redirect to the specified return page
     header("Location: $return");
     exit();

}

?>