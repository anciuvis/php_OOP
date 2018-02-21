<?php

// Rectangle.class.php

class Rectangle extends Shape {
	public function __construct($width, $height, $color, $position = [0, 0]) {
		/*$this->name = 'rect';
		$this->attributes = [
			'width' => $width,
			'height' => $height,
			'fill' => $color
		];*/
		// iskvieciam Shape konstruktoriu
		parent::__construct('rect', [
			'width' => $width,
			'height' => $height,
			'fill' => $color,
			'x' => $position[0],
			'y' => $position[1],
		]);
	}
}