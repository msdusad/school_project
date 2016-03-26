<?php include( 'employerheader.php');
$student_invite=$_GET[ 'studuser']; 
$apply_time=$_GET[ 'apply_time']; ?>

<head>
	<script type="text/javascript" src="../js/validation.js"></script>
	<!-- <script>
        function restform() {
            document.getElementById("create_location").reset();
            return false;
        }
    </script> 
-->

</head>
<div class="col-xs-12 col-sm-12 col-md-9" id='invite_for_interview-form'>

<?php include('returnToDashboard.php');?>

	<h1><i class="fa fa-briefcase"></i> Invite For Interview</h1>

	<div class="row">

		<div class="col-md-8 empDbTitle">
			<i class="fa fa-dashboard"></i> Dashboard
		</div>

		<div class="col-md-4 empDbDateStrip">
			<span><i class="fa fa-calendar"></i> <?php echo " ".$viewdashdate;?></span>
		</div>

	</div>

	<div class="row">
		<!-- hear manage application -->
		<div class="col-md-9" style="width:100%;">
			<br>

			<form action="?studuser=<?php echo $student_invite?>&apply_time=<?php echo $apply_time?>" method="post">
				<table class="table">

					<tr>
					
							<h1><i class="fa fa-check-circle"></i> Invitation For Interview</h1>
					
					</tr>
					<tr>
						<td>Proposed interview date</td>
						<td>
							<input type="text" name="proposed_interview_date" id="proposed_interview_date" required>
						</td>
					</tr>
					<tr>
						<td>Contact form confirmation</td>
						<td>
							<input type="text" name="contact_form_confirmation" id="contact_form_confirmation" required>
						</td>
					</tr>
					<tr>
						<td>Email for confirmation </td>
						<td>
							<input type="text" name="email_confirmation" id="email_confirmation" required>
						</td>
					</tr>
					<tr>
						<td>Telephone for confirmation </td>
						<td>
							<input type="text" name="telephone_confirmation" id="telephone_confirmation" required>
						</td>
					</tr>
					<tr>
						<td>Message</td>
						<td>
							<textarea type="text" name="message" id="message" style="width:100%;" rows="10" cols="60" required></textarea>
						</td>
					</tr>
					<!--<input type="text" name="studuser" value="<?php echo $student_invite;?>" style="visibility:hidden;"> -->
					<tr>
						<td>
							<input class="btn btn-primary" type="submit" name="invite_interview" value="Send Interview Invitation">
							<input class="btn btn-danger" type="submit" name="invite_interview_cancel" value="Cancel" onclick="history.go(-1);" >
						</td>
					</tr>

				</table>

			</form>





		</div>

		<!-- End Hear -->

	</div>

<?php class Interview{

public function invite_interview(){
	$student_user=$_GET['studuser'];
	$apply_tm=$_GET['apply_time'];
$employer=$_SESSION['employeruserid'];
    $proposed_interview_date=mysql_real_escape_string($_POST['proposed_interview_date']);
    $contact_form_confirmation=mysql_real_escape_string($_POST['contact_form_confirmation']);
    $email_confirmation=mysql_real_escape_string($_POST['email_confirmation']);
    $telephone_confirmation=mysql_real_escape_string($_POST['telephone_confirmation']);
    $message=mysql_real_escape_string($_POST['message']);
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

include( 'employerfooter.php'); ?>