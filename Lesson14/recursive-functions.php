<?php
	function bar($x) {
		$b = 10;
		echo ($x + 10) . "<br>";
	}

	function foo($x) {
		$a = 10;
		bar($x);
		echo $a;
	}

	$x = 10;
	foo($x);

	echo "<br>";

	function sum_of_n_recursive($n) {
		if ($n == 1) {
			return 1;
		}

		return sum_of_n_recursive($n-1) + $n;
	}

	echo sum_of_n_recursive(3);
?>