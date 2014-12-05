<!DOCTYPE>
<html>
<head>
 <title> index</title>
 
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="WKO.js" type="text/javascript"></script>
 <link rel="stylesheet" type="text/css" href="project.css">
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
				<li><a href="http://facebook.com">Home</a></li>
				<li><a href="http://facebook.com">Home</a></li>
				 <li><a href="http://facebook.com">Home</a></li>
				<li><a href="http://facebook.com">Home</a></li>
			<ul>
		</div>
		
		<div id = "feed">
			<h1 id="mission">Our Mission</h1>
			
			<p><?= displayMisson() ?></p>
			
				<!-- <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2F
				www.facebook.com%2Fnonprofits&amp;width=490&amp;colorscheme=light&amp;show_faces=true
				&amp;border_color&amp;stream=true&amp;header=true&amp;height=435" scrolling="yes" frameborder="0" 
				style="border:none; overflow:hidden; width:490px; height:78%; background: white; float:left; 
				"allowTransparency="true"></iframe> -->
		</div>
		
		<div class ="center_img">
		<img src="wko.jpg">
		</div>
		
		
		
		
		<div id="boxwrapper">
		<div id="box1">
			<div class="contentFiles">
			
				<h2> About Us </h2>
				<p><?= displayAbout() ?></p>
			</div>
			<a href='#' class= "btn btn-red">Here is a button</a> 
		</div>
		
		<div id="box2">
			
			<div class="contentFiles">
			
			<h3>Our Programs</h3
				<p><?= displayProg() ?></p>
			</div>
			<a href='#' class= "btn btn-white">Here is a button</a> 
		</div>
		
		<div id="box3">
			
			<div class="contentFiles">
				
				<h4>Help Now</h4>
				<p><?= displayHelp() ?></p>
			</div>
			<a href='#' class= "btn btn-blue">Here is a button</a> 
		</div>
		</div>
		
		<?php include 'footer.php';?>
		
	</div>

</body>

</html> 
