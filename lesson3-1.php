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
                    top: 100px;
                    font-size: 25px;
                    background-color: #00741e;
                    white-space: normal;
                    /* Add this property to enable text wrapping */
                    display: inline-block;
                    /* Add this property for variable box width */
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
               }

               .retry-button {
                    position: fixed;
                    margin-right: -1050px;
                    bottom: -480px;
                    transform: scale(0.1);
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
                    margin-top: 50px;
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
                    width: 180px;
                    /* Occupy the full available width */
                    color: #00741e;
                    text-align: center;
                    border: 5px solid #00741e;
                    height: 35px;
                    font-size: 28px;
                    font-weight: bold;
                    text-transform: uppercase;
                    box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.3);
                    outline: none;
               }
          </style>
     </head>

     <body>
          <a class="retry-button" href="lesson3-1.php">
               <img src="retry.png" />
          </a>

          <a class="back-button" href="lesson3.php">
               <img src="back.png" />
          </a>

          <a class="home-button" href="lesson-list.php">
               <img src="home.png" />
          </a>

          <div class="container">
               <div class="box" data-answer="box">
                    <img src="box.jpg" alt="Box" />
                    <input class="answer-input" type="text" />
               </div>
               <div class="box" data-answer="cup">
                    <img src="cup.jpg" alt="Cup" />
                    <input class="answer-input" type="text" />
               </div>
               <div class="box" data-answer="fox">
                    <img src="fox.jpg" alt="Fox" />
                    <input class="answer-input" type="text" />
               </div>
               <div class="box" data-answer="duck">
                    <img src="ducks.jpg" alt="Duck" />
                    <input class="answer-input" type="text" />
               </div>
               <div class="box" data-answer="cop">
                    <img src="cop.jpg" alt="Cop" />
                    <input class="answer-input" type="text" />
               </div>
               <div class="box" data-answer="mop">
                    <img src="mop.jpg" alt="Mop" />
                    <input class="answer-input" type="text" />
               </div>
          </div>
          <p id="result"></p>

          <img class="logo-image" src="logo.png" alt="English Adventures Logo" />

          <div class="score-label left">
               Directions: Read the words inside the cloud. On the space provided below,
               write the words with Short /a/ sound.
          </div>

          <div class="lesson-title" style="top: 52px">
               Recognizing the Short o and u Sounds
          </div>

          <div class="centered-board"></div>

          <div class="score-label right">Score: 75</div>

          <img class="image-right" src="traveler5.png" alt="Traveler 5 Image" />
          <div class="name-list">
               <?php include "function/retrieve-all-scores-l3-act1.php"; ?>
          </div>

          <?php include "js/record-score.php"; ?>
          <script>

               const boxes = document.querySelectorAll(".box");
               const resultMessage = document.getElementById("result");
               let currentIndex = 0;

               function checkAnswer(box) {
                    const userAnswer = box.querySelector(".answer-input");
                    const correctAnswer = box.getAttribute("data-answer");
                    const userInput = userAnswer.value.toLowerCase();

                    if (userInput === correctAnswer) {
                         userAnswer.style.backgroundColor = "#00741E"; // Green background color
                         userAnswer.style.color = "#fff"; // White font color
                         userAnswer.disabled = true; // Disable the input field
                    } else {
                         userAnswer.style.backgroundColor = "red"; // Red background color for incorrect answers
                         userAnswer.style.borderColor = "red"; // Red border color for incorrect answers
                         userAnswer.style.color = "#fff"; // White font color for incorrect answers
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