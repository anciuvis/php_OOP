<?php
class Name {
	public $name;
	public function showName($name) {
		$this->name = $name;
		echo 'Hello, my name is ' . $name . '<br>---<br>';
	}
	// public function setName($name) {
	//
	// }
}
