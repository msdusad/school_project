<html>
    <head>
        <script type="text/javascript" src="../js/validation.js"></script>
		<script>
	function restform(){
	document.getElementById("create_location").reset();
		return false;
	}
	
</script>
    </head>
    
    <body>
		<a href="employer_profile.php">Home</a>
		<br><a href="../classes/logout.php">Logout</a>
        <form action="../classes/employer_edit_save.php" id="create_location" method="post">
            <table border="2px solid black" style="width:90%;">
              <tr><td><h3>Create Location</h3></td></tr>
                <tr><td>Company Name</td><td><input type="text" name="company_name" required></td></tr>
                <tr><td>Type of Location </td><td><select name="type_of_location" required>
                    <option value="">Please Select</option>
                    <option>Department</option>
                        <option>Branch</option>
                        <option>Subsidiary</option>
                </select></td></tr>
                 <tr><td>Location Name</td><td><input type="text" name="location_name" required></td></tr>
            <tr><td>Contact Person</td> <td><select name="contact_title" required>
                    
                    <option value="">Please Select</option>
                    <option>Mr</option>
                        <option>Mrs</option>
                        <option>Miss</option>
                </select><input type="text" name="contact_first_name" placeholder="First Name" required></td><td><input type="text" name="contact_last_name" placeholder="Last Name"></td></tr> 
             
            <tr><td>Contact Email</td><td><input type="text" name="contact_email" pattern="^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+" required></td></tr>
                <tr><td>Contact Telephone</td><td><input type="text" name="contact_telephone"  maxlength="15" onkeypress="return isNumberKey(event)" required></td></tr>
                <tr><td>Location Address</td><td><input type="text" name="location_address" required></td></tr>
                <tr><td>Location City </td><td><input type="text" name="locatiom_city" required></td></tr>
                <tr><td>Location Postal Code</td><td><input type="text" name="location_postal_code" required></td></tr>
                <tr><td><input type="submit" name="employer_location" value="Create Location & Invite Contact"></td><td><input type="submit" name="location_cancel" value="Cancel" onclick="return restform();"></td></tr>
                
                </table>
                    
                </form>
        
    </body>
</html>