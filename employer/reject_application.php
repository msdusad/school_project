<?php include( 'employerheader.php'); 
$student_invite=$_GET[ 'studuser']; 
$apply_time=$_GET[ 'apply_time'];
?>

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
<div class="col-xs-12 col-sm-12 col-md-9" id='reject_application-form'>

<?php include('returnToDashboard.php');?>


    <h1><i class="fa fa-ban"></i> Reject Application</h1>

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

            <form action="?studuser=<?php echo $student_invite?>&apply_time=<?php echo $apply_time?>" method="post" onsubmit="return confirm('Are you sure?Once you have rejected a candidate this can not be undone');">
                <table class="table">

                    <tr>

                        <h2><i class="fa fa-dashboard"></i> Reject Application</h2>

                    </tr>

                    <tr>
                        <td>
                            Message <br><textarea type="text" name="reject_message" id="reject_message" rows="10" cols="80" required></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input  class="btn btn-primary" type="submit" name="reject_application" value="Send Rejection E-mail">
                            <input class="btn btn-danger" type="submit" name="reject_application_cancel" value="Cancel" onclick="history.go(-1);">
                        </td>
                    </tr>
            </form>
            </table>






        </div>

        <!-- End Hear -->

    </div>



    <?php include( 'employerfooter.php');  ?>
<?php class Interview{

public function reject_application(){
	$student_user=$_GET['studuser'];
	$apply_tm=$_GET['apply_time'];
$employer=$_SESSION['employeruserid'];
    $message=mysql_real_escape_string($_POST['reject_message']);
    $status="Rejected";
    $invitation=mysql_query("insert into reject_applications (student_id,employer_id,rejection_message,rejection_time) values ('$student_user','$employer','$message',now());");

    if($invitation){
		$sql=mysql_query("update job_applied set status='$status' where student_userid='$student_user' && company_userid='$employer' && apply_time='$apply_tm';");
		
		$emailid=mysql_query("select email,first_name from student_profile where student_userid='$student_user';");
		while($row=mysql_fetch_array($emailid)){
			$to=$row['email'];
			$fname=$row['first_name'];
		$subject = 'Worktaster Application Rejection Mail';
			
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
                            <img src='http://vibedevelopment.co.uk/worktaster/Emailer/imgs/logo.png' alt='logo' data-default='placeholder'  width='89' height='88' />
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
                            <img src='http://vibedevelopment.co.uk/worktaster/Emailer/imgs/header.jpg' alt='header' data-default='placeholder' data-max-width='560' width='560' height='242' />
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
                                  <h2 style='font-size:38px;text-align:center;'>Worktaster Enquiry</h2>
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
                <tr><td width='210' height='10' align='right'><img src='http://vibedevelopment.co.uk/worktaster/Emailer/imgs/bannerTop.png' width='179' height='10' /></td><td width='350' colspan='2'></td></tr>
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
                      <tr><td valign='bottom'><img src='http://vibedevelopment.co.uk/worktaster/Emailer/imgs/bannerBottom.png' width='155' height='24' /></td></tr>
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
                              <p> Dear $fname  ,<br> $message </p>
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
                              <img src='http://vibedevelopment.co.uk/worktaster/Emailer/imgs/facebook.png'   data-max-width='70' width='70' height='70' alt='facebook' data-customIcon='true'/>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='70'>
                          <div class='contentEditableContainer contentTwitterEditable'>
                            <div class='contentEditable'>
                              <img src='http://vibedevelopment.co.uk/worktaster/Emailer/imgs/twitter.png'  data-max-width='70' width='70' height='70' alt='Twitter' data-customIcon='true'/>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='70'>
                          <div class='contentEditableContainer contentImageEditable'>
                            <div class='contentEditable'>
                              <img src='http://vibedevelopment.co.uk/worktaster/Emailer/imgs/pinterest.png'  data-max-width='70' width='70' height='70' alt='Pinterest'/>
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
			
			
//$message = ("Dear $fname  ,<br> $message");  
			
			
        
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

include( 'employerfooter.php'); 
?>