
<?php
include('connection.php');
session_start();
$q=mysql_real_escape_string($_GET['q']);
$type=$_GET['type'];
$user=$_SESSION['employeruserid'];
//if(isset($_GET['q'] && $_GET['type'])){}
if($q=='all'){
	$sql=mysql_query("SELECT * FROM create_vacancy order by automatic_date  DESC;") ;
}

if($q=='onlymy'){
	$sql=mysql_query("SELECT * FROM create_vacancy WHERE userid = '".$user."' order by automatic_date  DESC;") ;
}

if($type=='search_vacancy'){
$sql=mysql_query("SELECT * FROM create_vacancy WHERE userid = '".$user."' && (vacancy_title LIKE '%$q%' || vacancy_description LIKE '%$q%' || vacancy_title LIKE '%$q%' || vacancy_location LIKE '%$q%' || vacancy_title LIKE '%$q%' ) order by automatic_date  DESC;") ;

// if($sql){
// echo "yes";

// }
// else{

// 	echo mysql_error();
// }

}


	
echo "<table class='table'>
<tr>
<th>Vacancy</th>
<th>Department</th>
<th>Branch</th>
<th>Number of Places</th>

</tr>";
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
	echo "</table>";

