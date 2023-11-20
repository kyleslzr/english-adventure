
<!DOCTYPE html>
<html>

     <head>
          <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
          <title>English Adventures</title>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
          <style>
               body {
                    zoom: 100%;
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
                    overflow: hidden;
               }

               .logo {
          position: absolute;
          max-width: 850px;
          max-height: 500px;
          width: auto;
          height: auto;
          top: 155px;
               }

               .logo-image {
                    position: absolute;
                    bottom: 14px;
                    left: 22px;
                    width: auto;
                    height: 95px;
                    z-index: 10;


               }

               .logo-image:hover {
                    filter: brightness(.8)
               }

               .text {
                    position: absolute;
                    left: 30px;
                    bottom: 20px;
                    color: #fff;
                    font-size: 15px;
                    display: inline-block;
                    /* Add this property for variable box width */
                    width: 270px;
                    font-weight: bold;
               }

               .score-label {
                    position: absolute;

                    padding: 5px 10px;
                    border-radius: 5px;
                    background-color: #00741E;
                    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
                    z-index: 2;
               }

               .score-label.left {  
                    left: 129px;
                    bottom: 17px;
                    color: #fff;
                    font-size: 13.8px;
                    background-color: #00741e9c;
                    white-space: normal;
                    display: inline-block;
                    width: 565px;
                    padding: 8px;
                    z-index: 3;
                    text-align: justify;
                    line-height: 18px;

               }

               .start-button {
                    position: absolute;
                    bottom: 214px;
                    left: 623px;
                    padding: 7px 20px;
                    background-color: #ffcc00;
                    color: #00741E;
                    font-size: 65px;
                    font-weight: bold;
                    border: 7px solid white;
                    border-radius: 100px;
                    cursor: pointer;
                    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
                    display: flex;
                    align-items: center;
                    justify-content: center;
               }

               .start-button:hover {
                    filter: brightness(.8);
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
                    bottom: -142px;
                    right: 8px;
                    width: 371px;
                    height: auto;  
                    animation: stretchAnimation 3s infinite;     
                    z-index: 10;                       
                }


          </style>
     </head>

     <body style="position: relative;">
          <img class="logo animate__bounceInDown" src="logo.png" alt="English Adventures Logo">
          <div class="score-label left">This&nbsp; educational&nbsp; gaming tool&nbsp; is made available &nbsp;for the&nbsp; esteemed institution of<br>SAN JOSE ACADEMY OF BULACAN located in San Jose Del Monte, Bulacan, specifically intended for the benefit
               of Grade 1 pupils. This initiative is aligned with the content presented in "Workbook for English"
               authored by Darlene Niel Panganiban of Aral Pinas.</div>
          </div>
          <a href = "https://www.facebook.com/SanJoseAcademyBulacanFalcons" target="_blank"> 
          <img class="logo-image" src="SJAB LOGO.png"  alt="English Adventures Logo">
          </a>
          <img class="traveler-blink" src="blink.jpg" alt="English Adventures Logo">
          <a href="lesson-list.php">
               <button class="start-button animate__bounceInDown">
               <svg style="margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#00741e}</style><path d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c-7.6 4.2-12.3 12.3-12.3 20.9V344c0 8.7 4.7 16.7 12.3 20.9s16.8 4.1 24.3-.5l144-88c7.1-4.4 11.5-12.1 11.5-20.5s-4.4-16.1-11.5-20.5l-144-88c-7.4-4.5-16.7-4.7-24.3-.5z"/></svg>
 
               PLAY</button>
          </a>
          <audio autoplay loop controlsList="nodownload" style="display: none">
  <source src="music.ogg" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<img class="traveler" src="traveler.png" alt="Traveler">


          <!-- sample shining shit -->
          <div style="z-index: 1; display: none; position: absolute; top: 70px; left: 360px; margin-bottom: -1px;">
               <div><img width="400px" style="margin-left: -80px;" src="shining.gif" alt="" srcset=""></div>
          </div>

          <!-- sample falling leaves -->
          <div style="z-index: 1; display: none; position: absolute; top: 0; right: 0; margin-bottom: -1px;">
               <div><img width="400px" style="margin-left: -80px;" src="falling-leaf.gif" alt="" srcset=""></div>
          </div>

          <!-- sample moving grass -->
          <div>
               <div style="z-index: 1; display: flex; position: absolute; bottom: -17px; left: 0; margin-bottom: -1px;">
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
                    <div><img width="200px" style="margin-left: -80px;" src="grass.gif" alt="" srcset=""></div>
               </div>
          </div>
     </body>

</html>