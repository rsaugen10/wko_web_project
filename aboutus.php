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
			<div class="content">
			<h2><?= $pages ?></h2>
			<?= display($pages) ?>	
		</div>
		</div>
		
		<div id="box2">
		</div>
		
		<div id="box3">
		</div>
		</div>
		
		<div id="content2">
		<h1>DIV2</h1>
		</div>
		
		<div id="content3">
		<h1>DIV3</h1>
		</div>
		
		<div>
		<h1>DIV4</h1>
		</div>
		
		
	</div>
	
</body>

</html> 

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
