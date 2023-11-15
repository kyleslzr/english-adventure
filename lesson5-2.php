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
                    max-width: 320px;
                    height: auto;
                    outline: 15px solid white;
                    box-shadow: 12px 12px 12px rgba(3, 3, 3, 3);
                    border-radius: 5px;

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
               <button class="button" id="properNounBtn">A</button>
               <button class="button" id="commonNounBtn">AN</button>
          </div>

          <img class="logo-image" src="logo.png" alt="English Adventures Logo">

          <div class="score-label left">Directions: Read the sentences carefully. Choose between ‘a’ or ‘an’ to complete
               the sentence.</div>

          <div class="lesson-title" style="top: 52px;">Using A and An</div>

          <div class="centered-board"></div>

          <div class="score-label right">Score: 75</div>
          <div class="word-container hide" id="wordContainer"></div>
          
          <img class="image-right" src="traveler5.png" alt="Traveler 5 Image">
          <div class="name-list">
               <?php include "function/retrieve-all-scores-l5-act2.php"; ?>
          </div>

          <?php include "js/record-score.php"; ?>


          <script>
               const words = [
                    { word: "There is ___ cat in the yard.", isProper: true, image: "1cat.jpg" },
                    { word: "___ car is faster than ___ horse.", isProper: true, image: "1bats.jpg" },
                    { word: "If there is ___ answer, I'll find it.", isProper: false, image: "1legs.jpg" },
                    { word: "I see ___ owl on the branch.", isProper: false, image: "1shoes.jpg" },
                    { word: "Mom has ___ red dress.", isProper: true, image: "1door.jpg" },
                    { word: "Frank wants ___ new bicycle.", isProper: true, image: "1mat.jpg" },
                    { word: "The teacher read ___ story.", isProper: true, image: "1mates.jpg" },
                    { word: "___ event for my birthday.", isProper: false, image: "1desk.jpg" },
                    { word: "Put ___ apple on your plate.", isProper: false, image: "1hats.jpg" },
                    { word: "Read me ___ story.", isProper: true, image: "1boots.jpg" }

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
                    if (wordObj.isProper === isProperNoun) {
                         properNounBtn.classList.remove("wrong");
                         commonNounBtn.classList.remove("wrong");
                         if (isProperNoun) {
                              properNounBtn.classList.add("correct");
                         } else {
                              commonNounBtn.classList.add("correct");
                         }
                         currentIndex++;
                         setTimeout(() => {
                              displayWord();
                              properNounBtn.classList.remove("correct");
                              commonNounBtn.classList.remove("correct");
                         }, 1500);
                    } else {
                         if (isProperNoun) {
                              properNounBtn.classList.add("wrong");
                         } else {
                              commonNounBtn.classList.add("wrong");
                         }
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