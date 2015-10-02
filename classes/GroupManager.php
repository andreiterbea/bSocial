<?php


class GroupManager {

	private $db;
	private $sm;

	public function __construct($db, $sm) {
		$this->db = $db;
		$this->sm = $sm;
	}

	public function getAll() {
		//call db with sql
		$sql = 'SELECT * FROM '.GROUPS_TABLE_NAME.' WHERE group_id > :id ORDER BY group_name asc';
		$params = array(':id' => 0);

		$result = $this->db->query_db($sql, $params)->fetchAll(PDO::FETCH_ASSOC);

		return $result;	
	}

	public function getAllJoined() {
		$user = $this->sm->get_user_id();

		$sql = 'SELECT '.GROUPS_TABLE_NAME.'.group_id, '.GROUPS_TABLE_NAME.'.group_name 
					FROM '.CHOSEN_GROUPS_TABLE_NAME.' 
				INNER JOIN '.USERS_TABLE_NAME.'  
					ON '.CHOSEN_GROUPS_TABLE_NAME.' .user_id = '.USERS_TABLE_NAME.'.id 
				INNER JOIN '.GROUPS_TABLE_NAME.' 
					ON '.CHOSEN_GROUPS_TABLE_NAME.' .group_id = '.GROUPS_TABLE_NAME.'.group_id 
				WHERE '.USERS_TABLE_NAME.'.id = :user_id 
				ORDER BY group_name asc';
				
		$params = array(':user_id' => $user);

		$result = $this->db->query_db($sql, $params)->fetchAll(PDO::FETCH_ASSOC);
		return $result;	
	}

	public function getUsersInGroup($group_id) {

		$sql = 'SELECT '.USERS_TABLE_NAME.'.id, '.USERS_TABLE_NAME.'.name  
					FROM '.CHOSEN_GROUPS_TABLE_NAME.'  
				INNER JOIN '.USERS_TABLE_NAME.' 
					ON '.CHOSEN_GROUPS_TABLE_NAME.' .user_id = '.USERS_TABLE_NAME.'.id 
				INNER JOIN '.GROUPS_TABLE_NAME.' 
					ON '.CHOSEN_GROUPS_TABLE_NAME.' .group_id = '.GROUPS_TABLE_NAME.'.group_id 
				WHERE '.GROUPS_TABLE_NAME.'.group_id = :group_id';
				
		$params = array(':group_id' => $group_id);

		$result = $this->db->query_db($sql, $params)->fetchAll(PDO::FETCH_ASSOC);

		return $result;	
	}

	public function getById($id) {
		//call db with sql
		$sql = 'SELECT * FROM ' . GROUPS_TABLE_NAME . ' where group_id = :id';
		$params = array(':id' => $id);

		$result = $this->db->query_db($sql, $params)->fetch(PDO::FETCH_ASSOC);

		return $result;	
	}

	public function getByName($name) {
		//call db with sql
		$sql = 'SELECT * FROM ' . GROUPS_TABLE_NAME . ' where group_name = :name';
		$params = array(':name' => $name);

		$result = $this->db->query_db($sql, $params)->fetch(PDO::FETCH_ASSOC);

		return $result;	
	}

	public function getByOwnerId($owner_id) {
		//call db with sql
		$sql = 'SELECT * FROM ' . GROUPS_TABLE_NAME . ' where owner_id = :owner_id';
		$params = array(':owner_id' => $owner_id);

		$result = $this->db->query_db($sql, $params)->fetchAll(PDO::FETCH_ASSOC);

		return $result;	
	}

	public function isOwnedByUserId($group_id, $user_id) {
		//call db with sql
		$sql = 'SELECT * FROM ' . GROUPS_TABLE_NAME . ' where owner_id = :user_id AND group_id = :group_id';
		$params = array(':user_id' => $user_id, ':group_id' => $group_id);

		$result = $this->db->query_db($sql, $params)->fetchAll(PDO::FETCH_ASSOC);

		if($result){
			return true;
		} else {
			return false;
		}	
	}

	public function create($name) {

		if($this->getByName($name)){
			return false;
		} else {

			$owner = $this->sm->get_user_id();

			$sql = 'INSERT INTO ' . GROUPS_TABLE_NAME . '(group_id, group_name, owner_id) VALUES("", :group_name, :owner_id)';

			$params = array(':group_name' => $name, ':owner_id' => $owner);

			$this->db->query_db($sql, $params);

			return true;
		}

	}

	public function joinGroup($group_id) {

		$user = $this->sm->get_user_id();

		if($this->isJoinedAlready($group_id, $user)){
			//already joined this group
			return false;
		} else {
			$sql = 'INSERT INTO '.CHOSEN_GROUPS_TABLE_NAME.'(chosen_groups_id, user_id, group_id) VALUES("", :user_id, :group_id)';

			$params = array(':user_id' => $user, ':group_id' => $group_id);

			$this->db->query_db($sql, $params);

			return true;
		}

	}

	public function isJoinedAlready($group_id, $user_id){

		$sql = 'SELECT * FROM ' . CHOSEN_GROUPS_TABLE_NAME . ' where group_id = :group_id AND user_id = :user_id';
		$params = array(':group_id' => $group_id, ':user_id' => $user_id);

		$result = $this->db->query_db($sql, $params)->fetch(PDO::FETCH_ASSOC);
		
		if($result){
			return true;
		} else {
			return false;
		}	

	}

}


