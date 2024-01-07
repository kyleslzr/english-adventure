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
<html lang="en">

     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Lesson 1 AVERAGE- English Adventures</title>
          <link rel="stylesheet" href="css/side-score-style.css">
          <script src="https://code.responsivevoice.org/responsivevoice.js"></script>
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
                    text-align: center;
                    color: #fff;

               }

               .game-container {
    flex: 1;
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
    max-width: 700px;
    max-height: 700px;
    margin-left: 453px;
    margin-top: 78px;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-column-gap: 20px;
    grid-row-gap: 15px;

    
  }
  .image-box img {
     width: 250px;
height: 240px;
    outline: 5px solid #fff;
    box-shadow: 4px 4px 8px rgba(2, 2, 2, 3);
    border-radius: 15px;
  }
  .word-container {
    flex: 1;
    text-align: center;
    max-width: 250px;
    max-height: 40px;
    margin-right: 580px;
    margin-top: 80px;
   
  }
  #word-input {
    position: relative;
    top: 81px;
    left: 22px;
    width: 242px;
    color: #00741E;
    text-align: center;
    height: 49px;
    border: none;
    padding: 5px;
    font-size: 40px;
    font-weight: bold;
    outline: 5px solid #00741E;
    border-radius: 10px;
    text-transform: uppercase;
    box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.3);
}

  .erase-container {
    position: absolute;
    bottom: 82px; /* Adjust the positioning as needed */
    right: 367px; /* Adjust the positioning as needed */
  }

  #erase-button {
    background-color: #EE2F41;
    color: #fff;
    border: none;
    cursor: pointer;
    width: 55px;
    height: 55px;
    font-size: 22px;
    font-weight: bold;
    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    border-radius: 10px;
    margin-bottom: -12px;
    margin-right: 1px;
}
       .button-clicked {
      background-color: #FFC107;
      color: #000;
      transition: background-color 1s, color 1s;
    }

    .letters-container {
    flex: 1;
    text-align: center;
    padding: 20px;
    max-width: 575px;
    max-height: 570px;
    margin-right: 538px;
    margin-top: 80px;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 4px;
  }
  .letter-button {
    margin: 3px;
    background-color: #ffcc00;
    color: #00741E;
    border: none;
    cursor: pointer;
    width: 55px;
    height: 55px;
    font-weight: bold;
    font-size: 32px;
    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  #submit-button {
    position: relative;
    left: 50px;
    top: -69px;
    padding: 2px 2px;
    background-color: #00741E;
    color: #fff;
    border: none;
    cursor: pointer;
    margin-right: 637px;
    margin-top: -19px;
    width: 123px;
    height: 55px;
    font-size: 26px;
    font-weight: bold;
    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    border-radius: 10px;
  }
  .right-container {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;


  }

               .button-container {
                    margin-top: 10px;

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

               .letter-button:hover,
               .erase-container:hover,
               #submit-button:hover {
                    filter: brightness(.8);
               }

               #word-input.incorrect-answer {
                    background-color: #EE2F41;
                    /* Change the color to red */
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
          <a class="retry-button" href="lesson5-1-AVERAGE.php">
               <img src="retry.png" />
          </a>

          <a class="back-button" href="lesson5.php">
               <img src="back.png" />
          </a>

          <a class="home-button" href="lesson-list.php">
               <img src="home.png" />
          </a>

          <img class="logo-image" src="logo.png" alt="English Adventures Logo">

          <div class="score-label left">Directions: <?= $lessonDirections1 ?></div>

          <div class="lesson-title" style="top: 52px;"><?= $lesson1 ?></div>

          <div class="centered-board"></div>

          <div class="name-list">
               <?php include "function/retrieve-all-scores-l5-act1.php"; ?>
          </div>

          <?php include "js/record-score.php"; ?>
          <img class="image-right" src="traveler5.png" alt="Traveler 5 Image">
          <img class="centered-boardd animate__bounceOutUp" src="board1.png" alt="Traveler 5 Image">

          <img class="bg" src="cute_background101.png" alt="Traveler 5 Image">
          <img class="move" src="cloud.png" alt="Traveler 5 Image">
          <img class="mover" src="cloud.png" alt="Traveler 5 Image">
          <img class="movee" src="cloud.png" alt="Traveler 5 Image">
          <img class="sun" src="sun.gif" alt="Traveler 5 Image">


          <img class="centered-boarddd animate__fadeOut" src="bg.jpg" alt="Traveler 5 Image">
          <div class="game-container">
               <div class="image-box">
                    <img id="image1" src="" alt="Image 1">
               </div>
               <div class="image-box">
                    <img id="image2" src="" alt="Image 2">
               </div>
               <div class="image-box">
                    <img id="image3" src="" alt="Image 3">
               </div>
               <div class="image-box">
                    <img id="image4" src="" alt="Image 4">
               </div>
          </div>
          <div class="right-container">
               <div class="word-container">
                    <input type="text" id="word-input" placeholder="">
               </div>
               <div class="letters-container">
  <button class="letter-button" onclick="addLetter('a')">A</button>
  <button class="letter-button" onclick="addLetter('b')">B</button>
  <button class="letter-button" onclick="addLetter('c')">C</button>
  <button class="letter-button" onclick="addLetter('d')">D</button>
  <button class="letter-button" onclick="addLetter('e')">E</button>
  <button class="letter-button" onclick="addLetter('g')">G</button>
  <button class="letter-button" onclick="addLetter('h')">H</button>
  <button class="letter-button" onclick="addLetter('i')">I</button>
  <button class="letter-button" onclick="addLetter('j')">J</button>
  <button class="letter-button" onclick="addLetter('k')">K</button>
  <button class="letter-button" onclick="addLetter('l')">L</button>
  <button class="letter-button" onclick="addLetter('m')">M</button>
  <button class="letter-button" onclick="addLetter('n')">N</button>
  <button class="letter-button" onclick="addLetter('o')">O</button>
  <button class="letter-button" onclick="addLetter('p')">P</button>
  <button class="letter-button" onclick="addLetter('q')">Q</button>
  <button class="letter-button" onclick="addLetter('r')">R</button>
  <button class="letter-button" onclick="addLetter('s')">S</button>
  <button class="letter-button" onclick="addLetter('t')">T</button>
  <button class="letter-button" onclick="addLetter('u')">U</button>
  <button class="letter-button" onclick="addLetter('v')">V</button>
  <button class="letter-button" onclick="addLetter('w')">W</button>
  <button class="letter-button" onclick="addLetter('x')">X</button>
  <button class="letter-button" onclick="addLetter('y')">Y</button>
  <button class="letter-button" onclick="addLetter('z')">Z</button>
               </div>
               <div class="button-container">
                    <button id="submit-button" onclick="checkAnswer()">SUBMIT</button>

                    <div class="erase-container">
  <button id="erase-button" onclick="eraseLetters()"><svg xmlns="http://www.w3.org/2000/svg" height="32" width="36" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M576 128c0-35.3-28.7-64-64-64H205.3c-17 0-33.3 6.7-45.3 18.7L9.4 233.4c-6 6-9.4 14.1-9.4 22.6s3.4 16.6 9.4 22.6L160 429.3c12 12 28.3 18.7 45.3 18.7H512c35.3 0 64-28.7 64-64V128zM271 175c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z"/></svg></button>
</div>
               </div>
          </div>

          <script>
               const initialImages = ['data:image/png;base64,<?= $l51_average_word_1_image ?>', 'data:image/png;base64,<?= $l51_average_word_1_image_2 ?>', 'data:image/png;base64,<?= $l51_average_word_1_image_3 ?>', 'data:image/png;base64,<?= $l51_average_word_1_image_4 ?>'];
               const duckImages = ['data:image/png;base64,<?= $l51_average_word_2_image ?>', 'data:image/png;base64,<?= $l51_average_word_2_image_2 ?>', 'data:image/png;base64,<?= $l51_average_word_2_image_3 ?>', 'data:image/png;base64,<?= $l51_average_word_2_image_4 ?>'];
               const padImages = ['data:image/png;base64,<?= $l51_average_word_3_image ?>', 'data:image/png;base64,<?= $l51_average_word_3_image_2 ?>', 'data:image/png;base64,<?= $l51_average_word_3_image_3 ?>', 'data:image/png;base64,<?= $l51_average_word_3_image_4 ?>'];
               const dotImages = ['data:image/png;base64,<?= $l51_average_word_4_image ?>', 'data:image/png;base64,<?= $l51_average_word_4_image_2 ?>', 'data:image/png;base64,<?= $l51_average_word_4_image_3 ?>', 'data:image/png;base64,<?= $l51_average_word_4_image_4 ?>'];
               const budImages = ['data:image/png;base64,<?= $l51_average_word_5_image ?>', 'data:image/png;base64,<?= $l51_average_word_5_image_2 ?>', 'data:image/png;base64,<?= $l51_average_word_5_image_3 ?>', 'data:image/png;base64,<?= $l51_average_word_5_image_4 ?>'];
               const potImages = ['data:image/png;base64,<?= $l51_average_word_6_image ?>', 'data:image/png;base64,<?= $l51_average_word_6_image_2 ?>', 'data:image/png;base64,<?= $l51_average_word_6_image_3 ?>', 'data:image/png;base64,<?= $l51_average_word_6_image_4 ?>'];
               const ratImages = ['data:image/png;base64,<?= $l51_average_word_7_image ?>', 'data:image/png;base64,<?= $l51_average_word_7_image_2 ?>', 'data:image/png;base64,<?= $l51_average_word_7_image_3 ?>', 'data:image/png;base64,<?= $l51_average_word_7_image_4 ?>'];
               const kitImages = ['data:image/png;base64,<?= $l51_average_word_8_image ?>', 'data:image/png;base64,<?= $l51_average_word_8_image_2 ?>', 'data:image/png;base64,<?= $l51_average_word_8_image_3 ?>', 'data:image/png;base64,<?= $l51_average_word_8_image_4 ?>'];
               const tenImages = ['data:image/png;base64,<?= $l51_average_word_9_image ?>', 'data:image/png;base64,<?= $l51_average_word_9_image_2 ?>', 'data:image/png;base64,<?= $l51_average_word_9_image_3 ?>', 'data:image/png;base64,<?= $l51_average_word_9_image_4 ?>'];
               const topImages = ['data:image/png;base64,<?= $l51_average_word_10_image ?>', 'data:image/png;base64,<?= $l51_average_word_10_image_2 ?>', 'data:image/png;base64,<?= $l51_average_word_10_image_3 ?>', 'data:image/png;base64,<?= $l51_average_word_10_image_4 ?>'];
               let currentAnswer = '';
               let correctAnswer = '<?= $l51_average_word_1_correct_word ?>'; // Set the initial correct answer

               function loadInitialGame() {
                    initialImages.forEach((img, index) => {
                         document.getElementById(`image${index + 1}`).src = img;
                    });

                    document.getElementById('image1').style = '';
                    document.getElementById('image2').style.display = 'block';
                    document.getElementById('image3').style.display = 'block';
                    document.getElementById('image4').style.display = 'block';

                    eraseLetters();
               }

               function loadDuckGame() {
                    duckImages.forEach((img, index) => {
                         document.getElementById(`image${index + 1}`).src = img;
                    });

                    document.getElementById('image1').style = '';
                    document.getElementById('image2').style.display = 'block';
                    document.getElementById('image3').style.display = 'block';
                    document.getElementById('image4').style.display = 'block';

                    eraseLetters();
               }

               function loadPadGame() {
                    padImages.forEach((img, index) => {
                         document.getElementById(`image${index + 1}`).src = img;
                    });

                    document.getElementById('image1').style = '';
                    document.getElementById('image2').style.display = 'block';
                    document.getElementById('image3').style.display = 'block';
                    document.getElementById('image4').style.display = 'block';

                    correctAnswer = 'pad'; // Set the correct answer to "pad"

                    eraseLetters();
               }

               function loadDotGame() {
                    dotImages.forEach((img, index) => {
                         document.getElementById(`image${index + 1}`).src = img;
                    });

                    document.getElementById('image1').style = '';
                    document.getElementById('image2').style.display = 'block';
                    document.getElementById('image3').style.display = 'block';
                    document.getElementById('image4').style.display = 'block';

                    correctAnswer = 'dot'; // Set the correct answer to "dot"

                    eraseLetters();
               }

               function loadBudGame() {
                    budImages.forEach((img, index) => {
                         document.getElementById(`image${index + 1}`).src = img;
                    });

                    document.getElementById('image1').style = '';
                    document.getElementById('image2').style.display = 'block';
                    document.getElementById('image3').style.display = 'block';
                    document.getElementById('image4').style.display = 'block';

                    correctAnswer = 'bud'; // Set the correct answer to "bud"

                    eraseLetters();
               }

               function loadPotGame() {
                    potImages.forEach((img, index) => {
                         document.getElementById(`image${index + 1}`).src = img;
                    });

                    document.getElementById('image1').style = '';
                    document.getElementById('image2').style.display = 'block';
                    document.getElementById('image3').style.display = 'block';
                    document.getElementById('image4').style.display = 'block';

                    correctAnswer = 'pot'; // Set the correct answer to "pot"

                    eraseLetters();
               }

               function loadRatGame() {
                    ratImages.forEach((img, index) => {
                         document.getElementById(`image${index + 1}`).src = img;
                    });

                    document.getElementById('image1').style = '';
                    document.getElementById('image2').style.display = 'block';
                    document.getElementById('image3').style.display = 'block';
                    document.getElementById('image4').style.display = 'block';

                    correctAnswer = 'rat'; // Set the correct answer to "rat"

                    eraseLetters();
               }

               function loadKitGame() {
                    kitImages.forEach((img, index) => {
                         document.getElementById(`image${index + 1}`).src = img;
                    });

                    document.getElementById('image1').style = '';
                    document.getElementById('image2').style.display = 'block';
                    document.getElementById('image3').style.display = 'block';
                    document.getElementById('image4').style.display = 'block';

                    correctAnswer = 'kit'; // Set the correct answer to "kit"

                    eraseLetters();
               }

               function loadTenGame() {
                    tenImages.forEach((img, index) => {
                         document.getElementById(`image${index + 1}`).src = img;
                    });

                    document.getElementById('image1').style = '';
                    document.getElementById('image2').style.display = 'block';
                    document.getElementById('image3').style.display = 'block';
                    document.getElementById('image4').style.display = 'block';

                    correctAnswer = 'ten'; // Set the correct answer to "ten"

                    eraseLetters();
               }

               function loadTopGame() {
                    topImages.forEach((img, index) => {
                         document.getElementById(`image${index + 1}`).src = img;
                    });

                    document.getElementById('image1').style = '';
                    document.getElementById('image2').style.display = 'block';
                    document.getElementById('image3').style.display = 'block';
                    document.getElementById('image4').style.display = 'block';

                    correctAnswer = 'top'; // Set the correct answer to "top"

                    eraseLetters();
               }

               function addLetter(letter, button) {
                    currentAnswer += letter;
                    document.getElementById('word-input').value = currentAnswer;

                    button.classList.add('button-clicked');

                    setTimeout(() => {
                         button.classList.remove('button-clicked');
                    }, 1000);
               }

               const correctSound = new Audio('correct.ogg');
               const wrongSound = new Audio('wrong.ogg');

               function addLetter(letter, button) {
                    currentAnswer += letter;
                    document.getElementById('word-input').value = currentAnswer;

                    button.classList.add('button-clicked');

                    setTimeout(() => {
                         button.classList.remove('button-clicked');
                    }, 1000);
               }

               function checkAnswer() {
                    const wordInput = document.getElementById('word-input');

                    if (currentAnswer.toLowerCase() === correctAnswer) {
                         correctSound.play(); // Play correct sound
                         showCorrectImage('bee.jpg');
                         responsiveVoice.speak("You're correct. The answer is " + correctAnswer, "US English Female");

                         setTimeout(() => {
                              if (correctAnswer === '<?= $l51_average_word_1_correct_word ?>') {
                                   loadDuckGame();
                                   correctAnswer = '<?= $l51_average_word_2_correct_word ?>';
                              } else if (correctAnswer === '<?= $l51_average_word_2_correct_word ?>') {
                                   loadPadGame();
                                   correctAnswer = '<?= $l51_average_word_3_correct_word ?>';
                              } else if (correctAnswer === '<?= $l51_average_word_3_correct_word ?>') {
                                   loadDotGame();
                                   correctAnswer = '<?= $l51_average_word_4_correct_word ?>';
                              } else if (correctAnswer === '<?= $l51_average_word_4_correct_word ?>') {
                                   loadBudGame();
                                   correctAnswer = '<?= $l51_average_word_5_correct_word ?>';
                              } else if (correctAnswer === '<?= $l51_average_word_5_correct_word ?>') {
                                   loadPotGame();
                                   correctAnswer = '<?= $l51_average_word_6_correct_word ?>';
                              } else if (correctAnswer === '<?= $l51_average_word_6_correct_word ?>') {
                                   loadRatGame();
                                   correctAnswer = '<?= $l51_average_word_7_correct_word ?>';
                              } else if (correctAnswer === '<?= $l51_average_word_7_correct_word ?>') {
                                   loadKitGame();
                                   correctAnswer = '<?= $l51_average_word_8_correct_word ?>';
                              } else if (correctAnswer === '<?= $l51_average_word_8_correct_word ?>') {
                                   loadTenGame();
                                   correctAnswer = '<?= $l51_average_word_9_correct_word ?>';
                              } else if (correctAnswer === '<?= $l51_average_word_9_correct_word ?>') {
                                   loadTopGame();
                                   correctAnswer = '<?= $l51_average_word_10_correct_word ?>';
                              }

                         }, 3000);
                    } else {
                         wrongSound.play(); // Play wrong sound
                         // Incorrect answer logic
                         wordInput.classList.add('incorrect-answer'); // Apply the CSS class

                         // Add a setTimeout to remove the class after a delay (adjust as needed)
                         setTimeout(() => {
                              wordInput.classList.remove('incorrect-answer');
                         }, 1000);

                         eraseLetters();
                    }
               }

               function showCorrectImage(correctImage) {
                    const correctImg = document.getElementById('image1');
                    correctImg.style.width = '500px';
                    correctImg.style.height = 'auto';
                    correctImg.style.position = 'relative';
                    correctImg.style.left = '7px';
                    correctImg.style.top = '7px';
                    correctImg.src = correctImage;
                    document.getElementById('image2').style.display = 'none';
                    document.getElementById('image3').style.display = 'none';
                    document.getElementById('image4').style.display = 'none';
               }

               function eraseLetters() {
                    currentAnswer = '';
                    document.getElementById('word-input').value = '';
               }

               // Initialize the game with the first word ('doctor')
               loadInitialGame();
          </script>
     </body>

</html>