<?php

/* 
 * config.php used to make connection with DB
 */
    $dbUser = "root";
    $dbPass = "";
    $dbDatabase = "sql_demo";
    $dbHost = "localhost";
    
    $dbConn = mysql_connect($dbHost, $dbUser, $dbPass);
    
    if($dbConn){
        mysql_select_db($dbDatabase);
        echo ("Connected to Database!");
    } else {
        die("<b>Error:</b> Could not connect to database.");
    }
    

?>
