<?php
include('connection.php');
session_start();
$var=$_GET['status'];
if($var=='false' || $var==''){
	$update_status='true';
}
if($var=='true'){
	$update_status='false';
}

	$userid=$_GET['userid'];
$query=mysql_query("update login set account_status='$update_status' where userid='$userid';");
if($query){
echo "<script type='text/javascript'>alert('Account Status Changed Success');window.history.back();</script>";
}
else{
if($query){
echo "<script type='text/javascript'>alert('Account Status Not  Changed Success');window.history.back();</script>";
}
}
?>