<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map-canvas { height: 70%;
      width: 40%;
      position: relative;
      top: 180px;
      left: 100px; 
      width: 80%}
      
      #display_username
      {
      	top:20px;
      	position:relative;
        height: 20px;
        width: 100px;
        	border:solid red 3px;
        	/*font-family: "lucida grande",tahoma,verdana,arial,sans-serif";*/
      }
      
.controls {
        margin-top: 16px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }

      #pac-input {
        position:relative;
        top: 80px;
        background-color: #fff;
        padding: 0 11px 0 13px;
        width: 400px;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        text-overflow: ellipsis;
      }

      #pac-input:focus {
        border-color: #4d90fe;
        margin-left: -1px;
        padding-left: 14px;  /* Regular padding-left + 1. */
        width: 401px;
      }

      .pac-container {
        font-family: Roboto;
      }

      #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
      }

      #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }
      
      
      
      
      
      
      
    </style>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAFe6dEcbCxvZsMfJ-IOqOAdvjHep3MiHc&sensor=true">
    </script>
    <script type="text/javascript">
      function initialize() {
      	
  var markers = [];
  
  
  
  
   var mapOptions = {
          center: new google.maps.LatLng(13.0833, 80.2833),
          zoom: 2
        };
        var map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
  
    

var input = /** @type {HTMLInputElement} */(
      document.getElementById('pac-input'));
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
      	
      	
      	 var searchBox = new google.maps.places.SearchBox(
    /** @type {HTMLInputElement} */(input));

  // [START region_getplaces]
  // Listen for the event fired when the user selects an item from the
  // pick list. Retrieve the matching places for that item.
  google.maps.event.addListener(searchBox, 'places_changed', function() {
    
    
    
    
    
    var places = searchBox.getPlaces();
    
    

    for (var i = 0, marker; marker = markers[i]; i++) {
      marker.setMap(null);
    }

    // For each place, get the icon, place name, and location.
    markers = [];
    var bounds = new google.maps.LatLngBounds();
    
   
    
    for (var i = 0, place; place = places[i]; i++) {
    	 /*var i=place.geometry.location.lat();    
    
    alert(i);
    	
*/    	
    	
     

       //Create a marker for each place.
      var marker = new google.maps.Marker({
        map: map,
        title: place.name,
        position: places[i].geometry.location,
        
      });

      markers.push(marker);

      bounds.extend(place.geometry.location);
    }
    
    
    
    

    //map.fitBounds(bounds);
  });
  // [END region_getplaces]

  // Bias the SearchBox results towards places that are within the bounds of the
  // current map's viewport.
  google.maps.event.addListener(map, 'bounds_changed', function() {
    var bounds = map.getBounds();
    searchBox.setBounds(bounds);
  });	
      	
       
      }
      google.maps.event.addDomListener(window, 'load', initialize);
      
     
    </script>
  </head>
  <body>
  <div id="display_username">
    <?php
    
    session_start();
    echo $_SESSION['names'];
    ?>
    
    </div>
    
<div>


</div>    
   
    
    <input id="pac-input" class="controls" type="text" placeholder="Search Box">
    <div id="map-canvas"></div>
    
  </body>
</html>