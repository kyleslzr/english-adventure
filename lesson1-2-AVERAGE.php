<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 1 AVERAGE - English Adventures</title>
    <link rel="stylesheet" href="css/side-score-style.css">
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Lesson 1 - English Adventures</title>
          <link rel="stylesheet" href="css/side-score-style.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
          <style>
               body {
                    overflow: hidden;
                    margin: 0;
                    padding: 0;
                    height: 100vh;
                    background-image: url('cute_background8.jpg');
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position-y: -71px;
                    font-family: Arial, sans-serif;
                    display: flex;
                    justify-content: flex-start;
                    align-items: center;
                    flex-direction: column;
                    text-align: center;
                    color: #fff;
                    position: relative;
               }

               body {
                    overflow: hidden;
                    margin: 0;
                    padding: 0;
                    height: 100vh;
                    background-image: url('cute_background8.jpg');
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position-y: -71px;
                    font-family: Arial, sans-serif;
                    display: flex;
                    justify-content: flex-start;
                    align-items: center;
                    flex-direction: column;
                    text-align: center;
                    color: #fff;
                    position: relative;
               }

               #game-container {
                    position: fixed;
                    max-width: 800px;
                    margin: 0 auto;
                    padding: 20px;
                    text-align: center;
                    top: 100px;
                    left: 50px;
               }

               h1 {
                    color: #333;
               }

               #question-container {
                    position: fixed;
                    margin-top: 13px;
                    margin-left: 292px;
               }

               #question-container img {
                    max-width: 800px;
                    height: auto;
                    border-radius: 10px;
                    /* Add border-radius for rounded corners */
                    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
                    /* Add a subtle box shadow */
                    margin-bottom: 10px;
                    /* Add some bottom margin for spacing */
                    border: 7px solid white;
               }


               #question-text {
                    line-height: 10px;
                    font-size: 19px;
                    font-weight: bold;
                    color: #00741E;
                    margin-bottom: 15px;

               }

               #word-buttons {
                    margin-bottom: 15px;
                    width: 800px;
                    height: 80px;
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                    gap: 10px;
                    background-color: #ffcc00;
                    /* padding: 14px; */
                    border-radius: 5px;
                    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
                    border: 7px solid;
               }

               button {
                    border: none;
                    font-size: 30px;
                    cursor: pointer;
                    transition: background-color 0.3s ease;
                    color: #00741E;
                    border: none;
                    cursor: pointer;
                    font-weight: bold;
                    transition: background-color 0.3s;
                    transform: translateX(0);
                    transition: transform 0.2s;
                    background-color: transparent;
                    padding: 0px;
               }

               button:hover {
                    transform: translatey(0px);
               }

               button:hover {
                    color: white;

               }

               ul {
                    list-style-type: none;
                    padding: 0;
               }

               li {
                    font-size: 50px;
                    margin-bottom: 5px;
               }

               /* Blink animation for incorrect nouns */


               button:active {
                    animation: blink 0.5s;
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

               #correct-nouns-container {
                    display: fixed;
                    font-size: 40px;
                    margin-left: 629px;
                    margin-top: 340px;
                    align-items: center;
                    white-space: nowrap;

                    max-width: 100%;
               }

               .correct-noun {
                    position: relative;
                    display: inline-table;
                    margin: 6px;
                    width: 70px;
                    color: white;
                    font-size: 35px;
                    font-weight: bold;
                    padding: 10px 10px;
                    background-color: #00741E;
                    border-radius: 80px;
                    text-align: center;
                    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
                    border: 5px solid;
                    bottom: -115px;
               }


               h2 {
                    font-size: 10px;
                    margin-top: 413px;
                    width: 798px;
                    text-align: center;
                    color: transparent;
                    text-transform: uppercase;
                    background-color: transparent;
                    padding: 10px;
                    border-radius: 5px;
                    cursor: default;
               }

               #correct-text {
                    font-size: 50px;
                    font-weight: bold;
                    color: #fff;
                    height: 60px;
                    background-color: #00741E;
                    width: 810px;
                    padding: 10px;

                    margin: 0 auto;
                    /* Center the text horizontally */
                    margin-top: 0px;
                    /* Add some top margin for spacing */


               }

               .move {
                    width: 420px;
                    position: absolute;
                    bottom: -4.5px;
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
                    bottom: -4.5px;
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
                    bottom: -4.5px;
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
                    bottom: -4.5px;
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
                    bottom: -73.5px;
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
     </head>

     <body>
          <img class="game-done" id="gjjImage" src="gj1.png" alt="" srcset="" style="display: none;">
          <img class="game-done" id="gjImage" src="gj.png" alt="" srcset="" style="display: none;">
          <audio autoplay loop controlsList="nodownload" style="display: none">
               <source src="music2 (2).ogg" type="audio/mpeg">
               Your browser does not support the audio element.
          </audio>
          <a class="retry-button" href="lesson1-2-AVERAGE.php">
               <img src="retry.png" />
          </a>

          <a class="back-button" href="lesson1.php">
               <img src="back.png" />
          </a>

          <a class="home-button" href="lesson-list.php">
               <img src="home.png" />
          </a>

          <div id="game-container">
               <div id="question-container">
                    <p id="question-text"></p>
                    <div id="word-buttons"></div>
               </div>

          </div>

          <div id="">
               <h2>Correct Nouns</h2>
               <ul id="correct-nouns-list" style="height: 46px;"></ul>
          </div>
          <script>

               // Define your questions and correct nouns here
               const questions = [
                    "Dad drives us safely in the car , enjoying the scenic route through the mountains .",
                    "These flowers are beautiful , blooming in a myriad of colors under the warm sunlight .",
                    "Sam plays with his friend Ben , sharing laughter and joy on the playground .",
                    "The bus stops at the red light , patiently waiting for the signal to continue its journey .",
                    "We saw tigers at the zoo , marveling at their majestic presence and powerful demeanor .",
                    "The boy kicked the ball , sending it soaring through the air with swift precision .",
                    "The cat is purring , contentedly nestled on the windowsill as the rain gently taps against the glass .",
                    "I flew a kite in the fields , feeling the exhilarating pull against the wind in the open expanse ."
               ];

               const images = [
                    "<img src='aan.jpg' />",
                    "<img src='ban.jpg' />",
                    "<img src='can.jpg' />",
                    "<img src='dan.jpg' />",
                    "<img src='ean.jpg' />",
                    "<img src='fan.jpg' />",
                    "<img src='gan.jpg' />",
                    "<img src='han.jpg' />"
               ];

               const correctNouns = [
                    ["Dad", "us", "car", "route", "mountains"],
                    ["These", "flowers", "colors", "sunlight"],
                    ["Sam", "friend", "Ben", "laughter", "joy", "playground"],
                    ["The", "bus", "light", "signal", "journey"],
                    ["We", "tigers", "zoo", "presence", "demeanor"],
                    ["The", "boy", "ball", "air", "precision"],
                    ["The", "cat", "windowsill", "rain", "glass"],
                    ["I", "kite", "fields", "pull", "wind", "expanse"]
               ];

               let currentQuestionIndex = 0;
               let currentWords = questions[currentQuestionIndex].split(" ");
               let selectedNouns = [];

               function displayQuestion() {
                    const questionText = document.getElementById("question-text");
                    const wordButtons = document.getElementById("word-buttons");

                    questionText.innerHTML = images[currentQuestionIndex];

                    // Create buttons for each word in the current question
                    wordButtons.innerHTML = "";
                    for (const word of currentWords) {
                         const button = document.createElement("button");
                         button.textContent = word;
                         button.addEventListener("click", () => handleWordClick(word));
                         wordButtons.appendChild(button);
                    }
               }

               const correctSound = new Audio('correct.ogg');
               const wrongSound = new Audio('wrong.ogg');

               function handleWordClick(word) {
                    const correctNounsList = document.getElementById("correct-nouns-list");

                    if (currentWords.includes(word)) {
                         if (correctNouns[currentQuestionIndex].includes(word)) {
                              // Move the noun to the correct nouns list
                              // Play the correct sound
                              correctSound.play();

                              // Move the noun to the correct nouns list
                              selectedNouns.push(word);
                              const nounItem = document.createElement("li");
                              nounItem.className = "correct-noun";
                              nounItem.textContent = word;
                              correctNounsList.appendChild(nounItem);

                              // Remove the word from the buttons
                              currentWords = currentWords.filter(w => w !== word);

                              if (selectedNouns.length === maxNouns[currentQuestionIndex]) {
                                   // Maximum number of nouns selected, wait for 1 second, then flash "Correct!" text and proceed
                                   setTimeout(() => {
                                        setTimeout(() => {
                                             flashCorrectText();
                                             setTimeout(() => {
                                                  proceedToNextQuestion();
                                             }, 1000);
                                        }, 0); // Flash "Correct!" text immediately
                                   }, 0); // Wait for 1 second
                              }
                         } else {
                              wrongSound.play();

                              // Blink the button red for a short duration
                              const button = Array.from(document.getElementById('word-buttons').querySelectorAll('button')).find(b => b.textContent === word);
                              button.style.color = "#EE2F41";
                              setTimeout(() => {
                                   button.style.color = "";
                              }, 1000);
                         }
                    }
               }

               function flashCorrectText() {
                    const wordButtons = document.getElementById("word-buttons");
                    wordButtons.innerHTML = "<p id='correct-text'>CORRECT!</p>";

                    const correctText = document.getElementById("correct-text");


               }

               function proceedToNextQuestion() {
                    if (currentQuestionIndex < questions.length - 1) {
                         currentQuestionIndex++;
                         currentWords = questions[currentQuestionIndex].split(" ");
                         selectedNouns = [];
                         const correctNounsList = document.getElementById("correct-nouns-list");
                         correctNounsList.innerHTML = ""; // Clear "Correct!" text
                         displayQuestion();
                    } else {
                         // All questions are completed
                         var img1 = document.getElementById('gjjImage');
                         var img2 = document.getElementById('gjImage');

                         img1.style.display = "block";
                         // Use setTimeout to introduce a delay of 500 milliseconds
                         setTimeout(function () {
                              img2.style.display = "block";
                         }, 500);
                    }
               }

               // Define the maximum number of nouns for each question
               const maxNouns = [5, 4, 6, 5, 5, 5, 5, 6];

               // Initialize the game with the first question
               displayQuestion();
          </script>
          <img class="logo-image" src="logo.png" alt="English Adventures Logo">

          <div class="score-label left">Directions: Click the noun/s in the sentence.</div>

          <div class="lesson-title" style="top: 52px;">Recognizing Nouns</div>

          <div class="centered-board"></div>

          <img class="centered-boardd animate__bounceOutUp" src="board1.png" alt="Traveler 5 Image">

          <img class="centered-boarddd animate__fadeOut" src="bg.jpg" alt="Traveler 5 Image" style="display: none;">

          <img class="image-right" src="traveler5.png" alt="Traveler 5 Image">
          <img class="move" src="wave.png" alt="Traveler 5 Image">
          <img class="movee" src="wave.png" alt="Traveler 5 Image">
          <img class="moveee" src="wave.png" alt="Traveler 5 Image">
          <img class="moveeee" src="wave.png" alt="Traveler 5 Image">
          <img class="moveeeee" src="boat.png" alt="Traveler 5 Image">

          <div class="name-list">
               <?php include "function/retrieve-all-scores-l1-act2.php"; ?>
          </div>
          <?php include "js/record-score.php"; ?>
     </body>

</html>