<?php
// get Mustache-Engine ready
require_once 'lib/Mustache/Autoloader.php';
Mustache_Autoloader::register();
$m = new Mustache_Engine();
// get data-core from administrator
$data = file_get_contents('lib/data/content.json');
$data = json_decode($data);
// get the url for tweet-button
function curPageURL() {
	$pageURL = 'http';
	if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
	return $pageURL;
}

?>
<!DOCTYPE html>
<html>
	<head>
		<link href="./css/main.css" type="text/css" rel="stylesheet">
		<title><?php echo $m->render($data->question,$data) ?></title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	</head>
	<body>
		<div id="tweet"><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo $domain;?>" data-text="<?php if ($data->status){echo $m->render('Yo {{firstname}}, {{true_long}} (@{{twitter}})', $data);}else{echo $m->render('Yo {{firstname}}, {{false_long}} (@{{twitter}})', $data);} ?>" data-via="<?php echo $m->render('{{twitter_owner}}', $data)?>" data-size="large">Tweet</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></div>
		<div id="top"><?php echo $m->render($data->question,$data) ?></div>
		<div id="main"><?php if ($data->status){echo $m->render('{{true_text}}', $data);}else{echo $m->render('{{false_text}}', $data);} ?></div>
	</body>
	<footer>
		Made by <a target="_blank" href="https://twitter.com/simonfieberDE">@simonfieberDE</a><br />
		<a target="_blank" href="https://github.com/simonfieberDE/riechtjonasgeradekomisch">GitHub Source</a> &middot; v<?php echo $version;?>
	</footer>
</html>