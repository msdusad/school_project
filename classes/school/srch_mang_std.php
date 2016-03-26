<?php 
include('../connection.php');
session_start();
$srch=mysql_real_escape_string($_REQUEST['first']);
$school_name=mysql_real_escape_string($_REQUEST['school_name']);
$sql=mysql_query("SELECT a.userid FROM student_profile a ,student_school b where b.school_name='$school_name'");
	echo "<table class='table'>
		<thead>
			<th>Name</th>
			<th>Form</th>
			<th>Invitation</th>
			<th>Applications</th>
			<th>Reference</th>
		</thead>";
		if($sql && mysql_num_rows($sql)>0){
while($name=mysql_fetch_array($sql))
{	
$uname=$name['userid'];
	
	if($_REQUEST['type']=='searchstudent'){
$all_vacancy=mysql_query("select a.userid,a.first_name, a.last_name,b.reference_by_school,count(c.student_userid) as student_userid from student_profile a,student_school b, job_applied c  where a.userid=b.userid and b.userid=c.student_userid and c.student_userid='$uname' and (a.first_name LIKE '%$srch%' || a.last_name LIKE '%$srch%')");
	
	}
	
	
		if($_REQUEST['type']=='limitofsch'){
$all_vacancy=mysql_query("select a.userid,a.first_name, a.last_name,b.reference_by_school,count(c.student_userid) as student_userid from student_profile a,student_school b, job_applied c  where a.userid=b.userid and b.userid=c.student_userid and c.student_userid='$uname' limit $srch");
	
	}
	
	if($_REQUEST['type']=='ref_status'){
		
	if($_REQUEST['first']=='all'){
	$all_vacancy=mysql_query("select a.userid,a.first_name, a.last_name,b.reference_by_school,count(c.student_userid) as student_userid from student_profile a,student_school b, job_applied c  where a.userid=b.userid and b.userid=c.student_userid and c.student_userid='$uname' ");
	}
		
		if($_REQUEST['first']=='pending'){
	
				$all_vacancy=mysql_query("select a.userid,a.first_name, a.last_name,b.reference_by_school,count(c.student_userid) as student_userid from student_profile a,student_school b, job_applied c  where a.userid=b.userid and b.userid=c.student_userid and c.student_userid='$uname' and b.reference_by_school='' ");
			
	}
		
		
		if($_REQUEST['first']=='completed'){
			
				$all_vacancy=mysql_query("select a.userid,a.first_name, a.last_name,b.reference_by_school,count(c.student_userid) as student_userid from student_profile a,student_school b, job_applied c  where a.userid=b.userid and b.userid=c.student_userid and c.student_userid='$uname' and b.reference_by_school!='' ");
	
	}
	
	}
	
	
	
	if($all_vacancy){
	
	if($all_vacancy && mysql_num_rows($all_vacancy)>0){
while($row=mysql_fetch_array($all_vacancy)){
	
		$userid=$row['userid'];
		$std_userid=$row['student_userid'];
	$firstname=$row['first_name'];
	$lastname=$row['last_name'];
	$refer_by_school=$row['reference_by_school'];
		
echo "<tr><td><a href='student_detail.php?userid=$userid&apps=$std_userid'>$firstname</a></td>
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
	else{
echo "No Record Found";

}

?>