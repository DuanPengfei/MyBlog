
<!-- 发表留言 -->
<form action="/comments/save.php" method="post">
	<input type="hidden" name='post_id' value='<?php echo $_GET['id']; ?>'/>
	<label for="body">留言内容</label>
	<br />
	<textarea name="body"></textarea>
	<br/>
	<input type="submit" value="发表留言" />
</form>

