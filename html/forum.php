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
	<h1 class="text-center"><a href="#" style="font-size:0.6em;" class="btn btn-default btn-orange">Reviews</a></h1>
</div>
<div class="col-md-3 col-sm-3 col-lg-3">
	<h1 class="text-center"><a href="memory.php" style="font-size:0.6em;" class="btn btn-default btn-orange">Memories</a></h1>
</div>
<div class="col-md-3">&nbsp;</div>
	<div class="col-md-12">&nbsp;</div>

<div class="container">
  <div style="height: 600px;" class="col-sm-12 col-md-12 col-lg-12 forum-content">
		<?php
		$host="localhost"; // Host name 
		$username="root"; // Mysql username 
		$password=""; // Mysql password 
		$db_name="members"; // Database name 
		$tbl_name="forum"; // Table name 
		// Connect to server and select databse.
		mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
		mysql_select_db("$db_name")or die("cannot select DB");
		$sql="select * from $tbl_name";
		$result = mysql_query($sql);
		if (!empty($result)) {      
				if (mysql_num_rows($result) > 0) {
				 while($row = mysql_fetch_array($result)){
					 echo '<div class="col-md-12 col-sm-12 col-lg-12" id="comment-block">';
					 echo '<p class="text-right">';
					 echo $row["year"]." ";
					 echo $row["season"]." "; 
					 echo $row["camp"]." "; 
					 echo '</p>';
					 echo '<p>';
					 echo $row["comment"]; 
					 echo '<br>';
					 echo '</p>';
					 echo '</div>';
					 echo '<div class="col-md-12 col-sm-12 col-lg-12">&nbsp;</div>';

					}
				}
				else {
						// no product found
						echo 'No result';
				}
		} else {
				// no product found
				echo 'Empty Result';
		}


// echoing JSON response

		?>
  </div>
</div>
  
<div class="col-md-12">&nbsp;</div>
<div class="col-md-12">&nbsp;</div>

<div class="container">
	<div class="panel panel-orange">
	  <div class="panel-heading text-center"><span><i class="glyphicon"></i></span>Leave Your Reviews and Suggestions Here!</div>
		
	  <div class="panel-body">
	  <div class="form-group">
    	<form action="comment.php" method="post">	
					
        	<div class="col-md-4">
						<strong>Year:</strong>
						<input  class="form-control" type="text" name="year" required>
					</div> 
					<div class="col-md-4">
						<strong>Season:</strong>
						<input  class="form-control" type="text" name="season" required>
					</div>
          <div class="col-md-4">
            <strong>Camp Location</strong>
            <select class="form-control" name="camp">
              <option value="Yosemite National Park">Yosemite National Park</option>
              <option value="Yellowstone National Park">Yellowstone National Park</option>
              <option value="Zion National Park">Zion National Park</option>
              <option value="Golden Gate Park">Golden Gate Park</option>
					  </select>
          </div>

				
				<div class="col-md-12">&nbsp;</div>
        <div class="col-lg-12 col-md-12 col-sm-12">	
          <strong>My story:</strong>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">	
          <textarea style="height: 300px;" class="form-control" id="comment" name="comment"></textarea>            
        </div>
        
        <div class="col-md-12">&nbsp;</div>
				<div class="col-lg-12 col-md-12 col-sm-12">	
					<input class="btn btn-default btn-orange" type="submit" value="Post">
				</div>
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

  