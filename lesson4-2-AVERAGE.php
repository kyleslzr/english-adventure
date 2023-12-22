<?php
session_start();

if (!isset($_SESSION['user_ID'])) {
     header("Location: userlogin.php");
     exit();
}

$user_ID = $_SESSION['user_ID'];
$lessonActivity1 = 41;
$lessonActivity2 = 42;

include "function/retrieve-lesson-title-direction-url.php";
include "function/retrieve-lesson-4-activities.php";
?>
<!DOCTYPE html>
<html lang="en">

     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Lesson 4 AVERAGE- English Adventures</title>
          <link rel="stylesheet" href="css/side-score-style.css">
          <style>
               body {
                    overflow: hidden;
                    margin: 0;
                    padding: 0;
                    height: 100vh;
                    background-image: url('cute_background9.jpg');
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
                    z-index: -2;
               }

               .animal-container {
                    display: grid;
                    grid-template-columns: repeat(4, 1fr);
                    gap: 15px;
                    margin: 24px 5px 5px 5px;
               }

               .animal-button {

                    outline: 4px solid #00741E;
                    background-color: #ccc;
                    padding: 2px;
                    font-size: 28px;
                    font-weight: bold;
                    cursor: pointer;
                    width: 190px;
                    height: 50px;
                    /* Adjust as needed */
                    color: #00741E;
                    background-color: #ffcc00;
                    border: none;
                    border-radius: 15px;
                    font-weight: bold;
                    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);

               }

               .animal img {
                    max-width: 100%;
                    max-height: 100%;
               }

               .droppable-container {
                    display: grid;
                    grid-template-columns: repeat(4, 1fr);
                    grid-row-gap: 14px;
                    /* This sets the gap between rows */
                    grid-column-gap: 14px;
                    /* This sets the gap between columns */
                    margin: 20px 5px -60px 5px;
               }

               .droppable {
                    border: 6px solid #ffcc00;
                    width: 180px;
                    height: 173px;
                    display: flex;
                    flex-direction: column;
                    position: relative;
                    background-color: #ffcc00;
                    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);


               }

               .droppable img {
                    max-width: 70%;
                    max-height: 70%;
                    margin: 0 auto;
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

               .snow {
                    width: 560px;
                    position: absolute;
                    top: 0;
                    left: 0;
                    z-index: -2;
               }

               .snoww {
                    width: 560px;
                    position: absolute;
                    top: 0;
                    left: 552px;
                    z-index: -2;
               }

               .snowww {
                    width: 594px;
                    position: absolute;
                    top: 0;
                    right: -158px;
                    z-index: -2;
               }
          </style>
     </head>

     <body>
          <audio autoplay loop controlsList="nodownload" style="display: none">
               <source src="music2 (2).ogg" type="audio/mpeg">
               Your browser does not support the audio element.
          </audio>
          <a class="retry-button" href="lesson4-2-AVERAGE.php">
               <img src="retry.png" />
          </a>

          <a class="back-button" href="lesson4.php">
               <img src="back.png" />
          </a>

          <a class="home-button" href="lesson-list.php">
               <img src="home.png" />
          </a>

          <div class="animal-container">
               <button class="animal-button" draggable="true" data-animal="<?= $l41_average_word_1_correct_word_l42 ?>"><?= $l41_average_word_1_correct_word_l42 ?></button>
               <button class="animal-button" draggable="true" data-animal="<?= $l41_average_word_2_correct_word_l42 ?>"><?= $l41_average_word_2_correct_word_l42 ?></button>
               <button class="animal-button" draggable="true" data-animal="<?= $l41_average_word_3_correct_word_l42 ?>"><?= $l41_average_word_3_correct_word_l42 ?></button>
               <button class="animal-button" draggable="true" data-animal="<?= $l41_average_word_4_correct_word_l42 ?>"><?= $l41_average_word_4_correct_word_l42 ?></button>
               <button class="animal-button" draggable="true" data-animal="<?= $l41_average_word_5_correct_word_l42 ?>"><?= $l41_average_word_5_correct_word_l42 ?></button>
               <button class="animal-button" draggable="true" data-animal="<?= $l41_average_word_6_correct_word_l42 ?>"><?= $l41_average_word_6_correct_word_l42 ?></button>
               <button class="animal-button" draggable="true" data-animal="<?= $l41_average_word_7_correct_word_l42 ?>"><?= $l41_average_word_7_correct_word_l42 ?></button>
               <button class="animal-button" draggable="true" data-animal="<?= $l41_average_word_8_correct_word_l42 ?>"><?= $l41_average_word_8_correct_word_l42 ?></button>
          </div>
          <div class="droppable-container">
               <div class="droppable" data-animal="<?= $l41_average_word_1_correct_word_l42 ?>">
                    <img src="data:image/png;base64,<?= $l41_average_word_1_image_l42 ?>" alt="<?= $l41_average_word_1_correct_word_l42 ?>">
                    <div class="animal-word"></div>
               </div>
               <div class="droppable" data-animal="<?= $l41_average_word_2_correct_word_l42 ?>">
                    <img src="data:image/png;base64,<?= $l41_average_word_2_image_l42 ?>" alt="<?= $l41_average_word_2_correct_word_l42 ?>">
                    <div class="animal-word"></div>
               </div>
               <div class="droppable" data-animal="<?= $l41_average_word_3_correct_word_l42 ?>">
                    <img src="data:image/png;base64,<?= $l41_average_word_3_image_l42 ?>" alt="<?= $l41_average_word_3_correct_word_l42 ?>">
                    <div class="animal-word"></div>
               </div>
               <div class="droppable" data-animal="<?= $l41_average_word_4_correct_word_l42 ?>">
                    <img src="data:image/png;base64,<?= $l41_average_word_4_image_l42 ?>" alt="<?= $l41_average_word_4_correct_word_l42 ?>">
                    <div class="animal-word"></div>
               </div>
               <div class="droppable" data-animal="<?= $l41_average_word_5_correct_word_l42 ?>">
                    <img src="data:image/png;base64,<?= $l41_average_word_5_image_l42 ?>" alt="<?= $l41_average_word_5_correct_word_l42 ?>">
                    <div class="animal-word"></div>
               </div>
               <div class="droppable" data-animal="<?= $l41_average_word_6_correct_word_l42 ?>">
                    <img src="data:image/png;base64,<?= $l41_average_word_6_image_l42 ?>" alt="<?= $l41_average_word_6_correct_word_l42 ?>">
                    <div class="animal-word"></div>
               </div>
               <div class="droppable" data-animal="<?= $l41_average_word_7_correct_word_l42 ?>">
                    <img src="data:image/png;base64,<?= $l41_average_word_7_image_l42 ?>" alt="<?= $l41_average_word_7_correct_word_l42 ?>">
                    <div class="animal-word"></div>
               </div>
               <div class="droppable" data-animal="<?= $l41_average_word_8_correct_word_l42 ?>">
                    <img src="data:image/png;base64,<?= $l41_average_word_8_image_l42 ?>" alt="<?= $l41_average_word_8_correct_word_l42 ?>">
                    <div class="animal-word"></div>
               </div>
               
          </div>
          <script>

               const animals = document.querySelectorAll('.animal-button');
               const droppables = document.querySelectorAll('.droppable');

               animals.forEach(animal => {
                    animal.addEventListener('dragstart', (e) => {
                         e.dataTransfer.setData('text/plain', animal.dataset.animal);
                    });
               });

               droppables.forEach(droppable => {
                    droppable.addEventListener('dragover', (e) => {
                         e.preventDefault();
                    });

                    droppable.addEventListener('drop', (e) => {
                         e.preventDefault();
                         const draggedAnimal = e.dataTransfer.getData('text/plain');
                         const animalWordElement = droppable.querySelector('.animal-word');

                         if (draggedAnimal === droppable.dataset.animal) {
                              const matchingButton = document.querySelector(`[data-animal="${draggedAnimal}"]`);
                              const computedStyle = window.getComputedStyle(matchingButton);

                              const stylesToCopy = [
                                   'font-weight',
                                   'font-size',
                                   'color',
                                   'background-color',
                                   'padding',
                              ];

                              stylesToCopy.forEach(style => {
                                   animalWordElement.style[style] = computedStyle.getPropertyValue(style);
                              });

                              animalWordElement.style.backgroundColor = '#00741E'; // Green background
                              animalWordElement.style.color = '#fff'; // White text
                              animalWordElement.style.textTransform = 'uppercase'; // Set text to uppercase

                              animalWordElement.textContent = draggedAnimal;
                              matchingButton.disabled = true;
                              matchingButton.style.backgroundColor = '#00741E'; // Turn button grey
                              // Play the correct sound


                              const correctSound = new Audio('correct.ogg');
                              correctSound.play();
                         }
                         else {
                              // Play the wrong sound
                              const wrongSound = new Audio('wrong.ogg');
                              wrongSound.play();

                              const originalBorderColor = droppable.style.borderColor;
                              droppable.style.borderColor = '#EE2F41';

                              // Restore the original border color after a delay
                              setTimeout(() => {
                                   droppable.style.borderColor = originalBorderColor;
                              }, 1000);
                         }
                    });
               });

          </script>

          <img class="logo-image" src="logo.png" alt="English Adventures Logo">

          <div class="score-label left">Directions: <?= $lessonDirections2 ?></div>

          <div class="lesson-title" style="top: 52px;"><?= $lesson2 ?></div>

          <div class="centered-board"></div>

          <img class="image-right" src="traveler5.png" alt="Traveler 5 Image">
          <img class="centered-boardd animate__bounceOutUp" src="board1.png" alt="Traveler 5 Image">
          <img class="snow" src="snow.gif" alt="Traveler 5 Image" />
          <img class="snoww" src="snow.gif" alt="Traveler 5 Image" />
          <img class="snowww" src="snow.gif" alt="Traveler 5 Image" />

          <img class="centered-boarddd animate__fadeOut" src="bg.jpg" alt="Traveler 5 Image">
          <div class="name-list">
               <?php include "function/retrieve-all-scores-l2-act1.php"; ?>
          </div>
          <?php include "js/record-score.php"; ?>

     </body>

</html>