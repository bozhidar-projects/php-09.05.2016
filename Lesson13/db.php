<?php 
	$file = fopen("members.csv", "r");
	$members = array();

	$column_string = trim(fgets($file));
	$column_names = explode(",", $column_string);
	while (!feof($file)) {
		$current_line = trim(fgets($file));
		$elements = explode(",", $current_line);
		$member = array();
		for ($i = 0; $i < count($column_names); $i++) {
			$key = $column_names[$i];
			$member[$key] = $elements[$i];
		}
		array_push($members, $member);
	}
	fclose($file);

	$file = fopen("users.csv", "r");
	$users = array();

	$column_string2 = trim(fgets($file));
	$column_names2 = explode(",", $column_string2);
	while (!feof($file)) {
		$current_line = trim(fgets($file));
		$elements = explode(",", $current_line);
		$user = array();
		for ($i = 0; $i < count($column_names2); $i++) {
			$key = $column_names2[$i];
			$user[$key] = $elements[$i];
		}
		array_push($users, $user);
	}
	fclose($file);
?>