<?php
require_once("db.php");

	if (isset($_POST["username"]) &&
		isset($_POST["password"])) {

		$user = array('username' => $_POST["username"],
					  'password' => $_POST["password"]);

		array_push($users, $user);
		add_record("users.csv", $user);
		
		header("Location: home.php?page=users");
	}

?>