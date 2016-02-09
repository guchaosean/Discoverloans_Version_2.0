<?php
   @session_start();
   if ($_SESSION["login_ornot"]!= "yes"){  header("Location: http://www.discoverloans.com.au/Backend/sign-in.html");   };
   
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Enquires</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" type="text/css" href="stylesheets/theme.css">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">

    <script src="lib/jquery-1.7.2.min.js" type="text/javascript"></script>

    <!-- Demo page code -->

    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
  <body class=""> 
  <!--<![endif]-->
    
    <div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                    
                    <li><a href="#" class="hidden-phone visible-tablet visible-desktop" role="button">Settings</a></li>
                    <li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i> <?php   echo $_SESSION["username"]; ?>
                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="#">My Account</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" class="visible-phone" href="#">Settings</a></li>
                            <li class="divider visible-phone"></li>
                            <li><a tabindex="-1" href="functions/login_function/log_out_management.php">Logout</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <a class="brand" href="index.php"><span class="first">Discoverloans</span> <span class="second">Backend</span></a>
        </div>
    </div>
    


    
    <div class="sidebar-nav">
        <a href="#dashboard-menu" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>Dashboard</a>
        <ul id="dashboard-menu" class="nav nav-list collapse in">
            <li><a href="index.php">Home</a></li>
			<li ><a href="search_index.php">User Search</a></li>
			<li ><a href="enquire_online.php">Enquires From Online</a></li>
            <li ><a href="Application_form_online.php">Application Form</a></li>
			<li ><a href="quote_statistic.php">Quote Statistic</a></li>
            <li ><a href="more_admin_function.php">More Admin Function</a></li>
			<li ><a href="Functions_for_enquire.php">Enquire Functions</a></li>
				<li ><a href="privacy_form_download.php">Privacy Form Download</a></li>
				<li ><a href="payslip_check.php">Payslip Management</a></li>
            <li ><a href="media.html">Media</a></li>
            <li ><a href="calendar.html">Calendar</a></li>
            
        </ul>

        <a href="#accounts-menu" class="nav-header" data-toggle="collapse"><i class="icon-briefcase"></i>Account<span class="label label-info">+3</span></a>
        <ul id="accounts-menu" class="nav nav-list collapse">
            <li ><a href="sign-in.html">Sign In</a></li>
            <li ><a href="sign-up.html">Sign Up</a></li>
            <li ><a href="reset-password.html">Reset Password</a></li>
        </ul>

        <a href="#error-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-exclamation-sign"></i>Error Pages <i class="icon-chevron-up"></i></a>
        <ul id="error-menu" class="nav nav-list collapse">
            <li ><a href="403.html">403 page</a></li>
            <li ><a href="404.html">404 page</a></li>
            <li ><a href="500.html">500 page</a></li>
            <li ><a href="503.html">503 page</a></li>
        </ul>

        <a href="#legal-menu" class="nav-header" data-toggle="collapse"><i class="icon-legal"></i>Legal</a>
        <ul id="legal-menu" class="nav nav-list collapse">
            <li ><a href="privacy-policy.html">Privacy Policy</a></li>
            <li ><a href="terms-and-conditions.html">Terms and Conditions</a></li>
        </ul>

        <a href="help.html" class="nav-header" ><i class="icon-question-sign"></i>Help</a>
        <a href="faq.html" class="nav-header" ><i class="icon-comment"></i>Faq</a>
    </div>
    

    
    <div class="content">
        
        <div class="header">
            

            <h1 class="page-title">Enquires</h1>
        </div>
        
                <ul class="breadcrumb">
            <li><a href="index.php">Home</a> <span class="divider">/</span></li>
            <li class="active">Enquires</li>
        </ul>
        <p>Here are the new enquires which have not called them yet:</p>
		<?php 
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
         $sql1="select * from enquire_from_websites where View_status='No'";
         $result1 = $conn->query($sql1);
		 	echo"<script type='text/javascript'>
                 function add(value)
                {
                          document.getElementById('id_hidden').value = value;
                          document.getElementById('argform').submit();
   
                }
                </script>";
			echo "<form action='../Backend/functions/enquire_online/enquire_info_from_search.php' method='post' name='argform' id='argform' target='_blank'>
            <input type='hidden' name='id' id='id_hidden' value=''/>
                  
            <input type='submit' name='argsubmit' style='display:none'/>
            </form>";
         if ($result1->num_rows > 0) {		
		     echo "<table style='width:900px'><tr><th></th><th></th><th></th></tr>";   
             $num=0; 		 
		     while($row = $result1->fetch_assoc()) {
				$num=$num+1; 
             if ($num==1)             {echo "<tr><td><a href='javascript:add(&quot;".$row["ID"]."&quot;);'>".$row["first_name"]." ".$row["last_name"]. "</a></td>  ";  }		
	         if (($num<=2)&&($num>1)) {echo "    <td><a href='javascript:add(&quot;".$row["ID"]."&quot;);'>".$row["first_name"]." ".$row["last_name"]. "</a></td>  ";  }
		     if ($num==3)     {$num=0; echo "    <td><a href='javascript:add(&quot;".$row["ID"]."&quot;);'>".$row["first_name"]." ".$row["last_name"]. "</a></td> </tr>" ;}   
		//echo "<tr><td><a href='javascript:add(&quot;".$row["application_id"]."&quot;);'>".$row["Borrow1_familyname"]." ".$row["Borrow1_givenname"]. "</a></td> </tr>";
		//echo "<tr><td><a href='javascript:add(&quot;".$row["application_id"]."&quot;);'>".$row["Borrow1_familyname"]." ".$row["Borrow1_givenname"]. "</td><td> <input type='button' value='edit' onclick='add(&quot;".$row["application_id"]."&quot;);' /> </td></tr>";
             }
	          echo "</table>";  
	
	    }
		 
		
		
		?>
         
    </div>
    


    <script src="lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  </body>
</html>

