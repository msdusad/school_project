
<?php 
include('connection.php');
session_start();
// code for search vacancies for view_all_application page in student

if($_REQUEST['type']=='student_view_all'){
$srch=mysql_real_escape_string($_REQUEST['first']);
$all_vacancy=mysql_query("select distinct a.userid,a.vacancy_title,a.vacancy_location,a.number_places,a.from_date1,a.to_date1,a.automatic_date,b.company_name,b.company_website from create_vacancy a,employer_registration b where a.userid=b.userid && (a.vacancy_title LIKE '%$srch%' || a.vacancy_location LIKE '%$srch%' || a.from_date1 LIKE '%$srch%' || a.to_date1 LIKE '%$srch%' || b.company_name LIKE '%$srch%') order by automatic_date  DESC;");
}

 //for second condition

if($_REQUEST['type']=='monthbysearch'){
$srch=$_REQUEST['first'];
$all_vacancy=mysql_query("select distinct a.userid,a.vacancy_title,a.vacancy_location,a.number_places,a.from_date1,a.to_date1,a.automatic_date,b.company_name,b.company_website from create_vacancy a,employer_registration b where a.userid=b.userid && (month(a.automatic_date)='$srch') order by automatic_date  DESC;");
}



if($all_vacancy){
	echo "<table class='table'>
		<thead>
			<th>VACANCY</th>
			<th>INDUSTRY</th>
			<th>EMPLOYER</th>
			<th>PLACEMENTS</th>
			<th>FROM / TO</th>
		</thead>";
	if($all_vacancy && mysql_num_rows($all_vacancy)>0){
while($row=mysql_fetch_array($all_vacancy)){
	$userid=$row['userid'];
	$vacancy_title=$row['vacancy_title'];
		$company_name=$row['company_name'];
		$company_website=$row['company_website'];
		$automatic_date=$row['automatic_date'];
		$vacancy_title=$row['vacancy_title'];
		$number_places=$row['number_places'];
		$from_date1=$row['from_date1'];
		$to_date1=$row['to_date1'];
echo "<tr><td><a href='view_vacancy.php?userid=$userid&vacancy_title=$vacancy_title&company_name=$company_name&company_website= $company_website&date=$automatic_date'>$vacancy_title</a></td>";
echo "<td>Industury Type</td><td>$company_name</td><td>$number_places</td><td>$from_date1  TO $to_date1</td></tr>";
	
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
	


		?>