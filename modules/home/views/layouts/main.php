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
    <link rel="stylesheet" href="<?= \yii\helpers\Url::base() ?>/home-style/css/common.css"/>
    <link href="<?= \yii\helpers\Url::base() ?>/common/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= \yii\helpers\Url::base() ?>/common/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <script src="<?= \yii\helpers\Url::base() ?>/common/js/jquery.min.js"></script>
</head>
<body>

<div class="bar">
    <div class="bar-area">区域
        <div><i class="icon-sort-down icon-large"></i></div>
    </div>
    <div class="area-info">
        <div class="line"></div>
        <div>
            <div class="area-tip"><h5><b>请选择所在的收货地区</b></h5></div>
        </div>
        <div class="area-content">
            <table>
                <tr>
                    <td>A</td>
                    <td><a href="">安徽</a></td>
                    <td>澳门</td>
                </tr>
                <tr>
                    <td>B</td>
                    <td>北京</td>
                </tr>
                <tr>
                    <td>C</td>
                    <td>重庆</td>
                </tr>
                <tr>
                    <td>F</td>
                    <td>福建</td>
                </tr>
                <tr>
                    <td>G</td>
                    <td>广东</td>
                    <td>广西</td>
                    <td>贵州</td>
                    <td>甘肃</td>
                </tr>
                <tr>
                    <td>H</td>
                    <td><span>河北</span></td>
                    <td><span>河南</span></td>
                    <td><span>黑龙江</span></td>
                    <td><span>海南</span></td>
                    <td><span>湖北</span></td>
                    <td><span>湖南</span></td>
                </tr>
                <tr>
                    <td>J</td>
                    <td>江苏</td>
                    <td>吉林</td>
                    <td>江西</td>
                </tr>
                <tr>
                    <td>L</td>
                    <td>辽宁</td>
                </tr>
                <tr>
                    <td>N</td>
                    <td>内蒙古</td>
                    <td>宁夏</td>
                </tr>
                <tr>
                    <td>Q</td>
                    <td>青海</td>
                </tr>
                <tr>
                    <td>S</td>
                    <td>上海</td>
                    <td>山东</td>
                    <td>山西</td>
                    <td>四川</td>
                    <td>陕西</td>
                </tr>
                <tr>
                    <td>T</td>
                    <td>台湾</td>
                    <td>天津</td>
                </tr>
                <tr>
                    <td>X</td>
                    <td>西藏</td>
                    <td>香港</td>
                    <td>新疆</td>
                </tr>
                <tr>
                    <td>Y</td>
                    <td>云南</td>
                </tr>
                <tr>
                    <td>Z</td>
                    <td>浙江</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="bar-login">
        <div class="bar-item">请登录</div>
        <div>/</div>
        <div class="bar-item">注册</div>
        <div>/</div>
        <div class="bar-item">我的订单</div>
        <div>/</div>
        <div class="bar-item">我的特卖</div>
        <div>/</div>
        <div class="bar-item">会员俱乐部</div>
        <div>/</div>
        <div class="bar-item">客户服务</div>
    </div>
</div>
<?= $content ?>
</body>
</html>
<script src="<?= \yii\helpers\Url::base() ?>/home-style/js/common.js"></script>

