<?php
include 'config.php';

	$value=file_get_contents('./admin/value');
		if ($value	==	'true') {
			$answer =	$true;
			$text	=	$true_text;
		} else {
			$answer = 	$false;
			$text	=	$false_text;
		}
?>
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