<?php
	function divide_two_numbers($divided, $divisor) {
		echo "Inside function...<br>";
		if ($divisor == 0) {
			$e = new Exception("Error: Division by 0<br>");
			throw $e;
		}

		echo "Processing division...<br>";
		return $divided / $divisor;
	}

	try {
		echo "Before calling the function...<br>";
		echo divide_two_numbers(10, 0);
		echo "After calling the function..<br>";
	} catch (Exception $exception) {
		echo "Exception catched !!!: " . 
			$exception->getMessage();
	}

	echo "End of program.<br>";
?>