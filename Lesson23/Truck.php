<?php
	class Truck implements MotorVehicle {

		public function drive() {
			echo "Driving the truck <br>";
		}

		public function turn_engine_on() {
			echo "The truck turns the engine on <br>";
		}
	}
?>