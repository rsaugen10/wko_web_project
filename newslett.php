<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="WKO.js" type="text/javascript"></script>
 <link rel="stylesheet" type="text/css" href="project.css">
 <link rel="stylesheet" type="text/css" href="contact.css">
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
		<form name="myform" id="myform" action="newsletter.php" method="POST">  
			<!-- The Email form field -->
    		<label for="email">Subscribe to our Newsletter!</label> <input type="email" name="email" placeholder="you@yourwebsite.com" required>
			<input type="submit" name="submit" value="Submit"> 
		</form>
		</div>

</body>
</html>