<?php
	class Cat extends Animal {
		private $name;

		public function __construct($name) {
			$this->name = $name;
		}

		public function catch_a_mouse() {
			echo $this->name . " catches a mouse <br>";
		}
	}
?>