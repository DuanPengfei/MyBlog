<?php
	session_start();    //开启 session
	include('./conn/conn.class.php');    //连接数据库
	include('./func/getFilename.class.php');    //获取文件名

	if(!isset($_SERVER['HTTP_REFERER'])) {
		header('Location: ./error.php');
	}
	else {
		//echo 'worked';
		$id = time();
		$title = $_POST['title'];
		$content = $_POST['content'];
		//$author = $_POST['author'];
		$category = $_POST['category'];

		if(isset($_POST['submit'])) {
			$sql = "INSERT INTO article (id, title, content, author, category) VALUES ($id, '$title', '$content', 'DuanPengfei', '$category')";
			//echo $sql;
			$query = mysqli_query($conn, $sql);
			if($query !== false) {
				echo '文章添加成功';
			}
			else {
				echo '文章添加失败';
			}
		}
?>
<meta charset="utf8" />
<form action="" method="post">
	Title:<input type="text" name="title" /><br />
	Content:<textarea name="content"></textarea><br />
	Category(c,c++,java,PHP):<input type="text" name="category" /><br />
	<input type="submit" name="submit" value="添加文章" />
</form>
<?php
	}
?>
