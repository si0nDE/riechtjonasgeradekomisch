<?php
// get data-core from administrator
$data = json_decode(file_get_contents('lib/data/content.json'));
// workaround for status string
function statusString($input_array) {
 if($input_array->core->status){
     return "true";
 }else{
     return "false";
 }
}
// see if we got an authorized person surfing the web
if (!empty($_COOKIE['admin'])){
    $data->admin->button = true;
}
$template = statusString($data);
// get Mustache-Engine ready
require_once 'lib/Mustache/Autoloader.php';
Mustache_Autoloader::register();
$m = new Mustache_Engine(array(
    'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/lib/views',array('extension' => '.html'))
));
echo $m->render($template, $data);