
<?php
$titleName = '发表文章';
require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php';
?>

<h1>新建文章</h1>

<form action="save.php" method="post">
	<label for="title">文章标题</label>
	<input type="text" name="title" value="" />
	<br/>
	<label for="body">文章内容</label>
	<textarea name="body"></textarea>
	<br/>
	<input type="submit" value="添加文章" />
</form>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php'; ?>

