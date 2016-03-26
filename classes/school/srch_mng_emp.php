<?php 
include('../connection.php');
session_start();

$srch=mysql_real_escape_string($_REQUEST['first']);
$sql=mysql_query("SELECT userid,company_name FROM employer_registration where company_name LIKE '%$srch%'");
	echo "<table class='table'>
		<thead>
			<th>Name</th>
			<th>Invitation</th>
			<th>Vacancies</th>
			<th>Placements</th>
			<th>H&S Cert. Exp.</th>
		</thead>";
while($name=mysql_fetch_array($sql))
{
$employerid=$name['userid'];
	
	if($_REQUEST['type']=='searchemployer'){
$all_vacancy=mysql_query("select count(userid) as numbofvacncy from create_vacancy where userid='$employerid' && (vacancy_title LIKE '%$srch%' || vacancy_location LIKE '%$srch%' || vacancy_description LIKE '%$srch%' || from_date1 LIKE '%$srch%' || to_date1 LIKE '%$srch%');");
		
	}
	
		if($_REQUEST['type']=='limitofsch'){
$all_vacancy=mysql_query("select count(userid) as numbofvacncy from create_vacancy where userid='$employerid' limit $srch;");
	
	}
	
	/* if($_REQUEST['type']=='ref_status'){
		
	if($_REQUEST['first']=='all'){
	$all_vacancy=mysql_query("select count(userid) as numbofvacncy from create_vacancy where userid='$employerid' && (vacancy_title LIKE '%$srch%' || vacancy_location LIKE '%$srch%' || vacancy_description LIKE '%$srch%' || from_date1 LIKE '%$srch%' || to_date1 LIKE '%$srch%');");
	}
		
		if($_REQUEST['first']=='pending'){
	
				$all_vacancy=mysql_query("select count(userid) as numbofvacncy from create_vacancy where userid='$employerid' && (vacancy_title LIKE '%$srch%' || vacancy_location LIKE '%$srch%' || vacancy_description LIKE '%$srch%' || from_date1 LIKE '%$srch%' || to_date1 LIKE '%$srch%');");
			
	}
		
		
		if($_REQUEST['first']=='completed'){
			
				$all_vacancy=mysql_query("select count(userid) as numbofvacncy from create_vacancy where userid='$employerid' && (vacancy_title LIKE '%$srch%' || vacancy_location LIKE '%$srch%' || vacancy_description LIKE '%$srch%' || from_date1 LIKE '%$srch%' || to_date1 LIKE '%$srch%');");
	
	}
	
	} */
	
	
	
	
	if($all_vacancy){
	
	if($all_vacancy && mysql_num_rows($all_vacancy)>0){
while($row=mysql_fetch_array($all_vacancy)){
	
		$company_name=$name['company_name'];
		
		$number_ofvacancy=$row['numbofvacncy'];
		
echo "<tr><td><a href='employer_detail.php?empuserid='$employerid'>$company_name</a></td>
			<td>Invitation</td>
			<td>$number_ofvacancy</td>
			<td>Fetching Placement Pending</td>
			<td>Fetching Pending</td>
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
}
echo "</table>";	


?>