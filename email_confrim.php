<?php

if(isset($_GET['userid'])){
	include('classes/connection.php');
	$userid=$_GET['userid'];
	
	$sql=mysql_query("update login set email_confirmation='true' where userid='$userid'");
	if($sql){
	header("Location:index.php");
	}
else{

echo "Error in Email Confrmation".mysql_error();
}


}

?>