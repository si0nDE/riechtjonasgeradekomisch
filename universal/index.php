<?php
// get data-core from administrator
$data = file_get_contents('lib/data/content.json');
$data = json_decode($data);
function statusString($input_array) {
 if($input_array->core->status){
     return "true";
 }else{
     return "false";
 }
}
$template = statusString($data);
// get Mustache-Engine ready
require_once 'lib/Mustache/Autoloader.php';
Mustache_Autoloader::register();
$m = new Mustache_Engine(array(
    'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/lib/views',array('extension' => '.html'))
));
echo $m->render($template, $data)
?>