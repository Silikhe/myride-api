<?php

use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<div class="row">
    <div class="col-lg-5">
        <div class="download-qrcode">
            <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/qrapp1.png" alt="">
        </div>
    </div>

    <div class="col-lg-7">
        <div class="download-text">
            <h2>Download the My Ride mobile application</h2>
            <p>Nunc volutpat tincidunt est a scelerisque. Aliquam erat volutpat. Donec varius ex in justo pharetra, nec mollis erat porta. Donec sit amet facilisis neque. In hac habitasse platea dictumst.</p>
        </div>
        <div class="download-buttons">
            <a href="#"><img src="<?= Yii::$app->request->baseUrl ?>/themes/images/download-1.png" alt=""></a>
            <a href="#"><img src="<?= Yii::$app->request->baseUrl ?>/themes/images/download-2.png" alt=""></a>
        </div>
    </div>
</div>