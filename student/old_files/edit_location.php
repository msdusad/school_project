
<?php
include('../classes/connection.php');	
$userid=$_GET['userid'];
$crtime=$_GET['crt_time'];

$sql=mysql_query("select * from employer_location where userid='$userid' and create_time='$crtime' ");
if($sql){
if($row=mysql_fetch_array($sql)){

		$company_name=$row['company_name'];
			$loc_adress= $row['location_address'];
	$typ_ofloc= $row['type_of_location'];
			$loc_city=$row['location_city'];
			 $loc_name=$row['location_name'];
			$cont_title=$row['contact_title'];
            $fname=$row['contact_first_name'];
              $lname=$row['contact_last_name'];
			$tel_no=$row['contact_telephone'];
			 $email= $row['conatct_email'];	
	$loc_postcode=$row['location_postal_code'];
 }
	
}
else{echo "error in query pass sql".mysql_error();}

?>
<html>
    <head>
        <script type="text/javascript" src="../js/validation.js"></script>
    </head>
    
    <body>
		<a href="employer_profile.php">Home</a>
		<br><a href="../classes/logout.php">Logout</a>
        <form action="../classes/employer_edit_save.php?user=<?php echo $userid ;?>&tm=<?php echo $crtime ;?>" method="post">
            <table border="2px solid black" style="width:90%;">
              <tr><td><h3>Create Location</h3></td></tr>
                <tr><td>Company Name</td><td><input type="text" name="company_name" value="<?php echo $company_name; ?>" required></td></tr>
                <tr><td>Type of Location </td><td><select name="type_of_location" required>
                    <option ><?php echo $typ_ofloc;?></option>
                    <option>Department</option>
                        <option>Branch</option>
                        <option>Subsidiary</option>
                </select></td></tr>
                 <tr><td>Location Name</td><td><input type="text" name="location_name" value="<?php echo $loc_name; ?>" required></td></tr>
            <tr><td>Contact Person</td> <td><select name="contact_title"  required>
                    <option ><?php echo $cont_title; ?></option>
                    <option>Mr</option>
                        <option>Mrs</option>
                        <option>Miss</option>
                </select></td>
                	
                <td><input type="text" name="contact_first_name" placeholder="First Name" value="<?php echo $fname; ?>" required></td><td><input type="text" name="contact_last_name" placeholder="Last Name" value="<?php echo $lname; ?>"></td></tr> 
             
            <tr><td>Contact Email</td><td><input type="text" name="contact_email" pattern="^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+" value="<?php echo $email; ?>" required></td></tr>
                <tr><td>Contact Telephone</td><td><input type="text" name="contact_telephone"  maxlength="15" value="<?php echo $tel_no; ?>" onkeypress="return isNumberKey(event)"  required></td></tr>
                <tr><td>Location Address</td><td><input type="text" name="location_address" value="<?php echo $loc_adress; ?>" required></td></tr>
                <tr><td>Location City </td><td><input type="text" name="locatiom_city" value="<?php echo $loc_city; ?>" required></td></tr>
                <tr><td>Location PostalCode</td><td><input type="text" name="location_postal_code" value="<?php echo $loc_postcode; ?>" required></td></tr>
                <tr><td><input type="submit" name="update_employer_location" value="Update Location"></td><td><input type="submit" name="location_cancel" value="Cancel" onclick="history.go(-1);"></td></tr>
                
                </table>
                    
                </form>
        
    </body>
</html>