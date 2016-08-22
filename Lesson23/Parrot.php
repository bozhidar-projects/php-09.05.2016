<?php
	class Parrot extends Animal {

		public function __construct($name) {
			parent::__construct($name);
		}

		public function repeat_a_word($word) {
			echo $this->name . " says: " . $word;
		}

		public function make_a_sound() {
			echo $this->name . " chirps <br>";
		}
	}
?>