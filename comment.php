<?php
	session_start();    //开启 session
	include('./conn/conn.class.php');    //连接数据库
	include('./func/getFilename.class.php');    //获取文件名
	
	$id = time();
	$content = $_POST['content'];
	//$author = $_POST['author'];
	$article_id = $_POST['article_id'];

	$sql = "INSERT INTO comment (id, content, author, article_id) VALUES ($id, '$content', 'DuanPengfei', '$article_id')";
	echo $sql;
	$query = mysqli_query($conn, $sql);
	
	header("Location: ./article.php?id=$article_id");
?>