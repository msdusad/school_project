<?php include('schoolheader.php'); 
include('../classes/school_reg_fetched.php');
?>

<head>
<script type="text/javascript" src="../js/validation.js"></script>
<script>
	
</script>

</head>
<div class="col-xs-12 col-sm-12 col-md-9" id="school_profile_edit-form">
 
<div class="row">
<div class="col-md-12">
</br>
<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="">
			<h2><i class="fa fa-check-circle"></i> Welcome to Edit Profile</h2>
		</div>
	</div>
</div>
</br>

<div class="row">

<div class="col-md-8 empDbTitle">
		<a href='schooldashboard.php'><i class="fa fa-dashboard"></i> Dashboard</a>
</div>

<div class="col-md-4 empDbDateStrip">
<span><i class="fa fa-calendar"></i><?php echo " ".$viewdashdate;?></span>
</div>

</div>


<form action="../classes/school_profile_db.php" method="post" enctype="multipart/form-data">
<br>
<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="">
			<h3><i class="fa fa-check-circle"></i> Edit Profile</h3>
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>
<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>School/college Name</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class=""><input type="text" name="school_name" value="<?php echo $school_name ;?>">
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>School/college Address</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
		<input type="text" rows="8" COLS="25" name="school_address" value="<?php echo $school_address;?>"> 
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
		<div class=""><input type="text" name="first_name" value="<?php echo $school_fname;?>" required> 
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
			<input type="text" name="last_name" value="<?php echo $school_lname;?>" required> 
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
			<input type="text" name="region" value="<?php echo $school_region;?>" required> 
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
			<input type="text" name="school_title" value="<?php echo $school_title;?>" required> 
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
			<input type="email" name="email" value="<?php echo $school_email;?>" required> 
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>Contact</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input type="text" name="contact" value="<?php echo $contact;?>" required> 
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>School/college City</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input type="text" name="school_city" value="<?php echo $school_city;?>">
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>School/college Postal Code </label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input type="text" name="school_postal_code" value="<?php echo $school_postal_code;?>"> 
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
			<label>Profile Picture</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<img style="height:150px; width:150px; border:1px solid lightgray; border-radius:6px; overflow:hidden; padding:3px;" src="logo/<?php echo $school_logo;?>">
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>School/college Logo</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
		<input type="file" name="school_logo" id="school_logo" style="padding-top:5px;"><input type="text" name="imageoldname" value="<?php echo $school_logo;?>" style="display:none;">
		</div>
	</div>
</div>





<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>School/college Website</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input type="text" name="school_website"  value="<?php echo $school_website;?>">
		</div>
	</div>
</div>


<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>School/college Main Telephone</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input type="text" name="school_telephone"  value="<?php echo $school_telephone;?>"> 
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="">
			<input  type="submit" name="school_profile" value="Save" class="btn btn-primary"/>
		</div>
	</div>
</div>




</form>


</div>

<!-- End Hear -->

</div>

<?php include( 'schoolfooter.php'); ?>