<?php require_once 'views/partials/header.php'; ?>
<?php require_once 'controllers/tasks/store.php'; ?>
<form class="form-horizontal well well-small" method="POST" >
	<fieldset>

	<!-- Form Name -->
	<legend>Add New Task</legend>

	<!-- Text input-->
	<div class="form-group">
	<label class="col-md-4 control-label" for="name">Task Name</label>  
	<div class="col-md-4">
	<input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">
	  
	</div>
	</div>

	<!-- Textarea -->
	<div class="form-group">
	<label class="col-md-4 control-label" for="description">Description</label>
	<div class="col-md-4">                     
	  <textarea class="form-control" id="description" name="description"></textarea>
	</div>
	</div>

	<!-- Button (Double) -->
	<div class="form-group">
	<label class="col-md-4 control-label" for="submit"></label>
	<div class="col-md-8">
	  <button class="btn btn-success">Save</button>
	  <a href="index.php" class="btn btn-danger">Cancel</a>
	</div>
	</div>

	</fieldset>
</form>

<?php require_once 'views/partials/footer.php'; ?>