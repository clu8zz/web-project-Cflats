<?php
ob_start();
include 'header.php';
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("..title..","Campus Flats- Search",$buffer);
echo $buffer;

?>
<!DOCTYPE html>
<html>
    <head>
         <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div id="test" >
            <div class="container">
                <div class="row">
                   
                    <div class="col-lg-4 filter-form col-sm-6">
                        
                       <form action="#" method="GET">
                           <div class="input-group">
                              <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                                  <input type="text" class="form-control" aria-label="price range" placeholder="search locations">
                                 
                            </div>
                            <br>
                           
                          <div class="input-group">
                              <span class="input-group-addon">$</span>
                                  <input type="text" class="form-control" aria-label="price range" placeholder="Price range">
                                 
                            </div>
                            <center><span class="to">TO</span></center>
                            <div class="input-group">
                              <span class="input-group-addon">$</span>
                                  <input type="text" class="form-control" aria-label="price range" placeholder="Price range">
                                 
                            </div>
                            <br>
                            <select>
                                <option selected disabled>Accomodation</option>
                                 <option>Single</option>
                                  <option>Shared</option>
                            </select>
                            <br>
                            <br>
                           <button class="btn btn-default">Search</button>
                       </form>
                    </div>
                     <div class="col-lg-8 col-sm-6">
                       <div class="row">
                         <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="thumbnail">
                              <img src="../images/no-image.png" alt="...">
                                  <div class="caption">
                                       <h3><span class="price">$</span></h3>
                                       <p><span class="titled">Location: </span></p>
        
                                         <p><span class="titled">Accomodation: </span></p>
                                         <p><span class="titled">Telephone:  </span></p>
        
                                  </div>
                            </div>
                         </div>
                          <!--second container-->
                       
                         <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="thumbnail">
                              <img src="../images/no-image.png" alt="...">
                                  <div class="caption">
                                        <h3><span class="price">$</span></h3>
                                       <p><span class="titled">Location: </span></p>
        
                                         <p><span class="titled">Accomodation: </span></p>
                                         <p><span class="titled">Telephone:  </span></p>
                                  </div>
                            </div>
                         </div>
                         <!--third container-->
                        
                       
                         <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="thumbnail">
                              <img src="../images/no-image.png" alt="...">
                                  <div class="caption">
                                        <h3><span class="price">$</span></h3>
                                       <p><span class="titled">Location: </span></p>
        
                                         <p><span class="titled">Accomodation: </span></p>
                                         <p><span class="titled">Telephone:  </span></p>
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
                                       <p><span class="titled">Location: </span></p>
        
                                         <p><span class="titled">Accomodation: </span></p>
                                         <p><span class="titled">Telephone:  </span></p>
                                  </div>
                            </div>
                         </div>
                         
                         <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="thumbnail">
                              <img src="../images/no-image.png" alt="...">
                                  <div class="caption">
                                        <h3><span class="price">$</span></h3>
                                       <p><span class="titled">Location: </span></p>
        
                                         <p><span class="titled">Accomodation: </span></p>
                                         <p><span class="titled">Telephone:  </span></p>
                                  </div>
                            </div>
                         </div>
                          <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="thumbnail">
                              <img src="../images/no-image.png" alt="...">
                                  <div class="caption">
                                        <h3><span class="price">$</span></h3>
                                       <p><span class="titled">Location: </span></p>
        
                                         <p><span class="titled">Accomodation: </span></p>
                                         <p><span class="titled">Telephone:  </span></p>
                                  </div>
                            </div>
                         </div>
                         
                         
                <!--end of top container-->
            </div>
             <div class="row">
                           <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="thumbnail">
                              <img src="../images/no-image.png" alt="...">
                                  <div class="caption">
                                        <h3><span class="price">$</span></h3>
                                       <p><span class="titled">Location: </span></p>
        
                                         <p><span class="titled">Accomodation: </span></p>
                                         <p><span class="titled">Telephone:  </span></p>
                                  </div>
                            </div>
                         </div>
                         
                         <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="thumbnail">
                              <img src="../images/no-image.png" alt="...">
                                  <div class="caption">
                                        <h3><span class="price">$</span></h3>
                                       <p><span class="titled">Location: </span></p>
        
                                         <p><span class="titled">Accomodation: </span></p>
                                         <p><span class="titled">Telephone:  </span></p>
                                  </div>
                            </div>
                         </div>
                          <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="thumbnail">
                              <img src="../images/no-image.png" alt="...">
                                  <div class="caption">
                                        <h3><span class="price">$</span></h3>
                                       <p><span class="titled">Location: </span></p>
        
                                         <p><span class="titled">Accomodation: </span></p>
                                         <p><span class="titled">Telephone:  </span></p>
                                  </div>
                            </div>
                         </div>
                         
                         
                <!--end of top container-->
            </div>
            
            
        </div>
        <?php
       $added="";
for($x=1;$x<7;$x++){
    $added=$added.'<ul class="pagination">'.'<li><a href='."https://campusflats-hevongordon.c9.io/cflats/campus-flats/RentersWeb/resources/form-3/search.php?page=".$x.'>' .$x.'</a></li>'.'</ul>';
}
$pagi_design='<nav>
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
 
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>';
$prev='<ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li></ul>';
$next='<ul class="pagination">
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li></ul>';
    
echo '<center><div class="col-sm-6 col-lg-12">'.$prev.$added.$next.'</center></div>';

$pagination=$_GET['page'];

        ?>
    </body>
    <style type="text/css">
    .thumbnail>img{
 height:200px;
 width:300px;
}
    .titled{
   font-family: 'Oswald', sans-serif;
 }
       .filter-form{
           padding:4px;
           border:1px solid #E6E6E6;
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
    </style>
</html>
<?php
?>