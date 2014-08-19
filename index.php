<?php
	session_start();    //开启 session
	include('./conn/conn.class.php');    //连接数据库
	include('./head.php');    //引入页面头部，显示导航信息
	include('./func/getFilename.class.php');    //获取当前文件名
?>

<div name="sidebar">
	<?php
		$sql = 'SELECT * FROM article ORDER BY id DESC LIMIT 5';
		$query = mysqli_query($conn, $sql);
		if($query !== false) {
			while($result = mysqli_fetch_array($query)) {
				$title = "<li><a href=$filename?id=" . $result[id] . '>' . $result[title] . '</a></li>';
				echo $title;
			}
		}
	?>
</div>
<div name="main">
	<?php
		$sql = 'SELECT * FROM article ORDER BY id DESC LIMIT 5';
		$query = mysqli_query($conn, $sql);
		$result = mysqli_fetch_array($query);    //获取最新一篇文章的 id
		$id = $result['id'];


		if(isset($_GET[id])) {
			$sql = "SELECT * FROM article WHERE id = " . $_GET['id'];
			$query = mysqli_query($conn, $sql);
			$result = mysqli_fetch_array($query);
			echo $result['content'];
		}
		else {
			$sql = "SELECT * FROM article WHERE id = $id";
			$query = mysqli_query($conn, $sql);
			$result = mysqli_fetch_array($query);
			echo $result['content'];
		}

		mysqli_close($conn);
	?>
</div>
