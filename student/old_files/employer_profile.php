 
<?php include('../classes/employer_fetched_data.php');
?>
<html>

<head>
    <script type="text/javascript" src="../js/validation.js"></script>
    <script>
        $(document).ready(function() {
            $("#cmt").datepicker();
        });
    </script>
    <style>
    </style>
</head>

<body>
	<a href="manage_vacancy.php">Manage Vacancy</a><br>
	<a href="create_vacancy.php">Create Vacancy</a><br>
	<a href="employer_locations.php">Manage Location</a><br>
    <a href="create_location.php">Create Location</a><br> 
    <a href="manage_application.php">Manage Applications</a><br>
	   <a href="employer_profile.php">Employer Profile</a><br>
	<a href="../classes/logout.php">Logout</a><br>
    <div class="main">
        <div class="employer-registration">
            <table border="2px solid black" style="width:99%;">
                <table border="2px solid black" style="width:50%;">
                    <form action="../classes/employer_edit_save.php" method="post" enctype="multipart/form-data" name="employee_registration" onsubmit="return employee_registration_validitaion();">
                          <tr>
                        <td >
                            <h3>Employer Profile</h3>
                        </td>
                    </tr>

                    <tr>
                        <td>Company Name </td><td>
                            <INPUT TYPE="text" NAME="company_name" value="<?php echo $company_name ;?>">
                        </td>
                        </tr>
                        <tr>
                        <td>Company Address </td><td>
                        
                            <input type="text" ROWS="8" COLS="25" name="company_address" value="<?php echo $company_address;?>" style="height:110px;width:90%;"> 
                        </td>
                    </tr>
                        <tr>
                          <td>City</td><td>
                                    <input type="text" name="company_city" value="<?php echo $company_city;?>"> </td>
                            </tr>
                            <tr>
                        <td>Postal Code </td><td>
                            <input type="text" name="company_postal_code" value="<?php echo $company_postal_code;?>"> </td>
                    </tr>
                        <tr><td>Logo<br><br><img height="140" width="300" src="logo/<?php echo $logo;?>"><input type="text" name="old_logo" value="<?php echo $logo;?>" style="display:none;"></td>
                            
                        </tr>
                        <tr><td>Company Logo <input type="file" name="logo" id="logo"></td></tr>
                    <tr>
                        <td> Website </td><td>
                            <input type="text" name="company_website"  value="<?php echo $company_website;?>">
                        </td>
                    </tr>
                        
                          <tr>
                        <td>Main Telephone </td><td>
                            <input type="text" name="company_telephone"  value="<?php echo $company_telephone;?>"> </td>
                    </tr>
                    <tr><td><input type="submit" name="employer_edit" value="Save"></td><td><input type="submit" value="Cancel"></td></tr>
                 
                </form>
                </table>

                </table>

            </div>

        </div>

</body>

</html>