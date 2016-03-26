<html>
	<head>
	</head>
	<body>
		<a href="employer_profile.php">Home</a>
		<br><a href="../classes/logout.php">Logout</a>
		<?php
include('../classes/connection.php');
$cover_letter=$_GET['cover_lett'];
$student_userid=$_GET['studentuser'];
$apply_time=$_GET['apply_time'];
$std_name=$_GET['name'];
?>
<div>
		<a href="invite_for_interview.php?studuser=<?php echo $student_userid;?>&apply_time=<?php echo $apply_time;?>">Invite For Interview</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="reject_application.php?studuser=<?php echo $student_userid;?>&apply_time=<?php echo $apply_time;?>">Reject Application</a>
		
		<h1><?php echo $std_name; ?></h1>
		<h3>Cover Letter</h3>
	<h2><?php echo $cover_letter; ?></h2>
	</div>	
		
		
		
	</body>
	
	
</html>