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
        'question_label' => 'Frage:',
        'btn_label' => 'Speichern',
        'title' => 'admin@riechtjonasgeradekomisch.com',
        'firstname_label' => 'Vorname:',
        'twitter_label' => 'Twitter-Benutzername (ohne @):',
        'twitter_owner_label' => 'Twitter-Benutzername von dir (ohne @):',
        'true_text_label' => 'Kurze Antwort, wenn zutreffend:',
        'true_long_label' => 'Text für Tweet, wenn zutreffend:',
        'false_text_label' => 'Kurze Antwort, wenn nicht zutreffend:',
        'false_long_label' => 'Text für Tweet, wenn nicht zutreffend:',
        'url_label' => 'Domain für Tweet (z.B. http://riechtjonasgeradekomisch.com)',
        'save_label' => 'Daten gespeichert!'
    )
);


$json = json_encode($array1);
file_put_contents('lib/data/content.json', $json);
echo "Done: 1\n";
echo "STOP";
exit;