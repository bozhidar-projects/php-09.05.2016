<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$username = "";
		if (isset($_POST["username"])) {
			$username = $_POST["username"];
		}

		$password = "";
		if (isset($_POST["password"])) {
			$password = $_POST["password"];
		}

		echo "Hello $username !";
	?>
</body>
</html>