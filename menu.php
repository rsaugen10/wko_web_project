
<a href ="index.php"><div class = "banner">
</div></a>
		<div class = "menu">
			<ul>
				<li class = "linkmenu"><a href="aboutus.php">About Us</a></li>
				<li class = "linkmenu"><a href="ourprograms.php">Our Programs</a></li>
				<li class = "linkmenu"><a href="help.php">Help Now</a></li>
				<li class = "linkmenu"><a href="news.php">News</a></li>
				<li class = "linkmenu"><a href="contact.php">Contact Us</a></li>
				<?php
				$mon = date("n");
				if ($mon === "12") { ?> 
				<li class = "linkmenupic"><a href="April.php"><img id="aprilribbon" src="images/BlueRibbonSmall.png" alt="april"></a></li> <!-- In april, ribbon will show -->
				<?php } ?>
			</ul>
		</div>
