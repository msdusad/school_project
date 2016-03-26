	<!DOCTYPE html>

	<?php
	include('../header.php');
	//session_start();
	?>
	<head>
	<script type="text/javascript" src="../js/validation.js"></script>
	<script>

	function useridcheck(first){
	var xmlhttp;
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
	xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
	if (xmlhttp.readyState==4 && xmlhttp.status==200)
	{
	var res=xmlhttp.responseText;
	document.getElementById("error_userids").innerHTML=res;
	}
	}
	xmlhttp.open("GET","../classes/idcheck.php?first="+first,true);
	xmlhttp.send();
	}


	function emailcheck(email){
	var xmlhttp;
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
	xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
	if (xmlhttp.readyState==4 && xmlhttp.status==200)
	{
	var res=xmlhttp.responseText;
	document.getElementById("emailerror").innerHTML=res;
	}
	}
	xmlhttp.open("GET","../classes/email_check.php?first="+email,true);
	xmlhttp.send();
	}
	</script>
	</head>

	<div class="row bgColorOne" id="empRegistrationForm" style="margin-left:0px; margin-right:0px;">
	


	<div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10">

	<div class="form-group">
	
	<div class="row">				
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="">
			<h1><i class='fa fa-briefcase'></i> Worktaster Employer Application</h1>
			</div>
		</div>
	</div>

	<form role="form" action="../classes/registration.php" method="post" enctype="multipart/form-data" name="employee_registration" onsubmit="return employee_validitation();">
	
<p class="lead">Company Details</p>
<div class="row">	
		<div class="col-xs-12 col-sm-12 col-md-6">
			<div class="mq_margin_01">
				<input class="form-control" type="text" name="company_name" id="company_name" placeholder="Company Name" required/>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6">
			<div class="">
				<input class="form-control" type="text" name="company_address" id="company_address"  rows="8" cols="30" placeholder="Company Address" required/>
			</div>
		</div>
	</div>
</br>
<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="">
					<input class="form-control" type="text" name="company_city" id="company_city" placeholder="City" required/>
			</div>
		</div>
	</div>
</br>
<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6">
			<div class="mq_margin_01">
				<input class="form-control" type="text" name="company_region" id="company_region" placeholder="Region" required>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6">
			<div class="">
				<input class="form-control " type="text" name="company_postal_code" id="company_postal_code" placeholder="Postal Code"  required >
			</div>
		</div>
	</div>
</br>
<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-2">
			<div class="mq_margin_01">
				<div class="btn-group btn-group-dropdown">
					<!-- <span class="lead">Contact Details</span> -->
					<select name="company_sir_title" id="company_sir_title" class="btn btn-primary " required>
						<option value="" id="selectplease">Please Select</option>
						<option >Mrs</option>
						<option>Mr</option>
						<option>Miss</option> 
						<option>Ms</option>
					</select>
				</div>
			</div>
		</div>
		
		<div class="col-xs-12 col-sm-12 col-md-5">
			<div class="mq_margin_01">
				<input class="form-control " type="text" name="company_f_name" id="company_f_name" placeholder="First Name"  required>
			</div>
		</div>
		
		<div class="col-xs-12 col-sm-12 col-md-5">
			<div class="">
				<input style="width:%;margin-left:0%;" class="form-control " type="text" name="company_l_name" id="company_l_name" placeholder="Last Name"  required>
			</div>
		</div>	
	
</div>	
<br>
<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-4">
		<div class="mq_margin_01">
			<input class="form-control" type="text" name="company_title" id="company_title" placeholder="Title"  required>
		</div>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-4">
		<div class="">	
			<input class="form-control " type="text" name="company_email" id="company_email" pattern="^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+"   placeholder="Email" onchange="emailcheck(this.value)" required>
			<strong id="emailerror" style="color:red;"></strong>
		</div>
	</div>		
	
	<div class="col-xs-12 col-sm-12 col-md-4">
		<div class="">
			<input type="text" class="form-control "  name="company_telephone" id="company_telephone"  placeholder="Telephone" onkeypress="return isNumberKey(event)" maxlength="15" required >
		</div>
	</div>
	
</div>	
<br>
<div class="row">
	<p id="company_telephones"></p>			
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
	<p class="lead"> Create Yourself a Username </p>					  
	<input class="form-control " type="text" name="company_userid" id="company_userid" placeholder="Create UserId"  onkeypress = "return IsAlphaNumeric(event,this.id);"   ondrop="return false;"
	onpaste="IsAlphaNumeric(event,this.id);" onchange="useridcheck(this.value)"  required >
	<b><p id="error_userids" style="display:;color:red;"></p></b>
	<b><p id="company_userids" style="display:none ;color:red;">Special Characters Not Allow</p></b>
	<?php

	if(isset($_SESSION['emp_userid_error'])){
	if($_SESSION['emp_userid_error']!=''){
	?>
	<div class="alert alert-warning">
	<strong><?php echo $_SESSION['emp_userid_error'];?></strong> </div>	
	<?php
	$_SESSION['emp_userid_error']='';
	}
	}
	?>			 
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
		</div>
	</div>
</div>
<br>
<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
		<p class="lead"> Choose a password between 8 and 20 characters long </p>
		<input pattern=".{8,20}" class="form-control " type="password" name="company_password" id="company_password" placeholder="Password" maxlength="20"  min="8" onchange=" return pass_lenth(this.value,'error_lenth')" required title="Minimum 8 and Maximum 20 Chracters Required" >
	<b><p id="company_passwords" style="display:none ;color:red;">Special Characters Not Allow</p></b>
	<b><p id="error_lenth" style="display:block ;color:red;"></p></b>
		</div>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">	
		<p class="lead">Type your password again </p>
		<input pattern=".{8,20}" class="form-control " type="password" name="company_rep_password" id="company_rep_password" placeholder="Re-Enter Password" maxlength="20" min="8"   onchange=" return pass_lenth(this.value,'reerror_lenth')" required title="Minimum 8 and Maximum 20 Chracters Required">
		<b><p id="company_rep_passwords" style="display:none ;color:red;">Special Characters Not Allow</p></b>
		<b><p id="reerror_lenth" style="display:block ;color:red;"></p></b>

		<div class="alert alert-warning" id="emp_passmtch_error" style="display:none;">
		<strong>Re-Enter Password Not Match</strong> </div>	
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="col-sm-12" > 
		<div class="">	
		<label class="checkbox">
		<input data-toggle="checkbox" type="checkbox" name="company_term" id="company_term" onchange="employer_chck()"><p > I have read and agree to Worktaster's <a href="../term_condition.php">Terms & Conditions</a></p>
		<p id="empcheckboxerror" style="display:none;color:white;">Accept Worktaster term and condition checkbox</p>
		</label>
		</div>
	</div>
	</div>
<br>
<div class="row">	
	<div class="col-sm-12" >
		<div class="">	
		<input class="btn btn-block btn-primary" type="submit" name="employer" id="submit" value="Register">
		</div>
	</div>
</div>
	
	</form>
	</div>

	</div>

	<?php
	include('../footer.php');
	?>