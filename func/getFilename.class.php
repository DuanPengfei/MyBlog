<?php
	// 获取当前文件的文件名
	function getFilename($name){
		$url = $name;
		$arr = explode('/', $url);
		$filename = end($arr);
		return $filename;
	}
?>
