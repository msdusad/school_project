<?php include('schoolheader.php'); ?>

<head>
<script type="text/javascript" src="../js/validation.js"></script>
<script>
	function searchapplication(first,type){

	document.getElementById("all_vacancy").style.display="none";
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
	xmlhttp.open("GET","../classes/school/src_mng_applica.php?first="+first+"&type="+type,true);
	xmlhttp.send();
	}
</script>
</head>

<div class="col-xs-12 col-sm-12 col-md-9">
 
<div class="row" id="school_viewAllApp">
<div class="col-xs-12 col-sm-12 col-md-12">

<br>
<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="">
			<h2><i class="fa fa-file-text"></i> Welcome to All Applications</h2>
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">
	<div class="col-md-8 empDbTitle">
		<a href='schooldashboard.php'><i class="fa fa-dashboard"></i> Dashboard</a>
	</div>
	<div class="col-md-4 empDbDateStrip">
		<span><i class="fa fa-calendar"></i><?php echo " ".$viewdashdate;?></span>
	</div>
</div>

<br>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="">
			<h3><i class="fa fa-file-text"></i> All Applications</h3>
		</div>
	</div>
</div>
<br>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-4">
		<div class="">
		<label>Form</label>
		<select name="search_vacancies" id="search_vacancies" class="btn btn-primary" > <!--onchange="showUser(this.value)"-->
			<option value="all">All</option>
			<option value="6b">6B</option>
			<option value="6g">6G</option>
			<option value="7t">7T</option>
		</select>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-4">
		<div class="">
		<label>Application Status</label>
		<select name="search_vacancies" class="btn btn-primary">
			<option value="all_status">All</option>
			<option value="pending">Pending</option>
			<option value="invited">Invited</option>
			<option value="accepted">Accepted</option>
		</select>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-4">
		<div class="">
		<label>Industries</label>
		<select name="vacancy_month" class="btn btn-primary">
			<option value="all_departments">All</option>
			<option value="finance">Automotive</option>
			<option value="front_office">Construction</option>
			<option value="technology">Technology</option>
		</select>
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-4">
		<div class="">
		<label>Show</label>
		<select name="num_of_vacancy_show" class="btn btn-primary" onchange="searchapplication(this.value,'application_limit')">
		<option value="10">10</option>
		<option value="20">20</option>
		<option value="30">30</option>
		<option value="40">40</option>
		<option value="50">50</option>
		<option value="100">100</option>
		</select>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-4">
		<div class="">
		<label>Entries Search</label>
		<input type="search" name="search_vacancy" onchange="searchapplication(this.value,'search_application')">
		</div>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-4">
		<div class="">
			<div style="float:right;">
			<!--<a class="btn btn-primary" href="../classes/csv.php?manage_employer">CSV</a> -->
			</div>
		</div>
	</div>
	
</div>


<hr style="border-top:1px dashed lightgray;"/>


<div id="searched"></div>
<div id="all_vacancy">


<table class="table">
    	<thead>
			<th>Student Name</th>
			<th>Vacancy</th>
			<th>Status</th>
			<th>Date of Application</th>
			<th>Employer</th>
		</thead>
<?php 
$user=$_SESSION['schooluserid'];
$all_applications=mysql_query("select a.first_name,a.last_name,a.userid,b.vacancy_title,b.vacancy_location,c.apply_time,c.status,c.cover_letter,c.company_userid,d.company_name from student_profile a,create_vacancy b,job_applied c,employer_registration d where c.student_userid=a.userid && c.vacancy_time=b.automatic_date order by c.apply_time  DESC;");
if(mysql_num_rows($all_applications)>0){
while($row=mysql_fetch_array($all_applications)){
?>
<tr><td><a href="view_application.php?studentuser=<?php echo $row['userid'];?>&apply_time=<?php echo $row['apply_time'];?>&cover_lett=<?php echo $row['cover_letter'];?>&name=<?php echo $row['first_name']." ".$row['last_name'];?>"><?php echo $row['first_name']." ".$row['last_name'];?></a> </td>
<td><a href="view_vacancy.php?user=<?php echo $row['company_userid'];?>&auto_date=<?php echo $row['automatic_date'];?>"></a><?php echo $row['vacancy_title'] ;?></a> 
<td><?php echo  $row['status'];?></td>
<td><?php echo  $row['apply_time'];?></td>
<td><?php echo  $row['company_name']."<br>" ;?></td>


<?php }}
else{
?>
No Application Found
<?php

}
?>
</table>
</div>
<div id="txtHint"></div>


</div>
</div>

<?php include( 'schoolfooter.php'); ?>