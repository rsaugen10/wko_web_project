<!DOCTYPE>
<html>
<head>
<title> index</title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="jquery-1.11.1.min.js" type="text/javascript"></script>
		<script src="WKO.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="project.css">
		<link rel="stylesheet" type="text/css" href="sliderpicture.css">
</head>

<body>

     <?php include 'includeText.php';?>
	<div class = "wrapper"> 
	
		<?php include 'menu.php';?>
		<h1 class="title">Whole </h1><h1 class="title">Kids </h1><h1 class="title">Outreach </h1>
		<div class="tab_slider">
			<a href=https://www.facebook.com/wholekidsoutreach>Like Us on Facebook</a>
		</div>
		
		
		<div class="menu_slider">
			<ul>
				<li id="sliderclass1"><a href="index.php">Home</a></li>
				<li id="sliderclass2"><a href="index.php">Donate</a></li>
				<li id="sliderclass3"><a href="wishList.php">Wish List</a></li>
				<li id="sliderclass4"><a href="newslett.php">Newsletter</a></li>
			</ul>
		</div>
		
		<div id = "feed">
			<h1 id="mission">Our Mission</h1>
			
			<p><?= displayMisson() ?></p>
			
		</div>
		
		
		<div class ="center_img">
			<img src="wko.jpg" alt="image">
		</div>
		
		
		<div id="boxwrapper">
		<div id="box1">

			<div class="contentFiles">
			
				<h1> About Us </h1>
				<p><?= displayAbout() ?></p>
			</div>
			<a href='aboutus.php' class= "btn btn-red">Learn More</a> 
		</div>
		
		<div id="box2">
			
			<div class="contentFiles">
			
			<h1>Our Programs</h1>
				<p><?= displayProg() ?></p>
			</div>
			<a href='ourprograms.php' class= "btn btn-white">Learn More</a> 
		</div>
		
		<div id="box3">
			
			<div class="contentFiles">
				
				<h1>Help Now</h1>
				<p><?= displayHelp() ?></p>
			</div>
			<a href='help.php' class= "btn btn-blue">Learn More</a> 

		</div>
		</div>
		
		<?php include 'footer.php';?>
	</div>
</body>
</html>