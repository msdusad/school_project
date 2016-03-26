<?php
//include('connection.php');
//session_start();
// Code for fetch data from database of employers table
$employer_detail=mysql_query("select * from employer_registration where userid='{$_SESSION['employeruserid']}';");
   if ($employer_detail){
 while($row = mysql_fetch_array($employer_detail)){
         $company_fname=$row['company_first_name'];
        $company_lname=$row['company_last_name'];
        $company_title=$row['company_title'];
        $company_email=$row['company_email'];
        $company_telephone=$row['company_telephone'];
        $company_name=$row['company_name'];
        $company_address=$row['company_address'];
         $company_description=$row['company_description'];
          $why_do_work_experience=$row['why_do_work_experience'];
        $company_city=$row['company_city'];
        $company_region=$row['company_region'];
        $company_postal_code=$row['company_postal_code'];
        $company_website=$row['company_website'];
     $logo=$row['logo'];
      } 
     
    }
        else{ echo '<script>alert("Employer Data Fetch Fetching Error!'.mysql_error().'");</script>';}

// fetch datta fron create vacancy table

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