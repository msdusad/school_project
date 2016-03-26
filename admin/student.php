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
	<h1>Add Student</h1>

	<div class="row">

		<div class="col-md-8 empDbTitle">
			<i class="fa fa-dashboard"></i> Dashboard
		</div>

		<div class="col-md-4 empDbDateStrip">
			<span><i class="fa fa-calendar"></i> Monday, 24th November 2014</span>
		</div>

	</div>

	<div class="row">
		<!-- hear manage application -->
		<div class="col-md-9" style="width:100%;">
			<br>
			<form action="../classes/school_profile_db.php" id="add_student" method="post" enctype="multipart/form-data">
				<table class="table ">
					
     <tr>
                   
                            <h1>Add Student</h1>
                       
                    </tr>
  
                    <tr>
                        <td>First Name </td><td>
                            <INPUT TYPE="text" NAME="first_name" placeholder="First Name" required>
                        </td>
                        </tr>
     <tr>
                        <td>Last Name </td><td>
                            <INPUT TYPE="text" NAME="last_name" placeholder="Last Name" required>
                        </td>
                        </tr>
    
     <tr>
                        <td>Current Form </td><td>
                            <INPUT TYPE="text" NAME="current_form" placeholder="Current Form" required>
                        </td>
                        </tr>
    <tr><td>Gender</td><td>
        <select class="btn btn-primary" name="gender" required>
            <option>Please Select</option>
            <option>Male</option>
            <option>Female</option>
        </select>
        
    </td></tr>
    
      <tr>
                        <td>Email </td><td>
                            <INPUT TYPE="email" NAME="email" placeholder="Email" required>
                        </td>
                        </tr>
    
    
     <tr><td><input class="btn btn-primary"  type="submit" name="add_student" value="Add Student & Send Invitation"  style="margin-left:200px;"/></td><td><input class="btn btn-danger" type="submit" value="Cancel" onclick="return restform();"></td></tr>
				</table>


			</form>


		</div>

		<!-- End Hear -->

	</div>



<?php include( 'schoolfooter.php'); ?>