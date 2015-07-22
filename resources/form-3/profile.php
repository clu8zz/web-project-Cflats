<?php
//include 'register.php';
session_start();
if(isset($_SESSION['firstname'])===FALSE&&isset($_SESSION['lastname'])===FALSE )
{
 header('location:login.html');;
}
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
 $first_holder='no-image.png';
  $second_holder='no-image.png';
   $third_holder='no-image.png';
   $id=$_SESSION['user_id'];
 $sql = "SELECT `image` from images WHERE id=$id ";
    $query=$db->query($sql);
    $count=0;
 while ($row=mysqli_fetch_row($query))
    {
   ($test[$count]=$row[0]);
   $count++;
    }
    if($test[0]!=null){
     $first_holder=$test[0];
    }
     if($test[1]!=null){
     $second_holder=$test[1];
    }
     if($test[2]!=null){
     $third_holder=$test[2];
    }
    
  // echo $third_holder;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
          <link rel="shortcut icon" href="../favicon2.ico">
        <title>CFlats- <?php echo($_SESSION['firstname']." ".$_SESSION['lastname']);?></title>
       <link rel="stylesheet" href="../../css/spinner.css" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
        <link href="../../css/dropzone.css" type="text/css" rel="stylesheet" />
         <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Indie+Flower"/>
         <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"/>
        
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css"/>
           <script src="dropzone.js"></script>

      
         
    </head>
    <body>
     
     <!--MODAL-->
     <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
   
    <div class="modal-content">
    <span id="modal-title" ></span>
     <div class="progress"></div>
    </div>
  </div>
</div>
     <!--END OF MODAL-->
     
     
     
     
     
        <div class="container-fluid">
       <div id="navigation" class="navbar navbar-inverse ">
	      <div class="fluid-container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse1">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
                <a class="navbar-brand" href="home.php"><b>CampusFlats</b></a>	        
            </div>
	        <div class="navbar-collapse collapse" id="navbar-collapse1">
	           <ul class="nav navbar-nav">
	               <li>
                       <a href="https://campusflats-hevongordon.c9.io/cflats/campus-flats/RentersWeb"><i class="fa fa-home"></i> Home</a>
                   </li>
	           </ul>
	           
               
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo($_SESSION['firstname']." ".$_SESSION['lastname']);?><strong class="caret"></strong></a>                  
                        <ul class="dropdown-menu">
                            <li>
                                <a href="logout.php"><i class="fa fa-mail-reply"></i> Logout</a>
                            </li>
                        </ul>
                    </li>	
                    	
                </ul>   
                
	           	           <ul class="nav navbar-nav navbar-right">
	               <li>
                       <a href="home.php"><i class="fa fa-facebook"></i></a>
                       
                   </li>
                    <li>
                       <a href="home.php"><i class="fa fa-twitter"></i></a>
                       
                   </li>
                    <li>
                       <a href="http://instagram.com/mental_giantt">  <i class="fa fa-instagram"></i></a>
                       
                   </li>
	           </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </div>
	    
	    
	    <div class="row">
              
             <!-- <div class="col-lg-3 col-md-11 col-xs-11">
                  
                   <form action="upload.php" class="dropzone" id="dzone"></form>
              </div>-->
    <div class="col-sm-6 col-md-4 col-lg-4 ">
        <div class="thumbnail"><a href="#"><img src="<?php echo "../../uploads/".$first_holder;?>" alt="..."></a>
          <br>
         <form class="form-horizontal upload" method="post" action="upload.php">
  <div class="form-group">
    <label for="price" class="col-sm-2 control-label">Price:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="price" placeholder="price" name="price">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Location:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="location" placeholder="location" name="location">
    </div>
  </div>
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Telephone:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="telephone" placeholder="1876-###-####" name="telephone">
    </div>
  </div>
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Single:</label>
    <div class="col-sm-10">
     <input type="radio" name="single-shared" id="single" value="single">
    </div>
  </div>
  
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Shared:</label>
    <div class="col-sm-10">
     <input type="radio" name="single-shared" id="shared" value="shared">
    </div>
  </div>
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">All inclusive</label>
    <div class="col-sm-10">
     <input type="radio" name="sep-all" id="shared" value="All-inclusive">
    </div>
  </div>
   <div class="form-group">
    <label for="sep-util" class="col-sm-2 control-label">Separate Utilities</label>
    <div class="col-sm-10">
     <input type="radio" name="sep-all" id="shared" value="Utilities-seperate">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
         <div class="fileUpload btn btn-primary">
    <span>Upload Photo</span>
    <input type="file" class="upload" name="upload" />
</div>
      <button type="submit" class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-sm">Save</button>
    </div>
  </div>
</form>
             </div>
              <div class="alert alert-success" role="alert" id="error"> Your data has been saved!</div>
    </div>
    
    
    
    <!--second form-->
 <div class="col-sm-6 col-md-4 col-lg-4 ">
        <div class="thumbnail"><a href="#"><img src="<?php echo "../../uploads/".$second_holder;?>" alt="..."></a>
        <br>
         <form class="form-horizontal upload" method="post" action="upload.php">
  <div class="form-group">
    <label for="price" class="col-sm-2 control-label">Price:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="price" placeholder="price" name="price">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Location:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="location" placeholder="location" name="location">
    </div>
  </div>
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Telephone:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="telephone" placeholder="1876-###-####" name="telephone">
    </div>
  </div>
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Single:</label>
    <div class="col-sm-10">
     <input type="radio" name="single-shared" id="single" value="single">
    </div>
  </div>
  
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Shared:</label>
    <div class="col-sm-10">
     <input type="radio" name="single-shared" id="shared" value="shared">
    </div>
  </div>
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">All inclusive</label>
    <div class="col-sm-10">
     <input type="radio" name="sep-all" id="shared" value="All-inclusive">
    </div>
  </div>
   <div class="form-group">
    <label for="sep-util" class="col-sm-2 control-label">Separate Utilities</label>
    <div class="col-sm-10">
     <input type="radio" name="sep-all" id="shared" value="Utilities-seperate">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
         <div class="fileUpload btn btn-primary">
    <span>Upload Photo</span>
    <input type="file" class="upload" name="upload" />
</div>
      <button type="submit" class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-sm">Save</button>
    </div>
  </div>
</form>
             </div>
              <div class="alert alert-success" role="alert" id="error"> Your data has been saved!</div>
    </div>    
          <!--third form-->
           <div class="col-sm-6 col-md-4 col-lg-4 ">
        <div class="thumbnail"><a href="#"><img src="<?php echo  "../../uploads/".$third_holder;?>" alt="..."></a>
          <br>
         <form class="form-horizontal upload" method="post" action="upload.php">
  <div class="form-group">
    <label for="price" class="col-sm-2 control-label">Price:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="price" placeholder="price" name="price">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Location:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="location" placeholder="location" name="location">
    </div>
  </div>
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Telephone:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="telephone" placeholder="1876-###-####" name="telephone">
    </div>
  </div>
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Single:</label>
    <div class="col-sm-10">
     <input type="radio" name="single-shared" id="single" value="single">
    </div>
  </div>
  
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Shared:</label>
    <div class="col-sm-10">
     <input type="radio" name="single-shared" id="shared" value="shared">
    </div>
  </div>
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">All inclusive</label>
    <div class="col-sm-10">
     <input type="radio" name="sep-all" id="shared" value="All-inclusive">
    </div>
  </div>
   <div class="form-group">
    <label for="sep-util" class="col-sm-2 control-label">Separate Utilities</label>
    <div class="col-sm-10">
     <input type="radio" name="sep-all" id="shared" value="Utilities-seperate">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
         <div class="fileUpload btn btn-primary">
    <span>Upload Photo</span>
    <input type="file" class="upload" name="upload" id="up" />
</div>
      <button type="submit" class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-sm">Save</button>
   
    </div>
  </div>
  
</form>

             </div>
             <div class="alert alert-success" role="alert" id="error"> Your data has been saved!</div>
    </div>
    <!--end of forms-->

 
  
    <div class="col-lg-12 col-sm-6 jumbotron"><center><h1>Show us where you are Located</h1><br><h3>Tap on your community on the map below then share location of home!</h3></center></div>
    <div id="panel">
      <button class="btn btn-default" id="coords">Share Location of home</button>
      <div class="alert alert-info info" role="alert">...</div>
      
     </div>
     <div id="map-canvas"  class="col-lg-12 col-sm-6"></div>
      

     <!--<div id="footer"  class="col-lg-12 col-sm-6 jumbotron" ></div>-->
        </div>
        </div>
  
  
         <script src="../../js/jquery.js"></script>
           <script src="../../js/jquery.liteuploader.js"></script>
             <script src="../../js/progressbar.min.js"></script>
         <script src="assets/bootstrap/js/bootstrap.min.js"></script>
         
       
        
<style type="text/css">
.info{
 padding:5px;
}
 #panel {
        padding: 5px;
         font-size: 15px;
       
      }
#panel, .panel {
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
         width: 100%;
      }

    .fileUpload {
    position: relative;
    overflow: hidden;
    margin: 10px;
}
#footer{
 background-color:#1E1E1E;
}
.thumbnail>a>img{
 height:200px;
 width:300px;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}
.jumbotron{
    font-family: 'Lora', serif;
}
.alert{
 display:none;
}
#modal-title{
 color:Gray;
 
}
 /*.progress{
  visibility:hidden;
 }*/
 html, body, #map-canvas,#mapBox {
        height: 30em;
        margin: 0px;
        padding: 0px;
      }

</style>
         
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
    <script>
var map;
var markers = [];
var coords={};
function initialize() {

 var x=0;
  var haightAshbury = new google.maps.LatLng(18.0104288,-76.741323);
  var mapOptions = {
    zoom: 13,
    center: haightAshbury,
    mapTypeId: google.maps.MapTypeId.TERRAIN
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

  // This event listener will call addMarker() when the map is clicked.
  google.maps.event.addListener(map, 'click', function(event) {
    addMarker(event.latLng);
  });



  google.maps.event.addListener(marker, 'click', function() {
    map.setZoom(8);
    map.setCenter(marker.getPosition());
  });

  //Adds a marker at the center of the map.
  addMarker(haightAshbury);
  
}

var image="../images/testmarkr.png"

// Add a marker to the map and push to the array.
function addMarker(location) {
clearMarkers();
  var marker = new google.maps.Marker({
    position: location,
    map: map,
    icon:image
  });
  google.maps.event.addListener(marker, 'click', function() {
    map.setZoom(10);
    map.setCenter(marker.getPosition());
  });

  markers.push(marker);
  coords["lat"]=marker.position["A"];
  coords["long"]=marker.position["F"];
 
  
}
$("#coords").on('click',function(){
 $.ajax({
  url:'coords.php',
  type:"POST",
  data:coords,
  success:function(response){
   console.log(response);
   if(response==-1)
   {
    $(".alert-info").removeClass("alert-info")
    $(".info").addClass("alert-danger");
    
    $(".info").html("<center>please select your location first</center>");
    $(".info").show();
   }
   else if(response==1)
   {
     $(".info").addClass("alert-info");
     $(".info").removeClass("alert-danger")
     $(".alert-info").html("<center>The location of your home has been saved!</center>");
      $(".alert-info").show();
   }
  }
 });
});

// Sets the map on all markers in the array.
function setAllMap(map) {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(null);
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
//gets the latitude of location

//returns the longitude of the location

google.maps.event.addDomListener(window, 'load', initialize);


    </script>
    
    <script type="text/javascript">
 $(".upload").mousedown(function(){

$('.upload').liteUploader({
				script: 'uploadFile.php'
			})
			.on('lu:success', function (e, response) {

			});
    
 }); 
 
$("form.upload").on('submit',function(){
 ///$(".spinner-loader").delay(5000).fadeOut('slow');
 var validator=true;
 var valid={};
 
$(this).find('[name]').each(function(index, val){
 val=$(this).val();
 var name=$(this).attr('name');
 valid[name]=val;

})

if(valid['price']==""||valid['location']==""||valid['telephone']==""||	$('input[name=single-shared]:checked', 'form.upload').val()==undefined||$('input[name=sep-all]:checked', 'form.upload').val()==undefined){
$("#modal-title").html("<center><h3>All fields are required!</h3></center>")
		 $(".progress").hide();
 return false;
}

	var component=$(this);
	var url=component.attr('action'),
	 type=component.attr('method'),
	data={};
	
	component.find('[name]').each(function(index, value)
	{
		var component=$(this);
	 var name=component.attr('name'),
		value=component.val();

		data[name]=value;
	
	});
	
	
	withoutSlash=data['upload'].split('\\');
	
	data['upload']=withoutSlash[withoutSlash.length-1];
var single_shared=	$('input[name=single-shared]:checked', 'form.upload').val()
var sep_all=$('input[name=sep-all]:checked', 'form.upload').val()
data['single-shared']=single_shared;
data['sep-all']=sep_all;


	$.ajax({
		url:url,
		type:type,
		data:data,
		success: function(response){
		 console.log(response);
		 $("#modal-title").html("<center><h3>Your information is being submitted! do not resubmit the form!</h3></center>")
		 $(".progress").show();
	  		var line = new ProgressBar.Line('.progress', {
    color: '#FCB03C',
    duration: 3000,
     strokeWidth: 5,
    trailWidth: 3,
    text: {
        value: '0'+'%',
          color: 'black',
    },
    step: function(state, bar) {
        bar.setText((bar.value() * 100).toFixed(0)+'%');
    }

});

line.animate(1.0);

	  
	   
	    if($(".alert").hasClass("alert-success"))
	    {
	     	$(".alert-success").fadeIn(1000);
	    }
	    else
	    {
	     $(".alert").addClass("alert-success");
	     	$(".alert-success").fadeIn(1000);
	    }
		}
	});
	return false;
});




 
    </script>
       </body>
</html>
<?php
?>