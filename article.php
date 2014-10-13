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
					echo '<p>' . $result['content'] . '</p>';
				}
			}
			echo '<hr />';
			
			$sql = 'SELECT * FROM comment WHERE article_id = ' . $_GET['id'];
			$query = mysqli_query($conn, $sql);
			if($query !== false) {
				while($result = mysqli_fetch_array($query)) {
					echo '<p>' . $result['content'] . '</p>';
				}
			}
			echo '<hr />';
			
?>
<meta charset="utf8" />
<form action="comment.php" method="post">
	Content:<textarea name="content"></textarea><br />
	<input type="hidden" name="article_id" value="<?php echo $_GET['id'] ?>" />
	<input type="submit" name="submit" value="发表评论" />
</form>
<?php
		}

		mysqli_close($conn);
	?>
</div>
