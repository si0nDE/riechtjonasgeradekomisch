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
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{admin.title}}</title>
    <link rel="stylesheet/less" type="text/less" href="css/less/bootstrap.less">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <script>less = { env: 'development'};</script>
    <script src="../js/less.js"></script>
    <script>//less.watch();</script>
</head>
<body>
<div class="container">
    <form class="form-admin">
        <h2 class="form-admin-heading">{{question}}</h2><br>
        <div class="form-group">
            <label for="question">{{admin.question_lable}}</label>
            <input name="question" class="form-control" type="text" value="{{question}}" required>
        </div>
        <div class="form-group">
            <label for="firstname">{{admin.firstname_lable}}</label>
            <input name="firstname" class="form-control" type="text" value="{{firstname}}" required>
        </div>
        <button class="btn btn-lg btn-success btn-block" type="submit"><span class="glyphicon glyphicon-ok"></span>&nbsp;{{admin.btn_lable}}</button>
    </form>
</div>
</body>
</html>