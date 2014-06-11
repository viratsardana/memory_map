<?php
include "profiledir.php";  
  session_start();
  $username=$_SESSION['names'];
  $userid=$_SESSION['userid'];
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  
foreach ($_FILES["images"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $name = $_FILES["images"]["name"][$key];
        move_uploaded_file( $_FILES["images"]["tmp_name"][$key],  $path . $_FILES['images']['name'][$key]);
    }
    }


  
  $conn=mysql_connect("localhost","virat","fuckup");
  mysql_select_db("user",$conn);
  
  $query="insert into name (userid,fname,lname) values ($userid,'$fname','$lname');";
  
  mysql_query($query);
  
  mysql_close();
  header('Location:home2.php');
  
  



?>