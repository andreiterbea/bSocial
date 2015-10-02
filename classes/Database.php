<?php

class Database {


	private $db_host;
	private $db_name;
	private $db_user;
	private $db_password;

   	private $db_conn = false;

 	public function __construct($db_host, $db_name, $db_user, $db_password ) {
		$this->db_host = $db_host;
	    $this->db_name = $db_name;
	    $this->db_user = $db_user;
	    $this->db_password = $db_password;

	    $this->connect();

	}

   	private function connect() {

    	if(!$this->db_conn) { 

	      	try {
				
			    $this->db_conn = new PDO('mysql:host='.$this->db_host.';dbname='.$this->db_name, 
			    						$this->db_user, 
			    						$this->db_password);
			    
			    $this->db_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			} catch(PDOException $e) {
				echo 'ERROR: ' . $e->getMessage();
			}

   		}
   	}

	public function query_db($sql_query, $params = array()) {

		$sth = $this->db_conn->prepare($sql_query);
		$sth->execute($params);
		
		$result = $sth;

		return $result;
		
	}

	public function get_conn() {
		return $this->db_conn;
	}
}




