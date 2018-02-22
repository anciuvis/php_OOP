<?php
class Factorial {
	public $number;
	public function outputF($number) {
		$this->number = $number;
		$this->fact = $fact = 1;
		for ($i = 1; $i <= $number; $i++) {
			$fact *= $i;
		}
		echo 'Factorial of number ' . $number . ' is equal: ' . $fact. '<br>---<br>';
	}
}
