<?php
     session_start();

     // Check if the form has been submitted
     if (isset($_POST['firstname']) && isset($_POST['surname'])) {
          // Get the form data
          $firstname = $_POST['firstname'];
          $midllename = $_POST['middlename'];
          $surname = $_POST['surname'];
          
          // Hash the password
          $hashed_password = password_hash($password, PASSWORD_DEFAULT);
          
          include "conn.php";
          
          // Check for a successful connection
          if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
          }
      
          // Create a prepared statement with placeholders
          $query = "INSERT INTO pupil_record (firstname, middlename, surname) VALUES (?, ?, ?)";
      
          // Prepare the statement
          $stmt = mysqli_prepare($conn, $query);
      
          // Bind parameters to the prepared statement
          mysqli_stmt_bind_param($stmt, "sss", $firstname, $middlename, $surname);
      
          // Execute the prepared statement
          if (mysqli_stmt_execute($stmt)) {
               header("Location: ../records.html");
               exit();
          } else {
              echo "Error: " . mysqli_error($conn);
          }

          // Close the prepared statement and database connection
          mysqli_stmt_close($stmt);
          mysqli_close($conn);
      }
?>

