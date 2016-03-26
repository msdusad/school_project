<html>
    <head>
        	<script>
	function restform(){
	document.getElementById("create_vacancy").reset();
		return false;
	}
	
</script>
    </head>
    
    <body>
		<a href="employer_profile.php">Home</a>
		<br><a href="../classes/logout.php">Logout</a>
        <form action="../classes/employer_edit_save.php" id="create_vacancy" method="post">
            <table border="2px solid black" style="width:90%;">
              <tr><td><h3>Create Vacancy</h3></td></tr>
               <tr><td>Vacancy Title</td><td><input type="text" name="vacancy_title" id="vacancy_title" required></td></tr> 
                 <tr><td>Location</td><td>
                     <select name="vacancy_location" required>
                         <option value="">Please Select</option>
                         <option>Solihull Branch</option>
                         <option>Worcester Branch</option>
                     </select>
                 </td></tr> 
                 <tr><td>Description</td><td><input type="text" name="vacancy_description" id="description" style="width:90%" required></td></tr>
                <tr><td>Number of Places</td><td><select name="number_places" required>
                    <option value="">Please Select</option>
                    <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                </select></td></tr>
                
                
                 <tr><td>Duration</td><td><select name="duration" required>
                    <option value="">Please Select</option>
                    <option>1 Week</option>
                      <option>2 Weeks</option>
                      <option>3 Weeks</option>
                </select></td></tr>
                <tr><td>Available From</td><td><input type="text" name="from_date1" placeholder="From Date 1" required></td><td><input type="text" name="from_date2" placeholder="From Date 2"></td><td><input type="text" name="from_date3" placeholder="From Date 3"></td></tr>
                 <tr><td>Available To</td><td><input type="text" name="to_date1" placeholder="To Date 1" required></td><td><input type="text" name="to_date2" placeholder="To Date 2"></td><td><input type="text" name="to_date3" placeholder="To Date 3"></td></tr>
                <tr><td><h3>Restrictions</h3></td></tr>
                <tr><td>Gender</td><td><select name="restriction_gender" required> 
					 <option value="">Please Select</option>
                <option>Any</option>
                <option>Male Candidates Only</option>
                  <option>Female Candidates Only</option>
                </select></td></tr>
                
                
                   <tr><td>Schooling Level</td><td><select name="schooling_level" required> 
                         <option value="">Please Select</option>
					   <option>Any</option>
                <option>GCSE students only</option>
                  <option>A-Levels students only</option>
                </select></td></tr>
                <tr><td>School (leave blank if this vacancy is available to any school)</td><td><input type="text" name="selected_school_name"></td></tr>
                <tr><td><input type="submit" name="create_vacancy" value="Create Vacancy">&nbsp;&nbsp;<input type="submit" name="create_vacancy_cancel" value="Cancel" onclick="return restform();"></td></tr>
            </table>
            
            
        </form>
        
    </body>
    
</html>