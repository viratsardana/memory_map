(function(){
	
var input = document.getElementById("images"), 
		formdata = false;
var fname=document.getElementById("fname");
var fname=document.getElementById("lname");
	

	if (window.FormData) {
  		formdata = new FormData();
  		
	}
	
 	input.addEventListener("change", function (evt) {
 		
 		var i = 0, len = this.files.length, img, reader, file;
 		
 		
	
		for ( ; i < len; i++ ) {
			file = this.files[i];
	
			if (!!file.type.match(/image.*/)) {
				if ( window.FileReader ) {
					reader = new FileReader();
					
					reader.readAsDataURL(file);
				}
				if (formdata) {
					formdata.append("images[]", file);
				}
			}	
		}
	
		if (formdata) {
			$.ajax({
				url: "complete.php",
				type: "POST",
				data: formdata,
				processData: false,
				contentType: false,
				success: function (res) {
				
				}
			});
		}
	}, false);
}());