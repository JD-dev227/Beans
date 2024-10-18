<?php

// Class Definitions

class Fruit {
	// Props
	protected $name;
	protected $color;

	// Constructor
	public function __construct($name, $color) {
		$this->name = $name;
		$this->color = $color;
	}

	// Methods
	public function intro() {
		echo "The fruit is {$this->name} and the color is {$this->color}\n";
	}
}

class Strawberry extends Fruit {
	// Props
	protected $weight;

	// Constructor
	public function __construct($name, $color, $weight) {
		parent::__construct($name, $color);
		$this->weight = $weight;
	}

	// Methods
	public function message () {
		echo "This message is only available to Strawberry\n";
	}

	public function get_weight() {
		echo "Weight of {$this->name} is {$this->weight}\n";
	}
}

$redStrawberry = new Strawberry("Red Strawberry", "red", 10);
$blueStrawberry = new Strawberry("Blue Strawberry", "blue", 12);
$redStrawberry->intro();
$blueStrawberry->intro();
$redStrawberry->get_weight();
$blueStrawberry->get_weight();
?>
