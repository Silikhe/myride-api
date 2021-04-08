<?php

use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">


    <section class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="margin: 0 0 80px 80px">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6" style="margin: 150px 0 0 -250px">
                                <h1>Earn. Connect. Contribute to Society</h1>
                                <p>Partner with us to drive your own livelihood and more.</p>
                                <a href="<?= Url::to(['site/signup']) ?>" class="button button-dark big">Sign up Now</a>
                            </div>
                            <div class="col-lg-6" style="margin-left: 180px">
                                <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/home/10.png" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding how-work-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h2 class="section-title text-center">How It Works</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 d-none d-lg-block">
                    <div class="icons-section">
                        <div class="single-icon">
                            <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/icon/1.png" alt="">
                        </div>
                        <div class="single-icon">
                            <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/icon/2.png" alt="">
                        </div>
                        <div class="single-icon">
                            <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/icon/3.png" alt="">
                        </div>
                        <div class="single-icon">
                            <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/icon/4.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-icon text-center m-b-10 d-block d-lg-none">
                        <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/icon/1.png" alt="">
                    </div>
                    <div class="how-work-text">
                        <h4>Book in Just 2 Tabs</h4>
                        <p>Curabitur ac quam aliquam urna vehicula semper sed vel elit. Sed et leo purus. Vivamus vitae sapien.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-icon text-center m-b-10 d-block d-lg-none">
                        <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/icon/2.png" alt="">
                    </div>
                    <div class="how-work-text">
                        <h4>Get a Driver</h4>
                        <p>Curabitur ac quam aliquam urna vehicula semper sed vel elit. Sed et leo purus. Vivamus vitae sapien.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-icon text-center m-b-10 d-block d-lg-none">
                        <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/icon/3.png" alt="">
                    </div>
                    <div class="how-work-text">
                        <h4>Track your Driver</h4>
                        <p>Curabitur ac quam aliquam urna vehicula semper sed vel elit. Sed et leo purus. Vivamus vitae sapien.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-icon text-center m-b-10 d-block d-lg-none">
                        <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/icon/4.png" alt="">
                    </div>
                    <div class="how-work-text">
                        <h4>Arrive safely</h4>
                        <p>Curabitur ac quam aliquam urna vehicula semper sed vel elit. Sed et leo purus. Vivamus vitae sapien.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us-area bg-2 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="section-title">About us</h2>
                    <div class="about-us-text">
                        <h4>Trusted Car Pool Services in All World</h4>
                        <p>Curabitur placerat cursus nisi nec pharetra. Proin quis tortor fringilla, placerat nisi nec, auctor ex. Donec commodo orci ac lectus mattis, sed interdum sem scelerisque. Vivamus at euismod magna. Aenean semper risus nec dolor bibendum cursus. Donec eu odio eu ligula sagittis fringilla. Phasellus vulputate velit eu vehicula auctor. Nam vel pellentesque libero. Duis eget efficitur dui. Mauris tempor ex non tortor aliquet, et interdum mi dapibus. Phasellus ac dui nunc. Sed quis sagittis lorem, in blandit nibh.</p>
                        <a href="#" class="button button-dark tiny">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="download-section section-padding p-b-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h2 class="section-title text-center">Download My Ride</h2>
                </div>
            </div>

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
        </div>
    </section>


    <section class="section-padding testimonial-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h2 class="section-title text-center">What passangers say</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div id="testimonial-carousel-1" class="testimonial-carousel owl-carousel">
                        <div class="single-testimonial-item text-center">
                            <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/client-1.png" alt="" class="client-img">
                            <p class="testimonial-text">Quisque venenatis sit amet libero vel laoreet. Maecenas et eros a metus vestibulum rhoncus. Aenean varius tincidunt libero at egestas. Aliquam eget interdum enim. Nulla malesuada dolor at turpis blandit sagittis. </p>
                            <h4 class="client-name">John Doe</h4>
                            <p class="theme-color">Passanger</p>
                        </div>
                        <div class="single-testimonial-item text-center">
                            <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/client-1.png" alt="" class="client-img">
                            <p class="testimonial-text">Quisque venenatis sit amet libero vel laoreet. Maecenas et eros a metus vestibulum rhoncus. Aenean varius tincidunt libero at egestas. Aliquam eget interdum enim. Nulla malesuada dolor at turpis blandit sagittis. </p>
                            <h4 class="client-name">John Doe</h4>
                            <p class="theme-color">Passanger</p>
                        </div>
                        <div class="single-testimonial-item text-center">
                            <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/client-1.png" alt="" class="client-img">
                            <p class="testimonial-text">Quisque venenatis sit amet libero vel laoreet. Maecenas et eros a metus vestibulum rhoncus. Aenean varius tincidunt libero at egestas. Aliquam eget interdum enim. Nulla malesuada dolor at turpis blandit sagittis. </p>
                            <h4 class="client-name">John Doe</h4>
                            <p class="theme-color">Passanger</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding blog-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h2 class="section-title text-center">Our Blog</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-blog-item">
                        <div class="blog-img">
                            <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/blog/1.jpg" alt="">
                        </div>
                        <div class="blog-text">
                            <h4 class="blog-heading">Pellentesque et finibus lacus, vitae
                                malesuada tortor.</h4>
                            <p class="blog-time">june 13, 2018</p>
                            <a href="#" class="button button-dark tiny">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-blog-item">
                        <div class="blog-img">
                            <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/blog/2.jpg" alt="">
                        </div>
                        <div class="blog-text">
                            <h4 class="blog-heading">Pellentesque et finibus lacus, vitae
                                malesuada tortor.</h4>
                            <p class="blog-time">june 13, 2018</p>
                            <a href="#" class="button button-dark tiny">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-0 col-sm-6 offset-sm-3">
                    <div class="single-blog-item">
                        <div class="blog-img">
                            <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/blog/3.jpg" alt="">
                        </div>
                        <div class="blog-text">
                            <h4 class="blog-heading">Pellentesque et finibus lacus, vitae
                                malesuada tortor.</h4>
                            <p class="blog-time">june 13, 2018</p>
                            <a href="#" class="button button-dark tiny">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>