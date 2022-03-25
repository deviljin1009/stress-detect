<?php
include_once("include/config.php");
include_once("include/session.php");

?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>

    <meta charset="utf-8">

    <title>Float</title>

    <link rel="stylesheet" href="css/float.css">
    
  </head>

<body>

<video autoplay="true" id="videoElement"></video>

  <div class="countdown">
  <div id="app"></div>
  </div>

<div class="container">
    <div class="big_text text">
      <h1><span class="color_blue">Ready</span></h1>
    </div>

    <div class="small_texts">
      <p>
        <script>
            var myArray = [
            "Apples",
            "Bananas",
            "Pears"
            ];
    
            var randomItem = myArray[Math.floor(Math.random()*myArray.length)];
            document.write(randomItem);
        </script>
      </p>
      <p >
        Relieve
      </p>
      <p class="text_3">
        Leisure
      </p>
      <p class="text_4">
        Awaken
      </p>
      <p class="text_5">
        Rest
      </p>
      <p class="text_6">
        Smile
      </p>
      <p class="text_7">
        Chill
      </p>
      <p class="text_8">
        Relax
      </p>
      <p class="text_9">
        Laugh
      </p>
      <p class="text_10">
        Calm
      </p class="text_11">
      <p>
        Charm
      </p>
      <p class="text_12">
        Chillin
      </p>
      <p class="text_13">
        Cool
      </p>
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