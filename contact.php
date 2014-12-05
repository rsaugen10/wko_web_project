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
		<form id="submitcomment" action="contact2.php" method="post">
		<ul>
			<li class = "contactli"><h1 class="title">Contact Us!</h1></li>
			<li class = "contactli">Name: <input type="text" name="name" autocorrect="off" autocapitalize="words" required></li>
			<li class = "contactli"><label for="email">Email:</label> <input type="email" name="email" placeholder="you@website.com" required></li>
			<li class = "contactli"><label for="phone">Phone number:</label> <input type="tel" name="phone" placeholder="Your telephone number"> </li>
			<li class = "contactli"> <label for="comments">Comments:</label><br>
			<textarea name="comments" rows="10" cols="40"></textarea></li>
			<li class = "contactli"><input type="submit" value="Submit"></li>
	</ul>
	</form>
		</div>

</body>
</html>