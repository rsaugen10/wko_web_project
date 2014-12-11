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
				<li class = "linkmenu"><a href="news.php?pages=News">News</a></li>
				<li class = "linkmenu"><a href="Contact.php">Contact</a></li>
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
		
<?php

$add = $_POST["add"];
$delete = $_POST["delete"];

if(isset($_POST["add"])) {
$text_file = fopen("list.txt", "a");
fwrite($text_file, $add."\r\n");
}	

if(isset($_POST["delete"])) {
$contents = file_get_contents("list.txt");
$contents = str_replace($delete,'',$contents);
file_put_contents("list.txt", $contents);
}
?>

<h1> Your Wish List </h1>

<p><?= display() ?></p>
	
</body>


<?php

// Prints out info 
function display()
{
  $textArray = file("list.txt",FILE_IGNORE_NEW_LINES);
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

</html> 


