<?php
class Calculator {
	public $a;
	public $b;
	public function checkOperation($operator) {
		switch($operator) {
			case '+':
			return $this->a + $this->b;
			break;

			case '-':
			return $this->a - $this->b;
			break;

			case '*':
			return $this->a * $this->b;
			break;

			case '/':
			return $this->a / $this->b;
			break;

			default:
			return "Sorry No command found";
		}
	}
	public function getResult($a, $b, $c) {
		$this->a = $a;
		$this->b = $b;
		echo 'Calculate: ' . $a.$c.$b . ' = ' . $this->checkOperation($c);
	}
}
