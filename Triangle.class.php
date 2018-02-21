<?php
	class Triangle extends Shape {
		public $x2;
		public $y2;
		public $x3;
		public $y3;

		public function __construct() {
			parent::__construct();
			$this->x2 = 100;
			$this->y2 = 0;
			$this->x3 = 0;
			$this->y3 = 100;
		}

		public function draw(SvgRenderer $renderer) {
			// kviecia grafkos varikli:
			$renderer->drawPolygon($this->location->x, $this->location->y, $this->x2, $this->y2, $this->x3, $this->y3, $this->color, $this->alpha, $this->tx, $this->ty, $this->angle, $this->rotx, $this->roty);
		}

		public function setPoints($x2, $y2, $x3, $y3) {
			$this->x2 = $x2;
			$this->y2 = $y2;
			$this->x3 = $x3;
			$this->y3 = $y3;
		}
	}
?>
