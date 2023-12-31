<?php
     session_start();

     // Check if the form has been submitted
     if (isset($_POST['firstname']) && isset($_POST['surname'])) {
          // Get the form data
          $user_ID = $_POST['user_ID'];
          $firstname = $_POST['firstname'];
          $middlename = $_POST['middlename'];
          $surname = $_POST['surname'];
          
          include "conn.php";
          
          // Check for a successful connection
          if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
          }
      
          // Create a prepared statement with placeholders
          $query = "INSERT INTO pupil_record (`user_ID`, firstname, middlename, surname) VALUES (?, ?, ?, ?)";
      
          // Prepare the statement
          $stmt = mysqli_prepare($conn, $query);
      
          // Bind parameters to the prepared statement
          mysqli_stmt_bind_param($stmt, "ssss", $user_ID, $firstname, $middlename, $surname);
      
          // Execute the prepared statement
          if (mysqli_stmt_execute($stmt)) {
               header("Location: ../records.php");
               exit();
          } else {
              echo "Error: " . mysqli_error($conn);
          }

          // Close the prepared statement and database connection
          mysqli_stmt_close($stmt);
          mysqli_close($conn);
      }
?>

