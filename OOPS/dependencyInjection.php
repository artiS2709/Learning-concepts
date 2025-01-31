<?php
class Database{
	function execute($sql){
		echo $sql;
	}

}

class buildQuery{
	protected $db;
	function __construct($db){
		$this->db=$db;
	}

	function insert(){
		$sql = "insert into user...";
		$this->db->execute($sql);
	}

	function update(){
		$sql = "update user set where ...";
		$this->db->execute($sql);
	}
}

$db = new Database();
$query = new buildQuery($db);
$query->insert();
$query->update();