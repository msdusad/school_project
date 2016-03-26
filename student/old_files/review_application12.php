
<html>
	<head>
	</head>
	<body>
	<h3>Cover Letter</h3><br><br>
		<?php
if(isset($_POST['userid'])){
include('../classes/connection.php');
$cover_letter=$_POST['cover_letter'];
$send_media=$_POST['send_media'];
$empoyer_userid=$_POST['userid'];
$vacancy_date=$_GET['vacncy_create_date'];
$studentid=$_SESSION['studentuserid'];

?>
<div><a href="student_profile.php">Home</a><br>
		<a href="../classes/logout.php">Logout</a>
		
		<?php echo  $cover_letter;?>
		<form action="application_submitted.php?cover=<?php echo  $cover_letter;?>&media=<?php echo  $send_media;?>&employerid=<?php echo  $empoyer_userid;?>&vacancy_date=<?php echo $vacancy_date;?>" method="post">
			<button type="submit" name="apply_job" value="">Submit Application</button>
			</form>
	</div>	
		<?php }
		
		else{
		 echo $_GET['cover'];
		
		} ?>
	</body>
	
	
</html>