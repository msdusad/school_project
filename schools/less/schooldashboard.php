<?php
include('schoolheader.php');
$curuser=$_SESSION['schooluserid'];
$employers=mysql_query("select * from add_employer where userid='$curuser';");
$totalemp=mysql_num_rows($employers);
$students=mysql_query("select * from add_student where userid='$curuser';");
$totalstd=mysql_num_rows($students);
//$employers=mysql_query("select * from add_employer where userid='$curuser';");
//$totalemp=mysql_num_rows($employers);
?>

<div class="col-xs-12 col-sm-12 col-md-9" id="school_dashboard">
<br>
<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="">
			<h2><i class="fa fa-bell"></i> Welcome to School/college dashboard</h2>
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-8 empDbTitle">
		<a href='schooldashboard.php'><i class="fa fa-dashboard"></i> Dashboard</a>
	</div>
	<div class="col-md-4 empDbDateStrip">    
		<span><i class="fa fa-calendar"></i> <?php echo " ".$viewdashdate;?></span>
	</div>
 </div>
    
    
<div class="row">
    
    <a href="manage_employers.php">
		<div class="col-xs-12 col-sm-12 col-md-6">
			<div class="empDbLocationBox">
				<i class="fa fa-building-o fa-3x"></i>
				<div style="display:inline-block; float:right; text-align:right;">
					Employers
					<h1><?php echo $totalemp;?></h1>
				</div>
			</div>
		</div>
    </a>
    
    <a href="view_all_applications.php">
		<div class="col-xs-12 col-sm-12 col-md-6">
			<div class="empDbPendingApplication">
				<i class="fa fa-file-text-o fa-3x"></i>
				<div style="display:inline-block; float:right; text-align:right;">
				Applications
				<h1>25</h1>
				</div>
			</div>
		</div>
    </a>	
		 
	<a href="manage_students.php">
		<div class="col-xs-12 col-sm-12 col-md-6">
			<div class="empDbLocationBox">
				<i class="fa fa-group fa-3x"></i>
				<div style="display:inline-block; float:right; text-align:right;">
					Students
				<h1><?php echo $totalstd;?></h1>
				</div>
			</div>
		</div>
    </a>
    
</div>
    
<div class="row">
    <!--<div class="col-xs-12 col-sm-12 col-md-12">
	    <div class="panel panel-success empDbApllicationStrip">
           
		   <div class="panel-heading">
                <h5 class="panel-title">Actions required</h5>
            </div>
            <div class="panel-body empDbApplinks">
                <p><i class="fa fa-pencil"></i> <a href="#">Jan Kolasinski applied for the Cashier vacancy</a></p>
                <p><i class="fa fa-check-square-o"></i> <a href="#">Jan Kolasinski applied for the Cashier vacancy</a></p>
                <p><i class="fa fa-pencil"></i> <a href="#">Jan Kolasinski applied for the Cashier vacancy</a></p>
            </div>
        </div>
	</div> -->
   <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="panel panel-default empDbApllicationStrip">
            <div class="panel-heading">
                <h5 class="panel-title">Recent applications</h5>
                <h5 class="panel-title empDbViewAllApp"><a href="view_all_applications.php">View all Applications</a></h5>
            </div>
            <div class="panel-body empDbApplinks">
              
                <?php 
$user=$_SESSION['schooluserid'];
$all_applications=mysql_query("select a.first_name,a.last_name,a.userid,b.vacancy_title,b.vacancy_location,c.apply_time,c.status,c.cover_letter,c.company_userid,d.company_name from student_profile a,create_vacancy b,job_applied c,employer_registration d where  c.student_userid=a.userid && c.vacancy_time=b.automatic_date order by c.apply_time  DESC limit 10;");
if(mysql_num_rows($all_applications)>0){
while($row=mysql_fetch_array($all_applications)){
?>
 <p><i class="fa fa-file-text-o"> </i> <a href="view_application.php?studentuser=<?php echo $row['userid'];?>&apply_time=<?php echo $row['apply_time'];?>&cover_lett=<?php echo $row['cover_letter'];?>&name=<?php echo $row['first_name']." ".$row['last_name'];?>"><?php echo $row['first_name']." ".$row['last_name'];?></a> applied for the 
<a href="view_vacancy.php?user=<?php echo $row['company_userid'];?>&auto_date=<?php echo $row['automatic_date'];?>"><?php echo $row['vacancy_title'] ;?></a> </p>
<?php }
}
else{
?>
No Application Found
<?php

}
?>
            </div>
        </div>
</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="panel panel-success empDbApllicationStrip">
            <div class="panel-heading">
                <h5 class="panel-title">New vacancies</h5>
                <h5 class="panel-title empDbViewAllApp"><a href="view_vacancies.php"> View all Vacancies </a></h5>
            </div>
            <div class="panel-body empDbApplinks">
               
              <?php 
$all_vacancy=mysql_query("select a.userid,a.vacancy_title,a.vacancy_location,a.automatic_date,a.number_places,a.from_date1,a.to_date1,a.automatic_date,b.company_name,b.company_website from create_vacancy a,employer_registration b where a.userid=b.userid order by automatic_date  DESC limit 10;");
while($row=mysql_fetch_array($all_vacancy)){
?>
				 <p><i class="fa fa-file-text-o"> </i> <a href="employer_detail.php?empuserid=<?php echo $row['userid'];?>"><?php echo $row['company_name'];?>  </a> Opening New Vacancies For <a href="view_vacancy.php?user=<?php echo $row['userid'];?>&auto_date=<?php echo $row['automatic_date'];?>"><?php echo $row['vacancy_title'];?></a></p>
		
			
			
			
			
		</tr>
		<?php }
		?>
            </div>
        </div>
	</div>

</div>
    
<?php
include( 'schoolfooter.php');
?>