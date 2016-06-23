<table>
			<tr>
				<?php 
					foreach ($column_names as $column_name) {
						echo "<th>" . $column_name . "</th>";
					}
				?>
			</tr>
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