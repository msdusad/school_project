
<?php
include('connection.php');
session_start();
$q=mysql_real_escape_string($_GET['q']);
$type=$_GET['type'];
$user=$_SESSION['employeruserid'];

if($type=='search_application'){
$sql=mysql_query("select a.first_name,a.last_name,a.userid,b.vacancy_title,b.vacancy_location,b.automatic_date,c.apply_time,c.status,c.cover_letter,c.company_userid from student_profile a,create_vacancy b,job_applied c where c.company_userid='$user' && c.student_userid=a.userid && c.vacancy_time=b.automatic_date && ( a.first_name LIKE '%$q%' ||  a.last_name LIKE '%$q%' ||  b.vacancy_title LIKE '%$q%' ||  b.vacancy_location LIKE '%$q%' ||  c.status LIKE '%$q%' ) order by c.apply_time  DESC;") ;
}


	
echo "<table class='table'>
<tr>
<th>Student Name</th>
<th>Vacancy</th>
<th>Status</th>
<th>Date of Application</th>
<th>Location</th>
</tr>";
if($sql && mysql_num_rows($sql)>0){
while($row = mysql_fetch_array($sql)) {
	$userid=$row['userid'];
	$autodate=$row['automatic_date'];
	$vac_title=$row['vacancy_title'];
	$status=$row['status'];
	$apply_time=$row['apply_time'];
	$vacancy_location=$row['vacancy_location'];
	$first_name=$row['first_name'];
	$last_name=$row['last_name'];
	$cover_letter=$row['cover_letter'];
	$company_userid=$row['company_userid'];
    echo "<tr>
 <td><a href='view_application.php?studentuser=$userid&apply_time=$apply_time&cover_lett=$cover_letter&vacancy_time=$autodate'>$first_name $last_name</a> </td>
  <td><a href='view_vacancy.php?user=$company_userid&auto_date=$autodate'>$vac_title</a> </td>
	 <td>$status</td>
	<td>$apply_time</td>
    <td>$vacancy_location</td>	
    </tr>";
	
 } 
}
else{
echo "<tr><td>No Result Found</td></tr>";
}
	echo "</table>";

