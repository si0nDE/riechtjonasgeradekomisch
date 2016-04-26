<?php
session_start();
$array = array(
    'core' => array(
        'status' => true,
        'question' => $_POST['core.question'],
        'firstname' => $_POST['core.firstname'],
        'twitter' => array(
            'owner' => $_POST['core.twitter.owner'],
            'nick' => $_POST['core.twitter.nick']
        ),
        'true' => array(
            'text' => $_POST['core.true.text'],
            'long' => $_POST['core.true.long']
        ),
        'false' => array(
            'text' => $_POST['core.false.text'],
            'long' => $_POST['core.false.long']
        ),
        'url' => $_POST['core.url'],),
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
        'save_label' => 'Daten gespeichert'
    )
);


$json = json_encode($array);
file_put_contents('../lib/data/content.json', $json);
$_SESSION['success'] = true;
//header('Location: index.php');
print_r($_POST);