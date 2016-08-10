<?php
$db_hostname="lochnagar.abertay.ac.uk"; //server name
$db_username="sql1206633";  //mysql username.
$db_password="MjWvMmKt";       //password
$db_database="sql1206633";  //database name which you created
$con=mysql_connect($db_hostname,$db_username,$db_password);
if(! $con)
{
die('Connection Failed'.mysql_error());
}

mysql_select_db($db_database,$con);
?>