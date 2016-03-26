<?php include('../classes/connection.php');
$sql=mysql_query("select count(category) from login where category='Student'");
$sql1=mysql_query("select count(category) from login where category='Employer'");
$sql2=mysql_query("select count(category) from login where category='School'");
$row = mysql_fetch_array($sql);
$row1 = mysql_fetch_array($sql1);
$row2 = mysql_fetch_array($sql2);
$total = $row[0];
$total1 = $row1[0];
$total2 = $row2[0];

?>
<html>
	<head>
		
	</head>
	
	<body>
		<div>
			<h3>Employers : <?php echo $total1; ?></h3><br>
			<h3>Students : <?php echo $total; ?></h3><br>
			<h3>Applications : </h3><br>
		</div>
	</body>
</html>

