<?php include_once 'config/init.php'; ?>

<?php
$addon = new Addon;

$template = new Template('templates/addon-single.php');

$addon_id = isset($_GET['id']) ? $_GET['id'] : null;

$template->addon = $addon->getAddon($addon_id);

echo $template;