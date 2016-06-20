<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php 
			echo "<br>";
			$some_value = 1;

			$some_value += 1; //2
			$some_value++; //3
			++$some_value; //4

			$x = $some_value++; //x = 4, some_value = 5
			echo $x;
			echo "<br>";
			
			echo $some_value; //5
			echo "<br>";

			echo --$some_value; // echo 4, some_value = 4
			echo "<br>";

			echo $some_value--; // echo 4, some_value = 3
		?>
	</body>
</html>

