<?php
$page=$_GET['page'];
switch ($page) {
	case "ruby": include 'ruby.php'; break;
	
	default: include 'default.php'; break;
}
?>