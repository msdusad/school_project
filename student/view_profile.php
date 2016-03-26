<?php
include('studentheader.php');
include('../classes/student_fetched_data.php');
?>

<div class="col-xs-12 col-sm-12 col-md-9">
<h1><i class="fa fa-briefcase"></i> Welcome to View Profile</h1>

<div class="row">
	<div class="col-md-8 empDbTitle">
		<a href="studentdashboard.php"><i class="fa fa-check-circle"></i> Dashboard</a>
	</div>
	<div class="col-md-4 empDbDateStrip">    
		<span><i class="fa fa-calendar"></i> <?php echo $viewdashdate;?></span>
	</div>
	</div>
	
<div class="row" id="view_profile-form">
	<div class="col-xs-12 col-sm-12 col-md-12">

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-12">	
		<div class="">
			<br>

			<ul class="nav nav-tabs">
			<li class="active"><a  href="view_profile.php">Overview</a></li>
			<li><a href="update_profile.php">Update Profile</a></li>
			<li><a href="school_edit.php">Your School/College</a></li>
			<li><a href="preferences.php">Your Preferences</a></li>
			</ul>
			
			<div class="col-sm-12 col-md-4">
            <h3 class="demo-componant-title"></h3>
            <div class="tile tile-profile boxOneGrad">
           <!-- <h3>My Profile</h3>-->
			<div>
            <img src="<?php if($pic!=''){echo "student_docs/profile_photo/".$pic;}else{echo "img/empProPic.png";}?>" height="150" width="150"  alt="Please select" style="padding:5px;"/>
			<br>
			<p style="font-size:15px;"><?php echo $title." ".$fname." ".$lname; ?></p>
			</div>	
			<div style="text-align:left; margin-top:90px;">
            <h3 align="center">Preferences</h3>
				
			<?php if($all=='yes'){ ?>
	        <p><i class='fa fa-check'>Banking and finance</i></p><br>
			<p><i class='fa fa-check'>Retail</i></p><br>
			<p><i class='fa fa-check'>Construction</i></p><br>
			<p><i class='fa fa-check'>Legal</i></p><br>
			<p><i class='fa fa-check'>Medical</i></p><br>
			<p><i class='fa fa-check'>Other</i></p><br>
			<?php
			}
			else{
				 
				if($banking_finance=='checked'){
				 echo "<p><i class='fa fa-check'></i> Banking and finance</p><br>";
				}

			if($retail=='checked'){
				 echo "<p><i class='fa fa-check'></i> Retail</p><br>";
				}
				if($legal=='checked'){
				 echo "<p><i class='fa fa-check'></i> Legal</p><br>";
				}
			if($construction=='checked'){
				 echo "<p><i class='fa fa-check'></i> Construction</p><br>";
				}
				if($medical=='checked'){
				 echo "<p><i class='fa fa-check'></i> Medical</p><br>";
				}
				if($other=='checked'){
				 echo "<p><i class='fa fa-check'></i> Other</p><br>";
				}
			}

			?>
			<a class="btn btn-primary view_profile_editBtn" href="preferences.php">Edit</a>
			</div>	
            </div>
			
			</div>


		<div class="col-xs-12 col-sm-12 col-md-8">
			<div class="stdWelcomeBlock">
			<br>
			<h3><i class="fa fa-user"></i> <?php echo $title." ".$fname." ".$lname; ?></h3>
			<hr style="border-top:1px dashed lightgray;" >
			<div class="row">				
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div id="contactdetail">
				<h4><i class='fa fa-send'></i> Contact Detail</h4>
				<br>
				<?php
				if($address!=''){
				echo "<p><i class='fa fa-home'></i> $address</p><br>";
				}
				if($city!=''){
				 echo "<p><i class='fa fa-map-marker'></i> $city</p><br>";
				}
				if($region!=''){
				echo "<p><i class='fa fa-map-marker'></i> $region</p><br>";
				}
				if($postal_code!=''){
				echo $postal_code."<br><br>";
				}		 
				   if($mob!=''){
				echo "<p><i class='fa fa-phone'></i> $mob</p><br>";
				}
				 if($email!=''){
				echo "<p><i class='fa fa-envelope'></i> $email</p><br>";
				}
				if($website!=''){
				echo "<p><i class='fa fa-globe'></i> $website</p><br>";
				}
				?>		
				<p><a class="btn btn-primary view_profile_editBtn" href="update_profile.php">Edit</a></p><br>
				</div>
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div id="schooldetail">
				<h4><i class='fa fa-building'></i> School/College Detail</h4>
				<br>
				<?php
				if($school_name!=''){
				echo "<p><i class='fa fa-bank'></i> $school_name</p><br>";
				}
				if($school_address!=''){
				echo "<p><i class='fa fa-home'></i> $school_address</p><br>";
				}
				if($school_city!=''){
				}
				 echo "<p><i class='fa fa-home'></i> $school_city</p><br>";
				if($school_region!=''){
				echo "<p><i class='fa fa-home'></i> $school_region</p></br>";
				}
				if($school_pcode!=''){
				echo "<p><i class='fa fa-home'></i> $school_pcode.</p><br>";
				}
				?>		
				
				<p><a class="btn btn-primary view_profile_editBtn"  href="school_edit.php">Edit</a></p>
				
				</div>
			</div>
			</div>

			
			<div id="view_profile_applicationList">
			<h3><i class="fa fa-file-text-o"></i> Applications</h3>
			<hr style="border-top:1px dashed lightgray;"/>
			<table class="table">
				<thead style="background-color:#1E90FF;">
					<th>Date</th>
					<th>Job Title</th>
					<th>Status</th>
				</thead>
			<?php
          $app=mysql_query("select a.apply_time,a.status,b.vacancy_title from job_applied a,create_vacancy b where a.student_userid='$std_user' and a.company_userid=b.userid and a.vacancy_time=b.automatic_date order by a.apply_time desc;");
if($app){
	while($row=mysql_fetch_array($app)){
	
		?>
			
				<tr>
					<td><?php echo $row['apply_time'];?></td>
					<td><?php echo $row['vacancy_title'];?></td>
					<td><?php echo $row['status'];?></td>
				</tr>
			
			<?php
		
		
	}

}
else{echo "Error in application Fetch".mysql_error();}
?>
					</table>	
				
			</div>
        </div>
        
       
			</div>

	
		
		</div>
	</div>
</div>

	</div>
</div>


	
        
         
        
    
<?php
include('studentfooter.php');
?>