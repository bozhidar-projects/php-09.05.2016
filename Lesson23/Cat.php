<?php
	class Cat extends Animal {
		protected $name;

		public function __construct($name) {
			$this->name = $name;
		}

		public function catch_a_mouse() {
			echo $this->name . " catches a mouse <br>";
		}

		public function make_a_sound() {
			echo $this->name . " myauus <br>";
		}
	}
?>