<?php
session_start();

if (!isset($_SESSION['user_ID'])) {
     header("Location: userlogin.php");
     exit();
}

$user_ID = $_SESSION['user_ID'];
$lessonActivity1 = 31;
$lessonActivity2 = 32;

include "function/retrieve-lesson-title-direction-url.php";
include "function/retrieve-lesson-3-activities.php";
?>
<html>

     <head>
          <title>Lesson 1 - English Adventures</title>
          <link rel="stylesheet" href="css/side-score-style.css">
          <style>
               body {
                    overflow: hidden;
                    margin: 0;
                    padding: 0;
                    height: 100vh;
                    background-image: url("cute_background7.jpg");
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center center;
                    font-family: Arial, sans-serif;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-direction: column;
                    text-align: center;
                    color: #fff;
                    position: relative;
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
                    background-color: #00741e;
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
                    background-image: url("board.png");
                    background-size: contain;
                    background-repeat: no-repeat;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    z-index: 1;
               }

               .score-label {
                    position: absolute;
                    font-size: 20px;
                    font-weight: bold;
                    padding: 5px 10px;
                    border-radius: 5px;
                    background-color: #00741e;
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
                    background-color: #ff5252;
               }

               .image-left {
                    width: 300px;
                    height: auto;
                    position: absolute;
                    left: 11px;
                    top: 330px;
                    z-index: 4;
               }



               .image-right {
                    width: 230px;
                    height: auto;
                    position: absolute;
                    right: 36px;
                    top: 190px;
                    animation: stretchAnimation 3s infinite;
                    /* Adjust the duration and iteration count as needed */

               }



               .retry-button {
                    position: fixed;
                    margin-right: -1050px;
                    bottom: -480px;
                    transform: scale(0.1);
                    z-index: 10;
               }

               .back-button {
                    position: fixed;
                    margin-right: -1230px;
                    bottom: -480px;
                    transform: scale(0.1);
               }

               .home-button {
                    position: fixed;
                    margin-right: -1410px;
                    bottom: -480px;
                    transform: scale(0.1);
               }

               .container {
                    display: flex;
                    margin-top: 49px;
                    margin-left: 80px;
                    width: 800px;
                    flex-wrap: wrap;
                    z-index: 10;
                    grid-template-columns: repeat(4, 1fr);
                    gap: 55px;
               }

               .box {
                    width: 180px;
                    height: 180px;
                    margin: 10px;
                    text-align: center;
                    z-index: 10;
               }

               .box img {
                    width: 180px;
                    height: 180px;
                    object-fit: cover;
                    border: 5px solid #fff;
                    z-index: 10;
                    margin-bottom: 5px;
                    box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.3);
               }

               .answer-input {
                    position: relative;
                    z-index: 10;
                    width: 189px;
                    color: #00741e;
                    text-align: center;
                    border: 5px solid #00741e;
                    height: 47px;
                    font-size: 28px;
                    font-weight: bold;
                    text-transform: uppercase;
                    box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.3);
                    outline: none;
                    margin-top: 5PX;
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


               @keyframes stretchAnimation {

                    0%,
                    100% {
                         transform: translateY(0) scaleY(1);
                    }

                    50% {
                         transform: translateY(-1.1%) scaleY(1.025);
                    }
               }

               .vine,
               .vinee,
               .vineee {
                    animation: bounceAnimation 2s linear infinite;
               }

               @keyframes bounceAnimation {

                    0%,
                    20%,
                    50%,
                    80%,
                    100% {
                         transform: translateY(0);
                    }

                    40% {
                         transform: translateY(-3px);
                    }

                    60% {
                         transform: translateY(9px);
                    }
               }

               .vine {
                    width: 439px;
                    height: auto;
                    position: absolute;
                    left: 36px;
                    top: -87px;

               }

               .vinee {
                    width: 373px;
                    height: auto;
                    position: absolute;
                    right: -39px;
                    top: -67px;
                    z-index: -2;
                    animation-delay: 1s;

               }

               .bush {
                    width: 512px;
                    height: auto;
                    position: absolute;
                    right: -119px;
                    bottom: -25px;
                    z-index: -2;
                    animation: stretchAnimation 1.5s infinite;
                    z-index: -1;
                    animation-delay: 1s;
                    filter: saturate(1.5);
               }
          </style>
     </head>

     <body>
          <audio autoplay loop controlsList="nodownload" style="display: none">
               <source src="music2 (2).ogg" type="audio/mpeg">
               Your browser does not support the audio element.
          </audio>
          <a class="retry-button" href="lesson3-1.php">
               <img src="retry.png" />
          </a>

          <a class="back-button" href="lesson3.php">
               <img src="back.png" />
          </a>

          <a class="home-button" href="lesson-list.php">
               <img src="home.png" />
          </a>

          <div class="container" id="random">
               <div class="box" data-answer="<?= $l31_easy_word_1_correct_word ?>">
                    <img src="data:image/png;base64,<?= $l31_easy_word_1_image ?>" alt="<?= $l31_easy_word_1_correct_word ?>">
                    <input class="answer-input" type="text">
               </div>
               <div class="box" data-answer="<?= $l31_easy_word_2_correct_word ?>">
                    <img src="data:image/png;base64,<?= $l31_easy_word_2_image ?>" alt="<?= $l31_easy_word_2_correct_word ?>">
                    <input class="answer-input" type="text">
               </div>
               <div class="box" data-answer="<?= $l31_easy_word_3_correct_word ?>">
                    <img src="data:image/png;base64,<?= $l31_easy_word_3_image ?>" alt="<?= $l31_easy_word_3_correct_word ?>">
                    <input class="answer-input" type="text">
               </div>
               <div class="box" data-answer="<?= $l31_easy_word_4_correct_word ?>">
                    <img src="data:image/png;base64,<?= $l31_easy_word_4_image ?>" alt="<?= $l31_easy_word_4_correct_word ?>">
                    <input class="answer-input" type="text">
               </div>
               <div class="box" data-answer="<?= $l31_easy_word_5_correct_word ?>">
                    <img src="data:image/png;base64,<?= $l31_easy_word_5_image ?>" alt="<?= $l31_easy_word_5_correct_word ?>">
                    <input class="answer-input" type="text">
               </div>
               <div class="box" data-answer="<?= $l31_easy_word_6_correct_word ?>">
                    <img src="data:image/png;base64,<?= $l31_easy_word_6_image ?>" alt="<?= $l31_easy_word_6_correct_word ?>">
                    <input class="answer-input" type="text">
               </div>
          </div>
          <p id="result"></p>

          <img class="logo-image" src="logo.png" alt="English Adventures Logo" />

          <div class="score-label left">Directions: <?= $lessonDirections1 ?></div>

          <div class="lesson-title" style="top: 52px;"><?= $lesson1 ?></div>

          <div class="centered-board"></div>

          <img class="image-right" src="traveler5.png" alt="Traveler 5 Image" />
          <img class="vine animate__bounce" src="vine1.png" alt="Traveler 5 Image" />
          <img class="vinee animate__bounce" src="vine2.png" alt="Traveler 5 Image" />
          <img class="bush animate__bounce" src="bush.webp" alt="Traveler 5 Image" />

          <img class="centered-boardd animate__bounceOutUp" src="board1.png" alt="Traveler 5 Image">

          <img class="centered-boarddd animate__fadeOut" src="bg.jpg" alt="Traveler 5 Image">
          <div class="name-list">
               <?php include "function/retrieve-all-scores-l3-act1.php"; ?>
          </div>

          <?php include "js/record-score.php"; ?>
          <!-- random -->
          <script>
               document.addEventListener("DOMContentLoaded", function () {
                    // Get the container element
                    var container = document.getElementById("random");

                    // Get all the buttons inside the container
                    var buttons = container.querySelectorAll(".box");

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
          <script>

               const boxes = document.querySelectorAll(".box");
               const resultMessage = document.getElementById("result");
               let currentIndex = 0;

               function checkAnswer(box) {
                    const userAnswer = box.querySelector(".answer-input");
                    const correctAnswer = box.getAttribute("data-answer");
                    const userInput = userAnswer.value.toLowerCase();

                    // Get the audio elements
                    const correctSound = new Audio('correct.ogg');
                    const wrongSound = new Audio('wrong.ogg');

                    if (userInput === correctAnswer) {
                         userAnswer.style.backgroundColor = "#00741E"; // Green background color
                         userAnswer.style.borderColor = "#00741E";
                         userAnswer.style.color = "#fff"; // White font color
                         userAnswer.disabled = true; // Disable the input field

                         // Play correct sound
                         correctSound.play();
                         // play the pronunciation

                         const pronounceCorrect = new Audio(`pronounce/${correctAnswer}.mp3`);
                         pronounceCorrect.play();
                    } else {
                         userAnswer.style.backgroundColor = "#EE2F41"; // Red background color for incorrect answers
                         userAnswer.style.borderColor = "#EE2F41"; // Red border color for incorrect answers
                         userAnswer.style.color = "#fff"; // White font color for incorrect answers
                         // userAnswer.value = "";
                         // Play wrong sound
                         wrongSound.play();
                    }

                    currentIndex++;
                    if (currentIndex < boxes.length) {
                         boxes[currentIndex].querySelector(".answer-input").focus();
                    } else {
                         showResult();
                    }
               }

               boxes[currentIndex].querySelector(".answer-input").focus();

               boxes.forEach((box, index) => {
                    const answerInput = box.querySelector(".answer-input");
                    answerInput.addEventListener("keyup", (event) => {
                         if (event.key === "Enter" && !answerInput.disabled) {
                              checkAnswer(box);
                         }
                    });
               });
          </script>
     </body>

</html>
