<!-- lesson 1 activity -->
<?php
     include "function/conn.php";

     // Check for a successful connection
     if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
     }
     $user_ID = $_SESSION['user_ID'];

     // Retrieve data for l11_easy
     $retrieveQuery = "SELECT * FROM word_sound_activity_4 WHERE user_ID = ?";
     $retrieveStmt = mysqli_prepare($conn, $retrieveQuery);
     mysqli_stmt_bind_param($retrieveStmt, "i", $user_ID);
     mysqli_stmt_execute($retrieveStmt);

     // Fetch the result
     $result = mysqli_stmt_get_result($retrieveStmt);

     // Display retrieved data in a loop (adjust as needed)
     $count = 1;

     while ($row = mysqli_fetch_assoc($result)) {
     for ($i = 1; $i <= 10; $i++) {
          $inputNameImage = "l41_easy_word_" . $count . "_image";
          $inputNameImage2 = "l41_easy_word_" . $count . "_image_2";
          $inputNameImage3 = "l41_easy_word_" . $count . "_image_3";
          $inputNameImage4 = "l41_easy_word_" . $count . "_image_4";
          $statusName = "l41_easy_word_" . $count . "_correct_word";

          ${$inputNameImage} = base64_encode($row[$inputNameImage]);
          ${$inputNameImage2} = base64_encode($row[$inputNameImage2]);
          ${$inputNameImage3} = base64_encode($row[$inputNameImage3]);
          ${$inputNameImage4} = base64_encode($row[$inputNameImage4]);
          ${$statusName} = $row[$statusName];
          // ${$statusName} = strtoupper($row[$statusName]);


          $count++;
     }
     }

     // Check if no records were found
     if (mysqli_num_rows($result) === 0) {
     echo "No data found for l41_easy.";
     }

     mysqli_stmt_close($retrieveStmt);

     // Retrieve data for l11_average
     $retrieveQuery = "SELECT * FROM word_sound_activity_4 WHERE user_ID = ?";
     $retrieveStmt = mysqli_prepare($conn, $retrieveQuery);
     mysqli_stmt_bind_param($retrieveStmt, "i", $user_ID);
     mysqli_stmt_execute($retrieveStmt);

     // Fetch the result
     $result = mysqli_stmt_get_result($retrieveStmt);

     // Display retrieved data in a loop (adjust as needed)
     $count = 1;

     while ($row = mysqli_fetch_assoc($result)) {
     for ($i = 1; $i <= 10; $i++) {
          $inputNameImage = "l41_average_word_" . $count . "_image";
          $inputNameImage2 = "l41_average_word_" . $count . "_image_2";
          $inputNameImage3 = "l41_average_word_" . $count . "_image_3";
          $inputNameImage4 = "l41_average_word_" . $count . "_image_4";
          $statusName = "l41_average_word_" . $count . "_correct_word";

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
     echo "No data found for l21_average.";
     }

     mysqli_stmt_close($retrieveStmt);

     // Retrieve data for l11_difficult
     $retrieveQuery = "SELECT * FROM word_sound_activity_4 WHERE user_ID = ?";
     $retrieveStmt = mysqli_prepare($conn, $retrieveQuery);
     mysqli_stmt_bind_param($retrieveStmt, "i", $user_ID);
     mysqli_stmt_execute($retrieveStmt);

     // Fetch the result
     $result = mysqli_stmt_get_result($retrieveStmt);

     // Display retrieved data in a loop (adjust as needed)
     $count = 1;

     while ($row = mysqli_fetch_assoc($result)) {
     for ($i = 1; $i <= 10; $i++) {
          $inputNameImage = "l41_difficult_word_" . $count . "_image";
          $inputNameImage2 = "l41_difficult_word_" . $count . "_image_2";
          $inputNameImage3 = "l41_difficult_word_" . $count . "_image_3";
          $inputNameImage4 = "l41_difficult_word_" . $count . "_image_4";
          $statusName = "l41_difficult_word_" . $count . "_correct_word";

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
     echo "No data found for l41_difficult.";
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
     $retrieveQuery = "SELECT * FROM using_word_activity WHERE user_ID = ?";
     $retrieveStmt = mysqli_prepare($conn, $retrieveQuery);
     mysqli_stmt_bind_param($retrieveStmt, "i", $user_ID);
     mysqli_stmt_execute($retrieveStmt);

     // Fetch the result
     $result = mysqli_stmt_get_result($retrieveStmt);

     // Display retrieved data in a loop (adjust as needed)
     $count = 1;

     while ($row = mysqli_fetch_assoc($result)) {
     for ($i = 1; $i <= 10; $i++) {
          $inputNameImage = "l41_easy_word_" . $count . "_image";
          $statusName = "l41_easy_word_" . $count . "_correct_word";

          ${$inputNameImage."_l42"} = base64_encode($row[$inputNameImage]);
          ${$statusName."_l42"} = $row[$statusName];

          $count++;
     }
     }

     // Check if no records were found
     if (mysqli_num_rows($result) === 0) {
     echo "No data found for l42_easy.";
     }

     mysqli_stmt_close($retrieveStmt);

     // Retrieve data for l11_average
     $retrieveQuery = "SELECT * FROM using_word_activity WHERE user_ID = ?";
     $retrieveStmt = mysqli_prepare($conn, $retrieveQuery);
     mysqli_stmt_bind_param($retrieveStmt, "i", $user_ID);
     mysqli_stmt_execute($retrieveStmt);

     // Fetch the result
     $result = mysqli_stmt_get_result($retrieveStmt);

     // Display retrieved data in a loop (adjust as needed)
     $count = 1;

     while ($row = mysqli_fetch_assoc($result)) {
     for ($i = 1; $i <= 10; $i++) {
          $inputNameImage = "l41_average_word_" . $count . "_image";
          $statusName = "l41_average_word_" . $count . "_correct_word";

          ${$inputNameImage."_l42"} = base64_encode($row[$inputNameImage]);
          ${$statusName."_l42"} = $row[$statusName];

          $count++;
     }
     }

     // Check if no records were found
     if (mysqli_num_rows($result) === 0) {
     echo "No data found for l42_average.";
     }

     mysqli_stmt_close($retrieveStmt);

     // Retrieve data for l11_difficult
     $retrieveQuery = "SELECT * FROM using_word_activity WHERE user_ID = ?";
     $retrieveStmt = mysqli_prepare($conn, $retrieveQuery);
     mysqli_stmt_bind_param($retrieveStmt, "i", $user_ID);
     mysqli_stmt_execute($retrieveStmt);

     // Fetch the result
     $result = mysqli_stmt_get_result($retrieveStmt);

     // Display retrieved data in a loop (adjust as needed)
     $count = 1;

     while ($row = mysqli_fetch_assoc($result)) {
     for ($i = 1; $i <= 10; $i++) {
          $inputNameImage = "l41_difficult_word_" . $count . "_image";
          $statusName = "l41_difficult_word_" . $count . "_correct_word";

          ${$inputNameImage."_l42"} = base64_encode($row[$inputNameImage]);
          ${$statusName."_l42"} = $row[$statusName];

          $count++;
     }
     }

     // Check if no records were found
     if (mysqli_num_rows($result) === 0) {
     echo "No data found for l42_difficult.";
     }

     mysqli_stmt_close($retrieveStmt);

     // Close the database connection
     mysqli_close($conn);
?>