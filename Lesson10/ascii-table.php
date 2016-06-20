<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<?php
			$test = "This is TstT";

			$result = "this is tstt";

			for ($i = 33; $i < 126; $i++) {
				echo "<tr>";
				echo "<td>".$i."</td>";
				$safe_string = htmlspecialchars(chr($i));
				echo "<td>".$safe_string."</td>";
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>