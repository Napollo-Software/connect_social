<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <title>Profile - Connect Social</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{url('favicon.png')}}">
    <link rel="stylesheet" href="{{url('css/normalize.css')}}">
    <link rel="stylesheet" href="{{url('css/main.css')}}">
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{url('css/all.css')}}">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light cs-nav-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  nav justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Consumers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Merchants</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Our World</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Treasure Island</a>
                </li>
            </ul>
        </div>
        <div class="login-btn">
            <a class="nav-link" href="{{route('login')}}">Login</a>
        </div>
    </nav>
</header>

<section class="main-wrapper">
    <div class="container mb-3 mt-3">
        <div class="row">
            <div class="col-lg-6">
                <div class="user-details">
                    <img src="{{url('img/avatar.png')}}">
                    <h3>{{$ref->fullName()}}</h3>
                    <p>Ambassador</p>
                </div>
            </div>
            <div class="col-lg-6">
                <h4 class="heading-sty">Get Started & Join My Network!</h4>
                <div class="btngroup">
                    <a href="{{url('sign-up?by='.$ref->id.'&role=3')}}" class="bigblack-btn">Join as Merchant</a>
                    <a href="{{url('sign-up?by='.$ref->id.'&role=2')}}" class="bigblack-btn-active">Join as Ambassador</a>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="profile-details">
                    <h3>About Ambassador</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                    <p>Id libero sit orci sed vel rutrum aliquam. Lorem ipsum dolor sit amet. </p>
                </div>
                <div class="social-details">
                    <h3>Social Info</h3>
                    <table class="social-info-table">
                        <tr>
                            <th>City</th>
                            <td>NYC</td>
                        </tr>
                        <tr>
                            <th>Current State</th>
                            <td>NY</td>
                        </tr>
                        <tr>
                            <th>Relationship Status</th>
                            <td>Single</td>
                        </tr>
                        <tr>
                            <th>Date of Joining</th>
                            <td>28 Jan 2020</td>
                        </tr>
                        <tr>
                            <th>Workplace</th>
                            <td>Lorem ipsum</td>
                        </tr>
                        <tr>
                            <th>Highschool</th>
                            <td>Lorem ipsum</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="company-bio">
                    <h3>About Connect Social</h3>
                    <a class="play-btn" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa-solid fa-circle-play"></i></a><img src="img/vid.jpg">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                        <p>Id libero sit orci sed vel rutrum aliquam. Lorem ipsum dolor sit amet. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <p>Video URL</p>
            </div>
        </div>
    </div>
</div>


<script src="{{url('js/vendor/modernizr-3.11.2.min.js')}}"></script>
<script src="{{url('js/plugins.js')}}"></script>
<script src="{{url('js/main.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="{{url('js/fontawesome.min.js')}}"></script>
<script src="{{url('js/all.js')}}"></script>
</body>
</html>
