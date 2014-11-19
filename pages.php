<!DOCTYPE html>
<!-- Dynamically creates pages for descriptions 
	of each type of part based on the link clicked -->

<?php $pages = $_GET['pages'];
?>
<!DOCTYPE html>
<html>
<head>
 <title> index</title>
 <link rel="stylesheet" type="text/css" href="project.css">
 </head>
 
<body>
	<div class = "wrapper"> 
		
		<div class = "banner">
		</div>
		<div class = "menu">
			<ul>
				<li><a href="pages.php?pages=About Us">About Us</a></li>
				<li><a href="pages.php?pages=Our Programs">Our Programs</a></li>
				<li><a href="pages.php?pages=Help Now">Help Now</a></li>
				<li><a href="pages.php?pages=News">News</a></li>
				<li><a href="Contact.html">Contact</a></li>
			</ul>
		</div>
		
		<div class="content">
			<h2><?= $pages ?></h2>
			<br>
			<br>
			<?= display($pages) ?>	
		</div>

	</div>
</body>
</html>

<?php

// Prints out info 
function display($pages)
{
  $textArray = file($pages."/content.txt",FILE_IGNORE_NEW_LINES);
			foreach ($textArray as $text) {
				$a = explode(":", $text);
				print '<dt>'.$a[0].':</dt>';
				print '<dd>'.$a[1].'</dd>';	
				
			}
			print '</dl>';

	//print '<img src="'.$pages.'/picture.jpg" alt="image" title="image"> <dl>';
}
?>

