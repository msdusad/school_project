<?php include( '../classes/student_fetched_data.php');?>
<html>

<head>
	    <script type="text/javascript" src="../js/validation.js"></script>
    <script type="text/javascript">
        function inscheck(checkvalue) {

            if (checkvalue == '0') {
                document.getElementById('gcses_id').style.display = 'none';
                document.getElementById('a-levels').style.display = 'none';
            }
            if (checkvalue == '1') {
                document.getElementById('gcses_id').style.display = 'block';
                document.getElementById('a-levels').style.display = 'none';
            }

            if (checkvalue == '2') {
                document.getElementById('a-levels').style.display = 'block';
                document.getElementById('gcses_id').style.display = 'none';
            }
             if (checkvalue == '3') {
                document.getElementById('a-levels').style.display = 'none';
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

</head>

<body>
	<a href="student_profile.php">Home</a>
	<br><a href="../classes/logout.php">Logout</a>
    <table border="2px solid black" style="width:99%;">
        <table border="2px solid black" style="width:90%;">
            <h2>Student CV</h2>
            <form method="post" action="../classes/student_cv_db.php" name="cv_personal_details" enctype="multipart/form-data">
                <tr>
                    <td>
                        <h3>Personal Information</h3>
                    </td>
                </tr>
                <tr>
                    <td>First Name </td>
                    <td>
                        <input type="text" name="first_name" id="first_name" value="<?php echo $cv_first_name;?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Last Name </td>
                    <td>
                        <input type="text" name="last_name" id="last_name" value="<?php echo $cv_last_name;?>"> </td>
                </tr>
				
				    <tr>
                    <td>Phone Number</td>
						
                        <td>
							
    <select name="country_code">
		<?php
if($cv_ph_code!=''){
echo "<option>$cv_ph_code</option>";
}
else{
echo "<option value='+44' selected='1'>United Kingdom (+44)</option>";
}
?>
    	        <option value="+93">Afghanistan (+93)</option>
						<option value="+355">Albania (+355)</option>
						<option value="+213">Algeria (+213)</option>
						<option value="+1">American Samoa (+1)</option>
						<option value="+376">Andorra (+376)</option>
						<option value="+244">Angola (+244)</option>
						<option value="+1">Anguilla (+1)</option>
						<option value="+1">Antigua (+1)</option>
						<option value="+54">Argentina (+54)</option>
						<option value="+374">Armenia (+374)</option>
						<option value="+297">Aruba (+297)</option>
						<option value="+61">Australia (+61)</option>
						<option value="+43">Austria (+43)</option>
						<option value="+994">Azerbaijan (+994)</option>
						<option value="+973">Bahrain (+973)</option>
						<option value="+880">Bangladesh (+880)</option>
						<option value="+1">Barbados (+1)</option>
						<option value="+375">Belarus (+375)</option>
						<option value="+32">Belgium (+32)</option>
						<option value="+501">Belize (+501)</option>
						<option value="+229">Benin (+229)</option>
						<option value="+1">Bermuda (+1)</option>
						<option value="+975">Bhutan (+975)</option>
						<option value="+591">Bolivia (+591)</option>
						<option value="+599">Bonaire, Sint Eustatius and Saba (+599)</option>
						<option value="+387">Bosnia and Herzegovina (+387)</option>
						<option value="+267">Botswana (+267)</option>
						<option value="+55">Brazil (+55)</option>
						<option value="+246">British Indian Ocean Territory (+246)</option>
						<option value="+1">British Virgin Islands (+1)</option>
						<option value="+673">Brunei (+673)</option>
						<option value="+359">Bulgaria (+359)</option>
						<option value="+226">Burkina Faso (+226)</option>
						<option value="+257">Burundi (+257)</option>
						<option value="+855">Cambodia (+855)</option>
						<option value="+237">Cameroon (+237)</option>
						<option value="+1">Canada (+1)</option>
						<option value="+238">Cape Verde (+238)</option>
						<option value="+1">Cayman Islands (+1)</option>
						<option value="+236">Central African Republic (+236)</option>
						<option value="+235">Chad (+235)</option>
						<option value="+56">Chile (+56)</option>
						<option value="+86">China (+86)</option>
						<option value="+57">Colo$mbia (+57)</option>
						<option value="+269">Comoros (+269)</option>
						<option value="+682">Cook Islands (+682)</option>
						<option value="+506">Costa Rica (+506)</option>
						<option value="+225">Côte d'Ivoire (+225)</option>
						<option value="+385">Croatia (+385)</option>
						<option value="+53">Cuba (+53)</option>
						<option value="+599">Curaçao (+599)</option>
						<option value="+357">Cyprus (+357)</option>
						<option value="+420">Czech Republic (+420)</option>
						<option value="+243">Democratic Republic of the Congo (+243)</option>
						<option value="+45">Denmark (+45)</option>
						<option value="+253">Djibouti (+253)</option>
						<option value="+1">Dominica (+1)</option>
						<option value="+1">Dominican Republic (+1)</option>
						<option value="+593">Ecuador (+593)</option>
						<option value="+20">Egypt (+20)</option>
						<option value="+503">El Salvador (+503)</option>
						<option value="+240">Equatorial Guinea (+240)</option>
						<option value="+291">Eritrea (+291)</option>
						<option value="+372">Estonia (+372)</option>
						<option value="+251">Ethiopia (+251)</option>
						<option value="+500">Falkland Islands (+500)</option>
						<option value="+298">Faroe Islands (+298)</option>
						<option value="+691">Federated States of Micronesia (+691)</option>
						<option value="+679">Fiji (+679)</option>
						<option value="+358">Finland (+358)</option>
						<option value="+33">France (+33)</option>
						<option value="+594">French Guiana (+594)</option>
						<option value="+689">French Polynesia (+689)</option>
						<option value="+241">Gabon (+241)</option>
						<option value="+995">Georgia (+995)</option>
						<option value="+49">Germany (+49)</option>
						<option value="+233">Ghana (+233)</option>
						<option value="+350">Gibraltar (+350)</option>
						<option value="+30">Greece (+30)</option>
						<option value="+299">Greenland (+299)</option>
						<option value="+1">Grenada (+1)</option>
						<option value="+590">Guadeloupe (+590)</option>
						<option value="+1">Guam (+1)</option>
						<option value="+502">Guatemala (+502)</option>
						<option value="+44">Guernsey (+44)</option>
						<option value="+2">Guinea (+224)</option>
						<option value="+245">Guinea-Bissau (+245)</option>
						<option value="+592">Guyana (+592)</option>
						<option value="+509">Haiti (+509)</option>
						<option value="+504">Honduras (+504)</option>
						<option value="+852">Hong Kong (+852)</option>
						<option value="+36">Hungary (+36)</option>
						<option value="+354">Iceland (+354)</option>
						<option value="+91" >India (+91)</option>
						<option value="+62">Indonesia (+62)</option>
						<option value="+98">Iran (+98)</option>
						<option value="+964">Iraq (+964)</option>
						<option value="+353">Ireland (+353)</option>
						<option value="+44">Isle of Man (+44)</option>
						<option value="+972">Israel (+972)</option>
						<option value="+39">Italy (+39)</option>
						<option value="+1">Jamaica (+1)</option>
						<option value="+81">Japan (+81)</option>
						<option value="+44">Jersey (+44)</option>
						<option value="+962">Jordan (+962)</option>
						<option value="+7">Kazakhstan (+7)</option>
						<option value="+254">Kenya (+254)</option>
						<option value="+686">Kiribati (+686)</option>
						<option value="+381">Kosovo (+381)</option>
						<option value="+965">Kuwait (+965)</option>
						<option value="+996">Kyrgyzstan (+996)</option>
						<option value="+856">Laos (+856)</option>
						<option value="+371">Latvia (+371)</option>
						<option value="+961">Lebanon (+961)</option>
						<option value="+266">Lesotho (+266)</option>
						<option value="+231">Liberia (+231)</option>
						<option value="+218">Libya (+218)</option>
						<option value="+423">Liechtenstein (+423)</option>
						<option value="+370">Lithuania (+370)</option>
						<option value="+352">Luxembourg (+352)</option>
						<option value="+853">Macau (+853)</option>
						<option value="+389">Macedonia (+389)</option>
						<option value="+261">Madagascar (+261)</option>
						<option value="+265">Malawi (+265)</option>
						<option value="+60">Malaysia (+60)</option>
						<option value="+960">Maldives (+960)</option>
						<option value="+223">Mali (+223)</option>
						<option value="+356">Malta (+356)</option>
						<option value="+692">Marshall Islands (+692)</option>
						<option value="+596">Martinique (+596)</option>
						<option value="+222">Mauritania (+222)</option>
						<option value="+230">Mauritius (+230)</option>
						<option value="+262">Mayotte (+262)</option>
						<option value="+52">Mexico (+52)</option>
						<option value="+373">Moldova (+373)</option>
						<option value="+377">Monaco (+377)</option>
						<option value="+976">Mongolia (+976)</option>
						<option value="+382">Montenegro (+382)</option>
						<option value="+1">Montserrat (+1)</option>
						<option value="+212">Morocco (+212)</option>
						<option value="+258">Mozambique (+258)</option>
						<option value="+95">Myanmar (Burma) (+95)</option>
						<option value="+264">Namibia (+264)</option>
						<option value="+674">Nauru (+674)</option>
						<option value="+977">Nepal (+977)</option>
						<option value="+31">Netherlands (+31)</option>
						<option value="+687">New Caledonia (+687)</option>
						<option value="+64">New Zealand (+64)</option>
						<option value="+505">Nicaragua (+505)</option>
						<option value="+227">Niger (+227)</option>
						<option value="+234">Nigeria (+234)</option>
						<option value="+683">Niue (+683)</option>
						<option value="+672">Norfolk Island (+672)</option>
						<option value="+850">North Korea (+850)</option>
						<option value="+1">Northern Mariana Islands (+1)</option>
						<option value="+47">Norway (+47)</option>
						<option value="+968">Oman (+968)</option>
						<option value="+92">Pakistan (+92)</option>
						<option value="+680">Palau (+680)</option>
						<option value="+970">Palestine (+970)</option>
						<option value="+507">Panama (+507)</option>
						<option value="+675">Papua New Guinea (+675)</option>
						<option value="+595">Paraguay (+595)</option>
						<option value="+51">Peru (+51)</option>
						<option value="+63">Philippines (+63)</option>
						<option value="+48">Poland (+48)</option>
						<option value="+351">Portugal (+351)</option>
						<option value="+1">Puerto Rico (+1)</option>
						<option value="+974">Qatar (+974)</option>
						<option value="+242">Republic of the Congo (+242)</option>
						<option value="+262">Réunion (+262)</option>
						<option value="+40">Romania (+40)</option>
						<option value="+7">Russia (+7)</option>
						<option value="+250">Rwanda (+250)</option>
						<option value="+590">Saint Barthélemy (+590)</option>
						<option value="+290">Saint Helena (+290)</option>
						<option value="+1">Saint Kitts and Nevis (+1)</option>
						<option value="+590">Saint Martin (+590)</option>
						<option value="+508">Saint Pierre and Miquelon (+508)</option>
						<option value="+1">Saint Vincent and the Grenadines (+1)</option>
						<option value="+685">Samoa (+685)</option>
						<option value="+378">San Marino (+378)</option>
						<option value="+239">São Tomé and Príncipe (+239)</option>
						<option value="+966">Saudi Arabia (+966)</option>
						<option value="+221">Senegal (+221)</option>
						<option value="+381">Serbia (+381)</option>
						<option value="+248">Seychelles (+248)</option>
						<option value="+232">Sierra Leone (+232)</option>
						<option value="+65">Singapore (+65)</option>
						<option value="+599">Sint Maarten (+599)</option>
						<option value="+421">Slovakia (+421)</option>
						<option value="+386">Slovenia (+386)</option>
						<option value="+677">Solomon Islands (+677)</option>
						<option value="+252">Somalia (+252)</option>
						<option value="+27">South Africa (+27)</option>
						<option value="+82">South Korea (+82)</option>
						<option value="+211">South Sudan (+211)</option>
						<option value="+34">Spain (+34)</option>
						<option value="+94">Sri Lanka (+94)</option>
						<option value="+1">St. Lucia (+1)</option>
						<option value="+249">Sudan (+249)</option>
						<option value="+597">Suriname (+597)</option>
						<option value="+268">Swaziland (+268)</option>
						<option value="+46">Sweden (+46)</option>
						<option value="+41">Switzerland (+41)</option>
						<option value="+963">Syria (+963)</option>
						<option value="+886">Taiwan (+886)</option>
						<option value="+992">Tajikistan (+992)</option>
						<option value="+255">Tanzania (+255)</option>
						<option value="+66">Thailand (+66)</option>
						<option value="+1">The Bahamas (+1)</option>
						<option value="+220">The Gambia (+220)</option>
						<option value="+670">Timor-Leste (+670)</option>
						<option value="+228">Togo (+228)</option>
						<option value="+690">Tokelau (+690)</option>
						<option value="+676">Tonga (+676)</option>
						<option value="+1">Trinidad and Tobago (+1)</option>
						<option value="+216">Tunisia (+216)</option>
						<option value="+90">Turkey (+90)</option>
						<option value="+993">Turkmenistan (+993)</option>
						<option value="+1">Turks and Caicos Islands (+1)</option>
						<option value="+688">Tuvalu (+688)</option>
						<option value="+256">Uganda (+256)</option>
						<option value="+380">Ukraine (+380)</option>
						<option value="+971">United Arab Emirates (+971)</option>
						<option value="+44">United Kingdom (+44)</option>
						<option value="+1">United States (+1)</option>
						<option value="+598">Uruguay (+598)</option>
						<option value="+1">US Virgin Islands (+1)</option>
						<option value="+998">Uzbekistan (+998)</option>
						<option value="+678">Vanuatu (+678)</option>
						<option value="+39">Vatican City (+39)</option>
						<option value="+58">Venezuela (+58)</option>
						<option value="+84">Vietnam (+84)</option>
						<option value="+681">Wallis and Futuna (+681)</option>
						<option value="+212">Western Sahara (+212)</option>
						<option value="+967">Yemen (+967)</option>
						<option value="+260">Zambia (+260)</option>
						<option value="+263">Zimbabwe (+263)</option>
		
    </select>
		
                        <input type="text" name="phone_number" id="phone_number" value="<?php echo $cv_primery_tel_no;?>" onkeypress="return isNumberKey(event)" maxlength="15" required>
						</td>
                </tr>
				
                <tr>
                    <td> Email </td>

                    <td>
                        <input type="text" name="email" id="email" pattern="^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+" value="<?php echo $cv_email?>">
                    </td>
                </tr>
                <tr>
                    <td>Personal Website </td>
                    <td>
                        <input type="text" name="website" id="website" value="<?php echo $cv_website;?>">
                    </td>
                </tr>

                <tr>
                    <td>Write Your CV
                        <textarea type="text" name="cv" id="cv" rows="20" cols="20" value="<?php echo $cv_data;?>" style="height:400px;width:90%;"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="cv_personal_details" value="Save">
                    </td>
                </tr>
            </form>

        </table>

        <table border="2px solid black" style="width:80%;">
            <form method="post" action="../classes/student_cv_db.php" name="cv_education_detail" enctype="multipart/form-data">
                <tr>
                    <td>
                        <h3>Education Information</h3>
                    </td>
                </tr>
                <tr>
                    <td>School Name </td>
                    <td>
                        <INPUT TYPE="text" NAME="school_name" value="<?php echo $school_name ;?>">
                    </td>
                </tr>
                <tr>
                    <td>School Address </td>
                    <td>

                        <input type="text" ROWS="8" COLS="25" name="school_address" value="<?php echo $school_address;?>" style="height:110px;width:90%;">
                    </td>
                </tr>
                <tr>
                    <td>City</td>
                    <td>
                        <input type="text" name="school_city" value="<?php echo $school_city;?>"> </td>
                </tr>
                <tr>
                    <td>Region </td>
                    <td>
                        <input TYPE="text" NAME="school_region" value="<?php echo $school_region ;?>">
                    </td>
                </tr>

                <tr>


                    <td>Postal Code </td>
                    <td>
                        <input type="text" name="school_postalcode" value="<?php echo $school_postalcode;?>"> </td>
                </tr>
                <tr>
                    <td>when did you start school here?</td>

                    <td>
                        <select name="gcsc_school_start_month">
                            <option value="">Month</option>
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
                        <select name="gcsc_school_start_year">
                            <option value="">Year</option>
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
                    <td>what are you currently studying towards (select one)?</td>

                    <td>
                        <select name="currently_studying" id="currently_studying" onchange="inscheck(this.value);">
                            <option value="0">Please Select</option>
                            <option value="1">GCSEs</option>
                            <option value="2">A-Levels</option>
                            <option value="3">BTEC</option>
                        </select>
                    </td>
                </tr>

                <div class="gcses" id="gcses_id" style="display:none;">
                    <tr>
                        <td>GCSE summary: you can give here a short explanation of why you have selected the GCSEs below (optional)
                            <br>
                            <input type="text" name="gcse_summary" id="gcse_summary" style="width:80%;" placeholder="GCSEs Summary">
                        </td>
                    </tr>
                    <table border="2px solid black" style="width:40%;">
                        <tr>
                            <td>Subjects(s) </td>
                            <td>Expected Grade(s)</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="subject1" id="subject1" placeholder="Subject">
                            </td>
                            <td>
                                <input type="text" name="expected_grade1" id="expected_grade1" placeholder="Expected Grade">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="subject2" id="subject2" placeholder="Subject">
                            </td>
                            <td>
                                <input type="text" name="expected_grade2" id="expected_grade2" placeholder="Expected Grade">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="subject3" id="subject3" placeholder="Subject">
                            </td>
                            <td>
                                <input type="text" name="expected_grade3" id="expected_grade3" placeholder="Expected Grade">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="subject4" id="subject4" placeholder="Subject">
                            </td>
                            <td>
                                <input type="text" name="expected_grade4" id="expected_grade4" placeholder="Expected Grade">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="subject5" id="subject5" placeholder="Subject">
                            </td>
                            <td>
                                <input type="text" name="expected_grade5" id="expected_grade5" placeholder="Expected Grade">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="subject6" id="subject6" placeholder="Subject">
                            </td>
                            <td>
                                <input type="text" name="expected_grade6" id="expected_grade6" placeholder="Expected Grade">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="subject7" id="subject7" placeholder="Subject">
                            </td>
                            <td>
                                <input type="text" name="expected_grade7" id="expected_grade7" placeholder="Expected Grade">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="subject8" id="subject8" placeholder="Subject">
                            </td>
                            <td>
                                <input type="text" name="expected_grade8" id="expected_grade8" placeholder="Expected Grade">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="subject9" id="subject9" placeholder="Subject">
                            </td>
                            <td>
                                <input type="text" name="expected_grade9" id="expected_grade9" placeholder="Expected Grade">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="subject10" id="subject10" placeholder="Subject">
                            </td>
                            <td>
                                <input type="text" name="expected_grade10" id="expected_grade10" placeholder="Expected Grade">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="subject11" id="subject11" placeholder="Subject">
                            </td>
                            <td>
                                <input type="text" name="expected_grade11" id="expected_grade11" placeholder="Expected Grade">
                            </td>
                        </tr>
                    </table>

                </div>
                <div class="a-levels" id="a-levels" style="display:none;">
                    <tr>
                        <td>A-Levels summary: you can give here a short explanation of why you have selected the A-Levels below (optional)
                            <br>
                            <input type="text" name="alevels_summary" id="alevels_summary" style="width:80%;" placeholder="A- Levels Summary">
                        </td>
                    </tr>
                    <table border="2px solid black" style="width:40%;">

                        <tr>
                            <td>Complete the table below providing information about the subject you will be taking and your expected grades</td>
                        </tr>
                        <tr>
                            <td>Subjects(s) </td>
                            <td>Expected Grade(s)</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="alevel_subject1" id="alevel_subject1" placeholder="Subject">
                            </td>
                            <td>
                                <input type="text" name="alevel_expected_grade1" id="alevel_expected_grade1" placeholder="Expected Grade">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="alevel_subject2" id="alevel_subject2" placeholder="Subject">
                            </td>
                            <td>
                                <input type="text" name="alevel_expected_grade2" id="alevel_expected_grade2" placeholder="Expected Grade">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="alevel_subject3" id="alevel_subject3" placeholder="Subject">
                            </td>
                            <td>
                                <input type="text" name="alevel_expected_grade3" id="alevel_expected_grade3" placeholder="Expected Grade">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="alevel_subject4" id="alevel_subject4" placeholder="Subject">
                            </td>
                            <td>
                                <input type="text" name="alevel_expected_grade4" id="alevel_expected_grade4" placeholder="Expected Grade">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="alevel_subject5" id="alevel_subject5" placeholder="Subject">
                            </td>
                            <td>
                                <input type="text" name="alevel_expected_grade5" id="alevel_expected_grade5" placeholder="Expected Grade">
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
                                <input type="text" name="subject1" id="subject1" placeholder="Subject">
                            </td>
                            <td>
                                <input type="text" name="expected_grade1" id="expected_grade1" placeholder="Expected Grade">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="subject2" id="subject2" placeholder="Subject">
                            </td>
                            <td>
                                <input type="text" name="expected_grade2" id="expected_grade2" placeholder="Expected Grade">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="subject3" id="subject3" placeholder="Subject">
                            </td>
                            <td>
                                <input type="text" name="expected_grade3" id="expected_grade3" placeholder="Expected Grade">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="subject4" id="subject4" placeholder="Subject">
                            </td>
                            <td>
                                <input type="text" name="expected_grade4" id="expected_grade4" placeholder="Expected Grade">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="subject5" id="subject5" placeholder="Subject">
                            </td>
                            <td>
                                <input type="text" name="expected_grade5" id="expected_grade5" placeholder="Expected Grade">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="subject6" id="subject6" placeholder="Subject">
                            </td>
                            <td>
                                <input type="text" name="expected_grade6" id="expected_grade6" placeholder="Expected Grade">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="subject7" id="subject7" placeholder="Subject">
                            </td>
                            <td>
                                <input type="text" name="expected_grade7" id="expected_grade7" placeholder="Expected Grade">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="subject8" id="subject8" placeholder="Subject">
                            </td>
                            <td>
                                <input type="text" name="expected_grade8" id="expected_grade8" placeholder="Expected Grade">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="subject9" id="subject9" placeholder="Subject">
                            </td>
                            <td>
                                <input type="text" name="expected_grade9" id="expected_grade9" placeholder="Expected Grade">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="subject10" id="subject10" placeholder="Subject">
                            </td>
                            <td>
                                <input type="text" name="expected_grade10" id="expected_grade10" placeholder="Expected Grade">
                            </td>
                        </tr>
                        <tr>
                            <td>Did you do your GCSEs at the same school?</td>

                            <td>
                                <select name="select_school_same" id="select_school_same" onchange="school_update(this.value);">
                                    <option value="0">Please Select</option>
                                    <option value="1">Yes</option>
                                    <option value="2">No</option>
                                </select>

                            </td>
                        </tr>
                        <div class="new_school_same" id="new_school_same" style="display:none;">
                            <tr>
                                <td>School Name </td>
                                <td>
                                    <INPUT TYPE="text" NAME="other_school_name" >
                                </td>
                            </tr>
                            <tr>
                                <td>School Address </td>
                                <td>

                                    <input type="text" ROWS="8" COLS="25" name="other_school_address"  style="height:110px;width:90%;">
                                </td>
                            </tr>
                            <tr>
                                <td>City</td>
                                <td>
                                    <input type="text" name="other_school_city"  </td>
                            </tr>
                            <tr>
                                <td>Region </td>
                                <td>
                                    <input TYPE="text" NAME="other_school_region" >
                                </td>
                            </tr>

                            <tr>


                                <td>Postal Code </td>
                                <td>
                                    <input type="text" name="other_school_postalcode"  </td>
                            </tr>
                            <tr>
                                <td>when did you start school here?</td>

                                <td>
                                    <select name="other_school_start_month">
                                        <option value="">Month</option>
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
                                    <select name="other_school_start_year">
                                        <option value="">Year</option>
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
                                <td>when did you leave this school?</td>

                                <td>
                                    <select name="other_school_end_month">
                                        <option value="">Month</option>
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
                                    <select name="other_school_end_year">
                                        <option value="">Year</option>
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

                <tr>
                  
                       <td> <input type="submit" name="cv_education_detail" value="Save"></td>
                   
                </tr>
            </form>

        </table>
        <table border="2px solid black" style="width:90%;">
           
            <form method="post" action="../classes/student_cv_db.php" name="intrest" enctype="multipart/form-data">
                <tr>
                    <td>
                        <h3>Achievements & Interests</h3>
                    </td>
                </tr>
                <tr><td>Achievements</td><td><input type="text" name="Achievement1" id="Achievement1" placeholder="Achievement1" value="<?php echo $achiv1;?>"></td>
                	<td><input type="text" name="Achievement2" id="Achievement2" placeholder="Achievement2" value="<?php echo $achiv2;?>"></td>
					<td><input type="text" name="Achievement3" id="Achievement3" placeholder="Achievement3" value="<?php echo $achiv3;?>"></td>
					<td><input type="text" name="Achievement4" id="Achievement4" placeholder="Achievement4" value="<?php echo $achiv4;?>"></td>
                </tr>
				 <tr><td>Interests</td><td><input type="text" name="Interest1" id="Interest1" placeholder="Interest1" value="<?php echo $intr1;?>"></td>
                	<td><input type="text" name="Interest2" id="Interest2" placeholder="Interest2" value="<?php echo $intr2;?>"></td>
					<td><input type="text" name="Interest3" id="Interest3" placeholder="Interest3" value="<?php echo $intr3;?>"></td>
					<td><input type="text" name="Interest4" id="Interest4" placeholder="Interest4" value="<?php echo $intr4;?>"></td>
                </tr>
                <tr><td><input type="submit" name="achive_intrest" value="Save" ></td></tr>
                </form>
         </table>
        
     <table border="2px solid black" style="width:90%;">
           
            <form method="post" action="../classes/student_cv_db.php" name="media_upload" enctype="multipart/form-data">
                <tr>
                    <td>
                        <h3>Media</h3>
                    </td>
                </tr>
                <tr><td>Select A File</td><td><input type="file" name="video" id="video" required></td></tr>
                <tr><td><input type="submit" name="video_upload" value="Upload" ></td></tr>
                </form>
         </table>
        
    </table>
</body>

</html>