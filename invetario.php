<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_invetario = "localhost";
$database_invetario = "producto";
$username_invetario = "root";
$password_invetario = "";
$invetario = mysql_pconnect($hostname_invetario, $username_invetario, $password_invetario) or trigger_error(mysql_error(),E_USER_ERROR); 
?>