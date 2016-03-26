<?php
include('../classes/connection.php');
$empuser=$_SESSION['employeruserid'];
?>
<html>
	<head>
		
	</head>
	
	<body>
		<a href="employer_profile.php">Home</a>
		<br><a href="../classes/logout.php">Logout</a>
		<?php

$sql=mysql_query("select * from employer_location where userid='$empuser' ");
if($sql){
while($row=mysql_fetch_array($sql)){
?>
<div style="position:relative;">
		<h3>Company Name : <?php echo $row['company_name'];?></h3>
			<p>Location Address : <?php echo $row['location_address'];?></p>
			<p>Location City : <?php echo $row['location_city'];?></p>
			<p>Location Name : <?php echo $row['location_name'];?></p>
			
			<p><b>Contact Name : <?php echo $row['contact_title']." ".$row['contact_first_name']." ".$row['contact_last_name'];?></b></p>
			<p>Telephone : <?php echo $row['contact_telephone'];?></p>
			<p>Email : <?php echo $row['conatct_email'];?></p>
	 <a href="edit_location.php?userid=<?php echo $row['userid']?>&crt_time=<?php echo $row['create_time']?>">Edit Location</a>
			</div>
<?php }
	
}
else{echo "error in query pass sql".mysql_error();}
?>
		
	</body>
</html>