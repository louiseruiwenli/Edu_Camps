<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>KidCamps_Loading-Statistics</title>
<link rel="shortcut icon" href="../images/title_logo.png" />

<!-- Bootstrap -->
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/schedule.css">

<!-- Fonts-->
<link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
  
<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>

	<script type="text/javascript">
	window.onload = function () {
		var chart = new CanvasJS.Chart("chartContainer",
		{
			zoomEnabled: false,
            animationEnabled: true,
			title:{
				text: "Visitor Statistics in Recent Years of Different Locations"
			},
			axisY2:{
				valueFormatString:"0.0 bn",
				
				maximum: 1.2,
				interval: .2,
				interlacedColor: "#F5F5F5",
				gridColor: "#D7D7D7",      
	 			tickColor: "#D7D7D7"								
			},
                        theme: "theme2",
                        toolTip:{
                                shared: true
                        },
			legend:{
				verticalAlign: "bottom",
				horizontalAlign: "center",
				fontSize: 15,
				fontFamily: "Lucida Sans Unicode"

			},
			data: [
			{        
				type: "line",
				lineThickness:3,
				axisYType:"secondary",
				showInLegend: true,           
				name: "Yosemite National Park", 
				dataPoints: [
				{ x: new Date(1992, 0), y: 0.002 },
				{ x: new Date(1993, 0), y: 0.01 },
				{ x: new Date(1994, 0), y: 0.17 },
				{ x: new Date(1995, 0), y: 0.22 },
				{ x: new Date(1996, 0), y: 0.26 },
				{ x: new Date(1997, 0), y: 0.31 },
				{ x: new Date(1998, 0), y: 0.35 },
				{ x: new Date(1999, 0), y: 0.32 },
				{ x: new Date(2000, 0), y: 0.29 },
				{ x: new Date(2001, 0), y: 0.33 },
				{ x: new Date(2002, 0), y: 0.37 },
				{ x: new Date(2003, 0), y: 0.352 },
				{ x: new Date(2004, 0), y: 0.423  },
				{ x: new Date(2005, 0), y: 0.463 },
				{ x: new Date(2006, 0), y: 0.523 },
				{ x: new Date(2007, 0), y: 0.574 },
				{ x: new Date(2008, 0), y: 0.592 },
				{ x: new Date(2009, 0), y: 0.623 },
				{ x: new Date(2010, 0), y: 0.575 },
				{ x: new Date(2011, 0), y: 0.613 },
				{ x: new Date(2012, 0), y: 0.723 },
				{ x: new Date(2013, 0), y: 0.734 },
				{ x: new Date(2014, 0), y: 0.784 },
        { x: new Date(2015, 0), y: 0.82 },
        { x: new Date(2016, 0), y: 0.87 },


				]
			},
			{        
				type: "line",
				lineThickness:3,
				showInLegend: true,           
				name: "YellowStone National Park",
				axisYType:"secondary",
				dataPoints: [
				{ x: new Date(1992, 00), y: 0.12 },
				{ x: new Date(1993, 00), y: 0.19 },
				{ x: new Date(1994, 0), y: 0.25 },
				{ x: new Date(1995, 00), y: 0.28 },
				{ x: new Date(1996, 0), y: 0.31},
				{ x: new Date(1997, 00), y: 0.351 },
				{ x: new Date(1998, 0), y: 0.323 },
				{ x: new Date(1999, 00), y: 0.384 },
				{ x: new Date(2000, 0), y: 0.394 },
				{ x: new Date(2001, 0), y: 0.306 },
				{ x: new Date(2002, 0), y: 0.315 },
				{ x: new Date(2003, 0), y: 0.361 },
				{ x: new Date(2004, 0), y: 0.359  },
				{ x: new Date(2005, 0), y: 0.386 },
				{ x: new Date(2006, 0), y: 0.41 },
				{ x: new Date(2007, 0), y: 0.57 },
				{ x: new Date(2008, 0), y: 0.52 },
				{ x: new Date(2009, 0), y: 0.63 },
				{ x: new Date(2010, 0), y: 0.72 },
				{ x: new Date(2011, 0), y: 0.79 },
				{ x: new Date(2012, 0), y: 0.84 },
				{ x: new Date(2013, 0), y: 0.83 },
				{ x: new Date(2014, 0), y: 1.034 },
                { x: new Date(2015, 0), y: 1.102 },
        		{ x: new Date(2016, 0), y: 1.176 },
				]
			},
			{        
				type: "line",
				lineThickness:3,
				showInLegend: true,           
				name: "Zion National Park",        
				axisYType:"secondary",
				dataPoints: [
				{ x: new Date(1992, 0), y: 0.18 },
				{ x: new Date(1993, 0), y: 0.25},
				{ x: new Date(1994, 0), y: 0.28 },
				{ x: new Date(1995, 0), y: 0.31 },
				{ x: new Date(1996, 0), y: 0.28},
				{ x: new Date(1997, 0), y: 0.32 },
				{ x: new Date(1998, 0), y: 0.362 },
				{ x: new Date(1999, 0), y: 0.382 },
				{ x: new Date(2000, 0), y: 0.415 },
				{ x: new Date(2001, 0), y: 0.412 },
				{ x: new Date(2002, 0), y: 0.461 },
				{ x: new Date(2003, 0), y: 0.491 },
				{ x: new Date(2004, 0), y: 0.534  },
				{ x: new Date(2005, 0), y: 0.572 },
				{ x: new Date(2006, 0), y: 0.623 },
				{ x: new Date(2007, 0), y: 0.673 },
				{ x: new Date(2008, 0), y: 0.692 },
				{ x: new Date(2009, 0), y: 0.723 },
				{ x: new Date(2010, 0), y: 0.812 },
				{ x: new Date(2011, 0), y: 0.852 },
				{ x: new Date(2012, 0), y: 0.882 },
				{ x: new Date(2013, 0), y: 0.952 },
				{ x: new Date(2014, 0), y: 1.024 },
        { x: new Date(2015, 0), y: 1.141 },
        { x: new Date(2016, 0), y: 1.172 },
				]
			},
							{        
				type: "line",
				lineThickness:3,
				axisYType:"secondary",
				showInLegend: true,           
				name: "Golden Gate Park", 
				dataPoints: [
				{ x: new Date(1992, 0), y: 0 },
				{ x: new Date(1993, 0), y: 0 },
				{ x: new Date(1994, 0), y: 0.007 },
				{ x: new Date(1995, 0), y: 0.009 },
				{ x: new Date(1996, 0), y: 0.125},
				{ x: new Date(1997, 0), y: 0.173 },
				{ x: new Date(1998, 0), y: 0.284 },
				{ x: new Date(1999, 0), y: 0.231 },
				{ x: new Date(2000, 0), y: 0.274 },
				{ x: new Date(2001, 0), y: 0.292 },
				{ x: new Date(2002, 0), y: 0.371 },
				{ x: new Date(2003, 0), y: 0.361 },
				{ x: new Date(2004, 0), y: 0.389  },
				{ x: new Date(2005, 0), y: 0.402 },
				{ x: new Date(2006, 0), y: 0.414 },
				{ x: new Date(2007, 0), y: 0.421 },
				{ x: new Date(2008, 0), y: 0.381 },
				{ x: new Date(2009, 0), y: 0.379 },
				{ x: new Date(2010, 0), y: 0.391 },
				{ x: new Date(2011, 0), y: 0.44 },
				{ x: new Date(2012, 0), y: 0.481 },
				{ x: new Date(2013, 0), y: 0.53 },
				{ x: new Date(2014, 0), y: 0.621 },
        { x: new Date(2015, 0), y: 0.724 },
        { x: new Date(2016, 0), y: 0.749 },

				]
			},
			],
          
          
          legend: {
            cursor:"pointer",
            itemclick : function(e) {
              if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
              e.dataSeries.visible = false;
              }
              else {
                e.dataSeries.visible = true;
              }
              chart.render();
            }
          }
        });

chart.render();
}

</script>
  <script type="text/javascript" src="/assets/script/canvasjs.min.js"></script>
</head>


<body>
<nav class="navbar-default navbar-inverse">
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
        <li><a href="catalog.php">Shopping</a> </li>
        <li><a href="forum.php">Forum</a> </li>
        <li class="active"><a href="#">Statistics</a> </li>
        <li><a href="activities.php">Activities</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<div id="chartContainer" style="height: 500px; width: 100%;"></div>
<br>
<br>
<div class="container location">
	<div class="col-md-12">
		<h1 class="text-left">Location and Statics</h1>	
		
	</div>
  <hr class="special_hr">
	
  <div class="col-md-12">&nbsp;</div>
	
  <div class="row">
	<div class="col-md-12">
		<div class="media">	
			<div class="media-left">
				<img src="../images/yosemite.png" alt="yosemite">
			</div>
			<div class="media-body">
			  <h4 class="media-heading text-center">Yosemite National Park</h4>
				<h4>&nbsp;</h4>
				<div class="col-md-1"></div>
				<div class="col-md-6">
					<div class="row">
					<p>Facts & Information:</p>
					<ul>
						<li>Yosemite National Park is a national park spanning portions of Tuolumne, Mariposa and Madera counties in Northern California. The park, which is managed by the National Park Service, covers an area of 747,956 acres (1,168.681 sq mi; 302,687 ha; 3,026.87 km2) and reaches across the western slopes of the Sierra Nevada mountain range.</li>
					</ul>	
				</div>
			  </div>
				
				<div class="row">
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">
					<ul>
						<li>Yosemite is one of the largest and least fragmented habitat blocks in the Sierra Nevada, and the park supports a diversity of plants and animals. The park has an elevation range from 2,127 to 13,114 feet (648 to 3,997 m) and contains five major vegetation zones: chaparral/oak woodland, lower montane forest, upper montane forest, subalpine zone, and alpine.</li>
					</ul>
				</div>
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">&nbsp;</div>
				</div>
				
			</div>	
		</div>
	</div>
	<div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">&nbsp;</div>
	

	
	<div class="col-md-12">
		<div class="media">	
			<div class="media-left">
				<img src="../images/yellowstone.png" alt="yellowstone">
			</div>
			<div class="media-body">
			  <h4 class="media-heading text-center">YellowStone National Park</h4>
				<h4>&nbsp;</h4>
				<div class="col-md-1"></div>
				<div class="col-md-6">
					<div class="row">
					<p>Facts & Information:</p>
						<ul>
							<li>Yellowstone was the first National Park in the U.S. and is also widely held to be the first national park in the world. The park is known for its wildlife and its many geothermal features, especially Old Faithful Geyser, one of its most popular features.</li>
						</ul>
				</div>
			  </div>
				
				<div class="row">
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">
					<ul>
						<li>Yellowstone National Park spans an area of 3,468.4 square miles (8,983 km2), comprising lakes, canyons, rivers and mountain ranges.Yellowstone Lake is one of the largest high-elevation lakes in North America and is centered over the Yellowstone Caldera, the largest supervolcano on the continent.</li>

					</ul>
				</div>
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">&nbsp;</div>
				</div>
				
			</div>	
	  </div>
	</div>
	<div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">&nbsp;</div>
	
		
	<div class="col-md-12">
		<div class="media">	
			<div class="media-left">
				<img src="../images/zion.png" alt="zion">
			</div>
			<div class="media-body">
			  <h4 class="media-heading text-center">Zion National Park</h4>
				<h4>&nbsp;</h4>
				<div class="col-md-1"></div>
				<div class="col-md-6">
					<div class="row">
					<p>Facts & Information:</p>
						<ul>
							<li>Zion National Park is located in the Southwestern United States, near Springdale, Utah. A prominent feature of the 229-square-mile (590 km2) park is Zion Canyon, which is 15 miles (24 km) long and up to half a mile (800 m) deep, cut through the reddish and tan-colored Navajo Sandstone by the North Fork of the Virgin River.</li>
						</ul>	
				</div>
			  </div>
				
				<div class="row">
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">
					<ul>
						<li>Human habitation of the area started about 8,000 years ago with small family groups of Native Americans; the semi-nomadic Basketmaker Anasazi (300 CE) stem from one of these groups. In turn, the Virgin Anasazi culture (500 CE) developed as the Basketmakers settled in permanent communities. A different group, the Parowan Fremont, lived in the area as well.</li>
					</ul>
				</div>
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">&nbsp;</div>
				</div>
				
			</div>	
	  </div>
	</div>
	<div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">&nbsp;</div>
	<div class="col-md-12">&nbsp;</div>

	<div class="col-md-12">
		<div class="media">	
			<div class="media-left">
				<img src="../images/goldengate.png" alt="goldengate">
			</div>
			<div class="media-body">
			  <h4 class="media-heading text-center">Golden Gate Park</h4>
				<h4>&nbsp;</h4>
				<div class="col-md-1"></div>
				<div class="col-md-6">
					<div class="row">
					<p>Facts & Information:</p>
						<ul>
							<li>Golden Gate Park, located in San Francisco, California, United States, is a large urban park consisting of 1,017 acres (412 ha) of public grounds. It is administered by the San Francisco Recreation & Parks Department, which began in 1871 to oversee the development of Golden Gate Park.</li>
						</ul>		
				</div>
			  </div>
				
				<div class="row">
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">
					<ul>
						<li>Configured as a rectangle, it is similar in shape but 20 percent larger than Central Park in New York, to which it is often compared. It is over three miles (4.8 km) long east to west, and about half a mile (0.8 km) north to south. With 13 million visitors annually, Golden Gate is the fifth most-visited city park in the United States after Central Park in New York City, etc.</li>
					</ul>
				</div>
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">&nbsp;</div>
				<div class="col-md-5">&nbsp;</div>
				</div>
				
			</div>	
	  </div>
	</div>

	</div>
</div>

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
