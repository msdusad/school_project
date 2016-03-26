<?php
include('connection.php');
session_start();
class Registration extends createConnection{ // for insert data into database of registration 

   public  function student_regestration(){
          // for insert data into database
        $fname=mysql_real_escape_string($_POST['fname']);
       $lname=mysql_real_escape_string($_POST['lname']);
        $email=mysql_real_escape_string($_POST['email']);
        $userid=mysql_real_escape_string($_POST['userid']);
       $school_year=mysql_real_escape_string($_POST['school_year']);
       $gender=mysql_real_escape_string($_POST['gender']);
        $password=$_POST['password'];
        $en_pass=md5($password);
        $category="Student";
         //$term_cond=$_POST['trm_cond'];
        if(!isset($_POST['trm_cond'])){ $term_cond="0";}
        else{$term_cond="1";}
       
	  
        //for login table
         
        $login=mysql_query("insert into login (email,userid,password,category,email_confirmation) values('$email','$userid','$en_pass','$category','false');");
         
        
        if($login){
			$student_school=mysql_query("insert into student_school (userid) values('$userid');");
         $student_preferences=mysql_query("insert into student_preferences (userid) values('$userid');");
        $student_cv=mysql_query("insert into student_cv (userid) values('$userid');");
	   $student_achivment=mysql_query("insert into student_achievements (userid) values('$userid');");
	   
         
        //for stdent profile table
        
        $student_profile=mysql_query("insert into student_profile (first_name,last_name,email,userid,school_year,gender,t_c,joining_date) values('$fname','$lname','$email','$userid','$school_year','$gender','$term_cond',now());");
        
      // confirmation mail for account activate
			
	$subject= 'Worktaster Account Activation Confirmation Mail';
			
		$message='<html>
<head>
<title>emailer</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
body{font-family: "Open Sans", sans-serif;}.
a{color:#666;}
a:hover{
  text-decoration: none;
  color: #333;
}
a:active{
  text-decoration: none;
  color: #333;
}
a:link {
  color: #333;
  text-decoration: none;
}
a:visited {
  text-decoration: none;
  color: #333;
}
</style>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<table width="953" height="1649" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01" style="border:1px solid lightgray; ">

  <tr>
    <td align="left" valign="top"><br>
        <a href="http://worktaster.com" target="_blank"><img src="http://worktaster.com/images/emailer_02.jpg" width="953" height="250" alt=""></a></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF">
        <div style="padding:10px 60px;">
        <p>Dear Sally</p>

<p>Welcome to Worktaster!</p>

<p>Your Username is:'.$userid.'</p>

<p>Your account has been created sucessfully. To activate your account </p>
<p><a href="http://worktaster.com/email_confrim.php?userid='.$userid.'"> Please Click Here </a></p>
</div>
</td>
  </tr>
  <tr>
    <td align="left" valign="top">
      <img src="http://worktaster.com/images/emailer_04.jpg" width="953" height="344" alt=""></td>
  </tr>
  <tr>
    <td align="left" valign="top">
        <div style="padding:10px 60px; text-align:center;">If you have any queries about your account, please contact us at:<br>
customerservice@worktaster.com</div>
        </td>
  </tr>
  <tr>
    <td align="left" valign="top">
      <img src="http://worktaster.com/images/emailer_06.jpg" alt="" width="953" height="180" usemap="#Map" border="0"></td>
  </tr>
  <tr>
    <td align="left" valign="top">
        <div style="padding:10px 60px; text-align:center;">
        Sent By Worktaster Ltd
        <br>
        <a href="#">Forward to a friend</a>
        <br>
        <a href="#">Unsubscribe</a>
        </div>
</td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF">
      <div style="padding:10px 60px; text-align:center;">This email and any files transmitted with it are confidential and intended solely for<br>the use of  the individual or entity to whole they are addressed. if you have received<br>
this email in error, please notify us</div>
            </td>
  </tr>
</table>


<map name="Map">
  <area shape="rect" coords="171,32,287,146" href="http://facebook.com" target="_blank">
  <area shape="rect" coords="402,30,523,149" href="http://twitter.com" target="_blank">
  <area shape="rect" coords="648,25,781,149" href="http://youtube.com" target="_blank">
</map>
</body>
</html>';			
				
//$message = ("Dear  $fname ,<br>Greetings!!!<br>
//Your Account has been created Sucessfully. For Activate Click Here<br>
//<a href='http://worktaster.com/email_confrim.php?userid=$userid'>Click Hear for Activate it</a>");  
        
 $header='From:admin@worktaster.com' . "\r\n" .
    'Reply-To: mike.allen@vibemarketing.co.uk ' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $header.= "MIME-Version: 1.0\r\n"; 
$header.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$header.= "X-Priority: 1\r\n"; 
 mail($email, $subject, $message, $header);	
			
			// code for notification all users
			$ntemail=mysql_query("select email from login");
			while($allemail=mysql_fetch_array($ntemail)){
			
				$allmails=$allemail['email'];
				
							
	$subject = 'Worktaster New Student Registration';
				
	$message="
<html>
<head>
  
  <title>Title</title>
  <style type='text/css'>
  body {
   padding-top: 0  ;
   padding-bottom: 0  ;
   padding-top: 0  ;
   padding-bottom: 0  ;
   margin:0  ;
   width: 100%  ;
   -webkit-text-size-adjust: 100%  ;
   -ms-text-size-adjust: 100%  ;
   -webkit-font-smoothing: antialiased  ;
 }
 .tableContent img {
   border: 0  ;
   display: block  ;
   outline: none  ;
 }
 a{
  color:#382F2E;
}

p, h1,h2,h3,ul,ol,li,div{
  margin:0;
  padding:0;
}

h1,h2{
  font-weight: normal;
  background:transparent  ;
  border:none  ;
}

.contentEditable h2.big{
  font-size: 30px  ;
}

 .contentEditable h2.bigger{
  font-size: 37px  ;
}

td,table{
  vertical-align: top;
}
td.middle{
  vertical-align: middle;
}

a.link1{
  font-size:14px;
  color:#D4D4D4;
  text-decoration:none;
  font-family: Helvetica Neue;
}

.link2{
font-size:16px;
color:#d2176e;
text-decoration:none;
line-height:24px;
font-family: Helvetica;
font-weight: bold;
}

.link3{
padding:5px 10px;
border-radius: 6px;
background-color: #d2176e;
font-size:13px;
color:#f2f2f2;
text-decoration:none;
line-height:26px;
font-family: Helvetica;
font-weight: bold;
}

.contentEditable li{
  margin-top:10px;
  margin-bottom:10px;
  list-style: none;
  color:#ffffff;
  text-align:center;
  font-size:13px;
  line-height:19px;
}

.appart p{
  font-size:13px;
  line-height:19px;
  color:#aaaaaa  ;
}
h2{
  color:#555555;
  font-weight: normal;
  font-size:28px;
  color:#555555;
  font-family: Georgia;
  line-height: 28px;
  font-style: italic;
}
.bgItem{
background:#f2f2f2;
}
.bgBody{
background:#ffffff;
}
</style>



</head>
<body paddingwidth='0' paddingheight='0' bgcolor='#d1d3d4'  style='padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; background-repeat: repeat; width: 100%  ; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;' offset='0' toppadding='0' leftpadding='0'>
<table width='100%' border='0' cellspacing='0' cellpadding='0' class='tableContent bgBody' align='center' bgcolor='#FFFFFF' style='font-family:Georgia, serif; border:1px solid lightgray;'>
    <!-- =============== START HEADER =============== -->
  <tr>
    <td align='center' class=''>
      <table width='560' border='0' cellspacing='0' cellpadding='0' align='center' >
        <tr>
 <!-- =============== END HEADER =============== -->
          <!-- =============== START BODY =============== -->
          <td align='center' class='movableContentContainer'>


          <div class='movableContent'>
            <table width='560' border='0' cellspacing='0' cellpadding='0' align='center'>
              <tr>
                <td align='center'>
                  <table width='560' border='0' cellspacing='0' cellpadding='0' align='center'>
                    <tr><td height='10' colspan='3'></td></tr>
                    <tr>
                      <td>
                        <div class='contentEditableContainer contentImageEditable'>
                          <div class='contentEditable' align='left'>
                            <img src='http://worktaster.com/Emailer/imgs/logo.png' alt='logo' data-default='placeholder'  width='89' height='88' />
                          </div>
                        </div>
                      </td>
                      <td>

                      </td>
                      <td>
						<div class='contentEditableContainer contentTextEditable' >
                          <div class='contentEditable' align='right'>
                            <a target='_blank' href='[SHOWEMAIL]' class='link1' style='line-height: 88px;color:#D4D4D4;'>Open in your browser</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr><td height='10' colspan='3'></td></tr>
                  </table>
                </td>
              </tr>
            </table>
          </div>

          <div class='movableContent'>
            <table width='560' border='0' cellspacing='0' cellpadding='0' align='center'>
              <tr>
                <td>
                  <table width='560' border='0' cellspacing='0' cellpadding='0' align='center'>
                    <tr>
                      <td>
                        <div class='contentEditableContainer contentImageEditable'>
                          <div class='contentEditable' align='left'>
                            <img src='http://worktaster.com/Emailer/imgs/header.jpg' alt='header' data-default='placeholder' data-max-width='560' width='560' height='242' />
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class='bgItem'>
                        <table width='560' border='0' cellspacing='0' cellpadding='0' align='center'>
                          <tr><td height='38'></td></tr>
                          <tr>
                            <td>
                              <div class='contentEditableContainer contentTextEditable'>
                                <div class='contentEditable'>
                                  <h2 style='font-size:38px;text-align:center;'>Worktaster New Member Registration</h2>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr><td height='20'></td></tr>
                          <tr><td height='5' align='center'><hr style='width:117px; height:5px; background-color:#d2176e;border: none;'/></td></tr>
                          <tr><td height='20'></td></tr>
                          <tr>
                            <td>
                              <div class='contentEditableContainer contentTextEditable'>
                                <div class='contentEditable' style='font-size:16px;color:#555555;text-align:center;line-height:24px;font-style: italic;'>
                                 <!-- <p >Some text will be here for short information,<br/> Like this we put here!</p>-->
                                </div>
                              </div>                  
                            </td>
                          </tr>
                          <tr><td height='38'></td></tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr><td height='10'></td></tr>
            </table>
          </div>

            <div class='movableContent'>
              <table width='560' border='0' cellspacing='0' cellpadding='0' align='center'>
                <tr><td width='210' height='10' align='right'><img src='http://worktaster.com/Emailer/imgs/bannerTop.png' width='179' height='10' /></td><td width='350' colspan='2'></td></tr>
                <tr>
                  <td width='210' class='bgItem' align='right'>
                    <table width='155' border='0' cellspacing='0' cellpadding='0' >
                      <tr><td bgcolor='#d2176e' height='50'></td></tr>
                      <tr>
                        <td bgcolor='#d2176e' style='padding-right:15px;padding-left:15px;'>
                          <div class='contentEditableContainer contentTextEditable'>
                            <div class='contentEditable' style='font-size:38px;color:#FFFFFF;text-align:center;line-height:38px;font-style: italic;'>
                              <p style='color:#FFFFFF;'>Your Text!</p>
                            </div>
                          </div>   
                        </td>
                      </tr>
                      <tr><td height='50' bgcolor='#d2176e'></td></tr>
                      <tr><td valign='bottom'><img src='http://worktaster.com/Emailer/imgs/bannerBottom.png' width='155' height='24' /></td></tr>
                    </table>
                  </td>
                  <td width='40' class='bgItem'></td>
                  <td width='260' class='bgItem'>
                    <table width='260' border='0' cellspacing='0' cellpadding='0' >
                      <tr><td height='30'></td></tr>
                      <tr>
                        <td>
                          <div class='contentEditableContainer contentTextEditable'>
                            <div class='contentEditable' style='color:#555555;font-size:16px;line-height:24px;text-align:left;font-family: Helvetica Neue;'>
                              <p> Dear  Team  ,<br>Greetings!!!<br>
 Mr./Ms. $fname Joined Us As a Student <br> </p>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr><td height='50'></td></tr>
                    </table>
                  </td>
                  <td width='30' class='bgItem'></td>
                </tr>
                <tr><td height='10'></td></tr>
              </table>
            </div>

          
 
            <div class='movableContent'>
              <table width='560' border='0' cellspacing='0' cellpadding='0' align='center'>
                <tr><td height='10'></td></tr>
                <tr>
                  <td class='bgItem' align='center'>
                    <table width='560' border='0' cellspacing='0' cellpadding='0' align='center'>
                      <tr><td height='50' colspan='9'></td></tr>
                      <tr>
                        <td width='50'></td>
                        <td width='200' style='padding-top:14px;'>
                          <div class='contentEditableContainer contentTextEditable'>
                            <div class='contentEditable' style='font-size: 16px;color:#555555;line-height: 24px;'>
                              <p>
                                Check Our social Pages:
                              </p>
                            </div>
                          </div>
                        </td>
                        <td width='30'></td>
                        <td width='70'>
                          <div class='contentEditableContainer contentFacebookEditable'>
                            <div class='contentEditable'>
                              <img src='http://worktaster.com/Emailer/imgs/facebook.png'   data-max-width='70' width='70' height='70' alt='facebook' data-customIcon='true'/>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='70'>
                          <div class='contentEditableContainer contentTwitterEditable'>
                            <div class='contentEditable'>
                              <img src='http://worktaster.com/Emailer/imgs/twitter.png'  data-max-width='70' width='70' height='70' alt='Twitter' data-customIcon='true'/>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='70'>
                          <div class='contentEditableContainer contentImageEditable'>
                            <div class='contentEditable'>
                              <img src='http://worktaster.com/Emailer/imgs/pinterest.png'  data-max-width='70' width='70' height='70' alt='Pinterest'/>
                            </div>
                          </div>
                        </td>
                        <td width='50'></td>
                      </tr>
                      <tr><td height='50' colspan='9'></td></tr>
                    </table>
                  </td>
                </tr>
                <tr><td height='10'></td></tr>
              </table>
            </div>


            <div class='movableContent'>
            <table width='560' border='0' cellspacing='0' cellpadding='0' align='center'>
              <tr><td height='10'></td></tr>

              <tr><td><div style='border-top:1px solid #555555;'></div></td></tr>

              <tr><td height='20'></td></tr>

              <tr>
                <td align='center'>
                  <table width='560' border='0' cellspacing='0' cellpadding='0' align='center'>
                    <tr>
                      <td width='560' align='center'>
                        <div class='contentEditableContainer contentTextEditable'>
                          <div class='contentEditable' style='color:#555555;text-align:center;font-size:13px;line-height:19px;'>
                            <p>Sent by Sender Name <br/>
                              Clients Address <br/>
                              Clients Phone <br/>
                              <a target='_blank' href='[FORWARD]' style='color:#555555;'>Forward to a friend</a><br/>
                              </p>
                              <a target='_blank' href='[UNSUBSCRIBE]' style='color:#555555;'>Unsubscribe</a>
                            </p>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </div>


          </td>
        </tr>

        <!-- =============== END BODY =============== -->

<!-- =============== START FOOTER =============== -->
        

        <tr><td height='20'></td></tr>
<!-- =============== END FOOTER =============== -->


      </table>
    </td>
  </tr>
</table>



  </body>
  </html>
";					
				
				
				
				
//$message = ("Dear  Team  ,<br>Greetings!!!<br>
// Mrs $fname Joined Us As a Student <br>");  
        
 $header= 'From: admin@worktaster.com' . "\r\n" .
    'Reply-To: mike.allen@vibemarketing.co.uk ' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $header.= "MIME-Version: 1.0\r\n"; 
$header.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$header.= "X-Priority: 1\r\n"; 
 mail($allmails, $subject, $message, $header);	
				
			
			}
			
			
			
			
			// end notification hear
			
			
			
			
			
			
             $_SESSION['studentuserid']=$_POST['userid'];
        $_SESSION['studentuserpass']=$_POST['password'];
            
         // echo '<script>alert("Student Registration Sucessfully!");</script>';
			  echo '<script type="text/javascript">window.location ="../email_err.php";</script>';
        }
        else{
			$checkVar=mysql_error();
        
						//echo $checkVar;
 if($checkVar=="Duplicate entry '".$userid."' for key 'userid'"){
	             
			$_SESSION['userid_error']="Userid  Aleready Taken , Choose Different ";
			echo '<script>javascript:history.go(-1);</script>';
			
			}
		
			elseif($checkVar=="Duplicate entry '".$email."' for key 'email'"){
				
				$_SESSION['email_error']="Email  Aleready Registered , Choose Different ";
		echo '<script>javascript:history.go(-1);</script>';
				
				
			}
				
			else{
				
			echo '<script>alert(" Error in student Registration query'.mysql_error().' ");javascript:history.go(-1);</script>';
			
			}
			
        }
    }
    
    // code for data insertion  employee registration
    
 public function employer_regestration(){

        $sir_title=mysql_real_escape_string($_POST['company_sir_title']);
        $company_fname=$sir_title." ".mysql_real_escape_string($_POST['company_f_name']);
        $company_lname=mysql_real_escape_string($_POST['company_l_name']);
        $company_title=mysql_real_escape_string($_POST['company_title']);
        $company_email=mysql_real_escape_string($_POST['company_email']);
        $company_telephone=mysql_real_escape_string($_POST['coun_code'])." ".mysql_real_escape_string($_POST['company_telephone']);
        $company_name=mysql_real_escape_string($_POST['company_name']);
        $company_address=mysql_real_escape_string($_POST['company_address']);
        $company_city=mysql_real_escape_string($_POST['company_city']);
        $company_region=mysql_real_escape_string($_POST['company_region']);
        $company_postal_code=mysql_real_escape_string($_POST['company_postal_code']);
        $company_userid=mysql_real_escape_string($_POST['company_userid']);
        $company_password=$_POST['company_password'];
        $company_pass=MD5($company_password);

        if(isset($_POST['company_term'])){
        $company_terms="checked";
        }
        else{ $company_terms="unchecked";}
    $company_categorytype="Employer";
    
  /*   $logo="../employer/logo/".$_FILES['Logo']['name'];
	move_uploaded_file($_FILES['Logo']['tmp_name'],$logo);
         $logoname=$_FILES['Logo']['name'];
         */
    
    
    $logindetail=mysql_query("insert into login (userid,password,email,category,email_confirmation) values ('$company_userid','$company_pass','$company_email','$company_categorytype','false');");
        
     

 if($logindetail){
	 
	 $employer_location=mysql_query("insert into employer_location (userid) values('$company_userid');");
      
        $employer_register=mysql_query("insert into employer_registration (userid,company_first_name,company_last_name,company_email,company_telephone,company_title,company_name,company_address,company_city,company_region,company_postal_code,company_terms,join_date) values('$company_userid','$company_fname','$company_lname','$company_email','$company_telephone','$company_title','$company_name','$company_address','$company_city','$company_region','$company_postal_code','$company_terms',now());");

     
      $_SESSION['employeruserid']=$_POST['company_userid'];
        $_SESSION['employeruserpass']=$_POST['company_password'];
	 
	 
	 	$subject = 'Worktaster Account Activation Confirmation';
	 
	 $message='<html>
<head>
<title>emailer</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
body{font-family: "Open Sans", sans-serif;}.
a{color:#666;}
a:hover{
  text-decoration: none;
  color: #333;
}
a:active{
  text-decoration: none;
  color: #333;
}
a:link {
  color: #333;
  text-decoration: none;
}
a:visited {
  text-decoration: none;
  color: #333;
}
</style>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<table width="953" height="1649" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01" style="border:1px solid lightgray; ">

  <tr>
    <td align="left" valign="top"><br>
        <a href="http://worktaster.com" target="_blank"><img src="http://worktaster.com/images/emailer_02.jpg" width="953" height="250" alt=""></a></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF">
        <div style="padding:10px 60px;">
        <p>Dear Sally</p>

<p>Welcome to Worktaster!</p>

<p>Your Username is:'.$company_userid.'</p>

<p>Your account has been created sucessfully. To activate your account </p>
<p><a href="http://worktaster.com/email_confrim.php?userid='.$company_userid.'"> Please Click Here </a></p>
</div>
</td>
  </tr>
  <tr>
    <td align="left" valign="top">
      <img src="http://worktaster.com/images/emailer_04.jpg" width="953" height="344" alt=""></td>
  </tr>
  <tr>
    <td align="left" valign="top">
        <div style="padding:10px 60px; text-align:center;">If you have any queries about your account, please contact us at:<br>
customerservice@worktaster.com</div>
        </td>
  </tr>
  <tr>
    <td align="left" valign="top">
      <img src="http://worktaster.com/images/emailer_06.jpg" alt="" width="953" height="180" usemap="#Map" border="0"></td>
  </tr>
  <tr>
    <td align="left" valign="top">
        <div style="padding:10px 60px; text-align:center;">
        Sent By Worktaster Ltd
        <br>
        <a href="#">Forward to a friend</a>
        <br>
        <a href="#">Unsubscribe</a>
        </div>
</td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF">
      <div style="padding:10px 60px; text-align:center;">This email and any files transmitted with it are confidential and intended solely for<br>the use of  the individual or entity to whole they are addressed. if you have received<br>
this email in error, please notify us</div>
            </td>
  </tr>
</table>


<map name="Map">
  <area shape="rect" coords="171,32,287,146" href="http://facebook.com" target="_blank">
  <area shape="rect" coords="402,30,523,149" href="http://twitter.com" target="_blank">
  <area shape="rect" coords="648,25,781,149" href="http://youtube.com" target="_blank">
</map>
</body>
</html>';     
			
	 
//$message = ("Dear  $company_fname ,<br>Greetings!!!<br>
//Your Account has been created Sucessfully<br>
//<a href='http://worktaster.com/email_confrim.php?userid=$company_userid'>Click Hear for Activate it</a>"); 
//	 
	 
	 
        
 $header= 'From: admin@worktaster.com' . "\r\n" .
    'Reply-To: mike.allen@vibemarketing.co.uk ' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $header.= "MIME-Version: 1.0\r\n"; 
$header.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$header.= "X-Priority: 1\r\n"; 
 mail($company_email, $subject, $message, $header);	
	 
	 
	 
	 
	 
	 
	 
	 // code for notification all users
			$ntemail=mysql_query("select email from login");
			while($allemail=mysql_fetch_array($ntemail)){
			
				$allmails=$allemail['email'];
				
							
	$subject = 'Worktaster New Employer Registration';
				
		$message="
<html>
<head>
  
  <title>Title</title>
  <style type='text/css'>
  body {
   padding-top: 0  ;
   padding-bottom: 0  ;
   padding-top: 0  ;
   padding-bottom: 0  ;
   margin:0  ;
   width: 100%  ;
   -webkit-text-size-adjust: 100%  ;
   -ms-text-size-adjust: 100%  ;
   -webkit-font-smoothing: antialiased  ;
 }
 .tableContent img {
   border: 0  ;
   display: block  ;
   outline: none  ;
 }
 a{
  color:#382F2E;
}

p, h1,h2,h3,ul,ol,li,div{
  margin:0;
  padding:0;
}

h1,h2{
  font-weight: normal;
  background:transparent  ;
  border:none  ;
}

.contentEditable h2.big{
  font-size: 30px  ;
}

 .contentEditable h2.bigger{
  font-size: 37px  ;
}

td,table{
  vertical-align: top;
}
td.middle{
  vertical-align: middle;
}

a.link1{
  font-size:14px;
  color:#D4D4D4;
  text-decoration:none;
  font-family: Helvetica Neue;
}

.link2{
font-size:16px;
color:#d2176e;
text-decoration:none;
line-height:24px;
font-family: Helvetica;
font-weight: bold;
}

.link3{
padding:5px 10px;
border-radius: 6px;
background-color: #d2176e;
font-size:13px;
color:#f2f2f2;
text-decoration:none;
line-height:26px;
font-family: Helvetica;
font-weight: bold;
}

.contentEditable li{
  margin-top:10px;
  margin-bottom:10px;
  list-style: none;
  color:#ffffff;
  text-align:center;
  font-size:13px;
  line-height:19px;
}

.appart p{
  font-size:13px;
  line-height:19px;
  color:#aaaaaa  ;
}
h2{
  color:#555555;
  font-weight: normal;
  font-size:28px;
  color:#555555;
  font-family: Georgia;
  line-height: 28px;
  font-style: italic;
}
.bgItem{
background:#f2f2f2;
}
.bgBody{
background:#ffffff;
}
</style>



</head>
<body paddingwidth='0' paddingheight='0' bgcolor='#d1d3d4'  style='padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; background-repeat: repeat; width: 100%  ; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;' offset='0' toppadding='0' leftpadding='0'>
<table width='100%' border='0' cellspacing='0' cellpadding='0' class='tableContent bgBody' align='center' bgcolor='#FFFFFF' style='font-family:Georgia, serif; border:1px solid lightgray;'>
    <!-- =============== START HEADER =============== -->
  <tr>
    <td align='center' class=''>
      <table width='560' border='0' cellspacing='0' cellpadding='0' align='center' >
        <tr>
 <!-- =============== END HEADER =============== -->
          <!-- =============== START BODY =============== -->
          <td align='center' class='movableContentContainer'>


          <div class='movableContent'>
            <table width='560' border='0' cellspacing='0' cellpadding='0' align='center'>
              <tr>
                <td align='center'>
                  <table width='560' border='0' cellspacing='0' cellpadding='0' align='center'>
                    <tr><td height='10' colspan='3'></td></tr>
                    <tr>
                      <td>
                        <div class='contentEditableContainer contentImageEditable'>
                          <div class='contentEditable' align='left'>
                            <img src='http://worktaster.com/Emailer/imgs/logo.png' alt='logo' data-default='placeholder'  width='89' height='88' />
                          </div>
                        </div>
                      </td>
                      <td>

                      </td>
                      <td>
						<div class='contentEditableContainer contentTextEditable' >
                          <div class='contentEditable' align='right'>
                            <a target='_blank' href='[SHOWEMAIL]' class='link1' style='line-height: 88px;color:#D4D4D4;'>Open in your browser</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr><td height='10' colspan='3'></td></tr>
                  </table>
                </td>
              </tr>
            </table>
          </div>

          <div class='movableContent'>
            <table width='560' border='0' cellspacing='0' cellpadding='0' align='center'>
              <tr>
                <td>
                  <table width='560' border='0' cellspacing='0' cellpadding='0' align='center'>
                    <tr>
                      <td>
                        <div class='contentEditableContainer contentImageEditable'>
                          <div class='contentEditable' align='left'>
                            <img src='http://worktaster.com/Emailer/imgs/header.jpg' alt='header' data-default='placeholder' data-max-width='560' width='560' height='242' />
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class='bgItem'>
                        <table width='560' border='0' cellspacing='0' cellpadding='0' align='center'>
                          <tr><td height='38'></td></tr>
                          <tr>
                            <td>
                              <div class='contentEditableContainer contentTextEditable'>
                                <div class='contentEditable'>
                                  <h2 style='font-size:38px;text-align:center;'>Worktaster New Member Registration</h2>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr><td height='20'></td></tr>
                          <tr><td height='5' align='center'><hr style='width:117px; height:5px; background-color:#d2176e;border: none;'/></td></tr>
                          <tr><td height='20'></td></tr>
                          <tr>
                            <td>
                              <div class='contentEditableContainer contentTextEditable'>
                                <div class='contentEditable' style='font-size:16px;color:#555555;text-align:center;line-height:24px;font-style: italic;'>
                                 <!-- <p >Some text will be here for short information,<br/> Like this we put here!</p>-->
                                </div>
                              </div>                  
                            </td>
                          </tr>
                          <tr><td height='38'></td></tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr><td height='10'></td></tr>
            </table>
          </div>

            <div class='movableContent'>
              <table width='560' border='0' cellspacing='0' cellpadding='0' align='center'>
                <tr><td width='210' height='10' align='right'><img src='http://worktaster.com/Emailer/imgs/bannerTop.png' width='179' height='10' /></td><td width='350' colspan='2'></td></tr>
                <tr>
                  <td width='210' class='bgItem' align='right'>
                    <table width='155' border='0' cellspacing='0' cellpadding='0' >
                      <tr><td bgcolor='#d2176e' height='50'></td></tr>
                      <tr>
                        <td bgcolor='#d2176e' style='padding-right:15px;padding-left:15px;'>
                          <div class='contentEditableContainer contentTextEditable'>
                            <div class='contentEditable' style='font-size:38px;color:#FFFFFF;text-align:center;line-height:38px;font-style: italic;'>
                              <p style='color:#FFFFFF;'>Your Text!</p>
                            </div>
                          </div>   
                        </td>
                      </tr>
                      <tr><td height='50' bgcolor='#d2176e'></td></tr>
                      <tr><td valign='bottom'><img src='http://worktaster.com/Emailer/imgs/bannerBottom.png' width='155' height='24' /></td></tr>
                    </table>
                  </td>
                  <td width='40' class='bgItem'></td>
                  <td width='260' class='bgItem'>
                    <table width='260' border='0' cellspacing='0' cellpadding='0' >
                      <tr><td height='30'></td></tr>
                      <tr>
                        <td>
                          <div class='contentEditableContainer contentTextEditable'>
                            <div class='contentEditable' style='color:#555555;font-size:16px;line-height:24px;text-align:left;font-family: Helvetica Neue;'>
                              <p> Dear  Team  ,<br>Greetings!!!<br>
 $company_name Joined Us As a Employer <br> </p>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr><td height='50'></td></tr>
                    </table>
                  </td>
                  <td width='30' class='bgItem'></td>
                </tr>
                <tr><td height='10'></td></tr>
              </table>
            </div>

          
 
            <div class='movableContent'>
              <table width='560' border='0' cellspacing='0' cellpadding='0' align='center'>
                <tr><td height='10'></td></tr>
                <tr>
                  <td class='bgItem' align='center'>
                    <table width='560' border='0' cellspacing='0' cellpadding='0' align='center'>
                      <tr><td height='50' colspan='9'></td></tr>
                      <tr>
                        <td width='50'></td>
                        <td width='200' style='padding-top:14px;'>
                          <div class='contentEditableContainer contentTextEditable'>
                            <div class='contentEditable' style='font-size: 16px;color:#555555;line-height: 24px;'>
                              <p>
                                Check Our social Pages:
                              </p>
                            </div>
                          </div>
                        </td>
                        <td width='30'></td>
                        <td width='70'>
                          <div class='contentEditableContainer contentFacebookEditable'>
                            <div class='contentEditable'>
                              <img src='http://worktaster.com/Emailer/imgs/facebook.png'   data-max-width='70' width='70' height='70' alt='facebook' data-customIcon='true'/>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='70'>
                          <div class='contentEditableContainer contentTwitterEditable'>
                            <div class='contentEditable'>
                              <img src='http://worktaster.com/Emailer/imgs/twitter.png'  data-max-width='70' width='70' height='70' alt='Twitter' data-customIcon='true'/>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='70'>
                          <div class='contentEditableContainer contentImageEditable'>
                            <div class='contentEditable'>
                              <img src='http://worktaster.com/Emailer/imgs/pinterest.png'  data-max-width='70' width='70' height='70' alt='Pinterest'/>
                            </div>
                          </div>
                        </td>
                        <td width='50'></td>
                      </tr>
                      <tr><td height='50' colspan='9'></td></tr>
                    </table>
                  </td>
                </tr>
                <tr><td height='10'></td></tr>
              </table>
            </div>


            <div class='movableContent'>
            <table width='560' border='0' cellspacing='0' cellpadding='0' align='center'>
              <tr><td height='10'></td></tr>

              <tr><td><div style='border-top:1px solid #555555;'></div></td></tr>

              <tr><td height='20'></td></tr>

              <tr>
                <td align='center'>
                  <table width='560' border='0' cellspacing='0' cellpadding='0' align='center'>
                    <tr>
                      <td width='560' align='center'>
                        <div class='contentEditableContainer contentTextEditable'>
                          <div class='contentEditable' style='color:#555555;text-align:center;font-size:13px;line-height:19px;'>
                            <p>Sent by Sender Name <br/>
                              Clients Address <br/>
                              Clients Phone <br/>
                              <a target='_blank' href='[FORWARD]' style='color:#555555;'>Forward to a friend</a><br/>
                              </p>
                              <a target='_blank' href='[UNSUBSCRIBE]' style='color:#555555;'>Unsubscribe</a>
                            </p>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </div>


          </td>
        </tr>

        <!-- =============== END BODY =============== -->

<!-- =============== START FOOTER =============== -->
        

        <tr><td height='20'></td></tr>
<!-- =============== END FOOTER =============== -->


      </table>
    </td>
  </tr>
</table>



  </body>
  </html>
";				
				
				
				
//$message = ("Dear  Team  ,<br>Greetings!!!<br>
// Mrs $company_name Joined Us As a Employer <br>");  
        
 $header= 'From: admin@worktaster.com' . "\r\n" .
    'Reply-To: mike.allen@vibemarketing.co.uk ' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $header.= "MIME-Version: 1.0\r\n"; 
$header.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$header.= "X-Priority: 1\r\n"; 
 mail($allmails, $subject, $message, $header);	
				
			
			}	
			
			
			// end notification hear
	 
	 
	 
	 
	 
	 
	 
      echo '<script type="text/javascript">window.location ="../email_err.php";</script>';
         // echo '<script>alert("Employer Registration Sucessfully!");</script>';

        }
        else{
			
			$checkVar=mysql_error();
			//echo $checkVar;
 if($checkVar=="Duplicate entry '".$company_userid."' for key 'userid'"){
	 
			
			$_SESSION['emp_userid_error']="Userid  Aleready Taken , Choose Different ";
	 
			echo '<script>;javascript:history.go(-1);</script>';
			
			}
		
			elseif($checkVar=="Duplicate entry '".$company_email."' for key 'email'"){
				
				$_SESSION['emp_email_error']='Email  Aleready Registered , Choose Different';  
			
				
				
		echo '<script>javascript:history.go(-1);</script>';
			}
				
			else{	
			echo '<script>alert("Error in Query Pass Employer Registration'.mysql_error().'");javascript:history.go(-1);</script>';
			
			}
        }
    }
    
    
    public function school_registration(){
         $sir_title=mysql_real_escape_string($_POST['sir_title']);
        $fname=mysql_real_escape_string($_POST['f_name']);
        $lname=mysql_real_escape_string($_POST['l_name']);
        $title=mysql_real_escape_string($_POST['title']);
        $email=mysql_real_escape_string($_POST['email']);
        $telephone=mysql_real_escape_string($_POST['telephone']);
        $school_name=mysql_real_escape_string($_POST['school_name']);
        $address=mysql_real_escape_string($_POST['address']);
        $city=mysql_real_escape_string($_POST['city']);
        $region=mysql_real_escape_string($_POST['region']);
        $postal_code=mysql_real_escape_string($_POST['postal_code']);
        $userid=mysql_real_escape_string($_POST['userid']);
        $password=$_POST['password'];
        $pass=MD5($password);
        $categorytype="School";
        if(isset($_POST['term'])){
        $terms="checked";
        }
        else{ $terms="unchecked";}
        
        
        $logindetail=mysql_query("insert into login (userid,password,email,category,email_confirmation) values ('$userid','$pass','$email','$categorytype','false');");
        
        
        
        if($logindetail){
            $school_register=mysql_query("insert into school_registration (userid,school_first_name,school_last_name,school_email,school_telephone,school_title,school_name,school_address,school_city,school_region,school_postal_code,school_terms,school_name_title) values('$userid','$fname','$lname','$email','$telephone','$title','$school_name','$address','$city','$region','$postal_code','$terms','$sir_title');");
			
             $_SESSION['schooluserid']=$_POST['userid'];
        $_SESSION['schooluserpass']=$pass;
			
			
				$subject = 'Worktaster Account Activation Confirmation';
	$message='<html>
<head>
<title>emailer</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
body{font-family: "Open Sans", sans-serif;}.
a{color:#666;}
a:hover{
  text-decoration: none;
  color: #333;
}
a:active{
  text-decoration: none;
  color: #333;
}
a:link {
  color: #333;
  text-decoration: none;
}
a:visited {
  text-decoration: none;
  color: #333;
}
</style>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<table width="953" height="1649" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01" style="border:1px solid lightgray; ">

  <tr>
    <td align="left" valign="top"><br>
        <a href="http://worktaster.com" target="_blank"><img src="http://worktaster.com/images/emailer_02.jpg" width="953" height="250" alt=""></a></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF">
        <div style="padding:10px 60px;">
        <p>Dear Sally</p>

<p>Welcome to Worktaster!</p>

<p>Your Username is:'.$userid.'</p>

<p>Your account has been created sucessfully. To activate your account </p>
<p><a href="http://worktaster.com/email_confrim.php?userid='.$userid.'"> Please Click Here </a></p>
</div>
</td>
  </tr>
  <tr>
    <td align="left" valign="top">
      <img src="http://worktaster.com/images/emailer_04.jpg" width="953" height="344" alt=""></td>
  </tr>
  <tr>
    <td align="left" valign="top">
        <div style="padding:10px 60px; text-align:center;">If you have any queries about your account, please contact us at:<br>
customerservice@worktaster.com</div>
        </td>
  </tr>
  <tr>
    <td align="left" valign="top">
      <img src="http://worktaster.com/images/emailer_06.jpg" alt="" width="953" height="180" usemap="#Map" border="0"></td>
  </tr>
  <tr>
    <td align="left" valign="top">
        <div style="padding:10px 60px; text-align:center;">
        Sent By Worktaster Ltd
        <br>
        <a href="#">Forward to a friend</a>
        <br>
        <a href="#">Unsubscribe</a>
        </div>
</td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF">
      <div style="padding:10px 60px; text-align:center;">This email and any files transmitted with it are confidential and intended solely for<br>the use of  the individual or entity to whole they are addressed. if you have received<br>
this email in error, please notify us</div>
            </td>
  </tr>
</table>


<map name="Map">
  <area shape="rect" coords="171,32,287,146" href="http://facebook.com" target="_blank">
  <area shape="rect" coords="402,30,523,149" href="http://twitter.com" target="_blank">
  <area shape="rect" coords="648,25,781,149" href="http://youtube.com" target="_blank">
</map>
</body>
</html>';
			
//$message = ("Dear  $fname ,<br>Greetings!!!<br>
//Your Account has been created Sucessfully<br>
//<a href='http://worktaster.com/email_confrim.php?userid=$userid'>Click Hear for Activate it</a>");  
//			
			
			
			
        
 $header= 'From: admin@worktaster.com' . "\r\n" .
    'Reply-To: mike.allen@vibemarketing.co.uk ' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $header.= "MIME-Version: 1.0\r\n"; 
$header.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$header.= "X-Priority: 1\r\n"; 
 mail($email, $subject, $message, $header);	
			
			
			
			
			
			
			
			
			 // code for notification all users
			$ntemail=mysql_query("select email from login");
			while($allemail=mysql_fetch_array($ntemail)){
			
				$allmails=$allemail['email'];
				
							
	$subject = 'Worktaster New School Registration';
				
	$message="
<html>
<head>
  
  <title>Title</title>
  <style type='text/css'>
  body {
   padding-top: 0  ;
   padding-bottom: 0  ;
   padding-top: 0  ;
   padding-bottom: 0  ;
   margin:0  ;
   width: 100%  ;
   -webkit-text-size-adjust: 100%  ;
   -ms-text-size-adjust: 100%  ;
   -webkit-font-smoothing: antialiased  ;
 }
 .tableContent img {
   border: 0  ;
   display: block  ;
   outline: none  ;
 }
 a{
  color:#382F2E;
}

p, h1,h2,h3,ul,ol,li,div{
  margin:0;
  padding:0;
}

h1,h2{
  font-weight: normal;
  background:transparent  ;
  border:none  ;
}

.contentEditable h2.big{
  font-size: 30px  ;
}

 .contentEditable h2.bigger{
  font-size: 37px  ;
}

td,table{
  vertical-align: top;
}
td.middle{
  vertical-align: middle;
}

a.link1{
  font-size:14px;
  color:#D4D4D4;
  text-decoration:none;
  font-family: Helvetica Neue;
}

.link2{
font-size:16px;
color:#d2176e;
text-decoration:none;
line-height:24px;
font-family: Helvetica;
font-weight: bold;
}

.link3{
padding:5px 10px;
border-radius: 6px;
background-color: #d2176e;
font-size:13px;
color:#f2f2f2;
text-decoration:none;
line-height:26px;
font-family: Helvetica;
font-weight: bold;
}

.contentEditable li{
  margin-top:10px;
  margin-bottom:10px;
  list-style: none;
  color:#ffffff;
  text-align:center;
  font-size:13px;
  line-height:19px;
}

.appart p{
  font-size:13px;
  line-height:19px;
  color:#aaaaaa  ;
}
h2{
  color:#555555;
  font-weight: normal;
  font-size:28px;
  color:#555555;
  font-family: Georgia;
  line-height: 28px;
  font-style: italic;
}
.bgItem{
background:#f2f2f2;
}
.bgBody{
background:#ffffff;
}
</style>



</head>
<body paddingwidth='0' paddingheight='0' bgcolor='#d1d3d4'  style='padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; background-repeat: repeat; width: 100%  ; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;' offset='0' toppadding='0' leftpadding='0'>
<table width='100%' border='0' cellspacing='0' cellpadding='0' class='tableContent bgBody' align='center' bgcolor='#FFFFFF' style='font-family:Georgia, serif; border:1px solid lightgray;'>
    <!-- =============== START HEADER =============== -->
  <tr>
    <td align='center' class=''>
      <table width='560' border='0' cellspacing='0' cellpadding='0' align='center' >
        <tr>
 <!-- =============== END HEADER =============== -->
          <!-- =============== START BODY =============== -->
          <td align='center' class='movableContentContainer'>


          <div class='movableContent'>
            <table width='560' border='0' cellspacing='0' cellpadding='0' align='center'>
              <tr>
                <td align='center'>
                  <table width='560' border='0' cellspacing='0' cellpadding='0' align='center'>
                    <tr><td height='10' colspan='3'></td></tr>
                    <tr>
                      <td>
                        <div class='contentEditableContainer contentImageEditable'>
                          <div class='contentEditable' align='left'>
                            <img src='http://worktaster.com/Emailer/imgs/logo.png' alt='logo' data-default='placeholder'  width='89' height='88' />
                          </div>
                        </div>
                      </td>
                      <td>

                      </td>
                      <td>
						<div class='contentEditableContainer contentTextEditable' >
                          <div class='contentEditable' align='right'>
                            <a target='_blank' href='[SHOWEMAIL]' class='link1' style='line-height: 88px;color:#D4D4D4;'>Open in your browser</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr><td height='10' colspan='3'></td></tr>
                  </table>
                </td>
              </tr>
            </table>
          </div>

          <div class='movableContent'>
            <table width='560' border='0' cellspacing='0' cellpadding='0' align='center'>
              <tr>
                <td>
                  <table width='560' border='0' cellspacing='0' cellpadding='0' align='center'>
                    <tr>
                      <td>
                        <div class='contentEditableContainer contentImageEditable'>
                          <div class='contentEditable' align='left'>
                            <img src='http://worktaster.com/Emailer/imgs/header.jpg' alt='header' data-default='placeholder' data-max-width='560' width='560' height='242' />
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class='bgItem'>
                        <table width='560' border='0' cellspacing='0' cellpadding='0' align='center'>
                          <tr><td height='38'></td></tr>
                          <tr>
                            <td>
                              <div class='contentEditableContainer contentTextEditable'>
                                <div class='contentEditable'>
                                  <h2 style='font-size:38px;text-align:center;'>Worktaster New Member Registration</h2>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr><td height='20'></td></tr>
                          <tr><td height='5' align='center'><hr style='width:117px; height:5px; background-color:#d2176e;border: none;'/></td></tr>
                          <tr><td height='20'></td></tr>
                          <tr>
                            <td>
                              <div class='contentEditableContainer contentTextEditable'>
                                <div class='contentEditable' style='font-size:16px;color:#555555;text-align:center;line-height:24px;font-style: italic;'>
                                 <!-- <p >Some text will be here for short information,<br/> Like this we put here!</p>-->
                                </div>
                              </div>                  
                            </td>
                          </tr>
                          <tr><td height='38'></td></tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr><td height='10'></td></tr>
            </table>
          </div>

            <div class='movableContent'>
              <table width='560' border='0' cellspacing='0' cellpadding='0' align='center'>
                <tr><td width='210' height='10' align='right'><img src='http://worktaster.com/Emailer/imgs/bannerTop.png' width='179' height='10' /></td><td width='350' colspan='2'></td></tr>
                <tr>
                  <td width='210' class='bgItem' align='right'>
                    <table width='155' border='0' cellspacing='0' cellpadding='0' >
                      <tr><td bgcolor='#d2176e' height='50'></td></tr>
                      <tr>
                        <td bgcolor='#d2176e' style='padding-right:15px;padding-left:15px;'>
                          <div class='contentEditableContainer contentTextEditable'>
                            <div class='contentEditable' style='font-size:38px;color:#FFFFFF;text-align:center;line-height:38px;font-style: italic;'>
                              <p style='color:#FFFFFF;'>Your Text!</p>
                            </div>
                          </div>   
                        </td>
                      </tr>
                      <tr><td height='50' bgcolor='#d2176e'></td></tr>
                      <tr><td valign='bottom'><img src='http://worktaster.com/Emailer/imgs/bannerBottom.png' width='155' height='24' /></td></tr>
                    </table>
                  </td>
                  <td width='40' class='bgItem'></td>
                  <td width='260' class='bgItem'>
                    <table width='260' border='0' cellspacing='0' cellpadding='0' >
                      <tr><td height='30'></td></tr>
                      <tr>
                        <td>
                          <div class='contentEditableContainer contentTextEditable'>
                            <div class='contentEditable' style='color:#555555;font-size:16px;line-height:24px;text-align:left;font-family: Helvetica Neue;'>
                              <p> Dear  Team  ,<br>Greetings!!!<br>
  $school_name Joined Us As a School Member <br> </p>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr><td height='50'></td></tr>
                    </table>
                  </td>
                  <td width='30' class='bgItem'></td>
                </tr>
                <tr><td height='10'></td></tr>
              </table>
            </div>

          
 
            <div class='movableContent'>
              <table width='560' border='0' cellspacing='0' cellpadding='0' align='center'>
                <tr><td height='10'></td></tr>
                <tr>
                  <td class='bgItem' align='center'>
                    <table width='560' border='0' cellspacing='0' cellpadding='0' align='center'>
                      <tr><td height='50' colspan='9'></td></tr>
                      <tr>
                        <td width='50'></td>
                        <td width='200' style='padding-top:14px;'>
                          <div class='contentEditableContainer contentTextEditable'>
                            <div class='contentEditable' style='font-size: 16px;color:#555555;line-height: 24px;'>
                              <p>
                                Check Our social Pages:
                              </p>
                            </div>
                          </div>
                        </td>
                        <td width='30'></td>
                        <td width='70'>
                          <div class='contentEditableContainer contentFacebookEditable'>
                            <div class='contentEditable'>
                              <img src='http://worktaster.com/Emailer/imgs/facebook.png'   data-max-width='70' width='70' height='70' alt='facebook' data-customIcon='true'/>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='70'>
                          <div class='contentEditableContainer contentTwitterEditable'>
                            <div class='contentEditable'>
                              <img src='http://worktaster.com/Emailer/imgs/twitter.png'  data-max-width='70' width='70' height='70' alt='Twitter' data-customIcon='true'/>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='70'>
                          <div class='contentEditableContainer contentImageEditable'>
                            <div class='contentEditable'>
                              <img src='http://worktaster.com/Emailer/imgs/pinterest.png'  data-max-width='70' width='70' height='70' alt='Pinterest'/>
                            </div>
                          </div>
                        </td>
                        <td width='50'></td>
                      </tr>
                      <tr><td height='50' colspan='9'></td></tr>
                    </table>
                  </td>
                </tr>
                <tr><td height='10'></td></tr>
              </table>
            </div>


            <div class='movableContent'>
            <table width='560' border='0' cellspacing='0' cellpadding='0' align='center'>
              <tr><td height='10'></td></tr>

              <tr><td><div style='border-top:1px solid #555555;'></div></td></tr>

              <tr><td height='20'></td></tr>

              <tr>
                <td align='center'>
                  <table width='560' border='0' cellspacing='0' cellpadding='0' align='center'>
                    <tr>
                      <td width='560' align='center'>
                        <div class='contentEditableContainer contentTextEditable'>
                          <div class='contentEditable' style='color:#555555;text-align:center;font-size:13px;line-height:19px;'>
                            <p>Sent by Sender Name <br/>
                              Clients Address <br/>
                              Clients Phone <br/>
                              <a target='_blank' href='[FORWARD]' style='color:#555555;'>Forward to a friend</a><br/>
                              </p>
                              <a target='_blank' href='[UNSUBSCRIBE]' style='color:#555555;'>Unsubscribe</a>
                            </p>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </div>


          </td>
        </tr>

        <!-- =============== END BODY =============== -->

<!-- =============== START FOOTER =============== -->
        

        <tr><td height='20'></td></tr>
<!-- =============== END FOOTER =============== -->


      </table>
    </td>
  </tr>
</table>



  </body>
  </html>
";					
				
				
				//$message = ("Dear  Team  ,<br>Greetings!!!<br>
// Mrs $school_name Joined Us As a School Member <br>");
				
//$message = ("Dear  Team  ,<br>Greetings!!!<br>
// Mrs $school_name Joined Us As a School Member <br>");  
        
 $header= 'From: admin@worktaster.com' . "\r\n" .
    'Reply-To: mike.allen@vibemarketing.co.uk ' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $header.= "MIME-Version: 1.0\r\n"; 
$header.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$header.= "X-Priority: 1\r\n"; 
 mail($allmails, $subject, $message, $header);	
				
			
			}	
			
			
			// end notification hear
	 
         //echo '<script>alert("School Registration Sucessfully!");</script>';
  echo '<script type="text/javascript">window.location ="../email_err.php";</script>';
            
        }
        else{
			
		$checkVar=mysql_error();
			//echo $checkVar;
 if($checkVar=="Duplicate entry '".$userid."' for key 'userid'"){
	 
	 $_SESSION['sch_userid_error']="Userid  Aleready Taken , Choose Different ";
			
			echo '<script>javascript:history.go(-1);</script>';
			
			}
		
			elseif($checkVar=="Duplicate entry '".$email."' for key 'email'"){
				
				$_SESSION['sch_email_error']='Email  Aleready Registered , Choose Different';  
				
		echo '<script>javascript:history.go(-1);</script>';
				
			}
				
			else{	
			echo '<script>alert("Error in School registration Query'.mysql_error().'");javascript:history.go(-1);</script>';
			
			}	
			
        }
    
    }
    
    

}

if(isset($_POST['student'])){
$cl= new Registration();
$cl->student_regestration();
}
if(isset($_POST['employer'])){
$cl= new Registration();
$cl->employer_regestration();
}
if(isset($_POST['school'])){
$cl= new Registration();
$cl->school_registration();
}

?>
