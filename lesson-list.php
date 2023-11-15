<!DOCTYPE html>
<html>
     <head>
          <title>English Adventures</title>
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
                    margin-left: 550px;
               }

               .lesson-button {
                    padding: 10px 50px;
                    background-color: #ffcc00;
                    color: #00741E;
                    font-size: 60px;
                    font-weight: bold;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
                    text-decoration: none;
                    /* Remove the underline */
               }

               .lesson-button:hover {
                    background-color: #ffa500;
               }

               .traveler-image {
                    width: 600;
                    height: 600px;
                    max-width: 600px;
                    max-height: 600px;
                    margin-left: 100px;
               }

               .home-button {
                    position: absolute;
                    top: 150px;
                    transform: scale(0.10);
                    z-index: 10;
                    right: -485px;
               }
          </style>
     </head>
     <body>
          <a class="home-button" href="index.php">
               <img src="home1.png" />
          </a>
          <img class="logo-image" src="logo.png" alt="English Adventures Logo">
          <img class="bubble-image" src="bubble.png" alt="Bubble">
          <img class="traveler-image" src="traveler3.png" alt="Traveler">
          <div class="lesson-buttons">
               <a href="lesson1.php" class="lesson-button">Lesson 1</a>
               <a href="lesson2.php" class="lesson-button">Lesson 2</a>
               <a href="lesson3.php" class="lesson-button">Lesson 3</a>
               <a href="lesson4.php" class="lesson-button">Lesson 4</a>
               <a href="lesson5.php" class="lesson-button">Lesson 5</a>
          </div>
     </body>
</html>