<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>HTML5 File API</title>
    <style>
    
    
    

h1 {
	margin-top:0;
}

#main {
	width: 800px;
	
	margin:auto;
	color:#0029A3;
	padding: 20px;
	border: 1px solid #ccc;
	font-family: "Arial Black", "Arial Bold", Gadget, sans-serif;
}

#image-list {
	list-style:none;
	margin:0;
	padding:0;
}
#image-list li {
	background: #fff;
	border: 1px solid #ccc;
	text-align:center;
	padding:20px;
	margin-bottom:19px;
}
#image-list li img {
	width: 258px;
	vertical-align: middle;
	border:1px solid #474747;
}
    
#images
{
    color:#0029A3;
    font-family: "Arial Black", "Arial Bold", Gadget, sans-serif;
    font-weight:bold;
}    
    
    </style>
</head>
<body>
	<div id="main">
		<h1>Upload Your Images to Make your Trip Memorable</h1>
		<form method="post" enctype="multipart/form-data"  action="upload.php">
    		<input type="file" name="images" id="images" multiple class="imgs" />
    		<button type="submit" id="btn">Upload Files!</button>
    	</form>

  	<div id="response"></div>
		<ul id="image-list">

		</ul>
	</div>
	
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="upload.js"></script>
</body>
</html>
