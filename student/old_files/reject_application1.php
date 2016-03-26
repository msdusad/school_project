<?php
include('../classes/connection.php');
$student_invite=$_GET['studuser'];
$apply_time=$_GET['apply_time'];
?>

<html>
 <head>
     
 </head>   
 <body>
	 <a href="employer_profile.php">Home</a>
	 <br><a href="../classes/logout.php">Logout</a>
     <table border="2px solid black" style="width:70%;">
         <form action="?studuser=<?php echo $student_invite?>&apply_time=<?php echo $apply_time?>" method="post" onsubmit="return confirm('Do you really want to submit the form?');">
             <tr ><td><h3>Reject Application</h3></td></tr>
             <tr><td style="width:40%;">Message</td><td><textarea type="text" name="reject_message" id="reject_message" rows="20" cols="50" required></textarea></td></tr>
			 <tr><td><input type="submit" name="reject_application" value="Send Rejection E-mail"><input type="submit" name="reject_application_cancel" value="Cancel"></td></tr>
</form></table></body></html>
<?php class Interview{

public function reject_application(){
	$student_user=$_GET['studuser'];
	$apply_tm=$_GET['apply_time'];
$employer=$_SESSION['employeruserid'];
    $message=$_POST['reject_message'];
    $status="Rejected";
    $invitation=mysql_query("insert into reject_applications (student_id,employer_id,rejection_message,rejection_time) values ('$student_user','$employer','$message',now());");

    if($invitation){
		$sql=mysql_query("update job_applied set status='$status' where student_userid='$student_user' && company_userid='$employer' && apply_time='$apply_tm';");
		
		$emailid=mysql_query("select email,first_name from student_profile where student_userid='$student_user';");
		while($row=mysql_fetch_array($emailid)){
			$to=$row['email'];
			$fname=$row['first_name'];
		$subject = 'Work Taster Application Rejection Mail';
$message = ("Dear $fname  ,<br> $message");  
        
 $header= 'From: ' . "\r\n" .
    'Reply-To:  ' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $header.= "MIME-Version: 1.0\r\n"; 
$header.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$header.= "X-Priority: 1\r\n"; 
 mail($to, $subject, $message, $header);		
		}		
		
		
echo '<script>alert("Rejection Mail Send Sucessfully!");</script>';
		  echo '<script type="text/javascript">window.location ="manage_application.php";</script>';
}
else{ echo '<script>alert("Error in Application Rejection!'.mysql_error().'");</script>';}   
    
}

}

if(isset($_POST['reject_application'])){
$invite=new Interview();
    $invite->reject_application();
}

?>