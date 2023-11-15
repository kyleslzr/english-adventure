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
      white-space: normal; /* Add this property to enable text wrapping */
      display: inline-block; /* Add this property for variable box width */
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

  </style>
</head>
<body>
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
      } else {
        const originalBorderColor = droppable.style.borderColor;
        droppable.style.borderColor = 'red';
        setTimeout(() => {
          droppable.style.borderColor = originalBorderColor;
        }, 1000);
      }
    });
  });

</script>


<img class="logo-image" src="logo.png" alt="English Adventures Logo">
  
  <div class="score-label left">Directions: Read the words inside the cloud. On the space provided below, write the words with Short /a/ sound.</div>

  <div class="lesson-title" style="top: 52px;">Recognizing the Short i Sounds</div>
  
  <div class="centered-board"></div>

  <div class="score-label right">Score: 75</div>

  
  <img class="image-right" src="traveler5.png" alt="Traveler 5 Image">
<div class="name-list">
     <?php include "function/retrieve-all-scores-l2-act1.php"; ?>
</div>
<?php include "js/record-score.php"; ?>

</body>
</html>