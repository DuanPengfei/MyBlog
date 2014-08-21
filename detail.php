<?php
	session_start();    //开启 session
	include('./conn/conn.class.php');    //连接数据库
	include('./head.php');    //引入页面头部，显示导航信息
	
	//查询当前登录用户拥有的文章数目
	$author = $_SESSION['username'];
	$sql = "SELECT COUNT(*) FROM article WHERE author = '$author'";
	$query = mysqli_query($conn, $sql);
	$result = mysqli_fetch_array($query);
	$count = $result[0];
	
	//查询当前登陆用户的详细信息
	$sql = "SELECT status FROM user WHERE username = '$author'";
	$query = mysqli_query($conn, $sql);
	$result = mysqli_fetch_array($query);
	$status = $result['status'];
?>
Username：<?php echo $_SESSION['username']; ?><br />
Status：<?php echo $status; ?><br />
The number of articles：<?php echo $count; ?><br />
