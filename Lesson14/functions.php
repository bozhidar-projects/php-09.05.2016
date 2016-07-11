<?php
	function println($some_string) {
		echo $some_string . "<br>";
	}

	function add($a, $b) {
		$result = $a + $b;
		return $result;
	}

	function test_php($a, $b, $is_add = true) {
		if ($is_add) {
			return $a + $b;
		} else {
			return $a - $b;
		}
	}

	//Wrong
	function test_php2($a = 0, $b, $is_add = true) {
		if ($is_add) {
			return $a + $b;
		} else {
			return $a - $b;
		}
	}

	//OK
	function test_php3($a, $b = 0, $is_add = true) {
		if ($is_add) {
			return $a + $b;
		} else {
			return $a - $b;
		}
	}

	$x = sqrt(25);
	println($x);

	$result = strstr("ivan@gmail.com", "@", true);
	println($result); 

	println("Hello");
	println("Hi");
	println("Aloha");	

	//(10+15) * (10 + 35)
	$arg1 = add(10, 15);
	$arg2 = add(10, 35);
	$result = $arg1 * $arg2;
	println($result);

	$x1 = test_php(10, 15, false);
	println($x1);
?>