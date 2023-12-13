<?php
     include "function/conn.php";

     // Check for a successful connection
     if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
     }

     // Assuming user_ID is set in the session, adjust as needed
     if (isset($_SESSION['user_ID'])) {
     $user_ID = $_SESSION['user_ID'];

     // Retrieval of data
     $retrieveQuery = "SELECT * FROM lesson_titles WHERE user_ID = ? AND lesson_activity_number IN ($lessonActivity1, $lessonActivity2)";
     $retrieveStmt = mysqli_prepare($conn, $retrieveQuery);
     mysqli_stmt_bind_param($retrieveStmt, "i", $user_ID);
     mysqli_stmt_execute($retrieveStmt);

     // Fetch the result
     $result = mysqli_stmt_get_result($retrieveStmt);

     // Display retrieved data in a loop (adjust as needed)
     $count = 1;

     while ($row = mysqli_fetch_assoc($result)) {
         ${"lesson" . $count} = $row['lesson_title'];
         ${"lessonDirections" . $count} = $row['directions'];
         $count++;
     }     

     // Check if no records were found
     if (mysqli_num_rows($result) === 0) {
          echo "No data found.";
     }

     mysqli_stmt_close($retrieveStmt);
     } else {
          echo "User ID not set in the session.";
     }

     mysqli_close($conn);
?>

<?php
     include "function/conn.php";

     // Check for a successful connection
     if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
     }

     // Assuming user_ID is set in the session, adjust as needed
     if (isset($_SESSION['user_ID'])) {
     $user_ID = $_SESSION['user_ID'];

     // Retrieval of data
     $retrieveQuery = "SELECT * FROM lesson_tutorial_url WHERE user_ID = ? AND lesson_activity_number IN ($lessonActivity1, $lessonActivity2)";
     $retrieveStmt = mysqli_prepare($conn, $retrieveQuery);
     mysqli_stmt_bind_param($retrieveStmt, "i", $user_ID);
     mysqli_stmt_execute($retrieveStmt);

     // Fetch the result
     $result = mysqli_stmt_get_result($retrieveStmt);

     // Display retrieved data in a loop (adjust as needed)
     $count = 1;

     while ($row = mysqli_fetch_assoc($result)) {
         ${"lesson_tutorial_url_" . $count} = $row['lesson_tutorial_url'];
         $count++;
     }     

     // Check if no records were found
     if (mysqli_num_rows($result) === 0) {
          echo "No data found.";
     }

     mysqli_stmt_close($retrieveStmt);
     } else {
          echo "User ID not set in the session.";
     }

     mysqli_close($conn);
?>