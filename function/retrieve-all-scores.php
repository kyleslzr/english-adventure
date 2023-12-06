<?php

$user_ID = $_SESSION['user_ID'];

include "conn.php";


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
                    $total = 
                    $row['lesson_1_act_1'] +
                    $row['lesson_1_act_2'] +
                    $row['lesson_2_act_1'] +
                    $row['lesson_2_act_2'] +
                    $row['lesson_3_act_1'] +
                    $row['lesson_3_act_2'] +
                    $row['lesson_4_act_1'] +
                    $row['lesson_4_act_2'] +
                    $row['lesson_5_act_1'] +
                    $row['lesson_5_act_2'] ;

                    echo '<tr>
                              <td>' . $count . '</td>
                              <td>' . $row['surname'] . ', ' . $row['firstname'] . ' ' . $row['middlename'] . '</td>
                              <td>' . $row['lesson_1_act_1'] . '</td>
                              <td>' . $row['lesson_1_act_2'] . '</td>
                              <td>' . $row['lesson_2_act_1'] . '</td>
                              <td>' . $row['lesson_2_act_2'] . '</td>
                              <td>' . $row['lesson_3_act_1'] . '</td>
                              <td>' . $row['lesson_3_act_2'] . '</td>
                              <td>' . $row['lesson_4_act_1'] . '</td>
                              <td>' . $row['lesson_4_act_2'] . '</td>
                              <td>' . $row['lesson_5_act_1'] . '</td>
                              <td>' . $row['lesson_5_act_2'] . '</td>
                              <td style="font-weight: 700;">' . $total . '</td>
                              <td>
                                   <form id="deleteRecord_' . $row['record_ID'] . '" action="function/delete-record.php" method="post">
                                        <input type="hidden" name="recordId" value="' . $row['record_ID'] . '">
                                        <button class="delete-btn" type="button" onclick="confirmDelete(\'deleteRecord_' . $row['record_ID'] . '\')" style="background-color: transparent; border: 0px;">
                                        <img src="delete.png" style="width: 34px;">
                                        </button>
                                   </form>
                              </td>
                         </tr>';

                    $total = 0;
                    $count++;
               }
          } else {
               echo '<tr><td colspan="14" style="text-align: center; color: color(srgb 0.2256 0.5047 0.1138); font-size: 15px;">No data recorded yet.</td></tr>';
          }
     } else {
          echo "Error: " . mysqli_error($conn);
     }

     // Close the prepared statement
     mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>