<?php
	foreach ($movies as $movie) {
		echo '<div class="movie">';
		echo '<header>';
		echo '<h3>' . $movie['title'] . '</h3>'; 
		echo '</header>';
		echo '<img class="movie-thumbnail" src="'. $movie['image'] . '">';
		echo '</div>';
	}
 ?>