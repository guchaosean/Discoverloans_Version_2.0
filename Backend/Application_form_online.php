<?php
   @session_start();
   if ($_SESSION["login_ornot"]!= "yes"){  header("Location: http://www.discoverloans.com.au/Backend/sign-in.html");   };
   
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Application Form</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
	<link href="stylesheets/css_application/style.css" rel='stylesheet' type='text/css' />
    
	<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" type="text/css" href="stylesheets/theme.css">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">

    <script src="lib/jquery-1.7.2.min.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript"> 
             $(document).ready(function(){ 
			        
                     
					$('#mySelect2').change(function(){ 
					  var p2=$(this).val(); 
					    if (p2=='one'){  $(appier2_addon).html( '' );  }
					    if (p2=='two'){  
						$innerHtml3=' <hr />   <div style="width:25%; float:left;"><span>Title </span><input type="text" name="title_people2" id="title_people2"> </div><div style="width:25%; float:left;"><span>Family Name </span><input type="text" name="Family_Name2" id="Family_Name2"> </div><div style="width:25%; float:left;"><span>Given Name </span><input type="text" name="given_name2" id="given_name2"> </div><div style="width:25%; float:left;"><span>Licence No. </span><input type="text" name="licence_no2" id="licence_no2"> </div><div style="width:25%; float:left;"><span>Expires </span><input type="text" name="licence_expire2_date" id="licence_expire2_date" style="width:25%; float:left; "><input type="text" name="licence_expire2_month" id="licence_expire2_month" style="width:25%; float:left; "> <input type="text" name="licence_expire2_year" id="licence_expire2_year" style="width:25%; float:left; ">   </div><div style="width:25%; float:left;"><span>Date of Birth</span><input type="text" name="date_of_birth2_date" id="date_of_birth2_date" style="width:25%; float:left; "> <input type="text" name="date_of_birth2_month" id="date_of_birth2_month" style="width:25%; float:left; "><input type="text" name="date_of_birth2_year" id="date_of_birth2_year" style="width:25%; float:left; ">   </div><div style="width:25%; float:left;"><span>Age</span><input type="text" name="age2" id="age2"> </div>';
						
						$(appier2_addon).html( $innerHtml3 );  
						     

						}
					
					})
					$('#generate_ID').click(function(){ 
					         
						   function only(ele,arr){ 
 if(arr.length==0){ 
  return true; 
 } 
 for(var j=0;j<arr.length;j++){ 
  if(ele==arr[j]){ 
   return false; 
  }else{ 
   return true; 
  } 
 } 
} 
  
var arr=["0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
  
(function(){ 
 var randNum=null; 
 var old=[]; 
 var str=""; 
 function done(){ 
  randNum=Math.floor(Math.random()*36); 
  if(only(randNum,old)){ 
   str=str+arr[randNum]; 
   old.push(randNum); 
  } 
  else{ 
   done(); 
  } 
 } 
 for(var index=0;index<10;index++){ 
  done(); 
 } 

 $(':input','#form1')  
 .not(':button, :submit, :reset, :hidden')  
 .val('')  
 .removeAttr('checked')  
 .removeAttr('selected');
  $('#application_id').val(str);
})(arr)
					})
					
   
					
					
					 
            }) 
function senddatatoform(application_id){
	
	   var url = "functions/application_form/get_data_to_form.php"; // the script where you handle the form input.
      
	    
       $.ajax({
           type: "POST",
           url: url,
           data:'application_id='+ application_id  , // serializes the form's elements.
		    
           success: function(data)
           {
               //alert(data);
			   $obj= JSON.parse(data);
			 
			   $('#year').val($obj.appli.year);
	           $('#make').val($obj.appli.make);
	           $('#model').val($obj.appli.model);
	           $('#accessories').val($obj.appli.accessories);
	           $('#dealer').val($obj.appli.dealer);
	           $('#purchase_price').val($obj.appli.purchase_price);
	           $('#less_cash_deposit').val($obj.appli.less_cash_deposit);
	           $('#less_trade_in').val($obj.appli.less_trade_in);
	           $('#sub_to_dealer').val($obj.appli.sub_to_dealer);
	           $('#comprehensive_ins').val($obj.appli.comprehensive_ins);
	           $('#gap_insurance').val($obj.appli.gap_insurance);
	           $('#brokerage').val($obj.appli.brokerage);
	           $('#loan_proection').val($obj.appli.loan_proection);
	           $('#warrantly').val($obj.appli.warrantly);
			   $('#amount').val($obj.appli.amount);
	           $('#payout').val($obj.appli.payout);
	           $('#equity').val($obj.appli.equity);
			   $('#term_request').val($obj.appli.term_request);
               $('#rate_requested').val($obj.appli.rate_requested);
               $('#payment_requested').val($obj.appli.payment_requested);
			   $('#title_people1').val($obj.appli.Borrow1_title);
               $('#Family_Name1').val($obj.appli.Borrow1_familyname	);
               $('#given_name1').val($obj.appli.Borrow1_givenname);
               $('#licence_no1').val($obj.appli.Borrow1_licenceno);
               $('#licence_expire1_date').val($obj.appli.Borrow1_expir_date);
               $('#licence_expire1_month').val($obj.appli.Borrow1_expir_month);
               $('#licence_expire1_year').val($obj.appli.Borrow1_expir_year);
               $('#date_of_birth1_date').val($obj.appli.Borrow1_bir_date);
               $('#date_of_birth1_month').val($obj.appli.Borrow1_bir_month);
               $('#date_of_birth1_year').val($obj.appli.Borrow1_bir_year);
               $('#age1').val($obj.appli.Borrow1_age);
			   
               $('#title_people2').val($obj.appli.Borrow2_title);
               $('#Family_Name2').val($obj.appli.Borrow2_familyname);
               $('#given_name2').val($obj.appli.Borrow2_givenname);
               $('#licence_no2').val($obj.appli.Borrow2_licenceno);
               $('#licence_expire2_date').val($obj.appli.Borrow2_expir_date);
               $('#licence_expire2_month').val($obj.appli.Borrow2_expir_month);
               $('#licence_expire2_year').val($obj.appli.Borrow2_expir_year);
               $('#date_of_birth2_date').val($obj.appli.Borrow2_bir_date);
               $('#date_of_birth2_month').val($obj.appli.Borrow2_bir_month);
               $('#date_of_birth2_year').val($obj.appli.Borrow2_bir_year);
               $('#age2').val($obj.appli.Borrow2_age);
			   
			   $('#street_address1').val($obj.appli.street_adress);
               $('#postcode1').val($obj.appli.postcode_1_1);
               $('#postcode2').val($obj.appli.postcode_1_2);
               $('#postcode3').val($obj.appli.postcode_1_3);
               $('#postcode4').val($obj.appli.postcode_1_4);
               $('#yrs1').val($obj.appli.street1_year);
               $('#mths1').val($obj.appli.street1_month);
               $('#home_tele1').val($obj.appli.home_telephone);

               $('#previous_address1').val($obj.appli.pre_address);
               $('#postcode_p1').val($obj.appli.postcode_2_1);
               $('#postcode_p2').val($obj.appli.postcode_2_2);
               $('#postcode_p3').val($obj.appli.postcode_2_3);
               $('#postcode_p4').val($obj.appli.postcode_2_4);
               $('#yrs_p1').val($obj.appli.streetp1_year);
               $('#mths_p1').val($obj.appli.streetp1_month);
               $('#borrower1_M').val($obj.appli.borrow1_mobile);

               $('#second_previous_address1').val($obj.appli.pre_address2);
               $('#postcode_sp1').val($obj.appli.postcode_3_1);
               $('#postcode_sp2').val($obj.appli.postcode_3_2);
               $('#postcode_sp3').val($obj.appli.postcode_3_3);
               $('#postcode_sp4').val($obj.appli.postcode_3_4);
               $('#yrs_sp1').val($obj.appli.streetp2_year);
               $('#mths_sp1').val($obj.appli.streetp2_month);
               $('#borrower2_M').val($obj.appli.borrow2_mobile);
               $('#email_address').val($obj.appli.Email);
			   
			   $('#borrower_occupation1').val($obj.appli.borrower1_occupa);
               $('#employer_name_address1').val($obj.appli.borrower1_employername);
               $('#yrs_b1').val($obj.appli.borrower1_year);
               $('#mth_b1').val($obj.appli.borrower1_month);
               $('#gross_b1').val($obj.appli.borrower1_gross);
               $('#net_b1').val($obj.appli.borrower1_net);
               $('#business_phone_b1').val($obj.appli.borrower1_business_phone1);

               $('#bwr1__pre_occupation').val($obj.appli.borrower1_prev_occupa);
               $('#pre_employer_name_address1').val($obj.appli.borrower1_prev_employername);
               $('#yrs_bp1').val($obj.appli.borrower1_prev_year);
               $('#mth_bp1').val($obj.appli.borrower1_prev_month);  
               $('#net_bp1').val($obj.appli.borrower1_prev_net);
               $('#business_phone_bp1').val($obj.appli.borrower1_business_phone2);

               $('#borrower_occupation2').val($obj.appli.borrower2_occupa);
               $('#employer_name_address2').val($obj.appli.borrower2_employername);
               $('#yrs_b2').val($obj.appli.borrower2_year);
               $('#mth_b2').val($obj.appli.borrower2_month);
               $('#gross_b2').val($obj.appli.borrower2_gross);
               $('#net_b2').val($obj.appli.borrower2_net);
               $('#business_phone_b2').val($obj.appli.borrower2_business_phone1);

               $('#bwr2__pre_occupation').val($obj.appli.borrower2_prev_occupa);
               $('#pre_employer_name_address2').val($obj.appli.borrower2_prev_employername);
               $('#yrs_bp2').val($obj.appli.borrower2_prev_year);
               $('#mth_bp2').val($obj.appli.borrower2_prev_month);     
               $('#net_bp2').val($obj.appli.borrower2_prev_net);
               $('#business_phone_bp2').val($obj.appli.borrower2_business_phone2);
			   
			   $('#company1').val($obj.appli.company1);
               $('#type_of_loan1').val($obj.appli.type_of_loan1);
               $('#detail1').val($obj.appli.details1);
               $('#repayment1').val($obj.appli.repayment1);               
               $('#balance1').val($obj.appli.balance1);
               $('#limit1').val($obj.appli.limit1);

               $('#company2').val($obj.appli.company2);
               $('#type_of_loan2').val($obj.appli.type_of_loan2);
               $('#detail2').val($obj.appli.details2);
               $('#repayment2').val($obj.appli.repayment2);              
               $('#balance2').val($obj.appli.balance2);
               $('#limit2').val($obj.appli.limit2);

               $('#company3').val($obj.appli.company3);
               $('#type_of_loan3').val($obj.appli.type_of_loan3);
               $('#detail3').val($obj.appli.details3);
               $('#repayment3').val($obj.appli.repayment3);               
               $('#balance3').val($obj.appli.balance3);
               $('#limit3').val($obj.appli.limit3);

               $('#company4').val($obj.appli.company4);
               $('#type_of_loan4').val($obj.appli.type_of_loan4);
               $('#detail4').val($obj.appli.details4);
               $('#repayment4').val($obj.appli.repayment4);  
               $('#balance4').val($obj.appli.balance4);
               $('#limit4').val($obj.appli.limit4);
			   
			   $('#bank_details').val($obj.appli.bank_details);
               $('#bank_details_phone').val($obj.appli.bank_phone);
               $('#nearest_relative1').val($obj.appli.nearst_rela1);
               $('#relative_phone1').val($obj.appli.rela1_phone);
               $('#nearest_relative2').val($obj.appli.nearst_rela2);
               $('#relative_phone2').val($obj.appli.rela2_phone);
			   
			   $('#first_mortgage_p1').val($obj.appli.first_mortgage1);
               $('#first_mortgage_p2').val($obj.appli.first_mortgage2);
               $('#second_mortgage_p1').val($obj.appli.second_mortgage1);
               $('#second_mortgage_p2').val($obj.appli.second_mortgage2);
               $('#hire_purchases_p1').val($obj.appli.hire_purchases1);
               $('#hire_purchases_p2').val($obj.appli.hire_purchases2);
               $('#person_loans_p1').val($obj.appli.personal_loan1);
               $('#person_loans_p2').val($obj.appli.personal_loan2);
               $('#bank_overdraft_p1').val($obj.appli.bank_overdraft1);
               $('#bank_overdraft_p2').val($obj.appli.bank_overdraft2);
               $('#total_liabilities__p1').val($obj.appli.total_liab);

               $('#house_asset_p1').val($obj.appli.house_ass1);
               $('#house_asset_p2').val($obj.appli.house_ass2);
               $('#contents_asset_p1').val($obj.appli.content_ass1);
               $('#contents_asset_p2').val($obj.appli.content_ass2);
               $('#car1_assets_p1').val($obj.appli.car_ass11);
               $('#car1_assets_p2').val($obj.appli.car_ass12);
               $('#car2_assets_p1').val($obj.appli.car_ass21);
               $('#car2_assets_p2').val($obj.appli.car_ass22);
               $('#bankaccounts_assets_p1').val($obj.appli.bank_account_ass1);
               $('#bankaccounts_assets_p2').val($obj.appli.bank_account_ass2);
               $('#shares_assets_p1').val($obj.appli.other_ass11);
               $('#shares_assets_p2').val($obj.appli.other_ass12);
               $('#others_assets_p1').val($obj.appli.other_ass21);
               $('#others_assets_p2').val($obj.appli.other_ass22);
               $('#total_assets_p1').val($obj.appli.total_ass);
 
               $('#salary_gross').val($obj.appli.salary_gross);
               $('#salary_net').val($obj.appli.salary_net);
			   
           }
         });
	
	} 
</script>  
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
            

            <h1 class="page-title">Application Form</h1>
        </div>
        
                <ul class="breadcrumb">
            <li><a href="index.php">Home</a> <span class="divider">/</span></li>
            <li class="active">Application Form</li>
        </ul>
    <div class="content login-box" style="margin-left: 0px;">
			<div class="login-main">
				<div class="wrap">
					<h1>Paleso Application Form</h1>
					<div class="register-grids">
						<form action="functions/application_form/save_form_to_database.php" method="post" id="form1"> 
						        <div class="register-top-grid" >
								<h3>Application ID</h3>
								        <div style="width:13%; float:left;">
											 
											<input type="button" name="generate_ID" value="Generate ID" id="generate_ID">											
										</div>
										<div style="width:40%; float:left;">
											<span>Application ID</span>
											<input type="text" name="application_id" id="application_id"> 
										</div>
								        <div style="width:13%; float:left;">
											 
											<input type="button" name="load_id" value="Load ID" id="load_id" onclick="senddatatoform($('#application_id').val())">											
										</div>
								
								
								</div>
								<div class="clear"> </div>		
								<div class="register-top-grid" >
								        <h3>Trade Detail</h3>
								         
										<div id="car_TTT" style="width:100%; float:left;" > <!--Change the content based on selection-->
										 
										 
										<div style="width:23%; float:left;">
											<span>Year</span>
											<input type="text" name="year" id="year">											
										</div>
										<div style="width:23%; float:left;">
											<span>Make</span>
											<input type="text" name="make" id="make"> 
										</div>
										<div style="width:23%; float:left;">
											<span>Model</span>
											<input type="text" name="model" id="model">											
										</div >
										<div style="width:23%; float:left;">
											<span>Accessories</span>
											<input type="text" name="accessories"  id="accessories">											
										</div>
										
									    <div style="width:90%; float:left;">
											<span>Dealer</span>
											<input type="text" name="dealer"  id="dealer">											
										</div>
										 <br><br><br><br><br><br><br><br>
										  <hr/>
										  <div style="width:23%; float:left;">
										     <span>Amount</span><input type="text" name="amount" id="amount">											
										  </div >
										  <div style="width:23%; float:left;">
										          <span>Payout</span><input type="text" name="payout" id="payout">		
									      </div >
										  <div style="width:23%; float:left;">
										             <span>Equity</span><input type="text" name="equity" id="equity">
										  </div >
										   <br><br><br><br><br> 
										  <hr/>
										<div style="width:20%; float:left;">
											<span>Purchase Price</span>
											<input type="text" name="purchase_price"  id="purchase_price">											
										</div>
									 
										<div style="width:20%; float:left;">
											<span>Less Cash Deposit</span>
											<input type="text" name="less_cash_deposit" id="less_cash_deposit" >											
										</div>
										<div style="width:20%; float:left;">
											<span>Less Trade-in</span>
											<input type="text" name="less_trade_in" id="less_trade_in" >											
										</div>
										<div style="width:20%; float:left;">
											<span>Sub Total/To Dealer</span>
											<input type="text" name="sub_to_dealer"  id="sub_to_dealer">											
										</div>
										<div style="width:20%; float:left;">
											<span>Comprehensive Ins</span>
											<input type="text" name="comprehensive_ins"  id="comprehensive_ins">											
										</div>
										<div style="width:20%; float:left;">
											<span>Gap Insurance</span>
											<input type="text" name="gap_insurance"  id="gap_insurance">											
										</div>
										<div style="width:20%; float:left;">
											<span>Brokerage</span>
											<input type="text" name="brokerage"  id="brokerage">											
										</div>
										<div style="width:20%; float:left;">
											<span>Loan Protection</span>
											<input type="text" name="loan_proection"  id="loan_proection">											
										</div>
										<div style="width:20%; float:left;">
											<span>Warrantly</span>
											<input type="text" name="warrantly"  id="warrantly">											
										</div>
 
<!--
                                        <div style="width:23%; float:left;">
											<span>Year</span>
											<input type="text" name="year">											
										</div>
										<div style="width:23%; float:left;">
											<span>Make</span>
											<input type="text" name="make"> 
										</div>
										<div style="width:23%; float:left;">
											<span>Model</span>
											<input type="text" name="model">											
										</div >
										<br><br><br><br>
										<hr/>
										<div style="width:23%; float:left;">
											<span>Amount</span>
											<input type="text" name="amount">											
										</div >
                                         <div style="width:23%; float:left;">
											<span>Payout</span>
											<input type="text" name="payout">											
										</div >
                                        <div style="width:23%; float:left;">
											<span>Equity</span>
											<input type="text" name="equity">											
										</div >
-->										
										</div>  <!--End of Car_TTT tag -->
										<hr /> 
                              <div id="car_TTT_addon" style="width:100%; float:left;" >  
                                   <div style="width:25%; float:left;">
											<span>Term Request</span>
											<input type="text" name="term_request" id="term_request" >											
										</div>
										<div style="width:25%; float:left;">
											<span>Rate Requested</span>
											<input type="text" name="rate_requested" id="rate_requested" >											
										</div>
										<div style="width:25%; float:left;">
											<span>Payment requested</span>
											<input type="text" name="payment_requested"  id="payment_requested">											
										</div>
							  
							  
							  </div>
                            </div>
								<div class="clear"> </div>								 
								<div class="register-top-grid">
										<h3>PERSONAL DETAILS</h3>
										<div style="width:100%; float:left;">
											<span>Number of Appliers</span>
											<select name="number_of_appliers" id="mySelect2">
                                                       
                                                       <option value="one">One</option>
                                                       <option value="two">Two</option>
                                                        
                                            </select>											
										</div>
										
										
										<div style="width:25%; float:left;">
											<span>Title </span>
											<input type="text" name="title_people1" id="title_people1"> 
										</div>
										 <div style="width:25%; float:left;">
											<span>Family Name </span>
											<input type="text" name="Family_Name1" id="Family_Name1"> 
										</div>
										<div style="width:25%; float:left;">
											<span>Given Name </span>
											<input type="text" name="given_name1" id="given_name1"> 
										</div>
										<div style="width:25%; float:left;">
											<span>Licence No. </span>
											<input type="text" name="licence_no1" id="licence_no1"> 
										</div>
										<div style="width:25%; float:left; " >
											<span>Expires </span>
											<input type="text" name="licence_expire1_date"  style="width:25%; float:left; " id="licence_expire1_date"> 
											<input type="text" name="licence_expire1_month"  style="width:25%; float:left; " id="licence_expire1_month"> 
											<input type="text" name="licence_expire1_year"  style="width:25%; float:left; " id="licence_expire1_year"> 
										</div>
										<div style="width:25%; float:left;">
											<span>Date of Birth</span>
											<input type="text" name="date_of_birth1_date"  style="width:25%; float:left; " id="date_of_birth1_date"> 
											<input type="text" name="date_of_birth1_month"  style="width:25%; float:left; " id="date_of_birth1_month"> 
											<input type="text" name="date_of_birth1_year"  style="width:25%; float:left; " id="date_of_birth1_year"> 
										</div>
										<div style="width:25%; float:left;">
											<span>Age</span>
											<input type="text" name="age1" ID="age1"> 
										</div>
										<div class="clear"> </div>
										<div id="appier2_addon" style="width:100%; float:left;" > 	 
 
										</div>
										 
										<div style="width:30%; float:left;">
											<span>Street Address </span>
											<input type="text" name="street_address1" ID="street_address1"> 
										</div>
										<div style="width:30%; float:left;">
											<span>Post Code </span>
											<input type="text" name="postcode1" style="width:15%; float:left; " ID="postcode1"> 
											<input type="text" name="postcode2" style="width:15%; float:left; " ID="postcode2">
											<input type="text" name="postcode3" style="width:15%; float:left; " ID="postcode3">
											<input type="text" name="postcode4" style="width:15%; float:left; " ID="postcode4"> 
											
										</div>
										<div style="width:5%; float:left;">
											<span>Yrs</span>
											<input type="text" name="yrs1"  ID="yrs1" >									
										</div>
										<div style="width:5%; float:left;">
											<span>Mths</span>
											<input type="text" name="mths1"  ID="mths1" >									
										</div>
										<div style="width:15%; float:right;">
											<span>Home Telephone</span>
											<input type="text" name="home_tele1" ID="home_tele1"  >									
										</div>
										
										<div style="width:30%; float:left;">
											<span>Previous Address </span>
											<input type="text" name="previous_address1" ID="previous_address1"> 
										</div>
										<div style="width:30%; float:left;">
											<span>Post Code </span>
											<input type="text" name="postcode_p1" style="width:15%; float:left; " ID="postcode_p1">
											<input type="text" name="postcode_p2" style="width:15%; float:left; " ID="postcode_p2">
											<input type="text" name="postcode_p3" style="width:15%; float:left; " ID="postcode_p3">
											<input type="text" name="postcode_p4" style="width:15%; float:left; " ID="postcode_p4">
											
										</div>
										<div style="width:5%; float:left;">
											<span>Yrs</span>
											<input type="text" name="yrs_p1"  ID="yrs_p1" >									
										</div>
										<div style="width:5%; float:left;">
											<span>Mths</span>
											<input type="text" name="mths_p1" ID="mths_p1"  >									
										</div>
										<div style="width:15%; float:right;">
											<span>Borrower1 Mobile</span>
											<input type="text" name="borrower1_M" ID="borrower1_M"  >									
										</div>
										
										<div style="width:30%; float:left;">
											<span>Second Previous Address </span>
											<input type="text" name="second_previous_address1" ID="second_previous_address1"> 
										</div>
										<div style="width:30%; float:left;">
											<span>Post Code </span>
											<input type="text" name="postcode_sp1" style="width:15%; float:left; " ID="postcode_sp1">
											<input type="text" name="postcode_sp2" style="width:15%; float:left; " ID="postcode_sp2">
											<input type="text" name="postcode_sp3" style="width:15%; float:left; " ID="postcode_sp3">
											<input type="text" name="postcode_sp4" style="width:15%; float:left; " ID="postcode_sp4">
											
										</div>
										<div style="width:5%; float:left;">
											<span>Yrs</span>
											<input type="text" name="yrs_sp1"   ID="yrs_sp1">									
										</div>
										<div style="width:5%; float:left;">
											<span>Mths</span>
											<input type="text" name="mths_sp1"  ID="mths_sp1" >									
										</div>
										<div style="width:15%; float:right;">
											<span>Borrower2 Mobile</span>
											<input type="text" name="borrower2_M" ID="borrower2_M"  >									
										</div>
										<div style="width:96%; float:left;">
											<span>Email</span>
											<input type="text" name="email_address" ID="email_address"  >									
										</div>
										
										
										
										
										
										
								</div>
								<div class="clear"> </div>
								<div class="register-top-grid">
								<hr/>
								 
								<span>Do you share rent/mortgage?</span>

										<select name="share_mortage_select" id="mySelect3"  >
                                                       
                                                       <option value="yes">Yes</option>
                                                       <option value="no">No</option>
                                                        
                                        </select>
								 
								</div>
								<div class="clear"> </div>
								<div class="register-top-grid">
								
								<div style="width:25%; float:left;">
											<span>Rent</span>
											<input type="text" name="landlord_rent" ID="landlord_rent"> 
								</div>
								<div style="width:25%; float:left;">
											<span>Landlord</span>
											<input type="text" name="landlord" ID="landlord"> 
								</div>
								<div style="width:25%; float:left;">
											<span>Telephone</span>
											<input type="text" name="landlord_tele" ID="landlord_tele"> 
								</div>
							    </div>
								<div class="clear"> </div>
								<div class="register-top-grid">
								<div style="width:13%; float:left;">
								       <select name="full_half_rent" id="mySelect4">
                                                       
                                                       <option value="fullrent">Full Rent</option>
                                                       <option value="halfrent">Half Rent</option>
                                                        
                                        </select>
								
								
								</div>
								</div>
								
								<div class="clear"> </div>
								<div class="register-top-grid">
								<div style="width:27%; float:left;">
								<span>Is your home ?</span>

										<select name="is_your_home" id="mySelect5">
                                                       
                                                       <option value="yourown">Your Own</option>
                                                       <option value="rented">Rented</option>
													   <option value="mortgaged">Mortgaged</option>
                                                       <option value="boarding">Boarding</option>
													   <option value="living_with_relatives">Living With Relatives</option>
                                                        
                                                        
                                        </select>
								</div>
								<div style="width:27%; float:left;">
								<span>Are you presently ?</span>

										<select name="are_you_presently" id="mySelect6">
                                                       
                                                       <option value="single">Single</option>
                                                       <option value="married">Married</option>
													   <option value="divorced">Divorced</option>
                                                       <option value="separated">Separated</option>
													   <option value="widowed">Widowed</option>
                                                       <option value="defacto">Defacto</option>
                                                        
                                        </select>
								</div>
								<div style="width:27%; float:left;">
											<span>Number of Dependents</span>
											<input type="text" name="number_of_dependents" ID="number_of_dependents"> 
								</div>
								</div>
								<div class="clear"> </div>
								<div class="register-top-grid">
								     <h3>Employment</h3>
								      <div style="width:15%; float:left;">
											<span>Borrower 1 Occupation</span>
											<input type="text" name="borrower_occupation1" ID="borrower_occupation1"> 
								      </div>
									  <div style="width:25%; float:left;">
											<span>Employer's Name & Address</span>
											<input type="text" name="employer_name_address1" ID="employer_name_address1"> 
								      </div>
								      <div style="width:7%; float:left;">
											<span>Yrs</span>
											<input type="text" name="yrs_b1" ID="yrs_b1"> 
								      </div>
								      <div style="width:7%; float:left;">
											<span>Mths</span>
											<input type="text" name="mth_b1" ID="mth_b1"> 
								      </div>
									  <div style="width:9%; float:left;">
											<span>Gross</span>
											<input type="text" name="gross_b1" ID="gross_b1"> 
								      </div>
									  <div style="width:9%; float:left;">
											<span>Net</span>
											<input type="text" name="net_b1" ID="net_b1"> 
								      </div>
									  <div style="width:15%; float:left;">
											<span>Business Phone</span>
											<input type="text" name="business_phone_b1" ID="business_phone_b1"> 
								      </div>
								</div>
								<div class="clear"> </div>
								<div class="register-top-grid">
								      
								      <div style="width:15%; float:left;">
											<span>Bwr1 Prev Occupation</span>
											<input type="text" name="bwr1__pre_occupation" ID="bwr1__pre_occupation"> 
								      </div>
									  <div style="width:25%; float:left;">
											<span>Pre Employer's Name & Address</span>
											<input type="text" name="pre_employer_name_address1" ID="pre_employer_name_address1"> 
								      </div>
								      <div style="width:7%; float:left;">
											<span>Yrs</span>
											<input type="text" name="yrs_bp1" ID="yrs_bp1"> 
								      </div>
								      <div style="width:7%; float:left;">
											<span>Mths</span>
											<input type="text" name="mth_bp1" ID="mth_bp1"> 
								      </div>
									  <div style="width:9%; float:left;">
											 <span>Centrelink Income?</span>

										              <select name="centrelink_income1"  style="width:100%; float:left;">
                                                       
                                                       <option value="yes">Yes</option>
                                                       <option value="no">No</option>
													    
                                                        
                                                            </select>
											 
											 
											 
								      </div>
									  <div style="width:9%; float:left;">
											<span>Net</span>
											<input type="text" name="net_bp1" ID="net_bp1"> 
								      </div>
									  <div style="width:15%; float:left;">
											<span>Business Phone</span>
											<input type="text" name="business_phone_bp1" ID="business_phone_bp1"> 
								      </div>
								
								
								
								
								
								</div>
								<div class="clear"> </div>
								<div class="register-top-grid">
								      
								      <div style="width:15%; float:left;">
											<span>Borrower 2 Occupation</span>
											<input type="text" name="borrower_occupation2" ID="borrower_occupation2"> 
								      </div>
									  <div style="width:25%; float:left;">
											<span>Employer's Name & Address</span>
											<input type="text" name="employer_name_address2" ID="employer_name_address2"> 
								      </div>
								      <div style="width:7%; float:left;">
											<span>Yrs</span>
											<input type="text" name="yrs_b2" ID="yrs_b2"> 
								      </div>
								      <div style="width:7%; float:left;">
											<span>Mths</span>
											<input type="text" name="mth_b2" ID="mth_b2"> 
								      </div>
									  <div style="width:9%; float:left;">
											<span>Gross</span>
											<input type="text" name="gross_b2" ID="gross_b2"> 
								      </div>
									  <div style="width:9%; float:left;">
											<span>Net</span>
											<input type="text" name="net_b2" ID="net_b2"> 
								      </div>
									  <div style="width:15%; float:left;">
											<span>Business Phone</span>
											<input type="text" name="business_phone_b2" ID="business_phone_b2"> 
								      </div>
								</div>
								<div class="clear"> </div>
								<div class="register-top-grid">
								      
								      <div style="width:15%; float:left;">
											<span>Bwr2 Prev Occupation</span>
											<input type="text" name="bwr2__pre_occupation" ID="bwr2__pre_occupation"> 
								      </div>
									  <div style="width:25%; float:left;">
											<span>Pre Employer's Name & Address</span>
											<input type="text" name="pre_employer_name_address2" ID="pre_employer_name_address2"> 
								      </div>
								      <div style="width:7%; float:left;">
											<span>Yrs</span>
											<input type="text" name="yrs_bp2" ID="yrs_bp2"> 
								      </div>
								      <div style="width:7%; float:left;">
											<span>Mths</span>
											<input type="text" name="mth_bp2" ID="mth_bp2"> 
								      </div>
									  <div style="width:9%; float:left;">
											 <span>Centrelink Income?</span>

										              <select name="centrelink_income2"  style="width:100%; float:left;">
                                                       
                                                       <option value="yes">Yes</option>
                                                       <option value="no">No</option>
													    
                                                        
                                                            </select>
											 
											 
											 
								      </div>
									  <div style="width:9%; float:left;">
											<span>Net</span>
											<input type="text" name="net_bp2" ID="net_bp2"> 
								      </div>
									  <div style="width:15%; float:left;">
											<span>Business Phone</span>
											<input type="text" name="business_phone_bp2" ID="business_phone_bp2"> 
								      </div>
								
								
								
								
								
								</div>
								<div class="clear"> </div>
								<!------------ current /finailised credit X 4-->
								<div class="register-top-grid">
								      <h3>Current Finalised Credit Liabilities</h3>
								      <div style="width:12%; float:left;">
											<span>Company</span>
											<input type="text" name="company1" ID="company1"> 
								      </div>
								      <div style="width:10%; float:left;">
											<span>Type of Loan</span>
											<input type="text" name="type_of_loan1" ID="type_of_loan1"> 
								      </div>
								      <div style="width:20%; float:left;">
											<span>Details</span>
											<input type="text" name="detail1" ID="detail1"> 
								      </div>
								      <div style="width:10%; float:left;">
											<span>Repayment</span>
											<input type="text" name="repayment1" ID="repayment1"> 
								      </div>
									  <div style="width:15%; float:left;">
									  <span>Current/Finalised?</span>
									  <select name="current_finalised1"  style="width:100%; float:left;">
                                                       
                                                       <option value="current">Current</option>
                                                       <option value="finalised">Finalised</option>
													    
                                                        
                                       </select>
									   </div>
									   <div style="width:10%; float:left;">
											<span>Balance</span>
											<input type="text" name="balance1" ID="balance1"> 
								      </div>
									   <div style="width:10%; float:left;">
											<span>Limit</span>
											<input type="text" name="limit1" ID="limit1"> 
								      </div>
								</div>
								<div class="clear"> </div>
								<div class="register-top-grid">
								      
								      <div style="width:12%; float:left;">
											<span>Company</span>
											<input type="text" name="company2" ID="company2"> 
								      </div>
								      <div style="width:10%; float:left;">
											<span>Type of Loan</span>
											<input type="text" name="type_of_loan2" ID="type_of_loan2"> 
								      </div>
								      <div style="width:20%; float:left;">
											<span>Details</span>
											<input type="text" name="detail2" ID="detail2"> 
								      </div>
								      <div style="width:10%; float:left;">
											<span>Repayment</span>
											<input type="text" name="repayment2" ID="repayment2"> 
								      </div>
									  <div style="width:15%; float:left;">
									  <span>Current/Finalised?</span>
									  <select name="current_finalised2"  style="width:100%; float:left;">
                                                       
                                                       <option value="current">Current</option>
                                                       <option value="finalised">Finalised</option>
													    
                                                        
                                       </select>
									   </div>
									   <div style="width:10%; float:left;">
											<span>Balance</span>
											<input type="text" name="balance2" ID="balance2"> 
								      </div>
									   <div style="width:10%; float:left;">
											<span>Limit</span>
											<input type="text" name="limit2" ID="limit2"> 
								      </div>
								</div>
								<div class="clear"> </div>
								<div class="register-top-grid">
								       
								      <div style="width:12%; float:left;">
											<span>Company</span>
											<input type="text" name="company3" ID="company3"> 
								      </div>
								      <div style="width:10%; float:left;">
											<span>Type of Loan</span>
											<input type="text" name="type_of_loan3" ID="type_of_loan3"> 
								      </div>
								      <div style="width:20%; float:left;">
											<span>Details</span>
											<input type="text" name="detail3" ID="detail3"> 
								      </div>
								      <div style="width:10%; float:left;">
											<span>Repayment</span>
											<input type="text" name="repayment3" ID="repayment3"> 
								      </div>
									  <div style="width:15%; float:left;">
									  <span>Current/Finalised?</span>
									  <select name="current_finalised3"  style="width:100%; float:left;">
                                                       
                                                       <option value="current">Current</option>
                                                       <option value="finalised">Finalised</option>
													    
                                                        
                                       </select>
									   </div>
									   <div style="width:10%; float:left;">
											<span>Balance</span>
											<input type="text" name="balance3" ID="balance3"> 
								      </div>
									   <div style="width:10%; float:left;">
											<span>Limit</span>
											<input type="text" name="limit3" ID="limit3"> 
								      </div>
								</div>
								<div class="clear"> </div>
								<div class="register-top-grid">
								      
								      <div style="width:12%; float:left;">
											<span>Company</span>
											<input type="text" name="company4" ID="company4"> 
								      </div>
								      <div style="width:10%; float:left;">
											<span>Type of Loan</span>
											<input type="text" name="type_of_loan4" ID="type_of_loan4"> 
								      </div>
								      <div style="width:20%; float:left;">
											<span>Details</span>
											<input type="text" name="detail4" ID="detail4"> 
								      </div>
								      <div style="width:10%; float:left;">
											<span>Repayment</span>
											<input type="text" name="repayment4" ID="repayment4"> 
								      </div>
									  <div style="width:15%; float:left;">
									  <span>Current/Finalised?</span>
									  <select name="current_finalised4"  style="width:100%; float:left;">
                                                       
                                                       <option value="current">Current</option>
                                                       <option value="finalised">Finalised</option>
													    
                                                        
                                       </select>
									   </div>
									   <div style="width:10%; float:left;">
											<span>Balance</span>
											<input type="text" name="balance4" ID="balance4"> 
								      </div>
									   <div style="width:10%; float:left;">
											<span>Limit</span>
											<input type="text" name="limit4" ID="limit4"> 
								      </div>
								</div>
								<div class="clear"> </div>
								
								<div class="register-top-grid">
								      <div style="width:40%; float:left;">
											<span>Bank Details</span>
											<input type="text" name="bank_details" ID="bank_details"> 
								      </div>
								      <div style="width:40%; float:left;">
											<span>Phone No's</span>
											<input type="text" name="bank_details_phone" ID="bank_details_phone"> 
								      </div>
								
								
								</div>
								<div class="clear"> </div>
								<div class="register-top-grid">
								      <div style="width:40%; float:left;">
											<span>Nearest Relative Not Living With You</span>
											<input type="text" name="nearest_relative1" ID="nearest_relative1"> 
								      </div>
								      <div style="width:40%; float:left;">
											<span>Phone No's</span>
											<input type="text" name="relative_phone1" ID="relative_phone1"> 
								      </div>
								
								
								</div>
								<div class="clear"> </div>
								<div class="register-top-grid">
								      <div style="width:40%; float:left;">
											<span>Nearest Relative Not Living With You</span>
											<input type="text" name="nearest_relative2" ID="nearest_relative2"> 
								      </div>
								      <div style="width:40%; float:left;">
											<span>Phone No's</span>
											<input type="text" name="relative_phone2" ID="relative_phone2"> 
								      </div>
								
								
								</div>
								<div class="clear"> </div>
								<div class="register-top-grid">
								      <h3>Liabilities</h3>
								      <div style="width:40%; float:left;">
											<span>First Mortgage   $ </span>
											<input type="text" name="first_mortgage_p1" ID="first_mortgage_p1"> 
											
								      </div>
								      <div style="width:40%; float:left;">
											<span> $ </span>
											<input type="text" name="first_mortgage_p2" ID="first_mortgage_p2"> 
											
								      </div>
									  <div style="width:40%; float:left;">
											<span>Second Mortgage   $ </span>
											<input type="text" name="second_mortgage_p1" ID="second_mortgage_p1"> 
											
								      </div>
								      <div style="width:40%; float:left;">
											<span> $ </span>
											<input type="text" name="second_mortgage_p2" ID="second_mortgage_p2"> 
											
								      </div>
									  <div style="width:40%; float:left;">
											<span>Hire Purchases   $ </span>
											<input type="text" name="hire_purchases_p1" ID="hire_purchases_p1"> 
											
								      </div>
								      <div style="width:40%; float:left;">
											<span> $ </span>
											<input type="text" name="hire_purchases_p2" ID="hire_purchases_p2"> 
											
								      </div>
									  <div style="width:40%; float:left;">
											<span>Personal Loan/s   $ </span>
											<input type="text" name="person_loans_p1" ID="person_loans_p1">  
											
								      </div>
								      <div style="width:40%; float:left;">
											<span> $ </span>
											<input type="text" name="person_loans_p2" ID="person_loans_p2"> 
											
								      </div>
									  <div style="width:40%; float:left;">
											<span>Bank Overdraft   $ </span>
											<input type="text" name="bank_overdraft_p1" ID="bank_overdraft_p1"> 
											
								      </div>
								      <div style="width:40%; float:left;">
											<span> $ </span>
											<input type="text" name="bank_overdraft_p2" ID="bank_overdraft_p2">  
											
								      </div>
									  <div style="width:40%; float:left;">
											<span>Total  </span>
											 
											
								      </div>
								      <div style="width:40%; float:left;">
											<span> $ </span>
											<input type="text" name="total_liabilities__p1" ID="total_liabilities__p1"> 
											
								      </div>
								
								</div>
								<div class="clear"> </div>
								
								<div class="register-top-grid">
								      <h3>Assets</h3>
								      <div style="width:40%; float:left;">
											<span>House </span>
											<input type="text" name="house_asset_p1" ID="house_asset_p1"> 
											
								      </div>
								      <div style="width:40%; float:left;">
											<span> $ </span>
											<input type="text" name="house_asset_p2" ID="house_asset_p2"> 
											
								      </div>
									  <div style="width:40%; float:left;">
											<span>Contents </span>
											<input type="text" name="contents_asset_p1" ID="contents_asset_p1"> 
											
								      </div>
								      <div style="width:40%; float:left;">
											<span> $ </span>
											<input type="text" name="contents_asset_p2" ID="contents_asset_p2"> 
											
								      </div>
									  <div style="width:40%; float:left;">
											<span>Car </span>
											<input type="text" name="car1_assets_p1" ID="car1_assets_p1"> 
											
								      </div>
								      <div style="width:40%; float:left;">
											<span> $ </span>
											<input type="text" name="car1_assets_p2" ID="car1_assets_p2"> 
											
								      </div>
									  <div style="width:40%; float:left;">
											<span>Car </span>
											<input type="text" name="car2_assets_p1" ID="car2_assets_p1"> 
											
								      </div>
								      <div style="width:40%; float:left;">
											<span> $ </span>
											<input type="text" name="car2_assets_p2" ID="car2_assets_p2"> 
											
								      </div>
									  <div style="width:40%; float:left;">
											<span>Bank Accounts</span>
											<input type="text" name="bankaccounts_assets_p1" ID="bankaccounts_assets_p1"> 
											
								      </div>
								      <div style="width:40%; float:left;">
											<span> $ </span>
											<input type="text" name="bankaccounts_assets_p2" ID="bankaccounts_assets_p2"> 
											
								      </div>
									  <div style="width:40%; float:left;">
											<span>Shares</span>
											<input type="text" name="shares_assets_p1" ID="shares_assets_p1"> 
											
								      </div>
								      <div style="width:40%; float:left;">
											<span> $ </span>
											<input type="text" name="shares_assets_p2" ID="shares_assets_p2"> 
											
								      </div>
									  <div style="width:40%; float:left;">
											<span>Others</span>
											<input type="text" name="others_assets_p1" ID="others_assets_p1"> 
											
								      </div>
								      <div style="width:40%; float:left;">
											<span> $ </span>
											<input type="text" name="others_assets_p2" ID="others_assets_p2"> 
											
								      </div>
									  <div style="width:40%; float:left;">
											<span>Total  </span>
											 
											
								      </div>
								      <div style="width:40%; float:left;">
											<span> $ </span>
											<input type="text" name="total_assets_p1" ID="total_assets_p1"> 
											
								      </div>
								
								</div>
								<div class="clear"> </div>
								<div class="register-top-grid">
								      <h3>Monthly Income --- Salary</h3>
								      <div style="width:40%; float:left;">
											<span>Gross</span>
											<input type="text" name="salary_gross" ID="salary_gross"> 
											
								      </div>
								      <div style="width:40%; float:left;">
											<span>Net</span>
											<input type="text" name="salary_net" ID="salary_net"> 
											
								      </div>
								
								
								
								</div>
								<div class="clear"> </div>
								
								<div class="register-top-grid">
								      <h3>Responsible Lending Guidelines</h3>
								      <div style="width:40%; float:left;">
											<span>App1 share of the household living expenses</span>
											<input type="text" name="app1_share"> 
											
								      </div>
								      <div style="width:40%; float:left;">
											<span>Do you share Living expenses?</span>
											<select name="do_you_share1"  >
                                                       
                                                       <option value="yes">Yes</option>
                                                       <option value="no">No</option>
													    
                                                        
                                             </select>  
											
								      </div>
								
								
								
								</div>
								<div class="clear"> </div>
								<div class="register-top-grid">
								       
								      <div style="width:40%; float:left;">
											<span>App2 share of the household living expenses</span>
											<input type="text" name="app2_share"> 
											
								      </div>
								      <div style="width:40%; float:left;">
											<span>Do you share Living expenses?</span>
											<select name="do_you_share2"  >
                                                       
                                                       <option value="yes">Yes</option>
                                                       <option value="no">No</option>
													    
                                                        
                                             </select>  
											
								      </div>
								
								
								
								</div>
								<div class="clear"> </div>
								<div class="register-top-grid">
								   <h3>Others</h3>
								<div style="width:40%; float:left;">
											<span>Is there anything that would stop you from getting loans?</span>
											<select name="anything_stop_getting"  >
                                                       
                                                       <option value="yes">Yes</option>
                                                       <option value="no">No</option>
													    
                                                        
                                             </select> 
											
											
								</div>
								<div style="width:40%; float:left;">
								
								<input type="text" name="reason_stop_gettingloan"> 
								    
								</div>
								<br><br><br><br>
								<div style="width:40%; float:left;">
											<span>Are you experiencing financial stress or hardship?</span>
											<select name="financial_hardship"  >
                                                       
                                                       <option value="yes">Yes</option>
                                                       <option value="no">No</option>
													    
                                                        
                                             </select> 
											
											
								</div>
								<div style="width:40%; float:left;">
								
								<input type="text" name="reason_financial_hardship"> 
								    
								</div>
								
								
								
								
								
								<div style="width:90%; float:left;">
								<span>Notes</span>
								<input type="text" name="notes"> 
								    
								</div>
							    </div>
								 
								<div class="clear"> </div>
								<input type="submit" value="submit" />
						</form>
					</div>
				</div>
			</div>
		</div>
         
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


