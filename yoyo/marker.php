<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    
    <script src="http://maps.google.com/maps/api/js?&key=AIzaSyAFe6dEcbCxvZsMfJ-IOqOAdvjHep3MiHc&sensor=false"
            type="text/javascript"></script>
             <script src="jquery-1.3.2.js"></script>
    <script type="text/javascript">
    //<![CDATA[

  

    function load() {
      var map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(13.0833, 80.2833),
        zoom: 2
        
      });
      var infoWindow = new google.maps.InfoWindow;

      // Change this depending on the name of your PHP file
      downloadUrl("show.php", function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName("marker");
        for (var i = 0; i < markers.length; i++) {
          var description = markers[i].getAttribute("des");
          var lname = markers[i].getAttribute("lname");
          
          var point = new google.maps.LatLng(
              parseFloat(markers[i].getAttribute("lat")),
              parseFloat(markers[i].getAttribute("lng")));
              
          var html = "<b>" + "<a href=gallery.php>"+"Show Images"+"</a>"+"<br/>" + description + "</b> <br/>" + lname + "<br/>";
          
          
          var marker = new google.maps.Marker({
            map: map,
            position: point
            
          });
          bindInfoWindow(marker, map, infoWindow, html,lname);
        }
      });
    }

    function bindInfoWindow(marker, map, infoWindow, html,lname) {
      google.maps.event.addListener(marker, 'click', function() {
 
      	$.post("get.php",{lname:lname},function(data){

               // alert('hello');
		
		});  
      	
      	
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
        
      
        
        
        
      });
    }

    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;

      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request, request.status);
        }
      };

      request.open('GET', url, true);
      request.send(null);
    }

    function doNothing() {}

    //]]>
  </script>
  </head>

  <body onload="load()">
    <div id="map" style="width: 100%; height: 800px"></div>
  </body>
</html>