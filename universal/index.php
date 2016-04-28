<?php
// get data-core from administrator
$data = json_decode(file_get_contents('lib/data/content.json'));
// set status
if ($data->core->status){
    $data->core->answer = $data->core->true->text;
    $data->core->twitter->long = $data->core->true->long;
}else{
    $data->core->answer = $data->core->false->text;
    $data->core->twitter->long = $data->core->false->long;
}
// see if an authorized person is visiting
if (isset($_COOKIE['admin'])){
    $data->admin->button = true;
};
// call the power of mustaches
require_once 'lib/Mustache/Autoloader.php';
Mustache_Autoloader::register();
$m = new Mustache_Engine(array(
    'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/lib/views',array('extension' => '.html'))
));
echo $m->render($data->admin->template, $data);