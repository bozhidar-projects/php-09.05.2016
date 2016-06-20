<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<?php
			$random_string = "This is A TeSTT";
			$result = "";
			for ($i = 0; $i < strlen($random_string); $i++) {
				$random_symbol = $random_string{$i};

				$start = ord("A");
				$end = ord("Z");
				if (ord($random_symbol) >= $start && ord($random_symbol) <= $end) {
					$difference = ord($random_symbol) - ord("A");
					$new_value = ord("a") + $difference;
					$random_symbol = chr($new_value);
				}

				$result .= $random_symbol; //$result = $result . $random_symbol
			}

			echo $result;
		?>
	</table>
</body>
</html>