<?php


class UserManager {

	private $db;
	private $sm;

	public function __construct($db, $sm) {
		$this->db = $db;
		$this->sm = $sm;
	}

	public function getAll() {
		//call db with sql
		$sql = 'SELECT * FROM ' . USERS_TABLE_NAME . ' WHERE id > :id';
		$params = array(':id' => 0);

		$result = $this->db->query_db($sql, $params)->fetchAll(PDO::FETCH_ASSOC);

		return $result;	
	}

	public function getById($id) {
		//call db with sql
		$sql = 'SELECT * FROM ' . USERS_TABLE_NAME . ' where id = :id';
		$params = array(':id' => $id);

		$result = $this->db->query_db($sql, $params)->fetch(PDO::FETCH_ASSOC);

		return $result;	
	}

	public function getByName($name) {
		//call db with sql
		$sql = 'SELECT * FROM ' . USERS_TABLE_NAME . ' where name = :name';
		$params = array(':name' => $name);

		$result = $this->db->query_db($sql, $params)->fetchAll(PDO::FETCH_ASSOC);

		return $result;	
	}

	public function register($name, $password) {

		if($this->getByName($name)){
			return false;
		} else {
			$hashed_password = password_hash($password, PASSWORD_BCRYPT);

			$sql = 'INSERT INTO ' . USERS_TABLE_NAME . '(id, name, password) VALUES("", :name, :hashed)';

			$params = array(':name' => $name, ':hashed' => $hashed_password);

			$result = $this->db->query_db($sql, $params);

			return true;
		}

	}

	public function login($name, $password) {

		$from_db = $this->getByName($name);
		// if name is in db
		if($from_db){
			//get hash from db
			$hash_from_db = $from_db[0]['password'];

			// if the password matches hashed
			if(password_verify($password, $hash_from_db)){
				//set sessions
				$this->sm->set_login_sessions($from_db[0]['id']);

				return true;
			} else {
				return false;
			}
			
		} else {
			return false;
		}

	}

	public function logout() {
		$this->sm->remove_sessions();
	}

	public function loggedInElseRedirect(){
		if(!$this->sm->get_logged_in()){ 
			header('Location:login.php');
		}
	}

}


