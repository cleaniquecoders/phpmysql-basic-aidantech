<?php

function connect()
{
	$config = require_once __DIR__ . '/config/database.php'; // include one time only

	$conn = mysqli_connect($config['host'],$config['username'],$config['password'],$config['database']);

	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit();
	}

	return $conn;
}