<!DOCTYPE html>
<html lang="en">
     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Pronoun Replacement Game</title>
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
                    z-index: 1;
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

               .container {
                    max-width: 600px;
                    margin: 0 auto;
                    z-index: 10;
                    color: black;
               }

               .sentence {
                    margin: 10px 0;
                    z-index: 10;
               }
          </style>
     </head>

     <body>
          <a class="retry-button" href="lesson4-2.php">
               <img src="retry.png" />
          </a>

          <a class="back-button" href="lesson4.php">
               <img src="back.png" />
          </a>

          <a class="home-button" href="lesson-list.php">
               <img src="home.png" />
          </a>

          <div class="container">
               <h1>Pronoun Replacement Game</h1>
               <form id="pronounForm">
                    <div class="sentence">
                         <p>1. (Pam) made lunch for (her) brother.</p>
                         <label>
                              <input type="radio" name="sentence1" value="he"> He
                         </label>
                         <label>
                              <input type="radio" name="sentence1" value="she"> She
                         </label>
                    </div>
                    <div class="sentence">
                         <p>2. (Sue and Ron) played tag with (Tim).</p>
                         <label>
                              <input type="radio" name="sentence2" value="we"> We
                         </label>
                         <label>
                              <input type="radio" name="sentence2" value="they"> They
                         </label>
                    </div>
                    <div class="sentence">
                         <p>3. (Ted) went to school with (his) friend.</p>
                         <label>
                              <input type="radio" name="sentence3" value="he"> He
                         </label>
                         <label>
                              <input type="radio" name="sentence3" value="they"> They
                         </label>
                    </div>
                    <div class="sentence">
                         <p>4. (car) needs new tires.</p>
                         <label>
                              <input type="radio" name="sentence4" value="it"> It
                         </label>
                         <label>
                              <input type="radio" name="sentence4" value="she"> She
                         </label>
                    </div>
                    <div class="sentence">
                         <p>5. (dogs) are sleeping.</p>
                         <label>
                              <input type="radio" name="sentence5" value="it"> It
                         </label>
                         <label>
                              <input type="radio" name="sentence5" value="they"> They
                         </label>
                    </div>
                    <input type="submit" value="Submit">
               </form>
               <div id="result"></div>
          </div>

          <img class="logo-image" src="logo.png" alt="English Adventures Logo">

          <div class="score-label left">Directions: Read the words inside the cloud. On the space provided below, write
               the words with Short /a/ sound.</div>

          <div class="lesson-title" style="top: 52px;">Recognizing the Short o and u Sounds</div>

          <div class="centered-board"></div>

          <div class="score-label right">Score: 75</div>

          <img class="image-right" src="traveler5.png" alt="Traveler 5 Image">
          <div class="name-list">
               <?php include "function/retrieve-all-scores-l4-act2.php"; ?>
          </div>

          <?php include "js/record-score.php"; ?>
          <script>

               function goRetry() {
                    window.location.href = 'lesson4-2.html';
               }
               function goBack() {
                    window.location.href = 'lesson4.html';
               }
               function goHome() {
                    window.location.href = 'background_page.html';
               }

               const pronounForm = document.getElementById('pronounForm');
               const result = document.getElementById('result');

               pronounForm.addEventListener('submit', function (event) {
                    event.preventDefault();

                    let score = 0;

                    const answers = {
                         sentence1: 'she',
                         sentence2: 'they',
                         sentence3: 'he',
                         sentence4: 'it',
                         sentence5: 'they',
                    };

                    for (let i = 1; i <= 5; i++) {
                         const sentenceRadioButtons = document.getElementsByName(`sentence${i}`);
                         let selectedPronoun = null;

                         for (const radioButton of sentenceRadioButtons) {
                              if (radioButton.checked) {
                                   selectedPronoun = radioButton.value;
                                   break;
                              }
                         }

                         if (selectedPronoun === answers[`sentence${i}`]) {
                              score++;
                         }
                    }

                    result.textContent = `You got ${score} out of 5 correct.`;
               });

          </script>
     </body>

</html>