<?php
	function __autoload($classname) {
		require_once($classname . ".php");
	}

	$toyota = new Car("Toyota", "Corolla");

	$toyota->power_on();
	$toyota->set_speed(90);
	$toyota->load();
	$toyota->power_off();
	$toyota->drive();

	$toyota->power_on();
	$toyota->set_speed(5);
	$toyota->drive();

	$ferrari = new Car("Ferrari", "FM");
	$ferrari->power_on();
	$ferrari->set_speed(300);
	$ferrari->drive();
?>