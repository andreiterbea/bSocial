<?php

class SessionManager {
	
	public function __construct() {
		session_start();
	}

	public function set_login_sessions($id) {
		
		$_SESSION['logged_in'] = true;
		$_SESSION['user_id'] = $id;
		
	}
	public function remove_sessions() {
		unset($_SESSION['logged_in']);
		unset($_SESSION['user_id']);
	}
	
	public function get_user_id() {
		if (isset($_SESSION['user_id'])) {
			return $_SESSION['user_id'];
		} else {
			return false;
		}

	}
	public function get_logged_in() {

		if (!isset($_SESSION['logged_in'])) {
			return false;
		} else {
			return $_SESSION['logged_in'];
		}

	}


}