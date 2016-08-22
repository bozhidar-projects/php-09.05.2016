<?php
	abstract class Dog extends Animal implements Pet {

		public function __construct($name) {
			parent::__construct($name);
		}

		public function fetch_a_stick() {
			echo $this->name . " fetches a stick <br>";
		}

		public function make_a_sound() {
			echo $this->name . " barks <br>";
		}

		public function pet() {
			echo $this->name . " is happy !";
		}
	}

?>