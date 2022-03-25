<?php
include_once("config.php");
include_once("session.php");

if(isset($_SESSION['id'])){
    header("Location:../decisionPanel.php");
  }
  else{
    header("Location:../login.php");
  }