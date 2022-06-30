<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <!-- Icon -->
    <link rel="icon" type="image/x-icon" href="{{url('ambassador_assets/images/favicon.png')}}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{url('ambassador_assets/css/bootstrap.min.css')}}">
    <!-- Custom -->
    <link rel="stylesheet" href="{{url('ambassador_assets/css/profile.css')}}">
    <!-- Icons -->
    <link rel="stylesheet" href="{{url('ambassador_assets/lib/icons/themify-icons.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{url('ambassador_assets/lib/tags/tags.css')}}">
    <link rel="stylesheet" href="{{url('ambassador_assets/lib/tags/tagsify.css')}}">
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
                    @include('ambassador.layouts.profile-navigation')
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- </div> -->
    </div>
</div>
@include('ambassador.layouts.modals')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="{{url('ambassador_assets/js/bootstrap.min.js')}}"></script>
<script src="{{url('ambassador_assets/js/profile.js')}}"></script>
@stack('scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{url('ambassador_assets/lib/tags/tags.js')}}"></script>
<script src="{{url('ambassador_assets/lib/tags/tags-prety.js')}}"></script>
@include('ambassador.scripts.universal')
<script>
    setInterval(function(){
                    offset = $(".profile-navigation").offset();
                    var w = $(window);
                    if(offset.top-w.scrollTop() == 0) {
                        $(".to-show-sticky").show();
                        $('.profile-navigation-ul-outer').removeClass("full-show")
                        $('.profile-navigation-nav').addClass('aligned');
                    } else {
                        $(".to-show-sticky").hide();
                        $('.profile-navigation-nav').removeClass('aligned');
                        $('.profile-navigation-ul-outer').addClass("full-show");
                    }
                }, 100);

    $(".top-open-menu").click(function() {
        var data_menu_class = $(this).attr("data-target");
        $(data_menu_class).toggle();
    });
</script>
</body>
</html>