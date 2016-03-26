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

<h1><i class="fa fa-briefcase"></i> Welcome to Your CV</h1>

<div class="row">
	<div class="col-md-8 empDbTitle">
		<a href="studentdashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a>
	</div>
	<div class="col-md-4 empDbDateStrip">    
		<span><i class="fa fa-calendar"></i> <?php echo $viewdashdate;?></span>
	</div>

 </div>
<br>
	<ul class="nav nav-tabs">
        <li ><a  href="cv_view.php">Personal Detail</a></li>
        <li><a href="cv_education.php">Education</a></li>
        <li class="active"><a href="cv_achievment.php">Achievements & Interests</a></li>
        <li><a href="cv_media.php">Media</a></li>
        <li><a href="add_cv.php">Your CV</a></li>
	</ul>
         

    <div class="row">
        <div class="col-md-12">
        <div class="stdWelcomeBlock" id="personal_view">
		
		<div class="row" style="margin-top:30px;">
			<div class="col-md-11">
				<h3 class="cv_achivement_h"><i class='fa fa-caret-right'></i> Achievements & Interests</h1>
			</div>
			<div class="col-md-1">
				<button class="btn btn-primary cv_achivement_editBtn" onclick="editshow(this.id);">Edit</button>
			</div>
		</div>
		
		<hr style="border-top:1px dashed lightgray;" >
		
			

			
<div id="contactdetail">
		   <br>
		   <div class="row">
			<div class="col-md-6">
			
				<?php
				if($intr1!=''){
				echo "<p style='font-size:22px;'>Interests<p><br>";
				echo "<p><i class='fa fa-caret-right'></i> $intr1<p><br>";
				}
				if($intr2!=''){
				echo "<p><i class='fa fa-caret-right'></i> $intr2<p><br>";
				}
				if($intr3!=''){
				echo "<p><i class='fa fa-caret-right'></i> $intr3<p><br>";
				}
				if($intr4!=''){
				echo "<p><i class='fa fa-caret-right'></i> $intr4<p><br>";
				}

				?>		
			</div>
		
			<div class="col-md-6">
			   <?php
				if($achiv1!=''){
					echo "<p style='font-size:22px;'> Achievements<p><br>";
				echo "<p><i class='fa fa-caret-right'></i> $achiv1<p><br>";
				}
				if($achiv2!=''){
				echo "<p><i class='fa fa-caret-right'></i> $achiv2<p><br>";
				}
				if($achiv3!=''){
				echo "<p><i class='fa fa-caret-right'></i> $achiv3<p><br>";
				}
				if($achiv4!=''){
				echo "<p><i class='fa fa-caret-right'></i> $achiv4<p><br>";
				}
				?>	
			</div>
       </div>
		</div>
		
		<hr style="border-top:1px dashed lightgray;" >
			
        </div>
			
		<div id="cv_edit" class="stdWelcomeBlock" style="display:none;">
			 <br>

           
            <form method="post" action="../classes/student_cv_db.php" name="intrest" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-10">
								<h3 class="cv_achivement_h"><i class='fa fa-caret-right'></i> Achievements & Interests</h3>
							</div>
						</div>
					</div>

					<br>
						<div class="row" id="cv_achivement_editBlocks">				
                            <div class="col-md-12">

								<span>Achievements</span>
								<span><input type="text" name="Achievement1" id="Achievement1" placeholder="Achievement 1" value="<?php echo $achiv1;?>"></span>
								<span><input type="text" name="Achievement2" id="Achievement2" placeholder="Achievement 2" value="<?php echo $achiv2;?>"></span>
								<span><input type="text" name="Achievement3" id="Achievement3" placeholder="Achievement 3" value="<?php echo $achiv3;?>"></span>
								<span><input type="text" name="Achievement4" id="Achievement4" placeholder="Achievement 4" value="<?php echo $achiv4;?>"></span>
                            </div>
						
                            <div class="col-md-12">
								<hr style="border-top:1px dashed lightgray;" >
							</div>
                            <div class="col-md-12">
								<span>Interests</span>
                                <span><input type="text" name="Interest1" id="Interest1" placeholder="Interest 1" value="<?php echo $intr1;?>"></span>
								<span><input type="text" name="Interest2" id="Interest2" placeholder="Interest 2" value="<?php echo $intr2;?>"></span>
								<span><input type="text" name="Interest3" id="Interest3" placeholder="Interest 3" value="<?php echo $intr3;?>"></span>
								<span><input type="text" name="Interest4" id="Interest4" placeholder="Interest 4" value="<?php echo $intr4;?>"></span>
                            </div>
                        </div>
						
					<div class="row">
						<div class="col-md-offset-9 col-md-3">
							<div class="">
								<input type="submit" name="achive_intrest" value="Save" class="btn btn-primary cv_achivement_saveBtn">
							</div>
						</div>
					</div>
					
				 
				 </div>
				 

        
       
	</div>
	</div>
    


<?php
include('studentfooter.php');
?>