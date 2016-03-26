<?php 
include('connection.php');
session_start();

if($_REQUEST['type']=='search_application'){
$srch=mysql_real_escape_string($_REQUEST['first']);
	echo "<table class='table'>
		<thead>
			<th>Student Name</th>
			<th>Vacancy</th>
			<th>Status</th>
			<th>Date of Application</th>
			<th>Employer</th>
		</thead>";
$user=$_SESSION['schooluserid'];
$all_vacancy=mysql_query("select a.first_name,a.last_name,a.userid,b.vacancy_title,b.vacancy_location,c.apply_time,c.status,c.cover_letter,c.company_userid,d.company_name from student_profile a,create_vacancy b,job_applied c,employer_registration d where c.company_userid='$user' && c.student_userid=a.userid && c.vacancy_time=b.automatic_date && (a.first_name LIKE '%$srch%' || a.last_name LIKE '%$srch%' || b.vacancy_title LIKE '%$srch%' || c.status LIKE '%$srch%' || d.company_name LIKE '%$srch%' ||  c.apply_time LIKE '%$srch%') order by c.apply_time  DESC;");
	if($all_vacancy){
	
	if($all_vacancy && mysql_num_rows($all_vacancy)>0){
while($row=mysql_fetch_array($all_vacancy)){
	
		$userid=$row['userid'];
		$apply_time=$row['apply_time'];
	   $company_name=$row['company_name'];
	    $status=$row['status'];
		$company_userid=$row['company_userid'];
		$cover_letter=$row['cover_letter'];
	$first_name=$row['first_name'];
	$last_name=$row['last_name'];
	$automatic_date=$row['automatic_date'];
	$vacancy_title=$row['vacancy_title'];
	
		
echo "<tr>
 <td><a href='view_application.php?studentuser=$userid&apply_time=$apply_time&cover_lett=$cover_letter&name=$first_name $last_name'>$first_name $last_name</a> </td>
  <td><a href='view_vacancy.php?user=$company_userid&auto_date=$automatic_date'>$vacancy_title</a> </td>
	 <td>$status</td>
	<td>$apply_time</td>
    <td>$company_name</td>
    </tr>";
	
 }
	}
	else{
	echo "<tr><td>No Result Found</td></tr>";
	}
	
}
else{
echo "Error in Query Pass".mysql_error();
}

echo "</table>";	
}


?>