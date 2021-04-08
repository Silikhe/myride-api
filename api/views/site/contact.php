<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

?>
<section class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <ol class="breadcrumb">
                    <li><a href="#">Ride with My Ride</a></li>
                </ol>
            </div>
            <div class="col-6">
                <div class="text-right">
                    <h2>Contact us</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding contact-info-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="single-contact-info text-center">
                    <img src="../assets/images/icon/contact_info.png" alt="icon">
                    <h4>Address</h4>
                    <p>Address : Muindi Mbingu Street, I & M Building, Nairobi, Kenya.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-contact-info text-center">
                    <img src="../assets/images/icon/contact_info-2.png" alt="icon">
                    <h4>Phone number</h4>
                    <p>Phone : +254 701234567</p>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-0 col-sm-6 offset-sm-3">
                <div class="single-contact-info text-center">
                    <img src="../assets/images/icon/contact_info-3.png" alt="icon">
                    <h4>E-mail</h4>
                    <p>Email : myride@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding contact-form-section p-t-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="#">
                    <h2>Send us an Email</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" name="" id="" placeholder="Name" class="form-control">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="" id="" placeholder="E-mail" class="form-control">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="" id="" placeholder="Phone" class="form-control">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="" id="" placeholder="Subject" class="form-control">
                        </div>
                        <div class="col-lg-12">
                            <textarea class="form-control" name="" id="" placeholder="Text Content"></textarea>
                        </div>
                    </div>
                    <button class="button button-dark tiny" type="submit">Send</button>
                </form>
            </div>
            <div class="col-lg-6">
                <div class="contact-us-map">
                    <div id="contact-map"></div>
                </div>
            </div>
        </div>
    </div>
</section>