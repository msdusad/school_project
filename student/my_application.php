<?php
include('studentheader.php');
?>
	<script>
		function searchvacncie(first){
		document.getElementById("my_application").style.display="none";
		var type='student_my_application';
        var xmlhttp;
        if (window.XMLHttpRequest)
          {// code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
          }
        else
          {// code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
        xmlhttp.onreadystatechange=function()
        {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            var res=xmlhttp.responseText;
            document.getElementById("searched").innerHTML=res;
            }
          }
        xmlhttp.open("GET","../classes/student_search_myapplication.php?first="+first+"&type="+type,true);
        xmlhttp.send();
        }
        </script>

</head>

<div class="col-xs-12 col-sm-12 col-md-9">

<h1><i class="fa fa-check-circle"></i> Welcome to Your Application</h1>

<div class="row">
	<div class="col-md-8 empDbTitle">
		<a href="studentdashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a>
	</div>
	<div class="col-md-4 empDbDateStrip">    
		<span><i class="fa fa-calendar"></i>  <?php echo $viewdashdate;?></span>
	</div>
</div>

   <br>
    <div class="row" >
		<div class="col-xs-12 col-sm-12 col-md-12" id="my_application">
      

		<div class="row showEntry">				
			<div class="col-xs-12 col-sm-12 col-md-6">
				<h3>Show Entries</h3>
				<select class="btn btn-primary" name="num_of_vacancy_show">
				<option>10</option>
				<option>20</option>
				<option>30</option>
				<option>40</option>
				<option>50</option>
				<option>100</option>
				</select>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
			<input type="search" name="search_vacancy" placeholder="Search here.." onchange="searchvacncie(this.value)" style="border:1px solid lightgray; border-radius:4px; height:35px; padding-left:15px;">
			</div>
		</div>
		
		<hr style="border-top:1px dashed lightgray;" >



		<div id="searched"></div>
		<div id="my_application">
		
		
		
	
<div class="row">
	<div class="my_application_sf" style="font-size:15px; text-transform:uppercase;">
		<div class="col-xs-12 col-sm-12 col-md-2"><label>Vacancy</label></div>
		<div class="col-xs-12 col-sm-12 col-md-3"><label>Employer</label></div>
		<div class="col-xs-12 col-sm-12 col-md-2"><label>Cover Letter</label></div>
		<div class="col-xs-12 col-sm-12 col-md-3"><label>Date Of Application</label></div>
		<div class="col-xs-12 col-sm-12 col-md-2"><label>Status</label></div>
	</div>
</div>
<hr style="border-top:1px dashed lightgray;"/>
		<?php 


//select job_applied.apply_time,create_vacancy.vacancy_title from job_applied,create_vacancy where //job_applied.company_userid=create_vacancy.userid 
$currrt_user=$_SESSION['studentuserid'];
	
$all_vacancy=mysql_query("SELECT distinct a.cover_letter,a.company_userid,a.send_media,a.status,a.apply_time,c.vacancy_title,a.vacancy_time  FROM job_applied a,create_vacancy c where a.company_userid = c.userid and a.student_userid='$currrt_user' and a.vacancy_time = c.automatic_date order by a.apply_time desc;");
while($row=mysql_fetch_array($all_vacancy)){
	$com_userid=$row['company_userid'];

$com_name=mysql_query("select company_name from employer_registration where userid='$com_userid' ");
while($company_name=mysql_fetch_array($com_name)){
?>

		<div class="row">
		<p></p>			
			<div class="col-md-2"><a href="after_submitreview.php?cover=<?php echo $row['cover_letter'];?>&send_media=<?php echo $row['send_media']; ?>&userid=<?php echo $row['company_userid']; ?>&vacncy_create_date=<?php echo $row['vacancy_time']; ?>"><?php echo $row['vacancy_title'];?></a></div>
			<div class="col-md-3"><?php echo substr($company_name['company_name'],0,30);?></div>
			<div class="col-md-2"><?php echo substr($row['cover_letter'],0,20);?></div>
			<div class="col-md-3"><?php echo $row['apply_time'];?></div>
			<div class="col-md-2"><?php echo $row['status'];?></div>
			
		</div>

		<?php 
}

	}
		?>

<hr style="border-top:1px dashed lightgray;" >	
		</div>
			
			</div>
			
			<!-- end Hear -->
       
        
	</div>
    <!-- student Dashboard Footer -->
   

<?php
include('studentfooter.php');
?>
