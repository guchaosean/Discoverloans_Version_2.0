<?php
/*
Plugin Name: Auto loan calculator
PLugin URI: http://usedcarsgroup.com
Description: Auto Loan Calculator is a fast and user friendly way for you to present a good and accurate estimate for users needing to get auto loan payment information fast. This widget can be deployed easily and needs no configuration.
Author: Prakash Kumar
Version: 1.0.2
author URI: http://usedcarsgroup.com

*/

class MyNewWidget extends WP_Widget {

	function MyNewWidget() {
		// Instantiate the parent object
		parent::__construct( false, 'Auto loan calculations' );
	}

	function widget( $args, $instance ) {
		 
		?>
<link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/car-loan-calculator/styles.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo WP_PLUGIN_URL; ?>/car-loan-calculator/cal.js" language="Javascript"></script>
<!--<script type="text/javascript">
	function alc_getValueSelected(){
		var x = document.form0.selectFormName.selectedIndex;
		document.getElementById('alc_txtAutoInterestRate').value = document.form0.selectFormName.options[x].value;
		
	};
</script>-->
<div class="UsedCarForSale_calc-container-small" id="autoCalbodyDiv">
	<div id="autoCalbodyDiv2">
	
	<div class="UsedCarForSale_col1" id="autoCalip1"><b>Auto loan amount ($):</b></div>
		<div class="UsedCarForSale_col2"><input type="text" id="alc_txtAutoloanAmount" class="UsedCarForSale_sel-options"></div>
		<div class="UsedCarForSale_colFull"><span class="UsedCarForSale_form-error" id="errAutoLoanAmount"></span></div>
		
		<div class="UsedCarForSale_col1" id="autoCalip1">Down Payment($):</div>
		<div class="UsedCarForSale_col2"><input type="text" id="alc_txtdownpayment" class="UsedCarForSale_sel-options"></div>
		<div class="UsedCarForSale_colFull"><span class="UsedCarForSale_form-error" id="errdownpayment"></span></div>	 
		
		<!--<div class="UsedCarForSale_col1">Your Credit Rating:</div>
		<form name=form0>
		<select name="selectFormName" onchange="alc_getValueSelected()">			
			<option value="3.5">Excellent 720-850</option>
			<option value="4.5">Very Good 690-719</option>
			<option value="6.75">Good 660-689</option>
			<option value="8.75">Fair 620-659</option>
			<option value="11.25">Not Good 590-619</option>
			<option value="12">Poor 500-589</option>
		</select>
		</form>-->
		<div class="UsedCarForSale_col1" id="autoCalip2">Interest rate (%):</div>
		<div class="UsedCarForSale_col2"><input type="text" id="alc_txtAutoInterestRate" class="UsedCarForSale_sel-options" value="3.5"></div>
		<div class="UsedCarForSale_colFull"><span class="UsedCarForSale_form-error" id="errAutoInterestRate"></span></div>		
		<div class="UsedCarForSale_col1" id="autoCalip3">Auto loan term (months):</div><br>
		<div class="UsedCarForSale_col2">
		<select id="alc_txtAutoLoanTerm">			            <option value="12">12</option>			<option value="24">24</option>			 
						<option value="36">36</option>
			<option value="48">48</option>
			<option value="60">60</option>
			<option value="72">72</option>			<option value="84">84</option>
		</select>
		</div>
		<div class="UsedCarForSale_colFull"><span class="UsedCarForSale_form-error" id="errAutoLoanTerm"></span></div>
		<div style="display:none; height:0px;" id="LoanTermErrDiv">&nbsp;</div>
		<div class="UsedCarForSale_button-small" id="autoCalDivCalculate">
			<div>
				<a href="javascript:onclick=alc_autoCalCalculateMonthlyPayment()" id="alc_autoCalbtnText">Calculate</a>
			</div>
		</div>
		<div class="UsedCarForSale_results-container" style="display:none;" id="autoCalresultDiv">
			<div class="UsedCarForSale_results-col1" id="autoCalresult1">Monthly payment duration:</div>
			<div class="UsedCarForSale_results-col2-new"><span id="autoCalyear"></span></div>
			<div class="UsedCarForSale_results-col1" id="autoCalresult2">Interest rate:</div>
			<div class="UsedCarForSale_results-col2-new"><span id="autoCalrate"></span>%</div>
			<div class="UsedCarForSale_results-col1" id="autoCalresult3">Loan amount:</div>
			<div class="UsedCarForSale_results-col2-new"><span id="autoCalamount"></span></div>
			<div class="UsedCarForSale_results-col1" id="autoCalresult4">Total monthly payment:</div>
			<div class="UsedCarForSale_results-col2-new"><span id="autoCalmonthlyPayment"></span></div>
			<br>
			<!--<p class="powered">Stats by <a href="http://www.usedcarsgroup.com">usedcarsgroup.com</a></p>-->
		</div>
    </div>
    <div style="display:none;" id="autoCalMsgInfo"></div>
</div>		
		<?php
	}

	function update( $new_instance, $old_instance ) {
		
	}

	function form( $instance ) {
		
	}
}

function myplugin_register_widgets() {
	register_widget( 'MyNewWidget' );
}

add_action( 'widgets_init', 'myplugin_register_widgets' );