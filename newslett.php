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
 <link rel="stylesheet" type="text/css" href="sliderpicture.css">
</head>

<body>
	<div class = "wrapper"> 
		<?php include 'menu.php';?>
		<div class="tab_slider">
			<a href=https://www.facebook.com/wholekidsoutreach>Like Us on Facebook</a>
		</div>
		
		
		<div class="menu_slider">
			<ul>
				<li id="sliderclass1"><a href="index.php">Home</a></li>
				<li id="sliderclass2"><a href="index.php">Donate</a></li>
				<li id="sliderclass3"><a href="wishList.php">Wish List</a></li>
				<li id="sliderclass4"><a href="newslett.php">Newsletter</a></li>
			<ul>
		</div>
		<form name="myform" id="myform" action="newsletter.php" method="POST">  
			<!-- The Email form field -->
    		<label for="email"><h1 class="title">Subscribe to our Newsletter!<h1></label> <input id="newsemail" type="email" name="email" placeholder="you@website.com" required>
			<input type="submit" name="submit" value="Submit"> 
		</form>
		</div>

</body>
</html>