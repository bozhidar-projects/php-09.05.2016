<!DOCTYPE html>
<html>
<head>
	<title>Working With Files</title>
</head>
<body>
	<pre><?php 
			$file = fopen("database.csv", "r");
			$members = array();

			$column_string = fgets($file);
			$column_names = explode(",", $column_string);

			while (!feof($file)) {
				$current_line = fgets($file);
				$elements = explode(",", $current_line);
				$member = array();
				for ($i = 0; $i < count($column_names); $i++) {
					$key = $column_names[$i];
					$member[$key] = $elements[$i];
				}
				array_push($members, $member);
			}
			fclose($file);
		?></pre>
		<table>
			<?php
				foreach ($members as $member) {
					echo "<tr>";
					foreach ($column_names as $column_name) {
						echo "<td>" . $member[$column_name] . "</td>";
					}
					echo "</tr>";
				}
			?>
		</table>
</body>
</html>