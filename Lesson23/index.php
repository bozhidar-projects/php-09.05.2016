<?php
	function __autoload($classname) {
		require_once($classname . ".php");
	}

	function poke_animal(Animal $animal) {
		$animal->make_a_sound();
	}

	function poke_animals(array $animals) {
		foreach ($animals as $animal) {
			poke_animal($animal);
		}
	}

	$dog = new Dog("Rex");
	$dog->make_a_sound();
	$dog->fetch_a_stick();

	$cat = new Cat("Garfield");
	$cat->make_a_sound();
	$cat->catch_a_mouse();

	$parrot = new Parrot("Pesho");
	$parrot->make_a_sound();

	$parrot->repeat_a_word("biscuit");

	echo "Poking animals... <br>";
	poke_animal($dog);
	poke_animal($cat);
	poke_animal($parrot);

	echo "Array example: <br>";
	$animals = array(new Dog("Vux"),
					 new Dog("Tiger"),
					 new Cat("Ketty"),
					 new Parrot("Coco")
					);
	poke_animals($animals);
?>