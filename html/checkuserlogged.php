<?php
    session_start();

    if( !isset($_SESSION['username']) ){
      header("location:login.html");

    }
    else{
      $temp = $_SESSION['username'];
      echo $temp;

    }
?>

<html>
  <head>
    <body>
      <p>
        <a href='logout.php'>logout</a>
      </p>
    </body>
  </head>
</html>
