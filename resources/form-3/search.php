<?php
ob_start();
include 'header.php';
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("..title..","Campus Flats- Search",$buffer);
echo $buffer;unset($_GET['no-name']);
echo $_POST['top-range'];
?>
<!DOCTYPE html>
<html>
    <head>
            <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <!--filter section beginning-->
                <div class="col-lg-3 col-sm-6 container filter-style">
                  
                    <form method="GET">
                       <div class="input-group input-group-lg">
                          <span class="input-group-addon" id="sizing-addon1"> <span class="glyphicon glyphicon-search"></span></span>
                          <input type="text" class="form-control" placeholder="search location" aria-describedby="sizing-addon1" name="search">
                       </div>
                                                   <br>
                       <div class="input-group input-group-lg">
                          <span class="input-group-addon" id="sizing-addon1">$</span>
                          <input type="text" class="form-control" placeholder="price range" aria-describedby="sizing-addon1" name="top">
                       </div>
                       
                                                       <center><span class="to">TO</span></center>
                       
                       <div class="input-group input-group-lg">
                          <span class="input-group-addon" id="sizing-addon1">$</span>
                          <input type="text" class="form-control" placeholder="price range" aria-describedby="sizing-addon1" name="bottom">
                       </div>
                       <br>
                        <select name="accomodation">
                           <option selected disabled>Accomodation</option>
                           <option>Single</option>
                           <option>Shared</option>
                        </select>
                       <br>
                       <br>
                        <input type="submit" name="push" value="Search"class="btn btn-default"/>
                    </form>
                </div>
                <!--END OF FILTER-->
                
                <!--The other side-right side, content and stuff-->
                <div class="col-lg-9 col-sm-6 ">
                    <div class="row">
                      <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="thumbnail">
                          <img src="../images/no-image.png" alt="...">
                          <div class="caption">
                            <h3><span class="price">$</span></h3>
                            <p><span class="titled">Location:</span></p>
                             <p><span class="titled">Accomodation: </span></p>
                              <p><span class="titled">Telephone: </span></p>
                          </div>
                        </div>
                      </div>
                       <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="thumbnail">
                          <img src="../images/no-image.png" alt="...">
                          <div class="caption">
                            <h3><span class="price">$</span></h3>
                            <p><span class="titled">Location:</span></p>
                             <p><span class="titled">Accomodation: </span></p>
                              <p><span class="titled">Telephone: </span></p>
                          </div>
                        </div>
                      </div>
                       <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="thumbnail">
                          <img src="../images/no-image.png" alt="...">
                          <div class="caption">
                            <h3><span class="price">$</span></h3>
                            <p><span class="titled">Location:</span></p>
                             <p><span class="titled">Accomodation: </span></p>
                              <p><span class="titled">Telephone: </span></p>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="row">
                 <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="thumbnail">
                          <img src="../images/no-image.png" alt="...">
                          <div class="caption">
                            <h3><span class="price">$</span></h3>
                            <p><span class="titled">Location:</span></p>
                             <p><span class="titled">Accomodation: </span></p>
                              <p><span class="titled">Telephone: </span></p>
                          </div>
                        </div>
                      </div>
                       <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="thumbnail">
                          <img src="../images/no-image.png" alt="...">
                          <div class="caption">
                            <h3><span class="price">$</span></h3>
                            <p><span class="titled">Location:</span></p>
                             <p><span class="titled">Accomodation: </span></p>
                              <p><span class="titled">Telephone: </span></p>
                          </div>
                        </div>
                      </div>
                       <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="thumbnail">
                          <img src="../images/no-image.png" alt="...">
                          <div class="caption">
                            <h3><span class="price">$</span></h3>
                            <p><span class="titled">Location:</span></p>
                             <p><span class="titled">Accomodation: </span></p>
                              <p><span class="titled">Telephone: </span></p>
                          </div>
                        </div>
                      </div>
            </div>
        </div>
       
    </body>
    <style type="text/css">
        .filter-style{
          padding:5px;
            border:1px solid  #E6E6E6;
            border-radius:6px;
        }
          .to{
      font-size:25px;
      color:#33CCFF;
    }
    
    select{
     -webkit-appearance: menulist-button;
   height: 30px;
  
  }
  .price{
        font-family: 'Oswald', sans-serif;
          color:#33CCFF;
        }
        .titled{
   font-family: 'Oswald', sans-serif;
 }
        
    </style>
</html>
<?php
if(isset($_GET['push']))
{
//	echo "hello";
}
else{
	//echo"not hello";
}
?>