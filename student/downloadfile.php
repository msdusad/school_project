<?php
include('../classes/connection.php');
session_start();

if(isset($_GET['cruser']) && ($_GET['time'])){
$user=$_GET['cruser'];
$time=$_GET['time'];
                    
                     //$table=$_GET['lin'];
            $result=mysql_query("SELECT documents FROM std_references where username='$user' && add_time='$time';");
if($result){
              if ($result && mysql_num_rows($result)>0) {
    while($row = mysql_fetch_array($result)){ 
                      
       // $type=$row['type'];
        $name=$row['documents'];
         if($name==""){    
             echo "<script type='text/javascript'>alert('No file found');window.location.href='std_mng_reference.php';</script>;";
         }
        else{
  if(file_exists('ref_docs/'.$name)){
      header("Content-type: ".filetype('ref_docs/'.$name));
        header('Content-disposition: attachment; filename="'.$name.'"');
        echo file_get_contents('ref_docs/'.$name);
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

}

?>