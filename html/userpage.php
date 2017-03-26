<?php
session_start();

if( isset($_SESSION['username']) ){
  $temp = $_SESSION['username'];
	echo '<div class="text-left col-md-12 lead">';
  echo $temp;
	echo '</div>';
}
else{
  header("location:login.html");
}
?>
<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="members"; // Database name 
$tbl_name="members_info"; // Table name 
$myusername = $_SESSION['username'];

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$sql="SELECT * FROM $tbl_name WHERE username='$myusername'";
$result=mysql_query($sql);
if (!empty($result)) {      
				if (mysql_num_rows($result) > 0) {
				 while($row = mysql_fetch_array($result)){
					 echo '<div class="text-left col-md-12">';
					 echo "Parent Name: ".$row["parentname"]."<br>";
					 echo "Child Name: ".$row["childname"]."<br>"; 
					 echo "Email: ".$row["email"]."<br>";
           echo "Phone: ".$row["phone"]."<br>"; 
           echo "Camp: ".$row["campname"]."<br>";
           echo "Duration: ".$row["duration"]."<br>"; 
					 echo '</p>';
					 echo '<p>';
					 echo "Special Instructions: ".$row["special_instructions"]."<br>"; 
					 echo '<br>';
					 echo '</p>';
					 echo '</div>';
					 echo '<div class="col-md-12 col-sm-12 col-lg-12">&nbsp;</div>';
           					}
				}
				else {
						// no product found
						echo '<div class="text-left col-md-12">';
						echo 'No Registration Record';
						echo '</div>';
				}
		} else {
				// no product found
				echo '<div class="text-left col-md-12">';
				echo 'Empty Result';
				echo '</div>';
		}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>KidCamps_Loading - Personal Page</title>
<link rel="shortcut icon" href="../images/title_logo.png" />

<!-- Bootstrap -->
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/signup.css">
	
<!-- Fonts-->
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
</head>
<body>
	
<div class="text-left col-md-1">	
<p><a href="logout.php" class="btn btn-default btn-orange">Logout</a></p>
</div>
<div class="text-left col-md-1">
<p><a href="home.php" class="btn btn-default btn-orange">Home</a></p>
</div>

</body>
</html>
