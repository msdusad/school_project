<?php
include('studentheader.php'); 
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
	/*.fsize{font-size:25px;}*/
	</style>
</head>



<div class="col-xs-12 col-sm-12 col-md-9">

<div class="row" id="employer_detail-form">

<div class="col-xs-12 col-sm-12 col-md-12">

<br>
<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="">
			<h2><i class="fa fa-check-circle"></i> Welcome to School/College dashboard</h2>
		</div>
	</div>
</div>
<br>
<div class="row">
    <div class="col-md-8 empDbTitle">
    <a href="view_all_vacancies.php"><i class="fa fa-dashboard"></i>  Back to All Vacancies list</a>
    </div>

    <div class="col-md-4 empDbDateStrip">    
	<span><i class="fa fa-calendar"></i><?php echo " ".$viewdashdate;?></span>
    </div>
</div>
<br>
	<?php
	$empdetail=mysql_query("select a.*,b.last_login,count(c.company_userid) as st_apply,d.* from employer_registration a,login b,job_applied c,employer_location d where a.userid='$empid' and b.userid='$empid' and c.company_userid='$empid' and d.userid='$empid';");
	if($empdetail){
	while($row=mysql_fetch_array($empdetail)){
	?>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="comDtlBlock">
            <h3><?php echo $row['company_name']; ?></h3>
            <img <?php if($row['logo']!=''){?> src="../employer/logo/<?php echo $row['logo']; ?>" 
			<?php
			}
			else{
			?>
			 src="img/empProPic.png"
			 <?php
			}
			?> height="100" width="100" >
            <p>Registered Since</p>
			<br>
			<p><?php echo $row['join_date']; ?></p>
			</div>
		</div>
        
		<div class="col-xs-12 col-sm-12 col-md-8">
   
			<h3><i class="fa fa-user"></i> Employer Details</h3>
			<hr style="border-top:1px dashed lightgray;"/>
			<p><i class="fa fa-bank"></i> <?php echo $row['company_website'];?></p>
			<p><i class="fa fa-user"></i> <?php echo $row['company_name'];?></p>
			<p><i class="fa fa-road"></i> <?php echo $row['company_address'];?></p>
			<p><i class="fa fa-building"></i> <?php echo $row['company_region'];?></p>
			<p><i class="fa fa-building"></i> <?php echo $row['company_city'];?></p>
			<p><i class="fa fa-map-marker"></i> <?php echo $row['company_postal_code'];?></p>
			<br>
			<h3><i class="fa fa-paper-plane"></i> Contact details</h3>
			<hr style="border-top:1px dashed lightgray;"/>
			<p><i class="fa fa-send"></i> <?php echo $row['company_email'];?></p>
			<p><i class="fa fa-user"></i> <?php echo $row['company_first_name']." ".$row['company_last_name'];?></p>
			<p><i class="fa fa-briefcase"></i> <?php echo $row['company_title'];?><!--poition of contact person  --></p>
			<br>    
			<h3><i class="fa fa-industry"></i> Industries</h3>
			<hr style="border-top:1px dashed lightgray;"/>
			<p><i class="fa fa-plus-square"></i> Technology</p><br>
                    
			<h3><i class="fa fa-reorder"></i> Prefrence</h3>
			<hr style="border-top:1px dashed lightgray;"/>
			<span style="float:right;">forms: 5, 6, 7, BTEC</span>	
			<p><i class="fa fa-mars"></i> Male</p>
			<p><i class="fa fa-venus"></i> Female</p>
                    
			<h3><i class="fa fa-plus"></i> Added to Worktaster by</h3>
			<hr style="border-top:1px dashed lightgray;"/>
			<p>King edward vi high school for girls</p><br>
                    
			<?php 
			} 
			}
			else{echo "error in query pass ".mysql_error();}
			?>	
                    
		</div>
		</div>
			
			
			
			
			
            
		<div class="row" id="section-2">
		<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="mediabox">
		<h3><i class="fa fa-briefcase"></i> Current Vacancies</h3>
		<hr style="border-top:1px dashed lightgray;"/>
		<div class="sclCurrentVacancy table-responsive">
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
		</div>
		</div>
		<!--
		<section id="section-3">
			<div class="mediabox">
				<h3><i class="fa fa-briefcase"></i> Placement</h3>
				
				<div class="sclCurrentVacancy">
									<!--    

								 placement work in pending Do hear 
										-->
				
										
								   <!-- </div>
				
			</div>
		</section>
		<section id="section-4">
			<div class="mediabox">
				<h3><i class="fa fa-certificate"></i>H&amp;S Certificate</h3>
				
				<div class="sclCurrentVacancy">
					<!--
					   H&R work do hear till in pending

					
					
				</div>
			</div>
		</section>
		-->
            
        </div><!-- /content -->
        </div><!-- /tabs -->
		
        </div>
		</div>
	
   </div>
   </div>
   <script src="js/cbpFWTabs.js"></script>
   <script>	new CBPFWTabs( document.getElementById( 'tabs' ) );</script>

<?php
include('studentfooter.php'); 
?>