<?php 
	function get_data($file_name) {
		$file = fopen($file_name, "r");
		$data = array();

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
			array_push($data, $member);
		}
		fclose($file);
		$result = array("columns" => $column_names,
						"data" => $data);
		return $result;
	}

	function add_record($file_name, $record) {
		$csv_string = implode(",", $record);
		$file = fopen($file_name, "a");
		fwrite($file, "\n".$csv_string);
		fclose($file);
	}

	function remove_record($file_name, $record_index) {
		$data = get_data($file_name);
		$column_names = $data["columns"];
		$records = $data["data"];
		unset($records[$record_index]);
		print_r($records);
		$file = fopen($file_name, "w");
		$column_string = implode(",", $column_names);
		fwrite($file, $column_string);

		foreach ($records as $record) {
			$record_csv = implode(",", $record);
			fwrite($file, "\n".$record_csv);
		}

		fclose($file);
	}

	$members_data = get_data("members.csv");
	$members = $members_data["data"];
	$column_names = $members_data["columns"];

	$users_data = get_data("users.csv");
	$users = $users_data["data"];
	$column_names2 = $users_data["columns"];
?>