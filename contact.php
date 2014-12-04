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
		<form id="submitcomment" action="contact2.php" method="post">
		<ul>
			<li class = "contactli"><h2>Contact Us!</h2></li>
			<li class = "contactli">Name: <input type="text" name="name" autocorrect="off" autocapitalize="words" required></li>
			<li class = "contactli"><label for="email">Email:</label> <input type="email" name="email" placeholder="you@yourwebsite.com" required></li>
			<li class = "contactli"><label for="phone">Phone number:</label> <input type="tel" name="phone" placeholder="Your telephone number"> </li>
			<li class = "contactli"> <label for="comments">Comments:</label><br>
			<textarea name="comments" rows="10" cols="40"></textarea></li>
			<li class = "contactli"><input type="submit" value="Submit"></li>
	</ul>
	</form>	
	<div id=testfloatright></div>
		</div>

</body>
</html>