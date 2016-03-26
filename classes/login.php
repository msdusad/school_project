<?php

include('connection.php');
session_start();
class Login extends createConnection{

 public function StudentLogin(){

  $id=$_POST["userid"];
	 $passcok=$_POST["password"]; 
$pass=$_POST["password"]; 
$pass=md5($pass);
$result=mysql_query("SELECT * FROM login WHERE userid='$id' && password='$pass';");
if ($result){
    
  if ($result && mysql_num_rows($result)>0) {
    if($row = mysql_fetch_array($result)){ 
		
		if($row['email_confirmation']=='false'){
		header("Location:../email_err.php");
		}
		if($row['email_confirmation']==''){
		header("Location:../email_err.php");
		}
		// code for not activate from admin
		if(($row['category']=='Employer' || $row['category']=='School') && ($row['account_status']=='false')){
header("Location:../admin_not_activated.php");

		}
		
		
		// code for set cookies if user click on remeber password

		if(isset($_POST['rememberme'])){
					$cookie_name ="studentcook";
                   $cookie_value = $id;
			    $cookie_pass ="studentcookpass";
                   $cookie_val = $passcok;
		setcookie($cookie_name, $cookie_value, time() + (86400 * 90), "/"); // 86400 = 1 day
		setcookie($cookie_pass, $cookie_val, time() + (86400 * 90), "/");
		}
		
//		else{
//		unset($_COOKIE['studentcook']);
//			unset($_COOKIE['studentcookpass']);
//		
//		}
//		//end hear
		
		//for student log in 
		if($row['category']=='Student'){
       $_SESSION['studentuserid']=$row['userid'];
        $_SESSION['studentuserpass']=$row['password'];
       $lastlogin=mysql_query("update login set last_login=now() where userid='$id' && password='$pass' && category='Student'");
       // echo '<script>alert("Student Login Sucessfully!");</script>';
        echo '<script type="text/javascript">window.location ="../student/studentdashboard.php";</script>';
        //  echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../student/student_profile.php">'; 
       //return header('Location:../student/student_profile.php');
		
		}
		// end hear student login
		
		//for Employer log in 
		
		if($row['category']=='Employer'){
		$_SESSION['employeruserid']=$row['userid'];
        $_SESSION['employeruserpass']=$row['password'];
		 $lastlogin=mysql_query("update login set last_login=now() where userid='$id' && password='$pass' && category='Employer'");
       // echo '<script>alert("Employer Login Sucessfully!");</script>';
        echo '<script type="text/javascript">window.location ="../employer/employeedashboard.php";</script>';
        //header('Location:../employer/employer_edit.php');
		}
		
		// end hear Employer login
		
		
		
		//for School log in 
		if($row['category']=='School'){
		 $_SESSION['schooluserid']=$row['userid'];
        $_SESSION['schooluserpass']=$row['password'];
		 $lastlogin=mysql_query("update login set last_login=now() where userid='$id' && password='$pass' && category='School'");
        //echo '<script>alert("School Login Sucessfully!");</script>';
        echo '<script type="text/javascript">window.location ="../schools/schooldashboard.php";</script>';
        //header('Location:../employer/employer_edit.php');
		// end hear School login
		}
		
		
			//for Admin log in 
		if($row['category']=='Admin'){
		 $_SESSION['adminuserid']=$row['userid'];
        $_SESSION['adminuserpass']=$row['password'];
		 $lastlogin=mysql_query("update login set last_login=now() where userid='$id' && password='$pass' && category='Admin'");
        //echo '<script>alert("School Login Sucessfully!");</script>';
        echo '<script type="text/javascript">window.location ="../admin/admindashboard.php";</script>';
        //header('Location:../employer/employer_edit.php');
		// end hear School login
		}
		


//auto logout after 5 mins
$_SESSION['session_time'] = time(); //got the login time for user in second 
     $session_logout = 300; //it means 5 minutes. 
     //and then cek the time session 
    if($session_logout >= ($_SESSION['session_time'])){ 
        //user session time is up 
       //destroy the session 
      session_destroy(); 
     //redirect to login page 
     header('location:../index.php');
    } 


		
    }
    
	 }
   else{
	   //echo '<script>alert("NO Any Student User Found!'.mysql_error().'");</script>';
	    echo '<script type="text/javascript">window.location ="../index.php?messg=Wrong Username/Password";</script>';
   }
}
    else{
		echo '<script>alert("Error IN Student Login Query!'.mysql_error().'");</script>';
	}
    
    

}
}

if(isset($_POST['student_login'])){
$log= new Login();
    $log->StudentLogin();
}

?>