<?php

include "test.php";

session_start();

$placename=$_SESSION['placename'];

$userid=$_SESSION['userid'];

$connection=mysql_connect('localhost','virat','fuckup');


if(!$connection)
{
   die('connection failed'.mysql_error());	
}


foreach ($_FILES["images"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $name = $_FILES["images"]["name"][$key];
        move_uploaded_file( $_FILES["images"]["tmp_name"][$key],  $path . $_FILES['images']['name'][$key]);
    }
}


echo "<h2>Successfully Uploaded Images $path </h2>";

