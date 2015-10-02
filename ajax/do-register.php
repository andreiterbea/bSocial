<?php require_once('../app.php');
	
	$name = $_POST['name'];
	$password = $_POST['password'];

	echo $um->register($name, $password);

?>