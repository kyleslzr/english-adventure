<?php
     session_start();
?>

<!DOCTYPE html>
<html>

     <head>
          <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
          <title>English Adventures</title>
          <style>
               body {
                    zoom: 100%;
                    overflow: hidden;
                    margin: 0;
                    padding: 0;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    background-image: url('cute_background1.jpg');
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center center;
                    font-family: Arial, sans-serif;
                    position: relative;
               }

               .logo {
                    max-width: 850px;
                    max-height: 500px;
                    width: auto;
                    height: auto;
               }

               .logo-image {
                    position: absolute;
                    top: 18px;
                    left: 70px;
                    width: auto;
                    height: 178px;

               }

               .text {
                    position: absolute;
                    left: 30px;
                    bottom: 20px;
                    color: #fff;
                    font-size: 15px;
                    display: inline-block;
                    /* Add this property for variable box width */
                    width: 270px;
                    font-weight: bold;
               }

               .score-label {
                    position: absolute;

                    padding: 5px 10px;
                    border-radius: 5px;
                    background-color: #00741E;
                    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
                    outline: 4px solid #fff;
                    z-index: 2;
               }

               .score-label.left {
                    left: 30px;
                    top: 297px;
                    color: #fff;
                    font-size: 24.8px;
                    background-color: #00741E;
                    white-space: normal;
                    display: inline-block;
                    width: 240px;
                    padding: 10px 10px;
                    z-index: 3;
                    text-align: center;
                    font-weight: bolder;
               }

               .start-button,
               .delete-button {
                    margin-top: 20px;
                    padding: 10px 20px;
                    background-color: #ffcc00;
                    color: #00741E;
                    font-size: 50px;
                    font-weight: bold;
                    border: none;
                    border-radius: 50px;
                    cursor: pointer;
                    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
               }

               .start-button:hover,
               .delete-button:hover {
                    filter: brightness(0.8);
               }

               @keyframes stretchAnimation {

                    0%,
                    100% {
                         transform: translateY(0) scaleY(1);
                    }

                    50% {
                         transform: translateY(-1.1%) scaleY(1.025);
                    }
               }

               .traveler {
                    position: absolute;
                    bottom: -133px;
                    right: -15px;
                    width: 342px;
                    height: auto;
                    animation: stretchAnimation 3s infinite;

               }

               .records {
                    position: absolute;
                    bottom: 75px;
                    right: 364px;
                    font-size: 25px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    padding: 1px;
                    height: 45px;
                    width: 179px;
               }

               .delete-button {
                    position: absolute;
                    bottom: 22px;
                    left: 20px;
                    font-size: 25px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    padding: 1px;
                    height: 45px;
                    width: 187px;
               }

               .centered-board {
                    width: 1150px;
                    height: 1000px;
                    background-image: url('board.png');
                    background-size: contain;
                    background-repeat: no-repeat;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    z-index: -1;
               }

               .lesson-title {
                    position: absolute;
                    color: #fff;
                    font-size: 30px;
                    font-weight: bold;
                    top: 52px;
                    background-color: #00741E;
                    padding: 10px 20px;
                    border-radius: 5px;
                    cursor: default;
                    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
                    outline: 4px solid #fff;
                    z-index: 2;
               }


               .home-button {
                    position: fixed;
                    margin-right: -1410px;
                    bottom: -480px;
                    transform: scale(0.10);
                    z-index: 10;
               }

               .home-button:hover,
               .delete-btn:hover {
                    filter: brightness(0.8);
               }


               .rscroll {
                    overflow-x: hidden;
               }

               .logo-imagee {
                    position: absolute;
                    top: 27px;
                    right: 24px;
                    width: auto;
                    height: 102px;
               }

               login-form label {
                    display: block;
                    margin-bottom: 5px;
               }

               .login-form input {
                    width: 200px;
                    margin-bottom: 10px;
                    padding: 5px;
               }

               .login-form button {
                    padding: 5px 10px;
                    background-color: #00741E;
                    color: #fff;
                    border: none;
                    border-radius: 3px;
                    cursor: pointer;
                    text-align: center;
               }

               .login-form .buttonb {
                    padding: 5px 10px;
                    background-color: transparent;
                    color: #337420;
                    border: none;
                    border-radius: 3px;
                    cursor: pointer;
                    text-align: center;
               }

               .login-form button:hover {
                    filter: brightness(0.8);
               }

               .login-form {
                    display: flex;
                    justify-content: center;
               }
          </style>
     </head>

     <body>
          <a class="home-button" href="index.php">
               <img src="home1.png" />
          </a>
          <!-- <img class="logo" src="logo.png" alt="English Adventures Logo" -->
          </div>
          <div class="centered-board"></div>
          <div class="lesson-title" style="top: 52px;">Signup</div>
          <span style="color: color(srgb 0.3028 0.538 0.2358); font-size: 13px; margin: 15px 0px;">
             <?php 
               // Check if the session variable is set
                    if (isset($_SESSION['message'])) {
                         // Echo the session variable value
                         echo $_SESSION['message'];

                         // Unset the session variable
                         unset($_SESSION['message']);
                    }
             ?>
          </span>
          <div class="login-form">
               <form class="form" action="function/save-user.php" method="post">
                    <div>
                         <input type="text" id="username" name="username" placeholder="username" required>
                    </div>

                    <div>
                         <input type="password" id="password" name="password" placeholder="password" required>
                    </div>

                    <div style="text-align: end;">
                         <button type="button" class="buttonb" style="margin: 0px 10px;" onclick="window.location.href = 'userlogin.php';">Login</button><button type="submit">Signup</button>
                    </div>

               </form>
          </div>

          <img class="logo-image" src="SJAB LOGO.png" alt="English Adventures Logo">
          <img class="logo-imagee" src="logo.png" alt="Traveler">
     </body>

</html>