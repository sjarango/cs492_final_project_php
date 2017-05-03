<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    
    try{
        $conn = new PDO("mysql:host=$servername;dbname=sql_demo", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected succesfully";
    } catch (Exception $ex) {
        echo "Connection failed: " . $ex->getMessage();
    }
    

?>
