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
         $id=$_SESSION['user_id'];
         $lat=$_POST['lat'];
         $long=$_POST['long'];
         if($lat!==null|| $long!==null)
         {
            $sql = "INSERT INTO `Users`.`coords` (`id`, `latitude`, `longitude`) VALUES ('$id', '$lat','$long');";
            if($db->query($sql)===TRUE)
             {
             echo 1;
            }
            else{
             echo $db->error;
             }
         }
         else{
              echo -1;
         }
        
         
?>