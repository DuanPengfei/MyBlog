<?php 
	$conn = mysqli_connect('localhost', 'root', '', 'blog') or die('Can\'t connect database');
	$query = mysqli_query($conn, "SET NAMES 'utf8'");
?>
