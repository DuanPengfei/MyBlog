
<?php
$titleName = '博文';
require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/database.php'; 

$query = $db->prepare('select * from posts where id = :id');
$query->bindValue(':id',$_GET['id'],PDO::PARAM_INT);
$query->execute();
$post = $query->fetchObject();    
?>

<h1><?php echo $post->id; ?> : <?php echo $post->title; ?>  </h1>
<p><?php echo $post->body; ?></p>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/comments/new.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/comments/show.php';
?>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php'; ?>

