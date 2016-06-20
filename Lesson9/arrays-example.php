<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<ol>
		<?php
			$students = array("Vesi", "Petia", "Kalina", "Spas", "Petar");		

			$new_size = array_push($students, "Ivan");
			$students[count($students)] = "Mitko";
			$students[] = "Nikolai";

			$student = array_pop($students);

			for ($i = 0; $i < count($students); $i++) {
				$student = $students[$i];
				echo "<li>" . $student . "</li>";
			}
		?>
	</ol>
	<?php echo "Total of " . $student . " students"?>
</body>
</html>