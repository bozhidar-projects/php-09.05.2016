<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$names = "Nikolai,Tihomir,Spas,Petar";
		$array_of_names = explode(",", $names);

		foreach ($array_of_names as $value) {
			echo $value. "<br>";
		}

		$cool_names = implode("!-!", $array_of_names);
		echo $cool_names;
	?>
</body>
</html>