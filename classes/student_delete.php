<?php
include('connection.php');
$stdid=$_GET['stduserid'];
$qry=mysql_query("delete from student_profile where userid='$stdid';");
$qry=mysql_query("delete from student_school where userid='$stdid';");
$qry=mysql_query("delete from student_preferences where userid='$stdid';");
$qry=mysql_query("delete from student_cv where userid='$stdid';");
$qry=mysql_query("delete from student_achievements where userid='$stdid';");
if($qry){
	
	echo "<script>window.location='../admin/manage_students.php'</script>";

}


else{
echo "Error in empoyer Delete".mysql_error();
}


?>