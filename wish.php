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
				<li class = "linkmenu"><a href="news.php?pages=News">News</a></li>
				<li class = "linkmenu"><a href="Contact.html">Contact</a></li>
			</ul>
		</div>
		
		<div class="tab_slider">
			<a href="http://facebook.com">Like Us on Facebook</a>
		</div>
		
		<div class="menu_slider">
			<ul>
				<li><a href="http://facebook.com">Home</a></li>
				<li><a href="http://facebook.com">Home</a></li>
				 <li><a href="http://facebook.com">Home</a></li>
				<li><a href="http://facebook.com">Home</a></li>
			<ul>
		</div>
		
<form action= "wish.php" method="POST">

<fieldset class="wishForm">
<legend> Add or Delete Items from the Wish List</legend>
	Add Item<input type="text" name="add">	</br>
	Delete Item<input type="text" name="delete">
	<input type="submit" name="change" value="Change List">
</fieldset>
		
</form>

<h1> Your Wish List </h1>

<p><?= display($pages) ?></p>
	
</body>

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
<?php

// Prints out info 
function display($pages)
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


