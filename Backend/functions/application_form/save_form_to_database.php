<?php 

$application_id=$_POST["application_id"];
 
require("../DB_connection/DB_conntection.php");
$sql="select * from customer_table where application_id='".$application_id."'";
$DB=new db_operation("localhost","discov10_sean","19900825","discov10_usergenerate",$sql);
 
$DB->DB_connection();
$queryresult=$DB->result;
if ($queryresult->num_rows > 0) {
     
    while($row = $queryresult->fetch_assoc()) {
           
		  
	}
} else {
           
}

$DB->DB_disconnection();

?>