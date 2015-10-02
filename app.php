<?php

require_once('config.php');
require_once('classes/Database.php');
require_once('classes/SessionManager.php');
require_once('classes/UserManager.php');
require_once('classes/NotificationManager.php');
require_once('classes/GroupManager.php');
require_once('classes/CommentManager.php');

$db = new Database(DB_HOST, DB_NAME, DB_USER, DB_PASSWORD);
$sm = new SessionManager();
$um = new UserManager($db, $sm);
$nm = new NotificationManager($db);
$gm = new GroupManager($db, $sm);
$cm = new CommentManager($db, $sm, $gm, $nm, $um);

