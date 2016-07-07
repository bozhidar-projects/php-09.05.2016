<?php
	include("header.php");
	include("left-sidebar.php");
	include("records-list.php");
?>
<form action="remove-record-service.php" method="post">
	<label for="record-id">Record ID:</label>
	<input id="record-id" name="ID" type="number"><br>
	<button type="submit">Remove</button>
</form>
<?php
	include("footer.php");
?>