<?php
class Shape {

	// public $x;
	// public $y;
	public $location; // isnesam pirmines koordinates i atskira metoda - lengvesniam tolimesniam valdymui
	public $color;
	public $alpha;
	public $tx;
	public $ty;
	public $angle;
	public $rotx;
	public $roty;

	public function __construct() {
		// $this->x = 0;
		// $this->y = 0;
		$this->location = new Point ();
		$this->color = 'black';
		$this->alpha = 1;
		$this->tx = 0;
		$this->ty = 0;
		$this->angle = 0;
		$this->rotx = 0;
		$this->roty = 0;
	}

	public function setColor($color) {
		$this->color = $color;
	}
	public function setAlpha($alpha) {
		$this->alpha = $alpha;
	}

	public function setTranslate($tx, $ty) {
		$this->tx = $tx;
		$this->ty = $ty;
	}

	public function setRotate($angle, $rotx, $roty) {
		$this->angle = $angle;
		$this->rotx = $rotx;
		$this->roty = $roty;

	}
}
?>
