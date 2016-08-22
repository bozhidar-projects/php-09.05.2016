<?php
	class Siamese extends Cat {

		public function __construct($name) {
			parent::__construct($name);
		}

		public function make_a_sound() {
			echo $this->name . " siamese cat myauuss <br>";
		}
	}
?>