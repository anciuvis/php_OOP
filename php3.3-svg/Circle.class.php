<?php

// Circle.class.php

class Circle extends Shape {
	public function __construct($x, $y, $radius, $color) {
		parent::__construct('circle', [
			"cx" => $x,
			"cy" => $y,
			"r" => $radius,
			"fill" => $color
		]);
	}
}