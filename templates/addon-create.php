<?php include 'inc/header.php'; ?>
    <h2 class="page-header">Create Addon Listing</h2>
    <form method="post" action="create.php">
    <div class="form-group">
            <label>Addon Title</label>
            <input type="text" class="form-control" name="addon_title">
        </div>
        <div class="form-group">
            <label>Category</label>
            <select class="form-control" name="category">
                <option value="0"> Choose Category</option>
                <?php foreach($categories as $category): ?>
                     <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description"></textarea>
        </div>
        <div class="form-group">
            <label>Developer</label>
            <input type="text" class="form-control" name="developer">
        </div>
        <div class="form-group">
            <label>File Size</label>
            <input type="text" class="form-control" name="file_size">
        </div>
        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Submit" name="submit">
    </form>
<?php include 'inc/footer.php'; ?>