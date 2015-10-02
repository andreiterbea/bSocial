<?php


class CommentManager {

	private $db;
	private $sm;
	private $gm;
	private $nm;
	private $um;

	public function __construct($db, $sm, $gm, $nm, $um) {
		$this->db = $db;
		$this->sm = $sm;
		$this->gm = $gm;
		$this->nm = $nm;
		$this->um = $um;
	}

	public function getAll() {
		//call db with sql
		$sql = 'SELECT * FROM ' . COMMENTS_TABLE_NAME . ' WHERE comment_id > :id';
		$params = array(':id' => 0);

		$result = $this->db->query_db($sql, $params)->fetchAll(PDO::FETCH_ASSOC);

		return $result;	
	}

	public function getById($id) {
		//call db with sql
		$sql = 'SELECT * FROM ' . COMMENTS_TABLE_NAME . ' where comment_id = :id';
		$params = array(':id' => $id);

		$result = $this->db->query_db($sql, $params)->fetch(PDO::FETCH_ASSOC);

		return $result;	
	}

	public function getByGroupId($group_id) {
		//call db with sql
		$sql = 'SELECT ' . USERS_TABLE_NAME . '.name, ' . COMMENTS_TABLE_NAME . '.* FROM ' . COMMENTS_TABLE_NAME . ' INNER JOIN ' . USERS_TABLE_NAME . ' ON ' . COMMENTS_TABLE_NAME . '.user_id = ' . USERS_TABLE_NAME . '.id WHERE group_id = :group_id ORDER BY comment_id desc';
		$params = array(':group_id' => $group_id);

		$result = $this->db->query_db($sql, $params)->fetchAll(PDO::FETCH_ASSOC);

		return $result;	
	}

	public function getByUserId($user_id) {
		//call db with sql
		$sql = 'SELECT * FROM ' . COMMENTS_TABLE_NAME . ' where user_id = :user_id';
		$params = array(':user_id' => $user_id);

		$result = $this->db->query_db($sql, $params)->fetchAll(PDO::FETCH_ASSOC);

		return $result;	
	}

	public function create($group_id, $comment_body) {

		$user_id = $this->sm->get_user_id();

		$sql = 'INSERT INTO ' . COMMENTS_TABLE_NAME . '(comment_id, user_id, group_id, comment_body) VALUES("", :user_id, :group_id, :comment_body)';

		$params = array(':user_id' => $user_id, ':group_id' => $group_id, ':comment_body' => $comment_body);

		$this->db->query_db($sql, $params);

		//send notifications to users in group
		$from = $this->um->getById($user_id)['name'];
		$in_group = $this->gm->getById($group_id);

		$notification_body = "New comment from <b>" . $from . "</b> in <a href='single-group.php?id=".$in_group['group_id']."'>" . $in_group['group_name'] . "</a>.";
		foreach ($this->gm->getUsersInGroup($group_id) as $user) {

			// skip the currently logged in user
			if($user['id'] != $user_id){
				$this->nm->create($user['id'], $notification_body);
			}
			

		}


		return true;

	}

}


