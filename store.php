<?php
	// check if name or description not exist, redirect to create new task page
	if(!isset($_POST['name']) || !isset($_POST['description'])) {
		header('Location: /create.php?message=Missing inputs');
	}
	require_once 'inc/functions.php';
	$conn = connect();
	$date = date('Y-m-d H:i:s');
	$sql = "insert into tasks (name,description,created_at) values ('".$_POST['name']."','".$_POST['description']."','".$date."')";
	$result = mysqli_query($conn, $sql);

	if($result) {
		header('Location: /?message=Task succesfully created.'); // redirect to main page
	} else {
		echo 'Unable to update the task status';
	}