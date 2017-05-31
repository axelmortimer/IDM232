<?php
	define('DB_SERVER', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', 'Dynaport4!');
	define('DB_NAME', 'portfolio');

	$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

	if (mysqli_connect_errno()) {
		die ('Database connection failed: ' .
		mysqli_connect_error() .
		' )' . mysqli_connect_errno() . ')'
		);
	}

	$query = "SELECT * FROM projects";
	  $result = mysqli_query($connection, $query);

	  if (!$result) {
	    die ("Database query failed.");
	  }
?>