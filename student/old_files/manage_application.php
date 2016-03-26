<?php

include('../classes/connection.php');
?>

<html>
	<head>
		<style>
			table,tr,td,th{
			border:2px solid black;
				padding:5px;
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
	<tr><td>From</td><td><select name="search_vacancies" id="search_vacancies" > <!--onchange="showUser(this.value)"-->
		<option value="6b">6B</option>
		<option value="6g">6G</option>
		<option value="7t">7T</option>
	</select></td>
		<td>Application Status</td><td><select name="search_vacancies">
		<option value="all_status">All</option>
		<option value="pending">Pending</option>
		<option value="invited">Invited</option>
		<option value="accepted">Accepted</option>
	</select></td>
		
		<td>Location</td><td> <select name="vacancy_month" >
<option value="location_all">All</option>
<option value="location_pending">Pending</option>
<option value="location_completed">Completed</option>
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
<div>
	<a href="../classes/csv.php?manage_application">CSV</a>
<table style="width:80%;">
<tr>
<th>Student Name</th>
<th>Vacancy</th>
<th>Status</th>
<th>Date of Application</th>
<th>Location</th>
</tr><?php
	$user=$_SESSION['employeruserid'];
$all_applications=mysql_query("select a.first_name,a.last_name,a.userid,b.vacancy_title,b.vacancy_location,b.automatic_date,c.apply_time,c.status,c.cover_letter,c.company_userid from student_profile a,create_vacancy b,job_applied c where c.company_userid='$user' && c.student_userid=a.userid && c.vacancy_time=b.automatic_date order by c.apply_time  DESC;");
if(mysql_num_rows($all_applications)>0){
while($row=mysql_fetch_array($all_applications)){
    ?><tr>
 <td><a href="view_application.php?studentuser=<?php echo $row['userid'];?>&apply_time=<?php echo $row['apply_time'];?>&cover_lett=<?php echo $row['cover_letter'];?>&name=<?php echo $row['first_name']." ".$row['last_name'];?>"><?php echo $row['first_name']." ".$row['last_name'];?></a> </td>
  <td><a href="view_vacancy.php?user=<?php echo $row['company_userid'];?>&auto_date=<?php echo $row['automatic_date'];?>"><?php echo $row['vacancy_title'] ;?></a> </td>
	 <td><?php echo  $row['status'];?></td>
	<td><?php echo  $row['apply_time'];?></td>
    <td><?php echo  $row['vacancy_location'] ;?></td>
    </tr>
	
<?php }}
else{echo "No Application Found";}
	?>
		
	</table>
</div>
		<div id="txtHint"></div>
		
	
	
</html>