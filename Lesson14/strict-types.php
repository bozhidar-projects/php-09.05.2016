<?php
	function add5(int $a):int {
		$result = $a + 5; 
		return $result;
	}

	echo add5(10); 
	echo "<br>";
	echo add5("Hello");
?>