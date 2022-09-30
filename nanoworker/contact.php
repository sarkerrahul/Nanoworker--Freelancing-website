<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Nano Workers</title>

	<link rel="stylesheet" href="css/contactstyle.css">

	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>





</head> 


<body>


<nav class="navbar navbar-default navbar-expand-lg navbar-light">
	<div class="navbar-header">
		<a class="navbar-brand" href="#">Nano<b>Workers</b></a>  		
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>


	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse">
			<div id="navbarCollapse" class="collapse navbar-collapse">
		<ul class="nav navbar-nav">
			<li class="active"><a href="index.php">Home</a></li>
			<li><a href="login.php">LogIn</a></li>
			<li><a href="registration.php">SignUp</a></li>		
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#">Our Services <b class="caret"></b></a>
				<ul class="dropdown-menu">					
					<li><a href="Microtask.php">Micro Task</a></li>
					<li><a href="ProjectTask.php">Project Task</a></li>
					<li><a href="Dealwithus">Deal with Us</a></li>
					
				</ul>
			</li>
			<li><a href="blog.php">Blog</a></li>
			<li><a href="about.php">About</a></li>	
			<li><a href="contact.php">Contact</a></li>
		</ul>



		<form class="navbar-form form-inline">
			<div class="input-group search-box">								
				<input type="text" id="search" class="form-control" placeholder="Search here...">
				<span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
			</div>
		</form>


	</div>
</nav>
<!--Contact Form-->
<div class="container">
	<form action="/action_page.php">
	  <div class="row">
		<div class="col-25">
		  <label for="fname">First Name</label>
		</div>
		<div class="col-75">
		  <input type="text" id="fname" name="firstname" placeholder="Your name..">
		</div>
	  </div>
	  <div class="row">
		<div class="col-25">
		  <label for="lname">Last Name</label>
		</div>
		<div class="col-75">
		  <input type="text" id="lname" name="lastname" placeholder="Your last name..">
		</div>
	  </div>
	  <div class="row">
		<div class="col-25">
		  <label for="country">Country</label>
		</div>
		<div class="col-75">
		  <select id="country" name="country">
			<option value="bangladesh">Bangladesh</option>
			<option value="australia">Australia</option>
			<option value="canada">Canada</option>
			<option value="usa">USA</option>
		  </select>
		</div>
	  </div>
	  <div class="row">
		<div class="col-25">
		  <label for="subject">Subject</label>
		</div>
		<div class="col-75">
		  <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
		</div>
	  </div>
	  <div class="row">
		<input type="submit" value="Submit">
	  </div>
	</form>
  </div>


  <!--Footer Start-->
	<footer class="">
		<div class="w3hubs-footer">
   	  
			<div class="w3hubs-icon">
				<ul>
					<li><a href="#" target="black"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" target="black"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#" target="black"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" target="black"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#" target="black"><i class="fa fa-youtube-play"></i></a></li>
				</ul>
			</div>
			<div class="w3hubs-nav">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">Gallery</a></li>
					<li class="p1"><a href="#">Contact Us</a></li>
					
   
				</ul>
			</div>
			<div class="w3hubs-nav1">
				<ul>
					<li><a href="#">Product</a></li>
					<li><a href="#">new</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Media</a></li>
					
					
				</ul>
			</div>
   
			<div class="w3hubs-nav2">
				<ul>
					
					<li><a href="#" title="To Top"><i class="fa fa-chevron-down"></i></a></li>
					
				</ul>
			</div>
	  </div>
   
	  <div class="footer-end">
			<p>© 2021 Team G, BAUST.  All rights reserved </p>
	  </div>
		
	</footer>
<!--Footer Start-->

    

</body>


</html>                                                        