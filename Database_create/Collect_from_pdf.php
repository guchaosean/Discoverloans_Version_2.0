<?php 
     date_default_timezone_set("Australia/Brisbane");
	 $application_id=$_POST['Text174'];
	// $date=$_POST['Date'];
     $date=date("Y/m/d");    

	$make1=$_POST['Text9'];
	 $model1=$_POST['Text10'];	 
	 $make2=$_POST['Text14'];
	 $model2=$_POST['Text15'];
	
	$year=$_POST['Text13'];
	$accessories=$_POST['Text12'];
	$dealer=$_POST['Text2'];
	$purchase_price=$_POST['Text3'];
	$less_cash_deposit=$_POST['Text4'];
	$less_trade_in=$_POST['Text5'];
	$sub_to_dealer=$_POST['Text8'];
	$comprehensive_ins=$_POST['Text19'];
	$gap_insurance=$_POST['Text20'];
	$brokerage=$_POST['Text21'];
	$loan_proection=$_POST['Text22'];
	$warrantly=$_POST['Text23'];
	
	$amount=$_POST['Text16'];
	$payout=$_POST['Text17'];
	$equity=$_POST['Text18'];	
	$term_request=$_POST['Text24'];
    $rate_requested=$_POST['Text25'];
    $payment_requested=$_POST['Text26'];
	
	$title_people1=$_POST['Text27'];
    $Family_Name1=$_POST['Text28'];
    $given_name1=$_POST['Text29'];
    $licence_no1=$_POST['Text30'];
    $licence_expire1_date=$_POST['Text31'];
    $licence_expire1_month=$_POST['Text32'];
    $licence_expire1_year=$_POST['Text33'];
    $date_of_birth1_date=$_POST['Text34'];
    $date_of_birth1_month=$_POST['Text35'];
    $date_of_birth1_year=$_POST['Text36'];
    $age1=$_POST['Text37'];
	
	$title_people2=$_POST['Text38'];
    $Family_Name2=$_POST['Text39'];
    $given_name2=$_POST['Text40'];
    $licence_no2=$_POST['Text41'];
    $licence_expire2_date=$_POST['Text42'];
    $licence_expire2_month=$_POST['Text43'];
    $licence_expire2_year=$_POST['Text44'];
    $date_of_birth2_date=$_POST['Text45'];
    $date_of_birth2_month=$_POST['Text46'];
    $date_of_birth2_year=$_POST['Text47'];
    $age2=$_POST['Text48'];
	
	$street_address1=$_POST['Text49'];
    $postcode1=$_POST['Text50'];
    $postcode2=$_POST['Text51'];
    $postcode3=$_POST['Text52'];
    $postcode4=$_POST['Text53'];
    $yrs1=$_POST['Text54'];
    $mths1=$_POST['Text55'];
    $home_tele1=$_POST['Text70'];
	
	$previous_address1=$_POST['Text56'];
    $postcode_p1=$_POST['Text57'];
    $postcode_p2=$_POST['Text58'];
    $postcode_p3=$_POST['Text59'];
    $postcode_p4=$_POST['Text60'];
    $yrs_p1=$_POST['Text61'];
    $mths_p1=$_POST['Text62'];
    $borrower1_M=$_POST['Text71'];

    $second_previous_address1=$_POST['Text63'];
    $postcode_sp1=$_POST['Text64'];
    $postcode_sp2=$_POST['Text65'];
    $postcode_sp3=$_POST['Text66'];
    $postcode_sp4=$_POST['Text67'];
    $yrs_sp1=$_POST['Text68'];
    $mths_sp1=$_POST['Text69'];
    $borrower2_M=$_POST['Text72'];
    $email_address=$_POST['Text73'];
	
	//$share_mortage_select=$_POST['checkbox3'];
    $landlord_rent=$_POST['Text75'];
    $landlord=$_POST['Text76'];
    $landlord_tele=$_POST['Text77'];
    //$full_half_rent=$_POST['Text73'];
    //$is_your_home=$_POST['Text73'];
    //$are_you_presently=$_POST['Text73'];
    $number_of_dependents=$_POST['Text91'];
	
	$borrower_occupation1=$_POST['Text74'];
    $employer_name_address1=$_POST['Text78'];
    $yrs_b1=$_POST['Text79'];
    $mth_b1=$_POST['Text80'];
    $gross_b1=$_POST['Text81'];
    $net_b1=$_POST['Text82'];
    $business_phone_b1=$_POST['Text83'];
	
$bwr1__pre_occupation=$_POST['Text84'];
$pre_employer_name_address1=$_POST['Text85'];
$yrs_bp1=$_POST['Text86'];
$mth_bp1=$_POST['Text87'];
//$centrelink_income1=$_POST['Text83'];
$net_bp1=$_POST['Text88'];
$business_phone_bp1=$_POST['Text89'];	

$borrower_occupation2=$_POST['Text90'];
$employer_name_address2=$_POST['Text97'];
$yrs_b2=$_POST['Text98'];
$mth_b2=$_POST['Text100'];
$gross_b2=$_POST['Text101'];
$net_b2=$_POST['Text102'];
$business_phone_b2=$_POST['Text103'];

$bwr2__pre_occupation=$_POST['Text104'];
$pre_employer_name_address2=$_POST['Text105'];
$yrs_bp2=$_POST['Text106'];
$mth_bp2=$_POST['Text107'];
//$centrelink_income2=$_POST['Text103'];
$net_bp2=$_POST['Text108'];
$business_phone_bp2=$_POST['Text109'];

$company1=$_POST['Text110'];
$type_of_loan1=$_POST['Text111'];
$detail1=$_POST['Text112'];
$repayment1=$_POST['Text113'];
//$current_finalised1=$_POST['Text109'];
$balance1=$_POST['Text114'];
$limit1=$_POST['Text115'];

$company2=$_POST['Text116'];
$type_of_loan2=$_POST['Text117'];
$detail2=$_POST['Text118'];
$repayment2=$_POST['Text119'];
//$current_finalised2=$_POST['Text109'];
$balance2=$_POST['Text121'];
$limit2=$_POST['Text122'];

$company3=$_POST['Text123'];
$type_of_loan3=$_POST['Text124'];
$detail3=$_POST['Text125'];
$repayment3=$_POST['Text126'];
//$current_finalised3=$_POST['Text109'];
$balance3=$_POST['Text127'];
$limit3=$_POST['Text128'];

$company4=$_POST['Text129'];
$type_of_loan4=$_POST['Text130'];
$detail4=$_POST['Text131'];
$repayment4=$_POST['Text132'];
//$current_finalised4=$_POST['Text109'];
$balance4=$_POST['Text133'];
$limit4=$_POST['Text134'];

$bank_details=$_POST['Text135'];
$bank_details_phone=$_POST['Text136'];
$nearest_relative1=$_POST['Text137'];
$relative_phone1=$_POST['Text138'];
$nearest_relative2=$_POST['Text139'];
$relative_phone2=$_POST['Text140'];

$first_mortgage_p1=$_POST['Text141'];
$first_mortgage_p2=$_POST['Text152'];
$second_mortgage_p1=$_POST['Text142'];
$second_mortgage_p2=$_POST['Text153'];
$hire_purchases_p1=$_POST['Text143'];
$hire_purchases_p2=$_POST['Text154'];
$person_loans_p1=$_POST['Text144'];
$person_loans_p2=$_POST['Text155'];
$bank_overdraft_p1=$_POST['Text145'];
$bank_overdraft_p2=$_POST['Text156'];
$other_liab11=$_POST['Text146'];
$other_liab12=$_POST['Text157'];
$other_liab21=$_POST['Text147'];
$other_liab22=$_POST['Text158'];
$other_liab31=$_POST['Text148'];
$other_liab32=$_POST['Text159'];
$total_liabilities__p1=$_POST['Text173'];

$house_asset_p1=$_POST['Text160'];
$house_asset_p2=$_POST['Text161'];
$contents_asset_p1=$_POST['Text162'];
$contents_asset_p2=$_POST['Text163'];
$car1_assets_p1=$_POST['Text164'];
$car1_assets_p2=$_POST['Text165'];
$car2_assets_p1=$_POST['Text166'];
$car2_assets_p2=$_POST['Text167'];
$bankaccounts_assets_p1=$_POST['Text168'];
$bankaccounts_assets_p2=$_POST['Text169'];
$shares_assets_p1=$_POST['Text170']; 
$shares_assets_p2=$_POST['Text171'];
$others_assets_p1=$_POST['Text1'];
$others_assets_p2=$_POST['Text6'];
$total_assets_p1=$_POST['Text172'];

$salary_gross=$_POST['Text81'];
$salary_net=$_POST['Text82'];
 
 
//$do_you_share1=$_POST['do_you_share1'];
 
//$do_you_share2=$_POST['do_you_share2'];
//$anything_stop_getting=$_POST['anything_stop_getting']; 
//$financial_hardship=$_POST['financial_hardship']; 
 
 

	 

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
$sql1 = "SELECT * FROM customer_table where application_id='".$application_id."'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
     ///modify data
	 $sql2 = "UPDATE customer_table SET Borrow1_title='".$title_people1."', 
	                                    Borrow1_familyname='".$Family_Name1."',
	                                 Borrow1_givenname='".$given_name1."', 
									 Borrow1_licenceno='".$licence_no1."', 
									 Borrow1_expir_date='".$licence_expire1_date."', 
									 Borrow1_expir_month='".$licence_expire1_month."', 
									 Borrow1_expir_year='".$licence_expire1_year."', 
									 Borrow1_bir_date='".$date_of_birth1_date."', 
									 Borrow1_bir_month='".$date_of_birth1_month."', 
									 Borrow1_bir_year='".$date_of_birth1_year."', 
									 Borrow1_age='".$age1."', 
									 Borrow2_title='".$title_people2."', 
									 Borrow2_familyname='".$Family_Name2."', 
									 Borrow2_givenname='".$given_name2."', 
									 Borrow2_licenceno='".$licence_no2."', 
									 Borrow2_expir_date='".$licence_expire2_date."', 
									 Borrow2_expir_month='".$licence_expire2_month."', 
									 Borrow2_expir_year='".$licence_expire2_year."', 
									 Borrow2_bir_date='".$date_of_birth2_date."', 
									 Borrow2_bir_month='".$date_of_birth2_month."', 
									 Borrow2_bir_year='".$date_of_birth2_year."', 
									 Borrow2_age='".$age2."', 
									 street_adress='".$street_address1."', 
									 postcode_1_1='".$postcode1."', 
									 postcode_1_2='".$postcode2."', 
									 postcode_1_3='".$postcode3."', 
									 postcode_1_4='".$postcode4."', 
									 street1_year='".$yrs1."', 
									 street1_month='".$mths1."', 
									 home_telephone='".$home_tele1."', 
									 pre_address='".$previous_address1."', 
									 postcode_2_1='".$postcode_p1."', 
									 postcode_2_2='".$postcode_p2."', 
									 postcode_2_3='".$postcode_p3."', 
									 postcode_2_4='".$postcode_p4."', 
									 streetp1_year='".$yrs_p1."', 
									 streetp1_month='".$mths_p1."', 
									 borrow1_mobile='".$borrower1_M."', 
									 pre_address2='".$second_previous_address1."', 
									 postcode_3_1='".$postcode_sp1."', 
									 postcode_3_2='".$postcode_sp2."', 
									 postcode_3_3='".$postcode_sp3."', 
									 postcode_3_4='".$postcode_sp4."', 
									 streetp2_year='".$yrs_sp1."', 
									 streetp2_month='".$mths_sp1."', 
									 borrow2_mobile='".$borrower2_M."', 
									 Email='".$email_address."', 
									 share_rent_ornot=' ', 
									 Rent_value='".$landlord_rent."', 
									 landlord_name='".$landlord."', 
									 telephone_landlord='".$landlord_tele."', 
									 Half_full_rent=' ', 
									 is_your_home=' ', 
									 are_you_presently=' ', 
									 no_of_dependents='".$number_of_dependents."', 
									 borrower1_occupa='".$borrower_occupation1."', 
									 borrower1_employername='".$employer_name_address1."', 
									 borrower1_year='".$yrs_b1."', 
									 borrower1_month='".$mth_b1."', 
									 borrower1_gross='".$gross_b1."', 
									 borrower1_net='".$net_b1."',
									 borrower1_business_phone1='".$business_phone_b1."', 
									 borrower1_prev_occupa='".$bwr1__pre_occupation."', 
									 borrower1_prev_employername='".$pre_employer_name_address1."', 
									 borrower1_prev_year='".$yrs_bp1."', 
									 borrower1_prev_month='".$mth_bp1."', 
									 borrower1_centrelink='', 
									 borrower1_prev_net='".$net_bp1."', 
									 borrower1_business_phone2='".$business_phone_bp1."', 
									 borrower2_occupa='".$borrower_occupation2."', 
									 borrower2_employername='".$employer_name_address2."', 
									 borrower2_year='".$yrs_b2."', 
									 borrower2_month='".$mth_b2."', 
									 borrower2_gross='".$gross_b2."', 
									 borrower2_net='".$net_b2."', 
									 borrower2_business_phone1='".$business_phone_b2."', 
									 borrower2_prev_occupa='".$bwr2__pre_occupation."', 
									 borrower2_prev_employername='".$pre_employer_name_address2."', 
									 borrower2_prev_year='".$yrs_bp2."', 
									 borrower2_prev_month='".$mth_bp2."', 
									 borrower2_centrelink=' ', 
									 borrower2_prev_net='".$net_bp2."', 
									 borrower2_business_phone2='".$business_phone_bp2."', 
									 make='".$make1."', 
									 model='".$model1."', 
									 year='".$year."', 
									 accessories='".$accessories."', 
									 date='".$date."', 
									 dealer='".$dealer."', 
									 purchase_price='".$purchase_price."', 
									 less_cash_deposit='".$less_cash_deposit."', 
									 less_trade_in='".$less_trade_in."', 
									 sub_total_dealer='".$sub_to_dealer."', 
									 comprehensive_ins='".$comprehensive_ins."', 
									 gap_insurance='".$gap_insurance."', 
									 brokerage='".$brokerage."', 
									 loan_protection='".$loan_proection."',
									 warranty='".$warrantly."', 
									 amount='".$amount."', 
									 payout='".$payout."', 
									 equity='".$equity."', 
									 term_requested='".$term_request."', 
									 rate_requested='".$rate_requested."', 
									 payment_requested='".$payment_requested."', 
									 company1='".$company1."', 
									 type_of_loan1='".$type_of_loan1."', 
									 details1='".$detail1."', 
									 repayment1='".$repayment1."', 
									 cur_fin1=' ', 
									 balance1='".$balance1."', 
									 limit1='".$limit1."', 
									 company2='".$company2."', 
									 type_of_loan2='".$type_of_loan2."', 
									 details2='".$detail2."', 
									 repayment2='".$repayment2."', 
									 cur_fin2=' ', 
									 balance2='".$balance2."', 
									 limit2='".$limit2."', 
									 company3='".$company3."', 
									 type_of_loan3='".$type_of_loan3."', 
									 details3='".$detail3."', 
									 repayment3='".$repayment3."', 
									 cur_fin3=' ', 
									 balance3='".$balance3."', 
									 limit3='".$limit3."', 
									 company4='".$company4."', 
									 type_of_loan4='".$type_of_loan4."', 
									 details4='".$detail4."', 
									 repayment4='".$repayment4."', 
									 cur_fin4=' ', 
									 balance4='".$balance4."', 
									 limit4='".$limit4."', 
									 bank_details='".$bank_details."', 
									 bank_phone='".$bank_details_phone."', 
									 nearst_rela1='".$nearest_relative1."', 
									 rela1_phone='".$relative_phone1."', 
									 nearst_rela2='".$nearest_relative2."', 
									 rela2_phone='".$relative_phone2."', 
									 first_mortgage1='".$first_mortgage_p1."', 
									 first_mortgage2='".$first_mortgage_p2."', 
									 second_mortgage1='".$second_mortgage_p1."', 
									 second_mortgage2='".$second_mortgage_p2."', 
									 hire_purchases1='".$hire_purchases_p1."', 
									 hire_purchases2='".$hire_purchases_p2."', 
									 personal_loan1='".$person_loans_p1."', 
									 personal_loan2='".$person_loans_p2."', 
									 bank_overdraft1='".$bank_overdraft_p1."', 
									 bank_overdraft2='".$bank_overdraft_p2."', 
									 other_liab11='".$other_liab11."', 
									 other_liab12='".$other_liab12."', 
									 other_liab21='".$other_liab21."', 
									 other_liab22='".$other_liab22."', 
									 other_liab31='".$other_liab31."', 
									 other_liab32='".$other_liab32."', 
									 total_liab='".$total_liabilities__p1."', 
									 house_ass1='".$house_asset_p1."', 
									 house_ass2='".$house_asset_p2."', 
									 content_ass1='".$contents_asset_p1."', 
									 content_ass2='".$contents_asset_p2."', 
									 car_ass11='".$car1_assets_p1."', 
									 car_ass12='".$car1_assets_p2."', 
									 car_ass21='".$car2_assets_p1."',
									 car_ass22='".$car2_assets_p2."' ,
									 bank_account_ass1='".$bankaccounts_assets_p1."', 
									 bank_account_ass2='".$bankaccounts_assets_p2."', 
									 share_ass1='".$shares_assets_p1."', 
									 share_ass2='".$shares_assets_p2."', 
									 other_ass11='".$others_assets_p1."', 
									 other_ass12='".$others_assets_p2."', 
									 other_ass21=' ', 
									 other_ass22=' ', 
									 total_ass='".$total_assets_p1."', 
									 salary_gross='".$salary_gross."', 
									 salary_net='".$salary_net."', 
									 share_living_ex1=' ', 
									 share_living_ex2=' ', 
									 credit_history=' ', 
									 financial_stress=' ', 
									 make2='".$make2."', 
									 model2='".$model2."' 
	 
	                                    WHERE application_id='".$application_id."'" ;
	if ($conn->query($sql2) === TRUE) {
    echo "Record modified successfully" ;
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}									
    }
 else {
     ///create new record
	 $sql = "INSERT INTO customer_table ( 
                                     application_id, 
                                     Borrow1_title, 
									 Borrow1_familyname, 
									 Borrow1_givenname, 
									 Borrow1_licenceno, 
									 Borrow1_expir_date, 
									 Borrow1_expir_month, 
									 Borrow1_expir_year, 
									 Borrow1_bir_date, 
									 Borrow1_bir_month, 
									 Borrow1_bir_year, 
									 Borrow1_age, 
									 Borrow2_title, 
									 Borrow2_familyname, 
									 Borrow2_givenname, 
									 Borrow2_licenceno, 
									 Borrow2_expir_date, 
									 Borrow2_expir_month, 
									 Borrow2_expir_year, 
									 Borrow2_bir_date, 
									 Borrow2_bir_month, 
									 Borrow2_bir_year, 
									 Borrow2_age, 
									 street_adress, 
									 postcode_1_1, 
									 postcode_1_2, 
									 postcode_1_3, 
									 postcode_1_4, 
									 street1_year, 
									 street1_month, 
									 home_telephone, 
									 pre_address, 
									 postcode_2_1, 
									 postcode_2_2, 
									 postcode_2_3, 
									 postcode_2_4, 
									 streetp1_year, 
									 streetp1_month, 
									 borrow1_mobile, 
									 pre_address2, 
									 postcode_3_1, 
									 postcode_3_2, 
									 postcode_3_3, 
									 postcode_3_4, 
									 streetp2_year, 
									 streetp2_month, 
									 borrow2_mobile, 
									 Email, 
									 share_rent_ornot, 
									 Rent_value, 
									 landlord_name, 
									 telephone_landlord, 
									 Half_full_rent, 
									 is_your_home, 
									 are_you_presently, 
									 no_of_dependents, 
									 borrower1_occupa, 
									 borrower1_employername, 
									 borrower1_year, 
									 borrower1_month, 
									 borrower1_gross, 
									 borrower1_net,
									 borrower1_business_phone1, 
									 borrower1_prev_occupa, 
									 borrower1_prev_employername, 
									 borrower1_prev_year, 
									 borrower1_prev_month, 
									 borrower1_centrelink, 
									 borrower1_prev_net, 
									 borrower1_business_phone2, 
									 borrower2_occupa, 
									 borrower2_employername, 
									 borrower2_year, 
									 borrower2_month, 
									 borrower2_gross, 
									 borrower2_net, 
									 borrower2_business_phone1, 
									 borrower2_prev_occupa, 
									 borrower2_prev_employername, 
									 borrower2_prev_year, 
									 borrower2_prev_month, 
									 borrower2_centrelink, 
									 borrower2_prev_net, 
									 borrower2_business_phone2, 
									 make, 
									 model, 
									 year, 
									 accessories, 
									 date, 
									 dealer, 
									 purchase_price, 
									 less_cash_deposit, 
									 less_trade_in, 
									 sub_total_dealer, 
									 comprehensive_ins, 
									 gap_insurance, 
									 brokerage, 
									 loan_protection,
									 warranty, 
									 amount, 
									 payout, 
									 equity, 
									 term_requested, 
									 rate_requested, 
									 payment_requested, 
									 company1, 
									 type_of_loan1, 
									 details1, 
									 repayment1, 
									 cur_fin1, 
									 balance1, 
									 limit1, 
									 company2, 
									 type_of_loan2, 
									 details2, 
									 repayment2, 
									 cur_fin2, 
									 balance2, 
									 limit2, 
									 company3, 
									 type_of_loan3, 
									 details3, 
									 repayment3, 
									 cur_fin3, 
									 balance3, 
									 limit3, 
									 company4, 
									 type_of_loan4, 
									 details4, 
									 repayment4, 
									 cur_fin4, 
									 balance4, 
									 limit4, 
									 bank_details, 
									 bank_phone, 
									 nearst_rela1, 
									 rela1_phone, 
									 nearst_rela2, 
									 rela2_phone, 
									 first_mortgage1, 
									 first_mortgage2, 
									 second_mortgage1, 
									 second_mortgage2, 
									 hire_purchases1, 
									 hire_purchases2, 
									 personal_loan1, 
									 personal_loan2, 
									 bank_overdraft1, 
									 bank_overdraft2, 
									 other_liab11, 
									 other_liab12, 
									 other_liab21, 
									 other_liab22, 
									 other_liab31, 
									 other_liab32, 
									 total_liab, 
									 house_ass1, 
									 house_ass2, 
									 content_ass1, 
									 content_ass2, 
									 car_ass11, 
									 car_ass12, 
									 car_ass21,
									 car_ass22, 
									 bank_account_ass1, 
									 bank_account_ass2, 
									 share_ass1, 
									 share_ass2, 
									 other_ass11, 
									 other_ass12, 
									 other_ass21, 
									 other_ass22, 
									 total_ass, 
									 salary_gross, 
									 salary_net, 
									 share_living_ex1, 
									 share_living_ex2, 
									 credit_history, 
									 financial_stress, 
									 make2, 
									 model2 
								   )
                           VALUES ( 
						   
						           '".$application_id."',
						           '".$title_people1."',
								   '".$Family_Name1."',
								   '".$given_name1."',
								   '".$licence_no1."',
								   '".$licence_expire1_date."',
								   '".$licence_expire1_month."',
								   '".$licence_expire1_year."',
								   '".$date_of_birth1_date."',
								   '".$date_of_birth1_month."',
								   '".$date_of_birth1_year."',
								   '".$age1."',
								   '".$title_people2."',
								   '".$Family_Name2."',
								   '".$given_name2."',
								   '".$licence_no2."',
								   '".$licence_expire2_date."',
								   '".$licence_expire2_month."',
								   '".$licence_expire2_year."',
								   '".$date_of_birth2_date."',
								   '".$date_of_birth2_month."',
								   '".$date_of_birth2_year."',
								   '".$age2."',
								   '".$street_address1."',
								   '".$postcode1."',
								   '".$postcode2."',
								   '".$postcode3."',
								   '".$postcode4."',
								   '".$yrs1."',
								   '".$mths1."',
								   '".$home_tele1."',
								   '".$previous_address1."',
								   '".$postcode_p1."',
								   '".$postcode_p2."',
								   '".$postcode_p3."',
								   '".$postcode_p4."',
								   '".$yrs_p1."',
								   '".$mths_p1."',
								   '".$borrower1_M."',
								   '".$second_previous_address1."',
								   '".$postcode_sp1."',
								   '".$postcode_sp2."',
								   '".$postcode_sp3."',
								   '".$postcode_sp4."',
								   '".$yrs_sp1."',
								   '".$mths_sp1."',
								   '".$borrower2_M."',
								   '".$email_address."',
								   '',
								   '".$landlord_rent."',
								   '".$landlord."',
								   '".$landlord_tele."',
								   '',
								   '',
								   '',
								   '".$number_of_dependents."',
								   '".$borrower_occupation1."',
								   '".$employer_name_address1."',
								   '".$yrs_b1."',
								   '".$mth_b1."',
								   '".$gross_b1."',
								   '".$net_b1."',
								   '".$business_phone_b1."',
								   '".$bwr1__pre_occupation."',
								   '".$pre_employer_name_address1."',
								   '".$yrs_bp1."',
								   '".$mth_bp1."',
								   '',
								   '".$net_bp1."',
								   '".$business_phone_bp1."',
								   '".$borrower_occupation2."',
								   '".$employer_name_address2."',
								   '".$yrs_b2."',
								   '".$mth_b2."',
								   '".$gross_b2."',
								   '".$net_b2."',
								   '".$business_phone_b2."',
								   '".$bwr2__pre_occupation."',
								   '".$pre_employer_name_address2."',
								   '".$yrs_bp2."',
								   '".$mth_bp2."',
								   '',
								   '".$net_bp2."',
								   '".$business_phone_bp2."',
								   '".$make1."',
								   '".$model1."',
								   '".$year."',
								   '".$accessories."',
								   '".$date."',
								   '".$dealer."',
								   '".$purchase_price."',
								   '".$less_cash_deposit."',
								   '".$less_trade_in."',
								   '".$sub_to_dealer."',
								   '".$comprehensive_ins."',
								   '".$gap_insurance."',
								   '".$brokerage."',
								   '".$loan_proection."',
								   '".$warrantly."',
								   '".$amount."',
								   '".$payout."',
								   '".$equity."',
								   '".$term_request."',
								   '".$rate_requested."',
								   '".$payment_requested."',
								   '".$company1."',
								   '".$type_of_loan1."',
								   '".$detail1."',
								   '".$repayment1."',
								   ' ',
								   '".$balance1."',
								   '".$limit1."',
								   '".$company2."',
								   '".$type_of_loan2."',
								   '".$detail2."',
								   '".$repayment2."',
								   ' ',
								   '".$balance2."',
								   '".$limit2."',
								   '".$company3."',
								   '".$type_of_loan3."',
								   '".$detail3."',
								   '".$repayment3."',
								   ' ',
								   '".$balance3."',
								   '".$limit3."',
								   '".$company4."',
								   '".$type_of_loan4."',
								   '".$detail4."',
								   '".$repayment4."',
								   ' ',
								   '".$balance4."',
								   '".$limit4."',
								   '".$bank_details."',
								   '".$bank_details_phone."',
								   '".$nearest_relative1."',
								   '".$relative_phone1."',
								   '".$nearest_relative2."',
								   '".$relative_phone2."',
								   '".$first_mortgage_p1."',
								   '".$first_mortgage_p2."',
								   '".$second_mortgage_p1."',
								   '".$second_mortgage_p2."',
								   '".$hire_purchases_p1."',
								   '".$hire_purchases_p2."',
								   '".$person_loans_p1."',
								   '".$person_loans_p2."',
								   '".$bank_overdraft_p1."',
								   '".$bank_overdraft_p2."',
								   '".$other_liab11."',
								   '".$other_liab12."',
								   '".$other_liab21."',
								   '".$other_liab22."',
								   '".$other_liab31."',
								   '".$other_liab32."',
								   '".$total_liabilities__p1."',
								   '".$house_asset_p1."',
								   '".$house_asset_p2."',
								   '".$contents_asset_p1."',
								   '".$contents_asset_p2."',
								   '".$car1_assets_p1."',
								   '".$car1_assets_p2."',
								   '".$car2_assets_p1."',
								   '".$car2_assets_p2."',
								   '".$bankaccounts_assets_p1."',
								   '".$bankaccounts_assets_p2."',
								   '".$shares_assets_p1."',
								   '".$shares_assets_p2."',
								   '".$others_assets_p1."',
								   '".$others_assets_p2."',
								   '',
								   '',
								   '".$total_assets_p1."',
								   '".$salary_gross."',
								   '".$salary_net."',
								   '',
								   '',
								   '',
								   '',
								   '".$make2."',
								   '".$model2."' 
								   )";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}






$conn->close();


?>
