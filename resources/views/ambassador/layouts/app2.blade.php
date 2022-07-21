<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') </title>

    <!-- Icon -->
    <link rel="icon" type="image/x-icon" href="{{url('ambassador_assets/images/favicon.png')}}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{url('ambassador_assets/css/bootstrap.min.css')}}">
    <!-- Custom -->
    <link rel="stylesheet" href="{{url('ambassador_assets/css/profile.css')}}?v={{rand(0,10)}}">
    <link rel="stylesheet" href="{{url('ambassador_assets/css/app.css')}}">
    <!-- Icons -->
    <link rel="stylesheet" href="{{url('ambassador_assets/lib/icons/themify-icons.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/all.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{url('ambassador_assets/lib/tags/tags.css')}}">
    <link rel="stylesheet" href="{{url('ambassador_assets/lib/tags/tagsify.css')}}">
</head>
<body>
<div class="page-wrapper">
    <div class="page-wrapper-inner">
        <!-- <div class="container"> -->
        @include('ambassador.home.layouts.alert')
        @include('ambassador.layouts.top-nav')
        <!-- Site Navigation -->
        @include('ambassador.layouts.navigation')

    <!-- Profile Information --> 
        <div class="profile-box">
            <div class="profile-box-inner">
                <div class="profile-box-main">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- </div> -->
    </div>
</div>
<footer class="footer">
    <div class="footer-inner">
        © Connect Social, All rights reserved
    </div>
</footer>
@include('ambassador.layouts.modals')
<script src="{{url('ambassador_assets/js/jquery.js')}}"></script>
<script src="{{url('ambassador_assets/js/bootstrap.min.js')}}"></script>
<script src="{{url('ambassador_assets/js/profile.js')}}"></script>
<script src="{{url('ambassador_assets/js/app.js')}}"></script>
<script src="{{url('ambassador_assets/js/helpers.js')}}"></script>

@include('ambassador.scripts.universal')
@stack('scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{url('ambassador_assets/lib/tags/tags.js')}}"></script>
<script src="{{url('ambassador_assets/lib/tags/tags-prety.js')}}"></script>
</body>
</html> 