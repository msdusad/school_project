<?php include('schoolheader.php'); ?>

<head>
	<script type="text/javascript" src="../js/validation.js"></script>
	<script>
function searchemployer(first,type){
	
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
        xmlhttp.open("GET","../classes/search_manage_employer.php?first="+first+"&type="+type,true);
        xmlhttp.send();
        }
	</script>

</head>
<div class="col-xs-12 col-sm-12 col-md-9">
 
<div class="row" id="school_manage_employers">
<div class="col-md-12">	
<br>
	<div class="row">				
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="">
				<h2><i class="fa fa-briefcase"></i> Welcome to Manage Employee </h2>
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
		
<table class="table table-striped">
<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-4">
		<div class="mq-center">
			<label>Form</label>
			<select class="btn btn-primary" name="form" id="search_vacancies" onchange="showUser(this.value)">
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
		<select class="btn btn-primary" name="invitstion_status">
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
			<select class="btn btn-primary" name="reference_status" >
			<option value="all">All</option>
			<option value="pending">Pending</option>
			<option value="completed">Completed</option>
			</select>
		</div>
	</div>
</div>   
</table>
<hr style="border-top:1px dashed lightgray;"/>	
			
<table class="table table-striped">
<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-2">
		<div class="mq-center">
			<label>Show</label>
			<select class="btn btn-primary" name="num_of_vacancy_show" onchange="searchemployer(this.value,'limitofsch')">
			<option value="10">10</option>
			<option value="20">20</option>
			<option value="30">30</option>
			<option value="40">40</option>
			<option value="50">50</option>
			<option value="00">100</option>
			</select>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<div class="mq-center">
		<label>Entries Search</label><br>
		<input type="search" name="search_vacancy" onchange="searchemployer(this.value,'searchemployer')">
		</div>
	</div>
</div>
</table>

<hr style="border-top:1px dashed lightgray;"/>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-offset-10 col-md-1">
		<div class="mq-center">
			<a class="btn btn-primary" href="add_employer.php">+Add</a>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-1">
		<div class="mq-center">
			<a class="btn btn-primary" href="../classes/csv.php?manage_employer">CSV</a>
		</div>
	</div>
</div>

			
<div id="searched"></div>
<div id="all_vacancy">
<div class="table-responsive">
<table class="table">
					
    	<thead>
			<th>Name</th>
			<th>Invitation</th>
			<th>Vacancies</th>
			<th>Placements</th>
			<th>H&S Cert. Exp.</th>
		</thead>
		<?php 
$sql = mysql_query("SELECT a.userid,a.company_name FROM employer_registration a ,login b where a.userid=b.userid && b.account_status='true' ");
while($name=mysql_fetch_array($sql))
{
	$employerid=$name['userid'];
$all_vacancy=mysql_query("select count(userid) as numbofvacncy from create_vacancy where userid='$employerid';");
while($row=mysql_fetch_array($all_vacancy)){
?>
		<tr><td><a href="employer_detail.php?empuserid=<?php echo $employerid;?>"><?php echo $name['company_name'];?></a></td>
			<td><?php echo "Invitation ";?></td>
			<td><?php echo $row['numbofvacncy'];?></td>
			<td><?php  echo "Fetching Placement Pending Content";?></td>
			<td><?php echo "Fetching Pending Content";?></td>
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