<script>
	function addstd(){
		
		 var r = confirm("Add Another Student?");
    if (r == true) {	
       window.location ="../schools/add_student.php";
    } else {
		
		window.location ="../schools/manage_students.php";
    }
	
	}
	
</script>

<?php
include('connection.php');
session_start();
class SchoolProfile {

 public function school_profile_complete(){

   $school_user=$_SESSION['schooluserid'];
        $school_name=mysql_real_escape_string($_POST['school_name']);
        $school_address=mysql_real_escape_string($_POST['school_address']);
        $school_city=mysql_real_escape_string($_POST['school_city']);
        $school_postal_code=mysql_real_escape_string($_POST['school_postal_code']);
        $school_website=mysql_real_escape_string($_POST['school_website']);
          $contact=mysql_real_escape_string($_POST['contact']);
        $school_telephone=mysql_real_escape_string($_POST['school_telephone']);
	 
	 $first_name=mysql_real_escape_string($_POST['first_name']);
	 $last_name=mysql_real_escape_string($_POST['last_name']);
	 $region=mysql_real_escape_string($_POST['region']);
	 $school_title=mysql_real_escape_string($_POST['school_title']);
	 $email=mysql_real_escape_string($_POST['email']);
	 
	 
	 
	 
       if($_FILES['school_logo']['name']!=''){ 
		 $logo="../schools/logo/".$_FILES['school_logo']['name'];
	move_uploaded_file($_FILES['school_logo']['tmp_name'],$logo);
         $logoname=mysql_real_escape_string($_FILES['school_logo']['name']);  
		   
	   }
	 else{
		 
		 $logoname=mysql_real_escape_string($_POST['imageoldname']);
	 }
    
$school_profile=mysql_query("update school_registration set school_first_name='$first_name',school_last_name='$last_name',school_name_title='$school_title',school_email='$email',school_region='$region',school_name='$school_name',school_address='$school_address',school_city='$school_city',contact='$contact',school_telephone='$school_telephone',school_website='$school_website',school_postal_code='$school_postal_code',school_logo='$logoname' where userid='$school_user';");

    
       
      if($school_profile){
         // echo '<script>alert("School Profile Complete Detail Updated!");</script>';
		    echo '<script type="text/javascript">window.location ="../schools/school_profile.php";</script>';
        }
        else{
        
           echo '<script>alert("Error In School Profile Complete Detail Updetation !'.mysql_error().'");</script>';
        }
}
    
  public function add_student(){
      $user=$_SESSION['schooluserid'];
 $first_name=mysql_real_escape_string($_POST['first_name']);
       $last_name=mysql_real_escape_string($_POST['last_name']);
       $email=mysql_real_escape_string($_POST['email']);
       $current_form=mysql_real_escape_string($_POST['current_form']);
       $gender=mysql_real_escape_string($_POST['gender']);
        $school_year=mysql_real_escape_string($_POST['school_year']);
      
      $add=mysql_query("insert into add_student (userid,first_name,last_name,email,current_form,gender,school_year) values ('$user','$first_name','$last_name','$email','$current_form','$gender','$school_year');");
        if($add){
         echo '<script>addstd();</script>';
			
			
			
			 // echo '<script type="text/javascript">window.location ="../schools/manage_students.php";</script>';
			
			//..........email to student invitation
			
				$subject = 'Worktaster Student Invitation Mail';
$message = ("Dear  $first_name  $last_name,<br>Greetings!!!<br>
You Are Invited on Workstaster<br>
<a href=''></a>");  
        
 $header= 'From: ' . "\r\n" .
    'Reply-To:  ' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $header.= "MIME-Version: 1.0\r\n"; 
$header.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$header.= "X-Priority: 1\r\n"; 
 mail($email, $subject, $message, $header);	
			
			
        }
        else{
        echo '<script>alert("Error In Add Student !'.mysql_error().'");</script>';
        }
  
  }  
    
    public function Addemployer(){
        $school_user=$_SESSION['schooluserid'];
        $sir_title=mysql_real_escape_string($_POST['company_sir_title']);
        $company_fname=mysql_real_escape_string($_POST['company_f_name']);
        $company_lname=mysql_real_escape_string($_POST['company_l_name']);
         $company_email=mysql_real_escape_string($_POST['company_email']);
         $company_website=mysql_real_escape_string($_POST['company_website']);
        $company_telephone=mysql_real_escape_string($_POST['country_code'])." ".mysql_real_escape_string($_POST['company_telephone']);
        $company_title=mysql_real_escape_string($_POST['company_title']);
        $company_name=mysql_real_escape_string($_POST['company_name']);
        $company_address=mysql_real_escape_string($_POST['company_address']);
        $company_city=mysql_real_escape_string($_POST['company_city']);
        $company_postal_code=mysql_real_escape_string($_POST['company_postal_code']);
        $company_country=mysql_real_escape_string($_POST['company_country']);
     
         $add_employer=mysql_query("insert into add_employer (userid,sir_title,company_first_name,company_last_name,company_email,company_telephone,company_title,company_name,company_address,company_city,company_website,company_postal_code,company_country) values('$school_user','$sir_title','$company_fname','$company_lname','$company_email','$company_telephone','$company_title','$company_name','$company_address','$company_city','$company_website','$company_postal_code','$company_country');");

 if($add_employer){
      //echo '<script type="text/javascript">window.location ="../employer/employer_profile_edit.php";</script>';
          //echo '<script>alert("School Employer Added Sucessfully!");</script>';
	   echo '<script type="text/javascript">window.location ="../schools/manage_employers.php";</script>';

        }
        else{
        
           echo '<script>alert("School  Error In Employer Add !'.mysql_error().'");</script>';
        }
    }
    
    
    public function AddUsers(){
    
    $school_user=$_SESSION['schooluserid'];
        $salutation=mysql_real_escape_string($_POST['salutation']);
        $user_fname=mysql_real_escape_string($_POST['user_first_name']);
        $user_lname=mysql_real_escape_string($_POST['user_last_name']);
            $user_title=mysql_real_escape_string($_POST['user_job_title']);
          $user_email=mysql_real_escape_string($_POST['user_email']);
        $user_telephone=mysql_real_escape_string($_POST['user_telephone']);
    $add_users=mysql_query("insert into add_users (userid,salutation,user_first_name,user_last_name,user_job_title,user_email,user_telephone) values ('$school_user','$salutation','$user_fname','$user_lname','$user_title','$user_email','$user_telephone');");
    
    if($add_users){
      //echo '<script type="text/javascript">window.location ="../employer/employer_profile_edit.php";</script>';
         // echo '<script>alert("School Users Added Sucessfully!");</script>';
		  echo '<script type="text/javascript">window.location ="../schools/users.php";</script>';

        }
        else{
        
           echo '<script>alert("Error In School User Add !'.mysql_error().'");</script>';
        }
    
    }
    
}

if(isset($_POST['school_profile'])){
    $sc_pro_com= new SchoolProfile();
    $sc_pro_com->school_profile_complete();
}
if(isset($_POST['add_student'])){
    $sc_pro_com= new SchoolProfile();
    $sc_pro_com->add_student();
}
if(isset($_POST['add_users'])){
    $sc_pro_com= new SchoolProfile();
    $sc_pro_com->AddUsers();
}

if(isset($_POST['add_employer'])){
    $sc_pro_com= new SchoolProfile();
    $sc_pro_com->Addemployer();
}





?>