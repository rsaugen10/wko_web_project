<?php

// Prints out info 
function displayAbout()
{
  $textArray = file("About Us/content.txt",FILE_IGNORE_NEW_LINES);
			foreach ($textArray as $text) {
				$a = explode(":", $text);
				print '<dt>'.$a[0].'</dt>';
				/*print '<dd>'.$a[1].'</dd>';	
				*/
			}
			print '</dl>';

	//print '<img src="'.$pages.'/picture.jpg" alt="image" title="image"> <dl>';
}

// Prints out info 
function displayProg()
{
  $textArray = file("Our Programs/content.txt",FILE_IGNORE_NEW_LINES);
			foreach ($textArray as $text) {
				$a = explode(":", $text);
				print '<dt>'.$a[0].'</dt>';
				/*print '<dd>'.$a[1].'</dd>';	
				*/
			}
			print '</dl>';

	//print '<img src="'.$pages.'/picture.jpg" alt="image" title="image"> <dl>';
}

// Prints out info 
function displayHelp()
{
  $textArray = file("Help Now/content.txt",FILE_IGNORE_NEW_LINES);
			foreach ($textArray as $text) {
				$a = explode(":", $text);
				print '<dt>'.$a[0].'</dt>';
				/*print '<dd>'.$a[1].'</dd>';	
				*/
			}
			print '</dl>';

	//print '<img src="'.$pages.'/picture.jpg" alt="image" title="image"> <dl>';
}

// Prints out info 
function displayMisson()
{
  $textArray = file("Misson Statment/content.txt",FILE_IGNORE_NEW_LINES);
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