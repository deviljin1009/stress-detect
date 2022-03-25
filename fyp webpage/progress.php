<?php

include_once("include/config.php");
include_once("include/session.php");

  $blink = $_SESSION['blinks'];
  $method = $_SESSION['method'];
  $stress = $_GET['stress'];
  $_SESSION['stress'] = $_GET['stress'];

  echo $blink; 
  echo "<br>";
  echo $method;
  echo "<br>";
  echo $stress;
  echo "<br>";
?>


<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>

    <meta charset="utf-8">

    <title>Progress</title>

    <link rel="stylesheet" href="css/progress.css">

</head>

<body>

    <div class="container">

        <div class="card">

            <div class="header">Please wait while we are calculating your stress level</div>
            <div class="progressbar">
                <div class="progress" data-label="Loading..."></div>
            </div>
            <div class="reminder">Reminder :</div>
            <div class="description">Please do not press go back or refresh the page while waiting as the stress results will be exterminated.</div>

        </div>

    </div>



</body>

</html>

<script src = "javascript/progress.js"></script>