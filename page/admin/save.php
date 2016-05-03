<?php
function admin_template()
{
    if (!empty($_POST['admin_template'])) {
        return $_POST['admin_template'];
    } else {
        return 'default';
    }
}

if (!empty($_POST)) {
    if ($_POST['core_status'] === 'true') {
        $status = true;
    } else {
        $status = false;
    }
    $array = array(
        'core' => array(
            'status' => $status,
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
            'tweetid' => $_POST['core_tweetid'] == "" ? false : $_POST['core_tweetid'],
            'false' => array(
                'text' => $_POST['core_false_text'],
                'long' => $_POST['core_false_long']
            ),
            'url' => $_POST['core_url'],
            'version' => '1.6.3'),
        'admin' => array(
            'title' => 'admin@riechtjonasgeradekomisch.com',
            'tweet_theme' => $_POST['admin_tweet_theme'],
            'template' => admin_template(),
            'lang' => $_POST['admin_language']
        )
    );
    $json = json_encode($array);
    $save = file_put_contents('../lib/data/content.json', $json);
    if ($save === false) {
        session_start();
        $error = error_get_last();
        $_SESSION['error'] = true;
        $_SESSION['error_msg'] = "Code <b>" . $error['type'] . "</b>: Error in line <b>" . $error['line'] . "</b>!<br>Message: " . $error['message'];
        header('Location: ./');
        exit(1);
    } else {
        session_start();
        $_SESSION['success'] = true;
        header('Location: ./');
        exit;
    }
} else {
    session_start();
    $error = error_get_last();
    $_SESSION['error'] = true;
    $_SESSION['error_msg'] = "Code <b>" . $error['type'] . "</b>: Error in line <b>" . $error['line'] . "</b>!<br>Message: " . $error['message'];
    header('Location: ./');
    exit(1);
}