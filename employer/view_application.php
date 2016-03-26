<?php
include('employerheader.php');

$cover_letter=$_GET['cover_lett'];
$student_userid=$_GET['studentuser'];
$apply_time=$_GET['apply_time'];
$vacancy_time=$_GET['vacancy_time'];


// for clesses/view_application fetch.php

$_SESSION['view_application_userid']=$_GET['studentuser'];
$_SESSION['vacancy_apply_time']=$_GET['apply_time'];
$_SESSION['vacancy_create_time']=$_GET['vacancy_time'];
include('../classes/view_application_fetch.php');

// End Hear
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Employee Dashboard | Welcome</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<!-- Responsive Tabs -->
<link rel="stylesheet" type="text/css" href="css/demoTab.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Mobile Navigation Converter 
<link href="script/mobileMenuConverter.css" rel="stylesheet" type="text/css">-->

<!-- This will dynamically create Mobile Menu with jQuery.  

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="script/mobileMenuConverter.js" type="text/jscript"></script>-->


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

<div class="col-xs-12 col-sm-12 col-md-9">

<?php include('returnToDashboard.php');?>


<h1 class="empDbH">Welcome to View Application</h1>

    <div class="row">

    <div class="col-xs-6 col-md-8 empDbTitle">
    <i class="fa fa-mortar-board"></i> Student Details
    </div>

    <div class="col-xs-6 col-md-4 empDbDateStrip">    
	<span><i class="fa fa-calendar"></i><?php echo " ".$viewdashdate;?></span>
    </div>
    
    </div>
    
    <div class="row" style="margin-top:30px;">
        <div class="col-sm-6">
        	<a href="invite_for_interview.php?studuser=<?php echo $student_userid;?>&apply_time=<?php echo $apply_time;?>" class="btn btn-danger inviteInterviewBtn">Invite for Interview</a>
		</div>
		<div class="col-sm-6">
        	<a href="reject_application.php?studuser=<?php echo $student_userid;?>&apply_time=<?php echo $apply_time;?>" class="btn btn-danger rejectApplicationBtn">Reject Application</a>
		</div>
    </div>
    
    <div class="row">
        <div class="col-sm-12" style="margin-top:20px;">
            <h1><?php echo $first_name." ".$last_name;?></h1>
        </div>
    </div>
    
   <style>
   .tabs i{color:#000;}
   </style> 
    
    
    <div id="tabs" class="tabs">
    <nav>
        <ul>
            <li><a href="#section-1"><span>Cover Letter</span></a></li>
            <li><a href="#section-2"><span>CV</span></a></li>
            <li><a href="#section-3"><span>Media</span></a></li>
            <li><a href="#section-4"><span>Reference</span></a></li>
            <!--<li><a href="#section-5"><span>Other</span></a></li>-->
        </ul>
    </nav>
    <div class="content">
        <section id="section-1">
            <div class="mediabox">
				<?php echo "<p>".$cover_letter."</p>";?>
                <!--<h3>Dear Mrs Livingstone,</h3>
                <p>I would very much appreciate the opportunity of a work placement with Barclays Bank during my school holidays.</p>
                <p>Aside from the experience of working in a professional environment, Barclays is a company that I respect enormously. The experience would also help me in my future career as a web developer.</p>
                <p>I woud like to take this opportunity to thank you for considering my application and look forward to hearing from you.</p>
                <p>Your sincerely,</p> -->
                <h6><?php echo $first_name." ".$last_name;?></h6>
                
                <div class="panel panel-danger" style="margin-top:30px;">
                    <div class="panel-body">
                    <h5>Requested dates</h5>
                    <p>From <?php echo $fromdate1 ;?> to <?php echo $todate1 ;?></p>
                    
                    <h5>Duration</h5>
                    <p><?php echo $duration ;?></p>
                    </div>
                </div> <!-- Panel -->
                
            </div>
        </section>
        
        <section id="section-2">
            <div class="mediabox">
                <h3><?php echo $first_name." ".$last_name;?></h3>
                <hr style="margin:10px 0px;">
                <!-- <p>Date of birth: <?php //echo $dob_day."/".$dob_month."/".$dob_year;?></p> -->
                <p>Gender: <?php echo $gender;?></p>
                <p>Lives in: <?php echo $city;?></p>
                
                <h5>Candidate Profile</h5>
                <hr style="margin:10px 0px;">
                <p><?php echo $cv_data;?></p>
                
                <h5>Candidate Education</h5>
                <hr style="margin:10px 0px;">
                <em class="col-md-6 emleft"><?php echo $school_name;?></em>
                <em class="col-md-6 emright"><?php echo $gcsc_school_start_month."/".$gcsc_school_start_year;?> - Present</em>
                <div class="clearfix"></div>                
                <p>Studying towards
					<?php if($currently_studying=='1' || $currently_studying=='2'){
                      echo "GCSCs : ";

                   if($subject1!=''){
				    echo $subject1." ,";
				   }
 if($subject2!=''){
				    echo $subject2." ,";
				   }
 if($subject3!=''){
				    echo $subject3." ,";
				   }
 if($subject4!=''){
				    echo $subject4." ,";
				   }
 if($subject5!=''){
				    echo $subject5." ,";
				   }
 if($subject6!=''){
				    echo $subject6." ,";
				   }
 if($subject7!=''){
				    echo $subject7." ,";
				   }
 if($subject8!=''){
				    echo $subject8." ,";
				   }
 if($subject9!=''){
				    echo $subject9." ,";
				   }
 if($subject10!=''){
				    echo $subject10." ,";
				   }
 if($subject11!=''){
				    echo $subject11." ";
				   }
}
				?>
				
				</p>
             
				<?php
               if($select_school_name=='2'){
				  ?> 
				  <div class="col-md-6 emleft"><?php echo $other_school_name;?></div>
                <div class="col-md-6 emright"><?php echo $other_school_start_month."/".$other_school_start_year." - ".$other_school_end_month."/".$other_school_end_year?></div>

                <div class="clearfix"></div>
                <p>GCSE:        
					<?php 
					  if($subject1!=''){
				    echo $subject1." ,";
				   }
 if($subject2!=''){
				    echo $subject2." ,";
				   }
 if($subject3!=''){
				    echo $subject3." ,";
				   }
 if($subject4!=''){
				    echo $subject4." ,";
				   }
 if($subject5!=''){
				    echo $subject5." ,";
				   }
 if($subject6!=''){
				    echo $subject6." ,";
				   }
 if($subject7!=''){
				    echo $subject7." ,";
				   }
 if($subject8!=''){
				    echo $subject8." ,";
				   }
 if($subject9!=''){
				    echo $subject9." ,";
				   }
 if($subject10!=''){
				    echo $subject10." ,";
				   }
 if($subject11!=''){
				    echo $subject11." ";
				   }
					?></p>
                   
				<?php   
			   
			   }
?>
              
                <!--<h5>Professional Experience</h5>
                <hr style="margin:10px 0px;">
                
                <em class="col-md-6 emleft">Costa Coffee Worktester</em>
                <em class="col-md-6 emright">May 2014</em>

                <div class="clearfix"></div>
                <p>In my last work placement, I worked for Costa Coffee as a barrista. I learned how to handle pressure during peak hours and how to manage customer expectations.</p> -->
                <h5>Achivements</h5>
                <hr style="margin:10px 0px;">
               <?php
if($achiv1!=''){
echo "<h5>".$achiv1."</h5>";
}
if($achiv2!=''){
echo "<h5>".$achiv2."</h5>";
}
if($achiv3!=''){
echo "<h5>".$achiv3."</h5>";
}
if($achiv4!=''){
echo "<h5>".$achiv4."</h5>";
}


?>
                
                <h5>Extra curricular interests</h5>
                <hr style="margin:10px 0px;">
				<?php
if($intr1!=''){
echo " <p>".$intr1." </p>";
}
if($intr2!=''){
echo " <p>".$intr2." </p>";
}
if($intr3!=''){
echo " <p>".$intr3." </p>";
}
if($intr4!=''){
echo " <p>".$intr4." </p>";
}
?>
               

                
            </div>
        </section>
        <section id="section-3">
            <div class="mediabox">
                <!--<h3>Video Heading</h3>
                <p>Lotus root water spinach fennel kombu maize bamboo shoot green bean swiss chard seakale pumpkin onion chickpea gram corn pea.Sushi gumbo beet greens corn soko endive gumbo gourd.</p> -->
				<?php
$mediashare=mysql_query("select send_media from job_applied where student_userid='$student_userid' && company_userid='$employeruser' && apply_time='$apply_time' && vacancy_time='$vacancy_time'");

if($mediashare){
	if ($mediashare && mysql_num_rows($mediashare)>0) {
    if($row = mysql_fetch_array($mediashare)){ 
		
		$permission=$row['send_media'];
	}
		
	}

}
else{
echo "Error in Media Permission ".mysql_error();
}

if($permission=='yes'){
	       ?>  
				<video controls >
                   <source src="../student/student_docs/video/<?php echo $cv_video;?>" type="video/mp4">
					<source src="../student/student_docs/video/<?php echo $cv_video;?>" type="video/mogg">
					<source src="../student/student_docs/video/<?php echo $cv_video;?>" type="video/webm">
</video>
				
				
				<?php	
}
else{echo "Media File Not Shared";}
	?>
				
      
            </div>
        </section>
        <section id="section-4">
            <div class="mediabox">
                             <?php
if($all=='yes'){
?>
	        <p><span class='ss-check'>Banking and finance</span></p><br>
			<p><span class='ss-check'>Retail</span></p><br>
			<p><span class='ss-check'>Construction</span></p><br>
			<p><span class='ss-check'>Legal</span></p><br>
			<p><span class='ss-check'>Medical</span></p><br>
			<p><span class='ss-check'>Other</span></p><br>
			<?php
}
else{
     
	if($banking_finance=='checked'){
	 echo "<p><span class='ss-check'></span> Banking and finance</p><br>";
	}

if($retail=='checked'){
	 echo "<p><span class='ss-check'></span> Retail</p><br>";
	}
	if($legal=='checked'){
	 echo "<p><span class='ss-check'></span> Legal</p><br>";
	}
if($construction=='checked'){
	 echo "<p><span class='ss-check'></span> Construction</p><br>";
	}
	if($medical=='checked'){
	 echo "<p><span class='ss-check'></span> Medical</p><br>";
	}
	if($other=='checked'){
	 echo "<p><span class='ss-check'></span> Other</p><br>";
	}
}

?>
            </div>
        </section>
    </div><!-- /content -->
    </div><!-- /tabs -->
                

    <div class="row">
        <div id="copyrightStdDesk">
            <div class="col-md-6">
                <ul>
                    <li><a href="#">Term and conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Cookies</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <span>&copy; Worktaster.co.uk | 2015.</span>
                </div>
        </div>
    </div>
    
</div>


</div>  <!-- .row -->

</div>  <!-- .container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/checkbox.js"></script>
<script src="js/radio.js"></script>
<script src="js/bootstrap-switch.js"></script>
<script src="js/toolbar.js"></script>
<script src="js/classie.js"></script>
<script src="js/application.js"></script>

<!-- Responsive Tab Script
================================================== -->
<script src="js/cbpFWTabs.js"></script>
<script>
	new CBPFWTabs( document.getElementById( 'tabs' ) );
</script>
</body>
</html>
