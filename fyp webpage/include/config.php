<?php
    $servername = 'localhost';
    $dbname = 'extress';
    $username = 'root';
    $password = '';

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
?>