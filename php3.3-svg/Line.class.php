<?php

class Line extends Shape {
	public function __construct($start, $end, $width, $color) {
		parent::__construct("polyline", [
			'points' => number_format($start[0], 5) .','. number_format($start[1], 5)
			.' '. number_format($end[0], 5) .','. number_format($end[1], 5),
			'style' => 'fill:none;'
					.'stroke:'. $color .';'
					.'stroke-width:'. $width
		]);
	}
}