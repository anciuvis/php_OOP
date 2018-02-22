<?php
class Order {
	public $myArray;
	public function sort($myArray) {
		$this->myArray = $myArray;
		echo "Input: <br>";
		for ($i=0; $i < sizeOf($myArray); $i++) {
			echo $myArray[$i] . ' ';
		}
		array_multisort($myArray);
		echo "<br> Output: <br>";
		for ($i=0; $i < sizeOf($myArray); $i++) {
			echo $myArray[$i] . ' ';
		}
		echo "<br>---<br>";

	}
}
