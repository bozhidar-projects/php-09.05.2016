<?php
	$a = 10;

	function foo() {
		global $a;
		$a = 15;
	}

	foo();
	echo $a;
?>