<?php
$mysql_hostname = "localhost";
$mysql_user = "virat";
$mysql_password = "fuckup";
$mysql_database = "user";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");

?>