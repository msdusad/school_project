<?php
require_once('connection.php');
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
//Cv achivment and intrest
$curr=$_SESSION['studentuserid'];
 $student_achivments=mysql_query("select * from student_achievements where userid='$curr';");
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


  $cv_profile=mysql_query("select * from student_cv where userid='$curr';");
    
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
		 $cv_video1=$row['video1'];
        
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

?>