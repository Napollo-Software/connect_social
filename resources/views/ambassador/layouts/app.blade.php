<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - ConnectSocial</title>
    <!-- Icon -->
    <link rel="icon" type="image/x-icon" href="{{url('ambassador_assets/images/favicon.png')}}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{url('ambassador_assets/css/bootstrap.min.css')}}">
    <!-- Custom -->
    <link rel="stylesheet" href="{{url('ambassador_assets/css/profile.css')}}">
    <!-- Icons -->
    <link rel="stylesheet" href="{{url('ambassador_assets/lib/icons/themify-icons.css')}}">
</head>
<body>
<div class="page-wrapper">
    <div class="page-wrapper-inner">
        <!-- <div class="container"> -->
        @include('ambassador.layouts.top-nav')
        <!-- Site Navigation -->
        @include('ambassador.layouts.navigation')

    <!-- Profile Information -->
        <div class="profile-box">
            <div class="profile-box-inner">
                <div class="profile-box-main">
                    @include('ambassador.layouts.cover')
                    <!-- Profile Navigation -->
                    <div class="profile-navigation">
                        <div class="container">
                            <div class="profile-navigation-inner">
                                <div class="profile-navigation-nav">
                                    <ul class="profile-navigation-ul">
                                        <li class="profile-navigation-li"><a href="javascript:void(0)" class="profile-navigation-link">Home/Social</a></li>
                                        <li class="profile-navigation-li line-devider"></li>
                                        <li class="profile-navigation-li"><a href="javascript:void(0)" class="profile-navigation-link">Social Information</a></li>
                                        <li class="profile-navigation-li line-devider"></li>
                                        <li class="profile-navigation-li"><a href="javascript:void(0)" class="profile-navigation-link">Gallery</a></li>
                                        <li class="profile-navigation-li line-devider"></li>
                                        <li class="profile-navigation-li"><a href="javascript:void(0)" class="profile-navigation-link">Friends(28)</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content Cards -->
                    @yield('content')

                </div>
            </div>
        </div>
        <!-- </div> -->
    </div>
</div>
<!-- Jquery -->
<script src="{{url('ambassador_assets/js/jquery.js')}}"></script>
<!-- Bootstrap -->
<script src="{{url('ambassador_assets/js/bootstrap.min.js')}}"></script>
<!-- Script -->
<script src="{{url('ambassador_assets/js/profile.js')}}"></script>
</body>
</html>