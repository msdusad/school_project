<?php 
include('connection.php');
session_start();

if($_REQUEST['type']=='searchstudent'){
$srch=mysql_real_escape_string($_REQUEST['first']);
$sql=mysql_query("SELECT userid FROM student_profile");
	echo "<table class='table'>
		<thead>
			<th>Name</th>
			<th>Form</th>
			<th>Invitation</th>
			<th>Applications</th>
			<th>Reference</th>
		</thead>";
while($name=mysql_fetch_array($sql))
{
$uname=$name['userid'];
$all_vacancy=mysql_query("select a.userid,a.first_name, a.last_name,b.reference_by_school,count(c.student_userid) as student_userid from student_profile a,student_school b, job_applied c  where a.userid=b.userid and b.userid=c.student_userid and c.student_userid='$uname' && (a.first_name LIKE '%$srch%' || a.last_name LIKE '%$srch%' || b.reference_by_school LIKE '%$srch%')");
	if($all_vacancy){
	
	if($all_vacancy && mysql_num_rows($all_vacancy)>0){
while($row=mysql_fetch_array($all_vacancy)){
	
		$userid=$row['userid'];
		$std_userid=$row['student_userid'];
	$firstname=$row['first_name'];
	$lastname=$row['last_name'];
	$refer_by_school=$row['reference_by_school'];
		
echo "<tr><td><a href='student_detail.php?userid=$userid&apps=$std_userid'>$firstname $lastname</a>$firstname $lastname</td>
			<td>Form</td>
			<td>Pending</td>
			<td>$std_userid</td>
			<td>";
			if($refer_by_school!=''){echo "Completed ";}
	else{echo "Pending";}
	echo "</td></tr>";
	
 }
	}
	else{
	echo "<tr><td>No Result Found</td></tr>";
	}
	
}
else{
echo "Error in Query Pass".mysql_error();
}
}
echo "</table>";	
}


?>