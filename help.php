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
				<li id="sliderclass1"><a href="index.php">Home</a></li>
				<li id="sliderclass2"><a href="index.php">Donate</a></li>
				<li id="sliderclass3"><a href="wishList.php">Wish List</a></li>
				<li id="sliderclass4"><a href="newslett.php">Newsletter</a></li>
			<ul>
		</div>
		
		<div id="main-content">
		 <h1 id="program-head">Help Now</h1>
		 <div class="wko-video">
			<iframe class=video src="//www.youtube.com/embed/aN6k8VPXqss" frameborder="0" allowfullscreen></iframe>
		 </div>
		 <div class="intro-info">
				<h2 class="orange-head">Help Now</h2>
				<p>
				<?php include 'includeText.php'?>
				<?=displayHelp();?>
				</p>
		 </div>
		</div>
<div id="boxwrapper">
		
			<div class="content">
			
			<h2>Help Us and Volunteer!</h2>	
			<p>
			Lorem Ipsum is simply dummy text of the printing and typesetting
			industry. Lorem Ipsum has been the industry's standard dummy text
			ever since the 1500s, when an unknown printer took a galley of type
			and scrambled it to make a type specimen book. It has survived not 
			only five centuries, but also the leap into electronic typesetting,
			remaining essentially unchanged. It was popularised in the 1960s with
			the release of Letraset sheets containing Lorem Ipsum passages, and more
			recently with desktop publishing software like Aldus PageMaker including
			versions of Lorem Ipsum.
			</p>
	
		</div>
		
		
			
</div>

<?php include 'footer.php'; ?>
	
</body>

</html> 


