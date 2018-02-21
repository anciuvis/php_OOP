<?php
	class Rectangle extends Shape {
		// <rect x="350" y="200" width="80" height="80" style="fill:rgba(0, 255, 255, 0.7);" />
		public $width;
		public $height;

		public function __construct() {
			parent::__construct(); // paima tevinio konstruktoriu
			$this->width = 100;
			$this->height = 100;
		}

		public function draw(SvgRenderer $renderer) {
			// kviecia grafkos varikli:
			try {
				$renderer->drawRect($this->location->x, $this->location->y, $this->width, $this->height, $this->color, $this->alpha, $this->tx, $this->ty, $this->angle, $this->rotx, $this->roty);
			} catch(Exception $error) {
				// $log->message($error->getMessage())
				echo $error->getMessage();
				// var_dump($error);
			}
		}

		public function setSize($width, $height) {
			$this->width = $width;
			$this->height = $height;
		}
	}
?>
