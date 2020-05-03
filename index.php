<?php
require 'vendor/autoload.php';
// Production-Mode | Errors still get reported in admin mode
if (isset($_COOKIE['admin'])) {
    error_reporting(E_ALL);
} else {
    error_reporting(0);
}

// get data-core from administrator
$data = "";
if (file_exists('lib/data/content.json')) {
    $data = json_decode(file_get_contents('lib/data/content.json'));
}
if (empty($data)) {
    header('Content-Type: text/plain');
    echo "Admin: Your data-core is faulty or has not been initialized yet.\nPlease visit admin/ for data-core-initialization!";
    exit;
}

// get language
$langcode = $data->admin->lang;

if (file_exists('lib/data/lang/' . $langcode . '.json')) {
    $lang = json_decode(file_get_contents('lib/data/lang/' . $langcode . '.json'));
}

if (!isset($lang)) {
    echo "Language file <i>" . $langcode . ".json</i> not found!";
    exit;
} else {
    $data->language = $lang;
}

// set status
if ($data->core->status) {
    $data->core->answer = $data->core->true->text;
    $data->core->twitter->long = $data->core->true->long;
} else {
    $data->core->answer = $data->core->false->text;
    $data->core->twitter->long = $data->core->false->long;
}
// see if an authorized person is visiting
if (isset($_COOKIE['admin'])) {
    $data->admin->button = true;
};

// version
$data->core->version = "1.9";

// get embedded tweet
if ($data->core->tweetid != false) {
    $GuzzleClient = new GuzzleHttp\Client(['base_uri' => 'https://publish.twitter.com']);
    try {
        $response = $GuzzleClient->get("/oembed", [
            'query' => [
                'url' => 'https://twitter.com/' . $data->core->twitter->nick . '/status/' . $data->core->tweetid,
                'dnt' => 'true',
                'theme' => $data->admin->tweet_theme,
                'lang' => $data->language->language_code,
                'align' => 'center'
            ]
        ]);

        $data->core->tweet = json_decode($response->getBody());
    } catch (Exception $exception) {
        $data->core->tweet = false;
    }
}

// create tweet button reference
function getTweetButton($input)
{
    $owner = $input->core->twitter->owner;
    $firstname = $input->core->firstname;
    $nick = $input->core->twitter->nick;
    $pageUrl = $input->core->url;
    $language = $input->language->language_code;
    $text = urlencode('Yo ' . $firstname . ', ' . $input->core->twitter->long.' (@'.$nick.')');

    return sprintf(
        '<a class="twitter-share-button"
                    href="https://twitter.com/intent/tweet?text=%s&via=%s&url=%s"
                    data-size="large"
                    data-lang="%s">
                    Tweet</a>',$text,$owner,$pageUrl,$language
    );
}

$data->core->tweet_button = getTweetButton($data);

// call the power of mustaches
Mustache_Autoloader::register();
$m = new Mustache_Engine(array(
    'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/lib/views', array('extension' => '.html')),
    'partials_loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/lib/views/subviews', array('extension' => '.html'))
));
echo $m->render($data->admin->template, $data);
