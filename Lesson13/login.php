<?php
	session_start();
	require_once("db.php");
	
	$username = isset($_POST["username"]) ? $_POST["username"]: '';
	$password = isset($_POST["password"]) ? $_POST["password"]: ''; 

	$is_valid_user = false;
	foreach ($users as $user) {
		if ($user['username'] == $username && $user['password'] == $password) {
			$is_valid_user = true;
			break;
		}
	}

	if ($is_valid_user) {
		$_SESSION['user'] = array(
				'username' => $username,
				'password' => $password
			);
		header("Location: home.php");
	} else {
		header("Location: index.php");
	}
?>