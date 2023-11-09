<!DOCTYPE html>
<html lang="en">

     <head>
          <title>Lesson 1 - English Adventures</title>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <style>
               body {
                    overflow: hidden;
                    margin: 0;
                    padding: 0;
                    height: 100vh;
                    background-image: url('cute_background8.jpg');
                    background-size: cover;
                    font-family: Arial, sans-serif;
                    display: flex;
                    align-items: center;
                    flex-direction: column;
                    text-align: center;
                    color: #fff;
               }

               .button-container {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                    max-width: 1000px;
                    /* Adjust as needed */
                    max-height: 1000px;
                    z-index: 5;
                    margin-top: 152px;
               }

               .word-button {
                    width: calc(27.20% - 10px);
                    height: 95px;
                    /* Adjust as needed */
                    margin: 5px;
                    color: #00741E;
                    background-color: #ffcc00;
                    border: none;
                    border-radius: 15px;
                    cursor: pointer;
                    font-size: 40px;
                    font-weight: bold;
                    transition: background-color 0.3s;
                    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
               }

               .word-button[data-status="true"].active {
                    background-color: green;
               }

               .word-button[data-status="false"].active {
                    background-color: #EE2F41;
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
                    white-space: normal;
                    /* Add this property to enable text wrapping */
                    display: inline-block;
                    /* Add this property for variable box width */
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
                    min-height: 400px;
                    max-height: 400px;
                    position: absolute;
                    left: 11px;
                    top: 325px;
                    z-index: 4;
                    overflow-y: scroll;

               }

               .image-right {
                    width: 230px;
                    height: auto;
                    position: absolute;
                    right: 36px;
                    top: 190px;
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

               .increment:hover,
               .decrement:hover {
                    background-color: #00741E;
               }
          </style>
          <script>
               function goRetry() {
                    window.location.href = 'lesson1-1.html';
               }
               function goBack() {
                    window.location.href = 'lesson1.html';
               }
               function goHome() {
                    window.location.href = 'background_page.html';
               }

               document.addEventListener('DOMContentLoaded', function () {
                    const wordButtons = document.querySelectorAll('.word-button');

                    wordButtons.forEach(button => {
                         button.addEventListener('click', () => {
                              // Check if the button has already been clicked
                              if (!button.classList.contains('clicked')) {
                                   // Toggle the 'active' class on click
                                   button.classList.toggle('active');

                                   // Toggle the text color to white
                                   if (button.classList.contains('active')) {
                                        button.style.color = 'white';
                                   } else {
                                        button.style.color = '#00741E'; // Original color
                                   }

                                   // Mark the button as clicked
                                   button.classList.add('clicked');
                              }
                         });
                    });
               });
          </script>
     </head>

     <body>
          <a class="retry-button" href="lesson1-1.html">
               <img src="retry.png" />
          </a>

          <a class="back-button" href="lesson1.html">
               <img src="back.png" />
          </a>

          <a class="home-button" href="background_page.html">
               <img src="home.png" />
          </a>

          <img class="logo-image" src="logo.png" alt="English Adventures Logo">

          <div class="button-container">
               <button class="word-button" data-status="true">CAT</button>
               <button class="word-button" data-status="true">APPLE</button>
               <button class="word-button" data-status="false">LATE</button>
               <button class="word-button" data-status="false">MANSION</button>
               <button class="word-button" data-status="false">SACK</button>
               <button class="word-button" data-status="false">BAKE</button>
               <button class="word-button" data-status="false">ALLIGATOR</button>
               <button class="word-button" data-status="false">LADDER</button>
               <button class="word-button" data-status="false">RANDOM</button>
               <button class="word-button" data-status="false">SAD</button>
               <button class="word-button" data-status="false">RAIN</button>
               <button class="word-button" data-status="true">CAKE</button>
               <button class="word-button" data-status="false">RAISE</button>
               <button class="word-button" data-status="true">MATE</button>
               <button class="word-button" data-status="true">BAT</button>
          </div>

          <div class="score-label left">Directions: Click the words with Short /a/ sound.</div>

          <div class="lesson-title" style="top: 52px;">Recognizing the Short a and e Sounds</div>

          <div class="centered-board"></div>

          <div class="score-label right">Score: 75</div>

          <div class="image-left">

                    <div style="display: flex;margin: 7px 5px;justify-content: space-between;">
                    <div style="
      background-color: #00741e;
      padding: 10px 10px;
      text-align: center;
      width: 48%;
      border-radius: 10px;
      border: 4px solid;
      font-size: 20px;
      font-weight: bold;
      box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
      ">Veneracion</div>
                    <div style="
      display: flex;
      background-color: #fff;
      color: #00741e;
      text-align: center;
      width: 40%;
      border-radius: 10px  ;
      font-size: 30px;
      font-weight: bold;
      box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
      justify-content: center;
      align-items: center;
      z-index: -2;
      ">
                         <div class="decrement" style="
        background-color: #ffcc00;
        color: #00741e;
        border-radius: 10px 0px 0px 10px;
        padding: 0px 8px;
        width: 30px;
        height: 51px;
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        ">-</div>
                         <div style="
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 5px;
        
        ">12</div>
                         <div class="increment" style="
        background-color: #ffcc00;
        color: #00741e;
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        border-radius: 0px 10px 10px 0px;;
        padding: 0px 8px;
        width: 30px;
        height: 51px;
        display: flex;
        justify-content: center;
        align-items: center;
        ">+</div>
                    </div>
          </div>
          
               <img class="image-right" src="traveler5.png" alt="Traveler 5 Image">

               <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
               <script>
                    $(document).ready(function () {
                         // Attach a click event handler to the buttons with class "decrement-score" and "increment-score"
                         $(".decrement-score, .increment-score").click(function () {
                              // Get the action (decrement or increment) from the data-action attribute
                              var action = $(this).data("action");

                              // Find the associated score value element
                              var scoreValueElement = $(this).siblings(".score-value");

                              // Get the current score from the element
                              var currentScore = parseInt(scoreValueElement.text());

                              // Get the record_ID from a data attribute or another appropriate source (adjust as needed)
                              var record_ID = $(this).data("record-id");

                              // Adjust the score based on the action
                              if (action === "decrement") {
                                   currentScore--;
                              } else if (action === "increment") {
                                   currentScore++;
                              }

                              // Send an AJAX request to update the score on the server
                              $.ajax({
                                   type: "POST",
                                   url: "function/update-score.php", // Replace with the actual URL of your PHP script
                                   data: { action: action, newScore: currentScore, record_ID: record_ID },
                                   success: function (response) {
                                        // Update the score value element with the new score
                                        scoreValueElement.text(currentScore);
                                   },
                                   error: function () {
                                        alert("An error occurred while updating the score.");
                                   }
                              });
                         });
                    });
               </script>


     </body>

</html>