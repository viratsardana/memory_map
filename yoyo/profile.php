<html>

<head>

<style>
*
{
	padding:0px;
	margin:0px;
}
body
{
   overflow:hidden;	
	}
#header
{
 	width:100%;
 	height:100px;
 	background-color:#0029A3;
}

#text
{
   color:white;
   font-family:"Arial Black", "Arial Bold", Gadget, sans-serif;
   font-size: 30px;
   position: relative;
   left: 10px;
   top:30px;	
}
table
{
	font-family:"Arial Black", "Arial Bold", Gadget, sans-serif;
}
td
{
padding: 10px;	
}
</style>

</head>


	<body>
	<div id="header">
	<div id="text">
Complete your Public Profile	
	</div>
	</div>
<table>
<form method="post" action="complete.php">
<tr>
<td>
First Name:
</td>
<td><input type="text" id="fname" name="fname"></input></td>
</tr>

<tr>
<td>
Last Name:
</td>
<td><input type="text" name="lname" id="lname"></input></td>

</tr> 
<tr>
<td>Choose Profile Picture</td>
<td><input type="file" value="choose" id="images" ></input></td>
</tr>
<tr>
<td>
<input type="submit"></input>
</td>
</tr>
</table>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="up.js"></script>


</body>




</html>