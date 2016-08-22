<?php
	class Dog extends Animal {
		private $name;

		public function __construct($name) {
			$this->name = $name;
		}

		public function fetch_a_stick() {
			echo $this->name . " fetches a stick <br>";
		}
	}

?>