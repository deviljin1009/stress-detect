<?php

include_once("include/config.php");
include_once("include/session.php");


$blink = $_GET['blink'];
$method = $_GET['method'];
$_SESSION['blinks']=$_GET['blink'];
$_SESSION['method']=$_GET['method'];

header("Location:questionnaire.php");
  
?>