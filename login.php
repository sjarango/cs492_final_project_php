<?php
    
    $email = $_POST['email'];
    $pw = $_POST['password'];


    if (isset($_POST['submitButton'])){
        //print("You submitted the form");
        if(!isset($_POST['email'])){
            die("Error: The email field was not set.");
        } else if (!isset($_POST['password'])){
            die("Error: The password field was not set");
        } else {
            echo $email;
            echo $pw;
        }
    
        //password will be converted into hash of sha512
        $password = hash("sha512", $_POST['password']);
        //$password = hash("md5", $_POST['password']);
        
        //Select ID from Users where (email equals the email given) and the (password equals the password given). 
        //using ESCAPE STRINGS to prevent **SQL Injection Attack**
        //$query = mysql_query("SELECT 'id' FROM 'users' WHERE 'email' = '" . mysql_real_escape_string($_POST['email']) . "' AND 'password' = '" . mysql_real_escape_string($password) . "'");
        $query = mysql_query("SELECT 'id' FROM 'users' WHERE 'email' = '" . $email . "' AND 'password' = '" . $pw . "'");
        
        //Returns true if there is at least 1 row
        if(mysql_num_rows($query) != 0 ){
            die("Login credentials correct!");
        } else {
            die ("Error: Incorrect password or email address.");
        }
        
        
    }
    
?>

