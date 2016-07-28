<?php
	function __autoload($classname) {
		require_once($classname . ".php");
	}

	$alex = new Member("Alex", "Sofroniev", 15, "0898889911");

	$petyr = new Member("Petyr", "Stoyanov", 34, "0898889911");
	$petyr->like();
	$petyr->like();
	$petyr->like();
	$petyr->like();
	echo "<br>";
	echo "Number of likes: " . $petyr->get_likes();
	echo "<br>";

	$members = array($alex, $petyr);
	foreach ($members as $member) {
		$member->set_age(50);
	}

	echo $alex->get_info();
	echo "<br>";
	echo $petyr->get_info();
?>