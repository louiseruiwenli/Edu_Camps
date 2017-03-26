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
          session_start();

          if( !isset($_SESSION['username']) ){
            echo '<p>Login unsuccessful<p><br>';

          }
          else{
            $temp = $_SESSION['username'];
            echo '<p>Hello! '. $temp.'</p><br>';

          }
          ?>
        </div>
        <div class="panel-body">
          <p><a href="home.php" class="btn btn-default btn-orange">Go to home page</a></p>
        </div>
    </div>
    </div>

  </body>
</html>
