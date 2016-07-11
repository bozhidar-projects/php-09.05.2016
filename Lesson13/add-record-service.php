<?php
	require_once("db.php");

	if (isset($_POST["Firstname"]) &&
		isset($_POST["Lastname"]) &&
		isset($_POST["Age"]) &&
		isset($_POST["University"]) &&
		isset($_POST["Phone"])) {

		$member = array('Firstname' => $_POST["Firstname"],
						'Lastname' => $_POST["Lastname"],
						'Age' => $_POST["Age"],
						'University' => $_POST["University"],
						'Phone' => $_POST["Phone"]);

		array_push($members, $member);

		$csv_string = implode(",", $member);
		$file = fopen("members.csv", "a");
		fwrite($file, "\n".$csv_string);
		fclose($file);

		header("Location: add-records.php");
	}
?>