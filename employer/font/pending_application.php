<?php include( 'employerheader.php'); ?>

<head>
	<script type="text/javascript" src="../js/validation.js"></script>
	<script>
function searchapplication(str) {

   document.getElementById("vacancy").style.display="none";
   var type='search_application';
	
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		
                var res=xmlhttp.responseText;
            document.getElementById("searched").innerHTML=res;
		
    }
  }
  xmlhttp.open("GET","../classes/employer_search_application.php?q="+str+"&type="+type,true);
  xmlhttp.send();
}
</script>
	
	<script>
function manage_app_status(str) {

   document.getElementById("vacancy").style.display="none";
   var type='search_application';
	
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		
                var res=xmlhttp.responseText;
            document.getElementById("searched").innerHTML=res;
		
    }
  }
  xmlhttp.open("GET","../classes/employer/manage_app_status.php?q="+str+"&type="+type,true);
  xmlhttp.send();
}
</script>

		<script>
function manage_app_limit(str) {

   document.getElementById("vacancy").style.display="none";
   var type='search_application';
	
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		
                var res=xmlhttp.responseText;
            document.getElementById("searched").innerHTML=res;
		
    }
  }
  xmlhttp.open("GET","../classes/employer/manage_app_limit.php?q="+str+"&type="+type,true);
  xmlhttp.send();
}
</script>
	
	
</head>
<div class="col-xs-12 col-sm-12 col-md-9" id="manage_application-form">

<?php include('returnToDashboard.php');?>

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="">
			</br>
				<h2><i class='fa fa-file-text'></i>  Pending Applications</h2>
			</div>
		</div>
	</div>
</br>

	<div class="row">

		<div class="col-md-8 empDbTitle">
			<i class="fa fa-dashboard"></i> Dashboard
		</div>

		<div class="col-md-4 empDbDateStrip">
			<span><i class="fa fa-calendar"></i> <?php echo " ".$viewdashdate;?></span>
		</div>

	</div>
</br></br>


<div class="row">
<div class="panel panel-danger empSearchfilter">
<div class="panel-heading">
<h3 class="panel-title">Filter table</h3>
</div>
<div class="panel-body">
<div class="col-xs-12 col-sm-12 col-md-6 mq-input-adj002">
<span>Filter by:</span>
<div class="btn-group btn-group-dropdown">
<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="dropdown-icon ss-filter"></span>Form
</button>
<ul class="dropdown-menu" role="menu">
<div class="arrow top"></div>
<li><a href="#fakeLink">6B</a></li>
<li ><a href="#fakeLink">6G</a></li>
<li><a href="#fakeLink">7T</a></li>
</ul>
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-6 mq-input-adj002">
<span>Status</span>
<div class="btn-group btn-group-dropdown">
<select type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" onchange="manage_app_status(this.value)"><span class="dropdown-icon ss-thumbnails"></span>
<option value="all">All</option>
<option value="Invited">Invited</option>
<option value="Accepted" >Accepted</option >
<option value="Pending">Pending</option>
</select>
</div>
</div>
                                     
</div>
</div>
</div>

</br>
</br>

<div class="row">
        <div class="panel panel-default empSearchfilterTwo">
            <div class="panel-body">
			<div class="col-xs-12 col-sm-12 col-md-5 mq-input-adj002">
                <span class="empSearchfilterTitle">Show:</span>
                <div class="btn-group btn-group-dropdown">
                      <select type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" onchange="manage_app_limit(this.value)"><span class="ss-navigatedown pull-right"></span>
                   
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                    </select>
                </div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 mq-input-adj002">
                <span class="empSearchfilterTitle">Search:</span>
                <div class="input-group has-success" style="display:inline-block; vertical-align:middle;">
                    <input type="text" class="form-control" onchange="searchapplication(this.value)">
                </div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3">
                <a href="../classes/csv.php?manage_application" type="button" class="btn btn-success downloadCsv mq-btn-center"><i class="fa fa-download"></i> CSV Downlaod</a>
			</div>
            </div>
        </div>
    </div> 
	
</br>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">

<br><br>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="" id="searched">
		</div>
	</div>
</div>

<div id="vacancy">
	
<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-3">
		<div class="">
			<label>Student Name</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-2">
		<div class="">
			<label>Vacancy</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-2">
		<div class="">
			<label>Status</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-3">
		<div class="">
			<label>Date of Application</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-2">
		<div class="">
			<label>Location</label>
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>
<br>

<div class="row">

		<?php
		$user=$_SESSION['employeruserid'];
		$all_applications=mysql_query("select a.first_name,a.last_name,a.userid,b.vacancy_title,b.vacancy_location,b.automatic_date,c.apply_time,c.status,c.cover_letter,c.company_userid from student_profile a,create_vacancy b,job_applied c where c.status='Pending' && c.company_userid='$user' && c.student_userid=a.userid && c.vacancy_time=b.automatic_date order by c.apply_time  DESC;");	
		if(mysql_num_rows($all_applications)>0){
		while($row=mysql_fetch_array($all_applications)){
		?>		

				
	<div class="col-xs-12 col-sm-12 col-md-3">
		<div class="">
			<a href="view_application.php?studentuser=<?php echo $row['userid'];?>&apply_time=<?php echo $row['apply_time'];?>&cover_lett=<?php echo $row['cover_letter'];?>&vacancy_time=<?php echo $row['automatic_date'];?>">
			<?php echo $row['first_name']." ".$row['last_name'];?>
			</a>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-2">
		<div class="">
			<a href="view_vacancy.php?user=<?php echo $row['company_userid'];?>&auto_date=<?php echo $row['automatic_date'];?>"><?php echo $row['vacancy_title'] ;?>
			</a>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-2">
		<div class="">
			<?php echo  $row['status'];?>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-3">
		<div class="">
			<?php echo  $row['apply_time'];?>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-2">
		<div class="">
			<?php echo  $row['vacancy_location'] ;?>
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class=''>
				<?php }}
				else{echo "&nbsp;&nbsp;&nbsp;&nbsp;No Application Found";}
				?>
		</div>
	</div>
</div>

	
</div>
<hr style="border-top:1px dashed lightgray;"/>	
</div>

<?php include( 'employerfooter.php'); ?>