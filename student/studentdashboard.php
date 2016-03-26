<?php
include('studentheader.php');

?>

<div class="col-xs-12 col-sm-12 col-md-9">

	<div class="row">        
        <div class="colxs-12 col-sm-12 col-md-4">
            <h3 class="demo-componant-title"></h3>
            <div class="tile tile-profile boxOneGrad">
            <h3>My Profile</h3>
           <a href="view_profile.php"> <img src="img/girlPro.png" alt="" style="padding:5px;"/></a>
            <h4><?php echo $profile_complete;?>%</h4>
            <p>IMPROVE PROFILE</p>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-4">
            <h3 class="demo-componant-title"></h3>
            <div class="tile tile-profile boxTwoGrad">
            <h3>APPLICATIONS</h3>
           <a href="my_application.php"> <img src="img/docsInfo.png" alt="" style="border:none; border-radius:0;"/></a>
            <div class="clearfix"></div>
            <span style="display:inline-block; margin-right: 30px;">
            <h4><?php $currrt_user=$_SESSION['studentuserid'];
$all_vacancy=mysql_query("SELECT distinct count(a.student_userid) as total FROM job_applied a,create_vacancy c where a.company_userid = c.userid and a.student_userid='$currrt_user' and a.vacancy_time = c.automatic_date and a.status='Completed' order by a.apply_time desc;");
while($totalapp=mysql_fetch_array($all_vacancy) ){

    echo $totalapp['total'];
}
?></h4>
            <p>Complete</p>
            </span>
            <span style="display:inline-block;">
            <h4><?php $all_vacancy=mysql_query("SELECT distinct count(a.student_userid) as total FROM job_applied a,create_vacancy c where a.company_userid = c.userid and a.student_userid='$currrt_user' and a.vacancy_time = c.automatic_date and a.status='Pending' order by a.apply_time desc;");
while($totalapp=mysql_fetch_array($all_vacancy) ){

    echo $totalapp['total'];
}
?></h4>
            <p>In Progress</p>
            </span>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-4">
            <h3 class="demo-componant-title"></h3>
            <div class="tile tile-profile boxThreeGrad">
            <h3>PLACEMENTS</h3>
            <a href="search_placements.php">  <img src="img/calInfo.png" alt="" style="border:none;  border-radius:0;"/></a>
            <div class="clearfix"></div>
            <span style="display:inline-block; margin-right: 30px;">
            <h4></h4>
            <p>Status</p>
            </span>
            <span style="display:inline-block;">
            <h4></h4>
            <p></p>
            </span>
            </div>
        </div>
	</div>

	<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-9">
				<div class="stdWelcomeBlock">
				<h1>Welcome to your Worktaster Dashboard</h1>
				<p>Your Dashboard is the best place to see an overview of work experience and work placements that you have completed, are in progress and that are up and coming. Completing your profile is the best way to ensure you are getting the most out of your account. You can then easily Search for Placements that you are interested in. Access the Knowledge Base for the very best hints and tips to getting the placements you want.</p>
				<br>
				<p>If you have any questions at all please <a href="../about.html" class="btn btn-warning">CONTACT US</a> </p>
				</div>
			</div>
       
			<div class="col-xs-12 col-sm-12 col-md-3">
				<div class="list-group list-group-margingAdj">
					<a href="update_profile.php" class="list-group-item">Improve Profile <i class="fa fa-chevron-right pull-right"></i></a>
					<a href="search_placements.php" class="list-group-item active">Search Placements <i class="fa fa-chevron-right pull-right"></i></a>
					<a href="http://kbase.worktaster.com/" class="list-group-item" target="_blank">Access Knowedge Base <i class="fa fa-chevron-right pull-right"></i></a>
					<a href="std_mng_reference.php" class="list-group-item">Manage References <i class="fa fa-chevron-right pull-right"></i></a>
				</div>
			</div>
	</div>
    
   


<?php
include('studentfooter.php');
?>