<?php
$userdetail=$_SESSION['view_application_userid'];
$vacancy_apply_time=$_SESSION['vacancy_apply_time'];
$employeruser=$_SESSION['employeruserid'];
$vacancy_create_time=$_SESSION['vacancy_create_time'];

 $student_achivments=mysql_query("select * from student_achievements where userid='$userdetail';");
if ($student_achivments){
 while($row = mysql_fetch_array($student_achivments)){
    $achiv1=$row['achievement1'];
	 $achiv2=$row['achievement2'];
	 $achiv3=$row['achievement3'];
	 $achiv4=$row['achievement4'];
	 $intr1=$row['interest1'];
	 $intr2=$row['interest2'];
	 $intr3=$row['interest3'];
	 $intr4=$row['interest4'];
 }
}
else{ echo '<script>alert("Student Achievement & Interest Query Pass Error!");</script>';}

//Cv school and personal


  $cv_profile=mysql_query("select * from student_cv where userid='$userdetail';");
    
    if ($cv_profile){
    
  if ($cv_profile && mysql_num_rows($cv_profile)>0) {
    while($row = mysql_fetch_array($cv_profile)){
        
  
         
         $cv_first_name=$row['first_name'];
         $cv_last_name=$row['last_name'];
		$cv_ph_code=$row['phone_code'];
		$cv_primery_tel_no=$row['phone_number'];
         $cv_email=$row['email'];
		 $cv_website=$row['website'];
         $cv_data=$row['cv'];
		 $cv_video=$row['video'];
        
   // for education detail 
		
		
		 $school_name=$row['school_name'];
    $school_address=$row['school_address'];
    $school_city=$row['school_city'];
    $school_region=$row['school_region'];
    $school_postalcode=$row['school_postalcode'];
    $gcsc_school_start_month=$row['gcsc_school_start_month'];
    $gcsc_school_start_year=$row['gcsc_school_start_year'];
    $currently_studying=$row['currently_studying'];
    //on select condition depens data come or not
		$gcsc_summary=$row['gcse_summary'];
     $subject1=$row['subject1'];
    $subject2=$row['subject2'];
    $subject3=$row['subject3'];
    $subject4=$row['subject4'];
    $subject5=$row['subject5'];
    $subject6=$row['subject6'];
    $subject7=$row['subject7'];
    $subject8=$row['subject8'];
    $subject9=$row['subject9'];
    $subject10=$row['subject10'];
    $subject11=$row['subject11'];
    $expected_grade1=$row['expected_grade1'];
    $expected_grade2=$row['expected_grade2'];
     $expected_grade3=$row['expected_grade3'];
    $expected_grade4=$row['expected_grade4'];
    $expected_grade5=$row['expected_grade5'];
    $expected_grade6=$row['expected_grade6'];
    $expected_grade7=$row['expected_grade7'];
    $expected_grade8=$row['expected_grade8'];
    $expected_grade9=$row['expected_grade9'];
    $expected_grade10=$row['expected_grade10'];
    $expected_grade11=$row['expected_grade11'];
    
		// alevel if school 
		
		$alevels_summary=$row['alevels_summary'];
    $alevel_subject1=$row['alevel_subject1'];
    $alevel_subject2=$row['alevel_subject2'];
    $alevel_subject3=$row['alevel_subject3'];
    $alevel_subject4=$row['alevel_subject4'];
    $alevel_subject5=$row['alevel_subject5'];
    $alevel_expected_grade1=$row['alevel_expected_grade1'];
    $alevel_expected_grade2=$row['alevel_expected_grade2'];
    $alevel_expected_grade3=$row['alevel_expected_grade3'];
    $alevel_expected_grade4=$row['alevel_expected_grade4'];
    $alevel_expected_grade5=$row['alevel_expected_grade5'];
      $select_school_name=$row['select_school_same'];
		
		// other school if
		 $other_school_name=$row['other_school_name'];
    $other_school_address=$row['other_school_address'];
    $other_school_city=$row['other_school_city'];
    $other_school_region=$row['other_school_region'];
    $other_school_postalcode=$row['other_school_postalcode'];
    $other_school_start_month=$row['other_school_start_month'];
    $other_school_start_year=$row['other_school_start_year'];
    $other_school_end_month=$row['other_school_end_month'];
    $other_school_end_year=$row['other_school_end_year'];
    } 
     
    }
  }
        else{ echo '<script>alert("Student Cv Detail Fetch Fetching Error!'.mysql_error().'");</script>';}




    // code for fetch data from student profile table
    $st_profile=mysql_query("select * from student_profile where userid='$userdetail';");
    
    if ($st_profile){
    
  if ($st_profile && mysql_num_rows($st_profile)>0) {
    while($row = mysql_fetch_array($st_profile)){
        
         $home_address=$row['home_address'];
         $primery_tel_no=$row['phone'];
         $email=$row['email'];
        $dob_day=$row['dob_day'];
       $dob_month=$row['dob_month'];
       $dob_year=$row['dob_year'];
         $first_name=$row['first_name'];
         $last_name=$row['last_name'];
         $gender=$row['gender'];
         $city=$row['city'];
         $region=$row['region'];
         $postal_code=$row['postal_code'];
         $website=$row['website'];
         $profile_pic=$row['profile_picture'];
         //$video=$row['video'];
         //$cv=$row['cv'];
    } 
     
    }
  }
        else{ echo '<script>alert("Student Data Fetch Fetching Error!'.mysql_error().'");</script>';}
   // }
//}

 // code for fetch data from student school detail table

$school_detail=mysql_query("select * from student_school where userid='$userdetail';");
   if ($school_detail){
 while($row = mysql_fetch_array($school_detail)){
     
     // $current_userid=$_SESSION['studentuserid'];
     $school_name=$row['school_name'];
        $school_address=$row['school_address'];
      $school_city=$row['school_city'];
       $school_region=$row['school_region'];
       $school_postalcode=$row['school_postalcode'];
      $school_contact_sr=$row['school_contact_sr'];
        $school_contact_fname=$row['school_contact_fname'];
        $school_contact_lname=$row['school_contact_lname'];
     $school_phone=$row['school_phone'];
      $school_email=$row['school_email'];
       $school_website=$row['school_website'];
     
 }
   }
else{ 
    echo '<script>alert("Student School Detail Query Pass Error All fetch Data !'.mysql_error().'");</script>';
    }

// code for fetch data from student prefrences table 

 $student_prefrences=mysql_query("select * from student_preferences where userid='$userdetail';");
if ($student_prefrences){
 while($row = mysql_fetch_array($student_prefrences)){
    $all=$row['all_jobs'];
      $banking_finance=$row['banking_finance'];
        $retail=$row['retail'];
   $construction=$row['construction'];
       $legal=$row['legal'];
      $medical=$row['medical'];
      $other=$row['other'];
      $newsletter=$row['newsletter'];
    $vacaince_distance=$row['vacancies_distance'];
 }
}
else{ echo '<script>alert("Student Job Prefrences Query Pass Error!");</script>';}


// code for vacancy detail 

$vacancydetail=mysql_query("select duration,from_date1,to_date1 from create_vacancy where userid='$employeruser' && automatic_date='$vacancy_create_time';");

if ($vacancydetail){
 while($row = mysql_fetch_array($vacancydetail)){
	 $duration=$row['duration'];
	 $fromdate1=$row['from_date1'];
		 $todate1=$row['to_date1'];
	 
 }
}
else{
	echo "Error in Vacancy Detail Fetch Query".mysql_error();

}

?>