<?php
date_default_timezone_set("Australia/Brisbane");
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
 

$hashtable=array();
if ($result->num_rows > 0) {
	     
    while($row = $result->fetch_assoc()) {
        $location=$row["location"];
		$date=$row["Date"];
		 
		$date= date("Y-m-d",strtotime("$date + 8 hour"));
        $hashtable[$date]=$hashtable[$date]+1;
		
     	
	
	}
}
$json ="[" ;
foreach($hashtable as $x => $x_value) {
    
	$json =$json."{'y':'".$x."','a':'".$x_value."'"."},"; 
}
$json =$json."]";

 
$conn->close();
?>
<html>
  <head>
     <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
     <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
     <script src="http://cdn.oesmith.co.uk/morris-0.4.1.min.js"></script>
     
	 <meta charset=utf-8 />
  </head>
  <body>
      <div id="area-example"></div>
    
   <script>
     var s=<?php echo $json; ?>;
	 
     var tst=eval(s);
	  
	 
	 new Morris.Area({
             element: 'area-example',
             data: tst,
             xkey: 'y',
             ykeys: ['a' ],
             labels: ['Number of enquires' ]
     });
	 </script>
  </body>
</html>