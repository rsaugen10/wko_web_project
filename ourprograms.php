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
		
		
		<div id="main-content">
		 <h1 id="program-head">OUR PROGRAMS</h1>
		 <div class="wko-video">
			<iframe class=video src="//www.youtube.com/embed/aN6k8VPXqss" frameborder="0" allowfullscreen></iframe>
		 </div>
		 <div class="intro-info">
				<h2 class="orange-head">supporting the growth and development of children</h2>
				<p>
				This is a paragraph!
				</p>
		 </div>
		</div>

		<div id="content1">
			<div id="home-visit">
			<h1>Home Visiting</h1>
			<p>Info About Home Visiting Program</p>
			</div>
			<div id="pic1"></div>
			<div id="pic2"></div>
			<div id="pic2B"></div>
		</div>

		<div id="content2">
			<div id="center-based">
			<h1>Center Based</h1>
			<p>Info About Center Based<p>
			</div>
			<div id="pic3"></div>
			<div id="pic4"></div>
			<div id="pic5"></div>
			<div id="pic6"></div>
			<div id="pic7"></div>
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
