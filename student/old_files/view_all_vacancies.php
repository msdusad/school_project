<html>
	<head>
		<style>
			table,tr,td,th{
			border:2px solid black;
			}
		</style>
		
		<script>
	
	function searchvacncie(first){
		document.getElementById("all_vacancy").style.display="none";
		var type='student_view_all';
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
        xmlhttp.open("GET","../classes/search_vacaincies.php?first="+first+"&type="+type,true);
        xmlhttp.send();
        }
        </script>
	</head>
	<body>
		<a href="student_profile.php">Home</a>
		<br><a href="../classes/logout.php">Logout</a>
		<table style="width:80%;">
	<tr><td>Employers</td><td><select name="search_vacancies" id="search_vacancies" onchange="showUser(this.value)">
		<option value="all">All Employers</option>
		<option value="onlymy"> My Employers Only</option>
	</select></td>
		<td>Industry</td><td><select name="search_vacancies">
		<option value="all_departments">All</option>
		<option value="finance">Automotive</option>
		<option value="front_office">Construction</option>
		<option value="technology">Technology</option>
	</select></td>
		
<td>Vacancy Month</td><td> <select name="vacancy_month">
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
</select></td>
	</tr>
	
</table><br><br>	
	<table style="width:70%"><tr><td>Show <select name="num_of_vacancy_show">
		<option>20</option>
		<option>20</option>
		<option>40</option>
		<option>50</option>
		<option>100</option>
		
	</select> Entries</td>
		<td><input type="search" name="search_vacancy" placeholder="Search Hear" onchange="searchvacncie(this.value)"> </td>
	</tr>
		
	</table><br><br>

		<div id="all_vacancy">
		
	<table style="width:80%;">
		<thead>
			<th>VACANCY</th>
			<th>INDUSTRY</th>
			<th>EMPLOYER</th>
			<th>PLACEMENTS</th>
			<th>FROM / TO</th>
		</thead>
		
		<?php 
include('../classes/connection.php');
$all_vacancy=mysql_query("select a.userid,a.vacancy_title,a.vacancy_location,a.number_places,a.from_date1,a.to_date1,a.automatic_date,b.company_name,b.company_website from create_vacancy a,employer_registration b where a.userid=b.userid order by automatic_date  DESC;");
while($row=mysql_fetch_array($all_vacancy)){
?>
		<tr><td><a href="view_vacancy.php?userid=<?php echo $row['userid'];?>&vacancy_title=<?php echo $row['vacancy_title'];?>&company_name=<?php echo $row['company_name'];?>&company_website=<?php echo $row['company_website'];?>&date=<?php echo $row['automatic_date'];?>"><?php echo $row['vacancy_title'];?></a></td>
			<td><?php echo "Industury Type";?></td>
			<td><?php echo $row['company_name'];?></td>
			<td><?php echo $row['number_places'];?></td>
			<td><?php echo $row['from_date1']." TO ".$row['to_date1'];?></td>
		</tr>
		<?php }
		?>
			
	</table>	
		</div>
		<div id="searched"></div>
		
	</body>
	
</html>