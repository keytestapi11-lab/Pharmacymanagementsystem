<?php
	$mysqlUrl = getenv("MYSQL_URL");
	if ($mysqlUrl) {
		$parts = parse_url($mysqlUrl);
		$host = $parts["host"] ?? "localhost";
		$user = $parts["user"] ?? "root";
		$pass = $parts["pass"] ?? "";
		$db   = ltrim($parts["path"] ?? "", "/") ?: "pharmacy";
	} else {
		$host = getenv("MYSQL_HOST") ?: "localhost";
		$user = getenv("MYSQL_USER") ?: "root";
		$pass = getenv("MYSQL_PASSWORD") ?: "";
		$db   = getenv("MYSQL_DATABASE") ?: "pharmacy";
	}
	$conn = mysqli_connect($host, $user, $pass, $db);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
?>