<?php

    // Improved ver. usings PDO
    require("config.php");
    
    print("<h2>Login</h2>");
    // Action unsafe, vulnerable to XSS
    //print("<form id=\"loginForm\" method=\"post\" action=\"./login.php\">\n");
    print("<form id=\"loginForm\" method=\"post\" action=\" <?php echo htmlspecialchars(\$_SERVER\[\"PHP_SELF\"]);?>\"/>");
    print("<table>");
    print("<tr><td>Email: </td>");
    print("<td><input type=\"test\" name=\"email\" id=\"email\"/></td></tr>");
    print("<tr><td>Password:</td>");
    print("<td><input type=\"password\" name=\"password\" id=\"password\"/></td></tr>");
    print("</table>");
    print("<button type=\"submit\" name=\"submitButton\" id=\"submitButton\">Login</button>\n");
    print("</form>\n");
?>

