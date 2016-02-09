<?php 
$servername = "localhost";
$username = "discov10_sean";
$password = "19900825";
 
$dbname  = "discov10_usergenerate";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM enquire_from_websites";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 
    while($row = $result->fetch_assoc()) {
		
          if ($row["location"]=="") {
			  $idk=$row["ID"];
			  $ip=$row["ip_address"];
			  $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}"));
			  $location=$details->city;
			  $sql2="update enquire_from_websites set location='".$location."' where ID='".$idk."'";
			  if ($conn->query($sql2) === TRUE) {
                          
              } else {
                          
              }

			  
		  }		
		
		
	}
}
 echo "Finish Analyse";
$conn->close();


?>