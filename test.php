<?php
	include('./conn/conn.class.php');
	$sql = 'SELECT * FROM article';
	$query = mysqli_query($conn, $sql);
	if($query !== false){
		while($result = mysqli_fetch_array($query)){
			echo $result[id] . ' ' . $result[title] . ' ' . $result[content] . '<br />';
		}
	}
?>
