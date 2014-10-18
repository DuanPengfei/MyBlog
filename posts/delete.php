	
<?php 
$titleName = '删除文章';
require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php';

$id = $_GET['id'];
?>

<form action="destroy.php" method="post">
	<input type="hidden" name="id" value = "<?php echo $id; ?>"/>
	是否删除ID为<?php echo $id; ?>的帖子？
	<input type="submit" value="确定">
</form>	

<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php';
?>

