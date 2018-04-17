<?php
//enter your MySQL database host name, often it is not necessary to edit this line
$db_host = "localhost";

//enter your MySQL database username
//$db_username = "propertynew";
$db_username = "gkyt_test2018";
//enter your MySQL database password
//$db_password = "propertynew";
$db_password = "test1234567";
//enter your MySQL database name
$db_name = "gkyt_db2018";

//connect to the database server
$connection = mysql_connect($db_host, $db_username, $db_password) or die(mysql_error());

//select database
$db = mysql_select_db($db_name, $connection);
?>