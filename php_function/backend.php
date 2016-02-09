<?php

$app_id=$_POST["app_id"];
$document_type=$_POST["documenttype"];
 
 function Mk_Folder($Folder){

  if(!is_readable($Folder)){

    Mk_Folder( dirname($Folder) );

    if(!is_file($Folder)) mkdir($Folder,0777);

    }

}
Mk_Folder("../Backend/User_upload/".$app_id."/".$document_type);
$dirname="../Backend/User_upload/".$app_id."/".$document_type."/";

  if (($_FILES["file1"]["error"] > 0) and ($_FILES["file2"]["error"] > 0) and ($_FILES["file3"]["error"] > 0) and ($_FILES["file4"]["error"] > 0) and ($_FILES["file5"]["error"] > 0) and ($_FILES["file6"]["error"] > 0) and ($_FILES["file7"]["error"] > 0) and ($_FILES["file8"]["error"] > 0) and ($_FILES["file9"]["error"] > 0) and ($_FILES["file10"]["error"] > 0) and ($_FILES["file12"]["error"] > 0) and ($_FILES["file11"]["error"] > 0) )   
    {
        echo "Return Code: " . $_FILES["file1"]["error"] . "<br />";
    }
  else
    {

  /*  if (file_exists($dirname . $_FILES["file1"]["name"]))
      {
      echo $_FILES["file1"]["name"] . " already exists. ";
      }
    else
      {*/ 
          $to = "guchaosean@126.com , paul@pscf.com.au";
           $subject = "Signature Upload Confirmation";

           $message = "
                   <html>
                   <head> 
                   <title>Someone has just Upload Some Document ! Document type:".$document_type." </title>
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
  
  
  
           move_uploaded_file($_FILES["file1"]["tmp_name"], $dirname.$_FILES["file1"]["name"]);
           move_uploaded_file($_FILES["file2"]["tmp_name"], $dirname.$_FILES["file2"]["name"]);
		   move_uploaded_file($_FILES["file3"]["tmp_name"], $dirname.$_FILES["file3"]["name"]);
		   move_uploaded_file($_FILES["file4"]["tmp_name"], $dirname.$_FILES["file4"]["name"]);
		   move_uploaded_file($_FILES["file5"]["tmp_name"], $dirname.$_FILES["file5"]["name"]);
		   move_uploaded_file($_FILES["file6"]["tmp_name"], $dirname.$_FILES["file6"]["name"]);
		   move_uploaded_file($_FILES["file7"]["tmp_name"], $dirname.$_FILES["file7"]["name"]);
		   move_uploaded_file($_FILES["file8"]["tmp_name"], $dirname.$_FILES["file8"]["name"]);
		   move_uploaded_file($_FILES["file9"]["tmp_name"], $dirname.$_FILES["file9"]["name"]);
		   move_uploaded_file($_FILES["file10"]["tmp_name"], $dirname.$_FILES["file10"]["name"]);
		   move_uploaded_file($_FILES["file11"]["tmp_name"], $dirname.$_FILES["file11"]["name"]);
		   move_uploaded_file($_FILES["file12"]["tmp_name"], $dirname.$_FILES["file12"]["name"]);
	       header("location: https://www.discoverloans.com.au/payslip-uploading-successfully");
		   
      //}
    } 
?>