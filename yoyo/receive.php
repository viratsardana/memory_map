<?php

session_start();

$userid=$_SESSION['userid'];
$longitude=$_POST['longitude'];
$latitude=$_POST['latitude'];
$description=$_POST['description'];
$placename=$_POST['placename'];
$_SESSION['placename']=$placename;


$connection=mysql_connect("localhost","virat","fuckup");

if(!$connection)
{
	die("connection failed".mysql_error());
	}
mysql_select_db("user",$connection);

$query="insert into ulocation (userid,lng,lat,description,lname) values ('$userid','$longitude','$latitude','$description','$placename');";

mysql_query($query);




?>