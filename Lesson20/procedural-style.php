<?php
	$member = array("Firstname" => "Ivan",
					"Lastname" => "Ivanov",
					"Age" => 25,
					"Phone" => "082887212");

	$member2 = array("Firstname" => "Dragan",
					"Lastname" => "Draganov",
					"Age" => 28,
					"Phone" => "582887212");

	$member3 = array("Brand" => "BMW",
					 "Model" => "x5",
					 "Year" => 2006);

	function get_name($member_param) {
		$full_name = $member_param["Firstname"] . " " . $member_param["Lastname"];
		return $full_name;
	}

	function get_info($member_param) {
		$info = get_name($member_param) . 
				" " .
				$member_param["Age"] .
				" yearrs old. Phone: ".
				$member_param["Phone"];

		return $info;
	}
	
	echo get_info($member);
	echo "<br>";
	echo get_info($member2);

	echo get_info($member3);
?>