<?php
session_start();
if(!isset($_SESSION['studentuserid']))
{
	header("location:index.php");
}
include('../classes/connection.php');
$user=$_SESSION['studentuserid'];
//code for download file 10th document             
                    //$table=$_GET['lin'];
            $result=mysql_query("select cv_file from student_cv where userid='$user';");
if($result){
              if ($result && mysql_num_rows($result)>0) {
    while($row = mysql_fetch_array($result)){ 
                      
       // $type=$row['type'];
        $name=$row['cv_file'];
         if($name==""){    
             echo "<script type='text/javascript'>alert('No file found');window.location.href='add_cv.php';</script>;";
         }
        else{
  if(file_exists('student_docs/cv/'.$name)){
      header("Content-type: ".filetype('student_docs/cv/'.$name));
        header('Content-disposition: attachment; filename="'.$name.'"');
        echo file_get_contents('student_docs/cv/'.$name);
        exit; }
             
    /*   $sr="upload/".$name;
        $file = fopen($sr, 'w+');
echo fwrite($file, $sr);
fclose($file);*/
    }
    }
             }
                 
}
else{ echo "error in query pass".mysql_error();}

?>