<?php
	function print_table($column_names, $records) {
		echo "<table>";
		echo "<tr>";
		echo "<th>ID</th>";

		foreach ($column_names as $column_name) {
			echo "<th>" . $column_name . "</th>";
		}

		echo "</tr>";
		$i = 0;
		foreach ($records as $record) {
			echo "<tr>";
			echo "<td>" . $i++ . "</td>";
			foreach ($column_names as $column_name) {
				echo "<td>" . $record[$column_name] . "</td>";
			}
			echo "</tr>";
		}
		
		echo "</table>";
	}

	function print_add_form($column_names, $action) {
		echo '<form class="add-form" action="' . $action . '" method="post">';
		foreach ($column_names as $column_name) {
			echo '<label for="'.$column_name.'">' . $column_name . ':</label>';
			echo '<input id="' . $column_name . '" name="'. $column_name . '" type="text"><br>';
		}

		echo '<button type="submit">Add</button>';
		echo '</form>';
	}
?>