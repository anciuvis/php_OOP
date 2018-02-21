<?php

// Triangle.class.php

class Triangle extends Shape {
	public function __construct($a, $b, $c, $color) {
		parent::__construct('polygon', [
			'fill' => $color,
			'points' => $a[0] .','. $a[1] .' ' . $b[0] .','. $b[1] .' '. $c[0] .','. $c[1]
		]);
	}
}

// $x1 .','. $y1 .' '. $x2