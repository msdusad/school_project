<?php
include('studentheader.php');
include('../classes/student_fetched_data.php');
?>
<head>
	 
</head>
<div class="col-xs-12 col-sm-12 col-md-9" id="stdSchoolEdit-form">

<h1><i class="fa fa-briefcase"></i> Welcome to Update School/College Profile</h1>

<div class="row">
	<div class="col-md-8 empDbTitle">
		<a href="studentdashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a>
	</div>
	<div class="col-md-4 empDbDateStrip">    
		<span><i class="fa fa-calendar"></i>  <?php echo $viewdashdate;?></span>
	</div>
</div>

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12" >

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="">
		<br>
		<ul class="nav nav-tabs">
			<li ><a href="view_profile.php">Overview</a></li>
			<li><a href="update_profile.php">Update Profile</a></li>
			<li  class="active"><a href="school_edit.php">Your School/College</a></li>
			<li><a href="preferences.php">Your Preferences</a></li>
		</ul>
		</div>
	</div>
</div>

	
<br>	
	<!-- Start Hear Div -->
	<form  method="post" action="../classes/student_profile_complete.php" name="registration_form" enctype="multipart/form-data" >
	<div id="basicdetails" class="stdWelcomeBlock">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<h3><i class='fa fa-bank'></i> Your School/College</h3>
		</div>
	</div>
	<hr style="border-top:1px dashed lightgray;"/>	
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6">
			<div class="">
				<label>School/College Name</label>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6">
			<div class="school_edit_input">
			<select name="school_name" class="btn btn-primary" required>
				
			
			<?php 
$query=mysql_query("select school_name from school_registration ;");
if($query && mysql_num_rows($query)>0){

if($school_name==''){
echo "<option value=''>Please Select</option>";

}
else{
echo "<option selected>$school_name</option>";

}

	while($sch=mysql_fetch_array($query)){
		$sch_name=$sch['school_name'];
echo "<option>$sch_name</option>";
	}
}

else{
?>
<option>Alderbrook School </option>
<option>Solihull College </option>

<?php
}
			?>
</select>

			</div>
		</div>
	</div>
<hr style="border-top:1px dashed lightgray;"/>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6">
			<div class="">
				<label>Address</label>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6">
			<div class="school_edit_input">
			<textarea type="text" wrap="physical" rows="6" cols="10" name="school_address" style="width:90%;"><?php echo $school_address;?></textarea>
			</div>
		</div>
	</div>
<hr style="border-top:1px dashed lightgray;"/>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6">
			<div class="">
				<label>City (optional)</label>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6">
			<div class="school_edit_input">
				<input type="text" name="school_city" value="<?php echo $school_city;?>">
			</div>
		</div>
	</div>
<hr style="border-top:1px dashed lightgray;"/>
	<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="">
				<h4><label><i class="fa fa-check-circle"></i> Contact</label></h4>
			</div>
		</div>
	</div>
<hr style="border-top:1px dashed lightgray;"/>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-3">
			<div class="">
				<label>Title</label>
					<select class="btn btn-primary" name="school_contact_sr">
						<?php if($school_contact_sr!=''){?>
						<option><?php echo $school_contact_sr ;?></option>
						<?php }

						else{
						echo '<option value="">Please Select</option>';
						}?>
						<option>Mr</option>
						<option>Mrs</option>
						<option>Ms</option>
					</select>    
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4">
			<div class="school_edit_input">
					<label>First Name</label>
					<input type="text" name="school_contact_fname"  value="<?php echo $school_contact_fname;?>"/>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-5">
			<div class="school_edit_input">
				<label>Last Name</label>
				<input type="text" name="school_contact_lname"  value="<?php echo $school_contact_lname;?>">
			</div>
		</div>
	</div>
	<!--
<hr style="border-top:1px dashed lightgray;"/>
	<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>Phone</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="school_edit_input">
			<input type="text" name="school_phone"  value="<?php echo $school_phone;?>"/>
		</div>
	</div>
</div>
-->
<hr style="border-top:1px dashed lightgray;"/>
	<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>Email</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="school_edit_input">
			<input type="text" name="school_email" pattern="^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+" value="<?php echo $school_email;?>">
		</div>
	</div>
</div>
<!-- <hr style="border-top:1px dashed lightgray;"/>
	<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>Website (optional)</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="school_edit_input">
			<input type="text" name="school_website"  value="<?php //echo $school_website;?>"/>
		</div>
	</div>
</div> -->
<hr style="border-top:1px dashed lightgray;"/>
	<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input type="submit" name="student_school_detail" value="Update" class="btn btn-primary school_edit_editBtn"/>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input type="submit" name="" class="btn btn-primary school_edit_editBtn" value="Cancel" onclick="javascript:history.go(-1)">
		</div>
	</div>
</div>
<hr style="border-top:1px dashed lightgray;"/>
<!--
	<table class="table " >
	<tr>
	<td>Region </td><td>
	<input TYPE="text" NAME="school_region" value="<?php //echo $school_region ;?>" >
	</td></tr>

	<tr>
	<td>Postal Code </td><td>
	<input type="text" name="school_postalcode" value="<?php //echo $school_postalcode;?>"> </td>
	</tr>
</table>
-->

	</form>

	<!-- End Hear Div -->

	</div>


	</div>
    </div>
   

<?php
include('studentfooter.php');

?>