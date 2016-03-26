<?php
include('employerheader.php');
$curr_user=$_SESSION['employeruserid'];
 $numberofLocation=mysql_query("select count(*) from employer_location where userid='$curr_user';");
$totallocation=mysql_num_rows($numberofLocation);
 $numpendinApplication=mysql_query("select count(*) from job_applied where company_userid='$curr_user' && status='Pending';");
$totalapplication=mysql_num_rows($numpendinApplication);
?>
<div class="col-xs-12 col-sm-12 col-md-9">

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
		
    <div class="row">
		<div class="empHeaderWelcomMsg">
			<h1><i class='fa fa-bell'></i> Welcome to Employer Dashboard</h1>
			<div class="col-md-8 empDbTitle">
			<i class="fa fa-dashboard"></i> Dashboard
			</div>
			<div class="col-md-4 empDbDateStrip">    
			<span><i class="fa fa-calendar"></i> <?php echo " ".$viewdashdate;?></span>
			</div>
		</div>
    </div>
    
    
    <div class="row">
		<div class="">
			<a href="employer_locations.php">
				<div class="col-xs-12 col-sm-12 col-md-6 empDbLocationBox">
					<i class="fa fa-building-o fa-3x"></i>
					<div style="display:inline-block; float:right; text-align:right;">
					Locations
					<h1><?php echo $totallocation;?></h1>
					</div>
				</div>
			</a>
		</div>   
		<div class="">
		    <a href="pending_application.php">
				<div class="col-xs-12 col-sm-12 col-md-6 empDbPendingApplication">
				<i class="fa fa-group fa-3x"></i>
				<div style="display:inline-block; float:right; text-align:right;">
				Pending Applications
				<h1><?php echo $totalapplication;?></h1>
				</div>
				</div>			
			</a>
		</div>

	</div>
    
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="panel panel-default empDbApllicationStrip">
				<div class="panel-heading">
					<h5 class="panel-title">Recent applications</h5>
					<h5 class="panel-title empDbViewAllApp"><a href="manage_application.php">View all applications</a></h5>
				</div>
				<div class="panel-body empDbApplinks">
				<?php
				$user=$_SESSION['employeruserid'];
				$all_applications=mysql_query("select a.first_name,a.last_name,a.userid,b.vacancy_title,b.vacancy_location,b.automatic_date,c.apply_time,c.status,c.cover_letter,c.company_userid from student_profile a,create_vacancy b,job_applied c where c.company_userid='$user' && c.student_userid=a.userid && c.vacancy_time=b.automatic_date order by c.apply_time  DESC limit 10;");
				if(mysql_num_rows($all_applications)>0){
				while($row=mysql_fetch_array($all_applications)){
				?> <p> <i class="fa fa-file-text-o"> </i> <a href="view_application.php?studentuser=<?php echo $row['userid'];?>&apply_time=<?php echo $row['apply_time'];?>&cover_lett=<?php echo $row['cover_letter'];?>&vacancy_time=<?php echo $row['automatic_date'];?>"><?php echo $row['first_name']." ".$row['last_name'];?></a> 

				applied for the <a href="view_vacancy.php?user=<?php echo $row['company_userid'];?>&auto_date=<?php echo $row['automatic_date'];?>"><?php echo $row['vacancy_title'] ;?></a></p>
				<?php }}
				else{echo "No Recent Applications ";}
				?>					
				</div>
			</div>
		</div>
		
	</div>

		</div>
	</div>
	
	
<?php
include('employerfooter.php');
?>