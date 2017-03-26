<?php
						if(session_status()==PHP_SESSION_NONE){
							session_start();
						} 

						if( !isset($_SESSION['username']) ){
							header("location:login.html");
						}
				
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>KidCamps_Loading - Register</title>
<link rel="shortcut icon" href="../images/title_logo.png" />

<!-- Bootstrap -->
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/payment.css">
	<link rel="stylesheet" href="../css/schedule.css">
	
<!-- Fonts-->
<link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
</head>

<body>
<nav class="navbar-default navbar-inverse">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <img class="img-responsive" id="logo" src="../images/logo.png" alt="logo">
		</div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
		<li><a href="home.php"><span id="company-name"> EduCamps INC</span></a></li>
		<li><a href="home.php">Home</a> </li>
        <li class="active"><a href="#">Schedule and Registration</a> </li>
        <li><a href="catalog.php">Shopping</a> </li>
        <li><a href="forum.php">Forum</a> </li>
        <li><a href="visualization.php">Statistics</a> </li>
        <li><a href="avtivities.php">Activities</a></li>
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
<div class="col-lg-12 text-left container">


	<div class="panel panel-orange">
	  <div class="panel-heading"><span><i class="glyphicon"></i></span>Registration</div>
		
	  <div class="panel-body">
	  <div class="form-group">
    	<form action="processor.php" method="post">	
					
        	<div class="col-md-6">
						<strong>Child's Name:</strong>
						<input  class="form-control" type="text" name="childname" required>
					</div>
					<div class="col-md-6">
						<strong>Parent's Name:</strong>
						<input  class="form-control" type="text" name="parentname" required>
					</div>

				
				<div class="col-md-12">&nbsp;</div>
				<div class="col-lg-12 col-md-12 col-sm-12">	
					<strong>Date Of Birth(MM/DD/YY):</strong>
					<input type="number" name="birth_month" class="date_input" required>
        	<span>/</span>
        	<input type="number" name="birth_day" class="date_input" required>
        	<span>/</span>
        	<input type="number" name="birth_year" class="date_input" required>
					
				</div>
				
				<div class="col-md-12">&nbsp;</div>
				
				
				<div class="col-md-6">
					<strong>Phone:</strong>
        	<input class="form-control" type="text" name="phone" pattern="[0-9]{10}" required>
				</div>
				
				<div class="col-md-6">
					<strong>Email:</strong>
        	<input class="form-control" type="text" name="email" required>
      	</div>
				
			<div class="col-md-6">
					<strong>Grade Level:</strong>
        	<input class="form-control" type="text" name="grade" required>
				</div>
				
				<div class="col-md-6">
					<strong>School:</strong>
        	<input class="form-control" type="text" name="school" required>
      	</div>
				
				<div class="col-md-12">&nbsp;</div>
				<div class="col-lg-12 col-md-12 col-sm-12">	
					<select class="form-control" name="camplocation">
						<option value="">Camp Location</option>
						<option value="Yosemite National Park">Yosemite National Park</option>
						<option value="Yellowstone National Park">Yellowstone National Park</option>
						<option value="Zion National Park">Zion National Park</option>
						<option value="Golden Gate Park">Golden Gate Park</option>
					</select>
				</div>
				
				<div class="col-md-12">&nbsp;</div>
				<div class="col-lg-12 col-md-12 col-sm-12">	
					<select class="form-control" name="duration">
						<option value="">Duration</option>
						<option value="1">1 Week</option>
						<option value="2">2 Weeks</option>
					</select>
				</div>
				
				<div class="col-md-12">&nbsp;</div>
				<div class="col-lg-12 col-md-12 col-sm-12">	
					<strong>Special instructions</strong>
					<textarea class="form-control" name="special_instructions"></textarea>
				</div>
 
				<div class="col-md-12">&nbsp;</div>
				<div class="col-lg-12 col-md-12 col-sm-12">	
					<input class="btn btn-default btn-orange" type="submit" value="Pay Now">
					<input type="reset" value="Reset">
				</div>
    </form>
			
	</div>
	</div>
	</div>
    
</div>


</body>
</html>