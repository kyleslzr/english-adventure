<!DOCTYPE html>
<html lang="en">

     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Lesson 1 DIFFICULT- English Adventures</title>
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
                    margin-left: 594px;
                    margin-top: 87px;
                    display: grid;
                    grid-template-columns: repeat(2, 1fr);
                    grid-column-gap: 20px;
                    /* Column gap of 20px */
                    grid-row-gap: 15px;
                    /* Row gap of 10px */

               }

               .image-box img {
                    width: 250px;
                    height: auto;
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
                    width: 250px;
                    /* Occupy the full available width */
                    color: #00741E;
                    text-align: center;
                    height: 60px;
                    border: none;
                    padding: 5px;
                    /* Add padding for a comfortable typing area */
                    font-size: 40px;
                    font-weight: bold;
                    outline: 5px solid #00741E;
                    border-radius: 15px;
                    text-transform: uppercase;
                    box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.3);
               }

               .erase-container {
                    position: absolute;
                    bottom: 84px;
                    /* Adjust the positioning as needed */
                    right: 367px;
                    /* Adjust the positioning as needed */
               }

               #erase-button {
                    background-color: #EE2F41;
                    color: #fff;
                    border: none;
                    cursor: pointer;
                    width: 90px;
                    height: 60px;
                    font-size: 22px;
                    font-weight: bold;
                    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
                    border-radius: 10px;
                    margin-bottom: -18px;
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
                    max-width: 570px;
                    max-height: 570px;
                    margin-right: 570px;
                    margin-top: 20px;
                    display: grid;
                    grid-template-columns: repeat(3, 1fr);
                    gap: 1px;
               }

               .letter-button {
                    margin: 5px;
                    background-color: #ffcc00;
                    color: #00741E;
                    border: none;
                    cursor: pointer;
                    width: 78px;
                    height: 60px;
                    font-weight: bold;
                    font-size: 40px;
                    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);

                    border-radius: 10px
               }

               #submit-button {
                    padding: 2px 2px;
                    background-color: #00741E;
                    color: #fff;
                    border: none;
                    cursor: pointer;
                    margin-right: 670px;
                    margin-top: -23px;
                    width: 158px;
                    height: 60px;
                    font-size: 35px;
                    font-weight: bold;
                    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
                    border-radius: 10px
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
          <a class="retry-button" href="lesson5-1-DIFFICULT.php">
               <img src="retry.png" />
          </a>

          <a class="back-button" href="lesson5.php">
               <img src="back.png" />
          </a>

          <a class="home-button" href="lesson-list.php">
               <img src="home.png" />
          </a>

          <img class="logo-image" src="logo.png" alt="English Adventures Logo">

          <div class="score-label left">Directions: Look at the pictures. Identify whether it has /d/ or /t/ sounds.
               Four Pictures One Word.</div>

          <div class="lesson-title" style="top: 52px;">Pronouncing words with the Sounds of d and t</div>

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
                    <button class="letter-button" onclick="addLetter('c')">C</button>
                    <button class="letter-button" onclick="addLetter('d')">D</button>
                    <button class="letter-button" onclick="addLetter('e')">E</button>
                    <button class="letter-button" onclick="addLetter('b')">B</button>
                    <button class="letter-button" onclick="addLetter('i')">I</button>
                    <button class="letter-button" onclick="addLetter('k')">K</button>
                    <button class="letter-button" onclick="addLetter('l')">L</button>
                    <button class="letter-button" onclick="addLetter('n')">N</button>
                    <button class="letter-button" onclick="addLetter('o')">O</button>
                    <button class="letter-button" onclick="addLetter('p')">P</button>
                    <button class="letter-button" onclick="addLetter('r')">R</button>
                    <button class="letter-button" onclick="addLetter('s')">S</button>
                    <button class="letter-button" onclick="addLetter('t')">T</button>
                    <button class="letter-button" onclick="addLetter('u')">U</button>
               </div>
               <div class="button-container">
                    <button id="submit-button" onclick="checkAnswer()">SUBMIT</button>

                    <div class="erase-container">
                         <button id="erase-button" onclick="eraseLetters()">ERASE</button>
                    </div>
               </div>
          </div>

          <script>
               const initialImages = ['doctorhide1.jpg', 'doctorhide2.jpg', 'doctorhide3.jpg', 'doctorhide4.jpg'];
               const duckImages = ['duck1.jpg', 'duck2.jpg', 'duck3.jpg', 'duck4.jpg'];
               const padImages = ['pad1.jpg', 'pad2.jpg', 'pad3.jpg', 'pad4.jpg'];
               const dotImages = ['dot1.jpg', 'dot2.jpg', 'dot3.jpg', 'dot4.jpg'];
               const budImages = ['bud1.jpg', 'bud2.jpg', 'bud3.jpg', 'bud4.jpg'];
               const potImages = ['pot1.jpg', 'pot2.jpg', 'pot3.jpg', 'pot4.jpg'];
               const ratImages = ['rat1.jpg', 'rat2.jpg', 'rat3.jpg', 'rat4.jpg'];
               const kitImages = ['kit1.jpg', 'kit2.jpg', 'kit3.jpg', 'kit4.jpg'];
               const tenImages = ['ten1.jpg', 'ten2.jpg', 'ten3.jpg', 'ten4.jpg'];
               const topImages = ['top1.jpg', 'top2.jpg', 'top3.jpg', 'top4.jpg'];
               let currentAnswer = '';
               let correctAnswer = 'doctor'; // Set the initial correct answer

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
                         showCorrectImage(correctAnswer + '.jpg');
                         const pronounceCorrect = new Audio(`pronounce/${correctAnswer}.mp3`);
                         pronounceCorrect.play();
                         
                         setTimeout(() => {
                              if (correctAnswer === 'doctor') {
                                   loadDuckGame();
                                   correctAnswer = 'duck';
                              } else if (correctAnswer === 'duck') {
                                   loadPadGame();
                                   correctAnswer = 'pad';
                              } else if (correctAnswer === 'pad') {
                                   loadDotGame();
                                   correctAnswer = 'dot';
                              } else if (correctAnswer === 'dot') {
                                   loadBudGame();
                                   correctAnswer = 'bud';
                              } else if (correctAnswer === 'bud') {
                                   loadPotGame();
                                   correctAnswer = 'pot';
                              } else if (correctAnswer === 'pot') {
                                   loadRatGame();
                                   correctAnswer = 'rat';
                              } else if (correctAnswer === 'rat') {
                                   loadKitGame();
                                   correctAnswer = 'kit';
                              } else if (correctAnswer === 'kit') {
                                   loadTenGame();
                                   correctAnswer = 'ten';
                              } else if (correctAnswer === 'ten') {
                                   loadTopGame();
                                   correctAnswer = 'top';
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