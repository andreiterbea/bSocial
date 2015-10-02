<?php require_once('../app.php');
	
	$group_name = $_POST['group_name'];

	echo $gm->create($group_name);

?>