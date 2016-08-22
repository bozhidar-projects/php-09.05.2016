<?php
	class Car implements MotorVehicle {

		public function drive() {
			echo "Driving the car <br>";
		}

		public function turn_engine_on() {
			echo "The car turns the engine on <br>";
		}
	}
?>