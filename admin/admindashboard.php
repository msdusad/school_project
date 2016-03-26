<?php
include('adminheader.php');
$curuser=$_SESSION['adminuserid'];
$employers=mysql_query("select userid from employer_registration ;");
$totalemp=mysql_num_rows($employers);
$students=mysql_query("select userid from student_profile ;");
$totalstd=mysql_num_rows($students);
$schools=mysql_query("select userid from school_registration ;");
$totalschool=mysql_num_rows($schools);
//$employers=mysql_query("select * from add_employer where userid='$curuser';");
//$totalemp=mysql_num_rows($employers);
?>

<div class="col-xs-12 col-sm-12 col-md-9">
<h1>Welcome to Admin dashboard</h1>

    <div class="row">

    <div class="col-md-8 empDbTitle">
    <i class="fa fa-dashboard"></i>  Dashboard
    </div>

    <div class="col-md-4 empDbDateStrip">    
	<span><i class="fa fa-calendar"></i> Monday, 24th November 2014</span>
    </div>
    
    </div>
    
    
    <div class="row">
    
    <a href="manage_employers.php">
    <div class="col-xs-12 col-md-6 empDbLocationBox">
        <i class="fa fa-building-o fa-3x"></i>
        <div style="display:inline-block; float:right; text-align:right;">
        Employers
		<h1><?php echo $totalemp;?></h1>
        </div>
    </div>
    </a>
    
    <div class="col-xs-12 col-md-2"></div>
    
    <a href="manage_schools.php">
    <div class="col-xs-12 col-md-6 empDbPendingApplication">
        <i class="fa fa-file-o fa-3x"></i>
        <div style="display:inline-block; float:right; text-align:right;">
        Schools
        <h1><?php echo $totalschool;?></h1>
        </div>
    </div>
    </a>
    
	<a href="manage_students.php">
    <div class="col-xs-12 col-md-6 empDbLocationBox">
        <i class="fa fa-group fa-3x"></i>
        <div style="display:inline-block; float:right; text-align:right;">
        Students
		<h1><?php echo $totalstd;?></h1>
        </div>
    </div>
    </a>
    
    <div class="col-xs-12 col-md-2"></div>
   
    
	</div>
    
   <!-- <div class="row">
    
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
        
        <div class="panel panel-default empDbApllicationStrip">
            <div class="panel-heading">
                <h5 class="panel-title">Recent applications</h5>
                <h5 class="panel-title empDbViewAllApp"><a href="#">View all applications</a></h5>
            </div>
            <div class="panel-body empDbApplinks">
                <p><i class="fa fa-file-text-o"></i> <a href="#">Jan Kolasinski applied for the Cashier vacancy</a></p>
                <p><i class="fa fa-file-text-o"></i> <a href="#">Jan Kolasinski applied for the Cashier vacancy</a></p>
            </div>
        </div>
        
        <div class="panel panel-success empDbApllicationStrip">
            <div class="panel-heading">
                <h5 class="panel-title">New vacancies</h5>
                <h5 class="panel-title empDbViewAllApp"><a href="#">View all applications</a></h5>
            </div>
            <div class="panel-body empDbApplinks">
                <p><i class="fa fa-file-text-o"></i> <a href="#">Jan Kolasinski applied for the Cashier vacancy</a></p>
                <p><i class="fa fa-file-text-o"></i> <a href="#">Jan Kolasinski applied for the Cashier vacancy</a></p>
            </div>
        </div>
    </div> -->
    
 
<?php
include( 'adminfooter.php');
?>