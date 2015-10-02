<?php require_once('../app.php');

	$group_to_join = $_GET['id'];

	$gm->joinGroup($group_to_join);

	header('Location: ../explore.php');

?>