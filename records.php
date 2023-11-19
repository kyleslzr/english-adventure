

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
    top: 18px;
    left: 70px;
    width: auto;
    height: 178px;
      
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
        top: 297px;
        color: #fff;
        font-size: 24.8px;
        background-color: #00741E;
        white-space: normal;
        display: inline-block;
        width: 240px;
        padding: 10px 10px;
        z-index: 3;
        text-align: center;
        font-weight: bolder;
	}	

    .start-button, .delete-button {
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #ffcc00;
      color: #00741E;
      font-size: 50px;
      font-weight: bold;
      border: none;
      border-radius: 50px;
      cursor: pointer;
      box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .start-button:hover, .delete-button:hover {
      filter: brightness(0.8);
    }

    @keyframes stretchAnimation {
               0%, 100% {
               transform: translateY(0) scaleY(1);
               }
               50% {
                transform: translateY(-1.1%) scaleY(1.025);
               }
                    }

    .traveler {
      position: absolute;
      bottom: -133px;
      right: -15px;
      width: 342px;
      height: auto;
      animation: stretchAnimation 3s infinite;     

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
    width: 179px;
    }

    .delete-button {
    position: absolute;
    bottom: 22px;
    left: 20px;
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
.home-button:hover, .delete-btn:hover {
  filter: brightness(0.8);
}

.rscroll::-webkit-scrollbar {
     width: 12px; /* width of the scrollbar */
   }
   
   .rscroll::-webkit-scrollbar-thumb {
     background-color: white; /* color of the scrollbar thumb */
     border-top-right-radius: 50px; /* roundness of the scrollbar thumb */
   }
   
   .rscroll::-webkit-scrollbar-track {
     background-color:#7FB072; /* color of the scrollbar track */
     border-top-right-radius: 19px;
   }
   
   .rscroll::-webkit-scrollbar-thumb:hover {
     filter: brightness(.8); /* color of the scrollbar thumb on hover */
   }
   
.rscroll {
  overflow-x: hidden;
}

.logo-imagee {
                    position: absolute;
                    top: 27px;
                    right: 24px;
                    width: auto;
                    height: 102px;
}

  </style>
</head>
<body>
  <a class="home-button" href="index.php">
    <img src="home1.png" />
</a>
  <!-- <img class="logo" src="logo.png" alt="English Adventures Logo" -->
</div>
<div class="centered-board"></div>
<div class="lesson-title" style="top: 52px;">Records</div>
<div class="rscroll" style="
    margin-top: 15px;
    margin-left: 1px;
    overflow-y: scroll;
    min-height: 441px;
    max-height: 448px;
    border: 5px solid #7faf71;
    border-top-left-radius: 19px;
    border-top-right-radius: 19px;

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
      <th></th>
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
               <form id="deleteAllRecord" action="function/delete-all-record.php" method="post">
                    <button type="button" onclick="confirmDeleteAll()" class="delete-button records" style="position: absolute;"> 
                         <svg style="margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#00741e}</style><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>
                              Delete All
                    </button>
               </form>

     <img class="logo-image" src="SJAB LOGO.png" alt="English Adventures Logo">
     <img class="traveler" src="traveler.png" alt="Traveler">
     <script>
          function confirmDelete(formId) {
               if (confirm("Are you sure you want to delete this record?")) {
                    document.getElementById(formId).submit();
               }
          }


          function confirmDeleteAll() {
               if (confirm("Are you sure you want to delete all records?")) {
                    document.getElementById("deleteAllRecord").submit();
               }
          }
     </script>

</body>
</html>
