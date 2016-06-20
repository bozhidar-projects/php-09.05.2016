<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
	<?php
		$students = array(
			array("Vesi", "Blazheva", "Unibit"),
			array("Nikolai", "Ivanov", "TU-Sofia"),
			array("Tihomir", "Todorov", "TU-Sofia")
		);

		for ($i = 0; $i < count($students); $i++) {
			echo "<tr>";
			$row = $students[$i];
			for ($j = 0; $j < count($row); $j++) {
				echo "<td>";
				echo $row[$j];
				echo "</td>";
			}
			echo "</tr>";
		}
	?>
	</table>
</body>
</html>