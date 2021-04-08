<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\web\UrlManager;

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

    <div class="wrap">
        <section class="header__upper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header__upper--left">
                            <div class="logo">
                                <a href="<?= Url::to(['site/index']) ?>"><img src="<?= Yii::$app->request->baseUrl ?>/themes/images/home/logo.png" alt=""></a>
                            </div>
                            <div class="search-bar">
                                <form action="#" class="form">
                                    <span class="icon icon-left" style="margin-top:-10px"><i class="fas fa-map-marker-alt"></i></span>
                                    <input class="form-control" type="search" name="" placeholder="Tell us your location" id="">
                                    <button class="button button-dark" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>

                                <span class="mobile-search-icon d-block d-md-none"><i class="fas fa-search"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__upper--right">
                            <nav class="navigation">
                                <ul>
                                    <li><a href="<?= Url::to(['site/download']) ?>">Ride</a></li>
                                    <li><a href="<?= Url::to(['site/download']) ?>">Drive</a></li>
                                    <li><a href="<?= Url::to(['site/contact']) ?>">Help</a></li>
                                    <li><a href="<?= Url::to(['site/login']) ?>">Sign in</a></li>
                                </ul>
                            </nav>
                            <a href="<?= Url::to(['site/download']) ?>" class="button button-dark big">Get A Ride</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="header__lower">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="<?= Url::to(['site/index']) ?>"><i class="fas fa-home"></i>Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= Url::to(['site/about']) ?>"><i class="fas fa-exclamation-circle"></i>About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= Url::to(['site/contact']) ?>"><i class="fas fa-map-marker-alt"></i>Contacts</a>
                                    </li>
                                </ul>
                                <div class="my-2 my-lg-0">
                                    <a href="<?= Url::to(['site/download']) ?>" class="button button-light big">Become a Driver</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <div>
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>

    <?= $this->render('footer.php') ?>

    <?php $this->endBody() ?>


    <!-- jQuery -->
    <script src="theme/js/common.min.js"></script>
    <script src="theme/js/owl.carousel.min.js"></script>
    <script src="theme/js/waypoints.min.js"></script>
    <script src="theme/js/jquery.counterup.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB16sGmIekuGIvYOfNoW9T44377IU2d2Es&amp;sensor=true"></script>
    <script src="theme/js/gmap3.min.js"></script>
    <!-- custom scripts -->
    <script src="theme/js/scripts.js"></script>


</body>

</html>
<?php $this->endPage() ?>