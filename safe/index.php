<!DOCTYPE HTML>
<html>
    <head></head>
    <body>
    
<?php
    require 'config.php';

    $email = $password = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $email = test_input($_POST["email"]);
        $password = test_input($_POST["password"]);
        
    }
    
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
     
    
?>
        <h2>Login</h2>
        <form id="loginform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <table>
                <tr>
                    <td>Email: </td>
                    <td><input type="text" name="email" id="email"></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="password" id="password"></td>
                </tr>
            </table>
            <button type="submit" name="login" id="login">Login</button>
        </form>
        
        <?php
            //test 
            echo $email;
            echo $password;
        ?>

    </body>
</html>

