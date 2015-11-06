
	<?php
	echo "Ruby Books<br>";
	$path='/home/raha/Desktop/web/library/flexible/books/Cpp-Primer-Plus.pdf';
	$myfile = fopen("$path", "r") or die("Unable to open file!");
	fread($myfile,filesize("$path"));
	
	?>
