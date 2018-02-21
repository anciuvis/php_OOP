<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL| E_STRICT);

class Kitten {
	public $name;
	public function meow() {
		$name = $this->name;
		echo $name . ': MEOW' . "\n";
	}
	public function eat() {
		echo $this->name . ': is eating' . "\n";
	}
}
$ginger = new Kitten();
$ginger->name = 'Ginger';
$myArray[] = $ginger;

$lucille = new Kitten();
$lucille->name = 'Lucille';
$myArray[] = $lucille;

$tiger = new Kitten();
$tiger->name = 'Tiger';
$myArray[] = $tiger;

$misty = new Kitten();
$misty->name = 'Misty';
$myArray[] = $misty;

// $ginger->meow();
// $lucille->meow();
// $tiger->meow();
// $misty->meow();

foreach ($myArray as $key) {
	$key->meow();
}
?>
