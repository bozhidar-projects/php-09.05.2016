<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$a = 5;
		$b = 10;

		$result = $a > $b ? $a : $b;

		$name = isset($_GET['name']) ? $_GET['name'] : "";
		echo $result;
	?>
</body>
</html>