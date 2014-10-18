
<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/common.php';

$id = $_POST['id'];
$sql = "update posts set title = :title, body = :body, updated_at = :updated_at where id = :id;" ;	
$query = $db->prepare($sql);
$query->bindValue(':title',$_POST['title'],PDO::PARAM_STR);
$query->bindValue(':body',$_POST['body'],PDO::PARAM_STR);
$query->bindParam(':created_at',$created_at,PDO::PARAM_STR);
echo $query->bindValue(':id',$id,PDO::PARAM_INT);

$created_at = date('Y-m-d H:i:s');
if(!$query->execute()) {	
	print_r($query->errorInfo());
} else {
	redirect_to("/posts/show.php?id=$id");
};
?>

