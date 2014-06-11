<?php

session_start();

if($_SESSION['flag']!=1)
{
	header('Location:login.php');
}

?>

<!DOCTYPE html>
<html>
  <head>
    
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
    </style>
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
    <script src="jquery-1.3.2.js"></script>
    <script>
// This example displays an address form, using the autocomplete feature
// of the Google Places API to help users fill in the information.

var placeSearch, autocomplete;
var componentForm = {
  street_number: 'short_name',
  route: 'long_name',
  locality: 'long_name',
  administrative_area_level_1: 'short_name',
  country: 'long_name',
  postal_code: 'short_name'
};

function initialize() {
  // Create the autocomplete object, restricting the search
  // to geographical location types.
  autocomplete = new google.maps.places.Autocomplete(
      /** @type {HTMLInputElement} */(document.getElementById('autocomplete')),
      { types: ['geocode'] });
  // When the user selects an address from the dropdown,
  // populate the address fields in the form.
  google.maps.event.addListener(autocomplete, 'place_changed', function() {
    //fillInAddress();
  });
}

// The START and END in square brackets define a snippet for our documentation:
// [START region_fillform]
function fillInAddress() {
  // Get the place details from the autocomplete object.
  var place = autocomplete.getPlace();

  for (var component in componentForm) {
    document.getElementById(component).value = '';
    document.getElementById(component).disabled = false;
  }

  // Get each component of the address from the place details
  // and fill the corresponding field on the form.
  for (var i = 0; i < place.address_components.length; i++) {
    var addressType = place.address_components[i].types[0];
    if (componentForm[addressType]) {
      var val = place.address_components[i][componentForm[addressType]];
      document.getElementById(addressType).value = val;
    }
  }
}
// [END region_fillform]

// [START region_geolocation]
// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
function geolocate() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var geolocation = new google.maps.LatLng(
          position.coords.latitude, position.coords.longitude);
      autocomplete.setBounds(new google.maps.LatLngBounds(geolocation,
          geolocation));
    });
  }
}
// [END region_geolocation]

function addFunction()
{
	
	var place=autocomplete.getPlace();
	
	var i=place.geometry.location.lat();
	var j=place.geometry.location.lng();
   var p=place.name;
	var k=1;
	alert(i);
	var des=document.getElementById("text_details").value;
	
	
	$.post("receive.php",{latitude:i,longitude:j,description:des,placename:p},function(data){
alert("Your entries have successfully been added");

window.location.href="addphoto.php";		
		});
	
//window.location = "?latitude=" + i+"&longitude="+j+"&check="+k;	
	
	
}


    </script>

    <style>
    *
    {
padding:0 px;
margin:0 px;    	
    	}
    	body
    	{
      overflow:hidden;    		
    		}
    #autocomplete{
      outline:none;
border-radius:5px;
border:1px solid #999999;
padding:5px;
width: 300px;
height: 30px;
position: relative;
margin-top: 0px;
}
#autocomplete:focus{
	 border:1px solid #7dbef1;
    box-shadow:0 0 5px #7dbef1;	
    width: 470px;
}

#location
{your original code, but on the other hand it is much more scaleable and
	width:400px;
	height:200px;
	
	position: relative;
	float:left;
	top:120px;
   left:180px; 
	height:300px;
	
	
}

#display_name
{
	 font-family: "Arial Black", "Arial Bold", Gadget, sans-serif;
	 color: #0029A3;
	 //font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
	 font-size: 20px;
	 position:relative;
	 top:30px;
	 left:90px;
	 text-decoration: none;
}
#display_name:hover
{
   text-decoration: underline;	
}
#text
{
	 font-family: "Arial Black", "Arial Bold", Gadget, sans-serif;
	 font-size:30px;
	 color: #0029A3;
	 
	 
}
#add_button
{
position:relative;
top:30px;
left:50px;
background-color: #0029A3;
color: white;
height:70px;
width: 200px;
font-size: 20px;
border-radius:10px;
font-family: "Arial Black", "Arial Bold", Gadget, "sans-serif";
outline:none;

}

#place_details
{
   //visibility: hidden;
   position:relative;
   left:800px;
   top:-100px;	
   height:450px;
   width:450px;
   
	
}
table
{
	}
font
{
font-family:"Arial Black", "Arial Bold", Gadget, sans-serif;
color: 	#0029A3;
font-weight: bold;
	
}

input
{
	outline:none;
border-radius:5px;
border:1px solid #999999;
font-family:"Arial Black", "Arial Bold", Gadget, sans-serif;
padding:5px;
	
}

input:focus
{

	 border:1px solid #7dbef1;
    box-shadow:0 0 5px #7dbef1;	

	
}
#text_details
{
outline:none;
border-radius:5px;
border:1px solid #999999;
font-family:"Arial Black", "Arial Bold", Gadget, sans-serif;
padding:5px;
height:100px;
	
}

#text_details:focus{
	 border:1px solid #7dbef1;
    box-shadow:0 0 5px #7dbef1;	

	}
	
	#header
	{
	    width:100%;
	    height:50px;
	    //border:solid red 3px;
	    background-color:#0029A3;
	    	
	}
	.link
	{
		position:relative;
		left:550px;
		color:#8992FA;
		text-decoration: none;
		font-size: 20px;
		font-family:"Arial Black", "Arial Bold", Gadget, sans-serif;
		top:7px;
		margin-right:100px;
		}
		#logout
		{
		   left:930px;	
		}
		.link:hover
		{
		   color:white;	
		}
    </style>
  </head>

  <body onload="initialize()">
  
  <div id="header">
  <a href="home2.php" class="link" id="home">Home</a>
  <a href="marker.php" class="link" id="map">Map</a>
  <a href="#" class="link" id="logout">Logout</a>
  </div>
    
<div id="display_name">
<?php
session_start();
echo "<a href='profile.php'>".$_SESSION['names']."</a>";
?>
</div>    
    
    
<div id="location">
<div id="text">Search and Add new Places to your Map and Share Your Experience</div>
<br></br><br></br>    
      <input id="autocomplete" placeholder="Enter your address"
             onFocus="geolocate()" type="text" ></input>
             
             <br></br>
<input type="submit" id="add_button" value="Add Place" onclick="addFunction()"></input>
   
</div>


    
<div id="place_details" style="visibility:visible">
<form id="form_place">

<table cellspacing="20">

<tr>
<td><font>Description   :</font></td>
<td><textarea id="text_details" rows="30" cols="30" placeholder="Enter a short diary entry for your Experience in not more than 200 words"></textarea>  </td>

</tr>

<tr>
<td><font>Date  :</font></td>
<td>
<input type="date"></input></td>

</tr>

<tr>
<td><font>Event   :</font></td>
</tr>

</table>

</form>
</div>    
    
  </body>
</html>



<?php
/*
$check=0;

session_start();

$userid=$_SESSION['userid'];



$latitude=$_GET['latitude'];
$longitude=$_GET['longitude'];
$checks=$_GET['check'];

if($checks)
$check=1;



$connection=mysql_connect("localhost","virat","fuckup");
if(!$connection)
{
	die('connection failed'.mysql_error());
}
mysql_select_db("user",$connection);

if($longitude!=0 && $latitude!=0){

$query="insert into userlocation (userid,longitude,latitude) values ('$userid','$longitude','$latitude');";
mysql_query($query);


}
*/
?>
