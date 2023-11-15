
<!DOCTYPE html>
<html>
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
            background-image: url('cute_background8.jpg');
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
            margin-top: 10px;
            margin-left: 300px;
        }

        #question-text {
            line-height: 75px;
            font-size: 50px;
            font-weight: bold;
            color: #00741E;
            margin-bottom: 15px;
          
        }

        #word-buttons {
            margin-bottom: 15px;
            width: 800px;
            
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
        }

        button {
            /* Existing styles */
            background-color: #3498db;
            width: 190px;
            height: 70px;
            border: none;
            padding: 10px 10px 10px 10px;
            font-size: 35px;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            color: #00741E;
            background-color: #ffcc00;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
            box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            
            /* Add this new style for animation */
            transform: translateX(0);
            transition: transform 0.2s;
        }

        button:hover {
            background-color: #2980b9;
        }

        button:hover {
            transform: translatey(0px);
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
        @keyframes blink {
            0% {
                background-color: transparent;
            }
            50% {
                background-color: red;
            }
            100% {
                background-color: transparent;
            }
        }

        button:active {
            animation: blink 0.5s;
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
      
            display: inline-block;
            margin-top: -200px;
            margin: 20px;
            width: 220px;
            height: 70px;
            color: #333;
            font-size: 40px;
            font-weight: bold;
            padding: 10px;
            background-color: #ffcc00;
            border-radius: 5px;
            text-align:center;
        
        }
    

        h2 {
            font-size: 40px;
            margin-left: -340px;
            width: 798px;
            text-align: center;
            color: #fff;
            text-transform: uppercase;
            background-color: #00741E;
            padding: 10px;
            border-radius: 5px;
            cursor: default;
            box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.3);
        }

    </style>
</head>
<body>
    <a class="retry-button" href="lesson1-2.php">
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
        <div id="correct-nouns-container">
            <h2>Correct Nouns</h2>
            <ul id="correct-nouns-list"></ul>
        </div>
    </div>
    <script>
        function goRetry() {
            window.location.href = 'lesson1-2.html';
        }
        function goBack() {
            window.location.href = 'lesson1.html';
        }
        function goHome() {
            window.location.href = 'background_page.html';
        }

        // Define your questions and correct nouns here
        const questions = [
            "Dad drives us safely in the car",
            "These flowers are beautiful",
            "Sam plays with his friend Ben",
            "The bus stops at the red light",
            "We saw tigers at the zoo",
            "The boy kicked the ball",
            "The cat is purring",
            "I flew a kite in the fields"
        ];

        const correctNouns = [
            ["Dad", "us", "car"],
            ["These", "flowers"],
            ["Sam", "friend", "Ben"],
            ["The", "bus", "light"],
            ["We", "tigers", "zoo"],
            ["The", "boy", "ball"],
            ["The", "cat"],
            ["I", "kite", "fields"]
        ];

        let currentQuestionIndex = 0;
        let currentWords = questions[currentQuestionIndex].split(" ");
        let selectedNouns = [];

        function displayQuestion() {
            const questionText = document.getElementById("question-text");
            const wordButtons = document.getElementById("word-buttons");

            questionText.textContent = questions[currentQuestionIndex];

            // Create buttons for each word in the current question
            wordButtons.innerHTML = "";
            for (const word of currentWords) {
                const button = document.createElement("button");
                button.textContent = word;
                button.addEventListener("click", () => handleWordClick(word));
                wordButtons.appendChild(button);
            }
        }

        function handleWordClick(word) {
            const correctNounsList = document.getElementById("correct-nouns-list");

            if (currentWords.includes(word)) {
                if (correctNouns[currentQuestionIndex].includes(word)) {
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
                        }, 1000); // Wait for 1 second
                    }
                } else {
                    // Blink the button red for a short duration
                    const button = Array.from(document.getElementById('word-buttons').querySelectorAll('button')).find(b => b.textContent === word);
                    button.style.backgroundColor = "red";
                    setTimeout(() => {
                        button.style.backgroundColor = "";
                    }, 500);
                }
            }
        }

        function flashCorrectText() {
            const wordButtons = document.getElementById("word-buttons");
            wordButtons.innerHTML = "<p id='correct-text'>Correct!</p>";

            const correctText = document.getElementById("correct-text");
            correctText.style.fontSize = "50px"; // Adjust the font size to make it a bit smaller
            correctText.style.color = "#fff"; // Change text color for better contrast
            correctText.style.backgroundColor = "#00741E"; // Change background color for better visibility
            correctText.style.padding = "10px"; // Add padding for spacing
            correctText.style.borderRadius = "5px"; // Add rounded corners
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
                alert("Congratulations! You have completed the game.");
            }
        }

        // Define the maximum number of nouns for each question
        const maxNouns = [3, 2, 3, 3, 3, 3, 2, 3];

        // Initialize the game with the first question
        displayQuestion();
    </script>
    <img class="logo-image" src="logo.png" alt="English Adventures Logo">

    <div class="score-label left">Directions: Click the noun/s in the sentence.</div>

    <div class="lesson-title" style="top: 52px;">Recognizing Nouns</div>

    <div class="centered-board"></div>

    <div class="score-label right">Score: 75</div>

    <img class="image-right" src="traveler5.png" alt="Traveler 5 Image">
    
    <div class="name-list">
          <?php include "function/retrieve-all-scores-l1-act2.php"; ?>
     </div>
     <?php include "js/record-score.php"; ?>
</body>
</html>