<?php
include('schoolheader.php'); 
$empid=$_GET['empuserid'];
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
 
<h1>Welcome to School/college dashboard</h1>

    <div class="row">
		<div class="col-md-8 empDbTitle">
			<a href='schooldashboard.php'> <i class="fa fa-dashboard">  Back to employers list</i> </a>
		</div>
		<div class="col-md-4 empDbDateStrip">    
		<span><i class="fa fa-calendar"></i><?php echo " ".$viewdashdate;?></span>
		</div>
    </div>
    
			<?php
			$empdetail=mysql_query("select a.*,b.last_login,count(c.company_userid) as st_apply,d.* from employer_registration a,login b,job_applied c,employer_location d where a.userid='$empid' and b.userid='$empid' and c.company_userid='$empid' and d.userid='$empid';");
			if($empdetail){
			while($row=mysql_fetch_array($empdetail)){
			?>
			<div class="row">
			<div class="col-md-4">
			<div class="comDtlBlock">
			<h3><?php echo $row['company_name']; ?></h3>
			<img <?php if($row['logo']!=''){

			?> src="../employer/logo/<?php echo $row['logo']; ?>" 
			<?php
			}
			else{
			?>
			src="img/empProPic.png"
			<?php
			}
			?> height="100" width="100" >
            <p><i class="fa fa-flag"></i> Registered since</p>
            <em><i class="fa fa-clock-o"></i> <?php echo $row['join_date']; ?></em>
			<p><i class="fa fa-clock-o"></i> Last logged-in on<br> <?php echo $row['last_login']; ?></p>
            <p><i class="fa fa-file-text-o"></i> Applications:<?php echo $row['st_apply']; ?></p>
            <p><i class="fa fa-briefcase"></i> Placements:<?php echo "0" ?></p>
            <hr style="border-top:1px dashed lightgray;"/>
            <center>
            <button type="button" class="btn-success btn-lg">Email Employer</button>
            <p></p>
            <button type="button" class="btn-danger btn-lg">Exclude Employer</button>
            </center>
        </div>
    </div>
        
    <div class="col-md-8">
   
        <div id="tabs" class="tabs">
        <nav>
            <ul>
                <li><a href="#section-1" style="font-size:1.10em;"><span>Details</span></a></li>
                <li><a href="#section-2" style="font-size:1.10em;"><span>Vacancies</span></a></li>
                <li><a href="#section-3" style="font-size:1.10em;"><span>Placement</span></a></li>
                <li><a href="#section-4" style="font-size:1.10em;"><span>H&amp;S Certificate</span></a></li>
            </ul>
        </nav>
        <div class="content">
            <section id="section-1">
                <div class="mediabox">
                    <h3><i class="fa fa-user"></i> Employer Details</h3>
                    <hr style="border-top:1px dashed lightgray;"/>
					
					
                    <p style="display:inline-block; width:47%;">
						<i class="fa fa-bank"></i> <?php echo $row['company_name'];?>
					</p>
					<p style="display:inline-block; width:47%; font-size:15px; color:#258A78;" class="text-right">
						<i class="fa fa-globe"></i> <?php echo $row['company_website'];?>
					</p>
                    <p><i class="fa fa-building"></i> <?php echo $row['company_address'];?></p>
					<p><i class="fa fa-building"></i> <?php echo $row['company_region'];?></p>
					<p><i class="fa fa-building"></i> <?php echo $row['company_city'];?></p>
					<p><i class="fa fa-map-marker"></i> <?php echo $row['company_postal_code'];?></p>
                    
                    <h3><i class="fa fa-paper-plane"></i> Contact details.</h3>
					<hr style="border-top:1px dashed lightgray;"/>
                    <p style="display:inline-block; width:47%;">
						<i class="fa fa-user"></i> <?php echo $row['company_first_name']." ".$row['company_last_name'];?>
					</p>
					<p style="display:inline-block; width:47%; font-size:15px; color:#258A78;" class="text-right">
						<i class="fa fa-user"></i> <?php echo $row['company_email'];?>
					</p>
                    <p><i class="fa fa-check-circle"></i> <?php echo $row['company_title'];?><!--poition of contact person  --></p>
                    
                    <h3><i class="fa fa-building"></i> Industries</h3>
					<hr style="border-top:1px dashed lightgray;"/>
                    <p><i class="fa fa-code-fork"></i> Technology</p>
                    
                    <h3><i class="fa fa-reorder"></i> Prefrence</h3>
					<hr style="border-top:1px dashed lightgray;"/>
                    
                    <p style="display:inline-block; width:47%;"><i class="fa fa-mars"></i> Male</p>
					<p style="display:inline-block; width:47%; font-size:15px; color:#258A78;" class="text-right">forms: 5, 6, 7, BTEC</p>
                    <p><i class="fa fa-venus"></i> Female</p>
                    
                    <h3><i class="fa fa-building"></i> Added to Worktaster by</h3>
					<hr style="border-top:1px dashed lightgray;"/>
                    <p><i class="fa fa-check-circle"></i> King Edward VI High School/college for Girls</p>
                    
<?php 

} 
}
else{echo "error in query pass ".mysql_error();}
?>	
                    
                </div>
            </section>
            
            <section id="section-2">
                <div class="mediabox">
                
                    <h3><i class="fa fa-briefcase"></i> Current Vacancies</h3>
                    <hr style="border-top:1px dashed lightgray;"/>
                    <div class="sclCurrentVacancy">
                    	<table class="table">
				<thead>
					
					<th>Vacancy</th>
					<th>From Date</th>
					<th>Placement Date</th>
					<th>Status</th>
				</thead>
				
			<?php   
			$applications=mysql_query("select * from create_vacancy where userid='$empid' order by automatic_date desc;");
if($applications){
while($row=mysql_fetch_array($applications)){
	$currtime=date("Y-m-d h:i:s");
?>   
	        <tr>
			<td><a href="view_vacancy.php?user=<?php echo $empid;?>&auto_date=<?php echo $row['automatic_date'];?>"><?php echo $row['vacancy_title'];?></a></td>
				<td><?php echo $row['from_date1'];?></td>
				<td><?php echo "Pending  to Fetch";?></td>
			<?php
	if($currtime >$row['automatic_date']){
		?><td>Closed</td></tr>
	<?php
	}
				else{
					?>
			<td>Active</td></tr>
				<?php	
			}
}
	?>
			<?php
}
?>
</table>			

                        
                    </div>

                </div>
            </section>
            <section id="section-3">
                <div class="mediabox">
                    <h3><i class="fa fa-briefcase"></i> Placement</h3>
                    <hr style="border-top:1px dashed lightgray;"/>
                    <div class="sclCurrentVacancy">
                                        <!--    

                                     placement work in pending Do hear 
                                            -->
                    
                                            
                                        </div>
                    
                </div>
            </section>
            <section id="section-4">
                <div class="mediabox">
                    <h3><i class="fa fa-certificate"></i>H&amp;S Certificate</h3>
                    <hr style="border-top:1px dashed lightgray;"/>
                    <div class="sclCurrentVacancy">
                    	<!--
                           H&R work do hear till in pending

                        -->
                        
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

<?php
include('schoolfooter.php'); 
?>