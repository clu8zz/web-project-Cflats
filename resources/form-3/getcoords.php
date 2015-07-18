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
         
        $sql = "SELECT latitude,longitude FROM `coords` WHERE 1 LIMIT 0, 30 ";
        $query=$db->query($sql);
        $count=0;
        $latitude=[];
        $longitude=[];
        $coordsContainer=[];
       while($row=mysqli_fetch_row($query))
       {
           $latitude[$count]=$row[0];
           $longitude[$count]=$row[1];
           $count++;
       }
       $coordsContainer[0]=$latitude;
       $coordsContainer[1]=$longitude;
       header('Content-Type: application/json');
        echo json_encode($coordsContainer);
       


?>