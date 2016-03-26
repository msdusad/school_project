<?php
include('studentheader.php');
include('../classes/student_cv_fetched.php');
?>
<head>
	<script>
		function editshow(idhide){
		document.getElementById('personal_view').style.display="none";
		document.getElementById('cv_edit').style.display="block";
		
		}
	</script>
</head>
<div class="col-xs-12 col-sm-12 col-md-9">

<h1><i class="fa fa-check-circle"></i> Welcome to Your CV</h1>

<div class="row">
	<div class="col-md-8 empDbTitle">
		<a href="studentdashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a>
	</div>
	<div class="col-md-4 empDbDateStrip">    
		<span><i class="fa fa-calendar"></i><?php echo $viewdashdate;?></span>
	</div>
</div>
<br>
	<ul class="nav nav-tabs">
		<li ><a  href="cv_view.php">Personal Detail</a></li>
		<li><a href="cv_education.php">Education</a></li>
		<li ><a href="cv_achievment.php">Achievements & Interests</a></li>
		<li ><a href="cv_media.php">Media</a></li>
		<li class="active"><a href="add_cv.php">Your CV</a></li>
	</ul>
         

    <div class="row">
        <div class="col-md-12">
        <div class="stdWelcomeBlock" id="personal_view">
		
        <div class="row" style="margin-top:30px;">
			<div class="col-md-11">
				<h3 class="cv_achivement_h"><i class='fa fa-caret-right'></i> Your CV</h3>
			</div>
			<div class="col-md-1">
				<button class="btn btn-primary cv_achivement_editBtn" onclick="editshow(this.id);">Edit</button>
			</div>
		</div>
		<br>
		
		<hr style="border-top:1px dashed lightgray;">
		
       <div id="contactdetail" style="font-size:20px;">
		   <br>
			<div class="stdWelcomeBlock">


 <div class="col-xs-12 col-sm-12 col-md-3">
              <a href="download_file.php"><i class="fa fa-download"></i> Download CV</a>
			</div> -
			</div>
       </div>

		<hr style="border-top:1px dashed lightgray;">
		
        </div>
			
			 <div id="cv_edit" class="stdWelcomeBlock" style="display:none;">
				     <br>
			<form method="post" action="../classes/student_cv_db.php" name="media_upload" enctype="multipart/form-data">

			<div class="row">			
					<div class="col-xs-12 col-sm-12 col-md-12"><h1 class="cv_achivement_hMedia"><i class="fa fa-caret-right"></i> CV </h1></div>
			</div>
			
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6"><h2 class="cv_media_h"><i class="fa fa-hand-o-right"></i> Select A File</h2></div>
				<div class="col-xs-12 col-sm-12 col-md-6"><input type="file" name="cv_file" id="video" style="padding:5px;" required></div>
			</div>

					<hr style="border-top:1px dashed lightgray;" >

					
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<input type="submit" name="cv_upload" value="Upload" class="btn btn-primary cv_media_uploadBtn">
				</div>
			</div>
			
			</form>

					
					
			<br>
			
		 
				 </div>
        
       
	</div>
    
    </div>


<?php
include('studentfooter.php');
?>