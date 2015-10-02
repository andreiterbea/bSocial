<?php require_once('../app.php');
	  $um->loggedInElseRedirect();


	$user_id = $sm->get_user_id();


	header("Content-Type: text/event-stream\n\n");
	header('Cache-Control: no-cache');


	echo "data: " . count($nm->getUnreadByUserId($user_id))  . PHP_EOL;
  	echo PHP_EOL;
 
  	flush();

?>