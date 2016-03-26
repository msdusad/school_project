<?php
include('studentheader.php');
$cover_letter=mysql_real_escape_string($_GET['cover']);
$send_media=$_GET['media'];
$empoyer_userid=$_GET['employerid'];
$studentid=$_SESSION['studentuserid'];
$vacancy_autodate=$_GET['vacancy_date'];
$status="Pending";
?>


<div class="col-xs-12 col-sm-12 col-md-9">
        

<h1><i class="fa fa-briefcase"></i> Welcome to Apply To Vacancy</h1>

<div class="row">
	<div class="col-md-8 empDbTitle">
		<a href="studentdashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a>
	</div>
	<div class="col-md-4 empDbDateStrip">    
		<span><i class="fa fa-calendar"></i>  <?php echo $viewdashdate;?></span>
	</div>

 </div>
 <br>
<div class="row">
		<div class="col-md-12">

	<?php
	if(isset($_POST['apply_job'])){

$qry=mysql_query("insert into job_applied (cover_letter,send_media,company_userid,student_userid,vacancy_time,apply_time,status) values ('$cover_letter','$send_media','$empoyer_userid','$studentid','$vacancy_autodate',now(),'$status');");
	
	?>
	<div class="alert alert-warning">
		<strong>Your application has been sent. Best of luck!</strong>
	</div>	
	<br><br>
	<b><a href="view_all_vacancies.php">Back To the list of Vacancies</a></b>
	<br><br>
	<?php
}
	?>	
			
		</div>
			
			</div>
			
			<!-- end Hear -->
       
        
	</div>
    <!-- student Dashboard Footer -->
   <br>

<?php
include('studentfooter.php');
?>

