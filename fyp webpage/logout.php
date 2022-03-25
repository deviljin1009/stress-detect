<?php
    include_once('include/session.php');
    unset($_SESSION['id']);
    unset($_SESSION['name']);
    
    header("Location:login.php");
?>