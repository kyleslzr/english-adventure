<?php
     session_start();

     if (!isset($_SESSION['user_ID'])) {
          header("Location: userlogin.php");
          exit();
     }

     $user_ID = $_SESSION['user_ID'];
?>