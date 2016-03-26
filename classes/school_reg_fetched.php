<?php
//include('connection.php');
//session_start();
// Code for fetch data from database of school_registration table
$school_reg_fetch=mysql_query("select * from school_registration where userid='{$_SESSION['schooluserid']}';");
   if ($school_reg_fetch){
 while($row = mysql_fetch_array($school_reg_fetch)){
     
         $school_fname=$row['school_first_name'];
     $school_lname=$row['school_last_name'];
       $school_title=$row['school_name_title'];
        $school_email=$row['school_email'];
        $contact=$row['contact'];
          $school_telephone=$row['school_telephone'];
         $school_name=$row['school_name'];
        $school_address=$row['school_address'];
         $school_city=$row['school_city'];
         $school_region=$row['school_region'];
        $school_postal_code=$row['school_postal_code'];
         $school_website=$row['school_website'];
    $school_logo=$row['school_logo'];
      
      }
   }
else{ 
    echo '<script>alert("School Registration Fetch Data Query Pass Error !'.mysql_error().'");</script>';
    }

?>