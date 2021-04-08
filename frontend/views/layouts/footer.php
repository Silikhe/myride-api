<?php

use yii\helpers\Url;
?>

<footer class="footer-section theme-1">

    <section class="footer-nav-section section-padding theme-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-brand">
                        <a href="index.html"><img src="../assets/images/logo.png" alt="Logo"></a>
                    </div>
                    <div class="footer-text">
                        <p>Nulla justo neque, tincidunt id bibendum a, rhoncus et eros. Vestibulum commodo diam ut risus pulvinar consequat vitae a dui. Vivamus sed molestie diam. Maecenas vitae enim lacus.</p>
                    </div>
                    <div class="helpline">
                        <h4>Toll Free <span>Helpline</span></h4>
                        <p>(+254) 123 4567 890</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h4>Useful links</h4>
                    <nav class="footer-navigation">
                        <ul>
                            <li><a href="<?= Url::to(['site/index']) ?>">Home</a></li>
                            <li><a href="<?= Url::to(['site/about']) ?>">About</a></li>
                            <li><a href="<?= Url::to(['site/login']) ?>">Login</a></li>
                            <li><a href="<?= Url::to(['site/signup']) ?>">Register</a></li>
                            <li><a href="<?= Url::to(['site/index']) ?>">Blog</a></li>
                        </ul>
                        <ul>
                            <li><a href="<?= Url::to(['site/download']) ?>">Ride</a></li>
                            <li><a href="<?= Url::to(['site/download']) ?>">Drive</a></li>
                            <li><a href="<?= Url::to(['site/download']) ?>">Become a Driver</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="<?= Url::to(['site/about']) ?>">Help</a></li>
                            <li><a href="#">Privecy policy</a></li>
                            <li><a href="#">Cookies policy</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h4>Head Office</h4>
                    <address class="company-address">
                        <p class="m-b-20">I & M Building, Near GPO. </p>
                        <p class="m-b-8">Phone Number : (+254) 123 4567 890</p>
                        <p class="m-b-8">Email Address : myride@gmail.com</p>

                    </address>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h4>Download Mobile App</h4>
                    <div class="app-download-box">
                        <a href="#"><img src="<?= Yii::$app->request->baseUrl ?>/themes/images/icon/google-play.jpg" alt="Google play"></a>
                        <a href="#"><img src="<?= Yii::$app->request->baseUrl ?>/themes/images/icon/apple-store.jpg" alt="Apple store"></a>
                    </div>
                    <div class="cta-button">
                        <a href="<?= Url::to(['site/download']) ?>" class="button button-dark">Become a Driver</a>
                        <a href="<?= Url::to(['site/download']) ?>" class="button button-dark">Get A Ride</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="copyright-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p>&copy; Copyright 2021 by My Ride. All Right Reserved.</p>
                </div>
                <div class="col-lg-6">
                    <ul class="social-nav">
                        <li><a href="https://github.com/Silikhe/myride" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://github.com/Silikhe/myride" class="twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://github.com/Silikhe/myride" class="instagram"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://github.com/Silikhe/myride" class="google-p"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="https://github.com/Silikhe/myride" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="https://github.com/Silikhe/myride" class="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



</footer>