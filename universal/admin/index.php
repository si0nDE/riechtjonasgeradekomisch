<?php
session_start();
require_once '../lib/Mustache/Autoloader.php';
Mustache_Autoloader::register();
$data = json_decode(file_get_contents('../lib/data/content.json'));
$m = new Mustache_Engine(array(
    'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/views',array('extension' => '.html'))
));
if(isset($_SESSION['success'])){
    if($_SESSION['success']) {
        $data->admin->save = true;
    }
}
echo $m->render('admin', $data);
session_destroy();
session_start();
?>
