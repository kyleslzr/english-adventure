<?php
     include "conn.php";

     // Create a prepared statement to delete all rows
     $query = "DELETE FROM pupil_record";

     // Prepare the statement
     $stmt = mysqli_prepare($conn, $query);

     if ($stmt === false) {
          echo "Error: " . mysqli_error($conn);
     } else {
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

     mysqli_close($conn);
?>
