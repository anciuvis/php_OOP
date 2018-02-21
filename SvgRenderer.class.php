<?php

class SvgRenderer {
	public $elements;

	// constructor fires when created new SvgRenderer object:
	function __construct($width = 500, $height = 500, $color = '#f2f2f2') {
		$this->elements = [];
		$this->width = $width;
		$this->height = $height;
		$this->color = $color;
	}

	// draw rectangle:
	public function drawRect($x, $y, $width, $height, $color, $alpha, $tx, $ty, $angle, $rotx, $roty) {
		$svg = '<rect x="' .$x. '" y="' .$y. '" width="' .$width. '" height="' .$height. '" style="fill:rgba(' .$color. ', ' .$alpha. ');" transform="translate(' .$tx. ', ' .$ty. ') rotate(' .$angle. ' ' .$rotx. ' ' .$roty. ')" />';
		// echo $svg;
		// $elements[] = $svg;

		if ($width > $this->width || $height > $this->height) {
			throw new Exception("Element can't be bigger than the viewport");
		}
		array_push($this->elements, $svg);
	}

	// draw circle:
	public function drawCircle($cx, $cy, $r, $color, $alpha) {
		$svg = '<circle cx="' .$cx. '" cy="' .$cy. '" r="' .$r. '" style="fill:rgba(' .$color. ', ' .$alpha. ');" />';
		array_push($this->elements, $svg);
	}

	public function drawEllipse($cx, $cy, $rx, $ry, $color, $alpha, $tx, $ty, $angle, $rotx, $roty) {
		$svg = '<ellipse cx="' .$cx. '" cy="' .$cy. '" rx="' .$rx. '" ry="' .$ry. '" style="fill:rgba(' .$color. ', ' .$alpha. ');" transform="translate(' .$tx. ', ' .$ty. ') rotate(' .$angle. ' ' .$rotx. ' ' .$roty. ')" />';
		array_push($this->elements, $svg);
	}

	public function drawPolygon($x, $y, $x2, $y2, $x3, $y3, $color, $alpha, $tx, $ty, $angle, $rotx, $roty) {
		$svg = '<polygon points="' .$x. ',' .$y. ' ' .$x2. ',' .$y2. ' ' .$x3. ',' .$y3. '" style="fill:rgba(' .$color. ', ' .$alpha. ');" transform="translate(' .$tx. ', ' .$ty. ') rotate(' .$angle. ' ' .$rotx. ' ' .$roty. ')" />';
		array_push($this->elements, $svg);
	}

	// runs graphic engine
	public function run() {
		// echo 'engine is running...';
		$svg = '<svg width="' .$this->width. '" height="' .$this->height. '" style="background-color: ' .$this->color. '">';
		$svg .= implode ('', $this->elements);
		$svg .= 'Sorry, your browser does not support inline SVG.</svg>';

		print_R ($svg);
	}
}
 ?>
