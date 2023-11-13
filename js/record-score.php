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
               var lesson_activity = $(this).data("lesson-activity");

               // Adjust the score based on the action
               if (action === "decrement") {
                    currentScore--;
               } else if (action === "increment") {
                    currentScore++;
               }

               // Update the score value element with the new score
               scoreValueElement.text(currentScore);

               // Perform any additional actions you need, such as updating the score on the server
               // using AJAX or any other method.
               // Send an AJAX request to update the score on the server
               $.ajax({
                    type: "POST",
                    url: "function/update-score.php", // Replace with the actual URL of your PHP script
                    data: { action: action, newScore: currentScore, record_ID: record_ID, lessonActivity: lesson_activity },
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