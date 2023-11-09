<?php
include "conn.php";


// Create a prepared statement to select data
$query = "SELECT * FROM pupil_record;";
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
                    background-color: #00741e;
                    padding: 10px 10px;
                    text-align: center;
                    width: 200px;
                    border-radius: 10px;
                    border: 4px solid;
                    font-size: 20px;
                    font-weight: bold;
                    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
                    ">' . $row['surname'] . '</div>
                    <div style="
                    display: flex;
                    background-color: #fff;
                    color: #00741e;
                    /* padding: 10px 10px; */
                    text-align: center;
                    width: 150px;
                    border-radius: 10px;
                    /* border: 4px solid; */
                    font-size: 20px;
                    font-weight: bold;
                    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
                    justify-content: center;
                    align-items: center;
                    /* margin-left: -70px; */
                    z-index: -2;
                    ">
                      <div class="decrement-score" data-action="decrement" style="
                      background-color: #ffcc00;
                      color: #00741e;
                      border-radius: 10px;
                      padding: 0px 8px;
                      margin-right: 2px;
                      width: 30px;
                      height: 51px;
                      display: flex;
                      justify-content: center;
                      align-items: center;
                      ">-</div>
                      <div class="score-value">' . $row['lesson_1_act_1'] . '</div>
                      <div class="increment-score" data-action="increment" style="
                      background-color: #ffcc00;
                      color: #00741e;
                      box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
                      border-radius: 10px;
                      padding: 0px 8px;
                      margin-right: 2px;
                      width: 30px;
                      height: 51px;
                      display: flex;
                      justify-content: center;
                      align-items: center;
                      ">+</div>
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