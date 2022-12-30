<?php
    //Connection Details
    $host = "localhost";
    $db = "carevents";
    $user = "root";
    $pass = "";

    $dsn = "mysql:host=$host;dbname=$db;";
    $PDO = null;

    try { //Make the Connection
        $PDO = new PDO($dsn,$user,$pass);
        return $PDO;
    }
    catch(Exception $e) {
        die($e);
    }
?>