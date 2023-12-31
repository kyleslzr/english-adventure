<?php
session_start();

if (!isset($_SESSION['user_ID'])) {
     header("Location: userlogin.php");
     exit();
}

$user_ID = $_SESSION['user_ID'];
$lessonActivity1 = 11;
$lessonActivity2 = 12;

include "function/retrieve-lesson-title-direction-url.php";
include "function/retrieve-lesson-1-activity-1.php";
?>

<!DOCTYPE html>
<html lang="en">
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <head>
          <title>Lesson 1 EASY - English Adventures</title>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="css/side-score-style.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
          <script src="https://code.responsivevoice.org/responsivevoice.js"></script>
          <style>
               html {
                    width: 1535.2px;
                    height: 747px;
                    overflow: hidden;
                    background-color: green;

               }

               body {
                    overflow: hidden;
                    margin: 0;
                    padding: 0;
                    height: 100vh;
                    background-image: url('cute_background8.jpg');
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position-y: -80px;
                    font-family: Arial, sans-serif;
                    display: flex;
                    justify-content: flex-start;
                    align-items: center;
                    flex-direction: column;
                    text-align: center;
                    color: #fff;
                    position: relative;
                    z-index: -1;
               }

               .button-container {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                    max-width: 1000px;
                    /* Adjust as needed */
                    max-height: 1000px;
                    z-index: 5;
                    margin-top: 142px;
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
                    z-index: 1;
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

               .move {
                    width: 420px;
                    position: absolute;
                    bottom: -14px;
                    z-index: -2;
                    left: -500px;
                    animation: slideOutRight 6s linear infinite;
                    /* Specify the animation name and duration here */
                    animation-fill-mode: forwards;
                    animation-delay: 0s;
               }

               .movee {
                    width: 420px;
                    position: absolute;
                    bottom: -14px;
                    z-index: -2;
                    left: -500px;
                    animation: slideOutRight 6s linear infinite;
                    /* Specify the animation name and duration here */
                    animation-fill-mode: forwards;
                    animation-delay: 3s;
               }

               .moveee {
                    width: 420px;
                    position: absolute;
                    bottom: -14px;
                    z-index: -2;
                    left: -500px;
                    animation: slideOutRight 6s linear infinite;
                    /* Specify the animation name and duration here */
                    animation-fill-mode: forwards;
                    animation-delay: 4.5s;
               }

               .moveeee {
                    width: 420px;
                    position: absolute;
                    bottom: -14px;
                    z-index: -2;
                    left: -500px;
                    animation: slideOutRight 6s linear infinite;
                    /* Specify the animation name and duration here */
                    animation-fill-mode: forwards;
                    animation-delay: 6s;
               }

               .moveeeee {
                    width: 700px;
                    position: absolute;
                    bottom: -80px;
                    z-index: -2;
                    left: -500px;
                    animation: slideOutRight 12s linear infinite;
                    animation-fill-mode: forwards;
                    animation-delay: 4s;
               }


               @keyframes slideOutRight {
                    0% {
                         transform: translateX(0);
                    }

                    100% {
                         transform: translateX(500%);
                         /* Adjust the value to slide farther */
                    }
               }


               .animate__fadeOut {
                    animation: fadeOut 2.3s;
                    /* Specify the animation name and duration here */
                    animation-fill-mode: forwards;

               }

               @keyframes fadeOut {
                    0% {
                         opacity: 1;
                    }

                    80% {
                         opacity: 1;
                         /* Adjust the opacity value as needed */
                    }

                    100% {
                         opacity: 0;
                         display: none;
                    }
               }

               .animate__bounceOutUp {
                    animation: bounceOutUp 6.7s;
                    /* Specify the animation name and duration here */
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
               }

               .score-label.right {
                    right: 30px;
                    top: 90px;
                    font-size: 50px;
                    background-color: #FF5252;
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

               .image-right {
                    width: 230px;
                    height: auto;
                    position: absolute;
                    right: 36px;
                    top: 190px;
                    animation: stretchAnimation 3s infinite;
                    /* Adjust the duration and iteration count as needed */
                    z-index: -2;
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

               /* Add this to your existing styles or create a new style block */
               #gjImage {
                    width: 598px;
                    height: auto;
                    position: fixed;
                    top: 222px;
                    z-index: 1000;
                    animation: bounceIn 1s;
               }

               #gjjImage {
                    width: 825px;
                    height: auto;
                    position: fixed;
                    top: 149px;
                    z-index: 200;
                    animation: fadeIn .5s;
               }
          </style>
          <script>
               document.addEventListener('DOMContentLoaded', function () {
                    const wordButtons = document.querySelectorAll('.word-button');
                    const gjImage = document.createElement('img');
                    gjImage.src = 'gj.png';
                    gjImage.alt = 'GJ Image';
                    gjImage.style.display = 'none'; // Initially hide the image

                    const gjjImage = document.createElement('img');
                    gjjImage.src = 'gj1.png';
                    gjjImage.alt = 'GJ Image';
                    gjjImage.style.display = 'none'; // Initially hide the image
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

                                   // Check if all buttons are clicked
                                   const allButtonsClicked = Array.from(wordButtons).every(button => button.classList.contains('clicked'));

                                   if (allButtonsClicked) {
                                        // Wait for 2 seconds (2000 milliseconds) before displaying gjImage
                                        setTimeout(function () {
                                             document.body.appendChild(gjImage);
                                             gjImage.style.display = 'block';
                                             gjImage.id = 'gjImage'; // Add this line
                                        }, 500); // Adjust the delay time as needed (in milliseconds)
                                   }
                                   if (allButtonsClicked) {
                                        document.body.appendChild(gjjImage);
                                        gjjImage.style.display = 'block';
                                        gjjImage.id = 'gjjImage'; // Add this line
                                   }
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

          <div class="button-container" id="random">
               <button class="word-button" data-status="<?= $l11_easy_word_1_status ?>" pronounce-sound="<?= $l11_easy_word_1 ?>"><?= $l11_easy_word_1 ?></button>
               <button class="word-button" data-status="<?= $l11_easy_word_2_status ?>" pronounce-sound="<?= $l11_easy_word_2 ?>"><?= $l11_easy_word_2 ?></button>
               <button class="word-button" data-status="<?= $l11_easy_word_3_status ?>" pronounce-sound="<?= $l11_easy_word_3 ?>"><?= $l11_easy_word_3 ?></button>
               <button class="word-button" data-status="<?= $l11_easy_word_4_status ?>" pronounce-sound="<?= $l11_easy_word_4 ?>"><?= $l11_easy_word_4 ?></button>
               <button class="word-button" data-status="<?= $l11_easy_word_5_status ?>" pronounce-sound="<?= $l11_easy_word_5 ?>"><?= $l11_easy_word_5 ?></button>
               <button class="word-button" data-status="<?= $l11_easy_word_6_status ?>" pronounce-sound="<?= $l11_easy_word_6 ?>"><?= $l11_easy_word_6 ?></button>
               <button class="word-button" data-status="<?= $l11_easy_word_7_status ?>" pronounce-sound="<?= $l11_easy_word_7 ?>"><?= $l11_easy_word_7 ?></button>
               <button class="word-button" data-status="<?= $l11_easy_word_8_status ?>" pronounce-sound="<?= $l11_easy_word_8 ?>"><?= $l11_easy_word_8 ?></button>
               <button class="word-button" data-status="<?= $l11_easy_word_9_status ?>" pronounce-sound="<?= $l11_easy_word_9 ?>"><?= $l11_easy_word_9 ?></button>
               <button class="word-button" data-status="<?= $l11_easy_word_10_status ?>" pronounce-sound="<?= $l11_easy_word_10 ?>"><?= $l11_easy_word_10 ?></button>
               <button class="word-button" data-status="<?= $l11_easy_word_11_status ?>" pronounce-sound="<?= $l11_easy_word_11 ?>"><?= $l11_easy_word_11 ?></button>
               <button class="word-button" data-status="<?= $l11_easy_word_12_status ?>" pronounce-sound="<?= $l11_easy_word_12 ?>"><?= $l11_easy_word_12 ?></button>
               <button class="word-button" data-status="<?= $l11_easy_word_13_status ?>" pronounce-sound="<?= $l11_easy_word_13 ?>"><?= $l11_easy_word_13 ?></button>
               <button class="word-button" data-status="<?= $l11_easy_word_14_status ?>" pronounce-sound="<?= $l11_easy_word_14 ?>"><?= $l11_easy_word_14 ?></button>
               <button class="word-button" data-status="<?= $l11_easy_word_15_status ?>" pronounce-sound="<?= $l11_easy_word_15 ?>"><?= $l11_easy_word_15 ?></button>
          </div>
          
          <div style="position: absolute; top: 50%;"><img width="200px" class="" src="logo.png"
                    alt="English Adventures Logo"></div>

          <div class="score-label left">Directions: <?= $lessonDirections1 ?></div>

          <div class="lesson-title" style="top: 52px;"><?= $lesson1 ?></div>

          <div class="centered-board"></div>

          <img class="image-right" src="traveler5.png" alt="Traveler 5 Image">

          <img class="centered-boardd animate__bounceOutUp" src="board1.png" alt="Traveler 5 Image">

          <img class="centered-boarddd animate__fadeOut" src="bg.jpg" alt="Traveler 5 Image">

          <img class="move" src="wave.png" alt="Traveler 5 Image">
          <img class="movee" src="wave.png" alt="Traveler 5 Image">
          <img class="moveee" src="wave.png" alt="Traveler 5 Image">
          <img class="moveeee" src="wave.png" alt="Traveler 5 Image">
          <img class="moveeeee" src="boat.png" alt="Traveler 5 Image">

          <div class="name-list">
               <?php include "function/retrieve-all-scores-l1-act1.php"; ?>
          </div>

          <script>
               var firstEffect = document.querySelector('.centered-boarddd');
               setTimeout(function () {
                    firstEffect.style.display = "none";
               }, 2500);
          </script>

          <script>
               document.addEventListener("DOMContentLoaded", function () {
                    // Get all elements with class 'word-button'
                    var wordButtons = document.querySelectorAll(".word-button");

                    // Iterate through each button
                    wordButtons.forEach(function (button) {
                         // Add a 'mouseover' event listener
                         button.addEventListener("mouseover", function () {
                              // Get the 'pronounce-sound' attribute value
                              var soundSrc = button.getAttribute("pronounce-sound");

                              // Check if the sound source is available
                              if (soundSrc) {
                                   // Use ResponsiveVoice to speak the text
                                   responsiveVoice.speak(soundSrc);
                              }
                         });
                    });
               });
          </script>
          
          <!-- random -->
          <script>
               document.addEventListener("DOMContentLoaded", function () {
                    // Get the container element
                    var container = document.getElementById("random");

                    // Get all the buttons inside the container
                    var buttons = container.querySelectorAll(".word-button");

                    // Convert NodeList to array for easier manipulation
                    var buttonsArray = Array.from(buttons);

                    // Function to shuffle array elements using Fisher-Yates algorithm
                    function shuffleArray(array) {
                         for (let i = array.length - 1; i > 0; i--) {
                              const j = Math.floor(Math.random() * (i + 1));
                              [array[i], array[j]] = [array[j], array[i]];
                         }
                    }

                    // Shuffle the buttons array
                    shuffleArray(buttonsArray);

                    // Append shuffled buttons back to the container
                    buttonsArray.forEach(function (button) {
                         container.appendChild(button);
                    });
               });
          </script>



          <?php include "js/record-score.php"; ?>
     </body>

</html>