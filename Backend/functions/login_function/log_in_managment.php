<?php 
  session_start();
  $username=$_POST["username"];
  $password=$_POST["password"];
   
  $servername = "localhost";
  $username_db = "discov10_sean";
  $password_db = "19900825";
  $dbname = "discov10_usergenerate";

// Create connection
$conn = new mysqli($servername, $username_db, $password_db, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM log_in_detail where username='".$username."' and password='".$password."'" ;
 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$_SESSION["login_ornot"] = "yes";
	$_SESSION["username"] = $username;
     
	 header("Location: http://www.discoverloans.com.au/Backend/index.php");
     
} else {
    echo "wrong username and password! ";
	$_SESSION["login_ornot"] = "no";
	
}
$conn->close();


?>