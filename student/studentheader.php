<?php
include('../classes/connection.php');
session_start();
if(!isset($_SESSION['studentuserid']))
{
	header('location:../index.php');
}



$dashdate=date_create();
          $viewdashdate=date_format($dashdate,"l , d  M  Y");
//$lastlog=date_format($date,"l , M d Y, h:i A");


$std_user=$_SESSION['studentuserid'];
$sql=mysql_query("select * from student_profile a,student_school b,student_preferences c where a.userid='$std_user' and b.userid='$std_user' and c.userid='$std_user';");

if($sql){
while($row=mysql_fetch_array($sql)){
	// for student profile from student_profile table
           $fname=$row['first_name'];
	       $lname=$row['last_name'];
	$address=$row['home_address'];
	 $city=$row['city'];
	 $region=$row['region'];
	 $postal_code=$row['postal_code'];
	      $mob=$row['phone'];
	       $email=$row['email'];
	           $website=$row['website'];
	          $pic=$row['profile_picture'];
	// for school detail from student School/College table
	
	$school_name=$row['school_name'];
	$school_address=$row['school_address'];
	$school_city=$row['school_city'];
	$school_region=$row['school_region'];
	$school_pcode=$row['school_postalcode'];
	// student preferences data from preference table
	$all=$row['all_jobs'];
	$banking_finance=$row['banking_finance'];
	$retail	=$row['retail'];
	$legal=$row['legal'];
	$construction=$row['construction'];
	$medical=$row['medical'];
	$other=$row['other'];
	$school_year=$row['school_year'];
	$gender=$row['gender'];

if(($fname !='') && ($lname !='') && ($email !='') && ($school_year !='') && ($gender !='') ){

	$profile_complete="30";
}

if( ($fname!='') && ($lname!='') && ($email!='') && ($school_year!='') && ($gender!='')  && ($city!='') && ($mob!='') && ($pic!='') ){

	$profile_complete="60";
}

if(($fname!='') && ($lname!='') && ($email!='') && ($school_year!='') && ($gender!='') && ($address!='') && ($city!='') && ($region!='') && ($postal_code!='') && ($mob!='') && ($pic!='') && ($school_name!='') && ($school_city!='') && ($school_region!='') && ($school_pcode!='') ){

	$profile_complete="80";
}




}

}
else{echo "Error in query Pass".mysql_error();}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Student Login | Welcome</title>
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
<script type="text/javascript" src="../js/validation.js"></script>

</head>
<body>
<div class="container">

<div class="row">

  <div class="col-xs-12 col-sm-12 col-md-3 bgColorOne">
  <a href="studentdashboard.php">
      <img src="img/logo.png" alt="Logo" class="logoStdLogin">
  </a>
	

  <div class="empProShort">
<p>
<img src="<?php if($pic!=''){echo "student_docs/profile_photo/".$pic;}else{echo "img/empProPic.png";}?>" alt="title" class="employer-proPicCompany" style="height:100px;width:100px;">
</p>
  </div>


  <h5 align="center">Welcome back <?php echo $fname;?></h5>
	<div class="stdSearchPanel">
		<form>
			<div class="input-group" style="width:95%!important; margin:0 auto;">
				<input type="text" class="form-control avc" placeholder="Input Search here..">
				<span class="input-group-btn">
				<button class="btn btn-primary btn-embossed" type="button">Go!</button>
				</span>
			</div>
		</form>
	</div>
    <div class="list-group list-group-margingAdj">
        <a href="view_profile.php" class="list-group-item"><img src="img/girlPro-xs.png" alt="title" class="girlProIcon"/><span class="badge"><?php echo $profile_complete;?>%</span> Profile</a>
        <a href="my_application.php" class="list-group-item "><img src="img/docsInfo-xs.png" alt="title" class="docInfo"/><span class="badge"></span>Application</a>
        <a href="cv_view.php" class="list-group-item"><img src="img/calInfo-xs.png" alt="title" class="calInfo"/><span class="badge"></span>My CV</a>
    </div>
    <div class="list-group list-group-margingAdjTwo">
        <a href="view_all_vacancies.php" class="list-group-item"><img src="img/thumbsUp.png" alt="title" class="girlProIcon"/> All Vacancies</a>
	</div>
    <div class="list-group list-group-margingAdjTwo">
        <a href="http://kbase.worktaster.com/" class="list-group-item" target="_blank"><img src="img/info.png" alt="title" class="girlProIcon"  /> Knowledge Base</a>
    </div>

 <div class="list-group list-group-margingAdjTwo">
        <a href="std_mng_reference.php" class="list-group-item"><img src="img/info.png" alt="title" class="girlProIcon"/> Manage References</a>
    </div>

    <a href="../classes/logout.php">
    <div class="stdPanelSignOut">
    <h3>Sign Out</h3>
    </div>
    </a>

</div>
