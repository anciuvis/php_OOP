<?php

class Sun extends Shape {
	protected $shapes;
	protected $position;
	protected $radius;
	protected $color = 'yellow';
	protected $amountOfLines = 13;
	
	public function __construct($position, $radius) {
		$this->position = $position;
		$this->radius = $radius;
		$this->shapes = [];
		
		$this->init();
	}
	
	private function init() {
		$this->shapes[] = new Circle($this->position[0], $this->position[1], $this->radius, $this->color);
		
		$step = 2*pi()/$this->amountOfLines;
		$degrees = 0;
		$innerRadius = $this->radius * 2;
		$outerRadius = $this->radius * 4;
		
		for ($i = 0; $i < $this->amountOfLines; $i ++) {
			$x = sin($degrees);
			$y = cos($degrees);
			
			$this->shapes[] = new Line(
				[
					$x*$innerRadius + $this->position[0],
					$y*$innerRadius + $this->position[1]
				],
				[
					$x * $outerRadius + $this->position[0],
					$y * $outerRadius + $this->position[1]
				], 5, $this->color);
			
			$degrees += $step;
		}
	}
	
	public function draw() {
		foreach ($this->shapes as $shape) {
			$shape->draw();
		}
	}
}