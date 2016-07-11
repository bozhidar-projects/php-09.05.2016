<?php
	require_once("db.php");

	if (isset($_POST["ID"])) {
		$value = $_POST["ID"];
		if ($value >= 0  && $value < count($members)) {
			unset($members[$value]);
			remove_record("members.csv", $value);
		}

		header("Location: home.php");
	} 
?>