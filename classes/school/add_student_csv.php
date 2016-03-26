<?php
if(isset($_POST['add_csv_student'])){
	include('../connection.php');
session_start();
	
	  if($_FILES['csv_file']['name']!=''){ 
		 $logo="csv/".$_FILES['csv_file']['name'];
	move_uploaded_file($_FILES['csv_file']['tmp_name'],$logo);
         $csv_file ="csv/".$_FILES['csv_file']['name'];
	   }

if (($handle = fopen($csv_file, "r")) !== FALSE) {
   fgetcsv($handle);   
   while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        for ($c=0; $c < $num; $c++) {
          $col[$c] = $data[$c];
        }
 $col1 = mysql_real_escape_string($col[0]);
 $col2 = mysql_real_escape_string($col[1]);
 $col3 = mysql_real_escape_string($col[2]);
 $col4 = mysql_real_escape_string($col[3]);
 $col5 = mysql_real_escape_string($col[4]);
 $col6 = mysql_real_escape_string($col[5]);
	   
   
// SQL Query to insert data into DataBase
$query = "INSERT INTO add_student(userid,first_name,last_name,current_form,gender,email) VALUES('$col1','$col2','$col3','$col4','$col5','$col6')";
$s = mysql_query($query);
	   if($s){
		   header("Location:../../schools/manage_students.php");
	  // echo "Query Sucssfuully Run<br>";
	   }
	   else{
	   echo "Query Not Sucss Run";
	   }
	   
 }
    fclose($handle);
}
	
	else{
	echo "File not Found";
	}

echo "File data successfully imported to database!!";
	
}
?>