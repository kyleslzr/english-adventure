<!DOCTYPE html>
<html lang="en">
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <head>
          <title>Lesson 4 - English Adventures</title>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="css/side-score-style.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
          <style>
               body {
                    overflow: hidden;
      margin: 0;
      padding: 0;
      height: 100vh;
      background-image: url('cute_background8.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: flex-start;
      align-items: center;
      flex-direction: column;
      text-align: center;
      color: #fff;
      position: relative;
               }

               .button-container {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                    max-width: 1000px;
                    /* Adjust as needed */
                    max-height: 1000px;
                    z-index: 5;
                    margin-top: 152px;
               }

               .word-button {
                    width: calc(27.20% - 10px);
                    height: 95px;
                    /* Adjust as needed */
                    margin: 5px;
                    color: #00741E;
                    background-color: #ffcc00;
                    border: none;
                    border-radius: 15px;
                    cursor: pointer;
                    font-size: 40px;
                    font-weight: bold;
              
                    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
               }

               .word-button[data-status="true"].active {
                    background-color: green;
               }

               .word-button[data-status="false"].active {
                    background-color: #EE2F41;
               }
               .word-button:hover {
                    filter: brightness(.8);
               }

               .logo-image {
                    position: absolute;
                    top: 27px;
                    right: 24px;
                    width: auto;
                    height: 102px;
               }

               .lesson-title {
                    position: absolute;
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

               .centered-boardd {
                    width: 1150px;
                    position: absolute;
                    bottom: -22px;
                    z-index: 10;
               }

               .centered-boarddd {
                    width: 1644px;
                    position: absolute;
                    bottom: -133.5px;
                    z-index: 11;
               }

               .score-label {
                    position: absolute;
                    font-size: 20px;
                    font-weight: bold;
                    padding: 5px 10px;
                    border-radius: 5px;
                    background-color: #00741E;
                    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
                    outline: 4px solid #fff;
                    z-index: 2;
               }
               .score-label.left {
                    left: 30px;
                    top: 31px;
                    font-size: 25px;
                    background-color: #00741E;
                    white-space: normal;
                    display: inline-block;
                    width: 230px;
                    padding: 10px 10px;
                    z-index: 3;
                    }`

               .score-label.right {
                    right: 30px;
                    top: 90px;
                    font-size: 50px;
                    background-color: #FF5252;
               }

               @keyframes stretchAnimation {
               0%, 100% {
               transform: translateY(0) scaleY(1);
               }
               50% {
                transform: translateY(-1.1%) scaleY(1.025);
               }
                    }

               .image-right {
                    width: 230px;
                    height: auto;
                    position: absolute;
                    right: 36px;
                    top: 190px;
                    animation: stretchAnimation 3s infinite; /* Adjust the duration and iteration count as needed */

               }

               .retry-button {
                    position: fixed;
                    margin-right: -1050px;
                    bottom: -480px;
                    transform: scale(0.10);
               }

               .back-button {
                    position: fixed;
                    margin-right: -1230px;
                    bottom: -480px;
                    transform: scale(0.10);
               }

               .home-button {
                    position: fixed;
                    margin-right: -1410px;
                    bottom: -480px;
                    transform: scale(0.10);

               }


               .animate__fadeOut {
               animation: fadeOut 2.3s; /* Specify the animation name and duration here */
               animation-fill-mode: forwards;
               
               }

               @keyframes fadeOut {
                    0% {
                         opacity: 1;
                    }
                    80% {
                         opacity: 1; /* Adjust the opacity value as needed */
                    }
                    100% {
                         opacity: 0;
                         display: none;
                    }
                    }

               .animate__bounceOutUp {
               animation: bounceOutUp 6.7s; /* Specify the animation name and duration here */
               animation-fill-mode: forwards;
               }

               @keyframes bounceOutUp {
               0% {
                    transform: translateY(0) scaley(1); 
               }

               37% {
                    transform: translateY(1%) scaley(1); 
               
               }

               100% {
                    transform: translateY(-100%) scaley(1);
               }
               }


          </style>
          <script>
               document.addEventListener('DOMContentLoaded', function () {
                    const wordButtons = document.querySelectorAll('.word-button');

                    // Function to play the correct sound
                    function playCorrectSound() {
                         const correctSound = new Audio('correct.ogg');
                         correctSound.play();
                    }
                    
                    function playWrongSound() {
                         const wrongSound = new Audio('wrong.ogg');
                         wrongSound.play();
                    }

                    wordButtons.forEach(button => {
                         button.addEventListener('click', () => {
                              // Check if the button has already been clicked
                              if (!button.classList.contains('clicked')) {
                                   // Toggle the 'active' class on click
                                   button.classList.toggle('active');

                                   // Toggle the text color to white
                                   if (button.classList.contains('active')) {
                                   button.style.color = 'white';
                                   } else {
                                   button.style.color = '#00741E'; // Original color
                                   }

                                   // Play the correct sound if the button is active and has status true
                                   if (button.classList.contains('active') && button.dataset.status === 'true') {
                                   playCorrectSound();
                                   }

                                   if (button.classList.contains('active') && button.dataset.status === 'false') {
                                   playWrongSound();
                                   }

                                   // Mark the button as clicked
                                   button.classList.add('clicked');
                              }
                         });
                    });
               });
          </script>
     </head>

     <body>

     <audio autoplay loop controlsList="nodownload" style="display: none">
  <source src="music2 (2).ogg" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>


          <a class="retry-button" href="lesson1-1.php">
               <img src="retry.png" />
          </a>

          <a class="back-button" href="lesson1.php">
               <img src="back.png" />
          </a>

          <a class="home-button" href="lesson-list.php">
               <img src="home.png" />
          </a>

          <img class="logo-image" src="logo.png" alt="English Adventures Logo">

          <div class="button-container">
               <button class="word-button" data-status="true">CAT</button>
               <button class="word-button" data-status="true">APPLE</button>
               <button class="word-button" data-status="false">LATE</button>
               <button class="word-button" data-status="true">MANSION</button>
               <button class="word-button" data-status="true">SACK</button>
               <button class="word-button" data-status="false">BAKE</button>
               <button class="word-button" data-status="true">ALLIGATOR</button>
               <button class="word-button" data-status="true">LADDER</button>
               <button class="word-button" data-status="true">RANDOM</button>
               <button class="word-button" data-status="true">SAD</button>
               <button class="word-button" data-status="false">RAIN</button>
               <button class="word-button" data-status="false">CAKE</button>
               <button class="word-button" data-status="false">RAISE</button>
               <button class="word-button" data-status="false">MATE</button>
               <button class="word-button" data-status="true">BAT</button>
               <div style="position: absolute; top: 50%; display: none;"><img width="200px" class="" src="logo.png" alt="English Adventures Logo"></div>
          </div>

          <div class="score-label left">Directions: Click the words with Short /a/ sound.</div>

          <div class="lesson-title" style="top: 52px;">Recognizing the Short a and e Sounds</div>

          <div class="centered-board"></div>

          <img class="image-right" src="traveler5.png" alt="Traveler 5 Image">
          
          <img class="centered-boardd animate__bounceOutUp" src="board1.png" alt="Traveler 5 Image">

          <img class="centered-boarddd animate__fadeOut" src="bg.jpg" alt="Traveler 5 Image">


          <div class="name-list">
               <?php include "function/retrieve-all-scores-l1-act1.php"; ?>
          </div>

          <?php include "js/record-score.php"; ?>
     </body>
</html>