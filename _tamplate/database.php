<?php  

$mysqli = new mysqli('localhost','root','','proyek');

if ($mysqli->connect_errno) {
	die('Database connection error');
}

?>
