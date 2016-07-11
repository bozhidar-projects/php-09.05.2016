<?php
	$a = 5;
	$b = 10;

	function swap(&$x, &$y) {
		$temp = $x;
		$x  = $y;
		$y = $temp;
	}

	swap($a, $b);

	echo "A: " . $a . " B: " . $b;
?>