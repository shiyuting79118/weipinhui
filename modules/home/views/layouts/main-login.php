<!DOCTYPE html>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <title>404</title>
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="<?= \yii\helpers\Url::base() ?>/common/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?= \yii\helpers\Url::base() ?>/common/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <script src="<?= \yii\helpers\Url::base() ?>/common/js/jquery.min.js"></script>

    <script src="<?= \yii\helpers\Url::base() ?>/common/js/vue.js"></script>

    <link href="<?= \yii\helpers\Url::base() ?>/common/art-dialog/css/ui-dialog.css" rel="stylesheet"/>
    <script src="<?= \yii\helpers\Url::base() ?>/common/art-dialog/dist/dialog-min.js"></script>

    <link href="<?= \yii\helpers\Url::base() ?>/common/pfinal/css/pfinal.css" rel="stylesheet"/>
    <script src="<?= \yii\helpers\Url::base() ?>/common/pfinal/pfinal.js"></script>

    <link rel="stylesheet" href="<?= \yii\helpers\Url::base() ?>/home-style/css/home/login.css"/>

</head>
<body>
<div class="bar">
    <a href="<?= yii\helpers\Url::toRoute('default/index') ?>">
        <div><img src="<?= \yii\helpers\Url::base() ?>/home-style/images/v-log.png" alt="唯品会"></div>
        <div><img src="<?= \yii\helpers\Url::base() ?>/home-style/images/v-2.png" alt="唯品会"></div>
        <div><img src="<?= \yii\helpers\Url::base() ?>/home-style/images/v-3.png" alt="唯品会"></div>
    </a>
</div>

<div style="clear: both"></div>
<div class="login-content">
    <div><img src="<?= yii\helpers\Url::base() ?>/home-style/images/v-login-img.png" alt=""></div>
    <div>
        <?= $content ?>
    </div>
</div>
<div style="clear: both"></div>
<div class="footer">
    Copyright 2008-2017 vip.com，All Rights Reserved ICP证：粤 B2-20080329
</div>
</body>
</html>