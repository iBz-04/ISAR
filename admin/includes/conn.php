<?php
	$conn = new mysqli('localhost', 'root', '', 'libraryms');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>