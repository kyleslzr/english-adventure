<!DOCTYPE html>
<html lang="en">
     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Lesson 1 - English Adventures</title>
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
                    font-size: 40px;
                    font-family: Arial, sans-serif;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-direction: column;
                    text-align: center;
                    color: #fff;
                    position: relative;
                    min-height: 100vh;
                    background-color: #f0f0f0;
               }

               #game-container {
                    background-color: white;
                    padding: 20px;
                    border-radius: 8px;
                    box-shadow: 10px 6px 6px rgba(0, 0, 0, 0.1);
               }

               .clickable {
                    background-color: #ffcc00;
                    cursor: pointer;
                    color: black;
               }

               .logo-image {
                    position: absolute;
                    top: 10px;
                    left: 10px;
                    width: auto;
                    height: 80px;
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
                    top: 100px;
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

               .final-score {
                    font-size: 40px;
                    font-weight: bold;
                    color: #000;
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
          </style>
     </head>
     <body>
          <a class="retry-button" href="lesson4-1.php">
               <img src="retry.png" />
          </a>
          <a class="back-button" href="lesson4.php">
               <img src="back.png" />
          </a>
          <a class="home-button" href="lesson-list.php">
               <img src="home.png" />
          </a>

          <img class="logo-image" src="logo.png" alt="English Adventures Logo">
          <div class="score-label left">Directions: Click the words with /b/ sounds.</div>
          <div class="lesson-title" style="top: 52px;">Pronouncing the words with b and p</div>
          <div class="centered-board"></div>
          <div class="score-label right">Score: 0</div>
          <img class="image-right" src="traveler5.png" alt="Traveler 5 Image">
          <div id="game-container">
               <p id="sentence-container">Click on the correct answer: <span class="clickable">This</span> is a <span
                         class="clickable">simple</span> word <span class="clickable">click</span> game.</p>
          </div>

          <div class="name-list">
               <?php include "function/retrieve-all-scores-l4-act1.php"; ?>
          </div>

          <?php include "js/record-score.php"; ?>
     </body>
</html>