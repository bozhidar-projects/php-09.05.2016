<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
	<?php 
		$is_sunny = false;
		$others_are_comming = true;
		$is_going = $is_sunny || $others_are_comming;
		$question = !$is_going;

		$complex_question = ($is_sunny || $others_are_comming) && (!$is_sunny && $others_are_comming);

		echo "<br>";
		echo $is_going;
	?>
	</body>
</html>
