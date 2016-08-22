<?php
	class Cat extends Animal {

		public function __construct($name) {
			parent::__construct($name);
		}

		public function catch_a_mouse() {
			echo $this->name . " catches a mouse <br>";
		}

		public function make_a_sound() {
			echo $this->name . " myauus <br>";
		}
	}
?>