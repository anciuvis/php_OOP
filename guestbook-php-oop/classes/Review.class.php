<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL| E_STRICT); ?>
<?php
include('Database.class.php');
class Review {
	private $pdo;

	public function __construct () {
		$db = new Database();
		$this->pdo = $db->connect();
	}
	public function getAll() {
		$que = 'SELECT * FROM reviews ORDER BY id';
		$query = $this->pdo->prepare($que);
		$query->execute();
		$reviews = $query->fetchAll(PDO::FETCH_ASSOC); // fetchAll kadangi daug apzvalgu o ne viena
		return $reviews;
	}
	public function getFeatured() {
		$que = 'SELECT * FROM reviews WHERE featured = 1 ORDER BY date DESC LIMIT 2';
		$query = $this->pdo->prepare($que);
		$query->execute();
		$reviews = $query->fetchAll(PDO::FETCH_ASSOC);
		return $reviews;
	}
	public function getNonfeatured() {
		$que = 'SELECT * FROM reviews WHERE featured = 0 ORDER BY id';
		$query = $this->pdo->prepare($que);
		$query->execute();
		$reviews = $query->fetchAll(PDO::FETCH_ASSOC);
		return $reviews;
	}
}
// $reviews = new Review();
// print_R($reviews->GetAll());
// echo '<br>---<br>';
// // var_dump($reviews);
// print_R($reviews->GetFeatured());
// echo '<br>---<br>';
// print_R($reviews->GetNonfeatured());
