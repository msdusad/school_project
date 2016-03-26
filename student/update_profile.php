<?php
include('studentheader.php');
include('../classes/student_fetched_data.php');
?>
<head>



	 
<!-- script for  -->
<script type="text/javascript">
		
	// code for password update	


    function oldcheck(first){		
		
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
            document.getElementById("dbpassmatch").innerHTML=res;
            }
          }
        xmlhttp.open("GET","../classes/old_pass_match.php?first="+first,true);
        xmlhttp.send();
        }

                //end hear
    
      function rechecking(){
		
		var new_pass = document.change_password.new_password.value;
       var re_new_pass = document.change_password.re_password.value;
		var first = document.change_password.old_password.value;
            if (re_new_pass != new_pass) {
                //alert(" Re-Password Not Match");
				document.getElementById("PassError").style.display="block";
                re_new_pass.focus;
                return false;
            }
          else{
		document.getElementById('PassError').style.display="none";
              return true;
          }
      }
        

    </script>
</head>

<div class="col-xs-12 col-sm-12 col-md-9" id="stdUpdateProfile-form">

<h1><i class="fa fa-check-circle"></i> Welcome to Update Profile</h1>

<div class="row">
	<div class="col-md-8 empDbTitle">
		<a href="studentdashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a>
	</div>
	<div class="col-md-4 empDbDateStrip">    
		<span><i class="fa fa-calendar"></i> <?php echo $viewdashdate;?></span>
	</div>
</div>


<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="row">
	<div class="col-md-12">
	<div class="">
		<br>

		<ul class="nav nav-tabs">
		<li ><a href="view_profile.php">Overview</a></li>
		<li class="active"><a href="update_profile.php">Update Profile</a></li>
		<li><a href="school_edit.php">Your School/College</a></li>
		<li><a href="preferences.php">Your Preferences</a></li>
		</ul>
	</div>
	</div>
	</div>
	
    <div class="row">
		 <div class="col-xs-12 col-sm-12 col-md-3">
        	<div class="list-group list-group-margingAdj" style="font-size:15px;">
            <a href="#"   id="basic" onclick="showdiv(this.id)" class="list-group-item">Basic Information</a>
            <a href="#"  id="pic" onclick="showdiv(this.id)" class="list-group-item item"> Profile Pic</a>
            <a href="#"   id="passchange" onclick="showdiv(this.id)" class="list-group-item"> Change Password</a>
			</div>
		</div>

        <div class="col-xs-12 col-sm-12 col-md-9" >


           <?php
if(isset($_GET['sucess'])){
    if($_GET['sucess']=='yes'){
?>
		<div class="alert alert-sucess"  id="pass-sucess">
  <h3><strong style="color:red;">Password Updated Sucessfully</strong></h3> </div>
     <?php
}
if($_GET['sucess']=='no'){
?>
		<div class="alert alert-sucess"  id="pass-sucess">
  <h3><strong style="color:red;">Old Password Not Match</strong> </h3></div>
     <?php
}
}
    ?>




		
		<!-- Start Hear For Basic Detail Div -->
        <div id="basicdetails" class="stdWelcomeBlock">
		<form method="post" action="../classes/student_profile_complete.php" name="registration_form" enctype="multipart/form-data">
		<table class="table"  >

		<div class="row">
		<br>
		<h3><i class='fa fa-user'></i> Personal Information</h3>


		<hr style="border-top:1px dashed lightgray;" >

		<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label style="margin-left: 13px;">Title </label>
		</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6">

	<select id="school_year" name="title_name" class="btn btn-primary" >
		<?php if($title!=''){?>
		<option><?php echo $title ;?></option>
		<?php }
		else{
		echo '<<option value="" id="" selected>Select Title</option>';
		}
		?>     
                             
		
				
				<option >Mr</option>
				<option >Ms</option>
				<option >Mrs</option>
				<option >Miss</option>
				
				</select> 
		
		</div>
		
		</div>

		<hr style="border-top:1px dashed lightgray;" >
		<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
		<label>First Name</label>
		</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="" id="stdUpdateProfile">
		<input type="text" name="first_name" id="first_name" value="<?php echo $first_name;?>" required>
		</div>
		</div>
		</div>

		<hr style="border-top:1px dashed lightgray;" >

		<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
		<label>Last Name</label>
		</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="" id="stdUpdateProfile">
		<input type="text" name="last_name" id="last_name" value="<?php echo $last_name;?>">
		</div>
		</div>
		</div>

		<hr style="border-top:1px dashed lightgray;" >

		<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>School College </label>
		</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6">

	<select id="school_year" name="school_year" class="btn btn-primary" >
		<?php if($school_year!=''){?>
		<option><?php echo $school_year ;?></option>
		<?php }
		else{
		echo '<<option value="" id="fday" selected>Select School/College</option>';
		}
		?>     
                             
		
				
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

		
		<hr style="border-top:1px dashed lightgray;" >
		
		<div class="row">				
			<div class="col-xs-12 col-sm-12 col-md-6">
			<div class="">
			<label>Gender</label>
			</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
			<div class="">
			<select class="btn btn-primary" name="gender" id="gender" required>
			<?php if($gender!=''){?>
			<option><?php echo $gender ;?></option>
			<?php }
			else{
			echo '<option value="">Please Select</option>';
			}				
			?>
			<option>Male</option>
			<option>Female</option>
			</select>
			</div>
			</div>
		</div>
		
		<hr style="border-top:1px dashed lightgray;" >		

		<div class="row">
			<h3><i class='fa fa-send'></i> Contact Information</h3>	
			<hr style="border-top:1px dashed lightgray;" >			
			<div class="col-xs-12 col-sm-12 col-md-6">
			<div class="">
			<label>Town/City</label>
			</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
			<div class="" id="stdUpdateProfile">
			<input type="text" name="city" id="city" value="<?php echo $city;?>"/>
			</div>
			</div>
		</div>

		<hr style="border-top:1px dashed lightgray;" >
		
		<div class="row">	
			<div class="col-xs-12 col-sm-12 col-md-6">
			<div class="">
			<label>Email</label>
			</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
			<div class="" id="stdUpdateProfile">
			<input type="text" name="email" id="email" pattern="^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+" value="<?php echo $email?>" required>
			</div>
			</div>
		</div>
		
		<hr style="border-top:1px dashed lightgray;" >
		
		<div class="row">				
			<div class="col-xs-12 col-sm-12 col-md-6">
			<div class="">
			<label>Phone</label>
			</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
			<div class="" id="stdUpdateProfile">
			<input type="text" name="primery_tel" id="primery_tel" maxlength="15"  value="<?php echo $primery_tel_no;?>" onkeypress="return isNumberKey(event)">
			</div>
			</div>
		</div>

		<hr style="border-top:1px dashed lightgray;" >

		<div class="row">				
			<div class="col-xs-12 col-sm-12 col-md-6">
			<div class="">
			<label>Personal Website</label>
			</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
			<div class="" id="stdUpdateProfile">
			<input type="text" name="website" id="website"  value="<?php echo $website;?>">
			</div>
			</div>
		</div>

		<hr style="border-top:1px dashed lightgray;" >
		
		<div class="row">				
			<div class="col-xs-12 col-sm-12 col-md-6">
			<div class="">
			<input class="btn btn-primary update_profile_editBtn"  type="submit" name="std_profile_submit" value="Update">
			</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
			<div class="">
			<input class="btn btn-primary update_profile_editBtn"  type="submit" name="cancel" id="cancel" value="Cancel" onclick="javascript:history.go(-1)">
			</div>
			</div>
		</div>

		<hr style="border-top:1px dashed lightgray;" >

<!--
		<table>
		<tr> <td>Home Address </td><td> <textarea type="text" name="address" id="address" rows="8" cols="30" style="height:110px;width:97%;" ><?php //echo $home_address;
		?> </textarea></td></tr> 

		<tr><td> Region </td>

		<td><input type="text" name="region" id="region" value="<?php //echo $region;?>" ></td></tr>

		<tr><td> Postal Code</td>

		<td><input type="text" name="postal_code" id="postal_code" value="<?php //echo $postal_code;?>"></td></tr>
		</table>

-->	        
		</form>
		</table>
		</div>
		<!-- End Hear For Basic Detail Div -->

		<!-- Start Hear For profilepic Div -->
		<div id="profilepic" class="stdWelcomeBlock" style="display:none;">
		<form method="post" action="../classes/student_profile_complete.php" name="profile_pic" enctype="multipart/form-data" >
		<br>
		<div class="row">	
		<h3><i class='fa fa-user'></i> Profile Picture</h3>
		<hr style="border-top:1px dashed lightgray;"/>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="update_profile_updatePic">
					<img name="image5" id="image5" style="width:150px; height:150px; border:1px solid lightgray;" src="student_docs/profile_photo/<?php echo $profile_pic;?>">
				</div>
			</div>
		</div>
		
		<hr style="border-top:1px dashed lightgray;"/>
		
		<div class="row">

				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="update_profile_updatePic">
					<label>Select A Picture</label>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="update_profile_updatePic">
						<input type="file" name="profile_image" id="profile_image" title="Select" required>
					</div>
				</div>
		</div>

		
		<hr style="border-top:1px dashed lightgray;"/>

		<div class="row">				
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="">
					<input class="btn btn-primary update_profile_editBtn" type="submit" name="profile_pic" value="Upload">
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="">
					<input class="btn btn-primary update_profile_editBtn" type="submit" name="cancel" value="Cancel" onclick="javascript:history.go(-1)">
				</div>
			</div>
		</div>

		</form>

		</div>
		<!-- End Hear  profilepic Div -->

		<!-- Change Password  Section Started-->
		<div id="changepass" class="stdWelcomeBlock" style="display:none;">
		
		<form role="form" method="post" action="../classes/pass_update.php"  name="change_password" onsubmit="return  rechecking();">
		<br>
		<div class="row">
			<div class="">
				<h3><i class='fa fa-lock'></i> Change Password</h3>
				<hr style="border-top:1px dashed lightgray;"/>
				<p id="dbpassmatch" style="color:red; text-align:center; margin-bottom:15px;"></p>
				<div class="col-xs-12 col-sm col-md-6">
					Old Password
				</div>
				<div class="col-xs-12 col-sm col-md-6 stdUpdateProfile_changePass">
					<input type="password" name="old_password"  id="old_password" onchange="oldcheck(this.value)"  minlength="8" maxlength="20" required>
				</div>
			</div>
		</div>
		
		<hr style="border-top:1px dashed lightgray;"/>

		
		<div class="row">
			<div class="">			
				<div class="col-xs-12 col-sm-12 col-md-6">
				New Password
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 stdUpdateProfile_changePass">
					<input type="password" name="new_password" id="new_password" maxlength="20" minlength="8" required >
				</div>
			</div>
		</div>

		<hr style="border-top:1px dashed lightgray;"/>

		<div class="row">
			<div class="">		
				<div class="col-xs-12 col-sm-12 col-md-6">
					Re-Type New Password
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 stdUpdateProfile_changePass">
					<input type="password" name="re_password" id="re_password" maxlength="20" minlength="8" required >
				</div>
			</div>
		</div>
		
		<hr style="border-top:1px dashed lightgray;"/>
		<strong style="display:none; color:red;" id="PassError">Re-Enter Password Don't Match <br><br></strong>

		
		<div class="row">	
			<div class="col-xs-12 col-sm-12 col-md-6">
			<div class="">
			<button class="btn btn-primary update_profile_editBtn"  name="password_update" type="submit">Update Password</button>
			</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
			<div class="">		
			<input class="btn btn-primary update_profile_editBtn" type="submit" name="cancel" value="Cancel" >
			</div>
			</div>
		</div>

		
		</form>
		</div>
		<!-- End Hear  passwoed Update Div -->
		
		</div>


		</div>
    
</div>
</div>

<?php
include('studentfooter.php');

?>