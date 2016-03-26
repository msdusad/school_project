<?php include('schoolheader.php'); 
$userid=$_GET['user'];
$auto_date=$_GET['auto_date'];

//$current_user=$_SESSION['employeruserid'];
$qry=mysql_query("select a.*,b.company_website,b.company_name from create_vacancy a,employer_registration b where a.userid='$userid' and a.automatic_date='$auto_date' and b.userid='$userid' ;");
if($qry){
	if(mysql_num_rows($qry)>0){
	if($row=mysql_fetch_array($qry)){
	$vacancy_title=$row['vacancy_title'];
	
	}
	}
	else{
	echo "this vacancy detail not in our database".mysql_error();
	
	}
}

else{
echo "Error in Query Pass".mysql_error();
}
?>
<br>
<div class="col-xs-12 col-sm-12 col-md-9">
 
	<div class="row">				
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="">
				<h2 class="empDbH"><i class="fa fa-briefcase"></i> Welcome to Vacancy Details</h2>
			</div>
		</div>
	</div>
<br>
	<div class="row">
		<div class="col-xs-6 col-md-8 empDbTitle">
		<a href='schooldashboard.php'><i class="fa fa-dashboard"></i> Dashboard</a>
		</div>
		<div class="col-xs-6 col-md-4 empDbDateStrip">    
		<span><i class="fa fa-calendar"></i><?php echo " ".$viewdashdate;?></span>
		</div>
	</div>
    
	<div class="row" style="margin-top:30px;">
		<div class="col-md-12">
			<div class="panel panel-success empVacancyPanel">
				<div class="panel-heading">
				<h3 class="panel-title"><?php echo $vacancy_title;?></h3>
				</div>
				<div class="empVacancyPanelTxt">
				<br>
				<p style="padding-left:10px;"><?php echo $row['vacancy_description'];?>
				<br>
				<br>
				</p>
				</div>
			</div>
		</div>
	</div>

<div class="row" style="margin-top:30px;">
	<div class="col-md-12">
        <div class="panel panel-danger empVacancyPanel">
            <div class="panel-heading">
                <h3 class="panel-title" style="display:inline-block; width:47%;">Vacancy Details</h3>
				<h3 class="panel-title" style="display:inline-block;  width:47%; float:right;">Employer</h3>
            </div>
            
            <table class="table">
                <tbody>
                    <tr>
                        <td><b>From:</b> <?php echo $row['from_date1'];?></td>
                        <td> <?php echo $row['company_name'];?></td>
                    </tr>
                    <tr>
                        <td><b>To:</b> <?php echo $row['to_date1'];?></td>
                        <td><b>Website:</b> <?php echo $row['company_website'];?></td>
                    </tr>
                    <tr>
                        <td><b>Duration:</b> <?php echo $row['duration'];?></td>
                        <td><b>Industries:</b> Technology</td>
                    </tr>
                    <tr>
                        <td><b>Location:</b> <?php echo $row['vacancy_location'];?></td>
                        <td><b>Number of Places:</b> <?php echo $row['number_places'];?></td>
                    </tr>
                </tbody>
            </table>
            <div class="empVacancyPanelTxt">
            <p></p>
            <p></p>
			<p></p>
			<p></p>
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
				$applications=mysql_query("select a.userid,a.first_name,a.last_name,b.apply_time,b.status,count(b.student_userid) as student_userid from student_profile a,job_applied b where b.company_userid='$userid' && b.student_userid=a.userid;");
if($applications){
	if(mysql_num_rows($applications)>0){
	while($row=mysql_fetch_array($applications)){
	
	?><tr>
					<td><a href="student_detail.php?userid=<?php echo $row['userid'];?>&apps=<?php echo $row['student_userid'];?>"><?php echo $row['first_name']." ".$row['last_name'] ;?></a></td>
					<td><?php echo $row['apply_time'];?></td>
					<td>Requested Date</td>
					<td><?php echo $row['status'];?></td>
				</tr>
							
				<?php
	}
	}
	else{
	echo "this vacancy detail not in our database".mysql_error();
	
	}
}

else{
echo "Error in Query Pass".mysql_error();
}
				?>
                                        </tbody>
                                    </table>
                                </div>
                                
		<!--<div class="panel panel-success empVacancyPanel" style="margin: 0 auto; width: 97%; margin-top:30px;">
                                    <div class="panel-heading">
                                    <h3 class="panel-title">Current Placement</h3>
                                    </div>
                                    <table class="table">
                                        
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th><i class="fa fa-caret-down"></i> STUDENT</th>
                                                <th><i class="fa fa-caret-down"></i> PLACEMENT DATE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Student Name</td>
                                                <td>01/01/2015</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Student Name</td>
                                                <td>01/01/2015</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Student Name</td>
                                                <td>01/01/2015</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> -->
    </div>
   
<div class="clearfix"></div>

<?php include('schoolfooter.php'); 

?>