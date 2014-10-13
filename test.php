<?php
	/*
	include('./conn/conn.class.php');
	$sql = 'SELECT * FROM user';
	$usernamePw = array();
	$query = mysqli_query($conn, $sql);
	if($query !== false) {
		while($result = mysqli_fetch_array($query)) {
			$usernamePw[$result['username']] = $result;
		}
	}
	*/

	function getFilename($name){
		$url = $name;
		$arr = explode('/', $url);
		$filename = end($arr);
		return $filename;
	}
	
	$name = $_SERVER['HTTP_REFERER'];
	echo $name, '<br />';
	//$name = 'http://localhost/myBlog/1.php';
	//echo $name;
	$filename = getFilename($name);
	echo $filename;
?>
