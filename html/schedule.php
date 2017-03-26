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
<link rel="stylesheet" href="../css/schedule.css">
	
<!-- Fonts-->
<link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-default navbar-inverse">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <img class="img-responsive" id="logo" src="../images/logo.png" alt="logo" >
	</div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
		<li><a href="home.php"><span id="company-name">EduCamps INC</span></a></li>
		<li><a href="home.php">Home</a> </li>
        <li class="active"><a href="#">Schedule and Registration</a> </li>
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

<div class="container">
	
	<h5 class="introduction">We offer four camps in different locations with different starting and ending date. Each camp has different activities that kids can participate. A family with more than one child can get 10% discount for every child after the first child.</h5>
</div>

<div class="container location">
	<div class="col-md-12">
		<h1 class="text-left">Location</h1>	
		
	</div>
  <hr class="special_hr">
	
  <div class="col-md-12">&nbsp;</div>
	
  <div class="row">
	<div class="col-md-12">
		<div class="media">	
			<div class="media-left">
				<img src="../images/yosemite.jpg" alt="yosemite">
			</div>
			<div class="media-body">
			  <h4 class="media-heading text-center">Yosemite National Park</h4>
				<h4>&nbsp;</h4>
				<div class="col-md-1"></div>
				<div class="col-md-6">
					<div class="row">
					<p>Activities:</p>
					<ul>
						<li><strong>Computer-based:</strong></li>
						<li>Curveball</li>
						<li>Pacman</li>
					</ul>
					<ul>
						<li><strong>Robotics:</strong></li>
						<li>Make a Smart Umbrella</li>
						<li>Program a Friend</li>
					</ul>
					<ul>
						<li><strong>Outdoor:</strong></li>
						<li>Skiing Class</li>
						<li>Sightseeing</li>
						<li>Explore wild animals</li>
					</ul>	
				</div>
			  </div>
				
				<div class="row">
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">
					<ul>
						<li>Winter</li>
						<li>Start Date: 12/04</li>
						<li>End Date: 12/18</li>
						<li>Fee: $830/week</li>
					</ul>
				</div>
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">&nbsp;</div>
					<div class="col-md-5 text-center">					
					  <a href="registration.php" class="btn btn-default btn-orange btn-submit-fix">Register</a>
				  </div>
				</div>
				
			</div>	
		</div>
	</div>
	<div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">&nbsp;</div>
	

	
	<div class="col-md-12">
		<div class="media">	
			<div class="media-left">
				<img src="../images/yellowstone.jpg" alt="yellowstone">
			</div>
			<div class="media-body">
			  <h4 class="media-heading text-center">YellowStone National Park</h4>
				<h4>&nbsp;</h4>
				<div class="col-md-1"></div>
				<div class="col-md-6">
					<div class="row">
					<p>Activities:</p>
						<ul>
							<li><strong>Computer-based:</strong></li>
							<li>Pong</li>
							<li>Pac-Xon</li>
						</ul>
						<ul>
							<li><strong>Robotics:</strong></li>
							<li>Sketching Gadget Anatomy</li>
							<li>Hovercraft</li>
						</ul>
						<ul>
							<li><strong>Outdoor:</strong></li>
							<li>Bicycle trip</li>
							<li>Swimming</li>
						</ul>
				</div>
			  </div>
				
				<div class="row">
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">
					<ul>
						<li>Summer</li>
						<li>Start Date: 08/07</li>
						<li>End Date: 08/21</li>
						<li>Fee: $830/week</li>
					</ul>
				</div>
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">&nbsp;</div>
					<div class="col-md-5 text-center">					
					  <a href="registration.php" class="btn btn-default btn-orange btn-submit-fix">Register</a>
				  </div>
				</div>
				
			</div>	
	  </div>
	</div>
	<div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">&nbsp;</div>
	
		
	<div class="col-md-12">
		<div class="media">	
			<div class="media-left">
				<img src="../images/zionnationalpark.jpg" alt="zionnationalpark">
			</div>
			<div class="media-body">
			  <h4 class="media-heading text-center">Zion National Park</h4>
				<h4>&nbsp;</h4>
				<div class="col-md-1"></div>
				<div class="col-md-6">
					<div class="row">
					<p>Activities:</p>
						<ul>
							<li><strong>Computer-based:</strong></li>
							<li>Breakout</li>
							<li>Space Invaders</li>
						</ul>
						<ul>
							<li><strong>Robotics:</strong></li>
							<li>Mechanical Grabber</li>
							<li>Robot Movement</li>
						</ul>
						<ul>
							<li><strong>Outdoor:</strong></li>
							<li>Explore the nature</li>
							<li>Hiking</li>
							<li>River Rafting</li>
						</ul>		
				</div>
			  </div>
				
				<div class="row">
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">
					<ul>
						<li>Summer</li>
						<li>Start Date: 07/17</li>
						<li>End Date: 07/31</li>
						<li>Fee: $830/week</li>
					</ul>
				</div>
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">&nbsp;</div>
					<div class="col-md-5 text-center">					
					  <a href="registration.php" class="btn btn-default btn-orange btn-submit-fix">Register</a>
				  </div>
				</div>
				
			</div>	
	  </div>
	</div>
	<div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">&nbsp;</div>

	<div class="col-md-12">
		<div class="media">	
			<div class="media-left">
				<img src="../images/goldengatepark.jpg" alt="goldengatepark">
			</div>
			<div class="media-body">
			  <h4 class="media-heading text-center">Golden Gate Park</h4>
				<h4>&nbsp;</h4>
				<div class="col-md-1"></div>
				<div class="col-md-6">
					<div class="row">
					<p>Activities:</p>
						<ul>
							<li><strong>Computer-based:</strong></li>
							<li>Mini Pool</li>
							<li>Galaga</li>
						</ul>
						<ul>
							<li><strong>Robotics:</strong></li>
							<li>Hazardous Duty Robots</li>
							<li>Building a Virtual Robot</li>
						</ul>
						<ul>
							<li><strong>Outdoor:</strong></li>
							<li>Visit Art Museum</li>
							<li>Cultural Show in Japanese Tea Garden</li>
						</ul>			
				</div>
			  </div>
				
				<div class="row">
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">
					<ul>
						<li>Winter</li>
						<li>Start Date: 11/30</li>
						<li>End Date: 12/13</li>
						<li>Fee: $830/week</li>
					</ul>
				</div>
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">&nbsp;</div>
					<div class="col-md-5 text-center">					
					  <a href="registration.php" class="btn btn-default btn-orange btn-submit-fix">Register</a>
				  </div>
				</div>
				
			</div>	
	  </div>
	</div>

	</div>
</div>
	
<footer class="text-center">
     <div class="color_background">
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
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</body>