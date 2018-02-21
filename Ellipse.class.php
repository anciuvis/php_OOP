<?php
	class Ellipse extends Shape {
		public $rx;
		public $ry;

		public function __construct() {
			parent::__construct();
			$this->rx = 50;
			$this->ry = 30;
		}

		public function draw(SvgRenderer $renderer) {
			// kviecia grafkos varikli:
			$renderer->drawEllipse($this->location->x, $this->location->y, $this->rx, $this->ry, $this->color, $this->alpha, $this->tx, $this->ty, $this->angle, $this->rotx, $this->roty);
		}

		public function setRadius($rx, $ry) {
			$this->rx = $rx;
			$this->ry = $ry;
		}
	}
?>
