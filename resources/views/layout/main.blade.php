<?php extract($data_needed); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{url('main-assets/images/favicon.png')}}">
    <title>{{$title}} - Connect Social</title>
    <!-- Universal Styles -->
    <link rel="stylesheet" href="{{asset('main-assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('main-assets/lib/themify/themify-icons.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>  
    <!-- Specific Styles -->
    {{load_styles(( isset($styles) ? $styles : '' ))}}
</head>
<body>
    <!-- Body Content -->
    @if(isset($include_top))
        @include('layout.include_top')
    @endif

    @yield('content')
    
    @if(isset($include_bottom))
        @include('layout.include_bottom')
    @endif
    <!-- Universal Scripts -->
    <script src="{{asset('main-assets/js/jquery.js')}}"></script>
    <script src="{{asset('main-assets/js/bootstrap.min.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Specific Scripts -->
    {{load_scripts(( isset($scripts) ? $scripts : '' ))}}
    @stack('scripts')
</body>
</html>
