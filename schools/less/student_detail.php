<?php include('schoolheader.php'); 
$stduserid=$_GET['userid'];
$application=$_GET['apps'];
?>
<head>
	<style type="text/css">
	.tabs i{color:#000;}
	.comDtlBlock{ padding:15px; border:1px solid lightgray; border-radius:6px; margin-top:15px;}
	.comDtlBlock h3{ text-align:center; font-size: 20px;}
	.comDtlBlock img{display:block; margin:0 auto; margin-top:20px;}
	.comDtlBlock p{ text-align:center; margin-top:10px;}
	.comDtlBlock em{ display:block; text-align:center; margin-top:10px; border-bottom:1px solid lightgray; padding-bottom:50px;}
</style>
</head>


<div class="col-xs-12 col-sm-12 col-md-9">

	<div class="row">				
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="">
				<h1><i class="fa fa-check-circle"></i> Welcome to School/college dashboard</h1>
			</div>
		</div>
	</div>


    <div class="row">
		<div class="col-md-8 empDbTitle">
		<a href='schooldashboard.php'><i class="fa fa-dashboard"></i> Dashboard</a>
		</div>
		<div class="col-md-4 empDbDateStrip">    
		<span><i class="fa fa-calendar"></i><?php echo " ".$viewdashdate;?></span>
		</div>
    </div>
    
    <div class="row">
        <div class="col-md-4">
		<div class="comDtlBlock">
		<?php
		$stdetail=mysql_query("select * from student_profile a,login b,student_achievements c where a.userid='$stduserid' and b.userid='$stduserid' and c.userid='$stduserid';");
		if($row=mysql_fetch_array($stdetail)){
		?>



		<h3><?php echo $row['first_name']." ".$row['last_name']; ?></h3>
		<img <?php if($row['profile_picture']!=''){

		?> src="../student/student_docs/profile_photo/<?php echo $row['profile_picture']; ?>" 
		<?php
		}
		else{
		?>
		src="img/empProPic.png"
		<?php
		}
		?> height="100" width="100" >
		<div style="width:100px; height:35px; border-radius:6px; text-align:center; line-height:35px; color:#fff; font-size:20px; background-color:#FF3333; margin:0 auto; margin-top:15px;">6G</div>
		<p><i class="fa fa-flag"></i> Worktaster student since</p>
		<em><i class="fa fa-clock-o"></i> <?php echo $row['joining_date']; ?></em>
		<p><i class="fa fa-clock-o"></i> Last logged in on <?php echo $row['last_login']; ?></p>
		<p><i class="fa fa-file-text-o"></i> Applications:<?php echo $application; ?></p>
		<p><i class="fa fa-briefcase"></i> Placements: <?php echo "fetch placement" ?></p>
		<hr style="border-top:1px dashed lightgray;"/>
		<center>
		<button type="button" class="btn-success btn-lg">Email Employer</button>
		<p></p>
		<button type="button" class="btn-danger btn-lg">Exclude Employer</button>
		</center>
		</div>
    </div>
        
    <div class="col-md-8" >
   
        <div id="tabs" class="tabs">
        <nav>
            <ul>
                <li><a href="#section-1" style="font-size:1.10em;"><span>Status</span></a></li>
                <li><a href="#section-2" style="font-size:1.10em;"><span>Application</span></a></li>
                <li><a href="#section-3" style="font-size:1.10em;"><span>Placement</span></a></li>
                <li><a href="#section-4" style="font-size:1.10em;"><span>References</span></a></li>
            </ul>
        </nav>
        <div class="content">
            <section id="section-1">
                <div class="mediabox" > 
                	<div style="border:1px solid lightgray; border-radius:6px; padding:15px 10px 15px 10px;">
	                    <h3><i class="fa fa-pencil" style="padding-right:25px;"></i> CV Status</h3>
                        <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-success" role="progressbar" style="width: 80%;">
                        </div><br>
                        <div>80% Compleated</div>
                        </div>
                    </div>
                    
                    <h3>
					<i class="fa fa-star-half-o"></i> Interests</h3>
					<hr style="border-top:1px dashed lightgray;"/>
                    <p><?php echo $row['interest1'];?></p><p><?php echo $row['interest2'];?></p><p><?php echo $row['interest3'];?></p><p><?php echo $row['interest4'];?></p>
                    <?php 
										} 
		?>	
                    <h3><i class="fa fa-suitcase"></i> Placements.</h3>
					<hr style="border-top:1px dashed lightgray;"/>
                    
                    <p style="display:inline-block; width:57%;">
					<i class="fa fa-bank"></i> 2014 Barclays Bank (Solihull Branch)
					</p>
					<p style="display:inline-block; width:37%; font-size:15px; color:#258A78;" class="text-right">
						<i class="fa fa-comment"></i> View Feedback
					</p>
                    <p>Managing Director</p>
                    
                    <h3><i class="fa fa-file-text"></i> This year's applications</h3>
					<hr style="border-top:1px dashed lightgray;"/>
					<div class="table-responsive">
                   <table class="table">
				<thead>
					<th style="font-size:13px;">Employer</th>
					<th style="font-size:13px;">Vacancy</th>
					<th style="font-size:13px;">Placement Date</th>
					<th style="font-size:13px;">Status</th>
					<th style="font-size:13px;">Cover Letter</th>
				</thead>
				
				<?php  $year=date("Y"); 

				//new
				$yearapplication=mysql_query("select a.company_name,b.vacancy_title,c.apply_time,c.status,c.cover_letter from employer_registration a,create_vacancy b,job_applied c where c.student_userid='$stduserid' and c.company_userid=a.userid and c.company_userid=b.userid and c.vacancy_time=b.automatic_date and c.apply_time >= '2015-01-01:00:00:00'AND c.apply_time <= '2015-12-30:23:59:59.997'");

				//old
				/*	$yearapplication=mysql_query("select b.company_name,a.apply_time,a.status,c.vacancy_title from job_applied a,employer_registration b,create_vacancy c where a.apply_time >= '2015-01-01:00:00:00'AND a.apply_time <= '2015-12-30:23:59:59.997' and a.company_userid=b.userid and a.company_userid=c.userid"); */
				if($yearapplication){
				while($row=mysql_fetch_array($yearapplication)){
				?>
				<tr><td><?php echo $row['company_name'];?></td>
				<td><?php echo $row['vacancy_title'];?></td>
				<td><?php echo $row['apply_time'];?></td>
				<td><?php echo $row['status'];?></td>
				<td><?php echo $row['cover_letter'];?></td></tr>

				<?php
				}
				}
				?>

				</table>	
    </div>                
                    

                    
                </div>
            </section>
            
            <section id="section-2">
                <div class="mediabox" style="width:100%;">
                
                    <h3><i class="fa fa-briefcase"></i> Current Application</h3>
                    <hr style="border-top:1px dashed lightgray;"/>
                    <div class="sclCurrentVacancy">
                    	
                    	
 <table class="table table-striped" >
				<thead>
					<th>Employer</th>
					<th>Vacancy</th>
					<th>Placement Date</th>
					<th>Status</th>
				</thead>
				
			<?php 

//new
$yearapplication=mysql_query("select a.company_name,b.vacancy_title,c.apply_time,c.status,c.cover_letter from employer_registration a,create_vacancy b,job_applied c where c.student_userid='$stduserid' and c.company_userid=a.userid and c.company_userid=b.userid and c.vacancy_time=b.automatic_date ");

//old
		/*	$yearapplication=mysql_query("select b.company_name,a.apply_time,a.status,c.vacancy_title from job_applied a,employer_registration b,create_vacancy c where a.apply_time >= '2015-01-01:00:00:00'AND a.apply_time <= '2015-12-30:23:59:59.997' and a.company_userid=b.userid and a.company_userid=c.userid"); */
if($yearapplication){
while($row=mysql_fetch_array($yearapplication)){
?>
	        <tr><td><?php echo $row['company_name'];?></td>
			<td><?php echo $row['vacancy_title'];?></td>
			<td><?php echo $row['apply_time'];?></td>
			<td><?php echo $row['status'];?></td>
			
<?php
}
}
else{
echo "Error in Application ".mysql_error();
}
	?>
		
	</table>	
                        
                    </div>

                </div>
            </section>
            <section id="section-3" >
                <div class="mediabox">
                    <h3><i class="fa fa-history"></i> Placement History</h3>
                    <hr style="border-top:1px dashed lightgray;"/>
                    <div class="sclCurrentVacancy" >
						Placement Are Not Fixed Yet.No Any Record
						<!--
                                            <div style="border-bottom:1px solid lightgray; padding:10px 0px;">
                                                <div style="display:inline-block; width:110px;">VACANCY</div>
                                                <div style="display:inline-block; width:110px;">FROM</div>
                                                <div style="display:inline-block; width:120px;">PLACEMENT DATE</div>
                                                <div style="display:inline-block; width:100px;">STATUS</div>
                                            </div>
                                            
                                            <div style="border-bottom:1px solid lightgray; padding:10px 0px;">
                                                <div style="display:inline-block; width:110px;">Lorem</div>
                                                <div style="display:inline-block; width:110px;">Lorem</div>
                                                <div style="display:inline-block; width:120px;">Lorem</div>
                                                <div style="display:inline-block; width:100px;">Lorem</div>
                                            </div>
                                            
                                            <div style="border-bottom:1px solid lightgray; padding:10px 0px;">
                                                <div style="display:inline-block; width:110px;">Lorem</div>
                                                <div style="display:inline-block; width:110px;">Lorem</div>
                                                <div style="display:inline-block; width:120px;">Lorem</div>
                                                <div style="display:inline-block; width:100px;">Lorem</div>
                                            </div>
                                            
                                            <div style="border-bottom:1px solid lightgray; padding:10px 0px;">
                                                <div style="display:inline-block; width:110px;">Lorem</div>
                                                <div style="display:inline-block; width:110px;">Lorem</div>
                                                <div style="display:inline-block; width:120px;">Lorem</div>
                                                <div style="display:inline-block; width:100px;">Lorem</div>
                                            </div>
                    
                                            -->
                                        </div>
                    
                </div>
            </section>
            <section id="section-4">
                <div class="mediabox">
                 <h3><i class="fa fa-history"></i> Reference</h3>
                    <hr style="border-top:1px dashed lightgray;"/>
                    <div class="sclCurrentVacancy">
						
                    	<table class="table">
							<thead>
								<th>Date</th>
									<th>Status</th>
							</thead>
                    		
									<?php
$sql=mysql_query("select ref_date,userid from student_school  where userid='$stduserid' ;");
if($row=mysql_fetch_array($sql)){
	echo "<tr><td>".$row['ref_date']."</td>";
	?><td><a href="write_reference.php?studenduserid=<?php echo $row['userid'];?>">Write Reference</a></td></tr>
			<?php
}
	else{
	echo "Not User Found ";
	
	}

?>
                    	</table>
                       
                        
                    </div>
                </div>
            </section>
            
        </div><!-- /content -->
        </div><!-- /tabs -->
        </div>
    </div>
    
<script src="js/cbpFWTabs.js"></script>
<script>
	new CBPFWTabs( document.getElementById( 'tabs' ) );
</script>





<?php include('schoolfooter.php'); 

?>