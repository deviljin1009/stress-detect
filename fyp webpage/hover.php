<?php
include_once("include/config.php");
include_once("include/session.php");
?>




<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>

    <meta charset="utf-8">

    <title>Hover</title>
    
    <link rel="stylesheet" href="css/hover.css">

    
  </head>

<body>

<video autoplay="true" id="videoElement"></video>

  <div class="countdown">
  <div id="app"></div>
  </div>
  <div class="container1">


<div class="instruction">
    <h2>Try to reveal hidden words by clicking on them!</h2>
</div>
<div class="container">
    <div class="big_text text">
      <h1><span class="color_blue">Ready</span></h1>
    </div>

    <div class="small_texts">
    

      <button class="float">
        <script>
            var myArray = [
            "Gotcha",
            "Chill",
            "Relieve"
            ];
    
            var randomItem = myArray[Math.floor(Math.random()*myArray.length)];
            document.write(randomItem);
        </script>
      </button>
      <button class="sunk">
        <script>
            var myArray = [
            "Gotcha",
            "Chill",
            "Relieve"
            ];
    
            var randomItem = myArray[Math.floor(Math.random()*myArray.length)];
            document.write(randomItem);
        </script>
      </button>
      <button class="text_3 float">
        <script>
            var myArray = [
            "Gotcha",
            "Chill",
            "Relieve"
            ];
    
            var randomItem = myArray[Math.floor(Math.random()*myArray.length)];
            document.write(randomItem);
        </script>
      </button>
      <button class="text_4 sunk">
        <script>
            var myArray = [
            "Gotcha",
            "Chill",
            "Relieve"
            ];
    
            var randomItem = myArray[Math.floor(Math.random()*myArray.length)];
            document.write(randomItem);
        </script>
      </button>
      <button class="text_5 float">
        Rest
      </button>
      <button class="text_6 sunk">
        Smile
      </button>
      <button class="text_7 float">
        Chill
      </button>
      <button class="text_8 sunk">
        Relax
      </button>
      <button class="text_9 float">
        Laugh
      </button>
      <button class="text_10 sunk">
        Calm
      </button class="text_11 float">
      <button>
        Charm
      </button>
      <button class="text_12 sunk">
        Chillin
      </button>
      <button class="text_13 float">
        Cool
      </button>
    </div>
  </div>

  <script>
var video = document.querySelector("#videoElement");

if (navigator.mediaDevices.getUserMedia) {
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(function (stream) {
      video.srcObject = stream;
    })
    .catch(function (err0r) {
      console.log("Something went wrong!");
    });
}
</script>


</body>


</html>

<script src = "javascript/countdown2.js"></script>