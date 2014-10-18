
<?php
$titleName = '修改文章';
require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/database.php';

$id = $_GET['id'];
$query = $db->prepare('select * from posts where id = :id');
$query->bindValue(':id',$id,PDO::PARAM_INT);
$query->execute();
$post = $query->fetchObject();    		
?>

<h1>edit post:</h1>

<form action="update.php" method="post">
	<input type="hidden" name="id" value = "<?php echo $id; ?>"/>
	<label for="title">文章标题</label>
	<input type="text" name="title" value="<?php echo $post->title ?>" />
	<br/>
	<label for="body">文章内容</label>
	<textarea name="body">
		<?php echo $post->body; ?>
	</textarea>
	<br/>
	<input type="submit" value="提交" />
</form>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php'; ?>

