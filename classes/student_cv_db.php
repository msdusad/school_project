<?php 
include('connection.php');
session_start();
class StudentCvDetails{

public function cv_personal_detail(){

 $current_userid= $_SESSION['studentuserid'];
$first_name=mysql_real_escape_string($_POST['first_name']);
$last_name=mysql_real_escape_string($_POST['last_name']);
$phone_code=mysql_real_escape_string($_POST['country_code']);
$phone_number=mysql_real_escape_string($_POST['phone_number']);
$email=mysql_real_escape_string($_POST['email']);
$website=mysql_real_escape_string($_POST['website']);
$cv=mysql_real_escape_string($_POST['cv']);

  $cv_personal=mysql_query("update student_cv set first_name='$first_name',
  last_name='$last_name',phone_code='$phone_code',phone_number='$phone_number',email='$email',website='$website',cv='$cv' where userid='$current_userid' ;");  
    
     if($cv_personal){
          //echo '<script>alert("Student CV Personal Detail Updated Sucessfully!");</script>';
		 echo '<script type="text/javascript">window.location ="../student/cv_view.php";</script>';
        }
        else{
        
           echo '<script>alert("Error In Student  CV Personal Detail Updatation !'.mysql_error().'");</script>';
        }     
}
   
public function cv_education_detail(){
$current_userid=mysql_real_escape_string( $_SESSION['studentuserid']);
    $school_name=mysql_real_escape_string($_POST['school_name']);
    $school_address=mysql_real_escape_string($_POST['school_address']);
    $school_city=mysql_real_escape_string($_POST['school_city']);
    $school_region=mysql_real_escape_string($_POST['school_region']);
    $school_postalcode=mysql_real_escape_string($_POST['school_postalcode']);
    $gcsc_school_start_month=mysql_real_escape_string($_POST['gcsc_school_start_month']);
    $gcsc_school_start_year=mysql_real_escape_string($_POST['gcsc_school_start_year']);
    $currently_studying=$_POST['currently_studying'];
    //on select condition depens data come or not
     
    
    if($currently_studying=='1'){
    $gscse_summary=$_POST['gcse_summary'];


$subject1=mysql_real_escape_string($_POST['subject1']);
    $subject2=mysql_real_escape_string($_POST['subject2']);
    $subject3=mysql_real_escape_string($_POST['subject3']);
    $subject4=mysql_real_escape_string($_POST['subject4']);
    $subject5=mysql_real_escape_string($_POST['subject5']);
    $subject6=mysql_real_escape_string($_POST['subject6']);
    $subject7=mysql_real_escape_string($_POST['subject7']);
    $subject8=mysql_real_escape_string($_POST['subject8']);
    $subject9=mysql_real_escape_string($_POST['subject9']);
    $subject10=mysql_real_escape_string($_POST['subject10']);
    $subject11=mysql_real_escape_string($_POST['subject11']);
    $expected_grade1=mysql_real_escape_string($_POST['expected_grade1']);
    $expected_grade2=mysql_real_escape_string($_POST['expected_grade2']);
     $expected_grade3=mysql_real_escape_string($_POST['expected_grade3']);
    $expected_grade4=mysql_real_escape_string($_POST['expected_grade4']);
    $expected_grade5=mysql_real_escape_string($_POST['expected_grade5']);
    $expected_grade6=mysql_real_escape_string($_POST['expected_grade6']);
    $expected_grade7=mysql_real_escape_string($_POST['expected_grade7']);
    $expected_grade8=mysql_real_escape_string($_POST['expected_grade8']);
    $expected_grade9=mysql_real_escape_string($_POST['expected_grade9']);
    $expected_grade10=mysql_real_escape_string($_POST['expected_grade10']);
    $expected_grade11=mysql_real_escape_string($_POST['expected_grade11']);


        
         $education=mysql_query("update student_cv set school_name='$school_name',school_address='$school_address',school_city='$school_city',school_region='$school_region',school_postalcode='$school_postalcode',gcsc_school_start_month='$gcsc_school_start_month',gcsc_school_start_year='$gcsc_school_start_year',currently_studying='$currently_studying',gcse_summary='$gscse_summary',subject1='$subject1',subject2='$subject2',subject3='$subject3',subject4='$subject4',subject5='$subject5',subject6='$subject6',subject7='$subject7',subject8='$subject8',subject9='$subject9',subject10='$subject10',subject11='$subject11',expected_grade1='$expected_grade1',expected_grade2='$expected_grade2',expected_grade3='$expected_grade3',expected_grade4='$expected_grade4',expected_grade5='$expected_grade5',expected_grade6='$expected_grade6',expected_grade7='$expected_grade7',expected_grade8='$expected_grade8',expected_grade9='$expected_grade9',expected_grade10='$expected_grade10',expected_grade11='$expected_grade11'  where userid='$current_userid';");   

          if($education){
         // echo '<script>alert("Student Education Updated Sucessfully!");</script>';
    echo '<script type="text/javascript">window.location ="../student/cv_education.php";</script>';
    //  echo "data inserted";
        }
        else{
        
           echo '<script>alert("Error In Student Education Updated Updatation !'.mysql_error().'");</script>';
        } 

                
    }
    
    
    if($currently_studying=='2'){

$subject1=mysql_real_escape_string($_POST['subject1']);
    $subject2=mysql_real_escape_string($_POST['subject2']);
    $subject3=mysql_real_escape_string($_POST['subject3']);
    $subject4=mysql_real_escape_string($_POST['subject4']);
    $subject5=mysql_real_escape_string($_POST['subject5']);
    $subject6=mysql_real_escape_string($_POST['subject6']);
    $subject7=mysql_real_escape_string($_POST['subject7']);
    $subject8=mysql_real_escape_string($_POST['subject8']);
    $subject9=mysql_real_escape_string($_POST['subject9']);
    $subject10=mysql_real_escape_string($_POST['subject10']);
    $subject11=mysql_real_escape_string($_POST['subject11']);
    $expected_grade1=mysql_real_escape_string($_POST['expected_grade1']);
    $expected_grade2=mysql_real_escape_string($_POST['expected_grade2']);
     $expected_grade3=mysql_real_escape_string($_POST['expected_grade3']);
    $expected_grade4=mysql_real_escape_string($_POST['expected_grade4']);
    $expected_grade5=mysql_real_escape_string($_POST['expected_grade5']);
    $expected_grade6=mysql_real_escape_string($_POST['expected_grade6']);
    $expected_grade7=mysql_real_escape_string($_POST['expected_grade7']);
    $expected_grade8=mysql_real_escape_string($_POST['expected_grade8']);
    $expected_grade9=mysql_real_escape_string($_POST['expected_grade9']);
    $expected_grade10=mysql_real_escape_string($_POST['expected_grade10']);
    $expected_grade11=mysql_real_escape_string($_POST['expected_grade11']);


$alevels_summary=mysql_real_escape_string($_POST['alevels_summary']);
    $alevel_subject1=mysql_real_escape_string($_POST['alevel_subject1']);
    $alevel_subject2=mysql_real_escape_string($_POST['alevel_subject2']);
    $alevel_subject3=mysql_real_escape_string($_POST['alevel_subject3']);
    $alevel_subject4=mysql_real_escape_string($_POST['alevel_subject4']);
    $alevel_subject5=mysql_real_escape_string($_POST['alevel_subject5']);
    $alevel_expected_grade1=mysql_real_escape_string($_POST['alevel_expected_grade1']);
    $alevel_expected_grade2=mysql_real_escape_string($_POST['alevel_expected_grade2']);
    $alevel_expected_grade3=mysql_real_escape_string($_POST['alevel_expected_grade3']);
    $alevel_expected_grade4=mysql_real_escape_string($_POST['alevel_expected_grade4']);
    $alevel_expected_grade5=mysql_real_escape_string($_POST['alevel_expected_grade5']);
      $select_school_name=mysql_real_escape_string($_POST['select_school_same']);
        
        
       if($select_school_name=='1'){
        
        $education=mysql_query("update student_cv set school_name='$school_name',school_address='$school_address',school_city='$school_city',school_region='$school_region',school_postalcode='$school_postalcode',gcsc_school_start_month='$gcsc_school_start_month',gcsc_school_start_year='$gcsc_school_start_year',currently_studying='$currently_studying',gcse_summary='$gscse_summary',subject1='$subject1',subject2='$subject2',subject3='$subject3',subject4='$subject4',subject5='$subject5',subject6='$subject6',subject7='$subject7',subject8='$subject8',subject9='$subject9',subject10='$subject10',subject11='$subject11',expected_grade1='$expected_grade1',expected_grade2='$expected_grade2',expected_grade3='$expected_grade3',expected_grade4='$expected_grade4',expected_grade5='$expected_grade5',expected_grade6='$expected_grade6',expected_grade7='$expected_grade7',expected_grade8='$expected_grade8',expected_grade9='$expected_grade9',expected_grade10='$expected_grade10',expected_grade11='$expected_grade11',alevels_summary='$alevels_summary',alevel_subject1='$alevel_subject1',alevel_subject2='$alevel_subject2',alevel_subject3='$alevel_subject3',alevel_subject4='$alevel_subject4',alevel_subject5='$alevel_subject5',alevel_expected_grade1='$alevel_expected_grade1',alevel_expected_grade2='$alevel_expected_grade2',alevel_expected_grade3='$alevel_expected_grade3',alevel_expected_grade4='$alevel_expected_grade4',alevel_expected_grade5='$alevel_expected_grade5',select_school_same='$select_school_name'  where userid='$current_userid';");


         if($education){
         // echo '<script>alert("Student Education Updated Sucessfully!");</script>';
    echo '<script type="text/javascript">window.location ="../student/cv_education.php";</script>';
    //  echo "data inserted";
        }
        else{
        
           echo '<script>alert("Error In Student Education Updated Updatation !'.mysql_error().'");</script>';
        } 

        
        }   
        
        
        
          
    if($select_school_name=='2'){
    // for school diffrent gcse
     $other_school_name=mysql_real_escape_string($_POST['other_school_name']);
    $other_school_address=mysql_real_escape_string($_POST['other_school_address']);
    $other_school_city=mysql_real_escape_string($_POST['other_school_city']);
    $other_school_region=mysql_real_escape_string($_POST['other_school_region']);
    $other_school_postalcode=mysql_real_escape_string($_POST['other_school_postalcode']);
    $other_school_start_month=mysql_real_escape_string($_POST['other_school_start_month']);
    $other_school_start_year=mysql_real_escape_string($_POST['other_school_start_year']);
    $other_school_end_month=mysql_real_escape_string($_POST['other_school_end_month']);
    $other_school_end_year=mysql_real_escape_string($_POST['other_school_end_year']);
         
        
       $education=mysql_query("update student_cv set school_name='$school_name',school_address='$school_address',school_city='$school_city',school_region='$school_region',school_postalcode='$school_postalcode',gcsc_school_start_month='$gcsc_school_start_month',gcsc_school_start_year='$gcsc_school_start_year',currently_studying='$currently_studying',gcse_summary='$gscse_summary',subject1='$subject1',subject2='$subject2',subject3='$subject3',subject4='$subject4',subject5='$subject5',subject6='$subject6',subject7='$subject7',subject8='$subject8',subject9='$subject9',subject10='$subject10',subject11='$subject11',expected_grade1='$expected_grade1',expected_grade2='$expected_grade2',expected_grade3='$expected_grade3',expected_grade4='$expected_grade4',expected_grade5='$expected_grade5',expected_grade6='$expected_grade6',expected_grade7='$expected_grade7',expected_grade8='$expected_grade8',expected_grade9='$expected_grade9',expected_grade10='$expected_grade10',expected_grade11='$expected_grade11',alevels_summary='$alevels_summary',alevel_subject1='$alevel_subject1',alevel_subject2='$alevel_subject2',alevel_subject3='$alevel_subject3',alevel_subject4='$alevel_subject4',alevel_subject5='$alevel_subject5',alevel_expected_grade1='$alevel_expected_grade1',alevel_expected_grade2='$alevel_expected_grade2',alevel_expected_grade3='$alevel_expected_grade3',alevel_expected_grade4='$alevel_expected_grade4',alevel_expected_grade5='$alevel_expected_grade5',select_school_same='$select_school_name',other_school_name='$other_school_name',other_school_address='$other_school_address',other_school_city='$other_school_city',other_school_region='$other_school_region',other_school_postalcode='$other_school_postalcode',other_school_start_month='$other_school_start_month',other_school_start_year='$other_school_start_year',other_school_end_month='$other_school_end_month',other_school_end_year='$other_school_end_year'  where userid='$current_userid';");   



        if($education){
         // echo '<script>alert("Student Education Updated Sucessfully!");</script>';
    echo '<script type="text/javascript">window.location ="../student/cv_education.php";</script>';
    //  echo "data inserted";
        }
        else{
        
           echo '<script>alert("Error In Student Education Updated Updatation !'.mysql_error().'");</script>';
        } 

            
    } 
  
         
    }

    if($currently_studying=='3'){

 $education=mysql_query("update student_cv set school_name='$school_name',school_address='$school_address',school_city='$school_city',school_region='$school_region',school_postalcode='$school_postalcode',gcsc_school_start_month='$gcsc_school_start_month',gcsc_school_start_year='$gcsc_school_start_year',currently_studying='$currently_studying' where userid='$current_userid';"); 

 if($education){
         // echo '<script>alert("Student Education Updated Sucessfully!");</script>';
    echo '<script type="text/javascript">window.location ="../student/cv_education.php";</script>';
    //  echo "data inserted";
        }
        else{
        
           echo '<script>alert("Error In Student Education Updated Updatation !'.mysql_error().'");</script>';
        } 

    }

    
     
    
    
}
  public function upload_media(){
      
  $current_userid= $_SESSION['studentuserid'];
       $video="../student/student_docs/video/".$_FILES['video']['name'];
	move_uploaded_file($_FILES['video']['tmp_name'],$video);
         $videoname=$_FILES['video']['name'];
     
      $media=mysql_query("update student_cv set video='$videoname' where userid='$current_userid';");
  
  if($media){
        //  echo '<script>alert("Student Media File Uploaded Sucessfully!");</script>';
	   echo '<script type="text/javascript">window.location ="../student/cv_media.php";</script>';
        }
        else{
        
           echo '<script>alert("Error In Student  Media File Updatation !'.mysql_error().'");</script>';
        }     
  
  }

    public function cv_upload(){
      
  $current_userid= $_SESSION['studentuserid'];
       $video="../student/student_docs/cv/".$_FILES['cv_file']['name'];
  move_uploaded_file($_FILES['cv_file']['tmp_name'],$video);
         $videoname=$_FILES['cv_file']['name'];
     
      $media=mysql_query("update student_cv set cv_file='$videoname' where userid='$current_userid';");
  
  if($media){
        //  echo '<script>alert("Student Media File Uploaded Sucessfully!");</script>';
     echo '<script type="text/javascript">window.location ="../student/add_cv.php";</script>';
        }
        else{
        
           echo '<script>alert("Error In Student  Media File Updatation !'.mysql_error().'");</script>';
        }     
  
  }

  
	
	public function  Achivements_intrest(){
	
	 $current_userid= $_SESSION['studentuserid'];
       $achiv1=mysql_real_escape_string($_POST['Achievement1']);
		$achiv2=mysql_real_escape_string($_POST['Achievement2']);
		$achiv3=mysql_real_escape_string($_POST['Achievement3']);
		$achiv4=mysql_real_escape_string($_POST['Achievement4']);
		$int1=mysql_real_escape_string($_POST['Interest1']);
		$int2=mysql_real_escape_string($_POST['Interest2']);
		$int3=mysql_real_escape_string($_POST['Interest3']);
		$int4=mysql_real_escape_string($_POST['Interest4']);
		
      $achiv=mysql_query("update student_achievements set achievement1='$achiv1',achievement2='$achiv2',achievement3='$achiv3',achievement4='$achiv4',interest1='$int1',interest2='$int2',interest3='$int3',interest4='$int4' where userid='$current_userid';");
  
  if($achiv){
         // echo '<script>alert("Student Achievement & Interest Sucessfully!");</script>';
	   echo '<script type="text/javascript">window.location ="../student/cv_achievment.php";</script>';
        }
        else{
        
           echo '<script>alert("Error In Student Achievement & Interest Updatation !'.mysql_error().'");</script>';
        } 
	
	}
    
    
}





if(isset($_POST['cv_personal_details'])){
$cvupdate=new StudentCvDetails();
$cvupdate->cv_personal_detail();
}

if(isset($_POST['cv_education_detail'])){
$cvupdate=new StudentCvDetails();
$cvupdate->cv_education_detail();
}

if(isset($_POST['video_upload'])){
$cvupdate=new StudentCvDetails();
$cvupdate->upload_media();
}

if(isset($_POST['achive_intrest'])){
$cvupdate=new StudentCvDetails();
$cvupdate->Achivements_intrest();
}

if(isset($_POST['cv_upload'])){
$cvupdate=new StudentCvDetails();
$cvupdate->cv_upload();
}


    ?>