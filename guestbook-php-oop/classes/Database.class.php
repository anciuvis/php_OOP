<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL| E_STRICT); ?>
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
		$dbase = "mysql:host=$this->host;dbname=$this->dbName";
		$pdo = new PDO($dbase, $this->user, $this->pass);
		$pdo->exec('SET NAMES UTF8');

		return $pdo;
	}
}

// $db = new Database();
// print_R($db->connect());
