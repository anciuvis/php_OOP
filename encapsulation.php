<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL| E_STRICT);
?>
<?php

class A {

	public $viesas = 1;
	private $pasleptas = 2;
	protected $pusiau = 3;

	public function out() {
		echo $this->viesas;
		echo $this->pasleptas;
		echo $this->pusiau;
	}
}

class B extends A {
	public function out2() {
		echo $this->viesas;
		echo $this->pasleptas;
		echo $this->pusiau;
	}
}

$a = new A();
// $a->out(); // veikia, nes iskvieciama per public metoda
// echo $a->pusiau; // neveikia is isores
// echo $a->pasleptas; // neveikia is isores
$b = new B();
$b->out2();

echo "<pre>";
var_dump($a);
var_dump($b);
echo "</pre>";

// B klases isoreje pasiekiama TIK Public savybe (viesas)
echo $b->viesas;
echo $b->pasleptas;
echo $b->pusiau;

?>
