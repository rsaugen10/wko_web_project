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
    
	<div class = "wrapper"> 
		
		<div class = "banner">
		</div>
		<div class = "menu">
			<ul>
				<li class = "linkmenu"><a href="aboutus.php?pages=About Us">About Us</a></li>
				<li class = "linkmenu"><a href="ourprograms.php?pages=Our Programs">Our Programs</a></li>
				<li class = "linkmenu"><a href="help.php?pages=Help Now">Help Now</a></li>
				<li class = "linkmenu"><a href="news.php">News</a></li>
				<li class = "linkmenu"><a href="contact.php">Contact Us</a></li>
				<?php
				$mon = date("n");
				if ($mon === "12") { ?> 
				<li class = "linkmenupic"><a href="April.php"><img id=aprilribbon src="images/BlueRibbonSmall.png"></a></li> <!-- In april, ribbon will show -->
				<?php } ?>
			</ul>
		</div>
		
		<div class="tab_slider">
			<a href="http://facebook.com">Like Us on Facebook</a>
		</div>
		
		<div class="menu_slider">
			<ul>
				<li class="sliderli"><a href="http://facebook.com">Home</a></li>
				<li class="sliderli"><a href="http://facebook.com">Home</a></li>
				<li class="sliderli"><a href="http://facebook.com">Home</a></li>
				<li class="sliderli"><a href="newslett.html">Newsletter</a></li>
			<ul>
		</div>
		
		
		<div class ="center_img">
		<img src="wko.jpg">
		</div>
		
		<div id = "feed">
				<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2F
				www.facebook.com%2Fnonprofits&amp;width=490&amp;colorscheme=light&amp;show_faces=true
				&amp;border_color&amp;stream=true&amp;header=true&amp;height=435" scrolling="yes" frameborder="0" 
				style="border:none; overflow:hidden; width:490px; height:78%; background: white; float:left; 
				"allowTransparency="true"></iframe>
		</div>
		
		
		<div id="boxwrapper">
		<div id="box1">
			<a href='#' class= "btn btn-red">Here is a button</a> 
		</div>
		
		<div id="box2">
			<a href='#' class= "btn btn-white">Here is a button</a> 
		</div>
		
		<div id="box3">
			<a href='#' class= "btn btn-blue">Here is a button</a> 
		</div>
		</div>
		
		
		<?php include 'footer.php';?>
		
	</div>
	
</body>

</html> 
