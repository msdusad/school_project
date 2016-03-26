<?php
include('header.php');
include('classes/connection.php');
$_SESSION['passchangeid']=$_GET['userid'];
$_SESSION['passchangepass']=$_GET['pass'];

?>
<script>
	function MatchingPass(){
	  var pass = document.update_pass.password.value;
         var passcon = document.update_pass.repassword.value;
            if (passcon != pass) {
				document.getElementById('pass_error').style.display="block";
               // alert(" Re-Password Not Match");
               // em_passcon.focus;
                return false;
            }
	else{
	document.getElementById('pass_error').style.display="none";
	}
		
	}
	
</script>
<div class="row bgColorOne" style="height:300px;position:relative;background-color:green;">
	<div style="width:30%;margin-left:10%;"><br>
		<form action="" method="post" name="update_pass" onsubmit="return MatchingPass();">
	<div class="input-icon">
			
           <input type="password" class="form-control" name="password" id="password" placeholder="New Password" pattern=".{6,20}" title="Minimum 8 and Maximum 20 Chracters Required" required><br><br>
		<input type="password" class="form-control" name="repassword" id="repassword" placeholder="Re-Enter Password" pattern=".{6,20}"  title="Minimum 8 and Maximum 20 Chracters Required" required><br>
				  </div>
			<div class="alert alert-warning" style="display:none;" id="pass_error">
  <strong>Re-Enter Password Not Match</strong> </div>
			<div style="margin-left:25%;">
			 <input type="submit" name="change_pass" value="Update Password" class="btn  btn-primary btn-embossed">
			</div>
			</form>
		</div><br>
	
	<?php
if(isset($_POST['change_pass'])){
	
	$user=$_SESSION['passchangeid'];
$oldpass=$_SESSION['passchangepass'];

     $pass=$_POST['password'];
	$uppass=MD5($pass);
	$sql=mysql_query("update  login  set password='$uppass' where userid='$user' && password='$oldpass';");
	if($sql){  
			 ?>
	
			 <div class="alert alert-warning" >
  <strong>Password Updated Sucessfully</strong> </div>
	<?php
		unset($_SESSION['passchangeid']);
		unset($_SESSION['passchangepass']);
			
		}
	else{
	
	echo "Error in Password update Query".mysql_error();
	}
		
	}
?>
	<br><br>
	</div>


<?php
include('footer.php')

?>