<?php 
	$selected_ganre = isset($_GET["ganre-filter"]) ? $_GET["ganre-filter"] : $ganres[0]; 
?>
<form method="get">
	<select name="ganre-filter">
		<?php 
			foreach ($ganres as $ganre) {
				if ($ganre == $selected_ganre) {
					echo "<option selected>" . $ganre . "</option>";
				} else {
					echo "<option>" . $ganre . "</option>";
				}
			}
		?>
	</select>
	<button type="submit">Filter</button>
</form>
<?php
	foreach ($movies as $movie) {
		if ($selected_ganre == $movie['ganre']) {
			echo '<div class="movie">';
			echo '<header>';
			echo '<h3>' . $movie['title'] . '</h3>'; 
			echo '</header>';
			echo '<img class="movie-thumbnail" src="'. $movie['image'] . '">';
			echo '<h4>' . $movie['ganre'] . '</h4>';
			echo '<h4>' . $movie['director'] . '</h4>';
			echo '<details>' . $movie['description'] . '</details>'; 
			echo '</div>';
		}
	}
?>