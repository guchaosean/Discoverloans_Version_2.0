<?php 

          $app_id=$_POST["app_id"];
		  $fullname1=$_POST["fullname1"] ;
		  $inputdata1_dd=$_POST["inputdata1_dd"] ;
		  $inputdata1_mm=$_POST["inputdata1_mm"] ;
		  $inputdata1_yy=$_POST["inputdata1_yy"] ;
		  $svg1=$_POST["svg1"] ;
	      $inputdata1=$inputdata1_dd."/".$inputdata1_mm."/". $inputdata1_yy;
		  $json1=$_POST["json1"] ;
		  $json2=$_POST["json2"] ;
		  $json3=$_POST["json3"] ;
		  $json4=$_POST["json4"] ;
		  $fullname2=$_POST["fullname2"] ;
		  $inputdata2_dd=$_POST["inputdata2_dd"] ;
		  $inputdata2_mm=$_POST["inputdata2_mm"] ;
		  $inputdata2_yy=$_POST["inputdata2_yy"] ;
		  $svg2=$_POST["svg2"];
		  $inputdata2=$inputdata2_dd."/".$inputdata2_mm."/". $inputdata2_yy;
		  
		  $fullname3=$_POST["fullname3"] ;
		  $inputdata3_dd=$_POST["inputdata3_dd"] ;
		  $inputdata3_mm=$_POST["inputdata3_mm"] ;
		  $inputdata3_yy=$_POST["inputdata3_yy"] ;
		  $svg3=$_POST["svg3"] ;
		  $inputdata3=$inputdata3_dd."/".$inputdata3_mm."/". $inputdata3_yy;
		  
		  $fullname4=$_POST["fullname4"] ;
		  $inputdata4_dd=$_POST["inputdata4_dd"] ;
		  $inputdata4_mm=$_POST["inputdata4_mm"] ;
		  $inputdata4_yy=$_POST["inputdata4_yy"] ;
		  $svg4=$_POST["svg4"] ;
          $inputdata4=$inputdata4_dd."/".$inputdata4_mm."/". $inputdata4_yy;
		  
$servername = "localhost";
$username = "discov10_sean";
$password = "19900825";
 
$dbname2 = "discov10_usergenerate";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname2);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO application_signature(application_id, user1_fullname,user1_date,signature1_svg, user2_fullname,user2_date,signature2_svg, user3_fullname,user3_date,signature3_svg, user4_fullname,user4_date,signature4_svg,signature1_json,signature2_json,signature3_json,signature4_json)values('".$app_id."','".$fullname1."','".$inputdata1."','".$svg1."','".$fullname2."','".$inputdata2."','".$svg2."','".$fullname3."','".$inputdata3."','".$svg3."','".$fullname4."','".$inputdata4."','".$svg4."','".$json1."','".$json2."','".$json3."','".$json4."')";
  if ($conn->query($sql) === TRUE) {
       echo "1";
		   $to = "guchaosean@126.com , paul@pscf.com.au";
           $subject = "Signature Upload Confirmation";

           $message = "
                   <html>
                   <head> 
                   <title>Someone has just Upload the Privacy Form ! </title>
                   </head>
                   <body>
				   <div style='padding:10px;'>
				   <p>Hi Paul,</p>
                   <p>Application ID:         ".$app_id."</p>
                   <p>Customer name:          ".$fullname1."</p>
                   <p>has just Upload the Privacy Form , please download it from the BackEnd .</p>
				   <br>				   
				   <br>
				   <p>Cheers,</p>
				   <p>Chao</p>
				   </div>
				   </body>
                   </html>
            ";

            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // More headers
            $headers .= 'From: <chao.gu@discoverloans.com.au>' . "\r\n";
           

            mail($to,$subject,$message,$headers);	          			  
   }  else{
	   echo "2";
   }



$conn->close(); 
 


?>