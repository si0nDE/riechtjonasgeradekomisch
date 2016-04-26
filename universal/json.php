<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 25.04.2016
 * Time: 14:28
 */

$array1 = array(
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

$array2 = array(
    'question_lable' => 'Question:',
    'btn_lable' => 'Save'
);
$json = json_encode($array1);
file_put_contents('lib/data/content.json', $json);
echo "Done: 1\n";
$json = json_encode($array2);
file_put_contents('lib/data/admin.json', $json);
echo "Done: 2\n";
echo "STOP";