<h2><?= $title ; ?></h2>

hello
<?php echo validation_errors(); ?>

<?php echo form_open_multipart('tests/create'); ?>
	<div class="form_group">
		<label>Name</label>
		<input type="text" class="form-control" name="name" placeholder="Enter name">
	</div>
	<button type="submit" class="btn btn-default">Submit</button>
</form>
