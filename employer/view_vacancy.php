<?php
include('employerheader.php');
$userid=$_GET['user'];
$auto_date=$_GET['auto_date'];
$current_user=$_SESSION['employeruserid'];
$qry=mysql_query("select * from create_vacancy where userid='$userid' && automatic_date='$auto_date';");
if($qry){
	if(mysql_num_rows($qry)>0){
	if($row=mysql_fetch_array($qry)){
	$vacancy_title=$row['vacancy_title'];
	
	}
	}
	else{
	echo "No Vacancy Found".mysql_error();
	
	}
}

else{
echo "Error in Query Pass".mysql_error();
}
?>

<div class="col-xs-12 col-sm-12 col-md-9">

<?php include('returnToDashboard.php');?>

	<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">

				
	<div class="row">				
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="">
				<h1 class="empDbH"><i class="fa fa-check-circle"></i> Welcome to employee dashboard</h1>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-6 col-md-8 empDbTitle">
		<i class="fa fa-envelope-o"></i> Vacancy View
		</div>
		<div class="col-xs-6 col-md-4 empDbDateStrip">    
		<span><i class="fa fa-calendar"></i> <?php echo " ".$viewdashdate;?></span>
		</div>
	</div>
    
    <div class="row" style="margin-top:30px;">

		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="panel panel-success empVacancyPanel">
				<div class="panel-heading">
					<h3 class="panel-title"><?php echo $vacancy_title;?></h3>
				</div>
				<div class="empVacancyPanelTxt">
				<br><p><?php echo $row['vacancy_description'];?></p><br>
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12">        
			<div class="panel panel-success empVacancyPanel">
            <div class="panel-heading">
				<h3 class="panel-title">Vacancy Details</h3>
				</div>
				<div class="empVacancyPanelTxt">
				<br><p><b>From:</b> <?php echo $row['from_date1'];?></p><br>
				<p><b>To:</b> <?php echo $row['to_date1'];?></p><br>
				<p><b>Duration:</b> <?php echo $row['duration'];?></p><br>
				<p><b>Location:</b> <?php echo $row['vacancy_location'];?></p><br>
				<p><b>Number of Places:</b> <?php echo $row['number_places'];?></p><br>
				</div>
			</div>
        </div>

    </div>

    <div class="row">
        <div class="panel panel-success empVacancyPanel" style="margin: 0 auto; width: 97%; margin-top:30px;">
                                    <div class="panel-heading">
                                    <h3 class="panel-title">Application</h3>
                                    </div>
                                    <table class="table">
                                        
                                        <thead>
                                            <tr>
                                               
                                                <th><i class="fa fa-caret-down"></i> STUDENT</th>
                                                <th><i class="fa fa-caret-down"></i> APPLICATION DATE</th>
                                                <th><i class="fa fa-caret-down"></i> DATE REQUESTED</th>
                                                <th><i class="fa fa-caret-down"></i> STATUS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
$applications=mysql_query("select a.first_name,a.last_name,b.apply_time,b.status from student_profile a,job_applied b where b.company_userid='$current_user' && b.student_userid=a.userid;");
if($applications){
	if(mysql_num_rows($applications)>0){
	while($row=mysql_fetch_array($applications)){
	
	?>
											<tr>
                                               
                                                <td><?php echo $row['first_name']." ".$row['last_name'] ;?></td>
                                                <td><?php echo $row['apply_time'];?></td>
                                                <td>Date Requested</td>
                                                <td><?php echo $row['status'];?></td>
                                            </tr>
                                            
                                        			<?php
	}?> </tbody></table><?php
	}
	else{
	echo "No Application Found".mysql_error();
	
	}
}

else{
echo "Error in Query Pass".mysql_error();
}
				?>
                                </div>
                                
    </div>
    
        
    <div class="clearfix"></div>


    
	</div>
	</div>


<?php
include('employerfooter.php');
?>
