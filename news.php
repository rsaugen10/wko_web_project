
<html>
<head>
 <title> News </title>
 <link rel="stylesheet" type="text/css" href="project.css">
  <script src="WKO.js"></script>
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
		
		
		<div class="recent_news">
			<h1> Recent News </h1>
			<br>
			<br>
			<h2> Share A Toy </h2>
			<br>
			<p="news_info">
			Each year, Whole Kids Outreach hosts its Share A Toy Christmas Store
 			to provide families in need a place to shop for their children’s Christmas 
 			gifts. Parents in the WKO region are welcome to access this Store to 
 			pick out gifts for their children. To shop, an adult must have custody
 			of the child(ren) for whom they are shopping (proof may be a Food Stamp letter with the
 			child(ren)’s names, birth certificate(s), Social Security card(s), etc.)
 			 and must earn a shopping voucher. This voucher may be earned by volunteering 
 			 on the WKO site for an hour or donating $10 per child. Adults may volunteer 
 			 or donate in advance, Mondays through Thursdays (except holidays) from 9:00
 			  a.m.-2:00 p.m. For more information and to register to volunteer and shop,
 			 call Whole Kids Outreach at 573-663-3257.
			In conjunction with the Christmas Store, WKO will conduct its annual 
			winter garage sale – many clothes, coats, household items, etc. will be available.
			Want to help? Donations of new toys from individuals and groups
			 are accepted throughout the year with final collections during the 
			 last week of November when possible.
			</p>	
			<br>
			<br>
			
			<button class="showDisqus" id="showDisqus">showDisqus</button>
		</div>
</div>
  
    
    
    <div id="disqus_container">






<div id="disqus_thread">
	<div id="disqus">
	
	
    
    
    
<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
	</div>
</div>
</div>
</body>

</html>