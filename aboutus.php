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
<?php $pages = $_GET['pages'];
?>
    
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
		 <h1 id="program-head">About Us</h1>
		 <div class="wko-video">
			<iframe class=video src="//www.youtube.com/embed/aN6k8VPXqss" frameborder="0" allowfullscreen></iframe>
		 </div>
		 <div class="intro-info">
				<h2 class="orange-head">About Us</h2>
				<p>
				<?php include 'includeText.php'?>
				<?=displayAbout();?>
				</p>
		 </div>
		</div>
<div id="boxwrapper">
		<div id="box1">
			<div class="content">
			<h2>Contact Us</h2>	
			<p>Toll-free: 800-760-3259
				Phone: 573-663-3257
				Fax: 573-663-2933
				Whole Kids Outreach
				is a 501(c)(3) 
				nonprofit organization. 
				Federal ID number: 43-1839370
			</p>
		</div>
		</div>
		
		<div id="box2">
			<h2> Our Location </h2>
			<p>
				Whole Kids Outreach
				62143 Highway 21
				Ellington, MO 63638
			</p>
		</div>
			
</div>

<?php include 'footer.php'; ?>
	
</body>

</html> 

<?php

// Prints out info 
function display($pages)
{
  $textArray = file($pages."/content.txt",FILE_IGNORE_NEW_LINES);
			foreach ($textArray as $text) {
				$a = explode(":", $text);
				print '<dt>'.$a[0].'</dt>';
				/*print '<dd>'.$a[1].'</dd>';	
				*/
			}
			print '</dl>';

	//print '<img src="'.$pages.'/picture.jpg" alt="image" title="image"> <dl>';
}
?>
