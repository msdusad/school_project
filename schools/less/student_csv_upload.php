<?php include('schoolheader.php'); ?>

<head>
	<script type="text/javascript" src="../js/validation.js"></script>


</head>
<div class="col-xs-12 col-sm-12 col-md-9" id="add_employer-form">

<div class="row">
<div class="col-md-12">
<br>
<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<h2><i class="fa fa-graduation-cap"></i> Welcome to Add Student</h2>
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


<form action="../classes/school/add_student_csv.php"  method="post" enctype="multipart/form-data">
<br>
<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="">
			<h3><i class='fa fa-graduation-cap'></i> Student Bulk Upload</h3>
		</div>
	</div>

</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>Upload CSV File</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input type="file" name="csv_file" required>
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input class="btn btn-primary"  type="submit" name="add_csv_student" value="Upload"/>
		</div>
	</div>
</div>

</form>

<hr style="border-top:1px dashed lightgray;"/>

	</div>
	</div>



<?php include( 'schoolfooter.php'); ?>