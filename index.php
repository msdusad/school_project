
<?php include('header.php');?>

<section>
<div class="row start_loginSection">
				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<form action="classes/login.php" method="post">
			<h1 style="color:white">Worktaster Account Login</h1>

			<?php
			if(isset($_GET['messg'])){
			$ErrorMessage=$_GET['messg'];
			?>
			<div class="alert alert-warning">
			<strong><?php echo $ErrorMessage;?></strong>
			</div>	
			<?php
			}
			?>					

			<div class="input-icon">
			<span class="ss-user"></span>
			<input type="text" class="form-control" name="userid" id="student_id" placeholder="Username" value="<?php 
			if(isset($_COOKIE['studentcook'])){

			echo $_COOKIE['studentcook']; 
			}																												 
			?>" required><br>
			</div> 

			<div class="input-icon">
			<span class="ss-link"></span>
			<input type="password" class="form-control" name="password" id="student_password" placeholder="Password" value="<?php if(isset($_COOKIE['studentcookpass'])){echo $_COOKIE['studentcookpass']; }?>" required/>
			</div> 


			<div class="col-md-12">
			<br>
			<label class="checkbox" style="display:inline-block;  vertical-align:top;"></label>
			<input data-toggle="checkbox"  type="checkbox" name="rememberme" style="display:inline-block;  vertical-align:top;"  <?php if(isset($_COOKIE['studentcook'])){
			?> value="1" checked
			<?php
			}	

			else{
			?> value="0"

			<?php
			}																	   
			?>	> 
			<p class="lead" style="display:inline-block; vertical-align:top; font-size:inherit;">Remember Me&nbsp;&nbsp;<a href="forgot_password.php"> Forgot username/Password?</a></p>
			
			</div>

			
			<input type="submit" class="btn btn-block btn-primary btn-embossed" value="Login" name="student_login"/>
			<br>

			</form>
		</div>
	</div>
	
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="preLogin_submitBtnGrp">
			<form action="classes/login.php" method="post">
			<h1 style="color:white">Worktaster Account Registration</h1>
			<p><input type="button" class="btn btn-block btn-primary btn-embossed" value="Register as a Student " name="student_login" onclick="window.location.href='student/student_registration.php'" ></p>
			<br/>
			<p><input type="button" class="btn btn-block btn-primary btn-embossed" value="Register as an Employer " name="employer_login" onclick="window.location.href='employer/employer_registration.php'"></p> 
			<br/>
			<p><input type="button" class="btn btn-block btn-primary btn-embossed" value="Register as a School/college" name="school_login" onclick="window.location.href='schools/school_registration.php'"></p>  
			</form>
		</div>
	</div>

	</div>


</section>

<?php include('footer.php');?>