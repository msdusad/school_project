<?php 
include('../classes/connection.php');
session_start();
include('../classes/school_reg_fetched.php');
if(!isset($_SESSION['schooluserid'])){
	header('location:../index.php');
}
$dashdate=date_create();
          $viewdashdate=date_format($dashdate,"l , d  M  Y");
//$lastlog=date_format($date,"l , M d Y, h:i A");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>School/college Dashboard | Welcome</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<!-- This will dynamically create Mobile Menu with jQuery.  -->
<script src="datetimepicker_css.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

<!-- Responsive Tabs -->
<link rel="stylesheet" type="text/css" href="css/demoTab.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />

<!--Bootstrap Css-->
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

<!--Bootstrap Css-->
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

<!-- Loading Drunken Parrot UI -->
<link href="css/style.css" rel="stylesheet">
<link href="css/demo.css" rel="stylesheet">

<!-- <link rel="shortcut icon" href="images/favicon.ico"> -->

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
<![endif]-->
    
<!--My Style Css-->
<link href="script/myStyle.css" rel="stylesheet" type="text/css">

<!--Font Awesome -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">

<!--Fonts  -->
<link href="font/stylesheet.css" rel="stylesheet" type="text/css">

<!-- Rest Css -->
<link href="script/html5reset-1.6.1.css" rel="stylesheet" type="text/css">

<!--Normalize Css-->
<link href="script/normalize.css" rel="stylesheet" type="text/css">

<!--Media Query Css-->
<link href="script/mediaQuery.css" rel="stylesheet" type="text/css">


</head>
<body>
<div class="container">

<div class="row">

  <div class="col-xs-12 col-sm-12 col-md-3 bgColorOne">
  <a href="schooldashboard.php">
      <img src="img/logo.png" alt="Logo" class="logoStdLogin">
  </a>
  
  <div class="empProShort">
	<h1><?php echo $school_fname." ".$school_lname ;?></h1>
	<b><a href="school_profile.php">Edit Profile  <i class="fa fa-edit"></i><br></a></b><br>
	<img src="<?php if($school_logo!=''){echo "logo/".$school_logo;}
else{
echo "img/empProPic.png";
}	
			
			?>" alt="title" style="float:left; height:120px; width:120px;">
  </div>
  <div class="clearfix"></div>
  
    <div class="list-group list-group-margingAdjTwo">
        <a  class="list-group-item active"><i class="fa fa-group"></i> Manage Students</a>
        <a href="manage_students.php" class="list-group-item"><i class="fa fa-caret-right"></i> Manage Students</a>
        <a href="add_student.php" class="list-group-item"><i class="fa fa-caret-right"></i> Add Student</a>
		 <a href="student_csv_upload.php" class="list-group-item"><i class="fa fa-caret-right"></i> Student Bulk Upload</a>
    </div>
    <div class="list-group list-group-margingAdjTwo">
        <a  class="list-group-item active"><i class="fa fa-building-o"></i> Employers</a>
        <a href="manage_employers.php" class="list-group-item"><i class="fa fa-caret-right"></i> Manage Employee</a>
        <a href="add_employer.php" class="list-group-item"><i class="fa fa-caret-right"></i> Add Employee</a>
	</div>
	  
	  <div class="list-group list-group-margingAdjTwo">
        <a  class="list-group-item active"><i class="fa fa-file-text-o"></i> Vacancies</a>
        <a href="view_vacancies.php" class="list-group-item"><i class="fa fa-caret-right"></i> View/Search Vacancies</a>
		  </div>
	  
    <div class="list-group list-group-margingAdjTwo">
        <a  class="list-group-item active"><i class="fa fa-file-text-o"></i> Applications</a>
        <a href="view_all_applications.php" class="list-group-item"><i class="fa fa-caret-right"></i> Manage Applications</a>
    </div>
	  
	   <div class="list-group list-group-margingAdjTwo">
        <a  class="list-group-item active"><i class="fa fa-file-text-o"></i> References</a>
        <a href="pending_references.php" class="list-group-item"><i class="fa fa-caret-right"></i> Manage References</a>
    </div>
	  
	   <div class="list-group list-group-margingAdjTwo">
        <a  class="list-group-item active"><i class="fa fa-file-text-o"></i> Users</a>
        <a href="users.php" class="list-group-item"><i class="fa fa-caret-right"></i> Manage Users</a>
		    <a href="add_users.php" class="list-group-item"><i class="fa fa-caret-right"></i> Add User</a>
    </div>
	  
    <a href="../classes/logout.php">
    <div class="stdPanelSignOut">
    <h3>Sign Out</h3>
    </div>
    </a>

</div>
	