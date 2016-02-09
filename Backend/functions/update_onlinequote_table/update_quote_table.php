<?php
function checkfor($id){
	$servername1 = "localhost";
    $username1 = "discov10_sean";
    $password1 = "19900825";
    $dbname1 = "discov10_usergenerate";
	$conn1 = new mysqli($servername1, $username1, $password1, $dbname1);
    // Check connection
    if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
} 

$sql1 = "SELECT * FROM enquire_from_websites where Entries_ID='".$id."'";
$result1 = $conn1->query($sql1);
if ($result1->num_rows > 0) {	

return false;

}
else{
	
return true;

}

}
 


$servername = "localhost";
$username = "discov10_sean";
$password = "19900825";
$dbname = "discov10_wordpress";
$dbname2 = "discov10_usergenerate";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM wp_rednao_smart_forms_entry ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
//	echo "<table align='left' border='1'><tr><th>Date</th><th>First name</th><th>Last name</th><th>Phone Number</th><th>Email</th><th>Finance Amount</th><th>Employment Status</th><th>Type of Loan</th><th>Vehicle Make</th><th>Vehicle Model</th><th>Property Owner</th><th>Credit History</th><th>Over Terms</th>";
    while($row = $result->fetch_assoc()) {
		$check=false;
		
        if ($row["form_id"]=='1'|| $row["form_id"]=='6'){  // ---->small form
                  $check=true;
                  $date= $row["date"];
				  $ip_address=$row["ip"];
			      $obj= json_decode($row["data"],true);
			      $firstname    =$obj['rnField1'][value];
				  $lastname     =$obj['rnField2'][value];
				  $phonenumber  =$obj['rnField8'][value];
				  $email        =$obj['rnField3'][value];
				  $financeamount=$obj['rnField5'][value];
				  $employmentstatus=$obj['rnField6'][value];
				  $typeofloan    =$obj['rnField7'][value];
				  $vehiclemake   ="";
				  $vehiclemodel  ="";
				  $propertyowner ="";
				  $credithistory ="";
				  $overterms     ="";				  
 
		}
		if ($row["form_id"]=='2' ){
			$check=true;
			$date= $row["date"];
			$ip_address=$row["ip"];
			$obj= json_decode($row["data"],true);
			 
			 $firstname    =$obj['rnField11'][value] ;
			 $lastname     =$obj['rnField12'][value] ;
			 $phonenumber  =$obj['rnField13'][value] ;
             $email        =$obj['rnField14'][value] ;
         
             $financeamount=$obj['rnField2'][value] ;
             $employmentstatus=$obj['rnField7'][value] ;
             $typeofloan    =$obj['rnField3'][value] ;
             $vehiclemake   =$obj['rnField4'][value] ;
			 $vehiclemodel  =$obj['rnField5'][value] ;
			 $propertyowner =$obj['rnField8'][value]  ;
			 $credithistory =$obj['rnField9'][value]  ;
			 $overterms     =$obj['rnField6'][value] ;
		
		}
		$form_id=$row["entry_id"];
		if (checkfor($form_id)&&($check)){  
		   $conn2 = new mysqli($servername, $username, $password, $dbname2);
		   if ($conn2->connect_error) {
                          die("Connection failed: " . $conn2->connect_error);
           } 
           $sql2 = "insert into enquire_from_websites(first_name, last_name, phone, email, finance_amount, loan_type, vehicle_make, over_terms, employment_status, property_owner, credit_history, Entries_ID, Date, ip_address) values('".$firstname."','".$lastname."','".$phonenumber."','".$email."','".$financeamount."','".$typeofloan."','".$vehiclemake."','".$overterms."','".$employmentstatus."','".$propertyowner."','".$credithistory."','".$form_id."','".$date."','".$ip_address."'".")";
                  if ($conn2->query($sql2) === TRUE) {
                              echo "New record created successfully";
                  } else {
                              echo "Error:"  ;
                  }
		}
		
		
    }
	  
} 

 

$conn->close();



?>