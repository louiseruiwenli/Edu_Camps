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

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);
if (!empty($result)) {      
				if (mysql_num_rows($result) > 0) {
				 while($row = mysql_fetch_array($result)){
					 echo '<div class="col-md-12 col-sm-12 col-lg-12" id="comment-block">';
					 echo '<p class="text-right">';
					 echo $row["parentname"]." ";
					 echo $row["childname"]." "; 
					 echo $row["email"]." "; 
           echo $row["phone"]." "; 
           echo $row["campname"]." ";
           echo $row["duration"]." "; 
					 echo '</p>';
					 echo '<p>';
					 echo $row["special_instruction"]; 
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


// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['username']=$myusername;
$_SESSION['password']=$mypassword; 
header("location:login_success.php");
}
else {
echo "Wrong Username or Password";
mysql_close();
}
?>