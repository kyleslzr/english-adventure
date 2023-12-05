<?php
     session_start();

     // Check if the form has been submitted
     if (isset($_POST['username']) && isset($_POST['password'])) {
          // Get the form data
          $username = $_POST['username'];
          $password = $_POST['password'];
          
          include "conn.php";
          
          // Check for a successful connection
          if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
          }
      
          // Create a prepared statement with placeholders
          $query = "INSERT INTO user_login (username, `password`) VALUES (?, ?)";
      
          // Prepare the statement
          $stmt = mysqli_prepare($conn, $query);
      
          // Bind parameters to the prepared statement
          mysqli_stmt_bind_param($stmt, "ss", $username, $password);
      
          // Execute the prepared statement
          if (mysqli_stmt_execute($stmt)) {
               $_SESSION['message'] = 'Hello ' . $username . ', your account has been successfully created. You can now sign in.';
               header("Location: ../usersignup.php");
               exit();
          } else {
              echo "Error: " . mysqli_error($conn);
          }

          // Close the prepared statement and database connection
          mysqli_stmt_close($stmt);
          mysqli_close($conn);
      }
?>

