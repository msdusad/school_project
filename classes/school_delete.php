<?php
include('connection.php');
$empid=$_GET['schluserid'];
$qry=mysql_query("delete from school_registration where userid='$empid';");
//$qry=mysql_query("delete from school_location where userid='$empid';");
if($qry){
	
	echo "<script>window.location='../admin/manage_schools.php'</script>";

}


else{
echo "Error in empoyer Delete".mysql_error();
}


?>