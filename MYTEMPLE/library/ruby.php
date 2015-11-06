<html>
<head>
	<link rel="stylesheet" type="text/css" href="./css/ruby.css">
	</head>
<body>
	<table  class='table1'>

			
	
	
	<tr><td>dowloads</td><td>books Name</td></tr>
	<tr><td>pdf download</td><td>ruby on rails</td></tr>
	<tr><td>
		
		<?php
		$dirPath = "/home/raha/Desktop/web/library/flexible/rubybooks";
		
	$handle=opendir($dirPath);
while ( $file = readdir( $handle ) ) {
 echo "<li>$file</li>";
}
closedir( $handle );
?>

</body>

	</td></tr>
</table>
</body>