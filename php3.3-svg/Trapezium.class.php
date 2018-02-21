<?php

class Trapezium extends Shape {
	protected $shapes;
	
	public function __construct($point, $topLength, $bottomLength, $height) {
		// trikampis, staciampis, trikampis
		$c = [
			($bottomLength - $topLength)/2 + $point[0],
			$point[1]
		];
		$b = [
			$c[0],
			$c[1] + $height
		];
		$t1 = new Triangle($point, $b, $c, 'yellow');
		
		$d = [
			$b[0] + $topLength,
			$b[1]
		];
		$f = [
			$c[0] + $topLength,
			$c[1]
		];
		$e = [
			$point[0] + $bottomLength,
			$point[1]
		];
		
		$t2 = new Triangle($d, $e, $f, 'yellow');
		$r = new Rectangle($topLength, $height, "yellow", $c);
		
		$this->shapes = [
			$t1, $r, $t2
		];
	}
	
	public function draw() {
		foreach ($this->shapes as $shape) {
			$shape->draw();
		}
	}
}