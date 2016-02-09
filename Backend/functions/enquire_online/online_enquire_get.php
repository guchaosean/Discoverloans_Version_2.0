<?php
function print_enquire(){
$servername = "localhost";
$username = "discov10_sean";
$password = "19900825";
$dbname = "discov10_wordpress";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM wp_rednao_smart_forms_entry order by date DESC LIMIT 10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo "<table align='left' border='1'><tr><th>Date</th><th>First name</th><th>Last name</th><th>Phone Number</th><th>Email</th><th>Finance Amount</th><th>Employment Status</th><th>Type of Loan</th><th>Vehicle Make</th><th>Vehicle Model</th><th>Property Owner</th><th>Credit History</th><th>Over Terms</th>";
    while($row = $result->fetch_assoc()) {
		
        if ($row["form_id"]=='1'|| $row["form_id"]=='6'){  // ---->small form
			$date= $row["date"];
			$obj= json_decode($row["data"],true);
			echo "<tr><td>".$date ."</td>";
			echo "    <td>".$obj['rnField1'][value]."</td>";
			echo     "<td>".$obj['rnField2'][value]."</td>";
			echo     "<td>".$obj['rnField8'][value]."</td>";
            echo     "<td>".$obj['rnField3'][value]."</td>";
            //echo     "<td>".$obj['rnField4'][value]."</td>";
            echo     "<td>".$obj['rnField5'][value]."</td>";
            echo     "<td>".$obj['rnField6'][value]."</td>"; 
            echo     "<td>".$obj['rnField7'][value]."</td>";
            echo     "<td>"." " ."</td>"; 
			echo     "<td>"." " ."</td>"; 
			echo     "<td>"." " ."</td>"; 
			echo     "<td>"." " ."</td>"; 
			echo     "<td>"." " ."</td></tr>"; 
			
           
		}
		if ($row["form_id"]=='2' ){
			$date= $row["date"];
			$obj= json_decode($row["data"],true);
			echo "<tr><td>".$date ."</td>";
			echo "    <td>".$obj['rnField11'][value]."</td>";
			echo     "<td>".$obj['rnField12'][value]."</td>";
			echo     "<td>".$obj['rnField13'][value]."</td>";
            echo     "<td>".$obj['rnField14'][value]."</td>";
          
            echo     "<td>".$obj['rnField2'][value]."</td>";
            echo     "<td>".$obj['rnField7'][value]."</td>"; 
            echo     "<td>".$obj['rnField3'][value]."</td>";
            echo     "<td>".$obj['rnField4'][value]."</td>"; 
			echo     "<td>".$obj['rnField5'][value]."</td>"; 
			echo     "<td>".$obj['rnField8'][value]."</td>"; 
			echo     "<td>".$obj['rnField9'][value]."</td>"; 
			echo     "<td>".$obj['rnField6'][value]."</td></tr>"; 
			
			
		}
		
    }
	 echo "</tr></table>";
} else {
    echo "0 results";
}

 

$conn->close();


}

?>