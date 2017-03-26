<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="members"; // Database name 
$tbl_name="members"; // Table name 
session_start();
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 
$myemail=$_POST['email'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myemail = stripslashes($myemail);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$myemail = mysql_real_escape_string($myemail);
$sql="INSERT INTO $tbl_name values('$myusername','$mypassword','$myemail')";
?>


<!DOCTYPE html>
<html>
  <head>
  <META HTTP-EQUIV="REFRESH" CONTENT="10; URL=home.php">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/signup.css">

  <!-- Fonts-->
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
  </head>
		
  <body>
  <div class="panel text-center">
      <div class="form-container">
        <div class="panel-heading">
					<?php
					// If result matched $myusername and $mypassword, table row must be 1 row
					if(mysql_query($sql)==true){
						echo "New record created successfully";
					}
					else {
						echo "Error: " . $sql . "<br>" . mysql_error();
					}
					mysql_close();
					?>
				</div>
				<div class="panel-body">
          <p><a href="login.html" class="btn btn-default btn-orange">Go back to Login Page</a></p>
        </div>
		</div>
		</div>
	</body>

</html>