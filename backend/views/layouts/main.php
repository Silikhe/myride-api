<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-primary mb-3">
        <div class="flex-row d-flex">
            <button type="button" class="navbar-toggler mr-2 " data-toggle="offcanvas" title="Toggle responsive left sidebar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#" style="color:black" title="Free Bootstrap 4 Admin Template">MY RIDE</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="collapsingNavbar">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">Home</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Drivers <span class="sr-only">Drivers</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Rides <span class="sr-only">Rides</span></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile <span class="sr-only">Profile</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" data-target="#myModal" data-toggle="modal">Log out</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
    </div>

    <!-- <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer> -->

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>