<?php
	abstract class Animal {
		protected $name;

		public function __construct($name) {
			$this->name = $name;
		}

		abstract public function make_a_sound();

		public function get_name() {
			return $this->name;
		}
	}

?>