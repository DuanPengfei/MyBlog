<?php
	session_start();    //开启 session
	include('./conn/conn.class.php');    //连接数据库
	include('./head.php');    //引入页面头部，显示导航信息

	$sql = 'SELECT * FROM user';
	$usernamePw = array();
	$query = mysqli_query($conn, $sql);
	if($query !== false) {
		while($result = mysqli_fetch_array($query)) {
			$usernamePw[$result['username']] = $result;
		}
	}
	
	if($_POST['id'] == 'DuanPengfei' && md5($_POST['pw']) == '95360ed1148937efa976995ad778d76f') {
		$_SESSION['username'] = $_POST['id'];
	}
	
	if(!isset($_SESSION['username'])) {
?>

<SCRIPT language="javascript">
	function CheckPost() {
		if(myform.id.value == "") {
			alert("请填写用户名");
			myform.id.focus();
			return false;
		}
		if(myform.pw.value == "") {
			alert("密码不能为空");
			myform.pw.focus();
			return false;
		}
	}
</SCRIPT>

<form name="myform" action="" method="post" onsubmit="return CheckPost();">
Username：<input type="text" size="10" name="id" /><br />
Password：<input type="password" name="pw" /><br />
<input type="submit" name="submit" value="Login" />
</form>
	
<?php
	}
	else {
		echo '<SCRIPT>window.history.back();</SCRIPT>';
	}
?>
