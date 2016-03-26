<?php include( 'employerheader.php'); ?>

<head>
    <script type="text/javascript" src="../js/validation.js"></script>
    <script>
        function restform() {
            document.getElementById("create_location").reset();
            return false;
        }
    </script>

</head>
<div class="col-xs-12 col-sm-12 col-md-9" id="create_loc-form">

<?php include('returnToDashboard.php');?>
	

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="">
			</br>
				<h2><i class='fa fa-map-marker'></i>  Create Location</h2>
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

	</br>
	
    <div class="row">
        <!-- hear manage application -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <br>

 <form action="../classes/employer_edit_save.php" id="create_location" method="post">
                 

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class=""><h3><i class='fa fa-map-marker'></i> Create Location</h3>
		</div>
	</div>
</div>
<hr style="border-top:1px dashed lightgray;"/>
<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class=""><label>Company Name</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class=""><input type="text" name="company_name" value="<?php echo $company_title; ?>" required>
		</div>
	</div>
</div>
<hr style="border-top:1px dashed lightgray;"/>
<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class=""><label>Type of Location</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
		<select class="btn btn-primary" name="type_of_location" required>
		<option value="">Please Select</option>
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
		<div class=""><label>Location Name</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class=""><input type="text" name="location_name" required>
		</div>
	</div>
</div>
<hr style="border-top:1px dashed lightgray;"/>
<div class="row">	
	<div class="col-xs-12 col-sm-12 col-md-4">
		<div class=""><label>Contact Person</label>
		</div>
	</div>
</div>
<hr style="border-top:1px dashed lightgray;"/>	
<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-4">
		<div class="">
		<select class="btn btn-primary" name="contact_title" required>
		<option value="">Please Select</option>
		<option>Mr</option>
		<option>Mrs</option>
		<option>Miss</option>
		</select>
		</div>
	</div>
	
	<div class="col-xs-12 col-sm-12 col-md-4">
		<div class=""><input type="text" name="contact_first_name" placeholder="First Name" required>
		</div>
	</div>	
	<div class="col-xs-12 col-sm-12 col-md-4">
		<div class="">
			<input type="text" name="contact_last_name" placeholder="Last Name"/>
		</div>
	</div>
</div>
<hr style="border-top:1px dashed lightgray;"/>
<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class=""><label>Contact Email</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class=""><input  type="text" name="contact_email" pattern="^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+" required>
		</div>
	</div>
</div>
<hr style="border-top:1px dashed lightgray;"/>
<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class=""><label>Contact Telephone</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class=""><input type="text" name="contact_telephone" maxlength="15" onkeypress="return isNumberKey(event)" required>
		</div>
	</div>
</div>
<hr style="border-top:1px dashed lightgray;"/>
<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class=""><label>Location Address</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class=""><input type="text" name="location_address" required>
		</div>
	</div>
</div>
<hr style="border-top:1px dashed lightgray;"/>
<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class=""><label>Location City</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class=""><input type="text" name="locatiom_city" required>
		</div>
	</div>
</div>
<hr style="border-top:1px dashed lightgray;"/>
<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class=""><label>Location Postal Code</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class=""><input type="text" name="location_postal_code" required>
		</div>
	</div>
</div>
<hr style="border-top:1px dashed lightgray;"/>
<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class=""><input class="btn btn-primary" type="submit" name="employer_location" value="Create Location & Invite Contact">
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class=""><input class="btn btn-primary" type="submit" name="location_cancel" value="Cancel" onclick="return restform();">
		</div>
	</div>
</div>

            </form>

        </div>

        <!-- End Hear -->

    </div>

<?php include( 'employerfooter.php'); ?>