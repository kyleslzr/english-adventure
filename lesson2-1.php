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
      background-image: url('cute_background4.jpg');
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

    .animal-container {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap:15px;
    margin: 24px 5px 5px 5px;
  }
  .animal-button {
     
    outline: 4px solid #00741E;
    background-color: #ccc;
    padding: 10px;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
      width: 190px;
      height: 50px; /* Adjust as needed */
      color: #00741E;
      background-color: #ffcc00;
      border: none;
      border-radius: 15px;
      font-weight: bold;
      box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
   
  }

  .animal-button:hover {
    filter: brightness(.8);
  }
  .animal img {
    max-width: 100%;
    max-height: 100%;
  }
     .droppable-container {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-row-gap: 14px; /* This sets the gap between rows */
    grid-column-gap: 14px; /* This sets the gap between columns */
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
    max-width: 100%;
    max-height: 100%;
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

               .flies {
                width: 438px;
                position: absolute;
                top: -86px;
                right: -49px;
                filter: saturate(2);
                z-index: -3;
                mix-blend-mode: lighten;
               }

               .fliess {
                width: 689px;
                position: absolute;
                bottom: -407px;
                right: -190px;
                filter: saturate(2);
                z-index: -2;
                mix-blend-mode: lighten;
               }

               .fliesss {
                width: 748px;
                position: absolute;
                top: -194px;
                left: -90px;
                filter: saturate(2);
                z-index: -2;
                mix-blend-mode: lighten;
               }

               


  </style>
</head>
<body>
<audio autoplay loop controlsList="nodownload" style="display: none">
  <source src="music2 (2).ogg" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
    <a class="retry-button" href="lesson2-1.php">
        <img src="retry.png" />
    </a>

    <a class="back-button" href="lesson2.php">
        <img src="back.png" />
    </a>

    <a class="home-button" href="lesson-list.php">
        <img src="home.png" />
    </a>

<div class="animal-container">
  <button class="animal-button" draggable="true" data-animal="kit">KIT</button>
  <button class="animal-button" draggable="true" data-animal="mix">MIX</button>
  <button class="animal-button" draggable="true" data-animal="pin">PIN</button>
  <button class="animal-button" draggable="true" data-animal="zip">ZIP</button>
  <button class="animal-button" draggable="true" data-animal="bin">BIN</button>
  <button class="animal-button" draggable="true" data-animal="bib">BIB</button>
  <button class="animal-button" draggable="true" data-animal="lip">LIP</button>
  <button class="animal-button" draggable="true" data-animal="pig">PIG</button>
</div>
<div class="droppable-container">
  <div class="droppable" data-animal="bib">
    <img src="bib.jpg" alt="bib">
    <div class="animal-word"></div>
  </div>
  <div class="droppable" data-animal="bin">
    <img src="bin.jpg" alt="bin">
    <div class="animal-word"></div>
  </div>
  <div class="droppable" data-animal="lip">
    <img src="lip.jpg" alt="lip">
    <div class="animal-word"></div>
  </div>
  <div class="droppable" data-animal="pin">
    <img src="pinn.jpg" alt="pin">
    <div class="animal-word"></div>
  </div>
  <div class="droppable" data-animal="kit">
    <img src="kit (2).jpg" alt="kit">
    <div class="animal-word"></div>
  </div>
  <div class="droppable" data-animal="mix">
    <img src="mix.jpg" alt="mix">
    <div class="animal-word"></div>
  </div>
  <div class="droppable" data-animal="pig">
    <img src="piig.jpg" alt="pig">
    <div class="animal-word"></div>
  </div>
  <div class="droppable" data-animal="zip">
    <img src="zip.jpg" alt="zip">
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
  
  <div class="score-label left">Directions: Drag the words with the short "i" sound and drop them onto the corresponding pictures.</div>

  <div class="lesson-title" style="top: 52px;">Recognizing the Short i Sounds</div>
  
  <div class="centered-board"></div>
  
  <img class="image-right" src="traveler5.png" alt="Traveler 5 Image">
  <img class="centered-boardd animate__bounceOutUp" src="board1.png" alt="Traveler 5 Image">

<img class="centered-boarddd animate__fadeOut" src="bg.jpg" alt="Traveler 5 Image">
<img class="flies" src="flies.gif" alt="Traveler 5 Image">
<img class="fliess" src="flies.gif" alt="Traveler 5 Image">
<img class="fliesss" src="flies.gif" alt="Traveler 5 Image">

<div class="name-list">
     <?php include "function/retrieve-all-scores-l2-act1.php"; ?>
</div>
<?php include "js/record-score.php"; ?>

</body>
</html>