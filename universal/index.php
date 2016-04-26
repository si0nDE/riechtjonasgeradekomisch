<?php
// get data-core from administrator
$data = file_get_contents('lib/data/content.json');
$data = json_decode($data);
// get Mustache-Engine ready
require_once 'lib/Mustache/Autoloader.php';
Mustache_Autoloader::register();
$m = new Mustache_Engine();

?>