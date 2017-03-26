<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>KidCamps_Loading - Payment</title>
<link rel="shortcut icon" href="../images/title_logo.png" />

<!-- Bootstrap -->
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/payment.css">
	
<!-- Fonts-->
<link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
</head>

<body>
<nav class="navbar-default navbar-inverse">
  <div class="container-fluid"> 
  
    <div class="navbar-header">
      <img class="img-responsive" id="logo" src="../images/logo.png" alt="logo">
		</div>
   
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
		<li><a href="home.php"><span id="company-name"> EduCamps INC</span></a></li>
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

<div class="col-md-12 container">&nbsp;</div>
<div class="col-lg-12 text-left introduction">
  <div class="panel panel-orange">
		<div class="panel-heading"><span><i class="glyphicon"></i></span>Payment</div>
    <div class="panel-body">
        <div class="form-group">
            <div class="col-md-12"><strong>Card Type:</strong></div>
            <div class="col-md-12">
                <select id="CreditCardType" name="CreditCardType" class="form-control">
                    <option value="5">Visa</option>
                    <option value="6">MasterCard</option>
                    <option value="7">American Express</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12"><strong>Credit Card Number:</strong></div>
            <div class="col-md-12"><input type="text" class="form-control" name="car_number" value="" /></div>
        </div>
        <div class="form-group">
            <div class="col-md-12"><strong>Card CVV:</strong></div>
            <div class="col-md-12"><input type="text" class="form-control" name="car_code" value="" /></div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <strong>Expiration Date</strong>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <select class="form-control">
                    <option value="">Month</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
            </select>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <select class="form-control" >
                    <option value="">Year</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
            </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <span>Payment Methods</span>
            </div>
            <div class="col-md-12">
                <ul class="cards">
                    <li class="visa hand">Visa</li>
                    <li class="mastercard hand">MasterCard</li>
                    <li class="amex hand">AmericanExpress</li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
				
				<div class="col-md-12">&nbsp;</div>
			
			<div class="col-md-12">
	
					<p>
						<a class="btn btn-default btn-orange" href='ordersuccess.php'>Place Order</a>
					</p>


			</div>
			
			</div>
    </div>
    </div>

</body>
</html>