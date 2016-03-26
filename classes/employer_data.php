<?php
include('connection.php');
session_start();
  $employer_vacancy=mysql_query("select * from create_vacancy where userid='{$_SESSION['employeruserid']}';");
if ($employer_vacancy){
    
  if ($employer_vacancy && mysql_num_rows($employer_vacancy)>0) {
    while($row = mysql_fetch_array($employer_vacancy)){
		$vacancy_title=$row['vacancy_title'];
		$vacancy_location=$row['vacancy_location'];
		$vacancy_description=$row['vacancy_description'];
		$number_places=$row['number_places'];
		$duration=$row['duration'];
		$from_date1=$row['from_date1'];
		$from_date2=$row['from_date2'];
		$from_date3=$row['from_date3'];
		$to_date1=$row['to_date1'];
		$to_date2=$row['to_date2'];
		$to_date3=$row['to_date3'];
		$restrication_gender=$row['restriction_gender'];
		$schooling_level=$row['schooling_level'];
		$selected_school_name=$row['selected_school_name'];	
	}
  }
}


?>