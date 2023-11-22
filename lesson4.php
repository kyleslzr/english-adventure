

<!DOCTYPE html>
<html>
<head>
  <title>Lesson 4 - English Adventures</title>
  <link rel="stylesheet" href="css/side-score-style.css">
  <link rel="stylesheet" href="css/lesson-button-style.css">
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
      color: white;
      background-color: #00741E;
      padding: 10px 155px;
      font-size: 40px;
      font-weight: bolder;
      border-radius: 5px;
      cursor: default;
      box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .score-button,
    .play-button {
      display: inline-block;
      padding: 11px 15px;
      border-radius: 50px;
      font-size: 30px;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
      position: relative;
      left: 250px;
      top: 1px;
      text-decoration: none; /* Remove underline from links */
    }

    .tutor-button {
      display: inline-block;
      align-items: center;
      justify-content: center;
      padding: 11px 15px;
      border-radius: 50px;
      font-size: 30px;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
      position: relative;
      left: 250px;
      top: 1px;
      margin-right: 7px;
      text-decoration: none; /* Remove underline from links */
    }
  
    .play-button:hover, .tutor-button:hover {
      filter: brightness(.8);
    }

    .score-button {
      background-color: #FF5252;
      color: #fff;
      margin-right: 10px;
      pointer-events: none; /* Make the score button unclickable */
    }

    .play-button, .tutor-button {
      background-color: #ffcc00;
      color: #00741E;
    }

    .lesson-labels .button-group {
      display: flex;
      align-items: center;
    }

    .recognizing-sounds {
      position: relative;
      left: -220px;
      top: 200px;
    }

    .recognizing-nouns {
      position: relative;
      left: -215px;
      top: 200px;
    }

    .recognizing-nouns .lesson-label {
      padding: 10px 197px;
    }

    @keyframes stretchAnimation {
               0%, 100% {
               transform: translateY(0) scaleY(1);
               }
               50% {
                transform: translateY(-1.1%) scaleY(1.025);
               }
                    }

    .traveler-image {
      position: absolute;
      top: 65px;
      right: 40px;
      width: auto;
      height: 700px;
      animation: stretchAnimation 3s infinite;     

    }
.home-button {
  position: fixed;
  margin-right: -1410px;
  bottom: -480px;
  transform: scale(0.10);
  z-index: 10;
}

.lesson-btn {
  
  width: 100%;
    text-align: start;
    margin-left: -93px;

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

               .lesson-video {
  width: 873px;
    height: 390px;
    margin: 20px 0;
    border: 5px solid #2c0f11;
    border-radius: 17px;
    position: absolute;
    z-index: 100;
    top: 234px;
    left: 104px;
    background-color: #00741e;;
}

  </style>
<script>
        function goHome() {
            window.location.href = 'background_page.html';
        }

        document.addEventListener("DOMContentLoaded", function () {
        // Ensure the video and close button are initially hidden on page load
        var videoElement = document.getElementById("tutorialVideo");
        var closeButton = document.getElementById("closeVideoButton");

        videoElement.style.display = "none";
        closeButton.style.display = "none";
    });

    function goHome() {
        window.location.href = 'background_page.html';
    }

    function showTutorialVideo() {
        var videoElement = document.getElementById("tutorialVideo");
        var closeButton = document.getElementById("closeVideoButton");

        videoElement.style.display = "block";
        closeButton.style.display = "block";
    }

    function closeTutorialVideo() {
        var videoElement = document.getElementById("tutorialVideo");
        var closeButton = document.getElementById("closeVideoButton");

        videoElement.style.display = "none";
        closeButton.style.display = "none";
    }
</script>
</head>
<body>
    <a class="home-button" href="lesson-list.php">
        <img src="home.png" />
    </a>

    <audio autoplay loop controlsList="nodownload" style="display: none">
  <source src="music.ogg" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>


<video id="tutorialVideo" class="lesson-video" controls style="display: none;">
  <source src="l41.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>

<video id="tutorialVideo" class="lesson-videoo" controls style="display: none;">
  <source src="l42.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>

<button id="closeVideoButton" onclick="closeTutorialVideo()" style="
    display: block;
    font-size: 24px;
    position: absolute;
    background-color: rgb(255, 204, 0);
    width: 42px;
    height: 42px;
    border-radius: 60px;
    top: 265px;
    right: 562px;
    z-index: 105;
    border-style: none;
    box-shadow: rgba(0, 0, 0, 0.3) 2px 2px 4px;
    cursor: pointer;
    
"><svg xmlns="http://www.w3.org/2000/svg" height="1.2em" viewBox="0 0 384 512" style="
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 4px;
"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#00741e}</style><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
</svg></button>

  <img class="logo-image" src="logo.png" alt="English Adventures Logo">
  <div class="lesson-title">Lesson 4</div>
  <div class="lesson-bar">
    <div class="scroll-icon"></div>
    <div class="lesson-labels recognizing-sounds">
      <div class="lesson-label" style="padding: 10px 41px;">Pronouncing words with the<br>Sounds of b and p</div>
      <div class="lesson-btn">
      <a href="#" class="tutor-button" onclick="showTutorialVideo()">
        <div style="
           display: flex;
           align-items: center;
        
          ">
          <svg style="margin-right: 5px;" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#00741e}</style><path d="M0 96C0 60.7 28.7 32 64 32H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM48 368v32c0 8.8 7.2 16 16 16H96c8.8 0 16-7.2 16-16V368c0-8.8-7.2-16-16-16H64c-8.8 0-16 7.2-16 16zm368-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V368c0-8.8-7.2-16-16-16H416zM48 240v32c0 8.8 7.2 16 16 16H96c8.8 0 16-7.2 16-16V240c0-8.8-7.2-16-16-16H64c-8.8 0-16 7.2-16 16zm368-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V240c0-8.8-7.2-16-16-16H416zM48 112v32c0 8.8 7.2 16 16 16H96c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H64c-8.8 0-16 7.2-16 16zM416 96c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H416zM160 128v64c0 17.7 14.3 32 32 32H320c17.7 0 32-14.3 32-32V128c0-17.7-14.3-32-32-32H192c-17.7 0-32 14.3-32 32zm32 160c-17.7 0-32 14.3-32 32v64c0 17.7 14.3 32 32 32H320c17.7 0 32-14.3 32-32V320c0-17.7-14.3-32-32-32H192z"/></svg>
          Tutorial
        </div>
      </a>
      <a href="lesson4-1.php" class="play-button">
        <div style="
           display: flex;
           align-items: center;
        
          ">
        <svg style="margin-right: 5px;" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#00741e}</style><path d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c-7.6 4.2-12.3 12.3-12.3 20.9V344c0 8.7 4.7 16.7 12.3 20.9s16.8 4.1 24.3-.5l144-88c7.1-4.4 11.5-12.1 11.5-20.5s-4.4-16.1-11.5-20.5l-144-88c-7.4-4.5-16.7-4.7-24.3-.5z"/></svg>
        PLAY
        </div>
      </a>
      </div>
    </div>
    <div class="lesson-labels recognizing-sounds" style="
    top: 188px;
">
      <div class="lesson-label" >Using Pronouns</div>
      <div class="lesson-btn">
      <a href="#" class="tutor-button" onclick="showTutorialVideo()">
        <div style="
           display: flex;
           align-items: center;
        
          ">
          <svg style="margin-right: 5px;" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#00741e}</style><path d="M0 96C0 60.7 28.7 32 64 32H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM48 368v32c0 8.8 7.2 16 16 16H96c8.8 0 16-7.2 16-16V368c0-8.8-7.2-16-16-16H64c-8.8 0-16 7.2-16 16zm368-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V368c0-8.8-7.2-16-16-16H416zM48 240v32c0 8.8 7.2 16 16 16H96c8.8 0 16-7.2 16-16V240c0-8.8-7.2-16-16-16H64c-8.8 0-16 7.2-16 16zm368-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V240c0-8.8-7.2-16-16-16H416zM48 112v32c0 8.8 7.2 16 16 16H96c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H64c-8.8 0-16 7.2-16 16zM416 96c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H416zM160 128v64c0 17.7 14.3 32 32 32H320c17.7 0 32-14.3 32-32V128c0-17.7-14.3-32-32-32H192c-17.7 0-32 14.3-32 32zm32 160c-17.7 0-32 14.3-32 32v64c0 17.7 14.3 32 32 32H320c17.7 0 32-14.3 32-32V320c0-17.7-14.3-32-32-32H192z"/></svg>
          Tutorial
        </div>
      </a>
      <a href="lesson4-2.php" class="play-button">
        <div style="
           display: flex;
           align-items: center;
        
          ">
        <svg style="margin-right: 5px;" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#00741e}</style><path d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c-7.6 4.2-12.3 12.3-12.3 20.9V344c0 8.7 4.7 16.7 12.3 20.9s16.8 4.1 24.3-.5l144-88c7.1-4.4 11.5-12.1 11.5-20.5s-4.4-16.1-11.5-20.5l-144-88c-7.4-4.5-16.7-4.7-24.3-.5z"/></svg>
        PLAY
        </div>
      </a>
      </div>
    </div>
  </div>

  <img class="traveler-image" src="traveler4.png" alt="Traveler 4">

  <img class="snow" src="snow.gif" alt="Traveler 5 Image" />
  <img class="snoww" src="snow.gif" alt="Traveler 5 Image" />
  <img class="snowww" src="snow.gif" alt="Traveler 5 Image" />
</body>
</html>