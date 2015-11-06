<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/yonet.css">
</head>
<body>

<div class='orta'>
	To add books:
	<form action='yonet.php' method='post'>
	<input type='file' name='fname' value='filename'>
	<input type='submit' name='submit' value='submit'>
	</form>

	<?php
	include 'baglan.php';
	$selected = mysql_select_db("lib",$dbhandle)
  or die("Could not select examples");
  $fname=$_POST['fname'];
  $sql = "INSERT INTO books('ruby')
   VALUES ('$fname')";
	query($sql);
 

?>
</div>

</body>
</html>