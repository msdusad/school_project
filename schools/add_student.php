<?php include('schoolheader.php'); ?>

<head>
	<script type="text/javascript" src="../js/validation.js"></script>
	<script>
	function restform(){
	document.getElementById("add_student").reset();
		return false;
	}
	
</script>

</head>

<div class="col-xs-12 col-sm-12 col-md-9">

<div class="row" id="add_student-form">
<div class="col-xs-12 col-sm-12 col-md-12">
<br>
	<div class="row">				
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="">
				<h2><i class="fa fa-user"></i> Welcome to Add Student</h2>
			</div>
		</div>
	</div>

<br>

	<div class="row">
	<div class="col-md-8 empDbTitle">
			<a href='schooldashboard.php'><i class="fa fa-dashboard"></i> Dashboard</a>
	</div>
	<div class="col-md-4 empDbDateStrip">
	<span><i class="fa fa-calendar"></i><?php echo " ".$viewdashdate;?></span>
	</div>
	</div>

	<form action="../classes/school_profile_db.php" id="add_student" method="post" enctype="multipart/form-data">
<br>
	<div class="row">				
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="">
				<h3><i class="fa fa-user"></i> Add Student</h3>
				<a href="student_csv_upload.php" class="btn btn-primary" style="margin-left:50%;">CSV File Upload</a>
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
			<input TYPE="text" name="first_name" placeholder="First Name" required>
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
			<input TYPE="text" name="last_name" placeholder="Last Name" required>
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>	

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>Current Form</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input type="text" name="current_form" placeholder="Current Form" required>
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>Gender</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<select class="btn btn-primary" name="gender" required>
				<option>Please Select</option>
				<option>Male</option>
				<option>Female</option>
			</select>
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>




<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>School/Collage Year</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<select class="btn btn-primary" name="school_year" required>
				<option value="" selected>Select School/College</option>
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

<hr style="border-top:1px dashed lightgray;"/>



<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>Email</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input type="email" name="email" placeholder="Email" required>
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class=""><input class="btn btn-primary"  type="submit" name="add_student" value="Add Student & Send Invitation"/>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class=""><input class="btn btn-danger" type="submit" value="Cancel" onclick="return restform();">
		</div>
	</div>
</div>




<hr style="border-top:1px dashed lightgray;"/>
	</form>



	
</div>
</div>



<?php include( 'schoolfooter.php'); ?>