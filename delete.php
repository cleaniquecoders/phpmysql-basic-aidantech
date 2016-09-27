<?php

	require_once 'inc/functions.php';
	$sql = "delete from tasks where id = ".$_GET['id']; // generate query
	$result = execute($sql);

	if($result) {
		header('Location: /?message=Task deleted'); // redirect to main page
	} else {
		echo 'Unable to update the task status';
	}