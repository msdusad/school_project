<?php
include('../connection.php');
session_start();
$q=$_GET['first'];
	$sql=mysql_query("SELECT * FROM create_vacancy order by automatic_date  DESC limit $q;") ;


echo "<table class='table'>
<tr>
<th>Vacancy</th>
<th>Department</th>
<th>Branch</th>
<th>Number of Places</th>

</tr>";
if($sql){
if($sql && mysql_num_rows($sql)>0){
while($row = mysql_fetch_array($sql)) {
	$userid=$row['userid'];
	$autodate=$row['automatic_date'];
	$vac_title=$row['vacancy_title'];
	$disc=$row['vacancy_description'];
	$vac_loc=$row['vacancy_location'];
	$numplaces=$row['number_places'];
    echo "<tr>
 <td><a href='view_vacancy.php?user=$userid&auto_date=$autodate'>$vac_title</a> </td>
  <td>$disc</td>
    <td>$vac_loc</td>
    <td>$numplaces</td>

    </tr>";
	
 } 
}
else{
echo "<tr><td>No Result Found</td></tr>";
}
}
else{
echo mysql_error();
}
	echo "</table>";



?>