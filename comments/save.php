
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/common.php';

$sql = "insert into comments(body,created_at,post_id) values(:body,:created_at,:post_id);" ;  
$query = $db->prepare($sql);
$query->bindParam(':body',$_POST['body'],PDO::PARAM_STR);
$query->bindParam(':created_at',$created_at,PDO::PARAM_STR);
$query->bindParam(':post_id',$_POST['post_id'],PDO::PARAM_INT);

$created_at = date('Y-m-d H:i:s');
if(!$query->execute()) { 
  print_r($query->errorInfo());
} else {
  redirect_to("/posts/show.php?id=" . $_POST['post_id']);
};
?>

