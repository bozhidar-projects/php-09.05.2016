<?php
	class CarShop {
		private $cars;

		public function __construct($cars) {
			$this->cars = $cars;
		}

		public function get_all_cars() {
			return $this->cars;
		}

		public function add_car($car) {
			array_push($this->cars, $car);
		}

		public function remove_car($index) {
			unset($this->cars[$index]);
		}

		public function print_cars() {
			foreach (($this->cars) as $car) {
				echo "----------<br>";
				echo $car->get_brand() . "<br>";
				echo $car->get_model() . "<br>";
				echo "----------<br>";
			}
		}
	}

?>