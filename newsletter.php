<?php
	$file = fopen("newsletterlist.txt", "a") or die("Unable to open file!");
	$email = $_POST["email"];
	fwrite($file, $email);
	fclose($file);
	
	header('Location: thanks2.php');
?>