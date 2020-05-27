<?php include_once 'config/init.php'; ?>

<?php
$addon = new Addon;

if(isset($_POST['del_id'])){
	$del_id = $_POST['del_id'];
	if($addon->delete($del_id)){
		redirect('index.php', 'Addon Deleted', 'success');
	} else {
		redirect('index.php', 'Addon Not Deleted', 'error');
	}
}

$template = new Template('templates/addon-single.php');

$addon_id = isset($_GET['id']) ? $_GET['id'] : null;

$template->addon = $addon->getAddon($addon_id);

echo $template;