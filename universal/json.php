<?php

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
    'url' => 'http://riechtjonasgeradekomisch.com',
    'admin' => array(
        'question_lable' => 'Question:',
        'btn_lable' => 'Save',
        'title' => 'admin@riechtjonasgeradekomisch.com'
    )
);


$json = json_encode($array1);
file_put_contents('lib/data/content.json', $json);
echo "Done: 1\n";
echo "STOP";