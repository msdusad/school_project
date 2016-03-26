<?php include( 'employerheader.php'); ?>

<head>
	<script type="text/javascript" src="../js/validation.js"></script>
	<script>
		function restform() {
			document.getElementById("create_vacancy").reset();
			return false;
		}

function compareDates(){

	var startDate = new Date($('#dt1').val());
var endDate = new Date($('#dt2').val());

if (startDate < endDate){

document.getElementById("date_error").innerHTML="";
}
else{

	document.getElementById("date_error").innerHTML="End Date Must Grater Than Start Date";
}
}
// $(document).ready(function(){
//     $("#txtFromDate").datepicker({
//         minDate: 0,
//         maxDate: "+60D",
//         numberOfMonths: 2,
//         onSelect: function(selected) {
//           $("#txtToDate").datepicker("option","minDate", selected)
//         }
//     });
//     $("#txtToDate").datepicker({ 
//         minDate: 0,
//         maxDate:"+60D",
//         numberOfMonths: 2,
//         onSelect: function(selected) {
//            $("#txtFromDate").datepicker("option","maxDate", selected)
//         }
//     });  
// });




	</script>

</head>
<div class="col-xs-12 col-sm-12 col-md-9" id="c_vac-form">
<?php include('returnToDashboard.php');?>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="">
				<h1><i class='fa fa-bell'></i> Create Vacancy</h1>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-8 empDbTitle">
			<i class="fa fa-dashboard"></i> Dashboard
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4 empDbDateStrip">
			<span><i class="fa fa-calendar"></i> <?php echo " ".$viewdashdate;?></span>
		</div>
	</div>

	<div class="row">
		<!-- hear manage application -->
		<div class="col-md-12">
			<br>
			<form action="../classes/employer_edit_save.php" id="create_vacancy" method="post">

			
			<div class="row">
			
					<div class="">
						<div class="col-xs-12 col-sm-12 col-md-12"><h3><i class='fa fa-briefcase'></i> Create Vacancy</h3></div>
					</div>
			</div>
			
<hr style="border-top:1px dashed lightgray;"/>
	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="">
						Vacancy Title/Work Experience
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="">
						<input type="text" name="vacancy_title" id="vacancy_title" required>
					</div>
				</div>
				</div>
				
<hr style="border-top:1px dashed lightgray;"/>

			<div class="row">				
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="">
						Location
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="">
					<input type="text" name="vacancy_location" id="vacancy_location" placeholder="">
						<!-- <select class="btn btn-primary" name="vacancy_location" required>
							<option value="">Please Select</option>
							<option>Solihull Branch</option>
							<option>Worcester Branch</option>
						</select> -->
					</div>
				</div>
				</div>	
				
<hr style="border-top:1px dashed lightgray;"/>

			<div class="row">				
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="">
						Description
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="">
						<input type="text" name="vacancy_description" id="description" style="width:90%" required>
					</div>
				</div>
				</div>

<hr style="border-top:1px dashed lightgray;"/>

			<div class="row">				
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="">
						Number of Places
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="">
					<input type="text" name="number_places">
						<!-- <select class="btn btn-primary" name="number_places" >
							<option value="">Please Select</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
						</select> -->
					</div>
				</div>
			</div>

<hr style="border-top:1px dashed lightgray;"/>

			<div class="row">				
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="">
						Duration
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="">
						<select class="btn btn-primary" name="duration" required>
							<option value="">Please Select</option>
							<option>1 Week</option>
							<option>2 Weeks</option>
							<option>3 Weeks</option>
						</select>
					</div>
				</div>
			</div>

<hr style="border-top:1px dashed lightgray;"/>

			<div class="row">				
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="">
						Available From
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="">
						<input type="date" class="datepicker" size="8" value="" name="from_date1" placeholder="From Date 1" id="dt1" onchange="compareDates()" required>
					</div>
				</div>
			</div>

<hr style="border-top:1px dashed lightgray;"/>

			<div class="row">				
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="">
						Available To
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="">
<input type="date" class="datepicker" size="8" value="" name="to_date1" placeholder="To Date 1" id="dt2" required onchange="compareDates()">
<br><br><span id="date_error" style="color:red;"></span>

					</div>
				</div>
			</div>

<hr style="border-top:1px dashed lightgray;"/>
			
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="">
						<h3><i class='fa fa-caret-right'></i> Restrictions</h3>
					</div>
				</div>
			</div>
<br>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="">
						Schooling Level
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="">
						<select class="btn btn-primary" name="schooling_level" required>
							<option value="">Please Select</option>
							<option>Any</option>
							<option>GCSE students only</option>
							<option>A-Level students only</option>
						</select>
					</div>
				</div>
			</div>

<hr style="border-top:1px dashed lightgray;"/>

			<div class="row">				
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="">
						School (leave blank if this vacancy is available to any school)
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="">
						<input type="text" name="selected_school_name">
					</div>
				</div>
			</div>
			
<hr style="border-top:1px dashed lightgray;"/>	
	
			<div class="row">				
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="">
						<input class="btn btn-primary" type="submit" name="create_vacancy" value="Create Vacancy">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="">
						<input class="btn btn-primary" type="submit" name="create_vacancy_cancel" value="Cancel" onclick="return restform();">
					</div>
				</div>
			</div>
			

			<!--
			<div class="row">				
			<div class="col-xs-12 col-sm-12 col-md-6">
			<div class="">
				<input type="date" name="to_date2" placeholder="To Date 2">
			</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
			<div class="">
				<input type="date" name="to_date3" placeholder="To Date 3">
			</div>
			</div>
			</div>

			<div class="row">	
			<div class="col-xs-12 col-sm-12 col-md-6">
			<div class="">
				Gender
			</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="">
				<select class="btn btn-primary" name="restriction_gender" required>
				<option value="">Please Select</option>
				<option>Any</option>
				<option>Male Candidates Only</option>
				<option>Female Candidates Only</option>
				</select>
			</div>
			</div>
			</div>
			-->



			</form>


		</div>

		<!-- End Hear -->
		
<!-- Calendar Script Start-->
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

	<script type="text/javascript">
	$(function() {
		$(".datepicker").datepicker({
			dateFormat: 'yy,mm,dd'
		}); //this is for the datepicker used in the form
	})
	</script>  
<!-- Calendar Script (x)-->

	</div>

<?php include( 'employerfooter.php'); ?>