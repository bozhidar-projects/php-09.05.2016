<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$data = array(4 => "Vesi", 
					  5 => "Petia", 
					  8 => "Vesi");

		echo $data[8];
		echo "<br>";

		$phonebook = array(
				"Ivan" => "08828134",
				"Todor" => "04124123",
				"Petyr" => "04123124",
		);

		$phonebook["Ivan"] = "08238482";
		echo $phonebook["Ivan"];
	?>
</body>
</html>