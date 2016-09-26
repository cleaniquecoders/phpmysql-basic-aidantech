<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Aidan Technologies Sdn Bhd - PHP &amp; MySQL Basic Training</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="container">
  		<h1>Aidan Technologies Sdn Bhd - PHP &amp; MySQL Basic Training</h1>
  		<hr>
  	<?php 
  		require_once 'inc/functions.php';

  		$conn = connect();

  		$sql = "select * from tasks";

		$result = mysqli_query($conn,$sql);

		?>
		
		<?php if($result): ?>
		<table class="table table-condensed table-hover">
			<thead>
				<tr>
					<th>Name</th>
					<th>Description</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php while ($row = mysqli_fetch_assoc($result)): ?>
					<tr>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['description']; ?></td>
						<td><?php echo $row['status']; ?></td>
						<td>
							<a class="btn btn-success" href="status.php?done=1&id=<?php echo $row['id']; ;?>">Mark as done</a>
							<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ;?>">Delete</a>
						</td>
					</tr>	
				<?php endwhile; ?>
				
			</tbody>
		</table>
	<?php else: ?>
		<h3 class="alert alert-info">No tasks found</h3>>
	<?php endif;?>
	<?php
		// Free result set
		mysqli_free_result($result);

		mysqli_close($conn);
  	?>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>