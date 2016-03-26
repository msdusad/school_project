<?php include('schoolheader.php'); ?>

<head>
	<script type="text/javascript" src="../js/validation.js"></script>


</head>
<div class="col-xs-12 col-sm-12 col-md-9" id="school_pendingRefrence">
 
<div class="row">
<div class="col-md-12">

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="">
		<br>
			<h2><i class="fa fa-file-text"></i> Welcome to Manage References</h2>
			<br>
		</div>
	</div>
</div>

<div class="row">
		<div class="col-md-8 empDbTitle">
			<a href='schooldashboard.php'><i class="fa fa-dashboard"></i> Dashboard</a>
		</div>
		<div class="col-md-4 empDbDateStrip">
			<span><i class="fa fa-calendar"></i> <?php echo " ".$viewdashdate;?></span>
		</div>
</div>

<br>
			
<div id="txtHint"></div>

<div id="all_vacancy">
<h3><i class="fa fa-file-text"></i> Welcome to Student Name</h3>
<?php
$sql=mysql_query("select a.first_name,a.last_name,a.userid,b.reference_by_school from student_profile a,student_school b where a.userid=b.userid ;");
while($row=mysql_fetch_array($sql)){
?>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label><?php echo $row['first_name']." ".$row['last_name'] ;?></label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
		<a class="btn btn-primary" href="write_reference.php?studenduserid=<?php echo $row['userid'];?>">
		<?php if($row['reference_by_school']!=''){echo " Update Reference";}
		else{echo "Write Reference";}
		?>
		</a>
		</div>
	</div>
</div>




	
<?php 
}
?>
	
</div>

</div>
<!-- End Hear -->
</div>

<?php include( 'schoolfooter.php'); ?>