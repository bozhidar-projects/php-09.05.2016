<?php 
	function foo($reset = false) {
		static $a = 15;
		echo $a;
		$a++;
	}

	foo();
	echo "<br>";
	foo();
	echo "<br>";
	foo();
?>