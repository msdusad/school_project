<!DOCTYPE html>
<?php 
include('../classes/connection.php');
if(!isset($_SESSION['studentuserid']))
{
	//header('location:../index.php');
}
include('../header.php');
?>
<div class="row bgColorOne" style="background-color:green;">
<nav class="navbar navbar-inverse" role="navigation">
  <div class="navbar-header">
    <img src="img/cloudUp.png" height="80" width="80">
  </div>
  <div class="navbar-collapse">
    
        
  
     <ul class="nav navbar-nav navbar-right navbar-icons">
		 <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="ss-user">&nbsp;&nbsp; </span>&nbsp;&nbsp; <span class="ss-navigatedown"></span></a>
           <ul class="dropdown-menu">
              <div class="arrow top"></div>
              <li><a href="#">Action</a></li>
              <li class="active"><a href="#">Another action</a></li>
              <li><a href="#">Something else</a></li>
           </ul>
        </li>
     </ul>
  </div>
</nav> 
	
<div class="list-group" style="width:20%;height:550px;background-color:black;margin-top:-20px;margin-bottom:-20px;">
	<div style="width:100%;">
	<img src="img/vs1.png" height="150" width="150" class="img-circle" style="margin-top:50px;margin-left:15%;width:65%;;">
	<i class="ss-link" style="color:white;margin-left:20%;"> Logged in as</i>
	<br><br>
	<h2 align="center" style="color:#c00;">Mahender Singh <i class="ss-pointright"> </i></h2>
  
	</div>
		<div style="width:90%;margin-left:4%;">
			 <br><br><a href="#" class="list-group-item" style="background-color:black;">
        <i class="ss-dashboard" style="min-height:10px;">  </i> <span class="list-group-item-heading" style="color:white;"> Dashboard</span>
   </a>
  <br> <a href="#" class="list-group-item" style="background-color:black;"><i class="ss-write"> </i> <span class="list-group-item-heading" style="color:white;"> My CV</span></a>
  <br> <a href="#" class="list-group-item" style="background-color:black;"><i class="ss-write"> </i><span class="list-group-item-heading" style="color:white;"> My Application</span></a>
		</div>
</div>
	
	</div>
<?php
	include('../footer.php');
	?>