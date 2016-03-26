<?php 
include('../connection.php');
session_start();


$srch=mysql_real_escape_string($_REQUEST['first']);
	echo "<table class='table'>
		<thead>
			<th>Vacancy</th>
			<th>Industry</th>
			<th>Employer</th>
			<th>Placements</th>
			<th>From / To</th>
		</thead>";


if($_REQUEST['type']=='search_vacancies'){
	
$all_vacancy=mysql_query("select a.userid,a.vacancy_title,a.vacancy_location,a.automatic_date,a.number_places,a.from_date1,a.to_date1,a.automatic_date,b.company_name,b.company_website from create_vacancy a,employer_registration b where a.userid=b.userid && (a.vacancy_title LIKE '%$srch%' || a.vacancy_location LIKE '%$srch%' || a.from_date1 LIKE '%$srch%' || b.company_name LIKE '%$srch%' || a.to_date1 LIKE '%$srch%') order by automatic_date  DESC;");
	
	}

	if($_REQUEST['type']=='search_limit'){
	
$all_vacancy=mysql_query("select a.userid,a.vacancy_title,a.vacancy_location,a.automatic_date,a.number_places,a.from_date1,a.to_date1,a.automatic_date,b.company_name,b.company_website from create_vacancy a,employer_registration b where a.userid=b.userid order by automatic_date  DESC limit $srch;");
	
	}

	if($_REQUEST['type']=='serch_month'){
	
$all_vacancy=mysql_query("select a.userid,a.vacancy_title,a.vacancy_location,a.automatic_date,a.number_places,a.from_date1,a.to_date1,a.automatic_date,b.company_name,b.company_website from create_vacancy a,employer_registration b where a.userid=b.userid && (month(a.automatic_date)='$srch') order by automatic_date  DESC ;");
	
	}

		
		

	
	if($all_vacancy){
	
	if($all_vacancy && mysql_num_rows($all_vacancy)>0){
while($row=mysql_fetch_array($all_vacancy)){
	
		$userid=$row['userid'];
		$auto_date=$row['automatic_date'];
	$vacancy_title=$row['vacancy_title'];
	$company_name=$row['company_name'];
		$from_date1=$row['from_date1'];
		$to_date1=$row['to_date1'];
	
		
echo "<tr><td><a href='view_vacancy.php?user=$userid>&auto_date=$auto_date'>$vacancy_title</a></td>
			<td>Content Not</td>
			<td><a href='employer_detail.php?empuserid=$userid'>$company_name</a></td>
			<td>Content Not</td>
			<td>$from_date1  TO  $to_date1</td>
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



?>