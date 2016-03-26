<?php
include('../classes/connection.php');
session_start();
$std_user=$_SESSION['studentuserid'];
$sql=mysql_query("select * from student_profile a,student_school b,student_preferences c where a.userid='$std_user' and b.userid='$std_user' and c.userid='$std_user';");

if($sql){
while($row=mysql_fetch_array($sql)){
	// for student profile from student_profile table
           $fname=$row['first_name'];
	       $lname=$row['last_name'];
	$address=$row['home_address'];
	 $city=$row['city'];
	 $region=$row['region'];
	 $postal_code=$row['postal_code'];
	      $mob=$row['phone'];
	       $email=$row['email'];
	           $website=$row['website'];
	          $pic=$row['profile_picture'];
	// for school detail from student school table
	
	$school_name=$row['school_name'];
	$school_address=$row['school_address'];
	$school_city=$row['school_city'];
	$school_region=$row['school_region'];
	$school_pcode=$row['school_postalcode'];
	// student preferences data from preference table
	$all=$row['all_jobs'];
	$banking_finance=$row['banking_finance'];
	$retail	=$row['retail'];
	$legal=$row['legal'];
	$construction=$row['construction'];
	$medical=$row['medical'];
	$other=$row['other'];
}

}
else{echo "Error in query Pass".mysql_error();}

?>
<html>
	<head>
		<style>
			table,th,tr,td{
				border:2px solid black;
			padding:6px;
			}
		</style>
	</head>
	<body>
		<a href="student_cv.php">Student CV</a><br>
		<a href="view_all_vacancies.php"> View All Vacancies</a><br>
		<a href="my_applications.php"> My Applications</a><br>
		<a href="../classes/logout.php">Logout</a><br>
		<div class="right-side" style="position:absolute;">
			<h3>Profile Pic</h3>
			<img src="student_docs/profile_photo/<?php echo $pic;?>" height="100" width="100">
			<h3>Preferences</h3>
			<?php
if($all=='yes'){
?>
	        <p>Banking and finance</p>
			<p>Retail</p>
			<p>Construction</p>
			<p>Legal</p>
			<p>Medical</p>
			<p>Other</p>
			<?php
}
else{
     
	if($banking_finance=='checked'){
	 echo "<p>Banking and finance</p>";
	}

if($retail=='checked'){
	 echo "<p>Retail</p>";
	}
	if($legal=='checked'){
	 echo "<p>Legal</p>";
	}
if($construction=='checked'){
	 echo "<p>Construction</p>";
	}
	if($medical=='checked'){
	 echo "<p>Medical</p>";
	}
	if($other=='checked'){
	 echo "<p>Other</p>";
	}
}

?>

			<a href="student_profile.php">Edit</a>
		</div >
			
		<div class="overview" style="margin-left:20%;margin-top:10px;position:absolute;">
			<h3>Name - <?php echo $fname." ".$lname ;?></h3>
		<h4>Contact details</h4>
			<p>Address :<?php echo $address.",".$city."<br>".$region.",".$postal_code ;?> </p>
			<p>Mobile : <?php echo $mob;?></p>
			<p>Email : <?php echo $email;?></p>
			<p>Website : <?php echo $website;?></p>
			<p><a href="student_profile.php">Edit</a></p>
		</div>
		<div class="school" style="margin-left:45%;position:relative;padding-top:12px;">
		<h3>School Name : <?php echo $school_name;?></h3>
			<p>School Address : <?php echo $school_address.",".$school_city."<br>".$school_region.",".$school_pcode ;?></p>
			
				<p><a href="student_profile.php">Edit</a></p>
		</div>
		<div style="margin-top:20%;margin-left:20%;">
			<h3>Applications</h3>
			<table>
				<thead>
					<th>Date</th>
					<th>Job Title</th>
					<th>Status</th>
				</thead>
			<?php
          $app=mysql_query("select a.apply_time,a.status,b.vacancy_title from job_applied a,create_vacancy b where a.student_userid='$std_user' and a.company_userid=b.userid and a.vacancy_time=b.automatic_date;");
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
		
		
	</body>
</html>