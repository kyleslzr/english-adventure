<?php
     include "function/conn.php";

     // Check for a successful connection
     if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
     }
     $user_ID = $_SESSION['user_ID'];

     // Retrieve data for l11_easy
     $retrieveQuery = "SELECT * FROM recognizing_noun_activity WHERE user_ID = ?";
     $retrieveStmt = mysqli_prepare($conn, $retrieveQuery);
     mysqli_stmt_bind_param($retrieveStmt, "i", $user_ID);
     mysqli_stmt_execute($retrieveStmt);

     // Fetch the result
     $result = mysqli_stmt_get_result($retrieveStmt);

     // Display retrieved data in a loop (adjust as needed)
     $count = 1;

     while ($row = mysqli_fetch_assoc($result)) {
     for ($i = 1; $i <= 8; $i++) {
          $inputName = "l12_easy_statement_$i";
          $inputNameImage = $inputName . "_image";
          $correctNounsName = $inputName . "_correct_nouns";

          ${$inputName} = $row[$inputName];
          ${$correctNounsName} = explode(', ',$row[$correctNounsName]);
          ${$inputNameImage} = base64_encode($row[$inputNameImage]);

          $count++;
     }
     }

     // Check if no records were found
     if (mysqli_num_rows($result) === 0) {
     echo "No data found for l11_easy.";
     }

     mysqli_stmt_close($retrieveStmt);

     // Retrieve data for l11_average
     $retrieveQuery = "SELECT * FROM recognizing_noun_activity WHERE user_ID = ?";
     $retrieveStmt = mysqli_prepare($conn, $retrieveQuery);
     mysqli_stmt_bind_param($retrieveStmt, "i", $user_ID);
     mysqli_stmt_execute($retrieveStmt);

     // Fetch the result
     $result = mysqli_stmt_get_result($retrieveStmt);

     // Display retrieved data in a loop (adjust as needed)
     $count = 1;

     while ($row = mysqli_fetch_assoc($result)) {
     for ($i = 1; $i <= 8; $i++) {
          $inputName = "l12_average_statement_$i";
          $inputNameImage = $inputName . "_image";
          $correctNounsName = $inputName . "_correct_nouns";

          ${$inputName} = $row[$inputName];
          ${$correctNounsName} = explode(', ',$row[$correctNounsName]);
          ${$inputNameImage} = base64_encode($row[$inputNameImage]);

          $count++;
     }
     }

     // Check if no records were found
     if (mysqli_num_rows($result) === 0) {
     echo "No data found for l11_average.";
     }

     mysqli_stmt_close($retrieveStmt);

     // Retrieve data for l11_difficult
     $retrieveQuery = "SELECT * FROM recognizing_noun_activity WHERE user_ID = ?";
     $retrieveStmt = mysqli_prepare($conn, $retrieveQuery);
     mysqli_stmt_bind_param($retrieveStmt, "i", $user_ID);
     mysqli_stmt_execute($retrieveStmt);

     // Fetch the result
     $result = mysqli_stmt_get_result($retrieveStmt);

     // Display retrieved data in a loop (adjust as needed)
     $count = 1;

     while ($row = mysqli_fetch_assoc($result)) {
     for ($i = 1; $i <= 8; $i++) {
          $inputName = "l12_difficult_statement_$i";
          $inputNameImage = $inputName . "_image";
          $correctNounsName = $inputName . "_correct_nouns";

          ${$inputName} = $row[$inputName];
          ${$correctNounsName} = explode(', ',$row[$correctNounsName]);
          ${$inputNameImage} = base64_encode($row[$inputNameImage]);

          $count++;
     }
     }

     // Check if no records were found
     if (mysqli_num_rows($result) === 0) {
     echo "No data found for l11_difficult.";
     }

     mysqli_stmt_close($retrieveStmt);

     // Close the database connection
     mysqli_close($conn);
?>