<meta charset="utf8" />
<?php
	session_start();    //开启 session
	if(isset($_SESSION['username'])) {
		define('ADD', 'add');
?>
<meta charset="utf8" />
<a href="./add.php">添加文章</a>
<?php
	}
	else {
		//header('Location: ./signIn.php');
		//echo '<script>window.location.replace("target.aspx");</script>';
?>
	<a href="./signIn.php">请先登录</a>
<?php
	}
?>
