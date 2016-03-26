<?php
include('connection.php');
session_start();

//// code for search vacancies for My_application page in student

if($_REQUEST['type']=='student_my_application'){
$srch=mysql_real_escape_string($_REQUEST['first']);
	$currrt_user=$_SESSION['studentuserid'];
$all_vacancy=mysql_query("SELECT distinct a.cover_letter,a.status,a.apply_time, b.company_name, c.vacancy_title FROM job_applied a, employer_registration b, create_vacancy c where a.company_userid = b.userid = c.userid and a.student_userid='$currrt_user' and a.vacancy_time = c.automatic_date && (a.cover_letter LIKE '%$srch%' || a.status LIKE '%$srch%' || b.company_name LIKE '%$srch%' || c.vacancy_title LIKE '%$srch%' || a.apply_time LIKE '%$srch%' ) order by a.apply_time desc ;");

if($all_vacancy){
	echo "<table class='table'>
		<thead>
			<th>Vacancy</th>
			<th>Employer</th>
			<th>Cover Letter</th>
			<th>Date Of Application</th>
			<th> Status</th>
		</thead>";
	if($all_vacancy && mysql_num_rows($all_vacancy)>0){
while($row=mysql_fetch_array($all_vacancy)){
		$company_name=substr($row['company_name'],0,30);
		$vacancy_title=$row['vacancy_title'];
		$cover_letter=substr($row['cover_letter'],0,20);
		$apply_time=$row['apply_time'];
		$status=$row['status'];
	
echo "<tr><td><a href='review_application.php?cover=$cover_letter'>$vacancy_title</a></td>
			<td> $company_name</td>
			<td> $cover_letter</td>
			<td> $apply_time</td>
			<td>$status</td>
		</tr>";
	
 }
		}
	else{
	echo "<tr><td>No Result Found</td></tr>";
	}
	echo "</table>";
}
else{
echo "Error in Query Pass".mysql_error();
}
	
}

?>