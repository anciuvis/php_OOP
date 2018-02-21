<?php

// Shape.class.php

class Shape {
	protected $name;
	protected $attributes;
	protected $value;

	public function __construct($name, $attributes, $value = null) {
		$this->name = $name;
		$this->attributes = $attributes;
		$this->value = $value;
	}

	public function draw() {
		echo '<';
		echo $this->name;

		foreach ($this->attributes as $key => $value) {
			echo ' '. $key .'="'. $value .'"';
		}

		if ($this->value == null) {
			echo '/>';
		} else {
			echo '>';
			echo $this->value;
			echo '</'. $this->name .'>';
		}
		
		echo "\n";
	}
}

