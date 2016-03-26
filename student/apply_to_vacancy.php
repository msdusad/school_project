<?php
include('studentheader.php');
$userid=$_GET['userid'];
 $vacy_date=$_GET['vacancy_created_date'];
?>
<script>
	function showfileupload(showdiv){
		if(showdiv=='yes'){
		document.getElementById('fileup').style.display="block";
		}
		
		if(showdiv=='no'){
		document.getElementById('fileup').style.display="none";
		}
		
	
	}
</script>

<div class="col-xs-12 col-sm-12 col-md-9">
        
<h1><i class="fa fa-briefcase"></i> Welcome to Apply To Vacancy</h1>

<div class="row">
	<div class="col-md-8 empDbTitle">
		<a href="studentdashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a>
	</div>
	<div class="col-md-4 empDbDateStrip">    
		<span><i class="fa fa-calendar"></i>  <?php echo $viewdashdate;?></span>
	</div>

 </div>
 
<div class="row">
<div class="col-md-12">

       <!-- start hear -->
		<h1>Apply To Vacancy</h1>
		
	<a href="letter_guidelines.php"><span style="margin-left:70%;">Guidelines How To Write Letter</span></a>
		<form action="review_application.php?vacncy_create_date=<?php echo $vacy_date;?>" method="post" enctype="multipart/form-data">
		Cover Letter<br>
		<textarea type="text" name="cover_letter"  rows="10" cols="70" required></textarea>
		<br><br>
		Add My CV /Media
		<select class="btn btn-primary" name="send_media" onchange="showfileupload(this.value);" required>
		<option value="no">No</option>
		<option value="yes">Yes</option>
		</select>
		<br><br>
		<input type="file" name="extrnalfile" id="fileup" style="display:none;"><br>
		<button class="btn btn-primary" type="submit" name="userid" value="<?php echo $userid;?>">Review your application</button>
		<br><br>
		</form>
			
		
			
		</div>
			
			</div>
			
			<!-- end Hear -->
       
        
	</div>
    <!-- student Dashboard Footer -->
   

<?php
include('studentfooter.php');
?>
