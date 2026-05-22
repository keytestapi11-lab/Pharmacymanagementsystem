<?php
		$host = getenv("MYSQL_HOST") ?: "localhost";
		$user = getenv("MYSQL_USER") ?: "root";
		$pass = getenv("MYSQL_PASSWORD") ?: "";
		$db   = getenv("MYSQL_DATABASE") ?: "pharmacy";
	$conn = mysqli_connect($host, $user, $pass, $db);
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
?>