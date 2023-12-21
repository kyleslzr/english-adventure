<!-- lesson 1 activity -->
<?php
     include "function/conn.php";

     // Check for a successful connection
     if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
     }
     $user_ID = $_SESSION['user_ID'];

     // Retrieve data for l11_easy
     $retrieveQuery = "SELECT * FROM word_sound_activity_3 WHERE user_ID = ?";
     $retrieveStmt = mysqli_prepare($conn, $retrieveQuery);
     mysqli_stmt_bind_param($retrieveStmt, "i", $user_ID);
     mysqli_stmt_execute($retrieveStmt);

     // Fetch the result
     $result = mysqli_stmt_get_result($retrieveStmt);

     // Display retrieved data in a loop (adjust as needed)
     $count = 1;

     while ($row = mysqli_fetch_assoc($result)) {
     for ($i = 1; $i <= 6; $i++) {
          $inputNameImage = "l31_easy_word_" . $count . "_image";
          $statusName = "l31_easy_word_" . $count . "_correct_word";

          ${$inputNameImage} = base64_encode($row[$inputNameImage]);
          ${$statusName} = $row[$statusName];

          $count++;
     }
     }

     // Check if no records were found
     if (mysqli_num_rows($result) === 0) {
     echo "No data found for l21_easy.";
     }

     mysqli_stmt_close($retrieveStmt);

     // Retrieve data for l11_average
     $retrieveQuery = "SELECT * FROM word_sound_activity_3 WHERE user_ID = ?";
     $retrieveStmt = mysqli_prepare($conn, $retrieveQuery);
     mysqli_stmt_bind_param($retrieveStmt, "i", $user_ID);
     mysqli_stmt_execute($retrieveStmt);

     // Fetch the result
     $result = mysqli_stmt_get_result($retrieveStmt);

     // Display retrieved data in a loop (adjust as needed)
     $count = 1;

     while ($row = mysqli_fetch_assoc($result)) {
     for ($i = 1; $i <= 6; $i++) {
          $inputNameImage = "l31_average_word_" . $count . "_image";
          $statusName = "l31_average_word_" . $count . "_correct_word";

          ${$inputNameImage} = base64_encode($row[$inputNameImage]);
          ${$statusName} = $row[$statusName];

          $count++;
     }
     }

     // Check if no records were found
     if (mysqli_num_rows($result) === 0) {
     echo "No data found for l21_average.";
     }

     mysqli_stmt_close($retrieveStmt);

     // Retrieve data for l11_difficult
     $retrieveQuery = "SELECT * FROM word_sound_activity_3 WHERE user_ID = ?";
     $retrieveStmt = mysqli_prepare($conn, $retrieveQuery);
     mysqli_stmt_bind_param($retrieveStmt, "i", $user_ID);
     mysqli_stmt_execute($retrieveStmt);

     // Fetch the result
     $result = mysqli_stmt_get_result($retrieveStmt);

     // Display retrieved data in a loop (adjust as needed)
     $count = 1;

     while ($row = mysqli_fetch_assoc($result)) {
     for ($i = 1; $i <= 6; $i++) {
          $inputNameImage = "l31_difficult_word_" . $count . "_image";
          $statusName = "l31_difficult_word_" . $count . "_correct_word";

          ${$inputNameImage} = base64_encode($row[$inputNameImage]);
          ${$statusName} = $row[$statusName];

          $count++;
     }
     }

     // Check if no records were found
     if (mysqli_num_rows($result) === 0) {
     echo "No data found for l21_difficult.";
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
     $retrieveQuery = "SELECT * FROM recognizing_word_activity_2 WHERE user_ID = ?";
     $retrieveStmt = mysqli_prepare($conn, $retrieveQuery);
     mysqli_stmt_bind_param($retrieveStmt, "i", $user_ID);
     mysqli_stmt_execute($retrieveStmt);

     // Fetch the result
     $result = mysqli_stmt_get_result($retrieveStmt);

     // Display retrieved data in a loop (adjust as needed)
     $count = 1;

     while ($row = mysqli_fetch_assoc($result)) {
     for ($i = 1; $i <= 10; $i++) {
          $inputName = "l32_easy_statement_$i";
          $inputNameImage = $inputName . "_image";
          $correctAnswer1 = $inputName . "_choice_answer_1";
          $correctAnswer2 = $inputName . "_choice_answer_2";
          $theCorrectAnswer = $inputName . "_status";
          // l22_easy_statement_1_choice_answer_1

          ${$inputName} = $row[$inputName];
          ${$correctAnswer1} = $row[$correctAnswer1];
          ${$correctAnswer2} = $row[$correctAnswer2];
          ${$theCorrectAnswer} = $row[$theCorrectAnswer];
          ${$inputName. "_status_for_1"} = $row[$theCorrectAnswer] === 1 ? 'true' : 'false';
          ${$inputName. "_status_for_2"} = $row[$theCorrectAnswer] === 2 ? 'true' : 'false';
          ${$statusName} = $row[$statusName] === 'correct' ? 'true' : 'false';
          ${$inputNameImage} = base64_encode($row[$inputNameImage]);

          $count++;
     }
     }

     // Check if no records were found
     if (mysqli_num_rows($result) === 0) {
     echo "No data found for l31_easy.";
     }

     mysqli_stmt_close($retrieveStmt);

     // Retrieve data for l11_average
     $retrieveQuery = "SELECT * FROM recognizing_word_activity_2 WHERE user_ID = ?";
     $retrieveStmt = mysqli_prepare($conn, $retrieveQuery);
     mysqli_stmt_bind_param($retrieveStmt, "i", $user_ID);
     mysqli_stmt_execute($retrieveStmt);

     // Fetch the result
     $result = mysqli_stmt_get_result($retrieveStmt);

     // Display retrieved data in a loop (adjust as needed)
     $count = 1;

     while ($row = mysqli_fetch_assoc($result)) {
     for ($i = 1; $i <= 10; $i++) {
          $inputName = "l32_average_statement_$i";
          $inputNameImage = $inputName . "_image";
          $correctAnswer1 = $inputName . "_choice_answer_1";
          $correctAnswer2 = $inputName . "_choice_answer_2";
          $theCorrectAnswer = $inputName . "_status";
          // l22_easy_statement_1_choice_answer_1

          ${$inputName} = $row[$inputName];
          ${$correctAnswer1} = $row[$correctAnswer1];
          ${$correctAnswer2} = $row[$correctAnswer2];
          ${$theCorrectAnswer} = $row[$theCorrectAnswer];
          ${$inputName. "_status_for_1"} = $row[$theCorrectAnswer] === 1 ? 'true' : 'false';
          ${$inputName. "_status_for_2"} = $row[$theCorrectAnswer] === 2 ? 'true' : 'false';
          ${$statusName} = $row[$statusName] === 'correct' ? 'true' : 'false';
          ${$inputNameImage} = base64_encode($row[$inputNameImage]);

          $count++;
     }
     }

     // Check if no records were found
     if (mysqli_num_rows($result) === 0) {
     echo "No data found for l31_average.";
     }

     mysqli_stmt_close($retrieveStmt);

     // Retrieve data for l11_difficult
     $retrieveQuery = "SELECT * FROM recognizing_word_activity_2 WHERE user_ID = ?";
     $retrieveStmt = mysqli_prepare($conn, $retrieveQuery);
     mysqli_stmt_bind_param($retrieveStmt, "i", $user_ID);
     mysqli_stmt_execute($retrieveStmt);

     // Fetch the result
     $result = mysqli_stmt_get_result($retrieveStmt);

     // Display retrieved data in a loop (adjust as needed)
     $count = 1;

     while ($row = mysqli_fetch_assoc($result)) {
     for ($i = 1; $i <= 10; $i++) {
          $inputName = "l32_difficult_statement_$i";
          $inputNameImage = $inputName . "_image";
          $correctAnswer1 = $inputName . "_choice_answer_1";
          $correctAnswer2 = $inputName . "_choice_answer_2";
          $theCorrectAnswer = $inputName . "_status";
          // l22_easy_statement_1_choice_answer_1

          ${$inputName} = $row[$inputName];
          ${$correctAnswer1} = $row[$correctAnswer1];
          ${$correctAnswer2} = $row[$correctAnswer2];
          ${$theCorrectAnswer} = $row[$theCorrectAnswer];
          ${$inputName. "_status_for_1"} = $row[$theCorrectAnswer] === 1 ? 'true' : 'false';
          ${$inputName. "_status_for_2"} = $row[$theCorrectAnswer] === 2 ? 'true' : 'false';
          ${$statusName} = $row[$statusName] === 'correct' ? 'true' : 'false';
          ${$inputNameImage} = base64_encode($row[$inputNameImage]);

          $count++;
     }
     }

     // Check if no records were found
     if (mysqli_num_rows($result) === 0) {
     echo "No data found for l31_difficult.";
     }

     mysqli_stmt_close($retrieveStmt);

     // Close the database connection
     mysqli_close($conn);
?>