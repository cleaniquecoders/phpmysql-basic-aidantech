<?php

	require_once 'inc/functions.php';
	$conn = connect();
	$sql = "update tasks set status = 1 where id = ".$_GET['id'];
	$result = mysqli_query($conn, $sql);

	if($result) {
		header('Location: /?message=Task status mark as done'); // redirect to main page
	} else {
		echo 'Unable to update the task status';
	}