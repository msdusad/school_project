<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Home Page | Welcome</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<!--Bootstrap Loading..-->
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<!-- Loading Drunken Parrot UI -->
<link href="css/style.css" rel="stylesheet">
<link href="css/demo.css" rel="stylesheet">

<!-- <link rel="shortcut icon" href="images/favicon.ico"> -->

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
<![endif]-->
    
<!--My Style Css-->
<link href="script/myStyle.css" rel="stylesheet" type="text/css">

<!--Font Awesome -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">

<!--Fonts  -->
<link href="font/stylesheet.css" rel="stylesheet" type="text/css">

<!-- Rest Css -->
<link href="script/html5reset-1.6.1.css" rel="stylesheet" type="text/css">

<!--Normalize Css-->
<link href="script/normalize.css" rel="stylesheet" type="text/css">

<!-- Custome Buttons
<link href="script/buttons.css" rel="stylesheet" type="text/css"> -->
<style type="text/css">
	.form-control::-webkit-input-placeholder { color: black; }
	.form-control:-moz-placeholder { color: black; }
	.form-control::-moz-placeholder { color: black; }
	.form-control:-ms-input-placeholder { color: black; }

	/* */
	#qcont{}
	#qcont input{border:solid lightgray 1px; color:gray;}
	#qcont input placeholder{color:#000!important;}
	#qcont textarea{border:solid lightgray 1px; color:gray; width:100%;}
	
</style>
</head>
<body>

<div class="container">

<!-- Modal Contact Form -->
  <div class="modal fade" id="asdf" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><i class="fa fa-send"></i> Contact Form </h4>
        </div>
        <div class="modal-body" style="height:200px;">
          <!-- Sign-up-Form -->
						<form action="contactus.php" method="post" id="qcont" class="" novalidate="novalidate">
							<div class="row">
							  <div class="col-md-12">
									<label class="input">Your Name</label>
									<input type="text" name="name" placeholder="Your Name" class="form-control" required="">
                                </div>

                                <div class="col-md-12">
									<label class="input">Email Address</label>
									<input type="email" name="email" placeholder="Email address" class="form-control" required="">
                                </div>
								
								<div class="col-md-12">
									<label class="input">Mobile Number</label>
									<input type="text" name="telephone" placeholder="Mobile number" class="form-control" required="">
								</div>
								
                                <div class="col-md-12">
									<label class="input">Your Message</label>
									<textarea name="message" rows="2" cols="50" placeholder="Enter your message" class="form-control"></textarea>
                                </div>
								

								<div class="col-md-12">
									<label class="input"></label>
									<input type="submit" name="submit" class="btn-u form-control btn-warning" value="Submit">
								</div>
							</div>
                        </form>
			<!-- End Sign-up Form -->
        </div>
        <div class="modal-footer">
         &nbsp;
        </div>
      </div>
      
    </div>
  </div>
<!-- Modal Contact Form -->


<header>
<div class="row bgColorOne">
	<div class="col-md-3">
		<a href="index.php">
			<img src="img/logo.png" alt="Worktaster Logo" class="logo"/>
		</a>
	</div>
	<div class="col-md-6">
		<div id="navigationContainer">
			<nav>
				<ul>
					<li><a href="index.html"><span class="fa fa-home h_pg_homeIcon"></span></a></li>
					<li><a href="schoolandcollage.html">Schools & Colleges</a></li>
					<li><a href="students.html">Students</a></li>
					<li><a href="businesses.html">Businesses</a></li>
					<li><a href="about.html">About us</a></li>
					<li><a href="news.html">News</a></li>
					<li class="border-right-none"><a href="#" data-toggle="modal" data-target="#asdf">Contact us</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="col-md-3">
  	<div class="header_btn_group">
      <a href="index.php" class="menu-getStarted-btn-adj">
		<button type="button" class="btn btn-danger btn-embossed">GET STARTED</button>
	  </a>
      <a href="index.php" class="menu-login-btn-adj">
		<button type="button" class="btn btn-orange btn-embossed">LOGIN</button>
	  </a>
    </div>
  </div>
	<div class="clearfix visible-md"></div>    
 </div>
 </header>