<?php 

   $user_id=$_POST["id"];
    
   
   $servername = "localhost";
   $username = "discov10_sean";
   $password = "19900825";
   $dbname = "discov10_usergenerate";

   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
   // Check connection
   if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
   } 
   $sql2 = "update enquire_from_websites set View_status='"."yes"."' where ID='".$user_id."'" ;
   if ($conn->query($sql2) === TRUE) {
    echo "Record updated successfully";
   } 





?>