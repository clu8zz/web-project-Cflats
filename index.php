<?php
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
         $id=rand(1,2);
         $sql="SELECT `image` from images WHERE id=$id";
         $flatinfo="SELECT `location`,`price`,`single_shared`,`sep_all`,`telephone` FROM flatinfo WHERE id=$id ";
         $query=$db->query($sql);
         $flat_info_query=$db->query($flatinfo);
            $info_row=$flat_info_query->fetch_array(MYSQLI_ASSOC);
            $db->close();
        
?>
<!DOCTYPE html>
<html>
<head>
     
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   
   
    <title>Campus Flats</title>
     <link rel="shortcut icon" href="resources/favicon2.ico" type="image/x-icon">
  
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css" media="screen" type="text/css" />
   <link rel="stylesheet" href="css/index.css" media="screen" type="text/css" />
  
   
    <script src="js/jquery.js"></script> 
       <script src="js/modernizr.js"></script>
    <script src="js/flats.js"></script>
     <script src="js/jquery.backstretch.js"></script> 
    <script src="css/bootstrap/js/bootstrap.js"></script> 
    
     
	
</head>




<body>
<div class="se-pre-con"></div>


<div class="container" id="white-inside">
<!--everything belongs in this container for the sake of formatting and resizing. Removing this bootstrap class will cause very evil things to happen!-->


<div class="container" id="image"><img src="bground.png"/></div>
<br>

<nav class="navbar navbar-inverse" id="menu">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="https://preview.c9.io/hevongordon/campusflats/cflats/campus-flats/RentersWeb/index.html">Flats</a>
     
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="https://campusflats-hevongordon.c9.io/cflats/campus-flats/RentersWeb">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="#" id="areas">Areas</a></li>
         <li><a href="#">Contact</a></li>
        
      </ul>
   
      <ul class="nav navbar-nav navbar-right">
        <li><a href="https://campusflats-hevongordon.c9.io/cflats/campus-flats/RentersWeb/resources/form-3/login.html">Login</a></li>
        <li><a href="https://campusflats-hevongordon.c9.io/cflats/campus-flats/RentersWeb/resources/form-3/register.html">Register</a></li>
       
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="row">
  <div class="col-lg-8 col-xs-11" id="content">content side</div>
  <div class="col-lg-4 col-xs-12" id="filter">filter side</div>
  <div class="col-lg-8 col-xs-12" id="map-canvas">the bottom</div>
</div>
<br>
<div class="row">
  <div class="col-sm-6 col-md-4 ">
    <div class="thumbnail">
      <a href="#">
      <img src="../img/1920/purple.jpg" alt="...">
      </a>
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>some text to fill this out</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> </p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4 ">
    <div class="thumbnail">
      <a href="#">
      <img src="../img/1920/purple.jpg" alt="...">
      </a>
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>some text to fill this out</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>

</div>


   <style type="text/css">
     .no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(resources/images/loader-64x/Preloader_2.gif) center no-repeat #fff;
}
   </style>
    <script>
    $(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
    $("#map-canvas").empty();
    $("#content").load("simple-fade-slideshow.source.html")
function initialize() {
  var mapOptions = {
    zoom: 16,
    center: new google.maps.LatLng(18.0104288,-76.741323)
  };

  var map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
      
      
    var marker = new google.maps.Marker({
    position: map.getCenter(),
    map: map,
    title: 'Click to zoom'
  });
      
      
}

function loadScript() {
  var script = document.createElement('script');
  script.type = 'text/javascript';
  script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp' +
      '&signed_in=true&callback=initialize';
  document.body.appendChild(script);
}

	$("#areas").mousedown(function(){
	    $("#content").empty();
		console.log("this was also done");
		//$("#map-container").show();
		loadScript();
	    $("#mapBox").height("30em");
	    $("div#map-canvas").height('30em');
		
});

    </script>


</body>

</html>
<?php
?>