<?php


/*@var \yii\web\View $this */

?>
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
    <link rel="stylesheet" href="<?= \yii\helpers\Url::base() ?>/home-style/css/common.css"/>
    <link href="<?= \yii\helpers\Url::base() ?>/common/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= \yii\helpers\Url::base() ?>/common/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <script src="<?= \yii\helpers\Url::base() ?>/common/js/jquery.min.js"></script>
</head>
<body>

<div class="bar">
    <div class="bar-area">
        <span><?= yii\helpers\Html::encode($this->params['province']) ?></span>
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
                    <td>
                        <div><a href="">安徽</a></div>
                    </td>
                    <td>
                        <div><a href="">澳门</a></div>
                    </td>
                </tr>
                <tr>
                    <td>B</td>
                    <td>
                        <div><a href="">北京</a></div>
                    </td>
                </tr>
                <tr>
                    <td>C</td>

                    <td>
                        <div><a href="">重庆</a></div>
                    </td>
                </tr>
                <tr>
                    <td>F</td>
                    <td>
                        <div><a href="">福建</a></div>
                    </td>
                </tr>
                <tr>
                    <td>G</td>
                    <td>
                        <div><a href="">广东</a></div>
                    </td>
                    <td>
                        <div><a href="">广西</a></div>
                    </td>
                    <td>
                        <div><a href="">贵州</a></div>
                    </td>
                    <td>
                        <div><a href="">甘肃</a></div>
                    </td>
                </tr>
                <tr>
                    <td>H</td>
                    <td>
                        <div><a href="">河北</a></div>
                    </td>
                    <td>
                        <div><a href="">河南</a></div>
                    </td>
                    <td>
                        <div><a href="">黑龙江</a></div>
                    </td>
                    <td>
                        <div><a href="">海南</a></div>
                    </td>
                    <td>
                        <div><a href="">湖北</a></div>
                    </td>
                    <td>
                        <div><a href="">湖南</a></div>
                    </td>
                </tr>
                <tr>
                    <td>J</td>
                    <td>
                        <div><a href="">江苏</a></div>
                    </td>
                    <td>
                        <div><a href="">吉林</a></div>
                    </td>
                    <td>
                        <div><a href="">江西</a></div>
                    </td>
                </tr>
                <tr>
                    <td>L</td>
                    <td>
                        <div><a href="">辽宁</a></div>
                    </td>
                </tr>
                <tr>
                    <td>N</td>
                    <td>
                        <div><a href="">内蒙古</a></div>
                    </td>
                    <td>
                        <div><a href="">宁夏</a></div>
                    </td>
                </tr>
                <tr>
                    <td>Q</td>
                    <td>
                        <div><a href="">青海</a></div>
                    </td>
                </tr>
                <tr>
                    <td>S</td>
                    <td>
                        <div><a href="">上海</a></div>
                    </td>
                    <td>
                        <div><a href="">山东</a></div>
                    </td>
                    <td>
                        <div><a href="">山西</a></div>
                    </td>
                    <td>
                        <div><a href="">四川</a></div>
                    </td>
                    <td>
                        <div><a href="">陕西</a></div>
                    </td>
                </tr>
                <tr>
                    <td>T</td>
                    <td>
                        <div><a href="">台湾</a></div>
                    </td>
                    <td>
                        <div><a href="">天津</a></div>
                    </td>
                </tr>
                <tr>
                    <td>X</td>
                    <td>
                        <div><a href="">西藏</a></div>
                    </td>
                    <td>
                        <div><a href="">香港</a></div>
                    </td>
                    <td>
                        <div><a href="">新疆</a></div>
                    </td>
                </tr>
                <tr>
                    <td>Y</td>
                    <td>
                        <div><a href="">云南</a></div>
                    </td>
                </tr>
                <tr>
                    <td>Z</td>
                    <td>
                        <div><a href="">浙江</a></div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="bar-login">
        <div class="bar-item login">
            <div><a href="">请登录</a></div>
            <div>/</div>
        </div>

        <div class="login-area">
            <div class="login-line"></div>
            <div class="head">
                <div>
                    <img src="<?= \yii\helpers\Url::base() ?>/home-style/images/head.png" width="40px" alt="">
                </div>
                <div>
                    <a href="">您好 ! [请登录]</a>
                </div>
            </div>
            <div class="head-content">
                <table>
                    <tr>
                        <td>
                            <div><a href="">我的收藏</a></div>
                        </td>
                        <td>
                            <div><a href="">我的订单</a></div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div><a href="">零钱</a></div>
                        </td>
                        <td>
                            <div><a href="">我的优惠券</a></div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div><a href="">我的唯品币</a></div>
                        </td>
                        <td>
                            <div><a href="">唯品金融</a></div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="bar-item">
            <div>注册</div>
            <div>/</div>
        </div>

        <div class="bar-item">
            <div>我的订单</div>
            <div>/</div>
        </div>

        <div class="bar-item">
            <div>我的特卖</div>
            <div>/</div>
        </div>

        <div class="bar-item">
            <div>会员俱乐部</div>
            <div>/</div>
        </div>

        <div class="bar-item">
            <div>客户服务</div>
            <div>/</div>
        </div>
    </div>
</div>
<?= $content ?>
</body>
</html>


<script src="<?= \yii\helpers\Url::base() ?>/home-style/js/common.js"></script>

