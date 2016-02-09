<?php 
   $application_id=$_POST["application_id"];
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

$sql = "SELECT * FROM customer_table where application_id='".$application_id."'";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
     
    while($row = $result->fetch_assoc()) {
           
 //$arr = array(
 //    0 => array(
 //          'value' => $row["Borrow1_familyname"],
            
 //    ),
      
//);

     
            
			$dat1['Borrow1_title']=$row["Borrow1_title"];
			$dat2['Borrow1_familyname']=$row["Borrow1_familyname"];
			$dat3['Borrow1_givenname']=$row["Borrow1_givenname"];			            
			$dat4['Borrow1_licenceno']=$row["Borrow1_licenceno"];
			$dat5['Borrow1_bir_date']=$row["Borrow1_bir_date"];
			$dat6['Borrow1_bir_month']=$row["Borrow1_bir_month"];
			$dat7['Borrow1_bir_year']=$row["Borrow1_bir_year"];
			$dat8['Borrow1_age']=$row["Borrow1_age"];
			$dat9['street_adress']= $row["street_adress"];
			$dat10['postcode_1_1'] = $row["postcode_1_1"];
			$dat11['postcode_1_2'] = $row["postcode_1_2"];
			$dat12['postcode_1_3'] = $row["postcode_1_3"];
			$dat13['postcode_1_4'] = $row["postcode_1_4"];
			$dat14['home_telephone']=$row["home_telephone"];
			
			$dat152['Borrow1_expir_date'] = $row["Borrow1_expir_date"];
			$dat153['Borrow1_expir_month'] = $row["Borrow1_expir_month"];
			$dat154['Borrow1_expir_year']=$row["Borrow1_expir_year"];
			
			
			$dat119['street1_year'] = $row["street1_year"];
			$dat120['street1_month']=$row["street1_month"];
			
			$dat103['Borrow2_title']=$row["Borrow2_title"];
			$dat104['Borrow2_familyname']=$row["Borrow2_familyname"];
			$dat105['Borrow2_givenname']=$row["Borrow2_givenname"];			            
			$dat106['Borrow2_licenceno']=$row["Borrow2_licenceno"];
			$dat107['Borrow2_bir_date']=$row["Borrow2_bir_date"];
			$dat108['Borrow2_bir_month']=$row["Borrow2_bir_month"];
			$dat109['Borrow2_bir_year']=$row["Borrow2_bir_year"];
			$dat110['Borrow2_age']=$row["Borrow2_age"];
			
			$dat155['Borrow2_expir_date'] = $row["Borrow2_expir_date"];
			$dat156['Borrow2_expir_month'] = $row["Borrow2_expir_month"];
			$dat157['Borrow2_expir_year']=$row["Borrow2_expir_year"];
			
			$dat111['pre_address']= $row["pre_address"];
			$dat112['postcode_2_1'] = $row["postcode_2_1"];
			$dat113['postcode_2_2'] = $row["postcode_2_2"];
			$dat114['postcode_2_3'] = $row["postcode_2_3"];
			$dat115['postcode_2_4'] = $row["postcode_2_4"];
			$dat116['borrow1_mobile']=$row["borrow1_mobile"];
			$dat117['streetp1_year'] = $row["streetp1_year"];
			$dat118['streetp1_month']=$row["streetp1_month"];
			
			$dat121['pre_address2']= $row["pre_address2"];
			$dat122['postcode_3_1'] = $row["postcode_3_1"];
			$dat123['postcode_3_2'] = $row["postcode_3_2"];
			$dat124['postcode_3_3'] = $row["postcode_3_3"];
			$dat125['postcode_3_4'] = $row["postcode_3_4"];
			$dat126['borrow2_mobile']=$row["borrow2_mobile"];
			$dat127['streetp2_year'] = $row["streetp2_year"];
			$dat128['streetp2_month']=$row["streetp2_month"];		
			$dat15['Email']=$row["Email"];
			
			
			
			
			$dat16['make']=$row["make"] ;
            $dat17['model']=$row["model"]; 
			$dat18['year']=$row["year"] ;
			$dat19['accessories']=$row["accessories"]; 									  
			$dat20['dealer']=$row["dealer"] ;
			$dat21['purchase_price']=$row["purchase_price"]; 
			$dat22['less_cash_deposit']=$row["less_cash_deposit"]; 
			$dat23['less_trade_in']=$row["less_trade_in"] ;
			$dat24['sub_total_dealer']=$row["sub_total_dealer"]; 
			$dat25['comprehensive_ins']=$row["comprehensive_ins"]; 
			$dat26['gap_insurance']=$row["gap_insurance"] ;
			$dat27['brokerage']=$row["brokerage"] ;
			$dat28['loan_protection']=$row["loan_protection"]; 
			$dat29['warranty']=$row["warranty"] ;
			$dat30['amount']=$row["amount"] ;
			$dat31['payout']=$row["payout"] ;
			$dat32['equity']=$row["equity"] ;
			$dat33['term_requested']=$row["term_requested"]; 
			$dat34['rate_requested']=$row["rate_requested"] ;
			$dat35['payment_requested']=$row["payment_requested"]; 
			
			$dat36['company1']=$row["company1"]  ;
			$dat37['type_of_loan1']=$row["type_of_loan1"] ;
			$dat38['details1']=$row["details1"] ;
			$dat39['repayment1']=$row["repayment1"]  ;								  
			$dat40['balance1']=$row["balance1"]  ;
			$dat41['limit1']=$row["limit1"]  ;
            $dat42['company2']=$row["company2"]  ;
	        $dat43['type_of_loan2']=$row["type_of_loan2"] ;
			$dat44['details2']=$row["details2"] ;
			$dat45['repayment2']=$row["repayment2"] ;									 
			$dat46['balance2']=$row["balance2"] ;
			$dat47['limit2']=$row["limit2"] ;
            $dat48['company3']=$row["company3"]  ;
			$dat49['type_of_loan3']=$row["type_of_loan3"] ;
			$dat50['details3']=$row["details3"] ;
			$dat51['repayment3']=$row["repayment3"]  ;									 
			$dat52['balance3']=$row["balance3"] ;
			$dat53['limit3']=$row["limit3"] ;
									 
			$dat54['company4']=$row["company4"] ;
			$dat55['type_of_loan4']=$row["type_of_loan4"];
			$dat56['details4']=$row["details4"] ;
			$dat57['repayment4']= $row["repayment4"] ;									  
			$dat58['balance4']=$row["balance4"] ;
			$dat59['limit4']=$row["limit4"] ;
									 
			$dat60['bank_details']=$row["bank_details"] ;
			$dat61['bank_phone']=$row["bank_phone"] ;
			
			$dat62['borrower1_occupa']=$row["borrower1_occupa"];
			$dat63['borrower1_employername']=$row["borrower1_employername"]; 
			$dat64['borrower1_year']=$row["borrower1_year"];
			$dat65['borrower1_month']=$row["borrower1_month"]; 
			$dat66['borrower1_gross']=$row["borrower1_gross"]; 
			$dat67['borrower1_net']=$row["borrower1_net"];
			$dat68['borrower1_business_phone1']=$row["borrower1_business_phone1"]; 
			
			$dat129['borrower1_prev_occupa']=$row["borrower1_prev_occupa"];
			$dat130['borrower1_prev_employername']=$row["borrower1_prev_employername"]; 
			$dat131['borrower1_prev_year']=$row["borrower1_prev_year"];
			$dat132['borrower1_prev_month']=$row["borrower1_prev_month"]; 			 
			$dat133['borrower1_prev_net']=$row["borrower1_prev_net"];
			$dat134['borrower1_business_phone2']=$row["borrower1_business_phone2"]; 
 			
			$dat135['borrower2_occupa']=$row["borrower2_occupa"];
			$dat136['borrower2_employername']=$row["borrower2_employername"]; 
			$dat137['borrower2_year']=$row["borrower2_year"];
			$dat138['borrower2_month']=$row["borrower2_month"]; 
			$dat139['borrower2_gross']=$row["borrower2_gross"]; 
			$dat140['borrower2_net']=$row["borrower2_net"];
			$dat141['borrower2_business_phone1']=$row["borrower2_business_phone1"]; 
			
			$dat142['borrower2_prev_occupa']=$row["borrower2_prev_occupa"];
			$dat143['borrower2_prev_employername']=$row["borrower2_prev_employername"]; 
			$dat144['borrower2_prev_year']=$row["borrower2_prev_year"];
			$dat145['borrower2_prev_month']=$row["borrower2_prev_month"]; 			 
			$dat146['borrower2_prev_net']=$row["borrower2_prev_net"];
			$dat147['borrower2_business_phone2']=$row["borrower2_business_phone2"]; 
			
			$dat148['nearst_rela1']=$row["nearst_rela1"];
			$dat149['rela1_phone']=$row["rela1_phone"]; 			 
			$dat150['nearst_rela2']=$row["nearst_rela2"];
			$dat151['rela2_phone']=$row["rela2_phone"]; 
			
			$dat69['first_mortgage1']=$row["first_mortgage1"] ;
			$dat70['first_mortgage2']=$row["first_mortgage2"] ; 
			$dat71['second_mortgage1']=$row["second_mortgage1"] ; 			
			$dat72['second_mortgage2']=$row["second_mortgage2"] ; 
			$dat73['hire_purchases1']=$row["hire_purchases1"] ; 
			$dat74['hire_purchases2']=$row["hire_purchases2"] ; 
			$dat75['personal_loan1']=$row["personal_loan1"] ; 
			$dat76['personal_loan2']=$row["personal_loan2"] ; 
			$dat77['bank_overdraft1']=$row["bank_overdraft1"] ; 
			$dat78['bank_overdraft2']=$row["bank_overdraft2"] ; 
			$dat79['other_liab11']=$row["other_liab11"] ; 
			$dat80['other_liab12']=$row["other_liab12"] ; 
			$dat81['other_liab21']=$row["other_liab21"] ; 
			$dat82['other_liab22']=$row["other_liab22"]  ;
			$dat83['other_liab31']=$row["other_liab31"] ; 
			$dat84['other_liab32']=$row["other_liab32"] ; 
			$dat85['total_liab']=$row["total_liab"] ; 
			
			
			 $dat86['house_ass1']=$row["house_ass1"]; 
			 $dat87['house_ass2']=$row["house_ass2"];
			 $dat88['content_ass1']=$row["content_ass1"]; 
			 $dat89['content_ass2']=$row["content_ass2"]; 
			 $dat90['car_ass11']=$row["car_ass11"]; 
			 $dat91['car_ass12']=$row["car_ass12"]; 
			 $dat92['car_ass21']=$row["car_ass21"];
			 $dat93['car_ass22']=$row["car_ass22"]; 
			 $dat94['bank_account_ass1']=$row["bank_account_ass1"]; 
			 $dat95['bank_account_ass2']=$row["bank_account_ass2"]; 
			 $dat96['share_ass1']=$row["share_ass1"]; 
			 $dat97['share_ass2']=$row["share_ass2"] ; 
			 $dat98['other_ass11']=$row["other_ass11"]; 
			 $dat99['other_ass12']=$row["other_ass12"]; 
			 $dat100['other_ass21']=$row["other_ass21"]; 
			 $dat101['other_ass22']=$row["other_ass22"]; 
			 $dat102['total_ass']=$row["total_ass"];
			 
			 $dat158['salary_gross'] = $row["salary_gross"];
			 $dat159['salary_net']=$row["salary_net"];
			 
$da['appli']= array_merge($dat1,$dat2,$dat3,$dat4,$dat5,$dat6,$dat7,$dat8,$dat9,$dat10,$dat11,$dat12,$dat13,$dat14,$dat15,$dat16,$dat17,$dat18,$dat19,$dat20,$dat21,$dat22,$dat23,$dat24,$dat25,$dat26,$dat27,$dat28,$dat29,$dat30,$dat31,$dat32,$dat33,$dat34,$dat35,$dat36,$dat37,$dat38,$dat39,$dat40,$dat41,$dat42,$dat43,$dat44,$dat45,$dat46,$dat47,$dat48,$dat49,$dat50,$dat51,$dat52,$dat53,$dat54,$dat55,$dat56,$dat57,$dat58,$dat59,$dat60,$dat61,$dat62,$dat63,$dat64,$dat65,$dat66,$dat67,$dat68,$dat69,$dat70,$dat71,$dat72,$dat73,$dat74,$dat75,$dat76,$dat77,$dat78,$dat79,$dat80,$dat81,$dat82,$dat83,$dat84,$dat85,$dat86,$dat87,$dat88,$dat89,$dat90,$dat91,$dat92,$dat93,$dat94,$dat95,$dat96,$dat97,$dat98,$dat99,$dat100,$dat101,$dat102,$dat103,$dat104,$dat105,$dat106,$dat107,$dat108,$dat109,$dat110,$dat111,$dat112,$dat113,$dat114,$dat115,$dat116,$dat117,$dat118,$dat119,$dat120,$dat121,$dat122,$dat123,$dat124,$dat125,$dat126,$dat127,$dat128,$dat129,$dat130,$dat131,$dat132,$dat133,$dat134,$dat135,$dat136,$dat137,$dat138,$dat139,$dat140,$dat141,$dat142,$dat143,$dat144,$dat145,$dat146,$dat147,$dat148,$dat149,$dat150,$dat151,$dat152,$dat153,$dat154,$dat155,$dat156,$dat157,$dat158,$dat159 );
    }
    
} else {
     
}
 //echo json_encode($arr);
echo json_encode($da);

 $conn->close();

?>