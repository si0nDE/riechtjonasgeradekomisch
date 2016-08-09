<?php
// Production-Mode | Errors still get reported in admin mode
if (isset($_COOKIE['admin'])) {
    error_reporting(E_ALL);
} else {
    error_reporting(0);
}

// get data-core from administrator
$data = "";
if (file_exists('lib/data/content.json')) {
    $data = json_decode(file_get_contents('lib/data/content.json'));
}
if (empty($data)) {
    header('Content-Type: text/plain');
    echo "Admin: Your data-core is faulty or has not been initialized yet.\nPlease visit admin/ for data-core-initialization!";
    exit;
}

// get language
$langcode = $data->admin->lang;

if (file_exists('lib/data/lang/' . $langcode . '.json')) {
    $lang = json_decode(file_get_contents('lib/data/lang/' . $langcode . '.json'));
}

if (!isset($lang)) {
    echo "Language file <i>". $langcode. ".json</i> not found!";
    exit;
} else {
    $data->language = $lang;
}

// set status
if ($data->core->status) {
    $data->core->answer = $data->core->true->text;
    $data->core->twitter->long = $data->core->true->long;
} else {
    $data->core->answer = $data->core->false->text;
    $data->core->twitter->long = $data->core->false->long;
}
// see if an authorized person is visiting
if (isset($_COOKIE['admin'])) {
    $data->admin->button = true;
};
// call the power of mustaches
require_once 'lib/Mustache/Autoloader.php';
Mustache_Autoloader::register();
$m = new Mustache_Engine(array(
    'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/lib/views', array('extension' => '.html')),
    'partials_loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/lib/views/subviews', array('extension' => '.html'))
));
echo $m->render($data->admin->template, $data);