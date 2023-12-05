<?php
include "conn.php";
$user_ID = $_SESSION['user_ID'];

// Create a prepared statement to select data
$query = "SELECT * FROM pupil_record WHERE user_ID = $user_ID;";
$stmt = mysqli_prepare($conn, $query);

if ($stmt === false) {
     echo "Error: " . mysqli_error($conn);
} else {

     if (mysqli_stmt_execute($stmt)) {
          $result = mysqli_stmt_get_result($stmt);

          // Check if there are records
          $count = 1;
          if (mysqli_num_rows($result) > 0) {
               while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div style="
                    display: flex; 
                    margin: 7px 5px;
                    justify-content: space-between;">
                         <div class="name-label">' . $row['surname'] . '</div>
                         <div class="score-div"> 
                              <div class="decrement-score" data-lesson-activity="lesson_1_act_1" data-action="decrement" data-record-id="' . $row['record_ID'] . '">-</div>
                              <div class="score-value">' . $row['lesson_1_act_1'] . '</div>
                              <div class="increment-score" data-lesson-activity="lesson_1_act_1" data-action="increment" data-record-id="' . $row['record_ID'] . '">+</div>
                         </div>
                    </div>';
               }
          } else {
               echo '<tr><td colspan="13" style="text-align: center; color: color(srgb 0.2256 0.5047 0.1138); font-size: 15px;">No data recorded yet.</td></tr>';
          }
     } else {
          echo "Error: " . mysqli_error($conn);
     }

     // Close the prepared statement
     mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>