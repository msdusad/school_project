<?php include('studentheader.php'); 
$userid=$_GET['userid'];
$vcancy_title=$_GET['vacancy_title'];
$company_name=$_GET['company_name'];
$company_website=$_GET['company_website'];
$date_of_vacancy=$_GET['date'];

//$current_user=$_SESSION['employeruserid'];
$qry=mysql_query("select * from create_vacancy where userid='$userid' && automatic_date='$date_of_vacancy' && vacancy_title='$vcancy_title' ");

if($row=mysql_fetch_array($qry)){
$from_vacancy=$row['from_date1'];
$to_vacancy=$row['to_date1'];
$duration=$row['duration'];
	$location=$row['vacancy_location'];
	$numberof_places=$row['number_places'];
	$description=$row['vacancy_description'];
}

?>

<div class="col-xs-12 col-sm-12 col-md-9">

<div class="row" id="view_vacancy-form">
<div class="col-xs-12 col-sm-12 col-md-12">
<br>

<div class="row">				
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="">
			<h3 class="empDbH"><i class="fa fa-check-circle"></i> Welcome to Application</h3>
		</div>
	</div>
</div>
<br>
<div class="row">

    <div class="col-xs-6 col-md-8 empDbTitle">
		<a href="studentdashboard.php"> <i class="fa fa-dashboard"></i> Dashboard</a>
    </div>
	


    <div class="col-xs-6 col-md-4 empDbDateStrip">    
		<span><i class="fa fa-calendar"></i> <?php echo " ".$viewdashdate;?></span>
    </div>
    
</div>
<br>
<!--
//Disabled
 <a href="view_all_vacancies.php"> <i class="fa fa-envelope-o"></i> Back to all vacancies</a>
<br>
-->
<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="panel panel-success empVacancyPanel">
				<div class="panel-heading">
					<h3 class="panel-title">Vacancy Name : <?php echo $vcancy_title;?></h3>
				</div>
				<div class="empVacancyPanelTxt">
				<p><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vacancy Description : <?php echo $description;?><br><br></p>
				</div>
			</div>
		</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="panel panel-danger empVacancyPanel">
            <div class="panel-heading">
                <h3 class="panel-title" style="display:inline-block; width:47%;">Vacancy Details</h3>
				 <h3 class="panel-title" style="display:inline-block; width:47%;">Employer</h3>
            </div>
            
			<table class="table">
                <tbody>
                    <tr>
                        <td style="width:43%;"><b>From:</b> <?php echo $from_vacancy;?></td>
                        <td style="width:52%;"><?php echo $company_name;?></td>
                    </tr>
                    <tr>
                        <td><b>To:</b> <?php echo $to_vacancy;?></td>
                        <td><b>Website:</b><?php $company_website;?></td>
                    </tr>
                    <tr>
                        <td><b>Duration:</b> <?php echo $duration;?></td>
                        <td><b>industries:</b> Technology</td>
                    </tr>
                    <tr>
                        <td><b>Location:</b> <?php echo $location;?></td>
                        <td><b>Number of Places:</b> <?php echo $numberof_places;?></td>
                    </tr>
                </tbody>
			</table>
            <div class="empVacancyPanelTxt">
            <p></p>
            <p></p>
			<p></p>
			<p></p>
            </div>
        </div>
</div>
</div>
<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">     
			<a href="apply_to_vacancy.php?vacancy_created_date=<?php echo $date_of_vacancy;?>&userid=<?php echo $userid; ?>" class="btn btn-primary pull-right">Apply</a>
		</div>
	</div>

<div class="clearfix"></div>
</div>
</div>

<?php include('studentfooter.php'); 

?>
