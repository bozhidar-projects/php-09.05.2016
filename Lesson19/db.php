<?php
	$server_name = "localhost";
	$username = "root";
	$password = "";
	$schema_name = "blog";

	$database_connection = new mysqli($server_name, $username, $password, $schema_name);

	if ($database_connection->connect_errno) {
		die("Connection to database failded " . $database_connection->connect_errno);
	}

	function get_data_from_database($sql) {
		global $database_connection;

		$column_names = array();
		$database_result = $database_connection->query($sql);
		$fields = $database_result->fetch_fields();

		foreach ($fields as $value) {
			$column_name = $value->name;
			array_push($column_names, $column_name);	
		}

		$data = array();
		if ($database_result->num_rows > 0) {
			while ($row = $database_result->fetch_assoc()) {
				array_push($data, $row);
			}						
		}

		$result = array("columns" => $column_names,
						"data" => $data);
		return $result;
	}

	function get_users($sql) {
		$sql = "SELECT * FROM `Users`";

		$result = get_data_from_database($sql);
		return $result;
	}

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