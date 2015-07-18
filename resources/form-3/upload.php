<?php
  session_start();


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
         $image=$_POST['upload'];
         $id=$_SESSION['user_id'];
         $location=$_POST['location'];
           $price=$_POST['price'];
             $single_shared=$_POST['single-shared'];
               $sep_all=$_POST['sep-all'];
               $telephone=$_POST['telephone'];
         $sql = "INSERT INTO `Users`.`images` (`id`, `image`) VALUES ('$id', '$image');";
         $flatsql = "INSERT INTO `Users`.`flatinfo` (`location`, `price`, `single_shared`, `sep_all`, `ID`,`telephone`) VALUES ('$location', '$price', '$single_shared', '$sep_all', '$id','$telephone');";
        if($db->query($sql)===TRUE && $db->query($flatsql)===TRUE ){
          echo $location;
          
        }
        else{
          echo "insert failed";
        }
       
 
?>   