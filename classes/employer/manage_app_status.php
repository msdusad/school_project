<?php
include('../connection.php');
session_start();
$q=$_GET['q'];

echo "<table class='table'>
<tr>
<th>Student Name</th>
<th>Vacancy</th>
<th>Status</th>
<th>Date of Application</th>
<th>Location</th>
</tr>";
	$user=$_SESSION['employeruserid'];
if($q=='all'){
$all_applications=mysql_query("select a.first_name,a.last_name,a.userid,b.vacancy_title,b.vacancy_location,b.automatic_date,c.apply_time,c.status,c.cover_letter,c.company_userid from student_profile a,create_vacancy b,job_applied c where c.company_userid='$user' && c.student_userid=a.userid && c.vacancy_time=b.automatic_date order by c.apply_time  DESC;");	
}

else{
$all_applications=mysql_query("select a.first_name,a.last_name,a.userid,b.vacancy_title,b.vacancy_location,b.automatic_date,c.apply_time,c.status,c.cover_letter,c.company_userid from student_profile a,create_vacancy b,job_applied c where c.status='$q' && c.company_userid='$user' && c.student_userid=a.userid && c.vacancy_time=b.automatic_date order by c.apply_time  DESC;");	
}

if(mysql_num_rows($all_applications)>0){
while($row=mysql_fetch_array($all_applications)){
	$userid=$row['userid'];
	$apply_time=$row['apply_time'];
	$cover_letter=$row['cover_letter'];
	$auto_date=$row['automatic_date'];
	$first_name=$row['first_name'];
	$last_name=$row['last_name'];
	$status=$row['status'];
	$vacancy_location=$row['vacancy_location'];
	$company_userid=$row['company_userid'];
	$vacancy_title=$row['vacancy_title'];
    	
   echo "<tr>
 <td><a href='view_application.php?studentuser=$userid&apply_time=$apply_time&cover_lett=$cover_letter&vacancy_time=$auto_date'>$first_name   $last_name</a> </td>
  <td><a href='view_vacancy.php?user=$company_userid&auto_date=$auto_date'>$vacancy_title</a> </td>
	 <td>$status</td>
	<td>$apply_time</td>
    <td>$vacancy_location</td>
      		
    </tr>";
}
}
else{
	echo "No Record Found";
}
echo "</table>";
	
	
	?>
