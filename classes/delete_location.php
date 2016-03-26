<?php
include('connection.php');
$userid=$_GET['user'];
$time=$_GET['crt_time'];


$deletelocation=mysql_query("delete from employer_location where userid='$userid' && create_time='$time'");

if($deletelocation){
	
	//echo "location deleted";
	echo "<script>window.location='../employer/employer_locations.php'</script>";

}

else{
echo "Error in Location Delete".mysql_error();
}


?>