<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Catalog-EduCamps</title>
<link rel="shortcut icon" href="../images/title_logo.png" />
	
<!-- Bootstrap -->
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/catalog.css">
<script src="../js/cart.js"></script>
	
<!-- Fonts-->
<link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
</head>
	
<body>
<nav class="navbar navbar-default navbar-inverse">
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
        <li><a href="schedule.php">Schedule and Registration</a> </li>
        <li class="active"><a href="#">Shopping</a> </li>
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
	<h5 class="introduction">We sell six items for kids camping. Kids who registered for our camping programs can get 15% off the total price.</h5>
</div>

<div class="container">
 <div class="row">
  <div class= "col-sm-9 col-md-9 col-lg-9">
  <div class="row text-center">
   
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
      <div class="thumbnail"> <img src="../images/backpack.jpg" alt="backpack" class="img-responsive">
        <div class="caption">
          <h3>BackPack</h3>
          <p>40L Outdoor Military Tactical Backpack.</p>
          <div class = "row">
            <p class="col-md-6 price">$ 37.99 </p>
            <p class="col-md-6" onclick="addToCart('backpack')"><a href="#" class="btn-orange" role="button"><span class="glyphicon" aria-hidden="true"></span> Add to Cart</a></p>
		  </div>
        </div>
      </div>
    </div>
    
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
      <div class="thumbnail"> <img src="../images/waterbottle.jpg" alt="water bottle" class="img-responsive">
        <div class="caption">
          <h3>Water Bottle</h3>
          <p>16oz Stainless Steel Sports WATER BOTTLE.</p>
          <div class = "row">
            <p class="col-md-6 price">$ 10.99 </p>
            <p class="col-md-6" onclick="addToCart('waterbottle')"><a href="#" class="btn-orange" role="button"><span class="glyphicon" aria-hidden="true"></span> Add to Cart</a></p>
		  </div>
        </div>
      </div>
    </div>
    
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
      <div class="thumbnail"> <img src="../images/tshirt.jpg" alt="tshirt" class="img-responsive">
        <div class="caption">
          <h3>T-Shirt</h3>
          <p>Gildan Ultra Cotton Mens Long Sleeve T-Shirt.</p>
          <div class = "row">
            <p class="col-md-6 price">$ 21.89 </p>
            <p class="col-md-6" onclick="addToCart('tshirt')"><a href="#" class="btn-orange" role="button"><span class="glyphicon" aria-hidden="true"></span> Add to Cart</a></p>
		  </div>
        </div>
      </div>
    </div>
    
    
    
  </div>
  
  <div class="row text-center hidden-xs">
   
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="thumbnail"> <img src="../images/flashlight.jpg" alt="flashlight" class="img-responsive">
        <div class="caption">
          <h3>Flashlight</h3>
          <p>Nebo O2 Beam LED 420 Lumen 5 Mode Zoom Camping Household PowerfulFlashlight 6000.</p>
          <div class = "row">
            <p class="col-md-6 price">$ 59.99 </p>
            <p class="col-md-6" onclick="addToCart('flashlight')"><a href="#" class="btn btn-orange" role="button"><span class="glyphicon" aria-hidden="true"></span> Add to Cart</a></p>
		  </div>
        </div>
      </div>
    </div>
    
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="thumbnail"> <img src="../images/tent.jpg" alt="tent" class="img-responsive">
        <div class="caption">
          <h3>Tent</h3>
          <p>New 4 Person Outdoor Camping Waterproof 4 Season Family Tent Camouflage Hiking.</p>
          <div class = "row">
            <p class="col-md-6 price">$ 23.48</p>
            <p class="col-md-6" onclick="addToCart('tent')"><a href="#" class="btn-orange" role="button"><span class="glyphicon" aria-hidden="true"></span> Add to Cart</a></p>
		  </div>
        </div>
      </div>
    </div>
    
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="thumbnail"> <img src="../images/sunscreen.jpg" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
          <h3>Sunscreen</h3>
          <p>Obagi Sun Shield Matte Broad Spectrum SPF 50 3oz/85g New In Box.</p>
          <div class = "row">
            <p class="col-md-6 price">$ 26.64</p>
            <p class="col-md-6" onclick="addToCart('sunscreen')"><a href="#" class="btn btn-orange" role="button"><span class="glyphicon" aria-hidden="true"></span> Add to Cart</a></p>
		  </div>
        </div>
      </div>
    </div>
	  </div>
	 </div>
    
    	<div class= "col-sm-3 col-md-3 col-lg-3" id="cart">
			<h4 class="text-center">Shopping Cart</h4>
			<div class="col-sm-12 col-md-12 col-lg-12" id="innercart">
				<div class="row">
					<div class="col-md-6 text-center" id="item_list">
						<p>Item</p>
					</div>
					<div class="col-md-6 text-center" id="item_price">
						<p>Price</p>
					</div>
				</div>
			</div>
				
			<div class="col-sm-12 col-md-12 col-lg-12">
				<div class="row">
					<div class="col-sm-12 col-md-8 col-lg-8">
						<p id="totalprice">Total price: $0</p>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<p><a href="payment-catalog.php" class="btn btn-orange">Pay Now</a></p>
					</div>
				</div>	
			</div>	

	  
	 </div>
	  
	</div>
</div>
    
<hr>


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
</html>