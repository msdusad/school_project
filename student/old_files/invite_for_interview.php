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
         <form action="?studuser=<?php echo $student_invite?>&apply_time=<?php echo $apply_time?>" method="post">
             <tr><td><h3>invitation For Interview</h3></td></tr>
             <tr><td>proposed interview date</td><td><input type="text" name="proposed_interview_date" id="proposed_interview_date" required></td></tr>
             <tr><td>contact form confirmation</td><td><input type="text" name="contact_form_confirmation" id="contact_form_confirmation" required></td></tr>
             <tr><td>e-mail for confirmation </td><td><input type="text" name="email_confirmation" id="email_confirmation" required></td></tr>
             <tr><td>telephone for confirmation </td><td><input type="text" name="telephone_confirmation" id="telephone_confirmation" required></td></tr>
             <tr><td>message</td><td><input type="text" name="message" id="message" style="height:100;width:100%;" rows="30" cols="30" required></td></tr>
			 <!--<input type="text" name="studuser" value="<?php echo $student_invite;?>" style="visibility:hidden;"> -->
             <tr><td><input type="submit" name="invite_interview" value="Send Interview Invitation"><input type="submit" name="invite_interview_cancel" value="Cancel"></td></tr>
         </form>
         
     </table>
     
 </body>   
    
    
</html>

<?php class Interview{

public function invite_interview(){
	$student_user=$_GET['studuser'];
	$apply_tm=$_GET['apply_time'];
$employer=$_SESSION['employeruserid'];
    $proposed_interview_date=$_POST['proposed_interview_date'];
    $contact_form_confirmation=$_POST['contact_form_confirmation'];
    $email_confirmation=$_POST['email_confirmation'];
    $telephone_confirmation=$_POST['telephone_confirmation'];
    $message=$_POST['message'];
    $status="Interview";
    $invitation=mysql_query("insert into interview_invitation (student_invite,employer_sent,proposed_interview_date,contact_form_confirmation,email_for_confirmation,telephone_for_confirmation,message) values ('$student_user','$employer','$proposed_interview_date','$contact_form_confirmation','$email_confirmation','$telephone_confirmation','$message');");

    if($invitation){
		$sql=mysql_query("update job_applied set status='$status' where student_userid='$student_user' && company_userid='$employer' && apply_time='$apply_tm';");
		
//echo '<script>alert("Interview Invitaion Send Sucessfully!");</script>';
		  echo '<script type="text/javascript">window.location ="manage_applications.php";</script>';
}
else{ echo '<script>alert("Employer Interview Invitaion Send!'.mysql_error().'");</script>';}   
    
}

}

if(isset($_POST['invite_interview'])){
$invite=new Interview();
    $invite->invite_interview();
}

?>