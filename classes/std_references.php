<?php 
include('connection.php');
session_start();
 $current_userid= $_SESSION['studentuserid'];
if(isset($_POST['std_ref'])){
	
	$from=mysql_real_escape_string($_POST['ref_from']);
	
	$path="../student/ref_docs/".$_FILES['doc_file']['name'];
	move_uploaded_file($_FILES['doc_file']['tmp_name'],$path);
	$doc=$_FILES['doc_file']['name'];
$query=mysql_query("insert into std_references (username,ref_from,documents,add_time) values ('$current_userid','$from','$doc',now());");
	
if($query){
  echo '<script type="text/javascript">window.location ="../student/std_mng_reference.php";</script>';
}
	else{
		//echo mysql_error();
	echo 'Error in Add Reference <script type="text/javascript">window.location ="../student/std_mng_reference.php?error";</script>';
	}
	
}
?>