<?php 
include('../classes/connection.php');
session_start();
include('../classes/employer_fetched_data.php');
if(!isset($_SESSION['employeruserid']))
{
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
<title>Employee Dashboard | Welcome</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<!-- Mobile Navigation Converter -->
<link href="script/mobileMenuConverter.css" rel="stylesheet" type="text/css">

<!-- This will dynamically create Mobile Menu with jQuery.  -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="script/mobileMenuConverter.js" type="text/jscript"></script>


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
  <a href="employeedashboard.php">
      <img src="img/logo.png" alt="Logo" class="logoStdLogin">
  </a>
  
  <div class="empProShort">
<h1><?php echo $company_name ;?></h1>
<p><a href="employer_profile.php">Edit Profile  <i class="fa fa-edit"></i></a></p>
<p>
<img src="<?php if($logo!=''){echo "logo/".$logo;}else{echo "img/empProPic.png";}?>" alt="title" class="employer-proPicCompany">
</p>
  </div>
  <div class="clearfix"></div>
  
    <div class="list-group list-group-margingAdjTwo">
        <a class="list-group-item active"><i class="fa fa-group"></i> Vacancy</a>
        <a href="manage_vacancy.php" class="list-group-item"><i class="fa fa-caret-right"></i> Manage Vacancy</a>
        <a href="create_vacancy.php" class="list-group-item"><i class="fa fa-caret-right"></i> Create Vacancy</a>
    </div>
    <div class="list-group list-group-margingAdjTwo">
        <a class="list-group-item active"><i class="fa fa-building-o"></i> Location</a>
        <a href="employer_locations.php" class="list-group-item"><i class="fa fa-caret-right"></i> Manage Location</a>
        <a href="create_location.php" class="list-group-item"><i class="fa fa-caret-right"></i> Create Location</a>
	</div>
    <div class="list-group list-group-margingAdjTwo">
        <a class="list-group-item active"><i class="fa fa-file-text-o"></i> Applications</a>
        <a href="manage_application.php" class="list-group-item"><i class="fa fa-caret-right"></i> Manage Applications</a>
        <!--<a href="#fakeLink" class="list-group-item"><i class="fa fa-caret-right"></i> Manage Applications</a>-->
    </div>
    <a href="../classes/logout.php">
    <div class="stdPanelSignOut">
    <h3>Sign Out</h3>
    </div>
    </a>

</div>
	