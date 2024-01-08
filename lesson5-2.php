<?php
session_start();

if (!isset($_SESSION['user_ID'])) {
     header("Location: userlogin.php");
     exit();
}

$user_ID = $_SESSION['user_ID'];
$lessonActivity1 = 51;
$lessonActivity2 = 52;

include "function/retrieve-lesson-title-direction-url.php";
include "function/retrieve-lesson-5-activities.php";
?>

<!DOCTYPE html>
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
                    background-image: url('cute_background10.jpg');
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

               .word-container {
                    margin-top: 25px;
               }

               .word-box {
                    display: inline-block;
                    font-size: 50px;
                    font-weight: bold;

                    color: white;
                    border-radius: 5px;
                    background-color: #00741E;
                    width: 794px;
                    /* Set the width for each letter's box */
                    height: 65px;
                    /* Set the height for each letter's box */
                    text-align: center;
                    margin: 3px;
                    padding: 10px;
                    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
               }

               .button-container {
                    display: flex;
                    justify-content: center;
                    gap: 30px;
                    margin-top: 27px;

               }

               .button {
                    font-size: 90px;
                    color: #00741E;
                    border: none;
                    font-weight: bold;
                    padding: 5px 10px;
                    cursor: pointer;
                    box-shadow: 8px 8px 8px rgba(6, 6, 6, 6);
                    width: 383px;
                    height: 140px;
                    background-color: #ffcc00;
                    outline: 10px solid #00741E;
                    border-radius: 6px;
               }

               .correct {
                    background-color: #00741E;
               }

               .wrong {
                    background-color: #EE2F41;
                    outline: 10px solid #EE2F41;
               }

               .image-container {
                    margin-top: 110px;
               }

               .word-image {
                    max-width: 300px;
                    max-height: 193px;
                    height: auto;
                    outline: 15px solid #00741E;
                    border-radius: 5px;

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

               .image-left {
                    width: 300px;
                    height: auto;
                    position: absolute;
                    left: 11px;
                    top: 330px;
                    z-index: 4;
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

               .sun {
                    position: absolute;
                    width: 202px;
                    z-index: -5;
                    top: -31px;
                    right: 219px;
                    filter: saturate(1.7);
               }

               .bg {
                    position: absolute;
                    width: 1536px;
                    z-index: -2;
               }

               .move {
                    width: 278px;
                    position: absolute;
                    top: -50px;
                    z-index: -4;
                    left: -313px;
                    animation: slideOutRight 30s linear infinite;
                    animation-fill-mode: forwards;
                    animation-delay: 3s;
                    filter: sepia(1);
               }

               .mover {
                    width: 298px;
                    position: absolute;
                    top: -18px;
                    z-index: -4;
                    left: -539px;
                    animation: slideOutRight 28s linear infinite;
                    animation-fill-mode: forwards;
                    animation-delay: 14s;
                    filter: sepia(1);
               }

               .movee {
                    width: 420px;
                    position: absolute;
                    top: 11px;
                    z-index: -4;
                    left: -500px;
                    animation: slideOutRight 28s linear infinite;
                    animation-fill-mode: forwards;
                    animation-delay: 12s;
                    filter: sepia(1);
               }


               @keyframes slideOutRight {
                    0% {
                         transform: translateX(0);
                    }

                    100% {
                         transform: translateX(700%);
                         /* Adjust the value to slide farther */
                    }
               }
          </style>
     </head>

     <body>
          <audio autoplay loop controlsList="nodownload" style="display: none">
               <source src="music2 (2).ogg" type="audio/mpeg">
               Your browser does not support the audio element.
          </audio>

          <a class="retry-button" href="lesson5-2.php">
               <img src="retry.png" />
          </a>

          <a class="back-button" href="lesson5.php">
               <img src="back.png" />
          </a>

          <a class="home-button" href="lesson-list.php">
               <img src="home.png" />
          </a>

          <div class="image-container" id="imageContainer"></div>
          <div class="word-container" id="wordContainer"></div>
          <div class="button-container">
               <button class="button" id="properNounBtn"><?= $l52_easy_statement_1_choice_answer_1 ?></button>
               <button class="button" id="commonNounBtn"><?= $l52_easy_statement_1_choice_answer_2 ?></button>
          </div>

          <img class="logo-image" src="logo.png" alt="English Adventures Logo">

          <div class="score-label left">Directions: <?= $lessonDirections2 ?></div>

          <div class="lesson-title" style="top: 52px;"><?= $lesson2 ?></div>

          <div class="centered-board"></div>

          <div class="word-container hide" id="wordContainer"></div>

          <img class="image-right" src="traveler5.png" alt="Traveler 5 Image">

          <img class="centered-boardd animate__bounceOutUp" src="board1.png" alt="Traveler 5 Image">

          <img class="centered-boarddd animate__fadeOut" src="bg.jpg" alt="Traveler 5 Image">
          <img class="bg" src="cute_background101.png" alt="Traveler 5 Image">
          <img class="move" src="cloud.png" alt="Traveler 5 Image">
          <img class="mover" src="cloud.png" alt="Traveler 5 Image">
          <img class="movee" src="cloud.png" alt="Traveler 5 Image">
          <img class="sun" src="sun.gif" alt="Traveler 5 Image">

          <div class="name-list">
               <?php include "function/retrieve-all-scores-l5-act2.php"; ?>
          </div>

          <?php include "js/record-score.php"; ?>


          <script>
               const words = [
                    { word: "<?= $l52_easy_statement_1 ?>", isProper: <?= $l52_easy_statement_1_status_for_1 ?>, image: "data:image/png;base64,<?= $l52_easy_statement_1_image ?>" },
                    { word: "<?= $l52_easy_statement_2 ?>", isProper: <?= $l52_easy_statement_2_status_for_1 ?>, image: "data:image/png;base64,<?= $l52_easy_statement_2_image ?>" },
                    { word: "<?= $l52_easy_statement_3 ?>", isProper: <?= $l52_easy_statement_3_status_for_1 ?>, image: "data:image/png;base64,<?= $l52_easy_statement_3_image ?>" },
                    { word: "<?= $l52_easy_statement_4 ?>", isProper: <?= $l52_easy_statement_4_status_for_1 ?>, image: "data:image/png;base64,<?= $l52_easy_statement_4_image ?>" },
                    { word: "<?= $l52_easy_statement_5 ?>", isProper: <?= $l52_easy_statement_5_status_for_1 ?>, image: "data:image/png;base64,<?= $l52_easy_statement_5_image ?>" },
                    { word: "<?= $l52_easy_statement_6 ?>", isProper: <?= $l52_easy_statement_6_status_for_1 ?>, image: "data:image/png;base64,<?= $l52_easy_statement_6_image ?>" },
                    { word: "<?= $l52_easy_statement_7 ?>", isProper: <?= $l52_easy_statement_7_status_for_1 ?>, image: "data:image/png;base64,<?= $l52_easy_statement_7_image ?>" },
                    { word: "<?= $l52_easy_statement_8 ?>", isProper: <?= $l52_easy_statement_8_status_for_1 ?>, image: "data:image/png;base64,<?= $l52_easy_statement_8_image ?>" },
                    { word: "<?= $l52_easy_statement_9 ?>", isProper: <?= $l52_easy_statement_9_status_for_1 ?>, image: "data:image/png;base64,<?= $l52_easy_statement_9_image ?>" },
                    { word: "<?= $l52_easy_statement_10 ?>", isProper: <?= $l52_easy_statement_10_status_for_1 ?>, image: "data:image/png;base64,<?= $l52_easy_statement_10_image ?>" }

               ];

               const imageContainer = document.getElementById("imageContainer");
               const wordContainer = document.getElementById("wordContainer");
               const properNounBtn = document.getElementById("properNounBtn");
               const commonNounBtn = document.getElementById("commonNounBtn");

               let currentIndex = 0;

               function displayWord() {
                    if (currentIndex < words.length) {
                         const wordObj = words[currentIndex];
                         const word = wordObj.word;
                         const wordBox = `<span class="word-box">${word}</span>`;
                         wordContainer.innerHTML = wordBox;

                         const wordImage = `<img class="word-image" src="${wordObj.image}" alt="${wordObj.word}">`;
                         imageContainer.innerHTML = wordImage;
                    } else {
                         wordContainer.innerHTML = "Game Over";

                    }
               }

               function checkNounType(isProperNoun) {
                    const wordObj = words[currentIndex];
                    const correctSound = new Audio('correct.ogg');
                    const wrongSound = new Audio('wrong.ogg');

                    if (wordObj.isProper === isProperNoun) {
                         properNounBtn.classList.remove('wrong');
                         commonNounBtn.classList.remove('wrong');
                         if (isProperNoun) {
                              properNounBtn.classList.add('correct');
                         } else {
                              commonNounBtn.classList.add('correct');
                         }
                         currentIndex++;

                         // Play the correct sound
                         correctSound.play();

                         setTimeout(() => {
                              displayWord();
                              properNounBtn.classList.remove('correct');
                              commonNounBtn.classList.remove('correct');
                         }, 1500);
                    } else {
                         if (isProperNoun) {
                              properNounBtn.classList.add('wrong');
                         } else {
                              commonNounBtn.classList.add('wrong');
                         }

                         // Play the wrong sound
                         wrongSound.play();
                    }
               }

               properNounBtn.addEventListener("click", () => {
                    properNounBtn.style.color = "white"; // Change button text color to white
                    checkNounType(true);
                    setTimeout(() => {
                         properNounBtn.style.color = "#00741E"; // Change button text color back to original color
                         commonNounBtn.classList.remove("wrong"); // Remove red color from commonNounBtn
                         properNounBtn.classList.remove("wrong"); // Remove red color from properNounBtn
                    }, 1500);
               });

               commonNounBtn.addEventListener("click", () => {
                    commonNounBtn.style.color = "white"; // Change button text color to white
                    checkNounType(false);
                    setTimeout(() => {
                         commonNounBtn.style.color = "#00741E"; // Change button text color back to original color
                         commonNounBtn.classList.remove("wrong"); // Remove red color from commonNounBtn
                         properNounBtn.classList.remove("wrong"); // Remove red color from properNounBtn
                    }, 1500);
               });

               displayWord();

          </script>
     </body>

</html>