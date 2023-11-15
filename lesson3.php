<!DOCTYPE html>
<html>
<head>
  <title>Lesson 1 - English Adventures</title>
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
      justify-content: flex-start;
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
      font-size: 60px;
      font-weight: bold;
      margin-top: 50px;
      background-color: #00741E;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: default;
      box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
      outline: 4px solid #fff; /* Add an outline */
    }

    .lesson-bar {
      width: 100%;
      padding: 10px 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 50px;
      margin-top: 20px;
      position: relative;
    }

    .scroll-icon::after {
      content: "";
      background-image: url('scroll1.png');
      width: 1000px;
      height: 600px;
      background-size: contain;
      background-repeat: no-repeat;
      position: absolute;
      left: 50px;
      top: 170px;
    }

    .lesson-labels {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      gap: 10px;
      position: absolute;
      left: 180px;
      top: 180px;
      z-index: 1;
    }

    .lesson-labels .lesson-label {
      background-color: #00741E;
      padding: 10px 10px;
      font-size: 40px;
      font-weight: bold;
      border-radius: 5px;
      cursor: default;
      box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .score-button,
    .play-button {
      display: inline-block;
      padding: 5px 10px;
      border-radius: 5px;
      font-size: 40px;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
      position: relative;
      left: 280px;
      top: 0px;
	text-decoration: none; /* Remove underline from links */
    }
  
     .play-button:hover {
      background-color: #ffa500;
    }

    .score-button {
      background-color: #FF5252;
      color: #fff;
      margin-right: 10px;
      pointer-events: none; /* Make the score button unclickable */
    }

    .play-button {
      background-color: #ffcc00;
      color: #00741E;
    }

    .lesson-labels .button-group {
      display: fixed;
      align-items: center;
    }

    .recognizing-sounds {
      
      position: fixed;
      left: 151px;
      top: 300px;
      
    }
    .recognizing-sounds .lesson-label {
      padding: 10px 30px;
    }

    .recognizing-nouns {
      position: fixed;
      left: 150px;
      top: 480px;
    }

    .recognizing-nouns .lesson-label {
      padding: 10px 10px;
    }

    .traveler-image {
      position: absolute;
      top: 65px;
      right: 40px;
      width: auto;
      height: 700px;
    }
.home-button {
  position: fixed;
  margin-right: -1410px;
  bottom: -480px;
  transform: scale(0.10);
  z-index: 10;
}

  </style>
</head>
<body>
    <a class="home-button" href="lesson-list.php">
        <img src="home.png" />
    </a>

  <img class="logo-image" src="logo.png" alt="English Adventures Logo">
  <div class="lesson-title">Lesson 3</div>
  <div class="lesson-bar">
    <div class="scroll-icon"></div>
    <div class="lesson-labels recognizing-sounds">
      <div class="lesson-label">Recognizing the Short o and u Sounds</div>
      <div class="button-group">
        <div class="score-button">10/10</div>
       <a href="lesson3-1.php" class="play-button">Play</a>
      </div>
    </div>
    <div class="lesson-labels recognizing-nouns">
      <div class="lesson-label">Recognizing Common and Proper Nouns</div>
      <div class="button-group">
        <div class="score-button">10/10</div>
        <a href="lesson3-2.php" class="play-button">Play</a>
 
      </div>
    </div>
  </div>
  <img class="traveler-image" src="traveler4.png" alt="Traveler 4">
</body>
</html>
