<?php

// a function to connect to database
function connect()
{
	// load database configuration, in order to connect to database
	$config = require_once __DIR__ . '/config/database.php'; // include one time only

	// make an attempt to connect to database with $config
	// mysqli_connect(host, username, password, database)
	$conn = mysqli_connect($config['host'], $config['username'], $config['password'], $config['database']);

	// Check connection, if failed, throw error message and exit
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit();
	}

	// else, return the $conn
	return $conn;
}

function execute($sql)
{
	$conn = connect();
	$result = mysqli_query($conn, $sql);
	return $result;
}

function getList($sql)
{
	$list = [];
	$result = execute($sql);

	while ($row = mysqli_fetch_assoc($result)) {
		$list[] = $row;
	}
	return $list;
}