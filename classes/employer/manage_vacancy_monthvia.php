<?php
include('../connection.php');
session_start();
if($_REQUEST['type']=='monthbysearch'){
$srch=$_REQUEST['first'];
	
	echo "<table class='table'>
<tr>
<th>Vacancy</th>
<th>Department</th>
<th>Branch</th>
<th>Number of Places</th>
</tr>" ;
$user=$_SESSION['employeruserid'];
$sql=mysql_query("SELECT * FROM create_vacancy WHERE userid ='$user' && (month(automatic_date)='$srch') order by automatic_date  DESC;") ;
if($sql && mysql_num_rows($sql)>0){
	while($row = mysql_fetch_array($sql)) {
	$userid=$row['userid'];
	$autodate=$row['automatic_date'];
	$vac_title=$row['vacancy_title'];
	$des=$row['vacancy_description'];
	$loc=$row['vacancy_location'];
	$num_place=$row['number_places'];
	
    echo "<tr>
 <td><a href='view_vacancy.php?user=$userid&auto_date=$autodate'> $vac_title</a> </td>
  <td>$des</td>
    <td>$loc</td>
    <td>$num_place</td>
    </tr>";
	
 } 
	echo "</table>";
}
	else{
	echo "No Record Found";
	}
}
?>