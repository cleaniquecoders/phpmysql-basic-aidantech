<?php require_once 'views/partials/header.php'; ?>

<?php 
	// include commmon functions to be use
	require_once 'inc/functions.php';
	// $conn = connect();
	// $sql = "select * from tasks";
	// $result = mysqli_query($conn, $sql);


	$list = getList($sql);
?>

<a href="create.php" class="btn btn-success">Create New Task</a>

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
			<?php foreach ($list as $key => $value): ?>
				<tr>
					<td><?php echo $value['name']; ?></td>
					<td><?php echo $value['description']; ?></td>
					<td><?php 
							if($value['status'] == 0) {
								echo 'Pending';
							} else {
								echo 'Done';
							}
						?>
					</td>
					<td>
						<?php if($value['status'] == 0): ?>
							<a class="btn btn-success" href="status.php?done=1&id=<?php echo $value['id']; ;?>">Mark as done</a>
						<?php endif; ?>
			<a class="btn btn-danger" 
				href="#" 
				onclick="confirmDelete(<?php echo $value['id']; ;?>)">Delete</a>
					</td>
				</tr>	
			<?php endforeach; ?>
		</tbody>
	</table>
	<script type="text/javascript">
		function confirmDelete(id)
		{
			if(confirm('Are you sure want to delete this task?')) {
				window.location = 'delete.php?id='+id;
			}
		}
	</script>
<?php else: ?>
	<h3 class="alert alert-info">No tasks found</h3>>
<?php endif;?>
<?php
	// Free result set
	mysqli_free_result($result);
	mysqli_close($conn);
?>
<?php require_once 'views/partials/footer.php'; ?>