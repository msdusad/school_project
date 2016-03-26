<?php
include('studentheader.php');
include('../classes/student_cv_fetched.php');
?>
<head>
	 <script type="text/javascript" src="../js/validation.js"></script>
    <script type="text/javascript">
        function inscheck(checkvalue) {

            if (checkvalue == '') {
                document.getElementById('gcses_id').style.display = 'none';
                document.getElementById('a_levels').style.display = 'none';
            }
            if (checkvalue == '1') {
                document.getElementById('gcses_id').style.display = 'block';
                document.getElementById('a_levels').style.display = 'none';
            }

            if (checkvalue == '2') {
                document.getElementById('a_levels').style.display = 'block';
                document.getElementById('gcses_id').style.display = 'none';
            }
             if (checkvalue == '3') {
                document.getElementById('a_levels').style.display = 'none';
                document.getElementById('gcses_id').style.display = 'none';
            }
        }
        function school_update(stautus){
            
            if (stautus=='0') {
                document.getElementById('new_school_same').style.display = 'none';
            }
        if (stautus=='1') {
                document.getElementById('new_school_same').style.display = 'none';
            }
            
            if (stautus=='2') {
                document.getElementById('new_school_same').style.display = 'block';
            }
        }
    </script>
	<script>
		function editshow(idhide){
		document.getElementById('personal_view').style.display="none";
		document.getElementById('cv_edit').style.display="block";
		
		}
	</script>
</head>
<div class="col-xs-12 col-sm-12 col-md-9">

	<br>
	<h1>Your CV</h1>
	<ul class="nav nav-tabs">
	<li ><a href="cv_view.php">Personal Detail</a></li>
	<li class="active"><a href="cv_education.php">Education</a></li>
	<li><a href="cv_achievment.php">Achievements & Interests</a></li>
	<li><a href="cv_media.php">Media</a></li>
	</ul>


    <div class="row">
        <div class="col-md-12">
        <div class="stdWelcomeBlock" id="personal_view">
		<br>
		<div class="row">
			<div class="col-md-11">
				<h1><i class='fa fa-caret-right'></i> Education</h1>
			</div>
			<div class="col-md-1">
				<button class="btn btn-primary" onclick="editshow(this.id);">Edit</button>
			</div>
		</div>
		<hr style="border-top:1px dashed lightgray;" >
		
		<div id="contactdetail">

		<h3><i class='fa fa-caret-right'></i> Education</h3>
		<hr style="border-top:1px dashed lightgray;" >

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6">		
				<p>Current</p><br>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<?php
				if($school_name!=''){
				echo "<p><b>$school_name</b></p><br>";
				}
				if($gcsc_summary!=''){
				echo "<p><b>$gcsc_summary</b></p>";
				}

				// if gcsc school other 
				if($select_school_name=='2'){
				?>			
			</div>
		</div>
		   
		<hr style="border-top:1px dashed lightgray;" >

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6">		
				Past
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<p>
					<div class="col-xs-12 col-sm-12 col-md-6 emleft"><?php echo $other_school_name;?>Dummy static School/College name</div>
				</p>
				<br/>
				<p>
					<div class="col-xs-12 col-sm-12 col-md-6 emright"><?php echo $other_school_start_month."/".$other_school_start_year." - ".$other_school_end_month."/".$other_school_end_year?></div>
				</p>
			</div>
		</div>
		
		<hr style="border-top:1px dashed lightgray;" >

		<div class="row">				
			<div class="col-md-12">
				<i class='fa fa-caret-right'></i> GCSE Result: <br><br> 
			</div>
		</div>

<table class="table">

		<div class="row">				
			<div class="col-xs-12 col-sm-12 col-md-6">ICT <i class='fa fa-caret-down'></i> 
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">Merit <i class='fa fa-caret-down'></i> 
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
					<?php 
					if($subject1!=''){
					echo "<tr><td>".$subject1."</td><td>".$expected_grade1."</td></tr>";
					}
					if($subject2!=''){
					echo "<tr><td>".$subject2." </td><td>".$expected_grade2."</td></tr>";
					}
					if($subject3!=''){
					echo "<tr><td>".$subject3." </td><td>".$expected_grade3."</td></tr>";
					}
					if($subject4!=''){
					echo "<tr><td>".$subject4." </td><td>".$expected_grade4."</td></tr>";
					}
					if($subject5!=''){
					echo "<tr><td>".$subject5." </td><td>".$expected_grade5."</td></tr>";
					}
					if($subject6!=''){
					echo "<tr><td>".$subject6."</td><td>".$expected_grade6."</td></tr>";
					}
					if($subject7!=''){
					echo "<tr><td>".$subject7."</td><td>".$expected_grade7."</td></tr>";
					}
					if($subject8!=''){
					echo "<tr><td>".$subject8." </td><td>".$expected_grade8."</td></tr>";
					}
					if($subject9!=''){
					echo "<tr><td>".$subject9." </td><td>".$expected_grade9."</td></tr>";
					}
					if($subject10!=''){
					echo "<tr><td>".$subject10."</td><td>".$expected_grade10."</td></tr>";
					}
					if($subject11!=''){
					echo "<tr><td>".$subject11."</td><td>".$expected_grade11."</td></tr>";
					}
					?>
			</div>
		</div>
	
</table>
			<hr style="border-top:1px solid lightgray;" >
                   
<?php   
			   
}
?>
		   
		   
		   


       </div>
        </div>
		
<!-- After Click edit section started here -->
		
			
		 <div id="cv_edit" class="stdWelcomeBlock" style="display:none;">
			 <br>
			 <table class="table">
	<form method="post" action="../classes/student_cv_db.php" name="cv_education_detail" enctype="multipart/form-data">	 
		<div class="row">
			<div class="col-md-11">
			</div>
			<div class="col-md-1">
					<input class="btn btn-primary cv_edu_saveBtn" type="submit" name="cv_education_detail" value="Save">
			</div>
		</div>
				
				
		<div class="row">
			<div class="col-md-12">
			
   
			 <table class="table">

				
				<div class="row">				
					<div class="col-md-12"> <h1><i class='fa fa-caret-right'></i> Education Information</h1> </div>
				</div>
				<br>
				<div class="row cv_edu_input_adj">				
					<div class="col-xs-12 col-sm-12 col-md-6"><p>School/College Name</p></div>
					<div class="col-xs-12 col-sm-12 col-md-6"><input type="text" name="school_name" value="<?php echo $school_name;?>"></div>
				</div>
				<br>
				<div class="row cv_edu_input_adj">				
					<div class="col-xs-12 col-sm-12 col-md-6"><p>School/College Address</p></div>
					<div class="col-xs-12 col-sm-12 col-md-6"><textarea type="text" row="5" COLS="25" name="school_address"><?php echo $school_address;?></textarea></div>
				</div>
				<br>
				<div class="row cv_edu_input_adj">				
					<div class="col-xs-12 col-sm-12 col-md-6"><p>City</p></div>
					<div class="col-xs-12 col-sm-12 col-md-6"><input type="text" name="school_city" value="<?php echo $school_city;?>"></div>
				</div>
				<br>
				<div class="row cv_edu_input_adj">				
					<div class="col-xs-12 col-sm-12 col-md-6"><p>Region</p></div>
					<div class="col-xs-12 col-sm-12 col-md-6"><input TYPE="text" NAME="school_region" value="<?php echo $school_region ;?>"></div>
				</div>
				<br>
				<div class="row cv_edu_input_adj">				
					<div class="col-xs-12 col-sm-12 col-md-6"><p>Postal Code</p></div>
					<div class="col-xs-12 col-sm-12 col-md-6"><input type="text" name="school_postalcode" value="<?php echo $school_postalcode;?>"></div>
				</div>
				<br>
				<div class="row cv_edu_input_adj">				
					<div class="col-xs-12 col-sm-12 col-md-6"><p>When did you start School/College here?</p></div>
					<div class="col-xs-12 col-sm-12 col-md-6">
						<select class="btn btn-primary" name="gcsc_school_start_month" required>
							<?php if($gcsc_school_start_month!=''){
							echo "<option>$gcsc_school_start_month</option>";
							}
                             if($gcsc_school_start_month==''){
							 echo " <option value=''>Month</option>";
							 }
							?>
                           
                            <option>January</option>
                            <option>February</option>
                            <option>March</option>
                            <option>April</option>
                            <option>May</option>
                            <option>June</option>
                            <option>July</option>
                            <option>August</option>
                            <option>September</option>
                            <option>October</option>
                            <option>November</option>
                            <option>December</option>
                        </select>
						
						<select class="btn btn-primary" name="gcsc_school_start_year" required>
                           <?php if($gcsc_school_start_year!=''){
							echo "<option>$gcsc_school_start_year</option>";
							}
                             if($gcsc_school_start_year==''){
							 echo " <option value=''>Year</option>";
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
						</div>
				</div>			
				<br>
				<div class="row cv_edu_input_adj">				
					<div class="col-xs-12 col-sm-12 col-md-6"><p>What are you currently studying towards (select one)?</p></div>
					<div class="col-xs-12 col-sm-12 col-md-6">
							<select class="btn btn-primary" name="currently_studying" id="currently_studying" onchange="inscheck(this.value);">
								<option value="">Please Select</option>
								<option value="1">GCSEs</option>
								<option value="2">A-Levels</option>
								<option value="3">BTEC</option>
							</select>
					</div>
				</div>



                <div class="gcses" id="gcses_id" style="display:none;">
                   <table class="table">

					   
				<div class="row">				
					<div class="col-xs-12 col-sm-12 col-md-12">
						<p style="margin: 15px 0px;"><i class='fa fa-caret-right'></i> GCSE summary: you can give here a short explanation of why you have selected the GCSEs below (optional)</p></div>
					<div class="col-xs-12 col-sm-12 col-md-12">
					<input type="text" name="gcse_summary" id="gcse_summary" style="border-radius: 6px;    border: 1px solid lightgray;    height: 35px;    width: 99%;" placeholder="GCSEs Summary" value="<?php echo $gcsc_summary;?>">
					</div>
				</div>

				<br>

				<div class="row cv_edu_input_adj">				
					<div class="col-xs-12 col-sm-12 col-md-6">Subjects(s)</div>
					<div class="col-xs-12 col-sm-12 col-md-6">Expected Grade(s)</div>
				</div>
				<br>

				<div class="row cv_edu_input_adj">				
					<div class="col-xs-12 col-sm-12 col-md-6"><input type="text" name="subject1" id="subject1" placeholder="Subject" value="<?php echo $subject1;?>"></div>
					<div class="col-xs-12 col-sm-12 col-md-6"><input type="text" name="expected_grade1" id="expected_grade1" placeholder="Expected Grade" value="<?php echo $expected_grade1;?>"></div>
				</div>
				<br>
				<div class="row cv_edu_input_adj">				
					<div class="col-xs-12 col-sm-12 col-md-6"><input type="text" name="subject2" id="subject2" placeholder="Subject" value="<?php echo $subject2;?>"></div>
					<div class="col-xs-12 col-sm-12 col-md-6"><input type="text" name="expected_grade2" id="expected_grade2" placeholder="Expected Grade" value="<?php echo $expected_grade2; ?>"></div>
				</div>
				<br>
				<div class="row cv_edu_input_adj">				
					<div class="col-xs-12 col-sm-12 col-md-6"><input type="text" name="subject3" id="subject3" placeholder="Subject" value="<?php echo $subject3;?>"></div>
					<div class="col-xs-12 col-sm-12 col-md-6"><input type="text" name="expected_grade3" id="expected_grade3" placeholder="Expected Grade" value="<?php echo $expected_grade3;?>"></div>
				</div>
				<br>
				<div class="row cv_edu_input_adj">				
					<div class="col-xs-12 col-sm-12 col-md-6"><input type="text" name="subject4" id="subject4" placeholder="Subject" value="<?php echo $subject4;?>"></div>
					<div class="col-xs-12 col-sm-12 col-md-6"><input type="text" name="expected_grade4" id="expected_grade4" placeholder="Expected Grade" value="<?php echo $expected_grade4;?>"></div>
				</div>
				<br>
				<div class="row cv_edu_input_adj">				
					<div class="col-xs-12 col-sm-12 col-md-6"><input type="text" name="subject5" id="subject5" placeholder="Subject" value="<?php echo $subject5;?>"></div>
					<div class="col-xs-12 col-sm-12 col-md-6"><input type="text" name="expected_grade5" id="expected_grade5" placeholder="Expected Grade" value="<?php echo $expected_grade5;?>"></div>
				</div>
				<br>
				<div class="row cv_edu_input_adj">				
					<div class="col-xs-12 col-sm-12 col-md-6"><input type="text" name="subject6" id="subject6" placeholder="Subject" value="<?php echo $subject6;?>"></div>
					<div class="col-xs-12 col-sm-12 col-md-6"><input type="text" name="expected_grade6" id="expected_grade6" placeholder="Expected Grade" value="<?php echo $expected_grade6;?>"></div>
				</div>
				<br>
				<div class="row cv_edu_input_adj">				
					<div class="col-xs-12 col-sm-12 col-md-6"><input type="text" name="subject7" id="subject7" placeholder="Subject" value="<?php echo $subject7;?>"></div>
					<div class="col-xs-12 col-sm-12 col-md-6"><input type="text" name="expected_grade7" id="expected_grade7" placeholder="Expected Grade" value="<?php echo $expected_grade7;?>"></div>
				</div>
				<br>
				<div class="row cv_edu_input_adj">				
					<div class="col-xs-12 col-sm-12 col-md-6"><input type="text" name="subject8" id="subject8" placeholder="Subject" value="<?php echo $subject8;?>"></div>
					<div class="col-xs-12 col-sm-12 col-md-6"><input type="text" name="expected_grade8" id="expected_grade8" placeholder="Expected Grade" value="<?php echo $expected_grade8;?>"></div>
				</div>
				<br>
				<div class="row cv_edu_input_adj">				
					<div class="col-xs-12 col-sm-12 col-md-6"><input type="text" name="subject9" id="subject9" placeholder="Subject" value="<?php echo $subject9;?>"></div>
					<div class="col-xs-12 col-sm-12 col-md-6"><input type="text" name="expected_grade9" id="expected_grade9" placeholder="Expected Grade" value="<?php echo $expected_grade9;?>"></div>
				</div>
				<br>
				<div class="row cv_edu_input_adj">				
					<div class="col-xs-12 col-sm-12 col-md-6"><input type="text" name="subject10" id="subject10" placeholder="Subject" value="<?php echo $subject10;?>"></div>
					<div class="col-xs-12 col-sm-12 col-md-6"><input type="text" name="expected_grade10" id="expected_grade10" placeholder="Expected Grade" value="<?php echo $expected_grade10;?>"></div>
				</div>
				<br>
				<div class="row cv_edu_input_adj">				
					<div class="col-xs-12 col-sm-12 col-md-6"><input type="text" name="subject11" id="subject11" placeholder="Subject" value="<?php echo $subject11;?>"></div>
					<div class="col-xs-12 col-sm-12 col-md-6"><input type="text" name="expected_grade11" id="expected_grade11" placeholder="Expected Grade" value="<?php echo $expected_grade11;?>"></div>
				</div>

                    </table>

                </div>
                <div class="a-levels" id="a_levels" style="display:none;">
                    <tr>
                        <td>A-Levels summary: you can give here a short explanation of why you have selected the A-Levels below (optional)
                            <br>
                            <input type="text" name="alevels_summary" id="alevels_summary" style="width:80%;" placeholder="A- Levels Summary" value="<?php echo $alevels_summary;?>">
                        </td>
                    </tr>
                    <table class="table">

                        <tr>
                            <td>Complete the table below providing information about the subject you will be taking and your expected grades</td>
                        </tr>
                        <tr>
                            <td>Subjects(s) </td>
                            <td>Expected Grade(s)</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="alevel_subject1" id="alevel_subject1" placeholder="Subject" value="<?php echo $alevel_subject1;?>">
                            </td>
                            <td>
                                <input type="text" name="alevel_expected_grade1" id="alevel_expected_grade1" placeholder="Expected Grade" value="<?php echo $alevel_expected_grade1;?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="alevel_subject2" id="alevel_subject2" placeholder="Subject" value="<?php echo $alevel_subject2;?>">
                            </td>
                            <td>
                                <input type="text" name="alevel_expected_grade2" id="alevel_expected_grade2" placeholder="Expected Grade" value="<?php echo $alevel_expected_grade2;?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="alevel_subject3" id="alevel_subject3" placeholder="Subject" value="<?php echo $alevel_subject3;?>">
                            </td>
                            <td>
                                <input type="text" name="alevel_expected_grade3" id="alevel_expected_grade3" placeholder="Expected Grade" value="<?php echo $alevel_expected_grade3;?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="alevel_subject4" id="alevel_subject4" placeholder="Subject" value="<?php echo $alevel_subject4;?>">
                            </td>
                            <td>
                                <input type="text" name="alevel_expected_grade4" id="alevel_expected_grade4" placeholder="Expected Grade" value="<?php echo $alevel_expected_grade4;?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="alevel_subject5" id="alevel_subject5" placeholder="Subject" value="<?php echo $alevel_subject5;?>">
                            </td>
                            <td>
                                <input type="text" name="alevel_expected_grade5" id="alevel_expected_grade5" placeholder="Expected Grade" value="<?php echo $alevel_expected_grade5;?>">
                            </td>
                        </tr>




                        <tr>
                            <td>GCSE Results: provide below the subjects and grades you have achieved for your GCSEs</td>
                        </tr>
                        <tr>
                            <td>Subjects(s) </td>
                            <td>Expected Grade(s)</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="subject1" id="subject1" placeholder="Subject" value="<?php echo $subject1;?>">
                            </td>
                            <td>
                                <input type="text" name="expected_grade1" id="expected_grade1" placeholder="Expected Grade" value="<?php echo $expected_grade1;?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="subject2" id="subject2" placeholder="Subject" value="<?php echo $subject2;?>">
                            </td>
                            <td>
                                <input type="text" name="expected_grade2" id="expected_grade2" placeholder="Expected Grade" value="<?php echo $expected_grade2;?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="subject3" id="subject3" placeholder="Subject" value="<?php echo $subject3;?>">
                            </td>
                            <td>
                                <input type="text" name="expected_grade3" id="expected_grade3" placeholder="Expected Grade" value="<?php echo $expected_grade3;?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="subject4" id="subject4" placeholder="Subject" value="<?php echo $subject4;?>">
                            </td>
                            <td>
                                <input type="text" name="expected_grade4" id="expected_grade4" placeholder="Expected Grade" value="<?php echo $expected_grade4;?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="subject5" id="subject5" placeholder="Subject" value="<?php echo $subject5;?>">
                            </td>
                            <td>
                                <input type="text" name="expected_grade5" id="expected_grade5" placeholder="Expected Grade" value="<?php echo $expected_grade5;?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="subject6" id="subject6" placeholder="Subject" value="<?php echo $subject6;?>">
                            </td>
                            <td>
                                <input type="text" name="expected_grade6" id="expected_grade6" placeholder="Expected Grade" value="<?php echo $expected_grade6;?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="subject7" id="subject7" placeholder="Subject" value="<?php echo $subject7;?>">
                            </td>
                            <td>
                                <input type="text" name="expected_grade7" id="expected_grade7" placeholder="Expected Grade" value="<?php echo $expected_grade7;?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="subject8" id="subject8" placeholder="Subject" value="<?php echo $subject8;?>">
                            </td>
                            <td>
                                <input type="text" name="expected_grade8" id="expected_grade8" placeholder="Expected Grade" value="<?php echo $expected_grade8;?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="subject9" id="subject9" placeholder="Subject" value="<?php echo $subject9;?>">
                            </td>
                            <td>
                                <input type="text" name="expected_grade9" id="expected_grade9" placeholder="Expected Grade" value="<?php echo $expected_grade9;?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="subject10" id="subject10" placeholder="Subject" value="<?php echo $subject10;?>">
                            </td>
                            <td>
                                <input type="text" name="expected_grade10" id="expected_grade10" placeholder="Expected Grade" value="<?php echo $expected_grade10;?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Did you do your GCSEs at the same School/College?</td>

                            <td>
                                <select class="btn btn-primary" name="select_school_same" id="select_school_same" onchange="school_update(this.value);">
                                    <option value="0">Please Select</option>
                                    <option value="1">Yes</option>
                                    <option value="2">No</option>
                                </select>

                            </td>
                        </tr>
                        <div class="new_school_same" id="new_school_same" style="display:none;">
                            <tr>
                                <td>School/College Name </td>
                                <td>
                                    <INPUT TYPE="text" NAME="other_school_name" value="<?php echo $other_school_name;?>" >
                                </td>
                            </tr>
                            <tr>
                                <td>School/College Address </td>
                                <td>

                                    <input type="text" ROWS="8" COLS="25" name="other_school_address"  style="height:110px;width:90%;" value="<?php echo $other_school_address;?>">
                                </td>
                            </tr>
                            <tr>
                                <td>City</td>
                                <td>
                                    <input type="text" name="other_school_city" value="<?php echo $other_school_city;?>">  </td>
                            </tr>
                            <tr>
                                <td>Region </td>
                                <td>
                                    <input TYPE="text" NAME="other_school_region" value="<?php echo $other_school_region;?>" >
                                </td>
                            </tr>

                            <tr>


                                <td>Postal Code </td>
                                <td>
                                    <input type="text" name="other_school_postalcode" value="<?php echo $other_school_postalcode;?>">  </td>
                            </tr>
                            <tr>
                                <td>when did you start School/College here?</td>

                                <td>
                                    <select class="btn btn-primary" name="other_school_start_month" required>
										<?php if($other_school_start_month!=''){
							echo "<option>$other_school_start_month</option>";
							}
                                    if($other_school_start_month==''){
                                     echo '<option value="">Month</option>';
                                        }?>
                                        
                                        <option>January</option>
                                        <option>February</option>
                                        <option>March</option>
                                        <option>April</option>
                                        <option>May</option>
                                        <option>June</option>
                                        <option>July</option>
                                        <option>August</option>
                                        <option>September</option>
                                        <option>October</option>
                                        <option>November</option>
                                        <option>December</option>
                                    </select>
                                </td>

                                <td>
                                    <select class="btn btn-primary" name="other_school_start_year" required>
                                        <?php if($other_school_start_year!=''){
							echo "<option>$other_school_start_year</option>";
							}
                                    if($other_school_start_year==''){
                                     echo '<option value="">Year</option>';
                                        }?>
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
                                <td>when did you leave this School/College?</td>

                                <td>
                                    <select class="btn btn-primary" name="other_school_end_month" required>
                                        <?php if($other_school_end_month!=''){
							echo "<option>$other_school_end_month</option>";
							}
                                    if($other_school_end_month==''){
                                     echo '<option value="">Month</option>';
                                        }?>
                                        <option>January</option>
                                        <option>February</option>
                                        <option>March</option>
                                        <option>April</option>
                                        <option>May</option>
                                        <option>June</option>
                                        <option>July</option>
                                        <option>August</option>
                                        <option>September</option>
                                        <option>October</option>
                                        <option>November</option>
                                        <option>December</option>
                                    </select>
                                </td>

                                <td>
                                    <select class="btn btn-primary" name="other_school_end_year" required>
                                        <?php if($other_school_end_year!=''){
							echo "<option>$other_school_end_year</option>";
							}
                                    if($other_school_end_year==''){
                                     echo '<option value="">Year</option>';
                                        }?>
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
                         
                        </div>
   </table>
                 
                </div> 
<hr style="border-top:1px solid lightgray;" >

        </table>

		
		</div>
		</div>
		</form>		
	</table>	
				 </div>
        
       
	</div>
    
  


<?php
include('studentfooter.php');
?>