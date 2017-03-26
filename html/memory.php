<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KidCamps_Loading - Forum</title>
  <link rel="shortcut icon" href="../images/title_logo.png" />

  <!-- Bootstrap -->
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/forum.css">

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
		<li><a href="home.php"><span id="company-name"> EduCamps INC</span></a></li>
		<li><a href="home.php">Home</a> </li>
        <li><a href="schedule.php">Schedule and Registration</a> </li>
        <li><a href="catalog.php">Shopping</a> </li>
        <li  class="active"><a href="#">Forum</a> </li>
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
				</a>
				</li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
 
<div class="col-md-12">&nbsp;</div>
<div class="col-md-12">&nbsp;</div>	
<div class="col-md-3">&nbsp;</div>
<div class="col-md-3 col-sm-3 col-lg-3">
	<h1 class="text-center"><a href="forum.php" style="font-size:0.6em;" class="btn btn-default btn-orange">Reviews</a></h1>
</div>
<div class="col-md-3 col-sm-3 col-lg-3">
	<h1 class="text-center"><a href="#" style="font-size:0.6em;" class="btn btn-default btn-orange">Memories</a></h1>
</div>
<div class="col-md-3">&nbsp;</div>
	<div class="col-md-12">&nbsp;</div>

<div class="container">
  <div style="height: 600px;" class="col-sm-12 col-md-12 col-lg-12 forum-content">
		<?php
		$dirname = "uploads/";
		
		foreach (glob($dirname."*.png") as $filename) {
				echo "<img class='memory-img' style='height:200px; width:200px; margin:5px;' src=$filename>";
		}
		foreach (glob($dirname."*.jpg") as $filename) {
				echo "<img class='memory-img' style='height:200px; width:200px;margin:5px;' src=$filename>";
		}
		foreach (glob($dirname."*.jpeg") as $filename) {
				echo "<img class='memory-img' style='height:200px; width:200px; margin:5px;' src=$filename>";
		}
		?>
  </div>
</div>
  
<div class="col-md-12">&nbsp;</div>
<div class="col-md-12">&nbsp;</div>

<div class="container">
	<div class="panel panel-orange">
	  <div class="panel-heading text-center"><span><i class="glyphicon"></i></span>Leave Your Memory Here!</div>
		
	  <div class="panel-body">
	  <div class="form-group">
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
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
</body>

  