<?php

include_once("include/config.php");
include_once("include/session.php");

  $blink = $_GET['blink'];
  $method = $_GET['method'];
  $_SESSION['blinks']=$_GET['blink'];
  $_SESSION['method']=$_GET['method'];
  
?>

<head>

    <meta charset="utf-8">

    <title>Question</title>

    <link rel="stylesheet" href="css/question.css">

</head>

<body>

<div class="box">
    <div class="header">Question</div>
        <div class="frame">
            <div class="question">
            <form method="POST" action="navigate.php">
            <p>How Many Different Words Have You Discovered?</p>
            <input type="number" name="numWord" placeholder="Words Discovered (0-13)" min="0" max="13" required>
            <p>Can You List Down those words that you had discovered? </p>
            <input type="text" name="word" placeholder="List Down The Words Here" required>
            <input type="submit" name="submit" value="Submit">
            </form>
            </div>      
        </div>
</div>


</body>