<?php
    session_start();

    if (!isset($_SESSION['blinks'])) {
        $_SESSION['blinks'] = isset($_GET['blink']) ? $_GET['blink'] : 1;
    }

    if (!isset($_SESSION['method'])) {
        $_SESSION['method'] = isset($_GET['method']) ? $_GET['method'] : 1;
    }

    if (!isset($_SESSION['stress'])) {
        $_SESSION['stress'] = isset($_GET['stress']) ? $_GET['stress'] : 1;
    }
    

    if (isset($_SESSION['id'])) {
        $loggedIn = true;

        $name = $_SESSION['name']; 
        
        
    }
    else {
        
        $loggedIn = false;
        
    }

?>