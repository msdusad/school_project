<?php include('schoolheader.php');
$schooluser=$_SESSION['schooluserid'];
?>

<head>
	<script type="text/javascript" src="../js/validation.js"></script>
</head>

<div class="col-xs-12 col-sm-12 col-md-9" id="school_manage_user">
 
<div class="row">
<div class="col-md-12">
</br>
<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="">
			 <h2><i class="glyphicon glyphicon-user"></i> Welcome to Manage Users</h2>
		</div>
	</div>
</div>
</br>
<div class="row">
		<div class="col-md-8 empDbTitle">
			<a href='schooldashboard.php'><i class="fa fa-dashboard"></i> Dashboard</a>
		</div>
		<div class="col-md-4 empDbDateStrip">
			<span><i class="fa fa-calendar"></i><?php echo " ".$viewdashdate;?></span>
		</div>
</div>

<br>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-3">
		<div class="">
		Show
		<select name="form" class="btn btn-primary" id="search_vacancies" onchange="showUser(this.value)">
			<option value="all">10</option>
			<option value="6b">20</option>
			<option value="6g"> 50</option>
			<option value="7t">100</option>
		</select>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-3">
		<div class="">
		Form
		<select name="form" class="btn btn-primary" id="search_vacancies" onchange="showUser(this.value)">
			<option value="all">All</option>
			<option value="6b">6B</option>
			<option value="6g"> 6G</option>
			<option value="7t">7T</option>
		</select>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-3">
		<div class="">
			Invitation Status
			<select class="btn btn-primary" name="invitstion_status">
				<option value="all_invitation">All</option>
				<option value="finance">Pending</option>
				<option value="front_office">Invited</option>
				<option value="technology">Accepted</option>
			</select>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-3">
		<div class="">
			Reference Status
			<select class="btn btn-primary" name="reference_status" >
				<option value="all">All</option>
				<option value="pending">Pending</option>
				<option value="completed">Completed</option>
			</select>
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="addUserBtn">
			<a class="btn btn-primary" href="add_users.php">Add Users</a>
		</div>
	</div>
</div>
			
<hr style="border-top:1px dashed lightgray;"/>

<div id="txtHint"></div>
<div id="all_vacancy">


<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label><i class="fa fa-caret-down"></i> NAME</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label><i class="fa fa-caret-down"></i> JOB TITLE</label>
		</div>
	</div>
</div>

<?php
$sql=mysql_query("select * from add_users where userid='$schooluser'");
if($sql){
while($row=mysql_fetch_array($sql)){
?>
<hr style="border-top:1px dashed lightgray;"/>
<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<?php echo $row['salutation']." ".$row['user_first_name']." ".$row['user_last_name'] ;?>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<?php echo $row['user_job_title'];?>
		</div>
	</div>
</div>
<hr style="border-top:1px dashed lightgray;"/>				
<?php	
}
}
else{echo "error in query pass".mysql_error();}

?>

	
</div>
</div>

	</div>

<?php include( 'schoolfooter.php'); ?>