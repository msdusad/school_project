<?php
include('employerheader.php');
?>
<head>
	
	<script type="text/javascript" src="../js/validation.js"></script>
	<script>
	function searchvacancy(str) {

	   document.getElementById("vacancy").style.display="none";
	   var type='search_vacancy';
		
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
	  xmlhttp.open("GET","../classes/employer_search_vacancy.php?q="+str+"&type="+type,true);
	  xmlhttp.send();
	}
	</script>
	
	<script>
	function byowner(str) {

	   document.getElementById("vacancy").style.display="none";
	   var type='filter';
		
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
	  xmlhttp.open("GET","../classes/employer_search_vacancy.php?q="+str+"&type="+type,true);
	  xmlhttp.send();
	}
	</script>
		
	<script>
	
	// function for search according month
	function montsearch(first){
		var type='monthbysearch';
	
			
 	document.getElementById("vacancy").style.display="none";
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
        xmlhttp.open("GET","../classes/employer/manage_vacancy_monthvia.php?first="+first+"&type="+type,true);
        xmlhttp.send();
        }
        </script>	
	
	<script>

	
	// function for search according month
	function showlimit(first){
		var type='showlimit';
	
			
 	document.getElementById("vacancy").style.display="none";
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
        xmlhttp.open("GET","../classes/employer/vacancy_show_limit.php?first="+first+"&type="+type,true);
        xmlhttp.send();
        }
        </script>	

	</head>
	
<div class="col-xs-12 col-sm-12 col-md-9">
<?php include('returnToDashboard.php');?>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="manageVacancyHeader">
				<h1>Manage Vacancy</h1>
			</div>
		</div>
	</div>

    <div class="row">

    <div class="col-xs-12 col-sm-12 col-md-8 empDbTitle">
    <i class="fa fa-dashboard"></i>  Dashboard
    </div>

    <div class="col-xs-12 col-sm-12 col-md-4 empDbDateStrip">    
	<span><i class="fa fa-calendar"></i><?php echo " ".$viewdashdate;?></span>
    </div>
    
    </div>
		<!-- new Design -->
	   <div class="row" style="margin-top:30px;">
        <div class="panel panel-danger empSearchfilter">
            <div class="panel-heading">
                <h3 class="panel-title">Filter table</h3>
            </div>
            <div class="panel-body">

			<div class="col-xs-12 col-sm-12 col-md-4 mq-center-div-01">
			<label>Filter by:</label>
				<div class="btn-group btn-group-dropdown">
					<select type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" onchange="byowner(this.value)">
					<span class="dropdown-icon ss-filter"></span>
						<option id="all" value="all">All Vacancies</option>
						<option id="onlymy" value="onlymy">Only My Vacancies</option>
					</select>
				</div>
			</div>
            <div class="col-xs-12 col-sm-12 col-md-4 mq-center-div-01">
			<label><br>&nbsp;</label>
				<div class="btn-group btn-group-dropdown">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					<span class="dropdown-icon ss-thumbnails"></span>
					Department / Branch
					</button>
					<ul class="dropdown-menu" role="menu">
						<div class="arrow top"></div>
						<li><a href="#fakeLink">All</a></li>
						<li ><a href="#fakeLink">Finance</a></li>
						<li><a href="#fakeLink">Front Office</a></li>
						 <li><a href="#fakeLink">Technology</a></li>
					</ul>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 mq-center-div-01">
				<label>Vacancy Month</label>
				<div class="btn-group btn-group-dropdown">
				 
				<!-- <span class="dropdown-icon ss-location"></span>-->
				<select  class="btn btn-default dropdown-toggle" data-toggle="dropdown" name="vacancy_month" onchange="montsearch(this.value)">
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
        </div>
    </div>
	
	  <div class="row" style="margin-top:30px;">
        <div class="panel panel-default empSearchfilterTwo">
            <div class="panel-body">
				<div class="col-xs-12 col-sm-12 col-md-6">
					<label class="empSearchfilterTitle">Show:</label>
					<div class="btn-group btn-group-dropdown">
						<select type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" onchange="showlimit(this.value)"><span class="ss-navigatedown pull-right"></span>
							<option value="10">10</option>
							<option value="20">20</option>
							<option value="50">50</option>
							<option value="100">100</option>
						</select>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6">
					<label class="empSearchfilterTitle">Search:</label>
					<div class="input-group has-success" style="display:inline-block; vertical-align:middle;">
						<div class="form-group">
							<form class="form-horizontal" role="form">
								<input type="text" class="form-control" onkeypress="searchvacancy(this.value)" id="inputError" style="border-radius:4px; border:1px solid lightgray;"/>
							</form>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div> 
	
	<!-- end hear -->

	<!--
	Owner
	<select name="search_vacancies" id="search_vacancies" onchange="showUser(this.value)">
	<option value="all">All Vacancies</option>
	<option value="onlymy">Only My Vacancies</option>
	</select>
	
	
	Department / Branch
	<select name="search_vacancies">
	<option value="all_departments">All</option>
	<option value="finance">Finance</option>
	<option value="front_office">Front Office</option>
	<option value="technology">Technology</option>
	</select>

	Vacancy Month
	
	<select name="vacancy_month" >
	<option value="all">All</option>
	<option >January</option>
	<option >February</option>
	<option >March</option>
	<option >April</option>
	<option >May</option>
	<option >June</option>
	<option >July</option>
	<option >August</option>
	<option >September</option>
	<option >October</option>
	<option >November</option>
	<option >December</option>
	</select>

	
	Show
	<select name="num_of_vacancy_show">
	<option>20</option>
	<option>20</option>
	<option>40</option>
	<option>50</option>
	<option>100</option>

	</select>
	Entries
	Search
	<input type="search" name="search_vacancy"></td>
	 -->
	 
<div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th><label>Vacancy</label></th>
        <th><label>Department</label></th>
        <th><label>Branch</label></th>
        <th><label>Number of Places</label></th>
      </tr>
    </thead>
	<?php
	$user=$_SESSION['employeruserid'];
	$sql=mysql_query("SELECT * FROM create_vacancy WHERE userid = '".$user."' order by automatic_date  DESC;") ;
	while($row = mysql_fetch_array($sql)) {
	?>
    <tbody>
      <tr>
        <td><a href="view_vacancy.php?user=<?php echo $row['userid'];?>&auto_date=<?php echo $row['automatic_date'];?>"><?php echo $row['vacancy_title'];?></a></td>
        <td><?php echo $row['vacancy_description'] ;?></td>
        <td><?php echo  $row['vacancy_location'] ;?></td>
        <td><?php echo  $row['number_places'];?></td>
	<?php } 
	?>
      </tr>
    </tbody>
  </table>
  </div>
  

		

<?php
include('employerfooter.php');
?>