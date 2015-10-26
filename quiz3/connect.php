<?php
$host = "localhost"; //MySQL Host normally it'll be localhost to every host

$user = "root"; // edit the root with your mysql user

$pass = "YES"; // edit the password with your mysql password

$db = "questionb"; // this is the database name what i've given if you want to change just change it.

mysql_connect($host,$user,$pass) or die(mysql_error());
mysql_select_db($db) or die(mysql_error());

?>