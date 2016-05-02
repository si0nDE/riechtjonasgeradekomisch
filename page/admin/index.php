<?php
$data = json_decode(file_get_contents('../lib/data/content.json'));

$langcode = $data->admin->lang;
if(file_exists('../lib/data/lang/'.$langcode.'.json')) {
    $lang = json_decode(file_get_contents('../lib/data/lang/'.$langcode.'.json'));
}

if(!isset($lang)) {
    // TODO: error language file not found
}

$data->language = $lang;

setcookie('admin', 'yes', time() + (60 * 30), '/');
if (empty($data)) {
    include 'default.php';
    if (write_default()) {
        header('Location: ./');
    }
}
session_start();
require_once '../lib/Mustache/Autoloader.php';
Mustache_Autoloader::register();
$m = new Mustache_Engine(array(
    'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/views', array('extension' => '.html'))
));

if (isset($_SESSION['error'])) {
    if ($_SESSION['error']) {
        $data->admin->error = true;
        $data->admin->error_msg = $_SESSION['error_msg'];
    }
}
if (isset($_SESSION['success'])) {
    if ($_SESSION['success']) {
        $data->admin->save = true;
    }
}
if ($data->core->status === true) {
    $data->admin->select_on = true;
} else {
    $data->admin->select_off = true;
}
if ($data->admin->tweet_theme == 'dark') {
    $data->admin->tweet_theme_dark = true;
} else {
    $data->admin->tweet_theme_light = true;
}
function scan_for_themes()
{
    $directory = '../lib/views';
    $scanned_directory = array_diff(scandir($directory), array('..', '.'));
    if (count($scanned_directory) >= 2) {
        return true;
    } else {
        return false;
    }
}

if (scan_for_themes()) {
    $data->admin->show_template = true;
}
$data->admin->title = "admin@" . preg_replace('#^https?://#', '', $data->core->url);
echo $m->render('admin', $data);
session_destroy();
exit;
