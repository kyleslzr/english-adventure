<!DOCTYPE html>
<html>
     <head>
          <title>English Adventures</title>
          <link rel="stylesheet" href="css/side-score-style.css">
          <style>

               body {
                    margin: 0;
                    padding: 0;
                    height: 100vh;
                    background-image: url('cute_background1.jpg');
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center center;
                    font-family: Arial, sans-serif;
                    display: flex;
                    justify-content: flex-start;
                    align-items: center;
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

               .bubble-image {
                    position: absolute;
                    top: 400px;
                    left: 400px;
                    width: 500px;
                    height: 300px;
               }

               .lesson-buttons {
                    display: flex;
                    flex-direction: column;
                    gap: 15px;
                    margin-left: 300px;
               }

               .lesson-button {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    padding: 15px 25px;
                    background-color: #ffcc00;
                    color: #00741E;
                    font-size: 60px;
                    font-weight: bold;
                    border: none;
                    border-radius: 71px;
                    cursor: pointer;
                    box-shadow: 2px 2px 8px rgba(-1, 2, -16, 1.3);
                    text-decoration: none;
                    border: 7px solid white;
               }

               .lesson-button:hover {
                    filter: brightness(.8);
               }

               /* Add this CSS code to your existing styles */

               @keyframes stretchAnimation {
               0%, 100% {
               transform: translateY(0) scaleY(1);
               }
               50% {
               transform: translateY(-1.1%) scaleY(1.025);
               }
               }

               .traveler-image {
               margin-top: 27px;
               height: 659px;
               margin-left: 243px;
               margin-right: -52px;
               animation: stretchAnimation 3s infinite; /* Adjust the duration and iteration count as needed */
               }


               .home-button {
                    position: absolute;
                    top: 150px;
                    transform: scale(0.10);
                    z-index: 10;
                    right: -485px;
               }

               .records {
                    position: absolute;
                    top: 0;
                    right: 30px;
                    font-size: 30px;
                    display: flex;
                    align-items: center;

               }

               .start-button {
                    margin-top: 20px;
                    padding: 10px 20px;
                    background-color: #ffcc00;
                    color: #00741E;
                    font-size: 50px;
                    font-weight: bold;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
               }

               .start-button:hover {
                    filter: brightness(.8);
               }

               .custom-button {
                    position: absolute;
                    bottom: 144px;
                    right: -487px;
                    transform: scale(0.10);
               }

               .custom-button:hover img {
                     filter: brightness(.8); /* Adjust brightness on hover */
    }
               .book {
                    position: absolute;
               bottom: 44px;
               left: 57px;
               width: 260px;
               z-index: 2;                 
               }
                    
               .book:hover {
    filter: brightness(0.8);
    cursor: pointer;
}



          </style>
     </head>
     <body>
          
     <audio autoplay loop controlsList="nodownload" style="display: none">
  <source src="music.ogg" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<a href="records.php" class="custom-button">
    <img src="home2.png">
                    <svg style="margin-right: 0px;" xmlns="http://www.w3.org/2000/svg" height="0.8em"
                         viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                         <style>
                              svg {
                                   fill: #00741e
                              }
                         </style>
                         <path
                              d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z" />
                    </svg>
               </button>
          </a>
          <a class="home-button" href="index.php">
               <img src="home1.png" style="
    margin-right: 15px;
    margin-top: -15px;
"/>

          </a>
          <a class="book" href="English Workbook Grade 1.pdf" target="_blank">
               <img src="book1.png" style="
                    position: absolute;
                    bottom: -2px;
                    left: -5px;
                    width: 260px;
                    z-index: 2;
                    "/>
                              </a>
          <img class="logo-image" src="logo.png" alt="English Adventures Logo">

          <img class="traveler-image" src="traveler3.png" alt="Traveler">
          <div class="lesson-buttons">
               
               <a href="lesson1-maintenance.php" class="lesson-button">
                    <svg style="margin-right: 20px;" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#00741e}</style><path d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c-7.6 4.2-12.3 12.3-12.3 20.9V344c0 8.7 4.7 16.7 12.3 20.9s16.8 4.1 24.3-.5l144-88c7.1-4.4 11.5-12.1 11.5-20.5s-4.4-16.1-11.5-20.5l-144-88c-7.4-4.5-16.7-4.7-24.3-.5z"/></svg>
                    Lesson 1</a>
               <a href="lesson2-maintenance.php" class="lesson-button">
                    <svg style="margin-right: 20px;" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#00741e}</style><path d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c-7.6 4.2-12.3 12.3-12.3 20.9V344c0 8.7 4.7 16.7 12.3 20.9s16.8 4.1 24.3-.5l144-88c7.1-4.4 11.5-12.1 11.5-20.5s-4.4-16.1-11.5-20.5l-144-88c-7.4-4.5-16.7-4.7-24.3-.5z"/></svg>
                     Lesson 2</a>
               <a href="lesson3-maintenance.php" class="lesson-button">
               <svg style="margin-right: 20px;" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#00741e}</style><path d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c-7.6 4.2-12.3 12.3-12.3 20.9V344c0 8.7 4.7 16.7 12.3 20.9s16.8 4.1 24.3-.5l144-88c7.1-4.4 11.5-12.1 11.5-20.5s-4.4-16.1-11.5-20.5l-144-88c-7.4-4.5-16.7-4.7-24.3-.5z"/></svg>
               Lesson 3</a>
               <a href="lesson4-maintenance.php" class="lesson-button">
               <svg style="margin-right: 20px;" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#00741e}</style><path d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c-7.6 4.2-12.3 12.3-12.3 20.9V344c0 8.7 4.7 16.7 12.3 20.9s16.8 4.1 24.3-.5l144-88c7.1-4.4 11.5-12.1 11.5-20.5s-4.4-16.1-11.5-20.5l-144-88c-7.4-4.5-16.7-4.7-24.3-.5z"/></svg>
               Lesson 4</a>
               <a href="lesson5-maintenance.php" class="lesson-button">
               <svg style="margin-right: 20px;" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#00741e}</style><path d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c-7.6 4.2-12.3 12.3-12.3 20.9V344c0 8.7 4.7 16.7 12.3 20.9s16.8 4.1 24.3-.5l144-88c7.1-4.4 11.5-12.1 11.5-20.5s-4.4-16.1-11.5-20.5l-144-88c-7.4-4.5-16.7-4.7-24.3-.5z"/></svg>
               Lesson 5</a>



          </div>
     </body>
</html>