<?php
session_start();    

$conn=mysql_connect("localhost","virat","fuckup");
mysql_select_db('user',$conn);

/*if(mysqli_connect_errno())
echo "failed to connect\n";

else 
echo "connection established";
*/
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['emailid'];
$dob=$_POST['dob'];

$query="INSERT INTO info (name,password,email,birth) VALUES ('$username','$password','$email','$dob');";

mysql_query($query);

mysql_close();
?>