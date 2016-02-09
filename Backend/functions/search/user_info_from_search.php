<?php
@session_start();
   if ($_SESSION["login_ornot"]!= "yes"){  header("Location: http://www.discoverloans.com.au/Backend/sign-in.html");   };
   
?>
<!DOCTYPE html>

<html lang="en">
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
   $sql2 = "SELECT * FROM customer_table where application_id='".$user_id."'" ;
   $result2 = $conn->query($sql2);
    if ($result2->num_rows > 0) {
		
		while($row = $result2->fetch_assoc()) {
			$application_id=$row["application_id"];
            $titlename=$row["Borrow1_familyname"];
			$custom_name=$row["Borrow1_title"]." ".$row["Borrow1_familyname"]." ".$row["Borrow1_givenname"];
			$lience=$row["Borrow1_licenceno"];
			$DOB=$row["Borrow1_bir_date"]."/".$row["Borrow1_bir_month"]."/".$row["Borrow1_bir_year"]."(d/m/y)";
			$age=$row["Borrow1_age"];
			$current_address=$row["street_adress"].",".$row["postcode_1_1"].$row["postcode_1_2"].$row["postcode_1_3"].$row["postcode_1_4"];
			$phone_number=$row["borrow1_mobile"];
			$email=$row["Email"];
			
			$make=$row["make"] ;
            $model=$row["model"]; 
			$year=$row["year"] ;
			$accessories=$row["accessories"]; 									  
			$dealer=$row["dealer"] ;
			$purchase_price=$row["purchase_price"]; 
			$less_cash_deposit=$row["less_cash_deposit"]; 
			$less_trade_in=$row["less_trade_in"] ;
			$sub_total_dealer=$row["sub_total_dealer"]; 
			$comprehensive_ins=$row["comprehensive_ins"]; 
			$gap_insurance=$row["gap_insurance"] ;
			$brokerage=$row["brokerage"] ;
			$loan_protection=$row["loan_protection"]; 
			$warranty=$row["warranty"] ;
			$amount=$row["amount"] ;
			$payout=$row["payout"] ;
			$equity=$row["equity"] ;
			$term_requested=$row["term_requested"]; 
			$rate_requested=$row["rate_requested"] ;
			$payment_requested=$row["payment_requested"]; 
			
			$company1=$row["company1"]  ;
			$type_of_loan1=$row["type_of_loan1"] ;
			$details1= $row["details1"] ;
			$repayment1= $row["repayment1"]  ;								  
			$balance1= $row["balance1"]  ;
			$limit1 =$row["limit1"]  ;
            $company2= $row["company2"]  ;
	        $type_of_loan2= $row["type_of_loan2"] ;
			$details2 =$row["details2"] ;
			$repayment2= $row["repayment2"] ;									 
			$balance2 =$row["balance2"] ;
			$limit2 =$row["limit2"] ;
            $company3= $row["company3"]  ;
			$type_of_loan3 =$row["type_of_loan3"] ;
			$details3 =$row["details3"] ;
			$repayment3= $row["repayment3"]  ;									 
			$balance3 =$row["balance3"] ;
			$limit3 =$row["limit3"] ;
									 
			$company4 =$row["company4"] ;
			$type_of_loan4= $row["type_of_loan4"];
			$details4 =$row["details4"] ;
			$repayment4= $row["repayment4"] ;									  
			$balance4 =$row["balance4"] ;
			$limit4 =$row["limit4"] ;
									 
			$bank_details =$row["bank_details"] ;
			$bank_phone =$row["bank_phone"] ;
			
			$b1_occ=$row["borrower1_occupa"];
			$b1_emplo=$row["borrower1_employername"]; 
			$b1_year=$row["borrower1_year"];
			$b1_month=$row["borrower1_month"]; 
			$b1_gross=$row["borrower1_gross"]; 
			$b1_net=$row["borrower1_net"];
			$b1_businessph=$row["borrower1_business_phone1"]; 
			
			$first_mortgage1 = $row["first_mortgage1"] ;
			$first_mortgage2=$row["first_mortgage2"] ; 
			$second_mortgage1=$row["second_mortgage1"] ; 			
			$second_mortgage2=$row["second_mortgage2"] ; 
			$hire_purchases1=$row["hire_purchases1"] ; 
			$hire_purchases2=$row["hire_purchases2"] ; 
			$personal_loan1=$row["personal_loan1"] ; 
			$personal_loan2=$row["personal_loan2"] ; 
			$bank_overdraft1=$row["bank_overdraft1"] ; 
			$bank_overdraft2=$row["bank_overdraft2"] ; 
			$other_liab11= $row["other_liab11"] ; 
			$other_liab12= $row["other_liab12"] ; 
			$other_liab21= $row["other_liab21"] ; 
			$other_liab22= $row["other_liab22"]  ;
			$other_liab31=$row["other_liab31"] ; 
			$other_liab32= $row["other_liab32"] ; 
			$total_liab=$row["total_liab"] ; 
			
			
			                $house_ass1   =    $row["house_ass1"]; 
							$house_ass2		= $row["house_ass2"];
							$content_ass1	=	 $row["content_ass1"]; 
							$content_ass2	=	 $row["content_ass2"]; 
							$car_ass11		= $row["car_ass11"]; 
							$car_ass12		= $row["car_ass12"]; 
							$car_ass21		= $row["car_ass21"];
							$car_ass22		= $row["car_ass22"]; 
							$bank_account_ass1		= $row["bank_account_ass1"]; 
							$bank_account_ass2	=	 $row["bank_account_ass2"]; 
							$share_ass1		= $row["share_ass1"]; 
							$share_ass2		= $row["share_ass2"] ; 
							$other_ass11		= $row["other_ass11"]; 
							$other_ass12		= $row["other_ass12"]; 
							$other_ass21		= $row["other_ass21"]; 
							$other_ass22		= $row["other_ass22"]; 
							$total_ass		= $row["total_ass"];
			
        }
		
	}
	$conn->close();
	 
?>
  <head>
    <meta charset="utf-8">
    <title>User</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="../../lib/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" type="text/css" href="../../stylesheets/theme.css">
    <link rel="stylesheet" href="../../lib/font-awesome/css/font-awesome.css">

    <script src="../../lib/jquery-1.7.2.min.js" type="text/javascript"></script>

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
  <body class="" > 
  <!--<![endif]-->
    
    <div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                    
                    <li><a href="#" class="hidden-phone visible-tablet visible-desktop" role="button">Settings</a></li>
                    <li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i>  <?php   echo $_SESSION["username"]; ?>
                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="#">My Account</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" class="visible-phone" href="#">Settings</a></li>
                            <li class="divider visible-phone"></li>
                            <li><a tabindex="-1" href="../login_function/log_out_management.php">Logout</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <a class="brand" href="index.php"><span class="first">Discoverloans</span> <span class="second">Backend</span></a>
        </div>
    </div>
    


    
    <div class="sidebar-nav">
        <a href="#dashboard-menu" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>Dashboard</a>
        <ul id="dashboard-menu" class="nav nav-list collapse in">
            <li><a href="../../index.php">Home</a></li>
			<li ><a href="../../search_index.php">User Search</a></li>
			<li ><a href="../../enquire_online.php">Enquires From Online</a></li>
			<li ><a href="../../Application_form_online.php">Application Form</a></li>
            <li ><a href="../../quote_statistic.php">Quote Statistic</a></li>
			<li ><a href="../../more_admin_function.php">More Admin Function</a></li>
            <li ><a href="../../Functions_for_enquire.php">Enquire Functions</a></li>
				<li ><a href="../../privacy_form_download.php">Privacy Form Download</a></li>
				<li ><a href="../../payslip_check.php">Payslip Management</a></li>
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
    

    
    <div class="content" style="height: 1500px;">
        
        <div class="header">
            

            <h1 class="page-title"><?php echo $titlename; ?></h1>
        </div>
        
                <ul class="breadcrumb">
            <li><a href="../../index.php">Home</a> <span class="divider">/</span></li>
			<li><a href="../../index.php">Dashboard</a> <span class="divider">/</span></li>
			<li><a href="../../search_index.php">User Search</a> <span class="divider">/</span></li>
            <li class="active"><?php echo $titlename; ?></li>
        </ul>
        <div class="block span6">
        <a href="#tablewidget" class="block-heading" data-toggle="collapse">User Basic Information<span class="label label-warning"> </span></a>
        <div id="tablewidget" class="block-body collapse in">
		     <p>Application ID: <?php echo $application_id; ?></p>
             <p>Name : <?php echo $custom_name ;?></p>
             <p>Date of Birth: <?php echo $DOB ;?></p>
			 <p>Age:<?php echo $age ;?></p>
			 <p>Current Address:<?php echo $current_address ;?></p>
			 <p>Contact Number:<?php echo $phone_number ;?></p>
			 <p>Email Address:<?php echo $email ;?></p>
        </div>
    </div>
	<div class="clear"></div> 
    <div class="block span6">
        <a href="#tablewidget2" class="block-heading" data-toggle="collapse">Vechile Information<span class="label label-warning"> </span></a>
        <div id="tablewidget2" class="block-body collapse in">
             <p>Make : <?php echo $make ;?></p>
             <p>Model: <?php echo $model ;?></p>
			 <p>Year:<?php echo $year ;?></p>
			 <p>Accessories:<?php echo $accessories ;?></p>
			 <p>Dealer:<?php echo $dealer ;?></p>
			 <p>Purchase Price:<?php echo $purchase_price ;?></p>
			 <p>Less Cash Deposit : <?php echo $less_cash_deposit ;?></p>
             <p>Less Trade In: <?php echo $less_trade_in ;?></p>
			 <p>Sub Total Dealer:<?php echo $sub_total_dealer ;?></p>
			 <p>Comprehensive Ins:<?php echo $comprehensive_ins ;?></p>
			 <p>Gap Insurance:<?php echo $gap_insurance ;?></p>
			 <p>Brokerage:<?php echo $brokerage ;?></p>
			 <p>Loan Protection:<?php echo $loan_protection ;?></p>
			 <p>Warranty:<?php echo $warranty ;?></p>
			 <p>Amount : <?php echo $amount ;?></p>
             <p>Payout: <?php echo $payout ;?></p>
			 <p>Equity:<?php echo $equity ;?></p>
			 <p>Term Requested:<?php echo $term_requested ;?></p>
			 <p>Rate Requested:<?php echo $rate_requested ;?></p>
			 <p>Payment Requested:<?php echo $payment_requested ;?></p>
			 
			 
        </div>
    </div>
    <div class="clear"></div> 
    <div class="block span6" style="width:900px;">
        <a href="#tablewidget4" class="block-heading" data-toggle="collapse">Employment Situation<span class="label label-warning"> </span></a>
        <div id="tablewidget4" class="block-body collapse in">
             <p>Occupation : <?php echo $b1_occ ;?></p>
             <p>Employee Name and Address: <?php echo $b1_emplo ;?></p>
			 <p>Year:<?php echo $b1_year ;?></p>
			 <p>Month:<?php echo $b1_month ;?></p>
			 <p>Gross:<?php echo $b1_gross ;?></p>
			 <p>Net:<?php echo $b1_net ;?></p>
			 <p>Business Phone:<?php echo $b1_businessph ;?></p>
        </div>
    </div>
    <div class="clear"></div>
    
	<div class="block span6" style="width:900px;">
        <a href="#tablewidget3" class="block-heading" data-toggle="collapse">Financial Detail<span class="label label-warning"> </span></a>
        <div id="tablewidget3" class="block-body collapse in">
              <table align="left" border="1" style="width:850px; " >
			  <tr><th>Company</th><th>Type Of Loan</th><TH>Details</TH><TH>Repayment</TH><TH>Balance</TH><TH>Limit</TH></tr>
			  <tr><td><?php echo $company1;?></td><td><?php echo $type_of_loan1;?></td><td><?php echo $details1;?></td><td><?php echo $repayment1;?></td><td><?php echo $balance1;?></td><td><?php echo $limit1;?></td></tr>
              <tr><td><?php echo $company2;?></td><td><?php echo $type_of_loan2;?></td><td><?php echo $details2;?></td><td><?php echo $repayment2;?></td><td><?php echo $balance2;?></td><td><?php echo $limit2;?></td></tr>
			  <tr><td><?php echo $company3;?></td><td><?php echo $type_of_loan3;?></td><td><?php echo $details3;?></td><td><?php echo $repayment3;?></td><td><?php echo $balance3;?></td><td><?php echo $limit3;?></td></tr>
			  <tr><td><?php echo $company4;?></td><td><?php echo $type_of_loan4;?></td><td><?php echo $details4;?></td><td><?php echo $repayment4;?></td><td><?php echo $balance4;?></td><td><?php echo $limit4;?></td></tr>
			  </table>
        </div>
    </div>
    <div class="clear"></div> 	
	
	<div class="block span6" style="width:900px;">
        <a href="#tablewidget5" class="block-heading" data-toggle="collapse">Liabilities<span class="label label-warning"> </span></a>
        <div id="tablewidget5" class="block-body collapse in">
              <table align="left" border="1" style="width:850px; " >
			  <tr><th>Liabilities Types</th><th> </th><TH> </TH> </tr>
			  <tr><td>First Mortgage</td> <td><?php echo $first_mortgage1;?></td><td><?php echo $first_mortgage2;?></td> </tr>
              <tr><td>Second Mortgage</td><td><?php echo $second_mortgage1;?></td><td><?php echo $second_mortgage2;?></td> </tr>
			  <tr><td>Hire Purchases</td> <td><?php echo $hire_purchases1;?></td><td><?php echo $hire_purchases2;?></td> </tr>
			  <tr><td>Personal Loans</td> <td><?php echo $personal_loan1;?></td><td><?php echo $personal_loan2;?></td> </tr>
			  <tr><td>Bank Overdraft</td> <td><?php echo $bank_overdraft1;?></td><td><?php echo $bank_overdraft2;?></td> </tr>
			  <tr><td>Other1</td>         <td><?php echo $other_liab11;?></td><td><?php echo $other_liab12;?></td> </tr>
			  <tr><td>Other2</td>         <td><?php echo $other_liab21;?></td><td><?php echo $other_liab22;?></td> </tr>
			  <tr><td>Other3</td>         <td><?php echo $other_liab31;?></td><td><?php echo $other_liab32;?></td> </tr>
			  <tr><td>Total</td>          <td>                             </td><td><?php echo $total_liab;?></td> </tr>
			   
			  </table>
        </div>
    </div>
    <div class="clear"></div> 
	
	<div class="block span6" style="width:900px;">
        <a href="#tablewidget6" class="block-heading" data-toggle="collapse">Assets<span class="label label-warning"> </span></a>
        <div id="tablewidget6" class="block-body collapse in">
              <table align="left" border="1" style="width:850px; " >
			  <tr><th>Assets Types</th><th> </th><TH> </TH> </tr>
			  <tr><td>House</td> <td><?php echo $house_ass1;?></td><td><?php echo $house_ass2;?></td> </tr>
              <tr><td>Contents</td><td><?php echo $content_ass1;?></td><td><?php echo $content_ass2;?></td> </tr>
			  <tr><td>Car1</td> <td><?php echo $car_ass11;?></td><td><?php echo $car_ass12;?></td> </tr>
			  <tr><td>Car2</td> <td><?php echo $car_ass21;?></td><td><?php echo $car_ass22;?></td> </tr>
			  <tr><td>Bank Accounts</td> <td><?php echo $bank_account_ass1;?></td><td><?php echo $bank_account_ass2;?></td> </tr>
			  <tr><td>Shares</td>         <td><?php echo $share_ass1;?></td><td><?php echo $share_ass2;?></td> </tr>
			  <tr><td>Other1</td>         <td><?php echo $other_ass11;?></td><td><?php echo $other_ass12;?></td> </tr>
			  <tr><td>Other2</td>         <td><?php echo $other_ass21;?></td><td><?php echo $other_ass22;?></td> </tr>
			  <tr><td>Total</td>          <td>                             </td><td><?php echo $total_ass;?></td> </tr>
			   
			  </table>
        </div>
    </div>
    <div class="clear"></div> 
	
	
    </div>
    
  

    <script src="../../lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  </body>
</html>


