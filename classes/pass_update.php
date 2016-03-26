<?php
include('connection.php');
session_start();
        $current_userid= $_SESSION['studentuserid'];
        //$old_password=$_POST['old_password'];
	     $old_password=$_POST['old_password'];
       $ch_old=MD5($old_password);
       // $new_password=$_POST['new_password'];
	   $new_password=$_POST['new_password'];
       $up_pass=MD5($new_password);
      
                $dataupdate=mysql_query("UPDATE login SET password='$up_pass' WHERE userid='$current_userid' && password='$ch_old';");

                if( $dataupdate){

 echo '<script type="text/javascript">alert("Password Updated Successfully");window.location ="../student/update_profile.php?sucess=yes";</script>';

  
            }

            else{
echo '<script type="text/javascript">window.location ="../student/update_profile.php?sucess=no";</script>';

            }
        
           ?>