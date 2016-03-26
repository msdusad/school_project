<?php
include('connection.php');
$empid=$_GET['empuserid'];
$qry=mysql_query("delete from employer_registration where userid='$empid';");
$qry=mysql_query("delete from employer_location where userid='$empid';");
if($qry){
	
	echo "<script>window.location='../admin/manage_employers.php'</script>";

}


else{
echo "Error in empoyer Delete".mysql_error();
}


?>