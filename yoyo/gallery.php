<?php

session_start();
   $lname=$_SESSION['lnameg'];
   $userid=$_SESSION['userid']; 
  

?>




<html>
<head>
<meta http-equiv="Content-Type" content="text/html">
<title>Show images in folder</title>
<style type="text/css">
body {
    margin: 0 auto 20px;
    padding: 0;
    
    text-align: center;
}
td {
    padding: 0 0 50px;
    text-align: center;
    font: 9px sans-serif;
    border:solid black;
     
}
table {
    width: 100%;
}
img {
    display: block;
    margin-left:auto;
    margin-top:auto;
    margin-right:auto;
    height: auto;
    width: auto;
    max-width: 250px;
    max-height:250px;
    outline: none;
    border:solid black;
}
img:active {
    max-width: 100%;
}
a:focus {
    outline: none;
}
</style>
</head>
<body>
  
<?php

session_start();
   $lname=$_SESSION['lnameg'];
   $userid=$_SESSION['userid']; 
  


$folder = 'uploads/'.$userid."/".$lname."/";
$count=0;
$filetype = '*.*';
$files = glob($folder.$filetype);
echo '<table>';
for ($i=0; $i<count($files); $i++) {
	if($count==0)
	{
		echo '<tr>';
		}
    echo '<td>';
    echo '<a name="'.$i.'" href="#'.$i.'"><img src="'.$files[$i].'" /></a>';
    //echo substr($files[$i],strlen($folder),strpos($files[$i], '.')-strlen($folder));
    echo '</td>';
    $count++;
    if($count==3)
    {
    	
    	echo '</tr>';
    	$count=0;
    }
}
echo '</table>';
?>