<?php include('adminheader.php');
$schooluser=$_SESSION['schooluserid'];
?>

<head>
	<script type="text/javascript" src="../js/validation.js"></script>


</head>
<div class="col-xs-12 col-sm-12 col-md-9">
	<h1>Manage Users</h1>

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
			 <div style="float:right;">
				<a class="btn btn-primary" href="add_users.php">Add Users</a>
				 </div>
		<div id="txtHint"></div>
		<div id="all_vacancy">
				<table class="table">
					
    	<thead>
				<th>Name</th>
				<th>Job Title</th>
			</thead>
				<?php
$sql=mysql_query("select * from add_users where userid='$schooluser'");
if($sql){
while($row=mysql_fetch_array($sql)){
?><tr>
		<td><?php echo $row['salutation']." ".$row['user_first_name']." ".$row['user_last_name'] ;?></td>
		<td><?php echo $row['user_job_title'];?></td>
		</tr>
<?php	
}
}
else{echo "error in query pass".mysql_error();}

?>
	</table>			
		</div>



		</div>

		<!-- End Hear -->

	</div>

<?php include( 'adminfooter.php'); ?>