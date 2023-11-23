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
                    background-image: url('cute_background7.jpg');
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
                    font-size: 55px;
                    font-weight: bold;
                    padding: 5px 5px;
                    color: white;
                    border-radius: 5px;
                    background-color: #00741E;
                    width: 65px;
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
                    font-size: 50px;
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
               .vine, .vinee, .vineee {
    animation: bounceAnimation 2s linear infinite;
}

@keyframes bounceAnimation {
     0%, 20%, 50%, 80%, 100% {
    transform: translateY(0);
}
40% {
    transform: translateY(-3px);
}
60% {
    transform: translateY(9px);
}}

               .vine {
                    width: 439px;
    height: auto;
    position: absolute;
    left: 36px;
    top: -87px;
    z-index: -2;

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
    z-index: -3;
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
          <a class="retry-button" href="lesson3-2.php">
               <img src="retry.png" />
          </a>

          <a class="back-button" href="lesson3.php">
               <img src="back.png" />
          </a>

          <a class="home-button" href="lesson-list.php">
               <img src="home.png" />
          </a>

          <div class="image-container" id="imageContainer"></div>
          <div class="word-container" id="wordContainer"></div>
          <div class="button-container">
               <button class="button" id="properNounBtn">PROPER NOUN</button>
               <button class="button" id="commonNounBtn">COMMON NOUN</button>
          </div>

          <img class="logo-image" src="logo.png" alt="English Adventures Logo">

          <div class="score-label left">Directions: Identify Common Nouns and Proper Nouns</div>

          <div class="lesson-title" style="top: 52px;">Recognizing Common and Proper Nouns</div>

          <div class="centered-board"></div>

          <div class="word-container hide" id="wordContainer"></div>
          

          <img class="image-right" src="traveler5.png" alt="Traveler 5 Image">

          <img class="centered-boardd animate__bounceOutUp" src="board1.png" alt="Traveler 5 Image">

<img class="centered-boarddd animate__fadeOut" src="bg.jpg" alt="Traveler 5 Image">
<img class="vine animate__bounce" src="vine1.png" alt="Traveler 5 Image" />
          <img class="vinee animate__bounce" src="vine2.png" alt="Traveler 5 Image" />
          <img class="bush animate__bounce" src="bush.webp" alt="Traveler 5 Image" />

          <div class="name-list">
               <?php include "function/retrieve-all-scores-l3-act2.php"; ?>
          </div>

          <?php include "js/record-score.php"; ?>

          <script>

               const words = [
                    { word: "Starbucks", isProper: true, image: "Starbucks.jpg" },
                    { word: "chocolate", isProper: false, image: "chocolate.jpg" },
                    { word: "cologne", isProper: false, image: "cologne.jpg" },
                    { word: "milk", isProper: false, image: "milk.jpg" },
                    { word: "Colgate", isProper: true, image: "Colgate.jpg" },
                    { word: "notebook", isProper: false, image: "notebook.jpg" },
                    { word: "Manila", isProper: true, image: "Manila.jpg" },
                    { word: "SM", isProper: true, image: "SM.jpg" },
                    { word: "envelope", isProper: false, image: "envelope.jpg" },
                    { word: "Snoopy", isProper: true, image: "Snoopy.jpg" }
               ];

               const imageContainer = document.getElementById("imageContainer");
               const wordContainer = document.getElementById("wordContainer");
               const properNounBtn = document.getElementById("properNounBtn");
               const commonNounBtn = document.getElementById("commonNounBtn");

               let currentIndex = 0;

               function displayWord() {
                    if (currentIndex < words.length) {
                         const wordObj = words[currentIndex];
                         const wordBoxes = wordObj.word
                              .toUpperCase()
                              .split("")
                              .map(letter => `<div class="word-box">${letter}</div>`)
                              .join("");
                         wordContainer.innerHTML = wordBoxes;

                         const wordImage = `<img class="word-image" src="${wordObj.image}" alt="${wordObj.word}">`;
                         imageContainer.innerHTML = wordImage;
                    } else {
                         wordContainer.innerHTML = "Game Over";
                         imageContainer.innerHTML = ""; // Clear image container
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