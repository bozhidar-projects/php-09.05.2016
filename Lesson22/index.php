<?php
	function __autoload($classname) {
		require_once($classname . ".php");
	}

	$cars = array(new Car("Toyota", "Corolla"), new Car("Bmw", "328"), new Car("Mazda", "6"));
	$car_shop = new CarShop($cars);
	$car_shop->add_car(new Car("Mercedes", "C280"));
	$car_shop->add_car(new Car("Honda", "Accord"));

	$car_shop->print_cars();

	$car_shop->remove_car(1);
	echo "-----------------";
	$car_shop->print_cars();
?>