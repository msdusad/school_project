<?php include('schoolheader.php'); ?>

<head>
	<script type="text/javascript" src="../js/validation.js"></script>
<script>
function searchvacancie(first,type){
		
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
        xmlhttp.open("GET","../classes/school/srch_mng_vacancies.php?first="+first+"&type="+type,true);
        xmlhttp.send();
        }
	</script>

</head>
<div class="col-xs-12 col-sm-12 col-md-9">
 
<div class="row" id="school_view_vacancy">
<div class="col-md-12">
	<br>
	<div class="row">				
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="">
				<h2><i class="fa fa-briefcase"></i> Welcome to All Vacancies</h2>
			</div>
		</div>
	</div>
<br>
	<div class="row">

		<div class="col-md-8 empDbTitle">
			<a href='schooldashboard.php'><i class="fa fa-dashboard"></i> Dashboard</a>
		</div>

		<div class="col-md-4 empDbDateStrip">
			<span><i class="fa fa-calendar"></i><?php echo " ".$viewdashdate;?></span>
		</div>

	</div>

<hr style="border-top:1px dashed lightgray;"/>
		
<table class="table table-striped">

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="mq-center">
			<label>Industry</label>
			<select class="btn btn-primary" name="search_vacancies" >
			<option value="all_departments">All</option>
			<option value="finance">Automotive</option>
			<option value="front_office">Construction</option>
			<option value="technology">Technology</option>
			</select>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="mq-center">
			<label>Vacancy Month</label>
			<select class="btn btn-primary" name="vacancy_month" onchange="searchvacancie(this.value,'serch_month')">
			<option value="all">All</option>
			<option value="01">January</option>
			<option value="02">February</option>
			<option value="03">March</option>
			<option value="04">April</option>
			<option value="05">May</option>
			<option value="06">June</option>
			<option value="07">July</option>
			<option value="08">August</option>
			<option value="09">September</option>
			<option value="10">October</option>
			<option value="11">November</option>
			<option value="12">December</option>
			</select>
		</div>
	</div>
</div>
</table>
				
<hr style="border-top:1px dashed lightgray;"/>
			
<table class="table table-striped">

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-3">
		<div class="mq-center">
		<label>Show</label>
		<select class="btn btn-primary" name="num_of_vacancy_show" onchange="searchvacancie(this.value,'search_limit')">
		<option value="10">10</option>
		<option value="20">20</option>
		<option value="30">30</option>
		<option value="40">40</option>
		<option value="50">50</option>
		<option value="100">100</option>
		</select>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-5">
		<div class="mq-center">
			<label>Entries Search</label>
			<input type="search" name="search_vacancy" onchange="searchvacancie(this.value,'search_vacancies')">
		</div>
	</div>
</div>

</table>

<hr style="border-top:1px dashed lightgray;"/>

<div id="searched"></div>
<div id="all_vacancy">
<div class="table-responsive">
<table class="table">
    	<thead>
			<th>Vacancy</th>
			<th>Industry</th>
			<th>Employer</th>
			<th>Placements</th>
			<th>From / To</th>
		</thead>
		<?php 
$all_vacancy=mysql_query("select a.userid,a.vacancy_title,a.vacancy_location,a.automatic_date,a.number_places,a.from_date1,a.to_date1,a.automatic_date,b.company_name,b.company_website from create_vacancy a,employer_registration b where a.userid=b.userid order by automatic_date  DESC;");
while($row=mysql_fetch_array($all_vacancy)){
?>
		<tr><td><a href="view_vacancy.php?user=<?php echo $row['userid'];?>&auto_date=<?php echo $row['automatic_date'];?>"><?php echo $row['vacancy_title'];?></a></td>
			<td><?php echo "Content Not";?></td>
			<td><a href="employer_detail.php?empuserid=<?php echo $row['userid'];?>"><?php echo $row['company_name'];?></a></td>
			<td><?php echo "Content Not";?></td>
			<td><?php echo $row['from_date1']." TO ".$row['to_date1'];?></td>
		</tr>
		<?php }
		?>
</table>
</div>
</div>



		</div>

		<!-- End Hear -->

	</div>

<?php include( 'schoolfooter.php'); ?>