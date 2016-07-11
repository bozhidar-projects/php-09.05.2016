<?php
	require_once("db.php");

	if (isset($_POST["ID"])) {
		$value = $_POST["ID"];
		if ($value >= 0  && $value < count($users)) {
			unset($users[$value]);
			remove_record("users.csv", $value);
		}

		header("Location: home.php?page=users");
	}
?>