<?php include 'inc/header.php'; ?>
	<h2 class="page-header">Edit Addon Listing</h2>
	<form method="post" action="edit.php?id=<?php echo $addon->id; ?>">
		<div class="form-group">
			<label>Developer</label>
			<input type="text" class="form-control" name="developer" value="<?php echo $addon->developer; ?>">
		</div>
		<div class="form-group">
			<label>Category</label>
			<select class="form-control" name="category">
				<option value="0">Choose Category</option>
                <?php foreach($categories as $category): ?>
                	<?php if($addon->category_id == $category->id) : ?>
                		<option value="<?php echo $category->id; ?>" selected><?php echo $category->name; ?></option>
					<?php else: ?>
						<option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
					<?php endif; ?>          
                <?php endforeach; ?>
			</select>
		</div>
		<div class="form-group">
			<label>Addon Title</label>
			<input type="text" class="form-control" name="addon_title" value="<?php echo $addon->addon_title; ?>">
		</div>
		<div class="form-group">
			<label>Description</label>
			<textarea class="form-control" name="description"><?php echo $addon->description; ?></textarea>
		</div>
		<div class="form-group">
			<label>File Size</label>
			<input type="text" class="form-control" name="file_size" value="<?php echo $addon->file_size; ?>">
		</div>
		<input type="submit" class="btn btn-default" value="Submit" name="submit">
	</form>
<?php include 'inc/footer.php'; ?>