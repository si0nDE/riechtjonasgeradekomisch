<?php
if (!empty($_POST)){
    $array = array(
        'core' => array(
            'status' => true,
            'question' => $_POST['core_question'],
            'firstname' => $_POST['core_firstname'],
            'twitter' => array(
                'owner' => $_POST['core_twitter_owner'],
                'nick' => $_POST['core_twitter_nick']
            ),
            'true' => array(
                'text' => $_POST['core_true_text'],
                'long' => $_POST['core_true_long']
            ),
            'false' => array(
                'text' => $_POST['core_false_text'],
                'long' => $_POST['core_false_long']
            ),
            'url' => $_POST['core_url'],
            'version' => '1.5.1'),
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
    $save = file_put_contents('../lib/data/content.json', $json);
    if ($save === false) {
        session_start();
        $error = error_get_last();
        $_SESSION['error'];
        $_SESSION['error_msg'] = "Code <b>".$error['type']."</b>: Error in line <b>".$error['line']."</b>!<br>Message: ".$error['message'];
        header('Location: index.php');
        exit(1);
    }else{
        session_start();
        $_SESSION['success'] = true;
        header('Location: index.php');
        exit;
    }
}else{
    session_start();
    $error = error_get_last();
    $_SESSION['error'];
    $_SESSION['error_msg'] = "Code <b>".$error['type']."</b>: Error in line <b>".$error['line']."</b>!<br>Message: ".$error['message'];
    header('Location: index.php');
    exit(1);
}