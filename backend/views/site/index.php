<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<div class="col main pt-5 mt-3">
    <h1 class="display-4 d-none d-sm-block">
        Admin Dashboard
    </h1>


    <div class="row mb-3">
        <div class="col-xl-3 col-sm-6 py-2">
            <div class="card bg-success text-white h-100">
                <div class="card-body bg-success">
                    <div class="rotate">
                        <i class="fa fa-user fa-4x"></i>
                    </div>
                    <h6 class="text-uppercase">Drivers</h6>
                    <h1 class="display-4">134</h1>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 py-2">
            <div class="card text-white bg-danger h-100">
                <div class="card-body bg-danger">
                    <div class="rotate">
                        <i class="fa fa-list fa-4x"></i>
                    </div>
                    <h6 class="text-uppercase">Trips</h6>
                    <h1 class="display-4">87</h1>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 py-2">
            <div class="card text-white bg-info h-100">
                <div class="card-body bg-info">
                    <div class="rotate">
                        <i class="fa fa-twitter fa-4x"></i>
                    </div>
                    <h6 class="text-uppercase">Travelers</h6>
                    <h1 class="display-4">125</h1>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 py-2">
            <div class="card text-white bg-warning h-100">
                <div class="card-body">
                    <div class="rotate">
                        <i class="fa fa-share fa-4x"></i>
                    </div>
                    <h6 class="text-uppercase">Upcoming trips</h6>
                    <h1 class="display-4">36</h1>
                </div>
            </div>
        </div>
    </div>
    <!--/row-->
    <br>
    <hr>
    <br>
    <h1>Top Drivers</h1>
    <div class="row placeholders mb-3">
        <div class="col-6 col-sm-3 placeholder text-center">
            <img src="//placehold.it/200/dddddd/fff?text=1" class="mx-auto img-fluid rounded-circle" alt="Generic placeholder thumbnail">
            <h4>Miguna Miguna</h4>
            <span class="text-muted">KDA 123M</span>
        </div>
        <div class="col-6 col-sm-3 placeholder text-center">
            <img src="//placehold.it/200/e4e4e4/fff?text=2" class="mx-auto img-fluid rounded-circle" alt="Generic placeholder thumbnail">
            <h4>Jack Rooster</h4>
            <span class="text-muted">KAV 123M</span>
        </div>
        <div class="col-6 col-sm-3 placeholder text-center">
            <img src="//placehold.it/200/d6d6d6/fff?text=3" class="mx-auto img-fluid rounded-circle" alt="Generic placeholder thumbnail">
            <h4>Mr. Speaker</h4>
            <span class="text-muted">KBA 123M</span>
        </div>
        <div class="col-6 col-sm-3 placeholder text-center">
            <img src="//placehold.it/200/e0e0e0/fff?text=4" class="center-block img-fluid rounded-circle" alt="Generic placeholder thumbnail">
            <h4>Chairman</h4>
            <span class="text-muted">KCC 123M</span>
        </div>
    </div>

    <br><br><br>
    <h1>Recent Rides</h1>
    <br>

    <div class="col-lg-12 col-md-8">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-inverse">
                    <tr>
                        <th>Ride Id</th>
                        <th>Destination</th>
                        <th>Start Point</th>
                        <th>Driver</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>100</td>
                        <td>Nakuru</td>
                        <td>Nairobi</td>
                        <td>Miguna Miguna</td>
                        <td>12-03-2021</td>
                    </tr>
                    <tr>
                        <td>100</td>
                        <td>Nakuru</td>
                        <td>Nairobi</td>
                        <td>Miguna Miguna</td>
                        <td>12-03-2021</td>
                    </tr>
                    <tr>
                        <td>100</td>
                        <td>Nakuru</td>
                        <td>Nairobi</td>
                        <td>Miguna Miguna</td>
                        <td>12-03-2021</td>
                    </tr>
                    <tr>
                        <td>100</td>
                        <td>Nakuru</td>
                        <td>Nairobi</td>
                        <td>Miguna Miguna</td>
                        <td>12-03-2021</td>
                    </tr>
                    <tr>
                        <td>100</td>
                        <td>Nakuru</td>
                        <td>Nairobi</td>
                        <td>Miguna Miguna</td>
                        <td>12-03-2021</td>
                    </tr>
                    <tr>
                        <td>100</td>
                        <td>Nakuru</td>
                        <td>Nairobi</td>
                        <td>Miguna Miguna</td>
                        <td>12-03-2021</td>
                    </tr>
                    <tr>
                        <td>100</td>
                        <td>Nakuru</td>
                        <td>Nairobi</td>
                        <td>Miguna Miguna</td>
                        <td>12-03-2021</td>
                    </tr>
                    <tr>
                        <td>100</td>
                        <td>Nakuru</td>
                        <td>Nairobi</td>
                        <td>Miguna Miguna</td>
                        <td>12-03-2021</td>
                    </tr>
                    <tr>
                        <td>100</td>
                        <td>Nakuru</td>
                        <td>Nairobi</td>
                        <td>Miguna Miguna</td>
                        <td>12-03-2021</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<br><br><br><br>