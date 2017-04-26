<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => '登录', 'url' => ['/site/login']];
        $menuItems[] = ['label' => '注册', 'url' => ['/site/register']];
    } else {
        $menuItems[] = [
            'label' => '<i class="fa fa-sign-out"></i>退出(' . Yii::$app->user->identity->username . ')',
            'url' => ['/site/logout'],
            'linkOptions' => ['data-method' => 'post']
        ];

    }
    //    echo Nav::widget([
    //        'options' => ['class' => 'navbar-nav navbar-right'],
    //
    //        'items' => [
    //            ['label' => '首页', 'url' => ['/site/index']],
    //            ['label' => '注册', 'url' => ['/site/register']],
    //            Yii::$app->user->isGuest ? (
    //            ['label' => '登录', 'url' => ['/site/login']]
    //            ) : (
    //                '<li>'
    //                . Html::beginForm(['/site/logout'], 'post')
    //                . Html::submitButton(
    //                    'Logout (' . Yii::$app->user->identity->username . ')',
    //                    ['class' => 'btn btn-link logout']
    //                )
    //                . Html::endForm()
    //                . '</li>'
    //            )
    //        ],
    //    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
