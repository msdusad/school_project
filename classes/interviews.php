<?php
include('connection.php');
session_start();
class Interview{

public function invite_interview(){

    $proposed_interview_date=mysql_real_escape_string($_POST['proposed_interview_date']);
    $contact_form_confirmation=mysql_real_escape_string($_POST['contact_form_confirmation']);
    $email_confirmation=mysql_real_escape_string($_POST['email_confirmation']);
    $telephone_confirmation=mysql_real_escape_string($_POST['telephone_confirmation']);
    $message=mysql_real_escape_string($_POST['message']);
    
    $invitation=mysql_query("insert into interview_invitation (proposed_interview_date,contact_form_confirmation,email_for_confirmation,telephone_for_confirmation,message) values ('$proposed_interview_date','$contact_form_confirmation','$email_confirmation','$telephone_confirmation','$message');");

    if($invitation){
echo '<script>alert("Interview Invitaion Send Sucessfully!");</script>';
		 echo '<script type="text/javascript">window.location ="../employer/manage_application.php";</script>';
}
else{ echo '<script>alert("Employer Interview Invitaion Send!'.mysql_error().'");</script>';}   
    
}

}

if(isset($_POST['invite_interview'])){
$invite=new Interview();
    $invite->invite_interview();
}
?>