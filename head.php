<html>
<head>
	<meta charset="utf8" />
</head>
<body>
<div name="logo"><a href="./"><h1>DuanPengfei's blog</h1></a></div>

<nav name="navigate">
	<ul>
		<li><a href="./">Home</a></li>
		<li><a href="article.php">Article</a></li>
		<li><a href="about.php">About</a></li>
	</ul>
</nav>

<div name="singIn">
	<?php
		if(!isset($_SESSION['username'])) {
			echo '<a href="./signIn.php">Sign in</a>';
		}
		else {
			echo '<a href="./detail.php">' . $_SESSION['username'] . '</a>';
		}
	?>
</div>
