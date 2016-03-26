<?php
include('studentheader.php');
?>
<head>
	 <script type="text/javascript" src="../js/validation.js"></script>
<script>
	function showref(){
	document.getElementById("view_references").style.display="none";
	document.getElementById("add_reference").style.display="block";
	}
</script>
</head>
<div class="col-xs-12 col-sm-12 col-md-9">
<h1><i class="fa fa-check-circle"></i> Welcome to Manage References </h1>

<div class="row">
	<div class="col-md-8 empDbTitle">
		<a href="studentdashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a>
	</div>
	<div class="col-md-4 empDbDateStrip">    
		<span><i class="fa fa-calendar"></i> <?php echo $viewdashdate;?></span>
	</div>
</div>
    <br>

	    
    <div class="row">
        <div class="col-md-9" >
			<!-- Start Hear Div -->
        <div id="basicdetails" class="stdWelcomeBlock" style="width:150%;" >
			<button onclick="showref()" class="btn btn-primary" style="margin-left:80%;">Add Reference</button><br><br>
			<div class="" id="add_reference" style="display:none">
				<form action="../classes/std_references.php" method="post" enctype="multipart/form-data">
					From <input class="" type="text" name="ref_from" required><br><br>
					Document Upload<br> <br><input  type="file" name="doc_file" ><br></br>
				<input  type="submit" name="std_ref" value="Submit">
				</form>
				
			</div>
			<div class="" id="view_references" style="display:block">
				<table class="table">
					<th>From</th>
					<th>Document Download</th>
				
							<?php
 $current_userid= $_SESSION['studentuserid'];
$refes=mysql_query("select * from std_references where username='$current_userid'");
if($refes){
if($refes && mysql_num_rows($refes)>0){
while($row=mysql_fetch_array($refes)){
	$username=$row['username'];
	$from_name=$row['ref_from'];
	$doc=$row['documents'];
	$addtime=$row['add_time'];
	echo "<tr><td>".$from_name."</td>";
	if($doc==''){
	echo "<td> </td></tr>";
	}
	else{
	echo "<td><a href='downloadfile.php?cruser=$username&time=$addtime'>Download File</a></td>			
	</tr>";
	}				
					
}

}
	else{
	echo "No Reference Added Yet";
	}
}
else{
echo "Error in Query".mysql_error();
}

?></table>
				</div>

        </div>
			<!-- End Hear  -->
			
        </div>
        
       
	</div>
    
   <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br><br>   <br><br>   <br>
<?php
include('studentfooter.php');

?>