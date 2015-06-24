<?php

$host_mysql = "localhost";
$user_mysql = "xxxxxxxxxxx";
$password_mysql = "xxxxxxxxxxxxxx";
$banco_mysql = "xxxxxxxxxxx";


$conecta = mysql_connect($host_mysql, $user_mysql, $password_mysql) or print(mysql_error());
mysql_set_charset("utf8", $conecta);
mysql_select_db($banco_mysql, $conecta) or print(mysql_error());

