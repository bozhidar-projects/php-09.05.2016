<?php
	class Car {
		private $model;
		private $brand;

		public function __construct($model, $brand) {
			$this->model = $model;
			$this->brand = $brand;
		}

		public function get_model() {
			return $this->model;
		}

		public function set_model($model) {
			$this->model = $model;
		}

		public function get_brand() {
			return $this->brand;
		}

		public function set_brand($brand) {
			$this->brand = $brand;
		}
	}
?>