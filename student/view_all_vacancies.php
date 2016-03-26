<?php
include('studentheader.php');
?>
<script>
	function searchvacncie(first){
		var type='student_view_all';
	
			
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
        xmlhttp.open("GET","../classes/student_search_vacaincies.php?first="+first+"&type="+type,true);
        xmlhttp.send();
		
        }
	
	// function for month search
	function montsearch(first){
		var type='monthbysearch';
	
			
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
        xmlhttp.open("GET","../classes/student_search_vacaincies.php?first="+first+"&type="+type,true);
        xmlhttp.send();
        }
        </script>
<style type="text/css">
	/*th{font-size:16px;}*/
</style>
</head>

<div class="col-xs-12 col-sm-12 col-md-9">
    <h1><i class="fa fa-check-circle"></i> Welcome to All Vacancies</h1>

<div class="row">
	<div class="col-md-8 empDbTitle">
		<a href="studentdashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a>
	</div>
	<div class="col-md-4 empDbDateStrip">    
		<span><i class="fa fa-calendar"></i>  <?php echo $viewdashdate;?></span>
	</div>
</div>
    <br>
    <div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">


		<div class="row" id="viewAllVac">				
		<div class="col-xs-12 col-sm-12 col-md-4">
		<div class="empFilter">
		Employers
		<select class="btn btn-primary btn-sm" name="search_vacancies" id="search_vacancies" onchange="searchvacncie(this.value)">
		<option value="all">All Employers</option>
		<option value="onlymy">My Employers Only</option>
		</select>
		</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4">
		<div class="industryFilter">
		Industry
		<select class="btn btn-primary btn-sm" name="search_vacancies" class="btn btn-primary" >
		<option value="all_departments">All</option>
		<option value="finance">Automotive</option>
		<option value="front_office">Construction</option>
		<option value="technology">Technology</option>
		</select>
		</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4">
		<div class="monthFilter">
		Vacancy Month
		<select class="btn btn-primary btn-sm" name="vacancy_month" onchange="montsearch(this.value)">
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
		
<hr style="border-top:1px dashed lightgray;" >
	
<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">

		<div class="showFiletr">
		Show Entries
		<select class="btn btn-primary btn-sm" name="num_of_vacancy_show" onmousedown="javascript:
		document.getElementById('day').removeChild(fday);">
		<option>10</option>
		<option>20</option>
		<option>40</option>
		<option>50</option>
		<option>100</option>
		</select>
		
		</div>
		
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="search">
		<input type="search" name="search_vacancy" placeholder="Search Here" onkeypress="searchvacncie(this.value)" style="    background-color: #02BAF2; color: #fff;">
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;" >


		<div id="all_vacancy">

		<div class="row">				
		<div class="col-xs-12 col-sm-12 col-md-3">
		<div class="vacancyRes">
		VACANCY
		</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3">
		<div class="industryRes">
		INDUSTRY
		</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3">
		<div class="employerRes">
		EMPLOYER
		</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3">
		<div class="postalRes">
		POSTAL CODE
		</div>
		</div>
		</div>

		<hr style="border-top:1px dashed lightgray;" >
		
		<div class="row">				
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="">
					<?php 
					$all_vacancy=mysql_query("select a.userid,a.vacancy_title,a.vacancy_location,a.number_places,a.from_date1,a.to_date1,a.automatic_date,b.company_name,b.company_website,b.company_postal_code from create_vacancy a,employer_registration b where a.userid=b.userid order by automatic_date  DESC;");
					while($row=mysql_fetch_array($all_vacancy)){
					?>
					<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3">
					<a href="view_vacancy.php?userid=<?php echo $row['userid'];?>&vacancy_title=<?php echo $row['vacancy_title'];?>&company_name=<?php echo $row['company_name'];?>&company_website=<?php echo $row['company_website'];?>&date=<?php echo $row['automatic_date'];?>"><?php echo $row['vacancy_title'];?></a>
					</div>
					
					<div class="col-xs-12 col-sm-12 col-md-3">
					<?php echo "Industry Type";?>
					</div>
					
					<div class="col-xs-12 col-sm-12 col-md-3">
					<a href="employer_detail.php?empuserid=<?php echo $row['userid']; ?>"><?php echo $row['company_name'];?></a>
					</div>
					
					<div class="col-xs-12 col-sm-12 col-md-3">
					<?php echo $row['company_postal_code'];?>
					</div>	
					
					</div>
					<br>
					<?php }
					?>
				</div>
			</div>
		</div>
		
		<hr style="border-top:1px solid lightgray;" >

		</div>  <!-- All_vacancy -->
		<div id="searched"></div>
		
		</div>
		<!-- end Hear -->

		</div>

<!-- student Dashboard Footer -->
<?php
include('studentfooter.php');
?>
