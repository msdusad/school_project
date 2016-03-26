<?php include('schoolheader.php'); ?>

<head>
<script type="text/javascript" src="../js/validation.js"></script>
<script>
	function restform(){
	document.getElementById("add_student").reset();
		return false;
	}
	
</script>
<script>
function searchstudent(first,type){
	
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
        xmlhttp.open("GET","../classes/school/srch_mang_std.php?first="+first+"&type="+type,true);
        xmlhttp.send();
        }
	</script>
</head>
<div class="col-xs-12 col-sm-12 col-md-9">
 
<div class="row" id="school_manage_students">
<div class="col-md-12">
<br>
	<div class="row">				
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="">
				<h2><i class="fa fa-user"></i> Welcome to Manage Student</h2>
			</div>
		</div>
	</div>
<br>
	<div class="row">
		<div class="col-md-8 empDbTitle">
			<a href='schooldashboard.php'><i class="fa fa-dashboard"></i> Dashboard</a>
		</div>
		<div class="col-md-4 empDbDateStrip">
			<span><i class="fa fa-calendar"></i><?php echo " ".$viewdashdate;?></span>
		</div>
	</div>
<br>
<br>
<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-4">
		<div class="mq-center">
			<label>Form</label>
			<select name="form" class="btn btn-primary" id="search_vacancies" onchange="showUser(this.value)">
			<option value="all">All</option>
			<option value="6b">6B</option>
			<option value="6g"> 6G</option>
			<option value="7t">7T</option>
			</select>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-4">
		<div class="mq-center">
			<label>Invitation Status</label>
			<select class="btn btn-primary" name="invitstion_status" onchange="searchstudent(this.value,'invite_status')">
			<option value="all_invitation">All</option>
			<option value="finance">Pending</option>
			<option value="front_office">Invited</option>
			<option value="technology">Accepted</option>
			</select>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-4">
		<div class="mq-center">
			<label>Reference Status</label>
			<select class="btn btn-primary" name="reference_status" onchange="searchstudent(this.value,'ref_status')">
			<option value="all">All</option>
			<option value="pending">Pending</option>
			<option value="completed">Completed</option>
			</select>
		</div>
	</div>
</div>
		
<hr style="border-top:1px dashed lightgray;"/>
			
<!-- DONT REMOVE THIS TABLE OTHERWISE DATA WILL NOT BE DISPLAY ON FRONTEND -->
<table class="table table-striped">
<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-3">
		<div class="mq-center">
		<label>Show</label>
		<select class="btn btn-primary btn-sm" name="num_of_vacancy_show" onchange="searchstudent(this.value,'limitofsch')">
				<option value="10">10</option>
				<option value="20">20</option>
				<option value="30">30</option>
				<option value="40">40</option>
				<option value="50">50</option>
				<option value="100">100</option>	
		</select>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-4">
		<div class="mq-center">
		<label>Entries Search</label>
		<input type="search" name="search_vacancy" onchange="searchstudent(this.value,'searchstudent')">
		</div>
	</div>
</div>
</table>
				
<hr style="border-top:1px dashed lightgray;"/>
<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-offset-7 col-md-1">
		<div class="mq-center">
			<a class="btn btn-primary" href="add_student.php">+Add</a>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-3">
		<div class="mq-center">
			<a class="btn btn-primary" href="student_csv_upload.php">Student Bulk Upload</a>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-1">
		<div class="mq-center">
			<a class="btn btn-primary" href="../classes/csv.php?manage_student"> <span class="fa fa-download">  </span>CSV</a>
		</div>
	</div>
</div>
<hr style="border-top:1px dashed lightgray;"/>	
<div id="searched"></div>
<div id="all_vacancy">
<div class="table-responsive">
<table class="table">
					
    	<thead>
			<th>Name</th>
			<th>Form</th>
			<th>Invitation</th>
			<th>Applications</th>
			<th>Reference</th>
		</thead>
		<?php 

$sql = mysql_query("SELECT userid FROM student_profile");
while($name=mysql_fetch_array($sql))
{
	$uname=$name['userid'];
$all_vacancy=mysql_query("select a.userid,a.first_name, a.last_name,b.reference_by_school,count(c.student_userid) as student_userid from student_profile a,student_school b, job_applied c  where a.userid=b.userid and b.userid=c.student_userid and c.student_userid='$uname'");
while($row=mysql_fetch_array($all_vacancy)){
?>
		<tr><td><a href="student_detail.php?userid=<?php echo $row['userid'];?>&apps=<?php echo $row['student_userid'];?>"><?php echo $row['first_name']." ".$row['last_name'];?></a></td>
			<td><?php echo "Form";?></td>
			<td><?php echo "Pending";?></td>
			<td><?php echo $row['student_userid'];?></td>
			<td><?php if($row['reference_by_school']!=''){echo "Completed ";}
	else{echo "Pending";}
	
	;?></td>
		</tr>
		<?php }
}
		?>
	</table>
<hr style="border-top:1px dashed lightgray;"/>
	</div>
		</div>



		</div>

		<!-- End Hear -->

	</div>
<?php include( 'schoolfooter.php'); ?>