<?php include_once 'config/init.php'; ?>

<?php
$addon = new Addon;

$template = new Template('templates/frontpage.php');

$category = isset($_GET['category']) ? $_GET['category'] : null;

if($category){
        $template->addons = $addon->getByCategory($category);
        $template->title = $addon->getCategory($category)->name . ' Addons';
} else {
        $template->title = 'Latest Addons';
        $template->addons = $addon->getAllAddons();

}

$template->categories = $addon->getCategories();

echo $template;