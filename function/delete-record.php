<?php
     include "conn.php";

     // Check if the recordId is provided in the POST data
     if (isset($_POST['recordId'])) {
          $recordId = $_POST['recordId'];

          // Create a prepared statement with placeholders
          $query = "DELETE FROM pupil_record WHERE record_ID = ?";

          // Prepare the statement
          $stmt = mysqli_prepare($conn, $query);

          if ($stmt === false) {
               echo "Error: " . mysqli_error($conn);
          } else {
               // Bind parameters to the prepared statement
               mysqli_stmt_bind_param($stmt, "i", $recordId);

               // Execute the prepared statement
               if (mysqli_stmt_execute($stmt)) {
                    header("Location: ../records.php");
                    exit();
               } else {
                    echo "Error: " . mysqli_error($conn);
               }

               // Close the prepared statement
               mysqli_stmt_close($stmt);
          }
     }

     mysqli_close($conn);
?>
