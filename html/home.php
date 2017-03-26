<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>KidCamps_Loading</title>
<link rel="shortcut icon" href="../images/title_logo.png" />

<!-- Bootstrap -->
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/home.css">

<!-- Fonts-->
<link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
</head>

<body>
<nav class="navbar-default navbar-inverse">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <img class="img-responsive" id="logo" src="../images/logo.png" alt="logo" >
	</div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
		<li><a href="#"><span id="company-name"> EduCamps INC</span></a></li>
		<li class="active"><a href="#">Home</a> </li>
        <li><a href="schedule.php">Schedule and Registration</a> </li>
        <li><a href="catalog.php">Shopping</a> </li>
        <li><a href="forum.php">Forum</a> </li>
        <li><a href="visualization.php">Statistics</a> </li>
        <li><a href="activities.php">Activities</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li id="user"><a href ="userpage.php">
					<?php
						if(session_status()==PHP_SESSION_NONE){
							session_start();
						} 

						if( !isset($_SESSION['username']) ){
							echo 'Login';
							//header("location:main_login.php");
						}
						else{
							$temp = $_SESSION['username'];
							echo $temp;
							//header("location:main_login.php");
						}
						?>
		    </a> </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 text-center introduction">
			<div>
				<h1>Join Camps For a Great Experience</h1>
				<p class="text-left"> &nbsp; &nbsp; &nbsp; &nbsp;EduCamps Inc is an organization that offers educational summer camps for children aged 10-14, across the country. EduCamps is the finest and most well established in the country. There are a variety of types to choose from and all provide children with an equally wonderful camp experience. </p>
				<p class="text-left"> &nbsp; &nbsp; &nbsp; &nbsp;Parents may login first before register camps for children. We offer 10% discount for every child after your first child who registered for the camp. Scroll down to see more details!</p>
			</div>

		</div>

		<div class="col-lg-12 text-center schedule section white-background">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-sm-2">
					</div>	
					<div class="col-lg-6 col-md-6 col-sm-6">
						<h1 id="p">Schedule</h1>
						<p class="text-center">The camps are offered in Winter and Summer months and each camp is either for 1 or 2 weeks.</p>
						<p><a href="schedule.php" class="btn btn-orange">See Locations and Register</a></p>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 text-center img-container">
						<img class="img-icon" src="../images/schedule.png" alt="schedule">
					</div>

				</div>
		</div>

<div class="col-lg-12 text-center catalog section color-background ">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-4 text-center img-container">
			<img class="img-icon" src="../images/shopping.png" alt="shopping">
		</div>
		<div class="col-lg-8 col-md-8 col-sm-8">
			<h1>Buy Sovenir!</h1>
    	<p>We also sell camp-related items like books, back-packs, T-shirts </p>
			<p><a href="catalog.php" class="btn btn-white">Shopping</a></p>
		</div>
	</div>
</div>

<div class="col-lg-12 text-center forum section white-background">
	<div class="col-lg-2 col-md-2 col-sm-2">
	</div>	
	<div class="col-lg-6 col-md-6 col-sm-6">
    <h1>Leave Your Best Moments</h1>
		<p>Submit reviews and suggestions here!</p>
		<p><a href="forum.php" class="btn btn-lg btn-orange">Join the Chat</a></p>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4">
		<img class="img-icon" src="../images/forumicon.png" alt="forum">
	</div>
</div>

<div class="col-lg-12 text-center virtualization color-background section">
	<div class="col-lg-4 col-md-4 col-sm-4 text-center img-container">
		<img class="img-icon" src="../images/statistic.png" alt="statistic">
	</div>
	<div class="col-lg-8 col-md-8 col-sm-8">
		<h1>See Past Enrollments</h1>
		<p>We have more and more children coming each year, and the size of each camp is expanding repectively.</p>
		<p><a href="visualization.php" class="btn btn-white">View History</a></p>
	</div>
</div>

<div class="col-lg-12 text-center activities white-background section">
	<div class="col-lg-2 col-md-2 col-sm-2">
	</div>	
	<div class="col-lg-6 col-md-6 col-sm-6">
		<h1>Everlasting Fun</h1>
		 <p>We offer many interesting activities such as computer-based activities, Robotics and outdoor activities. Children can participate in those activities in every camp.</p>
		 <p><a href="activities.php" class="btn btn-orange">Explore</a></p>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4">
		<img class="img-icon" src="../images/activities.png" alt="forum">
	</div>
</div>
		
		<div class="col-lg-12 text-center activities map-note">
			<h2>See the Map of all Camps Below</h2>
			
			<div class="map">
				<iframe src="https://www.google.com/maps/d/embed?mid=1szzH6mpShRc6MR2-Iuhmx1s08aE"></iframe>
			</div>
		</div>	
	</div>
	</div>

<footer class="text-center">
     <div class="white-background">
			 <h2>Contact Us</h2>
       <address>
       <strong>EduCamps, Inc.</strong><br>
       1546 El Camino Real, Santa Clara,<br>
       CA, 95051-4075, US<br>
       P: (408) 888-8888
			 </address>
    </div>
    <p>Copyright © KidCamps_Loading. All rights reserved.</p>    
</footer>
<!--Google Map API-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2HqjwGkW09_HftDN0RPwFWKV7dy_FDGQ&callback=initMap" async defer></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="jquery-1.11.3.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="bootstrap.js"></script>
<script src="home.js"></script>
</body>
</html>