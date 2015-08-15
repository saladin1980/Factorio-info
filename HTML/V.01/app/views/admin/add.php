<?php require VIEW_ROOT . '/templates/header.php'; ?>

	<h5></h5>
<fieldset>
<legend>Add page</legend>
	<!-- Form Fields Here -->

	<form action="<?php echo BASE_URL; ?>/admin/add.php" method="POST" autocomplete="off">
		<label for="title">
			Title</label>
			<input type="text" name="title" id="title">
		

		<label for="label">
			Label</label>
			<input type="text" name="label" id="label">
		

		<label for="slug">
			Slug</label>
			<input type="text" name="slug" id="slug">
		

		<label for="body">
                    Body</label><br/>
                    <textarea name="body" id="body" cols="70" rows="10"></textarea>
		

		<input type="submit" value="Add">
	</form>
</fieldset>
<?php require VIEW_ROOT . '/templates/footer.php'; ?>