<?php include_once 'config/init.php'; ?>

<?php
$addon = new Addon;

$addon_id = isset($_GET['id']) ? $_GET['id'] : null;

if(isset($_POST['submit'])){
	//Create Data Array
	$data = array();
    $data['addon_title'] = $_POST['addon_title'];
    $data['category_id'] = $_POST['category'];
    $data['description'] = $_POST['description'];
    $data['developer'] = $_POST['developer'];
    $data['file_size'] = $_POST['file_size'];

	if($addon->update($addon_id, $data)){
		redirect('index.php', 'Your addon has been updated', 'success');
	} else {
		redirect('index.php', 'Something went wrong', 'error');
	}
}

$template = new Template('templates/addon-edit.php');

$template->addon = $addon->getAddon($addon_id);
$template->categories = $addon->getCategories();

echo $template;