<?php
	function __autoload($classname) {
		require_once($classname . ".php");
	}

	function test_vehicle(Vehicle $vehicle) {
		echo "Testing the vehicle: ";
		$vehicle->drive();
	}

	function test_motor_vehicle(MotorVehicle $motorVehicle) {
		$motorVehicle->turn_engine_on();
		$motorVehicle->drive();
	}

	function test_pedal_driven_vehicle(PedalDrivenVehicle $pedalVehicle) {

		$pedalVehicle->start_pedaling();
		$pedalVehicle->drive();
	}

	$car = new Car();
	$truck = new Truck();
	$bike = new Bike();

	test_vehicle($car);
	test_vehicle($truck);
	test_vehicle($bike);

	test_motor_vehicle($car);
	test_motor_vehicle($truck);
	
	test_pedal_driven_vehicle($bike);
?>