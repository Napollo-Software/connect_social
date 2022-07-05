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
    <link rel="stylesheet" href="{{asset('assets/lib/icons/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/lib/uploader/uploader.css')}}">
</head>
<body>
    <div class="page-wrapper">
        <div class="page-wrapper-inner">
            @yield('content')
        </div>
    </div>
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
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
                  imagesInputName: 'photos',
                  preloadedInputName: 'old'
              });
      
              $('form').on('submit', function (event) {
      
                  // Stop propagation
                  event.preventDefault();
                  event.stopPropagation();
      
                  // Get some vars
                  let $form = $(this),
                      $modal = $('.modal');
      
                  // Set name and description
                  $modal.find('#display-name span').text($form.find('input[id^="name"]').val());
                  $modal.find('#display-description span').text($form.find('input[id^="description"]').val());
      
                  // Get the input file
                  let $inputImages = $form.find('input[name^="images"]');
                  if (!$inputImages.length) {
                      $inputImages = $form.find('input[name^="photos"]')
                  }
      
                  // Get the new files names
                  let $fileNames = $('<ul>');
                  for (let file of $inputImages.prop('files')) {
                      $('<li>', {text: file.name}).appendTo($fileNames);
                  }
      
                  // Set the new files names
                  $modal.find('#display-new-images').html($fileNames.html());
      
                  // Get the preloaded inputs
                  let $inputPreloaded = $form.find('input[name^="old"]');
                  if ($inputPreloaded.length) {
      
                      // Get the ids
                      let $preloadedIds = $('<ul>');
                      for (let iP of $inputPreloaded) {
                          $('<li>', {text: '#' + iP.value}).appendTo($preloadedIds);
                      }
      
                      // Show the preloadede info and set the list of ids
                      $modal.find('#display-preloaded-images').show().html($preloadedIds.html());
      
                  } else {
      
                      // Hide the preloaded info
                      $modal.find('#display-preloaded-images').hide();
      
                  }
      
                  // Show the modal
                  $modal.css('visibility', 'visible');
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