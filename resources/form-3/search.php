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
                        
                    </div>
                </div>
            </div>
            
            
        </div>
    </body>
    <style type="text/css">
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
    </style>
</html>
<?php
?>