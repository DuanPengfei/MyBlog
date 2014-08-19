<?php
	// 获取当前文件的文件名
	function getFilename(){
		$url = $_SERVER['PHP_SELF'];
		$arr = explode('/', $url);
		$filename = end($arr);
		return $filename;
	}
	$filename = getFilename();
?>
