<?php
    $mysql_user = "root";
    $mysql_password = "admin";
    $mysql_db = "grupp8";
    $mysql_hostname = "localhost";    
    $con = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die; 
    $db = mysql_select_db($mysql_db,$con) or die("could not select db" . mysql_error()); 