<?php 
     require "common/get-session-id.php";
     $returnToThisPage = "../lesson5-maintenance.php";   
?>
<?php
     include "function/conn.php";

     // Check for a successful connection
     if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
     }

     // Assuming user_ID is set in the session, adjust as needed
     if (isset($_SESSION['user_ID'])) {
     $user_ID = $_SESSION['user_ID'];

     // Retrieval of data
     $retrieveQuery = "SELECT * FROM lesson_titles WHERE user_ID = ? AND lesson_activity_number IN (51, 52)";
     $retrieveStmt = mysqli_prepare($conn, $retrieveQuery);
     mysqli_stmt_bind_param($retrieveStmt, "i", $user_ID);
     mysqli_stmt_execute($retrieveStmt);

     // Fetch the result
     $result = mysqli_stmt_get_result($retrieveStmt);

     // Display retrieved data in a loop (adjust as needed)
     $count = 1;

     while ($row = mysqli_fetch_assoc($result)) {
         ${"lesson" . $count} = $row['lesson_title'];
         ${"lessonDirections" . $count} = $row['directions'];
         $count++;
     }     

     // Check if no records were found
     if (mysqli_num_rows($result) === 0) {
          echo "No data found.";
     }

     mysqli_stmt_close($retrieveStmt);
     } else {
          echo "User ID not set in the session.";
     }

     mysqli_close($conn);
?>
<?php
     include "function/conn.php";

     // Check for a successful connection
     if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
     }

     // Assuming user_ID is set in the session, adjust as needed
     if (isset($_SESSION['user_ID'])) {
     $user_ID = $_SESSION['user_ID'];

     // Retrieval of data
     $retrieveQuery = "SELECT * FROM lesson_tutorial_url WHERE user_ID = ? AND lesson_activity_number IN (51, 52)";
     $retrieveStmt = mysqli_prepare($conn, $retrieveQuery);
     mysqli_stmt_bind_param($retrieveStmt, "i", $user_ID);
     mysqli_stmt_execute($retrieveStmt);

     // Fetch the result
     $result = mysqli_stmt_get_result($retrieveStmt);

     // Display retrieved data in a loop (adjust as needed)
     $count = 1;

     while ($row = mysqli_fetch_assoc($result)) {
         ${"lesson_tutorial_url_" . $count} = $row['lesson_tutorial_url'];
         $count++;
     }     

     // Check if no records were found
     if (mysqli_num_rows($result) === 0) {
          echo "No data found.";
     }

     mysqli_stmt_close($retrieveStmt);
     } else {
          echo "User ID not set in the session.";
     }

     mysqli_close($conn);
?>

<!-- lesson 1 activity -->
<?php
     include "function/conn.php";

     // Check for a successful connection
     if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
     }
     $user_ID = $_SESSION['user_ID'];

     // Retrieve data for l11_easy
     $retrieveQuery = "SELECT * FROM word_sound_activity_5 WHERE user_ID = ?";
     $retrieveStmt = mysqli_prepare($conn, $retrieveQuery);
     mysqli_stmt_bind_param($retrieveStmt, "i", $user_ID);
     mysqli_stmt_execute($retrieveStmt);

     // Fetch the result
     $result = mysqli_stmt_get_result($retrieveStmt);

     // Display retrieved data in a loop (adjust as needed)
     $count = 1;

     while ($row = mysqli_fetch_assoc($result)) {
     for ($i = 1; $i <= 10; $i++) {
          $inputNameImage = "l51_easy_word_" . $count . "_image";
          $inputNameImage2 = "l51_easy_word_" . $count . "_image_2";
          $inputNameImage3 = "l51_easy_word_" . $count . "_image_3";
          $inputNameImage4 = "l51_easy_word_" . $count . "_image_4";
          $statusName = "l51_easy_word_" . $count . "_correct_word";

          ${$inputNameImage} = base64_encode($row[$inputNameImage]);
          ${$inputNameImage2} = base64_encode($row[$inputNameImage2]);
          ${$inputNameImage3} = base64_encode($row[$inputNameImage3]);
          ${$inputNameImage4} = base64_encode($row[$inputNameImage4]);
          ${$statusName} = $row[$statusName];

          $count++;
     }
     }

     // Check if no records were found
     if (mysqli_num_rows($result) === 0) {
     echo "No data found for l51_easy.";
     }

     mysqli_stmt_close($retrieveStmt);

     // Retrieve data for l11_average
     $retrieveQuery = "SELECT * FROM word_sound_activity_5 WHERE user_ID = ?";
     $retrieveStmt = mysqli_prepare($conn, $retrieveQuery);
     mysqli_stmt_bind_param($retrieveStmt, "i", $user_ID);
     mysqli_stmt_execute($retrieveStmt);

     // Fetch the result
     $result = mysqli_stmt_get_result($retrieveStmt);

     // Display retrieved data in a loop (adjust as needed)
     $count = 1;

     while ($row = mysqli_fetch_assoc($result)) {
     for ($i = 1; $i <= 10; $i++) {
          $inputNameImage = "l51_average_word_" . $count . "_image";
          $inputNameImage2 = "l51_average_word_" . $count . "_image_2";
          $inputNameImage3 = "l51_average_word_" . $count . "_image_3";
          $inputNameImage4 = "l51_average_word_" . $count . "_image_4";
          $statusName = "l51_average_word_" . $count . "_correct_word";

          ${$inputNameImage} = base64_encode($row[$inputNameImage]);
          ${$inputNameImage2} = base64_encode($row[$inputNameImage2]);
          ${$inputNameImage3} = base64_encode($row[$inputNameImage3]);
          ${$inputNameImage4} = base64_encode($row[$inputNameImage4]);
          ${$statusName} = $row[$statusName];

          $count++;
     }
     }

     // Check if no records were found
     if (mysqli_num_rows($result) === 0) {
     echo "No data found for l51_average.";
     }

     mysqli_stmt_close($retrieveStmt);

     // Retrieve data for l11_difficult
     $retrieveQuery = "SELECT * FROM word_sound_activity_5 WHERE user_ID = ?";
     $retrieveStmt = mysqli_prepare($conn, $retrieveQuery);
     mysqli_stmt_bind_param($retrieveStmt, "i", $user_ID);
     mysqli_stmt_execute($retrieveStmt);

     // Fetch the result
     $result = mysqli_stmt_get_result($retrieveStmt);

     // Display retrieved data in a loop (adjust as needed)
     $count = 1;

     while ($row = mysqli_fetch_assoc($result)) {
     for ($i = 1; $i <= 10; $i++) {
          $inputNameImage = "l51_difficult_word_" . $count . "_image";
          $inputNameImage2 = "l51_difficult_word_" . $count . "_image_2";
          $inputNameImage3 = "l51_difficult_word_" . $count . "_image_3";
          $inputNameImage4 = "l51_difficult_word_" . $count . "_image_4";
          $statusName = "l51_difficult_word_" . $count . "_correct_word";

          ${$inputNameImage} = base64_encode($row[$inputNameImage]);
          ${$inputNameImage2} = base64_encode($row[$inputNameImage2]);
          ${$inputNameImage3} = base64_encode($row[$inputNameImage3]);
          ${$inputNameImage4} = base64_encode($row[$inputNameImage4]);
          ${$statusName} = $row[$statusName];

          $count++;
     }
     }

     // Check if no records were found
     if (mysqli_num_rows($result) === 0) {
     echo "No data found for l51_difficult.";
     }

     mysqli_stmt_close($retrieveStmt);

     // Close the database connection
     mysqli_close($conn);
?>

<!-- lesson 2 activity -->
<?php
     include "function/conn.php";

     // Check for a successful connection
     if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
     }
     $user_ID = $_SESSION['user_ID'];

     // Retrieve data for l11_easy
     $retrieveQuery = "SELECT * FROM recognizing_word_activity_3 WHERE user_ID = ?";
     $retrieveStmt = mysqli_prepare($conn, $retrieveQuery);
     mysqli_stmt_bind_param($retrieveStmt, "i", $user_ID);
     mysqli_stmt_execute($retrieveStmt);

     // Fetch the result
     $result = mysqli_stmt_get_result($retrieveStmt);

     // Display retrieved data in a loop (adjust as needed)
     $count = 1;

     while ($row = mysqli_fetch_assoc($result)) {
     for ($i = 1; $i <= 10; $i++) {
          $inputName = "l52_easy_statement_$i";
          $inputNameImage = $inputName . "_image";
          $correctAnswer1 = $inputName . "_choice_answer_1";
          $correctAnswer2 = $inputName . "_choice_answer_2";
          $theCorrectAnswer = $inputName . "_status";
          // l22_easy_statement_1_choice_answer_1

          ${$inputName} = $row[$inputName];
          ${$correctAnswer1} = $row[$correctAnswer1];
          ${$correctAnswer2} = $row[$correctAnswer2];
          ${$theCorrectAnswer} = $row[$theCorrectAnswer];
          ${$inputNameImage} = base64_encode($row[$inputNameImage]);

          $count++;
     }
     }

     // Check if no records were found
     if (mysqli_num_rows($result) === 0) {
     echo "No data found for l52_easy.";
     }

     mysqli_stmt_close($retrieveStmt);

     // Retrieve data for l11_average
     $retrieveQuery = "SELECT * FROM recognizing_word_activity_3 WHERE user_ID = ?";
     $retrieveStmt = mysqli_prepare($conn, $retrieveQuery);
     mysqli_stmt_bind_param($retrieveStmt, "i", $user_ID);
     mysqli_stmt_execute($retrieveStmt);

     // Fetch the result
     $result = mysqli_stmt_get_result($retrieveStmt);

     // Display retrieved data in a loop (adjust as needed)
     $count = 1;

     while ($row = mysqli_fetch_assoc($result)) {
     for ($i = 1; $i <= 10; $i++) {
          $inputName = "l52_average_statement_$i";
          $inputNameImage = $inputName . "_image";
          $correctAnswer1 = $inputName . "_choice_answer_1";
          $correctAnswer2 = $inputName . "_choice_answer_2";
          $theCorrectAnswer = $inputName . "_status";
          // l22_easy_statement_1_choice_answer_1

          ${$inputName} = $row[$inputName];
          ${$correctAnswer1} = $row[$correctAnswer1];
          ${$correctAnswer2} = $row[$correctAnswer2];
          ${$theCorrectAnswer} = $row[$theCorrectAnswer];
          ${$inputNameImage} = base64_encode($row[$inputNameImage]);

          $count++;
     }
     }

     // Check if no records were found
     if (mysqli_num_rows($result) === 0) {
     echo "No data found for l52_average.";
     }

     mysqli_stmt_close($retrieveStmt);

     // Retrieve data for l11_difficult
     $retrieveQuery = "SELECT * FROM recognizing_word_activity_3 WHERE user_ID = ?";
     $retrieveStmt = mysqli_prepare($conn, $retrieveQuery);
     mysqli_stmt_bind_param($retrieveStmt, "i", $user_ID);
     mysqli_stmt_execute($retrieveStmt);

     // Fetch the result
     $result = mysqli_stmt_get_result($retrieveStmt);

     // Display retrieved data in a loop (adjust as needed)
     $count = 1;

     while ($row = mysqli_fetch_assoc($result)) {
     for ($i = 1; $i <= 10; $i++) {
          $inputName = "l52_difficult_statement_$i";
          $inputNameImage = $inputName . "_image";
          $correctAnswer1 = $inputName . "_choice_answer_1";
          $correctAnswer2 = $inputName . "_choice_answer_2";
          $theCorrectAnswer = $inputName . "_status";
          // l22_easy_statement_1_choice_answer_1

          ${$inputName} = $row[$inputName];
          ${$correctAnswer1} = $row[$correctAnswer1];
          ${$correctAnswer2} = $row[$correctAnswer2];
          ${$theCorrectAnswer} = $row[$theCorrectAnswer];
          ${$inputNameImage} = base64_encode($row[$inputNameImage]);

          $count++;
     }
     }

     // Check if no records were found
     if (mysqli_num_rows($result) === 0) {
     echo "No data found for l52_difficult.";
     }

     mysqli_stmt_close($retrieveStmt);

     // Close the database connection
     mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
          <title>Lesson 5 - Maintenance</title>
          <style>
               body {
                    overflow: hidden;
                    margin: 0;
                    padding: 0;
                    height: 100vh;
                    background-image: url('mbg.jpg');
                    background-size: cover;
                    background-repeat: no-repeat;
                    font-family: Arial, sans-serif;
               }

               .lesson-title {
                    font-size: 50px;
                    font-weight: bold;
                    margin-top: 16px;
                    background-color: #00741E;
                    padding: 0px 20px;
                    border-radius: 5px;
                    cursor: default;
                    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
                    border: 4px solid #fff;
                    color: white;
                    width: fit-content;
                    z-index: 10;
               }

               #board {
                    background-image: url('images/board-bg.png');
                    width: 1100px;
                    height: 660px;
                    background-size: contain;
                    background-repeat: no-repeat;
                    position: absolute;
                    bottom: 0;
                    padding: 86px;
                    padding-bottom: 155px;
               }

               .lesson-label {
                    color: white;
                    background-color: #00741E;
                    padding: 10px 20px;
                    font-size: 30px;
                    font-weight: bolder;
                    border-radius: 5px;
                    cursor: default;
                    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
                    width: 100%;
                    text-align: center;
                    display: flex;
                    justify-content: center;
                    align-items: center;
               }

               .button {
                    background-color: #ffcc00;
                    color: #00741E;
                    padding: 11px 15px;
                    border-radius: 50px;
                    font-size: 30px;
                    font-weight: bold;
                    cursor: pointer;
                    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
                    top: 1px;
                    margin-right: 7px;
                    text-decoration: none;
                    border: none;
               }

               .button div div svg {
                    fill: #00741e;
               }

               .button:hover, .write-btn:hover, .go-back:hover {
                    filter: brightness(.8);
               }

               .image-container {
                    min-height: 230px;
                    height: 230px;
                    width: auto;
                    margin: 14px;
               }
          </style>
     </head>

     <body class="position-relative">
          <a id="" class="go-back position-absolute end-0 bottom-0 m-3" href="userhome.php">
               <img src="home.png" width="100px"/>
          </a>

          <div class="container-xxl">
               <div>
                    <div class="d-flex justify-content-center">
                         <div class="lesson-title text-center">Lesson 5- Maintenance</div>
                    </div>
               </div>
               <div class="d-flex justify-content-center">
                    <div id="board" class="d-flex justify-content-center align-items-center">
                         <div>
                              <div class="m-2">
                                   <div class="d-flex justify-content-center">
                                        <div class="lesson-label">
                                             <?= $lesson1 ?>
                                             <div class="write-btn d-flex justify-content-center align-items-center" type="button" data-toggle="modal" data-target="#lesson-title-act1">
                                                  <svg style="fill: white; margin-left: 8px; margin-bottom: 8px;" xmlns="http://www.w3.org/2000/svg" height="1em"  viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="mt-4 mb-4 justify-content-center d-flex">
                                        <button class="button" style="background-color: #ffdf7e;" data-toggle="modal" data-target="#tutorialVideoModal-act1">
                                             <div style="display: flex;align-items: center;" >
                                                  <div class="d-flex justify-content-center align-items-center">
                                                       <svg style="margin-right: 8px;" xmlns="http://www.w3.org/2000/svg" height="1em"  viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg>
                                                  </div>
                                                  Tutorial
                                             </div>
                                        </button>
                                        <button class="button" data-toggle="modal" data-target="#easy-act1">
                                             <div style="display: flex;align-items: center;" >
                                                  <div class="d-flex justify-content-center align-items-center">
                                                       <svg style="margin-right: 8px;" xmlns="http://www.w3.org/2000/svg" height="1em"  viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg>
                                                  </div>
                                                  EASY
                                             </div>
                                        </button>
                                        <button class="button" data-toggle="modal" data-target="#average-act1">
                                             <div style="display: flex;align-items: center;" >
                                                  <div class="d-flex justify-content-center align-items-center">
                                                       <svg style="margin-right: 8px;" xmlns="http://www.w3.org/2000/svg" height="1em"  viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg>
                                                  </div>
                                                  AVERAGE
                                             </div>
                                        </button>
                                        <button class="button" data-toggle="modal" data-target="#difficult-act1">
                                             <div style="display: flex;align-items: center;" >
                                                  <div class="d-flex justify-content-center align-items-center">
                                                       <svg style="margin-right: 8px;" xmlns="http://www.w3.org/2000/svg" height="1em"  viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg>
                                                  </div>
                                                  DIFFICULT
                                             </div>
                                        </button>
                                   </div>
                              </div>
                              <div class="m-2">
                                   <div class="d-flex justify-content-center">
                                        <div class="lesson-label">
                                             <?= $lesson2 ?>
                                             <div class="write-btn d-flex justify-content-center align-items-center" type="button" data-toggle="modal" data-target="#lesson-title-act2">
                                                  <svg style="fill: white; margin-left: 8px; margin-bottom: 8px;" xmlns="http://www.w3.org/2000/svg" height="1em"  viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="mt-4 mb-4 justify-content-center d-flex">
                                        <button class="button" style="background-color: #ffdf7e;"data-toggle="modal" data-target="#tutorialVideoModal-act2">
                                             <div style="display: flex;align-items: center;" >
                                                  <div class="d-flex justify-content-center align-items-center">
                                                       <svg style="margin-right: 8px;" xmlns="http://www.w3.org/2000/svg" height="1em"  viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg>
                                                  </div>
                                                  Tutorial
                                             </div>
                                        </button>
                                        <button class="button" data-toggle="modal" data-target="#easy-act2">
                                             <div style="display: flex;align-items: center;" >
                                                  <div class="d-flex justify-content-center align-items-center">
                                                       <svg style="margin-right: 8px;" xmlns="http://www.w3.org/2000/svg" height="1em"  viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg>
                                                  </div>
                                                  EASY
                                             </div>
                                        </button>
                                        <button class="button" data-toggle="modal" data-target="#average-act2">
                                             <div style="display: flex;align-items: center;" >
                                                  <div class="d-flex justify-content-center align-items-center">
                                                       <svg style="margin-right: 8px;" xmlns="http://www.w3.org/2000/svg" height="1em"  viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg>
                                                  </div>
                                                  AVERAGE
                                             </div>
                                        </button>
                                        <button class="button" data-toggle="modal" data-target="#difficult-act2">
                                             <div style="display: flex;align-items: center;">
                                                  <div class="d-flex justify-content-center align-items-center">
                                                       <svg style="margin-right: 8px;" xmlns="http://www.w3.org/2000/svg" height="1em"  viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg>
                                                  </div>
                                                  DIFFICULT
                                             </div>
                                        </button>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>

          <!-- modals -->
          <!-- act 1 title -->
          <div class="modal fade" id="lesson-title-act1" tabindex="-1" role="dialog" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                         <form action="function/save-lesson-title.php" method="post">
                              <div class="modal-header d-block">
                                   <h5 class="modal-title" id="tutorialVideoModalLabel">Lesson 5 Activity 1 Title and Directions</h5>
                              </div>
                              <div class="modal-body">
                                   <div>
                                        <div class="input-group mb-3">
                                             <input type="hidden" name="return" value="<?= $returnToThisPage ?>">
                                             <input type="hidden" name="alert" value="Lesson 5 Activity 1 title has been successfully updated.">
                                             <input type="hidden" name="user_ID" value="<?= $user_ID ?>">
                                             <input type="hidden" name="lesson_activity_number" value="51">
                                             <div class="w-100">
                                                  <input type="text" class="rounded form-control" name="lesson_title" placeholder="Enter Title" aria-describedby="basic-addon1" required value="<?= $lesson1 ?>">
                                                  <textarea name="lesson_directions" class="h-75 mt-3 rounded form-control" placeholder="Enter Activity Directions" aria-describedby="basic-addon1" required><?= $lessonDirections1 ?></textarea>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="modal-footer">
                                   <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                                   <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                         </form>
                    </div>
               </div>
          </div>

          <!-- act 2 title -->
          <div class="modal fade" id="lesson-title-act2" tabindex="-1" role="dialog" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                         <form action="function/save-lesson-title.php" method="post">
                              <div class="modal-header d-block">
                                   <h5 class="modal-title" id="tutorialVideoModalLabel">Lesson 5 Activity 2 Title and Directions</h5>
                              </div>
                              <div class="modal-body">
                                   <div>
                                        <div class="input-group mb-3">
                                             <input type="hidden" name="return" value="<?= $returnToThisPage ?>">
                                             <input type="hidden" name="alert" value="Lesson 5 Activity 2 title has been successfully updated.">
                                             <input type="hidden" name="user_ID" value="<?= $user_ID ?>">
                                             <input type="hidden" name="lesson_activity_number" value="52">
                                             <div class="w-100">
                                                  <input type="text" class="rounded form-control" name="lesson_title" placeholder="Enter Title" aria-describedby="basic-addon1" required value="<?= $lesson2 ?>">
                                                  <textarea name="lesson_directions" class="h-75 mt-3 rounded form-control" placeholder="Enter Activity Directions" aria-describedby="basic-addon1" required><?= $lessonDirections2 ?></textarea>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="modal-footer">
                                   <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                                   <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                         </form>
                    </div>
               </div>
          </div>

          <!-- act 1 tutorial -->
          <div class="modal fade" id="tutorialVideoModal-act1" tabindex="-1" role="dialog" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                         <form action="function/save-lesson-tutorial-url.php" method="post" enctype="multipart/form-data">
                              <div class="modal-header d-block">
                                   <h5 class="modal-title" id="tutorialVideoModalLabel">Youtube Tutorial Video Link for <?= $lesson1 ?></h5>
                              </div>
                              <div class="modal-body">
                                        <div>
                                             <div class="input-group mb-3">
                                                  <input type="hidden" name="return" value="<?= $returnToThisPage ?>">
                                                  <input type="hidden" name="alert" value="Lesson 5 Activity 1 tutorial has been successfully updated.">
                                                  <input type="hidden" name="user_ID" value="<?= $user_ID ?>">
                                                  <input type="hidden" name="lesson_activity_number" value="51">
                                                  <input type="url" name="url" class="rounded form-control" placeholder="Enter YouTube link" aria-describedby="basic-addon1" required value="<?= $lesson_tutorial_url_1 ?>">
                                             </div>
                                             <!-- <div class="alert alert-info mt-3" role="alert">
                                                  Submit a YouTube link to your tutorial video.
                                             </div> -->
                                        </div>
                              </div>
                              <div class="modal-footer">
                                   <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                                   <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                         </form>
                    </div>
               </div>
          </div>

          <!-- act 2 tutorial -->
          <div class="modal fade" id="tutorialVideoModal-act2" tabindex="-1" role="dialog" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                         <form action="function/save-lesson-tutorial-url.php" method="post" enctype="multipart/form-data">
                              <div class="modal-header d-block">
                                   <h5 class="modal-title" id="tutorialVideoModalLabel">Youtube Tutorial Video Link for <?= $lesson2 ?></h5>
                              </div>
                              <div class="modal-body">
                                        <div>
                                             <div class="input-group mb-3">
                                                  <input type="hidden" name="return" value="<?= $returnToThisPage ?>">
                                                  <input type="hidden" name="alert" value="Lesson 5 Activity 2 tutorial has been successfully updated.">
                                                  <input type="hidden" name="user_ID" value="<?= $user_ID ?>">
                                                  <input type="hidden" name="lesson_activity_number" value="52">
                                                  <input type="url" name="url" class="rounded form-control" placeholder="Enter YouTube link" aria-describedby="basic-addon1" required value="<?= $lesson_tutorial_url_2 ?>">
                                             </div>
                                             <!-- <div class="alert alert-info mt-3" role="alert">
                                                  Submit a YouTube link to your tutorial video.
                                             </div> -->
                                        </div>
                              </div>
                              <div class="modal-footer">
                                   <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                                   <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                         </form>
                    </div>
               </div>
          </div>

          <!-- act 1 form -->
               <?php
               $difficultyLevels = ['easy', 'average', 'difficult'];
               $lesson = "l51";


               foreach ($difficultyLevels as $difficulty) {
               ?>

               <!-- act 1 <?= $difficulty ?> -->
               <div class="modal fade" id="<?= $difficulty ?>-act1" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                         <div class="modal-content">
                              <form action="function/save-word-sound-5.php" enctype="multipart/form-data" method="post">
                                   <div class="modal-header d-block">
                                   <h5 class="modal-title" id="tutorialVideoModalLabel">Activity for <?= $lesson1 ?> - <?= ucfirst($difficulty) ?> Round</h5>
                                   </div>
                                   <div class="modal-body">
                                   <div>
                                        <div class="input-group mb-3">
                                             <input type="hidden" name="round" value="<?= $lesson ?>_<?= $difficulty ?>">
                                             <input type="hidden" name="return" value="<?= $returnToThisPage ?>">
                                             <input type="hidden" name="alert" value="Lesson 5 Activity 1 <?= $difficulty ?> round items have been successfully updated.">
                                             <input type="hidden" name="user_ID" value="<?= $user_ID ?>">
                                             <div style="width: 100%;">
                                                  <div>
                                                       <?php
                                                       for ($i = 1; $i <= 10; $i++) {
                                                       $inputName = "{$lesson}_{$difficulty}_word_$i";
                                                       // l21_easy_word_1_image
                                                       $correctAnswer = isset(${"{$lesson}_{$difficulty}_word_{$i}_correct_word"}) ? ${"{$lesson}_{$difficulty}_word_{$i}_correct_word"} : '';
                                                       // l21_easy_word_1_correct_word
                                                       $inputNameImage = "{$lesson}_{$difficulty}_word_{$i}_image";    
                                                       $inputNameImage2 = "{$lesson}_{$difficulty}_word_{$i}_image_2";    
                                                       $inputNameImage3 = "{$lesson}_{$difficulty}_word_{$i}_image_3";    
                                                       $inputNameImage4 = "{$lesson}_{$difficulty}_word_{$i}_image_4";     
                                                       $inputNameImageValue = isset(${"{$lesson}_{$difficulty}_word_{$i}_image"}) ? ${"{$lesson}_{$difficulty}_word_{$i}_image"} : ''; 
                                                       $inputNameImageValue2 = isset(${"{$lesson}_{$difficulty}_word_{$i}_image_2"}) ? ${"{$lesson}_{$difficulty}_word_{$i}_image_2"} : ''; 
                                                       $inputNameImageValue3 = isset(${"{$lesson}_{$difficulty}_word_{$i}_image_3"}) ? ${"{$lesson}_{$difficulty}_word_{$i}_image_3"} : ''; 
                                                       $inputNameImageValue4 = isset(${"{$lesson}_{$difficulty}_word_{$i}_image_4"}) ? ${"{$lesson}_{$difficulty}_word_{$i}_image_4"} : ''; 
                                                       $inputNameImageShow = empty(${"{$lesson}_{$difficulty}_word_{$i}_image"}) ? 'd-none' : 'd-block mb-4';
                                                       $inputNameImageShow2 = empty(${"{$lesson}_{$difficulty}_word_{$i}_image_2"}) ? 'd-none' : 'd-block mb-4';
                                                       $inputNameImageShow3 = empty(${"{$lesson}_{$difficulty}_word_{$i}_image_3"}) ? 'd-none' : 'd-block mb-4';
                                                       $inputNameImageShow4 = empty(${"{$lesson}_{$difficulty}_word_{$i}_image_4"}) ? 'd-none' : 'd-block mb-4';              
                                                  
                                                       echo '
                                                       <div class="mt-4">
                                                            <div class="d-flex">
                                                                 <span class="fs-4" style="width: 35px;">' . $i . '.</span>
                                                                 <div style="width: 92%;">
                                                                      <div class="row mb-3">
                                                                           <div class="col-6">
                                                                                <div class="d-flex justify-content-center image-container">
                                                                                     <img width="auto" src="data:image/png;base64,' . $inputNameImageValue . '" class="img-grid ' . $inputNameImageShow . '">
                                                                                </div>
                                                                                <input name="' . $inputNameImage . '" class="fs-5 rounded ms-2 form-control mb-2 mt-2" type="file" id="formFile" accept=".jpg, .jpeg, .png">
                                                                           </div>
                                                                           <div class="col-6">
                                                                                <div class="d-flex justify-content-center image-container">
                                                                                     <img width="auto" src="data:image/png;base64,' . $inputNameImageValue2 . '" class="img-grid ' . $inputNameImageShow2 . '">
                                                                                </div>
                                                                                <input name="' . $inputNameImage2 . '" class="fs-5 rounded ms-2 form-control mb-2 mt-2" type="file" id="formFile" accept=".jpg, .jpeg, .png">
                                                                           </div>
                                                                           <div class="col-6">
                                                                                <div class="d-flex justify-content-center image-container">
                                                                                     <img width="auto" src="data:image/png;base64,' . $inputNameImageValue3 . '" class="img-grid ' . $inputNameImageShow3 . '">
                                                                                </div>
                                                                                <input name="' . $inputNameImage3 . '" class="fs-5 rounded ms-2 form-control mb-2 mt-2" type="file" id="formFile" accept=".jpg, .jpeg, .png">
                                                                           </div>
                                                                           <div class="col-6">
                                                                                <div class="d-flex justify-content-center image-container">
                                                                                     <img width="auto" src="data:image/png;base64,' . $inputNameImageValue4 . '" class="img-grid ' . $inputNameImageShow4 . '">
                                                                                </div>
                                                                                <input name="' . $inputNameImage4 . '" class="fs-5 rounded ms-2 form-control mb-2 mt-2" type="file" id="formFile" accept=".jpg, .jpeg, .png">
                                                                           </div>
                                                                      </div>
                                                                           <input type="text" name="' . $inputName . '_correct_word" class="fs-5 rounded ms-2 form-control" placeholder="Enter 2nd choice" aria-describedby="basic-addon1" value="' . $correctAnswer . '" required>
                                                                 </div>
                                                            </div>
                                                       </div>';
                                                       }
                                                       ?>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   </div>
                                   <div class="modal-footer">
                                   <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                                   <button type="submit" class="btn btn-primary">Submit</button>
                                   </div>
                              </form>
                         </div>
                    </div>
               </div>
               <?php
               }
               ?>
          <!-- act 1 form -->

          
          <!-- act 2 form -->
          <?php
               $difficultyLevels = ['easy', 'average', 'difficult'];
               $lesson = "l52";


               foreach ($difficultyLevels as $difficulty) {
               ?>

               <!-- act 1 <?= $difficulty ?> -->
               <div class="modal fade" id="<?= $difficulty ?>-act2" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                         <div class="modal-content">
                              <form action="function/save-recognizing-activity-3.php" enctype="multipart/form-data" method="post">
                                   <div class="modal-header d-block">
                                   <h5 class="modal-title" id="tutorialVideoModalLabel">Activity for <?= $lesson2 ?> - <?= ucfirst($difficulty) ?> Round</h5>
                                   </div>
                                   <div class="modal-body">
                                   <div>
                                        <div class="alert alert-info" role="alert">
                                             Enter the correct nouns under the statement input, separating the nouns using ','.
                                        </div>
                                        <div class="input-group mb-3">
                                             <input type="hidden" name="round" value="<?= $lesson ?>_<?= $difficulty ?>">
                                             <input type="hidden" name="return" value="<?= $returnToThisPage ?>">
                                             <input type="hidden" name="alert" value="Lesson 5 Activity 2 <?= $difficulty ?> round items have been successfully updated.">
                                             <input type="hidden" name="user_ID" value="<?= $user_ID ?>">
                                             <div style="width: 100%;">
                                                  <div>
                                                       <?php
                                                       for ($i = 1; $i <= 10; $i++) {
                                                       $inputName = "{$lesson}_{$difficulty}_statement_$i";
                                                       $inputValue = isset(${"{$lesson}_{$difficulty}_statement_$i"}) ? ${"{$lesson}_{$difficulty}_statement_$i"} : '';
                                                       $correctAnswer1 = isset(${"{$lesson}_{$difficulty}_statement_{$i}_choice_answer_1"}) ? ${"{$lesson}_{$difficulty}_statement_{$i}_choice_answer_1"} : '';
                                                       $correctAnswer2 = isset(${"{$lesson}_{$difficulty}_statement_{$i}_choice_answer_2"}) ? ${"{$lesson}_{$difficulty}_statement_{$i}_choice_answer_2"} : '';
                                                       $inputNameImage = "{$lesson}_{$difficulty}_statement_{$i}_image";      
                                                       $inputNameImageValue = isset(${"{$lesson}_{$difficulty}_statement_{$i}_image"}) ? ${"{$lesson}_{$difficulty}_statement_{$i}_image"} : '';   
                                                       $inputNameImageShow = empty(${"{$lesson}_{$difficulty}_statement_{$i}_image"}) ? 'd-none' : 'd-block mb-4';   
                                                       $inputStatus = isset(${"l52_{$difficulty}_statement_{$i}_status"}) ? ${"l52_{$difficulty}_statement_{$i}_status"} : '';               
                                                  
                                                       echo '
                                                       <div class="mt-4">
                                                            <div class="d-flex">
                                                                 <span class="fs-4" style="width: 35px;">' . $i . '.</span>
                                                                 <div style="width: 89%;">
                                                                      <div class="">
                                                                           <img width="100%" src="data:image/png;base64,' . $inputNameImageValue . '" class="' . $inputNameImageShow . '">
                                                                      </div>
                                                                      <input name="' . $inputName . '_image" class="fs-5 rounded ms-2 form-control mb-3" type="file" id="formFile" accept=".jpg, .jpeg, .png">
                                                                      <textarea name="' . $inputName . '" class="mb-3 fs-5 rounded ms-2 form-control" placeholder="Enter given item" aria-describedby="basic-addon1" required>' . $inputValue . '</textarea>
                                                                      <div class="d-flex align-items-center mb-3">
                                                                           <input class="form-check-input" type="radio" name="' . $inputName . '_status" id="inlineRadio2_' . $i . '" value="1" ' . ($inputStatus === 1 ? 'checked' : '') . ' required>
                                                                           <input type="text" name="' . $inputName . '_choice_answer_1" class="fs-5 rounded ms-2 form-control l52-' . $difficulty . '-option-1" placeholder="Enter 1st choice" aria-describedby="basic-addon1" value="' . $correctAnswer1 . '" required>
                                                                      </div>
                                                                      <div class="d-flex align-items-center">
                                                                           <input class="form-check-input" type="radio" name="' . $inputName . '_status" id="inlineRadio2_' . $i . '" value="2" ' . ($inputStatus === 2 ? 'checked' : '') . '>
                                                                           <input type="text" name="' . $inputName . '_choice_answer_2" class="fs-5 rounded ms-2 form-control l52-' . $difficulty . '-option-2" placeholder="Enter 2nd choice" aria-describedby="basic-addon1" value="' . $correctAnswer2 . '" required>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>';
                                                       }
                                                       ?>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   </div>
                                   <div class="modal-footer">
                                   <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                                   <button type="submit" class="btn btn-primary">Submit</button>
                                   </div>
                              </form>
                         </div>
                    </div>
               </div>
               <?php
               }
               ?>
          <!-- act 1 form -->

          <?php include "common/alert.php" ?>
          <script>
          function addInputListeners(className) {
          document.addEventListener('DOMContentLoaded', function () {
               // Get all inputs with the specified class
               var inputs = document.querySelectorAll('.' + className);

               // Add an input event listener to each input
               inputs.forEach(function (input) {
               input.addEventListener('input', function () {
                    // Get the value of the changed input
                    var value = input.value;

                    // Update the value of all inputs with the specified class
                    inputs.forEach(function (otherInput) {
                    otherInput.value = value;
                    });
               });
               });
          });
          }

          // Call the function for each class
          addInputListeners('l52-easy-option-1');
          addInputListeners('l52-average-option-1');
          addInputListeners('l52-difficult-option-1');
          addInputListeners('l52-easy-option-2');
          addInputListeners('l52-average-option-2');
          addInputListeners('l52-difficult-option-2');
          </script>
     </body>
</html>