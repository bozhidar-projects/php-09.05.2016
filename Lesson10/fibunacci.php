<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$N = 10;

		$first = 1;
		$second = 1;
		$array_result = array($first, $second);

		for ($i = 0; $i < $N-2; $i++) {
			$next = $first + $second;
			array_push($array_result, $next);
			$first = $second;
			$second = $next;
		}

		$result = implode(",", $array_result);
		echo $result;
	?>
</body>
</html>