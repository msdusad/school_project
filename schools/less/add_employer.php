<?php include('schoolheader.php'); 

?>

<head>
<script type="text/javascript" src="../js/validation.js"></script>
<script>
	function restform(){
	document.getElementById("add_employer").reset();
		return false;
	}
	
</script>

</head>
<div class="col-xs-12 col-sm-12 col-md-9">

<div class="row" id="add_employer-form" id="school_add_employer">
<div class="col-xs-12 col-sm-12 col-md-12">
<br>
<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="">
			<h2><i class="glyphicon glyphicon-plus-sign"></i> Welcome to Add Employee</h2>

	</div>
</div>
<br>
<div class="row">

		<div class="col-md-8 empDbTitle">
			<a href='schooldashboard.php'><i class="fa fa-dashboard"></i> Dashboard</a>
		</div>

		<div class="col-md-4 empDbDateStrip">
			<span><i class="fa fa-calendar"></i><?php echo " ".$viewdashdate;?></span>
		</div>

	</div>	
<form action="../classes/school_profile_db.php" id="add_employer" method="post" enctype="multipart/form-data">
<br>
 <div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="">
			<h3><i class="glyphicon glyphicon-plus-sign"></i> Add Employee</h3>
			<a href="employer_csv_upload.php" class="btn btn-primary" style="margin-left:50%;">CSV File Upload</a>
		</div>
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>	 

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>Company Name</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input type="text" name="company_name" id="company_name" required>
		</div>
	</div>
</div>	
    
<hr style="border-top:1px dashed lightgray;"/>
    
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>Company Address</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<textarea type="text" name="company_address" id="company_address" rows="5" cols="15" required></textarea>
		</div>
	</div>
</div>
 
<hr style="border-top:1px dashed lightgray;"/>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>City</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input type="text" name="company_city" id="company_city" required>
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>Postal Code</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input type="text" name="company_postal_code" id="company_postal_code" required>
		</div>
	</div>
</div>   

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>Country</label>
		</div>
	</div>


<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<select name="company_country" class="btn btn-primary">
    <option value="826">United Kingdom</option>
	<option value="4">Afghanistan</option>
	<option value="248">Åland Islands</option>
	<option value="8">Albania</option>
	<option value="12">Algeria</option>
	<option value="16">American Samoa</option>
	<option value="20">Andorra</option>
	<option value="24">Angola</option>
	<option value="660">Anguilla</option>
	<option value="10">Antarctica</option>
	<option value="28">Antigua and Barbuda</option>
	<option value="32">Argentina</option>
	<option value="51">Armenia</option>
	<option value="533">Aruba</option>
	<option value="36">Australia</option>
	<option value="40">Austria</option>
	<option value="31">Azerbaijan</option>
	<option value="44">Bahamas</option>
	<option value="48">Bahrain</option>
	<option value="50">Bangladesh</option>
	<option value="52">Barbados</option>
	<option value="112">Belarus</option>
	<option value="56">Belgium</option>
	<option value="84">Belize</option>
	<option value="204">Benin</option>
	<option value="60">Bermuda</option>
	<option value="64">Bhutan</option>
	<option value="68">Bolivia, Plurinational State of</option>
	<option value="535">Bonaire, Sint Eustatius and Saba</option>
	<option value="70">Bosnia and Herzegovina</option>
	<option value="72">Botswana</option>
	<option value="74">Bouvet Island</option>
	<option value="76">Brazil</option>
	<option value="86">British Indian Ocean Territory</option>
	<option value="96">Brunei Darussalam</option>
	<option value="100">Bulgaria</option>
	<option value="854">Burkina Faso</option>
	<option value="108">Burundi</option>
	<option value="116">Cambodia</option>
	<option value="120">Cameroon</option>
	<option value="124">Canada</option>
	<option value="132">Cape Verde</option>
	<option value="136">Cayman Islands</option>
	<option value="140">Central African Republic</option>
	<option value="148">Chad</option>
	<option value="152">Chile</option>
	<option value="156">China</option>
	<option value="162">Christmas Island</option>
	<option value="166">Cocos (Keeling) Islands</option>
	<option value="170">Colombia</option>
	<option value="174">Comoros</option>
	<option value="178">Congo</option>
	<option value="180">Congo, the Democratic Republic of the</option>
	<option value="184">Cook Islands</option>
	<option value="188">Costa Rica</option>
	<option value="384">Côte d'Ivoire</option>
	<option value="191">Croatia</option>
	<option value="192">Cuba</option>
	<option value="531">Curaçao</option>
	<option value="196">Cyprus</option>
	<option value="203">Czech Republic</option>
	<option value="208">Denmark</option>
	<option value="262">Djibouti</option>
	<option value="212">Dominica</option>
	<option value="214">Dominican Republic</option>
	<option value="218">Ecuador</option>
	<option value="818">Egypt</option>
	<option value="222">El Salvador</option>
	<option value="226">Equatorial Guinea</option>
	<option value="232">Eritrea</option>
	<option value="233">Estonia</option>
	<option value="231">Ethiopia</option>
	<option value="238">Falkland Islands (Malvinas)</option>
	<option value="234">Faroe Islands</option>
	<option value="242">Fiji</option>
	<option value="246">Finland</option>
	<option value="250">France</option>
	<option value="254">French Guiana</option>
	<option value="258">French Polynesia</option>
	<option value="260">French Southern Territories</option>
	<option value="266">Gabon</option>
	<option value="270">Gambia</option>
	<option value="268">Georgia</option>
	<option value="276">Germany</option>
	<option value="288">Ghana</option>
	<option value="292">Gibraltar</option>
	<option value="300">Greece</option>
	<option value="304">Greenland</option>
	<option value="308">Grenada</option>
	<option value="312">Guadeloupe</option>
	<option value="316">Guam</option>
	<option value="320">Guatemala</option>
	<option value="831">Guernsey</option>
	<option value="324">Guinea</option>
	<option value="624">Guinea-Bissau</option>
	<option value="328">Guyana</option>
	<option value="332">Haiti</option>
	<option value="334">Heard Island and McDonald Islands</option>
	<option value="336">Holy See (Vatican City State)</option>
	<option value="340">Honduras</option>
	<option value="344">Hong Kong</option>
	<option value="348">Hungary</option>
	<option value="352">Iceland</option>
	<option value="356">India</option>
	<option value="360">Indonesia</option>
	<option value="364">Iran, Islamic Republic of</option>
	<option value="368">Iraq</option>
	<option value="372">Ireland</option>
	<option value="833">Isle of Man</option>
	<option value="376">Israel</option>
	<option value="380">Italy</option>
	<option value="388">Jamaica</option>
	<option value="392">Japan</option>
	<option value="832">Jersey</option>
	<option value="400">Jordan</option>
	<option value="398">Kazakhstan</option>
	<option value="404">Kenya</option>
	<option value="296">Kiribati</option>
	<option value="408">Korea, Democratic People's Republic of</option>
	<option value="410">Korea, Republic of</option>
	<option value="414">Kuwait</option>
	<option value="417">Kyrgyzstan</option>
	<option value="418">Lao People's Democratic Republic</option>
	<option value="428">Latvia</option>
	<option value="422">Lebanon</option>
	<option value="426">Lesotho</option>
	<option value="430">Liberia</option>
	<option value="434">Libya</option>
	<option value="438">Liechtenstein</option>
	<option value="440">Lithuania</option>
	<option value="442">Luxembourg</option>
	<option value="446">Macao</option>
	<option value="807">Macedonia, the former Yugoslav Republic of</option>
	<option value="450">Madagascar</option>
	<option value="454">Malawi</option>
	<option value="458">Malaysia</option>
	<option value="462">Maldives</option>
	<option value="466">Mali</option>
	<option value="470">Malta</option>
	<option value="584">Marshall Islands</option>
	<option value="474">Martinique</option>
	<option value="478">Mauritania</option>
	<option value="480">Mauritius</option>
	<option value="175">Mayotte</option>
	<option value="484">Mexico</option>
	<option value="583">Micronesia, Federated States of</option>
	<option value="498">Moldova, Republic of</option>
	<option value="492">Monaco</option>
	<option value="496">Mongolia</option>
	<option value="499">Montenegro</option>
	<option value="500">Montserrat</option>
	<option value="504">Morocco</option>
	<option value="508">Mozambique</option>
	<option value="104">Myanmar</option>
	<option value="516">Namibia</option>
	<option value="520">Nauru</option>
	<option value="524">Nepal</option>
	<option value="528">Netherlands</option>
	<option value="540">New Caledonia</option>
	<option value="554">New Zealand</option>
	<option value="558">Nicaragua</option>
	<option value="562">Niger</option>
	<option value="566">Nigeria</option>
	<option value="570">Niue</option>
	<option value="574">Norfolk Island</option>
	<option value="580">Northern Mariana Islands</option>
	<option value="578">Norway</option>
	<option value="512">Oman</option>
	<option value="586">Pakistan</option>
	<option value="585">Palau</option>
	<option value="275">Palestinian Territory, Occupied</option>
	<option value="591">Panama</option>
	<option value="598">Papua New Guinea</option>
	<option value="600">Paraguay</option>
	<option value="604">Peru</option>
	<option value="608">Philippines</option>
	<option value="612">Pitcairn</option>
	<option value="616">Poland</option>
	<option value="620">Portugal</option>
	<option value="630">Puerto Rico</option>
	<option value="634">Qatar</option>
	<option value="638">Réunion</option>
	<option value="642">Romania</option>
	<option value="643">Russian Federation</option>
	<option value="646">Rwanda</option>
	<option value="652">Saint Barthélemy</option>
	<option value="654">Saint Helena, Ascension and Tristan da Cunha</option>
	<option value="659">Saint Kitts and Nevis</option>
	<option value="662">Saint Lucia</option>
	<option value="663">Saint Martin (French part)</option>
	<option value="666">Saint Pierre and Miquelon</option>
	<option value="670">Saint Vincent and the Grenadines</option>
	<option value="882">Samoa</option>
	<option value="674">San Marino</option>
	<option value="678">Sao Tome and Principe</option>
	<option value="682">Saudi Arabia</option>
	<option value="686">Senegal</option>
	<option value="688">Serbia</option>
	<option value="690">Seychelles</option>
	<option value="694">Sierra Leone</option>
	<option value="702">Singapore</option>
	<option value="534">Sint Maarten (Dutch part)</option>
	<option value="703">Slovakia</option>
	<option value="705">Slovenia</option>
	<option value="90">Solomon Islands</option>
	<option value="706">Somalia</option>
	<option value="710">South Africa</option>
	<option value="239">South Georgia and the South Sandwich Islands</option>
	<option value="728">South Sudan</option>
	<option value="724">Spain</option>
	<option value="144">Sri Lanka</option>
	<option value="729">Sudan</option>
	<option value="740">Suriname</option>
	<option value="744">Svalbard and Jan Mayen</option>
	<option value="748">Swaziland</option>
	<option value="752">Sweden</option>
	<option value="756">Switzerland</option>
	<option value="760">Syrian Arab Republic</option>
	<option value="158">Taiwan, Province of China</option>
	<option value="762">Tajikistan</option>
	<option value="834">Tanzania, United Republic of</option>
	<option value="764">Thailand</option>
	<option value="626">Timor-Leste</option>
	<option value="768">Togo</option>
	<option value="772">Tokelau</option>
	<option value="776">Tonga</option>
	<option value="780">Trinidad and Tobago</option>
	<option value="788">Tunisia</option>
	<option value="792">Turkey</option>
	<option value="795">Turkmenistan</option>
	<option value="796">Turks and Caicos Islands</option>
	<option value="798">Tuvalu</option>
	<option value="800">Uganda</option>
	<option value="804">Ukraine</option>
	<option value="784">United Arab Emirates</option>
	<option value="840">United States</option>
	<option value="581">United States Minor Outlying Islands</option>
	<option value="858">Uruguay</option>
	<option value="860">Uzbekistan</option>
	<option value="548">Vanuatu</option>
	<option value="862">Venezuela, Bolivarian Republic of</option>
	<option value="704">Viet Nam</option>
	<option value="92">Virgin Islands, British</option>
	<option value="850">Virgin Islands, U.S.</option>
	<option value="876">Wallis and Futuna</option>
	<option value="732">Western Sahara</option>
	<option value="887">Yemen</option>
	<option value="894">Zambia</option>
	<option value="716">Zimbabwe</option>
</select>
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>
    
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>Website</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input type="text" name="company_website" id="company_website" required>
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

 <div class="row">
	<div class="col-xs-12 col-sm-12 col-md-2">
		<div class="">
			<label>First Name</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-4">
		<div class="">
			<select name="company_sir_title" id="company_sir_title" class="btn btn-primary" required>
				<option value="" class="btn btn-primary">Please Select</option>
				<option>Mrs</option>
				<option>Mr</option>
				<option>Miss</option>
				<option>Ms</option>
			</select>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input type="text" name="company_f_name" id="company_f_name"  required>
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>Last Name</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input type="text" name="company_l_name" id="company_l_name" required>
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>
	
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>Job Title</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input type="text" name="company_title" id="company_title" required>
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<label>Email</label>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input type="text" name="company_email" id="company_email" pattern="^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+"  required>
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-2">
		<div class="">
			<label>Telephone</label>
		</div>
	</div>				
	<div class="col-xs-12 col-sm-12 col-md-4">
		<div class="">
			<select name="country_code" class="btn btn-primary">
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
						<option value="+44" selected="1">United Kingdom (+44)</option>
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
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input type="text" name="company_telephone" id="company_telephone" onkeypress="return isNumberKey(event)" maxlength="15" required >
		</div>
	</div>
</div>

<hr style="border-top:1px dashed lightgray;"/>
	
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input class="btn btn-primary" type="submit" name="add_employer" value="Add Employer & Send Invitation" >
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="">
			<input type="submit" value="Cancel" onclick="return restform();" class="btn btn-danger">
		</div>
	</div>
</div>
   
</form>
<hr style="border-top:1px dashed lightgray;"/>
</div>
</div>

<?php include( 'schoolfooter.php'); ?>