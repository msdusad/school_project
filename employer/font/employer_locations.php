<?php
include('employerheader.php');
$empuser=$_SESSION['employeruserid'];
?>

<div class="col-xs-12 col-sm-12 col-md-9" id="e_loc-form">
<?php include('returnToDashboard.php');?>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="">
			</br>
				<h2><i class='fa fa-bell'></i>  Welcome to Employee Location</h2>
			</div>
		</div>
	</div>

	</br>

    <div class="row">

    <div class="col-xs-12 col-sm-12 col-md-8 empDbTitle">
    <i class="fa fa-location-arrow"></i> Locations
    </div>

    <div class="col-md-4 empDbDateStrip">    
	<span><i class="fa fa-calendar"></i> <?php echo " ".$viewdashdate;?></span>
    </div>
    
    </div>
    
	</br>
   
    <div class="row empMangerLocation">
		<?php
		$sql=mysql_query("select * from employer_location where userid='$empuser' ");
		if($sql){
		while($row=mysql_fetch_array($sql)){
		?>
 <div class="col-xs-12 col-sm-12 col-md-6 empDbLocationDispBox">
	<div class="">

	<div class="col-xs-12 col-sm-12 col-md-5">
		<div class="mq-adjLoc">
            <img src="img/location.png"/>
            <a href="edit_location.php?userid=<?php echo $row['userid']?>&crt_time=<?php echo $row['create_time']?>" class="btn btn-danger btn-sm" style="width:150px; margin-top:15px; text-align:center;">
			<i class="fa fa-edit"></i> Edit Location</a>
			
            <a href="../classes/delete_location.php?user=<?php echo $row['userid']?>&crt_time=<?php echo $row['create_time']?>" class="btn btn-danger btn-sm" style="width:150px; margin-top:15px; text-align:center;">
			<i class="fa fa-edit"></i> Delete Location</a>
		</div>
	</div>
            
	<div class="col-xs-12 col-sm-12 col-md-7">
		<div class="mq-adjCont">
            <b><?php echo $row['location_address'];?></b>
            <p><?php echo $row['location_city'];?><br><?php echo $row['location_name']; ?><br><br><br></p>
            <b>Contact:</b><br>
            <em><?php echo $row['contact_title']." ".$row['contact_first_name']." ".$row['contact_last_name'];?></em>
            <p><?php echo $row['contact_telephone'];?></p>
            <p><?php echo $row['conatct_email'];?></p>
		</div>
	</div>

            <div class="clearfix"></div>
            
			<div class="row vap">
           <!--  <div class="col-xs-12 col-sm-12 col-md-4 empDbStatBx">Current vacancies<br>4</div>
            <div class="col-xs-12 col-sm-12 col-md-4 empDbStatBx">Applications<br>32</div>
            <div class="col-xs-12 col-sm-12 col-md-4 empDbStatBx">Placements to date<br>52</div> -->
            </div>
			
	</div>
</div>
<?php }
	
}
else{echo "error in query pass sql".mysql_error();}
?>
		<!-- Loop Start Hear -->
       
        <!-- end hear Location Loop -->
        
	</div>
    
    <div class="row">
        <a href="create_location.php" class="btn btn-danger" style="width:95%; margin:0 auto; display:block;">Add Location </a>
    </div>


<?php
include('employerfooter.php');
?>