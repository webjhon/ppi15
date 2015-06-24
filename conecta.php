<?php

$host_mysql = "localhost";
$user_mysql = "logica_ppi";
$password_mysql = "logicando2306";
$banco_mysql = "logica_ppi";


$conecta = mysql_connect($host_mysql, $user_mysql, $password_mysql) or print(mysql_error());
mysql_set_charset("utf8", $conecta);
mysql_select_db($banco_mysql, $conecta) or print(mysql_error());

