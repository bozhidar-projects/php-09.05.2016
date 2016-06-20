<!DOCTYPE html>
<html>
<head>
	<title>Two number Adder</title>
</head>
<body>
	<?php 
		$argument_a = 0;
		if (isset($_GET['argument-a'])) {
			$argument_a = $_GET['argument-a'];
		}

		$argument_b = 0;
		if (isset($_GET['argument-b'])) {
			$argument_b = $_GET['argument-b'];
		}

		$result = $argument_a + $argument_b;
	?>
	<form method="get">
		<fieldset>
			<legend>"Simple Adder"</legend>
			<label for="argument-a">Argument A:</label>
			<input id="argument-a" name="argument-a" type="number" value="<?php echo $argument_a?>"><br>

			<label for="argument-b">Argument B:</label>
			<input id="argument-b" name="argument-b" type="number" value="<?php echo $argument_b?>"><br>

			<button type="Submit">Calculate</button>
			<label for="result">Result:</label>
			<output id="result" for="argument-a argument-b"><?php echo $result;?></output><br>
		</fieldset>	
	</form>
</body>
</html>