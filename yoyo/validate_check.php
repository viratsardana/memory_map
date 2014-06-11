<?php

$username=$_POST["uname"];
$password=$_POST["pass"];

$connection=mysql_connect("localhost","virat","fuckup");

$_SESSION['flag']=0;


if(!$connection)
{
die('sorry connection failed'.mysql_error());	
}

mysql_select_db("user",$connection);



session_start();
//$query=sprintf("select password from info where name=%s",mysql_real_escape_string($username));

$query="SELECT password,name,userid FROM info WHERE name='$username';";
$res=mysql_query($query);

$row=mysql_fetch_array($res);

//echo $row['name'];

if($row['password']!=$password){
echo "sorry";

}

else{ 
$_SESSION['sess']=1;
$_SESSION['flag']=1;
$_SESSION["names"]=$row["name"];
$_SESSION['userid']=$row['userid'];
header('Location:home2.php');

}

?>