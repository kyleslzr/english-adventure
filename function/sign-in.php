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
    $query = "SELECT user_ID FROM user_login WHERE username = ? AND `password` = ?";

    // Prepare the statement
    $stmt = mysqli_prepare($conn, $query);

    // Bind parameters to the prepared statement
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);

    // Execute the prepared statement
    mysqli_stmt_execute($stmt);

    // Bind the result variables
    mysqli_stmt_bind_result($stmt, $user_ID);

    // Fetch the result
    mysqli_stmt_fetch($stmt);

    // Check if a user with the provided credentials exists
    if ($user_ID) {
        $_SESSION['user_ID'] = $user_ID;

        header("Location: ../lesson-list.php");
        exit();
    } else {
        $_SESSION['message'] = 'Invalid username or password. Please try again.';
        header("Location: ../userlogin.php");
        exit();
    }

    // Close the prepared statement and database connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
