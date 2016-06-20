<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$simple_array = array("Alex", "Amir", "Anton");

		foreach ($simple_array as $p2) {
			echo $p2 . "<br>";
		}

		$dictionary = array(
							"Hello" => "Namascar",
							"Love" => "Piar",
							"One" => "Ech");

		foreach ($dictionary as $key => $value) {
			echo $key . " in hindi is " . $value . "<br>"; 
		}
	?>
</body>
</html>