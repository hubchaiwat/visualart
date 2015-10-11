<?php
$DBServer = "localhost";
$DBName = "art_db";
$DBUsername = "adminmoshe";
$DBPassword = "xC77Byte";
$conn = mysql_connect($DBServer,$DBUsername,$DBPassword) or die("Could not connect to dbserver");
mysql_select_db($DBName,$conn) or die("Could not connect to database");
mysql_query("SET NAMES UTF8");
?>

