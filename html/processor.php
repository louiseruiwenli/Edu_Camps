<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>KidCamps_Loading - Confirm</title>
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
      <img class="img-responsive" id="logo" src="../images/logo.png" alt="logo">
	</div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
		<li><a href="home.php"><span id="company-name"> EduCamps INC</span></a></li>
		<li><a href="home.php">Home</a> </li>
        <li class="active"><a href="#">Schedule and Registration</a> </li>
        <li><a href="#">Shopping</a> </li>
        <li><a href="#">Forum</a> </li>
        <li><a href="#">Statistics</a> </li>
        <li><a href="#">Activities</a></li>
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

<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="members"; // Database name 
$tbl_name="members_info"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$childname=$_POST["childname"];
$parentname=$_POST["parentname"];
$campname=$_POST["camplocation"];
$duration=$_POST["duration"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$grade=$_POST["grade"];
$school=$_POST["school"];
$special_instructions=$_POST["special_instructions"];
$fee=830;
$Totalfee=$fee * $duration;
$childname = stripslashes($childname);
$childname = mysql_real_escape_string($childname);
$parentname = stripslashes($parentname);
$parentname = mysql_real_escape_string($parentname);
$campname = stripslashes($campname);
$campname = mysql_real_escape_string($campname);
$duration = stripslashes($duration);
$duration = mysql_real_escape_string($duration);
$phone = stripslashes($phone);
$phone = mysql_real_escape_string($phone);
$email = stripslashes($email);
$email = mysql_real_escape_string($email);
	$grade = stripslashes($grade);
$grade = mysql_real_escape_string($grade);
	$school = stripslashes($school);
$school = mysql_real_escape_string($school);
$special_instructions = stripslashes($special_instructions);
$special_instructions = mysql_real_escape_string($special_instructions);
if(session_status()==PHP_SESSION_NONE){
	session_start();
} 
if( isset($_SESSION['username']) ){
	$username= $_SESSION['username'];
	$sqluser="select * from $tbl_name where username = '$username'";
	$result1=mysql_query($sqluser);

if (!empty($result1)) {      
				if (mysql_num_rows($result1) > 0) {
					$Totalfee = $Totalfee * 0.9;
				}
	
}
	$sql = "insert into $tbl_name values('$username','$campname','$duration','$email','$special_instructions','$childname','$parentname','$phone','$grade','$school')";
	$result=mysql_query($sql);
	if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
	}
	//$sql="update `members`.`member_info` set childname='$childname', email='$email', phone='$phone',duration='$duration',campname;";
	//header("location:main_login.php");
}
else{
	header('location:login.html');
}

echo '<div class="col-lg-12 text-left container introduction">
  <h1>Confirm your information</h1>
    <ul>
      <li>Child Name: '.$childname.'</li>
      <li>Parent Name: '.$parentname.'</li>
			<li>Email: '.$email.'</li>
			<li>Phone: '.$phone.'</li>
			<li>Grade Level: '.$grade.'</li>
			<li>School: '.$school.'</li>
      <li>Camp Location: '.$campname.'</li>
      <li>Duration(weeks): '.$duration.'</li>
			<li>Special Instructions: '.$special_instructions.'</li>
      <li>Total Fee: '.$Totalfee.' '. 'U.S Dollars</li>
    </ul>
</div>'
?>
<div class="col-lg-12 text-left">
  <a href="payment.php" class="btn btn-default btn-orange">Check Out</a>
	
</div>
</body>
</html>