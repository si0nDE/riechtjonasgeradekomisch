<?php

$array1 = array(
    'core' => array(
    'status' => false,
    'question' => 'Does {{firstname}} smell very weird?',
    'firstname' => 'Jonas',
    'twitter' => array(
        'owner' => 'manchmalfieber',
        'nick' => 'aledjonesworld'
    ),
        'true' => array(
            'text' => 'YES!',
            'long' => 'you smell very weird'
        ),
        'false' => array(
            'text' => 'Nope.',
            'long' => 'what´s up? You don´t smell weird!'
        ),
    'version' => '1.5',
    'url' => 'http://riechtjonasgeradekomisch.com',),
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