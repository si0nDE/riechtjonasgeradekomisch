<?php

$array1 = array(
    'core' => array(
    'status' => true,
    'question' => 'Riecht Jonas gerade komisch?',
    'firstname' => 'Jonas',
    'twitter' => array(
        'owner' => 'manchmalfieber',
        'nick' => 'aledjonesworld'
    ),
        'true' => array(
            'text' => 'JA!',
            'long' => 'du riechst komisch!'
        ),
        'false' => array(
            'text' => 'Nope.',
            'long' => 'was ist da los? Du riechst nicht komisch!'
        ),
    'version' => '1.5',
    'url' => 'http://riechtjonasgeradekomisch.com',),
    'admin' => array(
        'question_label' => 'Question:',
        'btn_label' => 'Save',
        'title' => 'admin@riechtjonasgeradekomisch.com',
        'characters_label'
    )
);


$json = json_encode($array1);
file_put_contents('lib/data/content.json', $json);
echo "Done: 1\n";
echo "STOP";