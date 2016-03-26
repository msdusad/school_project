<html>
	<head>
		<style>
			table,tr,td,th{
			border:2px solid black;
			}
		</style>
		<script>
		function searchvacncie(first){
		document.getElementById("my_application").style.display="none";
		var type='student_my_application';
        var xmlhttp;
        if (window.XMLHttpRequest)
          {// code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
          }
        else
          {// code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
        xmlhttp.onreadystatechange=function()
        {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            var res=xmlhttp.responseText;
            document.getElementById("searched").innerHTML=res;
            }
          }
        xmlhttp.open("GET","../classes/search_vacaincies.php?first="+first+"&type="+type,true);
        xmlhttp.send();
        }
        </script>
	</head>
	<body>
		<a href="student_profile.php">Home</a>
		<br><a href="../classes/logout.php">Logout</a>
	<table style="width:70%"><tr><td>Show <select name="num_of_vacancy_show">
		<option>10</option>
		<option>20</option>
		<option>20</option>
		<option>40</option>
		<option>50</option>
		<option>100</option>
		
	</select> Entries</td>
		<td><input type="search" name="search_vacancy" placeholder="Search Hear" onchange="searchvacncie(this.value)"></td>
	</tr>
		
	</table><br><br>

		<div id="searched"></div>
		<div id="my_application">
		
	<table style="width:80%;">
		<thead>
			<th>Vacancy</th>
			<th>Employer</th>
			<th>Cover Letter</th>
			<th>Date Of Application</th>
			
			<th> Status</th>
		</thead>
		<?php 
include('../classes/connection.php');

//select job_applied.apply_time,create_vacancy.vacancy_title from job_applied,create_vacancy where //job_applied.company_userid=create_vacancy.userid 
$currrt_user=$_SESSION['studentuserid'];
	
$all_vacancy=mysql_query("SELECT  a.cover_letter,a.status,a.apply_time, b.company_name, c.vacancy_title FROM job_applied a, employer_registration b, create_vacancy c where a.company_userid = b.userid = c.userid and a.student_userid='$currrt_user' and a.vacancy_time = c.automatic_date;");
while($row=mysql_fetch_array($all_vacancy)){
?>
		<tr><td><a href="review_application.php?cover=<?php echo $row['cover_letter'];?>"><?php echo $row['vacancy_title'];?></a></td>
			<td><?php echo $row['company_name'];?></td>
			<td><?php echo $row['cover_letter'];?></td>
			<td><?php echo $row['apply_time'];?></td>
			<td><?php echo $row['status'];?></td>
		</tr>
		<?php }
		?>
	</table>			
		</div>
		
		
	</body>
	
</html>