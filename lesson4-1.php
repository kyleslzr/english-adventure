








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
    grid-column-gap: 20px; /* Column gap of 20px */
    grid-row-gap: 15px; /* Row gap of 10px */
    
  }
  .image-box {
  
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
    color: #00741E;
    text-align: center;
    height: 60px;
    border: none;
    padding: 5px;
    font-size: 40px;
    font-weight: bold;
    outline: 5px solid #00741E;
    border-radius: 15px;
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
    width: 90px;
    height: 60px;
    font-size: 22px;
    font-weight: bold;
    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    border-radius: 10px;
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
    height:60px;
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
    margin-top: 15px;

}.logo-image {
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
.letter-button:hover, .erase-container:hover, #submit-button:hover {
  filter: brightness(.8);
}

#word-input.incorrect-answer {
    background-color: #EE2F41; /* Change the color to red */
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
  
  <div class="score-label left">Directions: Look at the pictures. Identify whether it has /b/ or /p/ sounds. Four Pictures One Word.</div>

  <div class="lesson-title" style="top: 52px;">Pronouncing the words with b and p</div>
  
  <div class="centered-board"></div>

  <div class="name-list">
    <?php include "function/retrieve-all-scores-l4-act1.php"; ?>
</div>
    <?php include "js/record-score.php"; ?>

  <img class="image-right" src="traveler5.png" alt="Traveler 5 Image">

  <img class="centered-boardd animate__bounceOutUp" src="board1.png" alt="Traveler 5 Image">
  <img class="snow" src="snow.gif" alt="Traveler 5 Image" />
  <img class="snoww" src="snow.gif" alt="Traveler 5 Image" />
  <img class="snowww" src="snow.gif" alt="Traveler 5 Image" />


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
    <button class="letter-button" onclick="addLetter('h')">H</button>
    <button class="letter-button" onclick="addLetter('w')">W</button>
    <button class="letter-button" onclick="addLetter('n')">N</button>
    <button class="letter-button" onclick="addLetter('o')">O</button>
    <button class="letter-button" onclick="addLetter('p')">P</button>
    <button class="letter-button" onclick="addLetter('r')">R</button>
    <button class="letter-button" onclick="addLetter('x')">X</button>
    <button class="letter-button" onclick="addLetter('g')">G</button>
    <button class="letter-button" onclick="addLetter('u')">U</button>
  </div>
<div class="button-container">
  <button id="submit-button" onclick="checkAnswer()">SUBMIT</button>

<div class="erase-container">
  <button id="erase-button" onclick="eraseLetters()">ERASE</button>
</div>

<script>
  const initialImages = ['bee1.jpg', 'bee2.jpg', 'bee3.jpg', 'bee4.jpg'];
  const duckImages = ['bag1.jpg', 'bag2.jpg', 'bag3.jpg', 'bag4.jpg'];
  const padImages = ['box1.jpg', 'box2.jpg', 'box3.jpg', 'box4.jpg'];
  const dotImages = ['web1.jpg', 'web2.jpg', 'web3.jpg', 'web4.jpg'];
  const budImages = ['rib1.jpg', 'rib2.jpg', 'rib3.jpg', 'rib4.jpg'];
  const potImages = ['pig1.jpg', 'pig2.jpg', 'pig3.jpg', 'pig4.jpg'];
  const ratImages = ['hip1.jpg', 'hip2.jpg', 'hip3.jpg', 'hip4.jpg'];
  const kitImages = ['cup1.jpg', 'cup2.jpg', 'cup3.jpg', 'cup4.jpg'];
  const tenImages = ['cop1.jpg', 'cop2.jpg', 'cop3.jpg', 'cop4.jpg'];
  const topImages = ['pin1.jpg', 'pin2.jpg', 'pin3.jpg', 'pin4.jpg'];
  let currentAnswer = '';
  let correctAnswer = 'bee'; // Set the initial correct answer

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

// Define audio elements for correct and incorrect sounds
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
        setTimeout(() => {
            if (correctAnswer === 'bee') {
                loadDuckGame();
                correctAnswer = 'bag';
            } else if (correctAnswer === 'bag') {
                loadPadGame();
                correctAnswer = 'box';
            } else if (correctAnswer === 'box') {
                loadDotGame();
                correctAnswer = 'web';
            } else if (correctAnswer === 'web') {
                loadBudGame();
                correctAnswer = 'rib';
            } else if (correctAnswer === 'rib') {
                loadPotGame();
                correctAnswer = 'pig';
            } else if (correctAnswer === 'pig') {
                loadRatGame();
                correctAnswer = 'hip';
            } else if (correctAnswer === 'hip') {
                loadKitGame();
                correctAnswer = 'cup';
            } else if (correctAnswer === 'cup') {
                loadTenGame(); 
                correctAnswer = 'cop';
            } else if (correctAnswer === 'cop') {
                loadTopGame();
                correctAnswer = 'pin';
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

