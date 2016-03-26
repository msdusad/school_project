<?php include('schoolheader.php'); 
$_SESSION['stdid']=$_GET['studenduserid'];
$stdid=$_GET['studenduserid'];
$schoolid=$_SESSION['schooluserid'];
$query=mysql_query("select * from student_school where userid='$stdid'");
while($row=mysql_fetch_array($query)){
$fetchfrom=$row['ref_from'];
	$fetchto=$row['ref_to'];
	$fetchcomment=$row['ref_comment'];
	
}
?>

<head>
	<script type="text/javascript" src="../js/validation.js"></script>
<script>
	function restform(){
	document.getElementById("write_reference").reset();
		return false;
	}


function compareDates(){

	var startDate = new Date($('#date1').val());
var endDate = new Date($('#date2').val());

if (startDate < endDate){

document.getElementById("date_error").innerHTML="";
}
else{

	document.getElementById("date_error").innerHTML="End Date Must Grater Than Start Date";
}
}
	
</script>

</head>
<div class="col-xs-12 col-sm-12 col-md-9">
 
<div class="row" id="">
<!-- hear manage application -->
<div class="col-md-12">
		
	<div class="row">				
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="">
				<h1>Welcome to Write Reference</h1>
			</div>
		</div>
	</div>
	<div class="row">

		<div class="col-md-8 empDbTitle">
			<a href='schooldashboard.php'><i class="fa fa-dashboard"></i> Dashboard</a>
		</div>

		<div class="col-md-4 empDbDateStrip">
			<span><i class="fa fa-calendar"></i><?php echo " ".$viewdashdate;?></span>
		</div>

	</div>
		<br>
		<form action="" id="write_reference" method="post" enctype="multipart/form-data">
		<table class="table">
		<tr>
			<h1>Write Reference</h1>
		</tr>
			<!-- <tr><td>Attendance Record in %</td><td><input type="text" name="attdance_record" id="attdance_record"  required>
			onkeypress="return isNumberKey(event)" </td></tr>-->
		<tr><td>From </td><td> <input type="date" name="from_peroid" id="date1"  value="<?php echo $fetchfrom;?>" onchange="compareDates()" required>	</td></tr>
		<tr><td>To </td><td> <input type="date" name="to_peroid"  id="date2" value="<?php echo $fetchto;?>" onchange="compareDates()" required>
<br><br><span id="date_error" style="color:red;"></span>
		</td></tr>

		<tr><td>For teacher comments (optional)</td><td><textarea type="text"  rows="7" cols="60" maxlength="300" name="comment"><?php echo $fetchcomment;?></textarea>
		</td></tr>
<tr><td>Upload Attachment </td><td> <input class="btn btn-primary" type="file" name="reference_file"  id="ref_file" required></td></tr>


		<tr><td><input type="submit" name="gnerate_reference" value="Generate Reference" class="btn btn-primary"></td><td>
		<input type="submit" name="cancel" value="Cancel" onclick="return restform();" class="btn btn-danger">
		</td>
		</tr>
		</table>
		</form>




		<!-- End Hear -->

<?php
if(isset($_POST['gnerate_reference'])){
     $std=$_SESSION['stdid'];
	$attend_record="";
	//$attend_record=mysql_real_escape_string($_POST['attdance_record']);
	$from=mysql_real_escape_string($_POST['from_peroid']);
	$to=mysql_real_escape_string($_POST['to_peroid']);
	$comment=mysql_real_escape_string($_POST['comment']);
if(isset($_FILES['reference_file'])!=''){
$video="reference_files/".$_FILES['reference_file']['name'];
  move_uploaded_file($_FILES['reference_file']['tmp_name'],$video);
         $videoname=$_FILES['reference_file']['name'];

}
else{

	 $videoname='';
}


	$qry=mysql_query("update student_school set reference_by_school='$schoolid',attendance_record='$attend_record',ref_from='$from',ref_to='$to',ref_comment='$comment',reference_file='$videoname	',ref_date=now() where userid='$std'");
		
		if($qry){
			
	//echo '<script>alert("Stdent Reference Added!");</script>';
			//echo '<script type="text/javascript">window.location ="pending_references.php";</script>';
			  echo '<script type="text/javascript">window.location ="pending_references.php";</script>';
	}
	else{
		echo '<script>alert("Error In Student Reference Added !'.mysql_error().'");</script>';
		}
}
?>

</div>
</div>

<?php include( 'schoolfooter.php'); ?>