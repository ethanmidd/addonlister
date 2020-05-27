<?php include_once 'config/init.php'; ?>

<?php
$addon = new Addon;

if(isset($_POST['submit'])){
    //Create Data Array
    $data = array();
    $data['addon_title'] = $_POST['addon_title'];
    $data['category_id'] = $_POST['category'];
    $data['description'] = $_POST['description'];
    $data['developer'] = $_POST['developer'];
    $data['file_size'] = $_POST['file_size'];

    if($addon->create($data)){
        redirect('index.php', 'Your addon has been listed', 'success');
    } else {
        redirect('index.php', 'Something went wrong', 'error');
    }
}

$template = new Template('templates/addon-create.php');

$template->categories = $addon->getCategories();

echo $template;