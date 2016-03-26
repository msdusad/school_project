<?php
include('studentheader.php');
include('../classes/student_fetched_data.php');
?>
<head>
	 <script type="text/javascript" src="../js/validation.js"></script>
<script>
	      $(document).ready(function() {
    $('#all').click(function(event) {  //on click 
        if(this.checked) { // check select status
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1"               
            });
        }else{
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                       
            });         
        }
    });
    
});
		</script>
</head>
<div class="col-xs-12 col-sm-12 col-md-9" id="std-preference-form">
<h1><i class="fa fa-briefcase"></i> Welcome to Preferences</h1>

<div class="row">
	<div class="col-md-8 empDbTitle">
		<a href="studentdashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a>
	</div>
	<div class="col-md-4 empDbDateStrip">    
		<span><i class="fa fa-calendar"></i>  <?php echo $viewdashdate;?></span>
	</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">    
<div class="row">
	
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
	<div class="">
	<br>
	<ul class="nav nav-tabs">
		<li ><a href="view_profile.php">Overview</a></li>
		<li ><a href="update_profile.php">Update Profile</a></li>
		<li><a href="school_edit.php">Your School/College</a></li>
		<li class="active"><a href="preferences.php">Your Preferences</a></li>
	</ul>
	</div>
</div>
</div>

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12" >

		<!-- Start Hear Div -->
        <div id="basicdetails" class="stdWelcomeBlock">

		<form method="post" action="../classes/student_profile_complete.php" name="registration_form" enctype="multipart/form-data" >
  
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
			<br>
				<h3><i class='fa fa-file-text'></i> Your preferences</h3>
				<p>Search preferences only show me vacancies that are</p>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-4">
				<div class="">
					<select class="btn btn-primary" name="vacaince_distance">
					<?php if($vacaince_distance!=''){?>
					<option><?php echo $vacaince_distance ;?></option>
					<?php }?>
					<option>5</option>
					<option>10</option>
					<option>20</option>
					<option>30</option>
					<option>40</option>
					<option>50</option>
					<option>80</option>
					<option>100+</option>
															 
					</select>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8">
			</div>
		</div>

		<div class="row">				
			<div class="col-xs-12 col-sm-12 col-md-12">
				<p>within miles of my home address only show me vacancies that are in the following industries (select all that apply):</p>
				<div class="">
					<label class="checkbox">
						<input type="checkbox" data-toggle="checkbox" name="all" id="all" value="yes" <?php echo $all;?>>All
					</label>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="">
					<label class="checkbox"> <input data-toggle="checkbox" class="checkbox1" type="checkbox" name="banking_finance" id="" value="checked" <?php echo $banking_finance ;?>>Banking and finance</label>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="">
					<label class="checkbox">  <input data-toggle="checkbox" class="checkbox1"  type="checkbox" name="retail"  value="checked" <?php echo $retail;?>>Retail</label>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="">
					<label class="checkbox"><input data-toggle="checkbox" class="checkbox1"  type="checkbox" name="construction"  value="checked" <?php echo $construction;?>>Construction</label>
				</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="">
					<label class="checkbox"> <input data-toggle="checkbox" class="checkbox1"  type="checkbox" name="legal"  value="checked" <?php echo $legal;?>>Legal</label>
				</div>
			</div>

		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="">
				<label class="checkbox">  <input data-toggle="checkbox" class="checkbox1" type="checkbox" name="medical"  value="checked" <?php echo $medical;?>>Medical</label>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="">
				<label class="checkbox">  <input data-toggle="checkbox" class="checkbox1" type="checkbox" name="other"  value="checked" <?php echo $other;?>>Other </label>
			</div>
		</div>
			
		</div>

		<div class="row">				
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="">
					<h3>Newsletter preferences</h3>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="">
					<label class="checkbox"> <input data-toggle="checkbox" type="checkbox" name="newsletter" id="" value="checked" <?php echo $newsletter;?>>Yes, send me Work Taster newsletters packed with tips for a successful work experience</label>
				</div>
			</div>
		</div>		
				
	
		<div class="row">	
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="">
					<input class="btn btn-primary update_profile_editBtn" type="submit" name="student_prefrences" value="Update Preferences">
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="">	
					<input class="btn btn-primary update_profile_editBtn" type="submit" name="" value="Cancel" onclick="javascript:history.go(-1)">
				</div>
			</div>
		</div>
		
        </form>             

        </div>
			<!-- End Hear  -->
			
        </div>
</div>
       
</div>
</div>
    
   
<?php
include('studentfooter.php');

?>