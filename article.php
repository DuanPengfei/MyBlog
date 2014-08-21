<?php
	session_start();    //开启 session
	include('./conn/conn.class.php');    //连接数据库
	include('./head.php');    //引入页面头部，显示导航信息
	include('./func/getFilename.class.php');    //获取文件名
?>

<div name=article>
	<?php
		$filename = getFilename($_SERVER['PHP_SELF']);    //获取当前文件名
		if(!isset($_GET['id'])) {
			$sql = 'SELECT * FROM article';
			$query = mysqli_query($conn, $sql);
			if($query !== false) {
				while($result = mysqli_fetch_array($query)) {
					$title = "<li><a href=$filename?id=" . $result['id'] . '>' . $result['title'] . '</a></li>';
					echo $title;
				}
			}
		}
		else {
			$sql = 'SELECT * FROM article WHERE id = ' . $_GET['id'];
			$query = mysqli_query($conn, $sql);
			if($query !== false) {
				while($result = mysqli_fetch_array($query)) {
					echo '<h3>' . $result['title'] . '</h3>';
					echo $result['content'];
				}
			}
		}

		mysqli_close($conn);
	?>
</div>
