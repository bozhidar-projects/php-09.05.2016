<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$password = "123456";

		$options = [
		    'cost' => 11,
		    'salt' => "Eakjsdhfjkasdhfkasdkjfhka",
		];

		$hash_value = password_hash($password, PASSWORD_DEFAULT, $options);

		echo $hash_value;
	?>
</body>
</html>