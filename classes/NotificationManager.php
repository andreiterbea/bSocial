<?php


class NotificationManager {

	private $db;

	public function __construct($db) {
		$this->db = $db;
	}

	public function getAll() {
		//call db with sql
		$sql = 'SELECT * FROM ' . NOTIFICATIONS_TABLE_NAME . ' WHERE notification_id > :id';
		$params = array(':id' => 0);

		$result = $this->db->query_db($sql, $params)->fetchAll(PDO::FETCH_ASSOC);

		return $result;	
	}

	public function getById($id) {
		//call db with sql
		$sql = 'SELECT * FROM ' . NOTIFICATIONS_TABLE_NAME . ' where notification_id = :id';
		$params = array(':id' => $id);

		$result = $this->db->query_db($sql, $params)->fetch(PDO::FETCH_ASSOC);

		return $result;	
	}

	public function setRead($id) {
		//call db with sql
		$sql = 'UPDATE ' . NOTIFICATIONS_TABLE_NAME . ' SET is_read = 1 where notification_id = :id';
		$params = array(':id' => $id);

		$result = $this->db->query_db($sql, $params);

		return $result;	
	}

	public function getUnreadByUserId($user_id) {
		//call db with sql
		$sql = 'SELECT * FROM ' . NOTIFICATIONS_TABLE_NAME . ' where user_id = :user_id AND is_read = 0';
		$params = array(':user_id' => $user_id);

		$result = $this->db->query_db($sql, $params)->fetchAll(PDO::FETCH_ASSOC);

		return $result;	
	}

	public function create($user_id, $notification_body) {

		$sql = 'INSERT INTO ' . NOTIFICATIONS_TABLE_NAME . '(notification_id, user_id, notification_body, is_read) VALUES("", :user_id, :notification_body, 0)';

		$params = array(':user_id' => $user_id, ':notification_body' => $notification_body);

		$this->db->query_db($sql, $params);

		return true;

	}

}


