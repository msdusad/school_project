<?php include( 'employerheader.php'); 
$userid=$_GET[ 'userid']; 
$crtime=$_GET[ 'crt_time']; 
$sql=mysql_query("select * from employer_location where userid='$userid' and create_time='$crtime' "); 
if($sql){ 
	if($row=mysql_fetch_array($sql)){
		$company_name=$row[ 'company_name'];
		$loc_adress=$row[ 'location_address'];
		$typ_ofloc=$row[ 'type_of_location'];
		$loc_city=$row[ 'location_city']; 
		$loc_name=$row[ 'location_name'];
		$cont_title=$row[ 'contact_title'];
		$fname=$row[ 'contact_first_name']; 
		$lname=$row[ 'contact_last_name']; 
		$tel_no=$row[ 'contact_telephone']; 
		$email=$row[ 'conatct_email']; 
		$loc_postcode=$row[ 'location_postal_code'];
	}
} 
else{
	echo "error in query pass sql".mysql_error();
} 
?>

<head>
	<script type="text/javascript" src="../js/validation.js"></script>

</head>
<div class="col-xs-12 col-sm-12 col-md-9" id="edit_loc-form">
<?php include('returnToDashboard.php');?>
</br>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="">
			</br>
				<h2><i class='fa fa-bell'></i>  Edit Location</h2>
			</div>
		</div>
	</div>

</br>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-8 empDbTitle">
			<i class="fa fa-dashboard" style="padding"></i> Dashboard
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4 empDbDateStrip">
			<span><i class="fa fa-calendar"></i> <?php echo " ".$viewdashdate;?></span>
		</div>
	</div>

</br>


		<!-- hear manage application -->
<div class="col-xs-12 col-sm-12 col-md-12">

<form action="../classes/employer_edit_save.php?user=<?php echo $userid ;?>&tm=<?php echo $crtime ;?>" method="post">

<div class="row">				
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="">
				<h3><i class="fa fa-check-circle"></i> Location</h3>
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
			<input type="text" name="company_name" value="<?php echo $company_name; ?>" required>
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>Type of Location</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<select class="btn btn-primary" name="type_of_location" required>
				<option>
				<?php echo $typ_ofloc;?>
				</option>
				<option>Department</option>
				<option>Branch</option>
				<option>Subsidiary</option>
			</select>
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>Location Name</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input type="text" name="location_name" value="<?php echo $loc_name; ?>" required>
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="">
			<h3><i class='fa fa-check-circle'></i> Contact Person</h3>
		</div>
	</div>
		<div class="">
		</div>
	</div>
</br>
<div class="row">	

	<div class="col-xs-12 col-sm-12 col-md-4">
		<div class="">
			<select class="btn btn-primary" name="contact_title" required>
				<?php
if($cont_title!=''){
echo "<option> $cont_title</option>";
}
?>
			
			<option>Mr</option>
			<option>Mrs</option>
			<option>Miss</option>
			</select>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-4">
		<div class="">
			<input type="text" name="contact_first_name" placeholder="First Name" value="<?php echo $fname; ?>" required>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-4">
		<div class="">
			<input type="text" name="contact_last_name" placeholder="Last Name" value="<?php echo $lname; ?>">
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>Contact Email</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input type="text" name="contact_email" pattern="^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+" value="<?php echo $email; ?>" required>
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>Contact Telephone</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input type="text" name="contact_telephone" maxlength="15" value="<?php echo $tel_no; ?>" onkeypress="return isNumberKey(event)" required>
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>Location Address</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input type="text" name="location_address" value="<?php echo $loc_adress; ?>" required>
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>Location City</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input type="text" name="locatiom_city" value="<?php echo $loc_city; ?>" required>
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>Location PostalCode</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input type="text" name="location_postal_code" value="<?php echo $loc_postcode; ?>" required>
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input class="btn btn-primary" type="submit" name="update_employer_location" value="Update Location">
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input class="btn btn-primary" type="submit" name="location_cancel" value="Cancel" onclick="history.go(-1);">
		</div>
	</div>
</div>

</form>
<br>
</div>

		<!-- End Hear -->

	



	
<?php include( 'employerfooter.php'); ?>