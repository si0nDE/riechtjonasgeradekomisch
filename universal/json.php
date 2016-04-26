<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 25.04.2016
 * Time: 14:28
 */

$array = array(
    'status' => true,
    'question' => 'Does {{firstname}} smell very weird?',
    'firstname' => 'Jonas',
    'twitter' => 'aledjonesworld',
    'twitter_owner' => 'simonfieberDE',
    'true_text' => 'YES!',
    'true_long' => 'you smell very weird',
    'false_text' => 'Nope.',
    'false_long' => 'what´s up? You don´t smell weird!',
    'version' => '1.2',
    'url' => 'http://riechtjonasgeradekomisch.com'
);
$json = json_encode($array);
file_put_contents('lib/data/content.json', $json);