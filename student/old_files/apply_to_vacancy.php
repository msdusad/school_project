
<?php 
$userid=$_POST['apply'];
 $vacy_date=$_GET['vacancy_created_date'];
?>
<html>
	
	<head>
		
		
	</head>
	
	
	<body>
		<div>
			<a href="student_profile.php">Home</a>
			<br><a href="../classes/logout.php">Logout</a>
		<form action="review_application.php?vacncy_create_date=<?php echo $vacy_date;?>" method="post">
		Cover Letter <input type="text" name="cover_letter" style="height:200px;width:70%;" required><br><br>
			include your media with your application? <select name="send_media" required>
				<option value="yes">Yes</option>
				<option value="no">No</option>
			</select><br><br>
			
			<button type="submit" name="userid" value="<?php echo $userid;?>">Review your application</button><br><br>
				
			<!--<button name="cancel" value="">Cancel</button> -->
		</form>
		</div>
		
	</body>
</html>