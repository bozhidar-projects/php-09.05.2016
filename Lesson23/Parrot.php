<?php
	class Parrot extends Animal {
		private $name;

		public function __construct($name) {
			$this->name = $name;
		}

		public function repeat_a_word($word) {
			echo $this->name . " says: " . $word;
		}

		public function make_a_sound() {
			echo $this->name . " chirps <br>";
		}
	}
?>