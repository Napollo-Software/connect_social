<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KYC - Connect Social</title>
    <link rel="icon" type="image/x-icon" href="{{asset('kyc_assets/images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('kyc_assets/css/kyc.css')}}">
    <link rel="stylesheet" href="{{asset('ambassador_assets/css/profile.css')}}">
    <link rel="stylesheet" href="{{asset('assets/lib/icons/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/lib/uploader/uploader.css')}}">
</head>
<body>
    <div class="page-wrapper">
        <div class="page-wrapper-inner">
            @include('ambassador.layouts.top-nav')
            @include('ambassador.layouts.navigation')
            @yield('content')
        </div>
    </div>
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/lib/Itrigger/itrigger.js')}}"></script>
    <script src="{{asset('assets/js/universal.js')}}"></script>
    <script src="{{asset('assets/lib/uploader/uploader.js')}}"></script>
    <script>
        let preloaded = [
                //   {id: 1, src: 'https://picsum.photos/500/500?random=1'},
                //   {id: 2, src: 'https://picsum.photos/500/500?random=2'},
                //   {id: 3, src: 'https://picsum.photos/500/500?random=3'},
                //   {id: 4, src: 'https://picsum.photos/500/500?random=4'},
                //   {id: 5, src: 'https://picsum.photos/500/500?random=5'},
                //   {id: 6, src: 'https://picsum.photos/500/500?random=6'},
              ];
      
              $('.input-images').imageUploader({
                  preloaded: preloaded,
                  imagesInputName: 'driving_license',
                  preloadedInputName: 'old',
                  maxFiles:2
              });
      

      
              // Input and label handler
              $('input').on('focus', function () {
                  $(this).parent().find('label').addClass('active')
              }).on('blur', function () {
                  if ($(this).val() == '') {
                      $(this).parent().find('label').removeClass('active');
                  }
              });
      
      </script>
</body>
</html>