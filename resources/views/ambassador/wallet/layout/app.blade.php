<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wallet - Connect Social</title>
    <!-- Icon -->
    <link rel="icon" type="image/x-icon" href="{{url('ambassador_assets/images/favicon.png')}}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{url('ambassador_assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('kyc_assets/css/kyc.css')}}">
    <!-- Custom -->
    <link rel="stylesheet" href="{{url('ambassador_assets/css/profile.css')}}">
    <link rel="stylesheet" href="{{url('ambassador_assets/css/app.css')}}">
    <!-- Icons -->
    <link rel="stylesheet" href="{{url('ambassador_assets/lib/icons/themify-icons.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{url('ambassador_assets/lib/tags/tags.css')}}">
    <link rel="stylesheet" href="{{url('ambassador_assets/lib/tags/tagsify.css')}}">

    
    
    
    
</head>
<body>
    <div class="page-wrapper">
        <div class="page-wrapper-inner">
            @include('ambassador.layouts.top-nav')
            @include('ambassador.layouts.navigation')
            @yield('content')
        </div>
    </div>
    @include('ambassador.layouts.modals')
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/lib/Itrigger/itrigger.js')}}"></script>
    <script src="{{asset('assets/js/universal.js')}}"></script>
    <script src="{{url('ambassador_assets/lib/tags/tags.js')}}"></script>
    <script src="{{url('ambassador_assets/lib/tags/tags-prety.js')}}"></script>
    <script src="{{url('ambassador_assets/js/app.js')}}"></script>
    @include('ambassador.scripts.universal')
</body>
</html>