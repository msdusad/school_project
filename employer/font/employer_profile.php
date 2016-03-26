<?php
include('employerheader.php');
include('../classes/employer_fetched_data.php');
?>
<head>
	<script type="text/javascript" src="../js/validation.js"></script>
</head>

<div class="col-xs-12 col-sm-12 col-md-9" id="employer_edit_profile-form">

<?php include('returnToDashboard.php');?>

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
</br>
<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="">
			<h2><i class='fa fa-user'></i> Edit Profile</h2>
		</div>
	</div>
</div>
</br>
<div class="row">

	<div class="col-md-8 empDbTitle">
		<i class="fa fa-dashboard"></i> Dashboard
	</div>

	<div class="col-md-4 empDbDateStrip">
		<span><i class="fa fa-calendar"></i> <?php echo " ".$viewdashdate;?></span>
	</div>

</div>

<br>

<form action="../classes/employer_edit_save.php" method="post" enctype="multipart/form-data" name="employee_registration" onsubmit="return employee_registration_validitaion();">

<div class="alert alert-success">
<i class="fa fa-check-circle"></i> <b>Attention! Please </b> This is your public profile and will be visible to the public.
</div>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="">
			<h3><i class='fa fa-user'></i> Profile Edit</h3>
		</div>
	</div>
</div>
<hr style="border-top:1px dashed lightgray;"/>
<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
		<label>Company Name</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
		<input type="text" name="company_name" value="<?php echo $company_name ;?>" required>
		</div>
	</div>
</div>
<hr style="border-top:1px dashed lightgray;"/>
<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>Company Address</label> 
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<textarea type="text" rows="8" cols="35" name="company_address" required> <?php echo $company_address;?></textarea>
		</div>
	</div>
</div>


<hr style="border-top:1px dashed lightgray;"/>
<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>Company Description</label> 
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<textarea type="text" rows="8" cols="35" name="company_dis" required><?php echo $company_description;?></textarea>
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>
<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>Why Do Work Experience with Us</label> 
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
<textarea type="text" rows="8" cols="35" name="why_do_work_exp" required><?php echo $why_do_work_experience;?></textarea>
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>First Name</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input type="text" name="first_name" value="<?php echo $company_fname;?>" required> 
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>Last Name</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input type="text" name="last_name" value="<?php echo $company_lname;?>" required> 
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>Region</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input type="text" name="region" value="<?php echo $company_region;?>" required> 
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>Title</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input type="text" name="com_title" value="<?php echo $company_title;?>" required> 
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>Email</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input type="email" name="email" value="<?php echo $company_email;?>" required>
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>City</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input type="text" name="company_city" value="<?php echo $company_city;?>" required> 
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>Postal Code</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input type="text" name="company_postal_code" value="<?php echo $company_postal_code;?>" required> 
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="alert alert-info">
<i class="fa fa-check-circle"></i> <b>Picture Dimension!</b> Don't upload picture more than 150px in width and height.
</div>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>Logo</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<img class="emplayer-proPriUpload" src="logo/<?php echo $logo;?>"><input type="text" name="old_logo" value="<?php echo $logo;?>" style="display:none;">
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>Company Logo</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			 <input type="file" name="logo" id="logo" accept="image/*">
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>Website</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input type="text" name="company_website"  value="<?php echo $company_website;?>">
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>Main Telephone</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input type="text" name="company_telephone"  value="<?php echo $company_telephone;?>" required>
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input class="btn btn-primary" type="submit" name="employer_edit" value="Save">
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input class="btn btn-danger" type="submit" value="Cancel" onclick="history.go(-1);">
		</div>
	</div>
</div>

 
</form>



          




        </div>

        <!-- End Hear -->

    </div>
<?php
include('employerfooter.php');

?>