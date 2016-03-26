<?php include('adminheader.php'); ?>

<head>
	<script type="text/javascript" src="../js/validation.js"></script>
<script>
	function restform(){
	document.getElementById("add_student").reset();
		return false;
	}
	
</script>
<script>
function searchstudent(first){
		var type='searchstudent';
	
			
 	document.getElementById("all_vacancy").style.display="none";
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
        xmlhttp.open("GET","../classes/search_manage_student.php?first="+first+"&type="+type,true);
        xmlhttp.send();
        }
	</script>
</head>
<div class="col-xs-12 col-sm-12 col-md-9">
	<h1>Manage Student</h1>

	<div class="row">

		<div class="col-md-8 empDbTitle">
			<i class="fa fa-dashboard"></i> Dashboard
		</div>

		<div class="col-md-4 empDbDateStrip">
			<span><i class="fa fa-calendar"></i><?php echo " ".$viewdashdate;?></span>
		</div>

	</div>

	<div class="row">
		<!-- hear manage application -->
		<div class="col-md-9" style="width:100%;">
			<br>
		
			<!-- 		<table class="table table-striped">
						<tr><td>Form</td><td><select name="form" class="btn btn-primary" id="search_vacancies" onchange="showUser(this.value)">
			<option value="all">All</option>
			<option value="6b">6B</option>
			<option value="6g"> 6G</option>
			<option value="7t">7T</option>
		</select></td>
			<td>Invitation Status</td><td><select class="btn btn-primary" name="invitstion_status">
			<option value="all_invitation">All</option>
			<option value="finance">Pending</option>
			<option value="front_office">Invited</option>
			<option value="technology">Accepted</option>
		</select></td>
			
			<td>Reference Status </td><td> <select class="btn btn-primary" name="reference_status" >
	<option value="all">All</option>
	<option value="pending">Pending</option>
	<option value="completed">Completed</option>
	</select></td>
		</tr>
	    
					</table> <br><br> -->
			
			
				<!-- <table class="table table-striped">
					<tr><td> Show <select class="btn btn-primary" name="num_of_vacancy_show">
		<option>10</option>
		<option>20</option>
		<option>20</option>
		<option>40</option>
		<option>50</option>
		<option>100</option>
		
	</select> Entries</td>
		<td>Search <input type="search" name="search_vacancy" onchange="searchstudent(this.value)"></td>
	</tr>
		
    
				</table><br><br> -->
			
		<div id="searched"></div>
		<div id="all_vacancy">
				<table class="table">
					
    	<thead>
			<th> Student Name</th>
			<th>Student Email</th>
			<th>Student Contact</th>
			<th>School/Collage Year</th>
			<th>Gender</th>
			<th>Account Status</th>
		</thead>
		<?php 

$sql = mysql_query("SELECT b.account_status,a.* FROM student_profile a, login b where a.userid=b.userid");
while($name=mysql_fetch_array($sql))
{
	
?>
		<tr><td><?php echo $name['first_name']." ".$name['last_name'];?></td>
			<td><?php echo $name['email'];?></td>
			<td><?php echo $name['phone'];?></td>
			<td><?php echo $name['school_year'];?></td>
			<td><?php echo $name['gender'];?></td>

<td><a href="../classes/admin_account_activation.php?userid=<?php echo $name['userid'];?>&status=<?php echo $name['account_status'];?>" onclick="return confirm('Are You Sure To Want Activate/Deactivate This')"><i class="fa fa-eye"></i> 
<?php
if($name['account_status']=='true'){
	echo "Activated";
}

else{

	echo "Deactivated";
}
?>



 </a></td>

			<td><a href="../classes/student_delete.php?stduserid=<?php echo $name['userid'];?>" onclick="return confirm('Are You Sure To Want Delete This')"><i class="fa fa-trash"></i></a></td>
		</tr>
		<?php 
}
		?>
	</table>			
		</div>



		</div>

		<!-- End Hear -->

	</div>
<?php include( 'adminfooter.php'); ?>