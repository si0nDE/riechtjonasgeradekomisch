<?php
// Management Interface
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{title}}</title>
        <link rel="stylesheet/less" type="text/less" href="css/less/bootstrap.less">
        <link rel="stylesheet" type="text/css" href="css/admin.css">
        <script>less = { env: 'development'};</script>
        <script src="../js/less.js"></script>
        <script>//less.watch();</script>
    </head>
        <body>
            <div class="container">
                <form class="form-admin">
                    <h2 class="form-admin-heading">{{question}}</h2>
                    <label for="inputQuestion" class="sr-only">{{question_lable}}</label>
                    <input name="inputQuestion" class="form-control" type="text" value="{{question}}" required autofocus>
                    <button class="btn btn-lg btn-success btn-block" type="submit"><span class="glyphicon glyphicon-ok"></span> {{btn_lable}}</button>
                </form>
            </div>
        </body>
</html>
