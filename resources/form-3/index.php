<?php
include 'header.php';
$price='0.00';
$servername = getenv('IP');
         $name = getenv('C9_USER');
         $dbpassword = "";
         $database = "Users";
         $dbport = 3306;
        
        // Create connection
       $db = new mysqli($servername, $name, $dbpassword, $database, $dbport);

    

         // Check connection
         if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
        
         } 
         
       

?>
<!DOCTYPE html>
<html>
    <head>
     <meta http-equiv="content-type" content="text/html; charset=utf-8" />
   	   
     
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="../favicon2.ico">
        <link  rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Montserrat' >
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css"/>
        <script src="../../js/jquery.js"></script>
       
        <title></title>
         
    </head>
    <body>
      
    <div class="content" id="map-canvas"></div>
   
  <div class="filter-body">
    <br>
    <div class="container">
     <div class="row container-fluid">
       
        <div class=" col-lg-4"><center><span></span></center></div>
     <div class="col-lg-4 filter-label col-sm-3 col-xs-3"><center><span>Filter</span></center></div>
      <div class="col-lg-4"><center><span></span></center></div>
       
     </div>
     
      
      
      
    <div class="container-fluid filter">
          <div class="row">
  <div class="col-lg-5 col-sm-6">
    <div class="input-group">
      <span class="input-group-addon">
        $
      </span>
      <input type="text" class="form-control" aria-label="..." placeholder="Price range">
    </div><!-- /input-group -->
  </div>
  <!-- /.col-lg-6 -->
  <div class="col-lg-2 col-sm-6">  <span class="to"><center>TO</center></span></div>

  <div class="col-lg-5 col-sm-6">
    <div class="input-group">
      <span class="input-group-addon">
       $
      </span>
      <input type="text" class="form-control" aria-label="..." placeholder="Price range">
    </div>
  </div>
  <br>
  
    <div class="col-lg-7">
   <select>
     <option>Single</option>
      <option>Shared</option>
      
      
   </select>
 
 
  </div>
  <br>
   <div class="col-lg-5">
   <select>
     <option selected disabled>Vicinity</option>
      <option>Gordon Town</option>
       <option>Tavern</option>
         <option>Elliston Flats</option>
           <option>Golding Circle</option>
           <option>Mona</option>
      
   </select>
 
 
  </div>
  <br>
  <div class="col-lg-12 col-sm-6"> <button type="button" class="btn btn-default">Search</button></div>
  
  
  
  
  <!--dropdown button-->
 
</div>


    </div>
    </div>
    </div>
    <br>
    
    <br>
    <div class="container-fluid">
      
      <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="../images/no-image.png" alt="...">
      <div class="caption">
        <h3><span class="price">$<?php echo $price?></span></h3>
         <p><span class="titled">Location:</span></p>
        
         <p><span class="titled">Accomodation:</span></p>
         <p><span class="titled">Telephone:</span></p>
        
       
      </div>
    </div>
  </div>
  
  
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="../images/no-image.png" alt="...">
      <div class="caption">
         <h3><span class="price">$<?php echo $price?></span></h3>
        <p><span class="titled">Location:</span></p>
        
         <p><span class="titled">Accomodation:</span></p>
         <p><span class="titled">Telephone:</span></p>
        
       
       
      </div>
    </div>
  </div>
  
  
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="../images/no-image.png" alt="...">
      <div class="caption">
        <h3><span class="price">$<?php echo $price?></span></h3>
        <p><span class="titled">Location:</span></p>
        
         <p><span class="titled">Accomodation:</span></p>
         <p><span class="titled">Telephone:</span></p>
        
       
       
      </div>
    </div>
  </div>
    </div> 
      
    </body>
   
  
    <style type="text/css">
 .thumbnail>a>img{
 height:200px;
 width:300px;
}
  select{
     -webkit-appearance: menulist-button;
   height: 30px;
  
  }
 
 .titled{
   font-family: 'Oswald', sans-serif;
 }
      
    .top-of-filter{
       background-color:#F5FFFF;
       border-radius:10px;
    }
   .filter-label{
     font-size:30px;
     border-top-left-radius:6px;
     border-top-right-radius:6px;
        padding:3px;
        background-color:#fff;
         border-top:1px solid #E6E6E6;
         border-left:1px solid #E6E6E6;
         border-right:1px solid #E6E6E6;
       
    }
    .to{
      font-size:25px;
      color:#33CCFF;
    }
    .filter{
       border-top-left-radius:1px;
     border-top-right-radius:6px;
      padding:4px;
       background-color:#fff;
         border:1px solid #E6E6E6;
    }
   
        .content{
            height:400px;
           
        }
        .filter-body{
          background-color:#fff;
        
       
        }
        .price{
        font-family: 'Oswald', sans-serif;
          color:#33CCFF;
        }
    </style>
    
    
    
    
    
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
    <script>
// In the following example, markers appear when the user clicks on the map.
// The markers are stored in an array.
// The user can then click an option to hide, show or delete the markers.
var map;
var markers = [];
var coordsLat=[],coordsLong=[];
var x=0;

function initialize() {
  var pos = new google.maps.LatLng(18.0104288,-76.741323);
  var mapOptions = {
    zoom: 13,
    center: pos,
    mapTypeId: google.maps.MapTypeId.TERRAIN
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

  // This event listener will call addMarker() when the map is clicked.
 /* google.maps.event.addListener(map, 'click', function(event) {
    addMarker(new google.maps.LatLng(18.0105042940437,
    -76.71976089477539
        ));
    
  });*/
  
$(document).ready(function(){
    setTimeout(function(){
    addMarker(coordsLat,coordsLong);
       setAllMap(map);
    },1000)
})
  // Adds a marker at the center of the map.

}

var image="../images/testmarkr.png"
// Add a marker to the map and push to the array.
function addMarker(coordsLat,coordsLong) {
   
   
   for(var i=0;i<coordsLat.length;i++)
   {
    var location=new google.maps.LatLng(coordsLat[i],coordsLong[i]);
    var marker = new google.maps.Marker({
    position: location,
    map: map,
    icon:image
  });
  
  markers.push(marker); 
  x++;
   }
 

}

$(document).ready(function(){
    $.ajax({
       url:"getcoords.php",
       type:'POST',
       success:function(response){
           coordsLat=response[0];
           coordsLong=response[1];
       }
    });
});
/*$(document).ready(function(){setTimeout(function(){
   console.log(coordsLat) ;
},5000)})*/

// Sets the map on all markers in the array.
function setAllMap(map) {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(map);
  }
}

// Removes the markers from the map, but keeps them in the array.
function clearMarkers() {
  setAllMap(null);
}

// Shows any markers currently in the array.
function showMarkers() {
  setAllMap(map);
}

// Deletes all markers in the array by removing references to them.
function deleteMarkers() {
  clearMarkers();
  markers = [];
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
</html>
<?php
?>