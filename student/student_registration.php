<?php
include('../header.php');
//session_start();
?>
<head>

<script>

$(document).ready(function() {
$("#day").find("option").eq(0).remove();
});
</script>
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
document.getElementById("userids").innerHTML=res;

var lent=first.length;
//alert(lent);
if(lent<=3){
document.getElementById("userids").style.display='block';
document.getElementById("userids").innerHTML='Minimum 4 Chracters Require';
}
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

<div class="row bgColorOne" id="stdRegistrationForm" >

<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">

<div class="form-group">
<form role="form" method="post" action="../classes/registration.php" name="registration_form"  onsubmit="return registration_valid();">

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="">
			<h1><i class='fa fa-graduation-cap'></i> Worktaster Student Registration</h1>
		</div>
	</div>
</div>

<div class="row">	
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input class="form-control" type="text" name="fname" id="fname" placeholder="First Name" onkeypress="return IsAlphaNumeric(event,this.id);" ondrop="return false;"onpaste="return false;" required/ style="margin-bottom:15px;">
			<b><p id="fnames" style="display:none; color:red;">Special characters not allowed</p></b>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name" onkeypress="return IsAlphaNumeric(event,this.id);" ondrop="return false;" onpaste="return false;"required/>
			<b><p id="lnames" style="display:none; color:red;">Special characters not allowed</p></b>
		</div>
	</div>
</div>

</br>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input class="form-control" type="text" name="email" id="email" placeholder="Email" pattern="^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+" onchange="emailcheck(this.value)" required/>
			<strong id="emailerror"></strong>
			<?php
			if(isset($_SESSION['email_error'])){
			if($_SESSION['email_error']!=''){
			?>
			<div class="alert alert-warning">
			<strong id="emailerror"><?php echo $_SESSION['email_error'];?></strong>
			</div>	
			<?php
			$_SESSION['email_error']='';
			}
			}
			?>
		</div>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-3">
		<div class="">
			<div class="btn-group btn-group-dropdown">
			<br/>
			<!-- <p class="lead" style="display:inline; padding-top:5px; float:left; padding-right:15px;">School/College Year</p> -->
				<select id="school_year" name="school_year" class="btn btn-primary dropdown-toggle stdRegDropDownAdj" required>
				<option value="" id="fday" selected>Select School/College</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="18">18+</option>
				</select> 
			</div> 
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-3">
		<div class="">
			<div class="btn-group btn-group-dropdown">  
			<br/>
			<!--<p class="lead" style="display:inline; padding-top:5px; float:left; padding-right:15px;">Gender</p>-->
			<select name="gender" id="gender" class="btn btn-primary dropdown-toggle stdRegDropDownAdj" required>
			<option id="fgender" value="">Select Gender</option>
			<option>Male</option>
			<option>Female</option>
			</select>
			</div>
		</div>
	</div>
</div>

<div class="row">	
	<div class="col-sm-6" >
	</br>
	<p class="lead" style="display:inline">
	<i class='fa fa-check-circle-o'></i> Create yourself a User name </p>
	<input pattern=".{4,50}" class="form-control" type="text" name="userid" id="userid" placeholder="Create UserId" onkeypress = "return IsAlphaNumeric(event,this.id);" ondrop="return false;" onpaste="return false;" onchange="useridcheck(this.value)"  title="Minimum 4  Chracters Required" required/>
	<b><p id="userids" style="display:none;color:red;">Special characters not allowed</p></b>

	</br>
	<?php

	if(isset($_SESSION['userid_error'])){
	if($_SESSION['userid_error']!=''){
	?>
	<div class="alert alert-warning">
	<strong><?php echo $_SESSION['userid_error'];?></strong> </div>	
	<?php
	$_SESSION['userid_error']='';
	}
	}
	?>			  
	</div>
		<div class="col-sm-6" >
		</div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-sm-6">
	</br>
	<p class="lead" style="display:inline">
	<i class='fa fa-check-circle-o'></i> Choose a password between 8 and 20 characters long </p>
	<input pattern=".{8,20}" class="form-control" type="password" name="password" id="password" maxlength="20" min="8" placeholder="Password" required  title="Minimum 8 and Maximum 20 Chracters Required"/> 
	</br>
	<b><p id="passwords" style="display:none;color:red;">Special characters not allowed</p></b>
	</div>

	<div class="col-xs-12 col-sm-12 col-sm-6" >
	</br>
	<p class="lead" style="display:inline">
	<i class='fa fa-check-circle-o'></i> Type your password again </p>
	<input pattern=".{8,20}" class="form-control" type="password" name="re_password" id="re_password" maxlength="20" min="8" placeholder="Re-Enter Password" required title="Minimum 8 and Maximum 20 Chracters Required"/>
	</br>
	<b><p id="re_passwords" style="display:none;color:red;">Special characters not allowed</p></b>
	<div class="alert alert-warning" id="std_passmtch_error" style="display:none;">
		<strong>Re-enter password not match</strong>
	</div>	
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-sm-12"> 
	<label class="checkbox">
	<input type="checkbox" data-toggle="checkbox" name="trm_cond" id="trm_cond" onchange="student_terms()"/>
	<span>I have read and agree to Worktaster's <a href="../term_condition.php">Terms & Conditions. </a></span>
	</label>
	<p id="checkboxerror" style="display:none; color:white;">
		<a href="../term_condition.php" style="color:#c00"><i class="fa fa-hand-o-right"></i> Accept Worktaster term and condition checkbox</a>
	</p>
	</div>
</div>

<!--
<div class="col-xs-12 col-sm-12 col-sm-9" >
<br/>
<input data-toggle="checkbox" type="checkbox" name="trm_cond" id="trm_cond" value="unselected">  I have read and agree to Worktaster's Terms & Conditions
</div>
-->
<div class="row">
	<div class="col-xs-12 col-sm-12 col-sm-12">
		</br>
		<label class="checkbox">
		<input data-toggle="checkbox"  type="checkbox" name="second_trm_cond" id="second_trm_cond" value="selected" checked/>
		<span>Yes, send me regular updates about Worktaster.</span>
		</label>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-sm-12">
		<div class="" style="margin-bottom:15px;">
		<input class="btn btn-block btn-success btn-embossed " type="submit" name="student" id="submit" value="Register" style="color:#fff;" />
		</div>
	</div>
</div>

</form>
</div>

</div>
</div>

<?php
include('../footer.php');
?>
