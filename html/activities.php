<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>KidCamps_Loading_Activity</title>
<link rel="shortcut icon" href="../images/title_logo.png" />

<!-- Bootstrap -->
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/game.css">
<link rel="stylesheet" href="../css/act.css">

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
        <li><a href="forum.php">Forum</a> </li>
        <li><a href="visualization.php">Statistics</a> </li>
        <li class="active"><a href="#">Activities</a></li>
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


<div class="container location">
	<div class="col-md-12">
		<h1 class="text-left">Computer-based games</h1>	
		
	</div>
  <hr class="special_hr">
	
  <div class="col-md-12">&nbsp;</div>
	
  <div class="row">
		
	<!--List start here-->
	<div class="col-md-12">
		<div class="media">	
			<div class="media-left">
				<img src="../images/sudoku_act.png" alt="sudoku">
			</div>
			<div class="media-body">
			  <h4 class="media-heading text-center">Sudoku</h4>
				<h4>&nbsp;</h4>
				<div class="col-md-1"></div>
				<div class="col-md-6">
					<div class="row">
					<p><strong>About the game:</strong></p>
					<ul>
						<li><strong>What is Sudoku?</strong></li>
						<li>Sudoku is an easy to learn logic-based number placement puzzle.</li>
						<li>The word Sudoku is short for Su-ji wa dokushin ni kagiru which means "the numbers must be single".</li>
					</ul>
		
				</div>
			  </div>

			  <div class="row">
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">
					<ul>
						<li><strong>How to Play?</strong></li>
						<li>A Sudoku puzzle consists of 81 cells which are divided into nine columns, rows and regions.</li>
						<li>The task is now to place the numbers from 1 to 9 into the empty cells in such a way that in every row, column and 3×3 region each number appears only once.</li>
					</ul>
				</div>
				
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">&nbsp;</div>
					<div class="col-md-5 text-center">					
					  <a href="../sudoku/index.html" class="btn btn-default btn-submit-fix">Play Sudoku</a>
				  </div>
				</div>
				
			</div>	
		</div>
	</div>
	<!--Item ends-->
		
	<div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">&nbsp;</div>
	

	
	<div class="col-md-12">
		<div class="media">	
			<div class="media-left">
				<img src="../images/2048_act.png" alt="2048">
			</div>
			<div class="media-body">
			  <h4 class="media-heading text-center">2048</h4>
				<h4>&nbsp;</h4>
				<div class="col-md-1"></div>
				<div class="col-md-6">
					<div class="row">
				  <p><strong>About the game:</strong></p>
				<ul>
						<li><strong>Comparisons to Flappy Bird</strong></li>
						<li>2048 has been compared to Flappy Bird by several commentators.</li>
						<li>Both are clones of previous games, with their success leading to further clones, and both games have been described as viral and addictive.</li>
					</ul>


				</div>
			  </div>
				
				<div class="row">
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">
							<ul>
								<li><strong>How to Play?</strong></li>
							<li>The game is won when a tile with a value of 2048 appears on the board, hence the name of the game. </li>
							<li>After reaching the 2048 tile, players can continue to play (beyond the 2048 tile) to reach higher scores. </li>
						</ul>
				</div>
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">&nbsp;</div>
					<div class="col-md-5 text-center">					
					  <a href="../2048/index.html" class="btn btn-default btn-submit-fix">Play 2048</a>
				  </div>
				</div>
				
			</div>	
	  </div>
	</div>
	
	<!--Item ends-->
	<div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">&nbsp;</div>
	
		
	<div class="col-md-12">
		<div class="media">	
			<div class="media-left">
				<img src="../images/pacman_act.png" alt="pacman">
			</div>
			<div class="media-body">
			  <h4 class="media-heading text-center">Pacman</h4>
				<h4>&nbsp;</h4>
				<div class="col-md-1"></div>
				<div class="col-md-6">
					<div class="row">
					<p><strong>About the game:</strong></p>
						<ul>
							<li><strong>History of Pacman</strong></li>
							<li>Pacman is an all time classic video game.  Pacman broke the mold, appealing to both men and women alike</li>
							<li>When it was released in 1980, the popular games were Asteroids and Space Invaders.</li>
						</ul>
				</div>
			  </div>
				
				<div class="row">
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">
						<ul>
							<li><strong>How to Play?</strong></li>
							<li>Use the arrow keys to move, avoid the ghosts. </li>
							<li>Get powerups and you can turn around to catch the ghosts. </li>
							<li>Some of the ghosts move faster than others. </li>
							<li>Each ghost has different rules for how they track you. </li>
							<li>Bonus items can help get you extra lives.</li>
						</ul>	
				</div>
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">&nbsp;</div>
					<div class="col-md-5 text-center">					
					  <a href="../pacman/index.html" class="btn btn-default btn-submit-fix">Play Pacman</a>
				  </div>
				</div>
				
			</div>	
	  </div>
	</div>
	<!--Item ends-->
		
	<div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">&nbsp;</div>

	<div class="col-md-12">
		<div class="media">	
			<div class="media-left">
				<img src="../images/clumsy_act.jpg" alt="clumsy_act">
			</div>
			<div class="media-body">
			  <h4 class="media-heading text-center">Clumsy Bird</h4>
				<h4>&nbsp;</h4>
				<div class="col-md-1"></div>
				<div class="col-md-6">
					<div class="row">
					<p><strong>About the game:</strong></p>
						<ul>
							<li><strong>What is Clumsy Bird and How to Play?</strong></li>
							<li>Clumsy Bird is flying game that takes place in a retro world of Flappy Bird.</li>
							<li>It is all about helping the bird fly a certain distance and avoiding all obstacles during the flight.</li>
							<li>You should play the game for high scores and look to beat your best scores each time you replay it. </li>
							<li>Clumsy Bird is a retro version of Flappy Bird.</li>
						</ul>			
				</div>
			  </div>
				
				<div class="row">
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">
						<ul>
							<li><strong>What is Flappy Bird?</strong></li>
							<li>Flappy Bird is the most popular game on the Internet these days. </li>
							<li>It is a simple one-button game in which you have to navigate our beloved bird past the obstacles. </li>
							<li>You do this by clicking your mouse repeatedly. Each time you click, the bird flies up. </li>
							<li>This addictive flash version is extremely close to the original Flappy Bird that was taken offline from the App Store by creator Dong Nguyen.</li>
						</ul>
				</div>
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">&nbsp;</div>
					<div class="col-md-5 text-center">					
					  <a href="../clumsy_bird/index.html" class="btn btn-default btn-submit-fix">Play Clumsy Bird</a>
				  </div>
				</div>
				
			</div>	
	  </div>
	</div>
	<!--Item ends-->

	</div>
</div>
<!--Computer Based ends-->


<div class="container location">
	<div class="col-md-12">
		<h1 class="text-left">Outdoor Activities</h1>			
	</div>
  <hr class="special_hr">
	
  <div class="col-md-12">&nbsp;</div>
	
	<!--Ourdoor starts here-->
  <div class="row">
		
	<div class="col-md-12">
		<div class="media">	
			<div class="media-left">
				<img src="../images/light.jpg" alt="light">
			</div>
			<div class="media-body">
			  <h4 class="media-heading text-center">Red Light, Green Light</h4>
				<h4>&nbsp;</h4>
				<div class="col-md-1"></div>
				<div class="col-md-6">
					<div class="row">
					<p><strong>About the game:</strong></p>
					<ul>
						<li><strong>How to play?</strong></li>
						<li>You will need one person at the finish line and the rest of the participants will line up a distance away facing the finish line.</li>
						<li>The person at the finish line is in charge of saying "red light" or "green light."</li>
						<li>When you hear "green light," everyone moves as fast as they can toward the finish line.</li>
						<li>When you hear "red light," everyone must stop immediately.</li>
						<li>Anyone that doesn't stop when they hear "red light" must go back to the start.</li>
						<li>The first person to reach the finish line wins!</li>
					</ul>
		
				</div>
			  </div>

			  <div class="row">
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">
					<ul>
						<li>Red Light, Green Light is perhaps one of the easiest games to play. </li>
						<li>It promotes listening and following directions while allowing lots of active play!</li>
					</ul>
				</div>		
			</div>	
				
		</div>
	</div>
	</div>
	<!--Item ends-->	
		
	<div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">&nbsp;</div>
	

	
	<div class="col-md-12">
		<div class="media">	
			<div class="media-left">
				<img src="../images/mother.jpg" alt="mother">
			</div>
			<div class="media-body">
			  <h4 class="media-heading text-center">Mother May I?</h4>
				<h4>&nbsp;</h4>
				<div class="col-md-1"></div>
				<div class="col-md-6">
					<div class="row">
				  <p><strong>About the game:</strong></p>
					<ul>
						<li><strong>How to Play?</strong></li>
						<li>One person needs to be at the finish line; that person is "Mother." The rest of the players need to line up at a starting point.</li>
						<li>"Mother" calls on each participant separately giving them instructions on how to move toward the finish line. For example, "Lizzie, take 3 giant steps" or "AJ march 4 steps."</li>
						<li>The participant then has to ask, "Mother may I" and Mother answers, "Yes, you can." The participant can then move according to the directions.</li>
						<li>If anyone forgets to ask "Mother may I?" before moving, they have to go back to the start!</li>
						<li>The first person to the finish line wins.</li>
					</ul>
					</div>
			  </div>
				
				<div class="row">
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">
						<ul>
							<li>I loved playing Mother May I?</li>
							 <li>as a kid and was excited to teach the girls how to play. </li>
							 <li>This one is slightly more difficult, but still suitable for young children.</li>
						</ul>
				</div>	
				</div>	
	  	</div>
	</div>
	</div>
	<!--Item Ends-->
		
	<div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">&nbsp;</div>

	</div>
</div>
<!--Outdoor Ends-->



<div class="container location">
	<div class="col-md-12">
		<h1 class="text-left">Robotics</h1>	
		
	</div>
  <hr class="special_hr">
	
  <div class="col-md-12">&nbsp;</div>
  <div class="row">
		
	<div class="col-md-12">
		<div class="media">	
			<div class="media-left">
				<img src="../images/cozmo.jpg" alt="cozmo">
			</div>
			<div class="media-body">
			  <h4 class="media-heading text-center">Cozmo</h4>
				<h4>&nbsp;</h4>
				<div class="col-md-1"></div>
				<div class="col-md-6">
					<div class="row">
					<p><strong>About the game:</strong></p>
					<ul>
						<li>This little guy is like something out of the movies!</li>
						<li> Cozmo is the newest generation of playful robot and the things he can do are beyond amazing.</li>
						<li> Powered by cutting edge artificial intelligence (AI), Cozmo has real emotions and uses advanced facial recognition to react to your actions.</li>
						<li> A game playing machine, Cozmo offers kids a gamified experience where the more you play with him, the more games and upgrades are unlocked.</li>
						<li> Cozmo is compatible with iOS and Android and requires the free Cozmo app to be downloaded.</li>
					</ul>
		
				</div>
			  </div>

			  <div class="row">
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">
					<ul>
						<li>Ages: 8+ </li>
						<li>Applications: AI, Games, Robotic friend</li>
						<li><a href="https://www.amazon.com/Anki-000-00048-Cozmo/dp/B01GA1298S/?tag=fractuslearni-20" class="btn btn-default btn-submit-fix">Full specifications</a></li>
					</ul>
					
				</div>
			</div>	
		</div>
	</div>
	</div>
	<!--Item Ends-->

	<div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">&nbsp;</div>
	

	
	<div class="col-md-12">
		<div class="media">	
			<div class="media-left">
				<img src="../images/star.jpg" alt="star">
			</div>
			<div class="media-body">
			  <h4 class="media-heading text-center">BB-8 App-Enabled Droid</h4>
				<h4>&nbsp;</h4>
				<div class="col-md-1"></div>
				<div class="col-md-6">
					<div class="row">
				  <p><strong>About the game:</strong></p>
				<ul>
						<li>With a heap of personality and a starring role in the newest Star Wars film, the BB-8 Droid is possibly the coolest robot on the planet.</li>
						<li> Controlled using a smartphone or tablet this little guy can recognize and react to your voice, record holographic videos and with fully autonomous behavior, he even has a mind of his own!</li>
						<li> Built with all the quality and technology of the Sphero, this dashing droid is the ultimate robot for kids who love Star Wars but want to do more than just play games.</li>
					</ul>


				</div>
			  </div>
				
				<div class="row">
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">
							<ul>
							<li>Ages: 5+</li>
							 <li>Applications: RC, Games, Outdoor, Programming, Star Wars! </li>
							 <li>This one is slightly more difficult, but still suitable for young children.</li>
								<li><a href="https://www.amazon.com/Sphero-R001ROW-BB-8-App-Enabled-Droid/dp/B0107H5FJ6/?tag=fractuslearni-20" class="btn btn-default btn-submit-fix">Full specifications</a></li>
						</ul>
				</div>	
			</div>	
	  </div>
	</div>
</div>		
<!--Item Ends-->



 <div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">&nbsp;</div>
	
	<div class="col-md-12">
		<div class="media">	
			<div class="media-left">
				<img src="../images/shark.jpg" alt="shark">
			</div>
			<div class="media-body">
			  <h4 class="media-heading text-center">RC Flying Shark</h4>
				<h4>&nbsp;</h4>
				<div class="col-md-1"></div>
				<div class="col-md-6">
					<div class="row">
					<p><strong>About the game:</strong></p>
					<ul>
						<li>A Remote Control Flying Shark is pretty much everyone’s dream (or nightmare).</li>
						<li>While this majestically floating robot is not exactly educational, it’s a pretty spectacular and fun way to introduce kids to robotics. </li>
						<li>With simple controls and a 40 foot range, this helium-filled Great White Shark balloon maneuvers through the air like… Well, like a fish in water.</li>
					</ul>
		
				</div>
			  </div>

			  <div class="row">
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">
					<ul>
						<li>Ages: 8+ </li>
						<li>Applications: Fun, RC</li>
						<li><a href="https://www.amazon.com/gp/product/B005FYEAJ8/ref=as_li_tl?tag=fractuslearni-20&ie=UTF8&camp=1789&creative=390957&creativeASIN=B005FYEAJ8&linkCode=as2&linkId=VB6W5NU2P4CVPSLB" class="btn btn-default btn-submit-fix">Full specifications</a></li>
					</ul>	
				</div>			
				</div>	
			</div>
	</div>
</div>
<!--Item Ends-->
</div>
</div>

	<div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">&nbsp;</div>


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
