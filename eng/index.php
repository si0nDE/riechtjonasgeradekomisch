<?php
include 'config.php';
		$domain;$firstname;$twittername;$twitterowner;$version;
	
	$wert=file_get_contents('./admin/result');
		if ($wert	==	'true') {
			$answer =	$true;
			$text	=	$true_text;
		} else {
			$answer = 	$false;
			$text	=	$false_text;
		}
?>

<div id="tweet"><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo $domain;?>" data-text="Yo <?php echo $firstname;?>, <?php echo $text;?> (@<?php echo $twittername;?>)" data-via="<?php echo $twitterowner;?>" data-size="large">Tweet</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></div>
<!DOCTYPE html>
<html>
	<head>
		<link href="./css/main.css" type="text/css" rel="stylesheet">
		<title>Does <?php echo $firstname;?> smell weird right now?</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	</head>
	<body>
		<div id="top">Does <?php echo $firstname;?> smell weird right now?</div>
		<div id="main"><?php echo $answer;?></div>
	</body>
	<footer>
		Made by <a target="_blank" href="https://twitter.com/simonfieberDE">@simonfieberDE</a><br />
		<a target="_blank" href="https://github.com/simonfieberDE/riechtjonasgeradekomisch">GitHub Source</a> &middot; v<?php echo $version;?>
	</footer>
</html>