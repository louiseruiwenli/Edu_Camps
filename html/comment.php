<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="members"; // Database name 
$tbl_name="forum"; // Table name 
session_start();
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$year=$_POST['year']; 
$season=$_POST['season']; 
$camp=$_POST['camp']; 
$comment=$_POST['comment'];


// To protect MySQL injection (more detail about MySQL injection)
$year = stripslashes($year);
$season = stripslashes($season);
$camp = stripslashes($camp);
$comment = stripslashes($comment);
$year = mysql_real_escape_string($year);
$season = mysql_real_escape_string($season);
$camp = mysql_real_escape_string($camp);
$comment = mysql_real_escape_string($comment);

$sql="insert into $tbl_name values ('$year','$season','$camp','$comment')";
mysql_query($sql);
mysql_close();
header("location:forum.php");
?>