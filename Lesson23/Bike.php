<?php
	class Bike implements PedalDrivenVehicle {

		public function start_pedaling() {
			echo "The bike pedaling started <br>";
		}

		public function drive() {
			echo "The bike is being ridden <br>";
		}
	}
?>