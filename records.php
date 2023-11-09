

<!DOCTYPE html>
<html>
<head>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
  <title>English Adventures</title>
  <style>
    body {
	zoom: 100%;
      overflow: hidden;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-image: url('cute_background1.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
      font-family: Arial, sans-serif;
      position: relative;
    }
    .logo {
      max-width: 850px;
      max-height: 500px;
      width: auto;
      height: auto;
    }

      .logo-image {
      position: absolute;
      top: 20px;
      left: 58px;
      width: auto;
      height: 200px;
      
	}
    .text {
      position: absolute;
      left: 30px;
      bottom: 20px;
      color: #fff;
      font-size: 15px;
      display: inline-block; /* Add this property for variable box width */
      width: 270px;
      font-weight: bold;
     }
   .score-label {
      position: absolute;
    
      padding: 5px 10px;
      border-radius: 5px;
      background-color: #00741E;
      box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
      outline: 4px solid #fff;
      z-index: 2;
      }
    .score-label.left {
      left: 30px;
      top: 248px;
      color: #fff;
      font-size: 20.8px;
      background-color: #00741E;
      white-space: normal; /* Add this property to enable text wrapping */
      display: inline-block; /* Add this property for variable box width */
      width: 240px;
      padding: 10px 10px;
      z-index: 3;
      text-align: center;
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
      background-color: #ffa500;
    }

    .traveler {
      position: absolute;
      bottom: 0px;
      right: 10px;
      width: 320px;
      height: auto;
    }

    .records {
      position: absolute;
    bottom: 75px;
    right: 364px;
    font-size: 25px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1px;
    height: 45px;
    width: 187px;
      
      
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
    .lesson-title {
      position: absolute;
      color: #fff;
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
    .input-record {
      color: #00741E;
      font-size: 20px;
      font-weight: bold;
      bottom: 200px;
      left: 100px;
      background-color:#fff;
      padding: 4px 4px;
      border-radius: 5px;
      cursor: default;
      box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
      outline: 4px solid #00741E;
      border: none;
      margin: 8px;
      height: 30px;
      width: 180px;
    }

    .input-record::placeholder {
      color: #00741f57;
    }

    .input-grp {
    display: flex;
    position: absolute;
    bottom: 70px;
    width: 812px;
    }

    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 790px;
}

td, th {
  border: 2px solid #00741E;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #00741f55;
}
.home-button {
  position: fixed;
  margin-right: -1410px;
  bottom: -480px;
  transform: scale(0.10);
  z-index: 10;
}
  </style>
</head>
<body>
  <a class="home-button" href="eng adv.html">
    <img src="home1.png" />
</a>
  <!-- <img class="logo" src="logo.png" alt="English Adventures Logo" -->
  <div class="score-label left">This educational gaming tool is made available for the esteemed institution of SAN JOSE ACADEMY OF BULACAN located in San Jose Del Monte, Bulacan, specifically intended for the benefit of Grade 1 pupils. This initiative is aligned with the content presented in "Workbook for English" authored by Darlene Niel Panganiban of Aral Pinas.</div>
<div class="text">Workbook Link: https://www.studocu.com/en-us/document/manhattan-college/the-modern-english-novel/english-workbook-grade-1/35324175
</div>
<div class="centered-board"></div>
<div class="lesson-title" style="top: 52px;">Records</div>
<div style="
    margin-top: 25px;
    overflow: scroll;
    min-height: 460px;
    max-height: 460px;
">
  <table>
    <tr style="background-color: #00741E;color: white;font-size: 20px;position: sticky;top: 0;">
      <th>#</th>
      <th>Name</th>
      <th>1.1</th>
      <th>1.2</th>
      <th>2.1</th>
      <th>2.2</th>
      <th>3.1</th>
      <th>3.2</th>
      <th>4.1</th>
      <th>4.2</th>
      <th>5.1</th>
      <th>5.2</th>
      <th>Total</th>
    </tr>
     <?php include "function/retrieve-all-scores.php"; ?>
  </table>
</div>

     <div class="input-grp">
          <form action="function/save-name.php" method="post">
               <input class="input-record" name="surname" type="text" placeholder="Last Name" required>
               <input class="input-record" name="firstname" type="text" placeholder="First Name" required>
               <input class="input-record" name="middlename" type="text" placeholder="Middle Initial">
     </div>

          <button class="start-button records" style="position: absolute;"> 
          <svg style="margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#00741e}</style><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
          Add Pupil
     </button>
          </form>
  <img class="logo-image" src="SJAB LOGO.png" alt="English Adventures Logo">
  <img class="traveler" src="traveler.png" alt="Traveler">

</body>
</html>
