<?php include 'inc/header.php'; ?>
    <h3 class="page-header"><?php echo $addon->addon_title; ?> (<?php echo $addon->simulator; ?>)</h3>
    <small>Posted on <?php echo $addon->post_date; ?></small>
    <hr>
    <p class="lead"><?php echo $addon->description; ?></p>
    <ul class="list-group"
        <li class="list_group-item"><strong>Developer:</strong> <?php echo $addon->developer; ?></li>
        <li class="list_group-item"><strong>File Size:</strong> <?php echo $addon->file_size; ?></li>
    </ul>
    <br>
    <a href="index.php">Go Back</a>
    <br><br>

<?php include 'inc/footer.php'; ?>