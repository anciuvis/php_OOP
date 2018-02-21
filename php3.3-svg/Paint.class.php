<?php

if (! class_exists('Shape')) {
	require_once 'Shape.class.php';
}

class Paint {
	protected $width;
	protected $height;
	protected $shapes;

	public function __construct($width, $height, $shapes) {
		$this->width = $width;
		$this->height = $height;
		$this->shapes = $shapes;
	}

	public function draw() {
		echo '<svg version="1.1" baseProfile="full" width="'. $this->width .'" height="'. $this->height .'" xmlns="http://www.w3.org">';

		foreach ($this->shapes as $shape) {
			$shape->draw();
		}

		echo '</svg>';
	}
}