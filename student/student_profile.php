<?php include('../classes/student_fetched_data.php');
//session_start();
//$student_profile_data=new StudentData();
//$student_profile_data->StudentProfile();
?>
<html>
<head>
    <script type="text/javascript" src="../js/validation.js"></script>
    
    <script>
        $(document).ready(function () {
            $("#cmt").datepicker();
        });
         $(document).ready(function () {
            $("#dob").datepicker();
        });
        
        $(document).ready(function() {
    $('#all').click(function(event) {  //on click 
        if(this.checked) { // check select status
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1"               
            });
        }else{
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                       
            });         
        }
    });
    
});
    </script>
    <script type="text/javascript">
		
	// code for password update	
	
	function oldpassmatch(){
		
		var new_pass = document.change_password.new_password.value;
       var re_new_pass = document.change_password.re_password.value;
		var first = document.change_password.old_password.value;
            if (re_new_pass != new_pass) {
                //alert(" Re-Password Not Match");
				document.getElementById("PassError").style.display="block";
                re_new_pass.focus;
                return false;
            }
		else{
		document.getElementById('PassError').style.display="none";
		}
		
        var xmlhttp;
        if (window.XMLHttpRequest)
          {// code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
          }
        else
          {// code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
        xmlhttp.onreadystatechange=function()
        {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            var res=xmlhttp.responseText;
            document.getElementById("dbpassmatch").innerHTML=res;
            }
          }
        xmlhttp.open("GET","../classes/student_profile_complete.php?first="+first+"&new_pass="+new_pass,true);
        xmlhttp.send();
        }
        

    </script>

</head>

<body>
    <div class="main">
        <div class="registration">
			<a href="view_all_vacancies.php"> View All Vacancies</a><br>
		<a href="my_applications.php"> My Applications</a><br>
			<a href="view_profile.php">View Profile</a><br>
			<a href="../classes/logout.php">Logout</a><br>
            <table border="2px solid black" style="width:99%;">
                <table border="2px solid black" style="width:50%;">
                    <form method="post" action="../classes/student_profile_complete.php" name="registration_form" enctype="multipart/form-data" >
                        <tr><td>
                                <h3>Personal Information</h3></td>
                        </tr>
                        <tr>
                            <td>First Name </td><td>
                                <input type="text" name="first_name" id="first_name" value="<?php echo $first_name;?>" required>
                            </td></tr>
                           <tr><td>Last Name </td><td>
                                <input type="text" name="last_name" id="last_name" value="<?php echo $last_name;?>"> </td>
                        </tr>
                     <tr> <td>  Date of Birth </td>
                         <td><select class="btn btn-primary" name="day" required>
                         <?php if($dob_day!=''){?>
      <option><?php echo $dob_day ;?></option>
      <?php }
							 else{
	echo '<option value="">Day</option>';
	}
							 ?>     
                             
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
</td>
                     <td>
    <select class="btn btn-primary" name="month" required>
        <?php if($dob_month!=''){?>
      <option><?php echo $dob_month ;?></option>
      <?php }
		else{
	echo '<option value="">Month</option>';
	}
		
		?>     
<option >January</option>
<option >February</option>
<option >March</option>
<option >April</option>
<option >May</option>
<option >June</option>
<option >July</option>
<option >August</option>
<option >September</option>
<option >October</option>
<option >November</option>
<option >December</option>
</select></td>
                   
<td><select class="btn btn-primary" name="year" required>
    <?php if($dob_year!=''){?>
      <option><?php echo $dob_year ;?></option>
      <?php }
	else{
	echo '<option value="">Year</option>';
	}
	?>     

<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
<option value="1969">1969</option>
<option value="1968">1968</option>
<option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>
<option value="1959">1959</option>
<option value="1958">1958</option>
<option value="1957">1957</option>
<option value="1956">1956</option>
<option value="1955">1955</option>
<option value="1954">1954</option>
<option value="1953">1953</option>
<option value="1952">1952</option>
<option value="1951">1951</option>
<option value="1950">1950</option>
<option value="1949">1949</option>
<option value="1948">1948</option>
<option value="1947">1947</option>
<option value="1946">1946</option>
<option value="1945">1945</option>
<option value="1944">1944</option>
<option value="1943">1943</option>
<option value="1942">1942</option>
<option value="1941">1941</option>
<option value="1940">1940</option>
<option value="1939">1939</option>
<option value="1938">1938</option>
<option value="1937">1937</option>
<option value="1936">1936</option>
<option value="1935">1935</option>
<option value="1934">1934</option>
<option value="1933">1933</option>
<option value="1932">1932</option>
<option value="1931">1931</option>
<option value="1930">1930</option>
<option value="1929">1929</option>
<option value="1928">1928</option>
<option value="1927">1927</option>
<option value="1926">1926</option>
<option value="1925">1925</option>
<option value="1924">1924</option>
<option value="1923">1923</option>
<option value="1922">1922</option>
<option value="1921">1921</option>
<option value="1920">1920</option>
<option value="1919">1919</option>
<option value="1918">1918</option>
<option value="1917">1917</option>
<option value="1916">1916</option>
<option value="1915">1915</option>
<option value="1914">1914</option>
<option value="1913">1913</option>
<option value="1912">1912</option>
<option value="1911">1911</option>
<option value="1910">1910</option>
<option value="1909">1909</option>
    <option value="1908">1908</option>
    <option value="1907">1907</option>
    <option value="1906">1906</option>
    <option value="1905">1905</option>
    <option value="1904">1904</option>
    <option value="1903">1903</option>
    <option value="1902">1902</option>
    <option value="1901">1901</option>
    <option value="1900">1900</option>
    
    
</select>
                                </td>
                     </tr> 
                        
                            <tr>
                                <td>Gender </td><td>
                                    <select class="btn btn-primary" name="gender" id="gender" required>
                                        <?php if($gender!=''){?>
      <option><?php echo $gender ;?></option>
      <?php }
						else{
	echo '<option value="">Please Select</option>';
	}				
										?>
                                        <option>Male</option>
                                        <option>Female</option
                                    </select>
                                </td>
                            </tr>
                        
                        <tr><td><h3>Contact Information</h3></td></tr>
                     
                     <tr> <td>Home Address </td><td> <input type="text" name="address" id="address" rows="8" cols="30" style="height:110px;width:97%;" value="<?php echo $home_address;?>"></td></tr> 
                        
                  <tr><td> City </td>
    
    <td><input type="text" name="city" id="city" value="<?php echo $city;?>"></td></tr>
 
   <tr><td> Region </td>
    
    <td><input type="text" name="region" id="region" value="<?php echo $region;?>" ></td></tr>
 
   <tr><td> Postal Code</td>
    
    <td><input type="text" name="postal_code" id="postal_code" value="<?php echo $postal_code;?>"></td></tr>  
<tr><td> Email  </td>
    
    <td><input type="text" name="email" id="email" pattern="^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+" value="<?php echo $email?>" required></td></tr>
                        
                        
                        
                 <tr> <td>Phone </td><td> <input type="text" name="primery_tel" id="primery_tel" maxlength="15"  value="<?php echo $primery_tel_no;?>" onkeypress="return isNumberKey(event)"></td></tr>        
         <tr> <td>Personal Website </td><td> <input type="text" name="website" id="website"  value="<?php echo $website;?>"></td></tr>                       
                    <tr><td><input type="submit" name="std_profile_submit" value="Update">    
                              <input type="submit" name="cancel" id="cancel" value="Cancel">  </td></tr>        
                        </form>
                </table>
                <br>
                <br>
                
                <!-- UPload Profile Pic -->
                
                <table border="2px solid black" style="width:40%;">
                    <form method="post" action="../classes/student_profile_complete.php" name="profile_pic" enctype="multipart/form-data" >
                    <tr>
                        <td >
                            <h3>Profile Picture</h3>
                        </td>
                    </tr><tr><td style="width:30%;"><img name="image5" id="image5" height="150" width="150" src="student_docs/profile_photo/<?php echo $profile_pic;?>"></td></tr>
                        <tr><td>Select A Picture</td><td><input type="file" name="profile_image" id="profile_image" title="Select" required></td></tr>
                        <tr><td><input type="submit" name="profile_pic" value="Upload"></td><td><input type="submit" name="cancel" value="Cancel"></td></tr>
                        </form>
                    </table>
 <br>
                <br> <br>
                <br>
<!-- end hear -->
               <!-- Password Change --> 
                
                <table border="2px solid black" style="width:40%;">
                    <form method="post"  name="change_password" onsubmit="return  password_change();">
                    <tr>
                        <td >
                            <h3>Change Password</h3>
                        </td>
                    </tr>
                      
                       <tr><td>New Password</td><td><input type="password" name="new_password" id="new_password" maxlength="20" minlength="8" required ></td></tr>
                     <tr><td>Re-Type New Password</td><td><input type="password" name="re_password" id="re_password" maxlength="20" minlength="8" required ></td></tr>
						<tr><td><div class="alert alert-warning" style="display:none;" id="PassError">
  <strong>Re-Enter Password Not Match</strong> </div></td></tr>
						<tr><td>Old Password</td><td><input type="password" name="old_password"  id="old_password" maxlength="20" minlength="8" required onblur="oldpassmatch();"></td></tr>
						<tr><td><strong id="dbpassmatch"></strong> </td></tr>
                        <tr><td><button type="submit"   name="pass_change" value="">Update Password</button></td><td><input type="submit" name="cancel" value="Cancel" ></td></tr>
                        </form>
                    </table>
 <br>
                <br>
                
                <!-- End Hear Password Change -->
                
                <!-- student parents detail form -->
                <table border="2px solid black" style="width:40%;position:relative;">
                    <form method="post" action="../classes/student_profile_complete.php" name="registration_form" enctype="multipart/form-data" >
                    <tr>
                        <td >
                            <h3>Your School/College</h3>
                        </td>
                    </tr>

                    <tr>
                        <td>School Name </td><td>
                            <INPUT TYPE="text" NAME="school_name" value="<?php echo $school_name ;?>">
                        </td>
                        </tr>
                        <tr>
                        <td>School/College Address </td><td>
                        
                            <input type="text" ROWS="8" COLS="25" name="school_address" value="<?php echo $school_address;?>" style="height:110px;width:90%;"> 
                        </td>
                    </tr>
                        <tr>
                          <td>City</td><td>
                                    <input type="text" name="school_city" value="<?php echo $school_city;?>"> </td>
                            </tr>
                    <tr>
                        <td>Region </td><td>
                            <input TYPE="text" NAME="school_region" value="<?php echo $school_region ;?>" >
                            </td></tr>
                            
                            <tr>
                              
                            
                        <td>Postal Code </td><td>
                            <input type="text" name="school_postalcode" value="<?php echo $school_postalcode;?>"> </td>
                    </tr>
                    <tr>
                        <td>School/College Contact  </td><td>
                        <select class="btn btn-primary" name="school_contact_sr">
                            <?php if($school_contact_sr!=''){?>
      <option><?php echo $school_contact_sr ;?></option>
      <?php }
							
							else{
	echo '<option value="">Please Select</option>';
	}?>
                            <option>Mr</option>
                             <option>Mrs</option>
                             <option>Ms</option>
                        </select>    
                            <input type="text" name="school_contact_fname" placeholder="First Name" value="<?php echo $school_contact_fname;?>"> </td>
                    </tr>
                        
                        <tr>
                        <td>Last Name:</td><td>
                            <input type="text" name="school_contact_lname"  value="<?php echo $school_contact_lname;?>"> </td>
                    </tr>
                        
                    <tr>
                        <td>School/College Phone </td><td>
                            <input type="text" name="school_phone"  value="<?php echo $school_phone;?>"> </td>
                    </tr>
                   
                    <tr>
                        <td>School/College Email </td><td>
                            <input type="text" name="school_email" pattern="^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+" value="<?php echo $school_email;?>"> </td>
                    </tr>
                   
                    
                    <tr>
                        <td>School/College Website </td><td>
                            <input type="text" name="school_website"  value="<?php echo $school_website;?>">
                        </td>
                    </tr>
                        
                       <tr><td><input type="submit" name="student_school_detail" value="Update"></td><td> <input type="submit" name="" value="Cancel"></td></tr>
                        
                    
                    </form>
                </table>

           
<table border="2px solid black" style="width:70%;">
    <form method="post" action="../classes/student_profile_complete.php" name="registration_form" enctype="multipart/form-data" >
                         <tr><td ><h3>Your preferences</h3></td></tr>
                                 <tr><td> Only show me vacancies that are within miles of my home address </td>
                                     
                                 <td>
                                     <select class="btn btn-primary" name="vacaince_distance">
                                         <?php if($vacaince_distance!=''){?>
      <option><?php echo $vacaince_distance ;?></option>
      <?php }?>
                                         
                                         <option>5</option>
                                         <option>10</option>
                                         <option>20</option>
                                         <option>30</option>
                                         <option>40</option>
                                        <option>50</option>
                                          <option>80</option>
                                          <option>100+</option>
                                         
                                     </select>
                                     </td></tr>
                                   
                               <tr><td>Only show me vacancies that are in the following industries (select all that apply): </td></tr>
                                   <tr>  <td><input type="checkbox" name="all" id="all" value="yes" <?php echo $all;?>>All
                                      <input class="checkbox1" type="checkbox" name="banking_finance" id="" value="checked" <?php echo $banking_finance ;?>>Banking and finance
                <input class="checkbox1"  type="checkbox" name="retail" id="" value="checked" <?php echo $retail;?>>Retail
    <input  class="checkbox1"  type="checkbox" name="construction" id="" value="checked" <?php echo $construction;?>>Construction
     <input class="checkbox1"  type="checkbox" name="legal" id="" value="checked" <?php echo $legal;?>>Legal
      <input class="checkbox1" type="checkbox" name="medical" id="" value="checked" <?php echo $medical;?>>Medical
    <input class="checkbox1" type="checkbox" name="other" id="" value="checked" <?php echo $other;?>>Other</td>
                                </tr>
           <tr><td ><h3>Newsletter preferences</h3></td></tr>
        <tr><td><input type="checkbox" name="newsletter" id="" value="checked" <?php echo $newsletter;?>>Yes, send me Worktaster newsletters packed with tips for a successful work experience</td></tr><br>
        <tr><td><input type="submit" name="student_prefrences" value="Update Preferences"> <input type="submit" name="" value="Cancel"></td></tr>
             </form>             
</table>
                            <!-- Student  medical report -->

                    
              </table>


                </form>
            </table>
        </div>

    </div>

</body>

</html>