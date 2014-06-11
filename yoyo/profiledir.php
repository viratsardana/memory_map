<?php

session_start();

$userid=$_SESSION['userid'];

mkdir("profile/".$userid,0777,true);
$path="profile/".$userid."/";
?>