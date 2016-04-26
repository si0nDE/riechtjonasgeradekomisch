<?php
// Management Interface
require_once '../lib/Mustache/Autoloader.php';
Mustache_Autoloader::register();
$data = json_decode(file_get_contents('../lib/data/content.json'));
$m = new Mustache_Engine();
echo $m->render('',$data);
//exit;
?>
<!DOCTYPE HTML>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{admin.title}}</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
<div class="container">
    <form class="form-admin">
        <h2 class="form-admin-heading">{{core.question}}</h2><br>
        <div class="form-group">
            <label for="core.question">{{admin.question_lable}}</label>
            <input id="core.question" class="form-control" type="text" value="{{core.question}}" pattern="[A-Za-zÄäÖöÜüß+*~#'?!]" required>
        </div>
        <div class="form-group">
            <label for="core.firstname">{{admin.firstname_lable}}</label>
            <input id="core.firstname" class="form-control" type="text" value="{{core.firstname}}" required>
        </div>
        <div class="form-group">
            <label for="core.twitter.nick">{{admin.twitter_lable}}</label>
            <input id="core.twitter.nick" class="form-control" type="text" value="{{core.twitter.nick}}" required>
        </div>
        <div class="form-group">
            <label for="core.twitter.owner">{{admin.twitter_owner_lable}}</label>
            <input id="core.twitter.owner" class="form-control" type="text" value="{{core.twitter.owner}}" required>
        </div>
        <div class="form-group">
            <label for="core.true.text">{{admin.true_text_lable}}</label>
            <input id="core.true.text" class="form-control" type="text" value="{{core.true.text}}" pattern="[A-Za-zÄäÖöÜüß+*~#']{6}" required>
        </div>
        <input id=".twitter.owner" class="form-control" type="text" value="{{core.twitter.owner}}" required>

        <button class="btn btn-lg btn-success btn-block" type="submit"><span class="glyphicon glyphicon-ok"></span>&nbsp;{{admin.btn_lable}}</button>
    </form>
</div>
<script type="application/javascript" src="js/jquery.js"></script>
<script type="application/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>