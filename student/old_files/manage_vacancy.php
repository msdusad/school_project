<?php

include('../classes/connection.php');
?>

<html>
	<head>
		<style>
			table,tr,td,th{
			border:2px solid black;
			}
		</style>
		
		<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","../classes/vacancy_json.php?q="+str,true);
  xmlhttp.send();
}
</script>
	</head>
	<a href="employer_profile.php">Home</a>
	<br><a href="../classes/logout.php">Logout</a>
<table style="width:80%;">
	<tr><td>Owner</td><td><select name="search_vacancies" id="search_vacancies" onchange="showUser(this.value)">
		<option value="all">All Vacancies</option>
		<option value="onlymy">Only My Vacancies</option>
	</select></td>
		<td>Department / Branch</td><td><select name="search_vacancies">
		<option value="all_departments">All</option>
		<option value="finance">Finance</option>
		<option value="front_office">Front Office</option>
		<option value="technology">Technology</option>
	</select></td>
		
		<td>Vacancy Month</td><td> <select name="vacancy_month" >
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
		<td>Search <input type="search" name="search_vacancy"></td>
	</tr>
		
	</table><br><br>
<table>
<tr>
<th>VACANCY</th>
<th>DEPARTMENT</th>
<th>BRANCH</th>
<th>NUMBER OF PLACES</th>
<th>APPLICATIONS</th>
</tr> <?php
$user=$_SESSION['employeruserid'];
$sql=mysql_query("SELECT * FROM create_vacancy WHERE userid = '".$user."' order by automatic_date  DESC;") ;
while($row = mysql_fetch_array($sql)) {
    ?><tr>
 <td><a href="view_vacancy.php?user=<?php echo $row['userid'];?>&auto_date=<?php echo $row['automatic_date'];?>"><?php echo $row['vacancy_title'];?></a> </td>
  <td><?php echo $row['vacancy_description'] ;?></td>
    <td><?php echo  $row['vacancy_location'] ;?></td>
    <td><?php echo  $row['number_places'];?></td>
   <td>total applied</td>
    </tr>
	
<?php } 
	?></table>
		<div id="txtHint"></div>
		
	
	
</html>