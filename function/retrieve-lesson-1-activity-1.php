<?php
     include "function/conn.php";

     // Check for a successful connection
     if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
     }
     $user_ID = $_SESSION['user_ID'];

     // Retrieve data for l11_easy
     $retrieveQuery = "SELECT * FROM word_sound_activity WHERE user_ID = ?";
     $retrieveStmt = mysqli_prepare($conn, $retrieveQuery);
     mysqli_stmt_bind_param($retrieveStmt, "i", $user_ID);
     mysqli_stmt_execute($retrieveStmt);

     // Fetch the result
     $result = mysqli_stmt_get_result($retrieveStmt);

     // Display retrieved data in a loop (adjust as needed)
     $count = 1;

     while ($row = mysqli_fetch_assoc($result)) {
     for ($i = 1; $i <= 15; $i++) {
          $inputName = "l11_easy_word_$count";
          $statusName = "l11_easy_word_" . $count . "_status";

          // ${$inputName} = $row[$inputName];
          ${$inputName} = strtoupper($row[$inputName]);
          // ${$statusName} = $row[$statusName];
          ${$statusName} = $row[$statusName] === 'correct' ? 'true' : 'false';

          $count++;
     }
     }

     // Check if no records were found
     if (mysqli_num_rows($result) === 0) {
     echo "No data found for l11_easy.";
     }

     mysqli_stmt_close($retrieveStmt);

     // Retrieve data for l11_average
     $retrieveQuery = "SELECT * FROM word_sound_activity WHERE user_ID = ?";
     $retrieveStmt = mysqli_prepare($conn, $retrieveQuery);
     mysqli_stmt_bind_param($retrieveStmt, "i", $user_ID);
     mysqli_stmt_execute($retrieveStmt);

     // Fetch the result
     $result = mysqli_stmt_get_result($retrieveStmt);

     // Display retrieved data in a loop (adjust as needed)
     $count = 1;

     while ($row = mysqli_fetch_assoc($result)) {
     for ($i = 1; $i <= 15; $i++) {
          $inputName = "l11_average_word_$count";
          $statusName = "l11_average_word_" . $count . "_status";

          // ${$inputName} = $row[$inputName];

          ${$inputName} = strtoupper($row[$inputName]);
          // ${$statusName} = $row[$statusName];
          ${$statusName} = $row[$statusName] === 'correct' ? 'true' : 'false';

          $count++;
     }
     }

     // Check if no records were found
     if (mysqli_num_rows($result) === 0) {
     echo "No data found for l11_average.";
     }

     mysqli_stmt_close($retrieveStmt);

     // Retrieve data for l11_difficult
     $retrieveQuery = "SELECT * FROM word_sound_activity WHERE user_ID = ?";
     $retrieveStmt = mysqli_prepare($conn, $retrieveQuery);
     mysqli_stmt_bind_param($retrieveStmt, "i", $user_ID);
     mysqli_stmt_execute($retrieveStmt);

     // Fetch the result
     $result = mysqli_stmt_get_result($retrieveStmt);

     // Display retrieved data in a loop (adjust as needed)
     $count = 1;

     while ($row = mysqli_fetch_assoc($result)) {
     for ($i = 1; $i <= 15; $i++) {
          $inputName = "l11_difficult_word_$count";
          $statusName = "l11_difficult_word_" . $count . "_status";

          // ${$inputName} = $row[$inputName];
          ${$inputName} = strtoupper($row[$inputName]);
          // ${$statusName} = $row[$statusName];
          ${$statusName} = $row[$statusName] === 'correct' ? 'true' : 'false';

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