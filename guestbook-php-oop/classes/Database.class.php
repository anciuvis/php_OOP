<?php
class Database {
	private $host;
	private $dbName;
	private $user;
	private $pass;

	public function __construct() {
		$this->host = '127.0.0.1';
		$this->dbName = 'guestbook';
		$this->user = 'root';
		$this->pass = '';
	}
	public function connect() {
		$db = "mysql:host=$this->host;dbname=$this->dbName";
		$pdo = new PDO($db, $user, $pass);
		$pdo->exec('SET NAMES UTF8');

		return $pdo;
	}
}
