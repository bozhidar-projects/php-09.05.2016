<?php 
	require_once("authentication.php");
	require_once("db.php"); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Working With Files</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<header>
	<span>Logged as <span><?php $_SESSION['user']['username']?></span></span>
	<form id="logout-form" action="logout.php" method="post"><button type="submit">Logout</button></form>
</header>