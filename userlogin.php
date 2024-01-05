<?php
     session_start();

     if (isset($_SESSION['user_ID'])) {
          header("Location: lesson-list.php");
          exit();
     }

    
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
                    bottom: 14px;
                    left: 22px;
                    width: auto;
                    height: 95px;
                    z-index: 10;
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
                    z-index: 2;
               }

               .score-label.left {
                    left: 129px;
                    bottom: 17px;
                    color: #fff;
                    font-size: 13.8px;
                    background-color: #00741e9c;
                    white-space: normal;
                    display: inline-block;
                    width: 565px;
                    padding: 8px;
                    z-index: 3;
                    text-align: justify;
                    line-height: 18px;
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
                    bottom: 0px;
                    right: 8px;
                    width: 371px;
                    height: auto;
                    animation: stretchAnimation 3s infinite;
                    z-index: 8;
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
                    top: 37px;
                    width: auto;
                    height: 175px;
               }

               login-form label {
                    display: block;
                    margin-bottom: 5px;
               }

               .login-form input {
                    width: 285px;
                    height: 30px;
                    margin-bottom: 10px;
                    padding: 5px;
                    border: 5px solid #00741e;
                    border-radius: 10px;
                    font-size: 20px;
                    display: flex;
                    align-items: center;
               }

               .login-form button {
                    width: 140px;
                    height: 46px;
                    font-size: 23px;
                    padding: 5px 10px;
                    background-color: #ffcc00;
                    color: #00741e;
                    border: none;
                    border-radius: 10px;
                    cursor: pointer;
                    text-align: center;
                    font-weight: bold;
                    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
               }
               .login-form .buttonb {
                    padding: 5px 10px;
                    background-color: #ffcc0080;
                    color: #337420;
                    border: none;
                    border-radius: 10px;
                    cursor: pointer;
                    text-align: center;
               }

               .login-form button:hover {
                    filter: brightness(0.8);
               }

               .login-form {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-top: 153px;
               }
               .logo-image:hover {
                      filter: brightness(.8);
               }
               .board20 {
                    position: absolute;
                    top: 204px;
                    width: auto;
                    height: 421px;
                    z-index: -4;
                    }
               
          </style>
     </head>

     <body>
          <a class="home-button" href="index.php">
               <img src="home1.png" />
          </a>
          <!-- <img class="logo" src="logo.png" alt="English Adventures Logo" -->
          </div>
          <div class="lesson-title" style="top: 282px;display: flex;align-items: center;justify-content: center;"><svg xmlns="http://www.w3.org/2000/svg" height="32" width="28" viewBox="0 0 448 512" style="
    height: 41px;
    margin-right: 14px;

"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="white" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>Login</div>

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
          <div class="score-label left">This&nbsp; educational&nbsp; gaming tool&nbsp; is made available &nbsp;for
               the&nbsp; esteemed institution of<br>SAN JOSE ACADEMY OF BULACAN located in San Jose Del Monte, Bulacan,
               specifically intended for the benefit
               of Grade 1 pupils. This initiative is aligned with the content presented in "Workbook for English"
               authored by Darlene Niel Panganiban of Aral Pinas.</div>
          </div>
          <a href="https://www.facebook.com/SanJoseAcademyBulacanFalcons" target="_blank">
               <img class="logo-image" src="SJAB LOGO.png" alt="English Adventures Logo">
          </a>
          <div class="login-form">
               <form class="form"  action="function/sign-in.php" method="post">
                    <div>
                         <input type="text" id="username" name="username" placeholder="Username" required>
                    </div>

                    <div>
                         <input type="password" id="password" name="password" placeholder="Password" required>
                    </div>

                    <div style="text-align: center;margin-top: 25px;">
                         <button type="button" class="buttonb" style="margin: 0px 10px;" onclick="window.location.href = 'usersignup.php';">Signup</button><button type="submit">Login</button>
                    </div>

               </form>
          </div>
          <img class="traveler" src="traveler.png" alt="Traveler">
          <img class="logo-imagee" src="logo.png" alt="Traveler">
          <img class="board20" src="board20.png" alt="Traveler">
     </body>

</html>