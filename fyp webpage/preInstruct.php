<?php
  include_once("include/config.php");
  include_once("include/session.php");

  $path = $_GET['path'];

  
?>
<html>
<head>

    <meta charset="utf-8">

    <title>Pre-Instruction</title>

    <link rel="stylesheet" href="css/preInstruct.css">

</head>

<body>

<div class="box">
    <div class="description">
        Please adjust your webcam until your image can be viewed in the middle at the frame below
    </div>
    <div class="reminder">
        Refresh the page if your webcam is not functioning well or disabled
    </div>
<div id="container">
	<video autoplay="true" id="videoElement">
	</video>
</div>
<div class="button">
        <a class="red" href="decisionPanel.php">Cancel</a>
        <?php echo"<a class=\"green\" href=\"instruction.php?path=$path\">Proceed</a>"?>
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