<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <title>这是一个假的唯品会</title>
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="<?= \yii\helpers\Url::base() ?>/home-style/css/common.css"/>
    <link href="<?= \yii\helpers\Url::base() ?>/common/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= \yii\helpers\Url::base() ?>/common/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <script src="<?= \yii\helpers\Url::base() ?>/common/js/jquery.min.js"></script>
</head>
<body>

<div class="bar">
    <div class="bar-area">区域</div>
    <div class="area-info"><p><i class="icon-camera-retro icon-large"></i> icon-camera-retro</p></div>
    <div class="bar-login">
        <div class="bar-item">请登录</div>
        <div>/</div>
        <div class="bar-item">注册</div>
        <div>/</div>
        <div class="bar-item">我的订单</div>
        <div>/</div>
        <div class="bar-item">我的特卖分</div>
        <div>/</div>
        <div class="bar-item">会员俱乐部</div>
        <div>/</div>
        <div class="bar-item">客户服务</div>
    </div>
</div>
<?= $content ?>
</body>
</html>