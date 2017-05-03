<?php
    require("config.php");
    
    print("<form id=\"loginForm\" method=\"post\" action=\"./login.php\">\n");
    print("Email: <input type=\"test\" name=\"email\" id=\"email\"/><br /><br />\n");
    print("Password: <input type=\"password\" name=\"password\" id=\"password\"/><br><br>\n");
    print("<button type=\"submit\" name=\"submitButton\" id=\"submitButton\">Login</button>\n");
    print("</form>\n");
?>