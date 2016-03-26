<?php
include('connection.php'); 
session_start();
class EmployerEdit{
  public   function employer_profile_edit(){
        $employer_user=$_SESSION['employeruserid'];
        $company_name=mysql_real_escape_string($_POST['company_name']);
        $company_address=mysql_real_escape_string($_POST['company_address']);
        $company_discription=mysql_real_escape_string($_POST['company_dis']);
        $why_do_work_exp=mysql_real_escape_string($_POST['why_do_work_exp']);
        $company_city=mysql_real_escape_string($_POST['company_city']);
        $company_postal_code=mysql_real_escape_string($_POST['company_postal_code']);
        $company_website=mysql_real_escape_string($_POST['company_website']);
        $company_telephone=mysql_real_escape_string($_POST['company_telephone']);
	  
	   $first_name=mysql_real_escape_string($_POST['first_name']);
	   $last_name=mysql_real_escape_string($_POST['last_name']);
	   $region=mysql_real_escape_string($_POST['region']);
	   $com_title=mysql_real_escape_string($_POST['com_title']);
	   $email=mysql_real_escape_string($_POST['email']);
	  
	  
	  
	  
	  
       if(!empty($_FILES['logo']['name'])){
     $logo="../employer/logo/".$_FILES['logo']['name'];
	move_uploaded_file($_FILES['logo']['tmp_name'],$logo);
         $logoname=mysql_real_escape_string($_FILES['logo']['name']);
     }
	  else{$logoname=mysql_real_escape_string($_POST['old_logo']); }
    
$employer_edit=mysql_query("update employer_registration set company_first_name='$first_name',company_last_name='$last_name',company_description='$company_discription',why_do_work_experience='$why_do_work_exp',company_email='$email',company_region='$region',company_title='$com_title',company_name='$company_name',company_address='$company_address',company_city='$company_city',company_telephone='$company_telephone',company_website='$company_website',company_postal_code='$company_postal_code',logo='$logoname' where userid='$employer_user';");

if($employer_edit){
//echo '<script>alert("Employer Complete Profile Sucess!");</script>';
	  echo '<script type="text/javascript">window.location ="../employer/employer_profile.php";</script>';
}
else{ echo '<script>alert("Employer profile Cometation Error!'.mysql_error().'");</script>';}
    }

public function create_vacancy(){
    $employer_user=$_SESSION['employeruserid'];
    $vacancy_title=mysql_real_escape_string($_POST['vacancy_title']);
    $vacancy_location=mysql_real_escape_string($_POST['vacancy_location']);
    $vacancy_description=mysql_real_escape_string($_POST['vacancy_description']);
    $number_places=mysql_real_escape_string($_POST['number_places']);
    $duration=mysql_real_escape_string($_POST['duration']);
    $from_date1=mysql_real_escape_string($_POST['from_date1']);
    //$from_date2=mysql_real_escape_string($_POST['from_date2']);
   // $from_date3=mysql_real_escape_string($_POST['from_date3']);
    $to_date1=mysql_real_escape_string($_POST['to_date1']);
    //$to_date2=mysql_real_escape_string($_POST['to_date2']);
    //$to_date3=mysql_real_escape_string($_POST['to_date3']);
    //$restriction_gender=mysql_real_escape_string($_POST['restriction_gender']);
    $schooling_level=mysql_real_escape_string($_POST['schooling_level']);
    $selected_school_name=mysql_real_escape_string($_POST['selected_school_name']);
    
    $crt_vacancy=mysql_query("insert into create_vacancy(userid,vacancy_title,vacancy_location,vacancy_description,number_places,duration,from_date1,to_date1,schooling_level,selected_school_name,automatic_date) values ('$employer_user','$vacancy_title','$vacancy_location','$vacancy_description','$number_places','$duration','$from_date1','$to_date1','$schooling_level','$selected_school_name',now());");
  
    if($crt_vacancy){
//echo '<script>alert("Vacancy Created Sucessfully!");</script>';
		  echo '<script type="text/javascript">window.location ="../employer/manage_vacancy.php";</script>';
}
else{ echo '<script>alert("Vacancy Created  Error!'.mysql_error().'");</script>';}

}


public function edit_vacancy(){
    $employer_user=$_SESSION['employeruserid'];
    $id=$_POST['id'];
    $vacancy_title=mysql_real_escape_string($_POST['vacancy_title']);
    $vacancy_location=mysql_real_escape_string($_POST['vacancy_location']);
    $vacancy_description=mysql_real_escape_string($_POST['vacancy_description']);
    $number_places=mysql_real_escape_string($_POST['number_places']);
    $duration=mysql_real_escape_string($_POST['duration']);
    $from_date1=mysql_real_escape_string($_POST['from_date1']);
    //$from_date2=mysql_real_escape_string($_POST['from_date2']);
    //$from_date3=mysql_real_escape_string($_POST['from_date3']);
    $to_date1=mysql_real_escape_string($_POST['to_date1']);
    //$to_date2=mysql_real_escape_string($_POST['to_date2']);
    //$to_date3=mysql_real_escape_string($_POST['to_date3']);
    //$restriction_gender=mysql_real_escape_string($_POST['restriction_gender']);
    $schooling_level=mysql_real_escape_string($_POST['schooling_level']);
    $selected_school_name=mysql_real_escape_string($_POST['selected_school_name']);
    
    $crt_vacancy=mysql_query("update create_vacancy set vacancy_title='$vacancy_title',vacancy_location='$vacancy_location',vacancy_description='$vacancy_description',number_places='$number_places',duration='$duration',from_date1='$from_date1',to_date1='$to_date1',schooling_level='$schooling_level',selected_school_name='$selected_school_name',automatic_date=now() where userid='$employer_user' && id='$id';");
  
    if($crt_vacancy){
//echo '<script>alert("Vacancy Created Sucessfully!");</script>';
          echo '<script type="text/javascript">window.location ="../employer/manage_vacancy.php";</script>';
}
else{ echo '<script>alert("Vacancy Edit  Error!'.mysql_error().'");</script>';}

}
   
public function employer_create_location(){
      $employer_user=$_SESSION['employeruserid'];
    $company_name=mysql_real_escape_string($_POST['company_name']);
    $type_of_location=mysql_real_escape_string($_POST['type_of_location']);
    $location_name=mysql_real_escape_string($_POST['location_name']);
    $contact_title=mysql_real_escape_string($_POST['contact_title']);
    $contact_first_name=mysql_real_escape_string($_POST['contact_first_name']);
    $contact_last_name=mysql_real_escape_string($_POST['contact_last_name']);
    $contact_email=mysql_real_escape_string($_POST['contact_email']);
    $contact_telephone=mysql_real_escape_string($_POST['contact_telephone']);
    $location_address=mysql_real_escape_string($_POST['location_address']);
    $locatiom_city=mysql_real_escape_string($_POST['locatiom_city']);
    $location_postal_code=mysql_real_escape_string($_POST['location_postal_code']);
	
	$location=mysql_query("insert into employer_location (userid,company_name,type_of_location,location_name,contact_title,contact_first_name,contact_last_name,conatct_email,contact_telephone,location_address,location_city,location_postal_code,create_time) values('$employer_user','$company_name','$type_of_location','$location_name','$contact_title','$contact_first_name','$contact_last_name','$contact_email','$contact_telephone','$location_address','$locatiom_city','$location_postal_code',now()) ;");

    /*$location=mysql_query("update employer_location set company_name='$company_name',type_of_location='$type_of_location',location_name='$location_name',contact_title='$contact_title',contact_first_name='$contact_first_name',contact_last_name='$contact_last_name',conatct_email='$contact_email',contact_telephone='$contact_telephone',location_address='$location_address',location_city='$locatiom_city',location_postal_code='$location_postal_code' where userid='$employer_user';"); */
    
    
     if($location){
//echo '<script>alert("Employer Location Create Sucessfully!");</script>';
		   echo '<script type="text/javascript">window.location ="../employer/employer_locations.php";</script>';
}
else{ echo '<script>alert("Employer Location Creation  Error!'.mysql_error().'");</script>';}

    
}
	
	public function update_location(){
	
	   $employer_user=$_GET['user'];
		$crt_tm=$_GET['tm'];
    $company_name=mysql_real_escape_string($_POST['company_name']);
    $type_of_location=mysql_real_escape_string($_POST['type_of_location']);
    $location_name=mysql_real_escape_string($_POST['location_name']);
    $contact_title=mysql_real_escape_string($_POST['contact_title']);
    $contact_first_name=mysql_real_escape_string($_POST['contact_first_name']);
    $contact_last_name=mysql_real_escape_string($_POST['contact_last_name']);
    $contact_email=mysql_real_escape_string($_POST['contact_email']);
    $contact_telephone=mysql_real_escape_string($_POST['contact_telephone']);
    $location_address=mysql_real_escape_string($_POST['location_address']);
    $locatiom_city=mysql_real_escape_string($_POST['locatiom_city']);
    $location_postal_code=mysql_real_escape_string($_POST['location_postal_code']);
	

    $location=mysql_query("update employer_location set company_name='$company_name',type_of_location='$type_of_location',location_name='$location_name',contact_title='$contact_title',contact_first_name='$contact_first_name',contact_last_name='$contact_last_name',conatct_email='$contact_email',contact_telephone='$contact_telephone',location_address='$location_address',location_city='$locatiom_city',location_postal_code='$location_postal_code' where userid='$employer_user' and create_time='$crt_tm';"); 
    
    
     if($location){
//echo '<script>alert("Employer Location Updated Sucessfully!");</script>';
		   echo '<script type="text/javascript">window.location ="../employer/employer_locations.php";</script>';
}
else{ echo '<script>alert("Employer Location Update  Error!'.mysql_error().'");</script>';}

	
	
	}
    
}




if(isset($_POST['employer_edit'])){
$em_edit= new EmployerEdit();
    $em_edit->employer_profile_edit();
}

if(isset($_POST['create_vacancy'])){
$em_edit= new EmployerEdit();
    $em_edit->create_vacancy();

}

if(isset($_POST['edit_vacancy'])){
$em_edit= new EmployerEdit();
    $em_edit->edit_vacancy();

}

if(isset($_POST['employer_location'])){
$em_edit= new EmployerEdit();
    $em_edit->employer_create_location();

}

if(isset($_POST['update_employer_location'])){
$em_edit= new EmployerEdit();
    $em_edit->update_location();

}


?>