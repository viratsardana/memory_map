<html>
<head>
<style>
*{
padding: 0px;
margin: 0px;	
}
/*#wrapper
{
	width:100%;
	
				}*/
/*#body
{
	width: 100%;
  background-image: url('map.jpg');
 	
}*/
#table
{
	position:relative;
	top: 250px;
	margin-left: auto;
	margin-right: auto;
	//border:solid red 3px;
	
}
.validate
{
outline:none;
border-radius:5px;
border:1px solid #999999;
padding:5px;

}
.validate:focus
{
 border:1px solid #7dbef1;
    box-shadow:0 0 5px #7dbef1;	
}
#new_user
{
position:relative;	
top:200px;
left:500px;
font-size: 30px;
//color: white;
}
#button_submit_new
{
position:relative;	
top:300px;
left: 650px;	
}
#old_user
{
position: relative;
top: 10px;
	
}
</style>
</head>

<body id="body">
<div id="wrapper">
<form id="old_check" method="post" action="validate_check.php">
<table id="old_user" >
<tr>
<td>username :</td><td><input type="text" class="validate" name="uname"></input><td>        </td></td><td>password :</td>
<td><input type="password" class="validate" name="pass"></td>
<td><input type="submit" value="submit" id="button_submit_old"></input></td>
</tr>
</table>
</form>
<div id="new_user">
New Users Register Here
</div>
<table id="table">
<form method="post" action="register_form.php" id="new_reg">
<tr>
<td>email id :</td><td><input type="email" class="validate" name="emailid"></input></td>
</tr>
<tr>
<td>User Name :</td>   <td> <input type="text" class="validate" name="username" id="user_name"></input>
</td>
</tr>
<tr>
<td>Password :</td><td><input type="password" class="validate" name="password"  id="user_password"></input>
</td>
</tr>
<tr>
<td>Date of Birth :</td><td><input type="date" id="user_dob" name="dob" class="validate"></input></td>
</tr>
</table>
<input type="submit" id="button_submit_new" value="submit"></input>

</form>
<div>
</body>

</html>