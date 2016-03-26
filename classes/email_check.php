<?php
include('connection.php');
session_start();
$first=mysql_real_escape_string($_REQUEST["first"]);
$result=mysql_query("SELECT * FROM login WHERE email='$first';");
if ($result){
    
  if ($result && mysql_num_rows($result)>0) {
    if($row = mysql_fetch_array($result)){ 
		
		
		}
	  echo "Email Already Exists ";
	}
	
  }

?>