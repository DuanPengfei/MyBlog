
<!-- 显示留言 -->
<ol>
	<?php
	$query = $db->query('select * from comments where post_id = ' . $_GET['id']);
	while($comment =  $query->fetchObject()) {
	?>

	<li>
		<span><?php echo date('Y-m-d',strtotime($comment->created_at));?></span>
		<p><?php echo $comment->body; ?></p>            
	</li> 

	<?php } ?>
</ol>

