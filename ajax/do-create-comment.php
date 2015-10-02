<?php require_once('../app.php');
	
	$group_id = $_POST['group_id'];
	$comment_body = $_POST['comment_body'];
	
	echo $cm->create($group_id, $comment_body);

?>