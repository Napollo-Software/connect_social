@extends('ambassador.layouts.app')
@section('title')
Gallery
@endsection
@section('content')
<!-- @include('ambassador.layouts.gallery-navigation') -->
    <div class="gallary-grid">
        <div class="gallary-grid-inner">
            <div class="container">
                <div class="gallary-top-bar">
                    <div class="gallary-top-bar-inner">
                        <div class="gallary-top-title">
                            <div class="network-filter">
                                <div class="network-filter-inner">
                                    <div class="network-filter-inner-main">
                                        <div class="text">
                                            Gallery : 
                                        </div>
                                        <div class="selected">
                                            <div class="icon">
                                                <span class="ti-align-left"></span>
                                            </div>
                                            <div class="text">
                                                All Media
                                            </div>
                                        </div>
                                    </div>
                                    <div class="network-dropdown">
                                        <div class="network-dropdown-inner">
                                            <div class="network-dropdown-main">
                                                <ul class="network-dropdown-ul">
                                                    <li class="network-dropdown-li">
                                                        <a href="javascript:void(0)" class="network-dropdown-link  gallery-link inner-navigation-link" data-type="all">
                                                            <div class="icon">
                                                                <span class="ti-align-left"></span>
                                                            </div>
                                                            <div class="text">
                                                                All Media
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="network-dropdown-li">
                                                        <a href="javascript:void(0)" class="network-dropdown-link  gallery-link inner-navigation-link" data-type="image">
                                                            <div class="icon">
                                                                <span class="ti-gallery"></span>
                                                            </div>
                                                            <div class="text">
                                                                Photo
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="network-dropdown-li">
                                                        <a href="javascript:void(0)" class="network-dropdown-link gallery-link inner-navigation-link" data-type="video">
                                                            <div class="icon">
                                                                <span class="ti-control-play"></span>
                                                            </div>
                                                            <div class="text">
                                                                Video
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="network-dropdown-li">
                                                        <a href="javascript:void(0)" class="network-dropdown-link gallery-link inner-navigation-link" data-type="audio">
                                                            <div class="icon">
                                                                <span class="ti-microphone"></span>
                                                            </div>
                                                            <div class="text">
                                                                Audio
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gallary-top-date">
                            June 1, 2022
                        </div>
                        <div class="selection-icon">
                            <span class="ti-more-alt"></span>
                            <div class="selection-dropdown">
                                <div class="selection-dropdown-inner">
                                    <ul class="selection-dropdown-ul">
                                        <li class="selection-dropdown-li gallary-sellect-bar-select-show">
                                            Select
                                        </li>
                                        <li class="selection-dropdown-li gallary-sellect-bar-select-all">
                                            Select All
                                        </li>
                                        <li class="selection-dropdown-li gallay-sellect-bar-select-delete" >
                                            Delete
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container container-for-assets">

            </div>
        </div>
    </div>
    <div id="repeated-html" class="d-none">
        <div class="friend-grid-col-options-dropdown-inner">
            <div class="friend-grid-col-options-dropdown-main">
                <ul class="friend-grid-col-options-dropdown-ul">
                    <li class="friend-grid-col-options-dropdown-li">
                        <a href="javascript:void(0)" class="friend-grid-col-options-dropdown-link">Remove Friend</a>
                    </li>
                    <li class="friend-grid-col-options-dropdown-li">
                        <a href="javascript:void(0)" class="friend-grid-col-options-dropdown-link">Send Message</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="repeated-play-html" class="d-none">
        <div class="play-video-icon-inner">
            <div class="play-video-icon-main">
                <img src="{{url('ambassador_assets/images/icons/play.png')}}" alt="">
            </div>
        </div>
    </div>
@endsection
<script src="{{url('index.js')}}"></script>
@push('scripts')
    <script>
        $(document).ready(function () {
            var repeated_html = $("#repeated-html").html();
            $(".friend-grid-col-options-dropdown").html(repeated_html);

            var repeated_play_html = $("#repeated-play-html").html();
            $(".play-video-icon").html(repeated_play_html);

            // More Trigger
            $(".friend-grid-col-options-icon").click(function () {
                $(this).find(".friend-grid-col-options-dropdown").toggle()
            });

            // Select Items
            $(".gallary-sellect-bar-select-show").click(function () {
                $(".select-gallary-item").toggle();
            });

            $(".selection-icon").click(function () {
                $(".selection-dropdown").toggle();
            });

            var select_count = 0;

            $(".gallary-sellect-bar-select-all").click(function () {
                $(".gallary-grid-main .select-gallary-item").show();
                if (select_count == 0) {
                    $(".gallary-grid-main .select-gallary-item input").prop('checked', true);
                    select_count = 1;
                } else {
                    $(".gallary-grid-main .select-gallary-item input").prop('checked', false);
                    select_count = 0;
                }

            });
            //Delete Items
            $('.gallay-sellect-bar-select-delete').click(function(){
                var post_source=[];
                var post_url=[];
                var post_id=[];
                var post_asset=[];
                var post_directory=[];
                var a=0,e=0,i=0,o=0,u=0;
                $('.select-asset:checkbox:checked').each(function(){
                    data_source=$(this).attr('data-source');
	                data_url=$(this).attr('data-path');
                    data_id=$(this).attr('data-id');
                    data_asset=$(this).attr('data-asset');
                    data_directory=$(this).attr('data-asset-directory');
                    data_type=$(this).attr('data-type');
                    post_source[a++]=data_source;
                    post_url[e++]=data_url;
                    post_id[i++]=data_id;
                    post_asset[o++]=data_asset;
                    post_directory[u++]=data_directory;
                 });
                 $.ajax({
                        type:"POST",
                        url:"{{route('gallery.delete')}}",
                        dataType:"JSON",
                        data:{_token: '{{csrf_token()}}','post_source':post_source,'post_url':post_url,'post_id':post_id,'post_asset':post_asset,'post_directory':post_directory,'data_type':data_type},
                        beforeSend: function () {
                        $('.friends-grid-main').html('<div class="col-md-12 text-center"><h1><i class="spinner-border spinner-border-large"></i></h1></div>')
                        },
                        success: function (data) {
                         $('.container-for-assets').html(data);
                         },
                         error: function (xhr) {
                          erroralert(xhr);
                         }

                    })
            });
        });
    </script>
    <script>
        function fetch(type){
            var icons={
                'all':'ti-align-left',
                'image':'ti-gallery',
                'video':'ti-control-play',
                'audio':'ti-microphone',
            };
            var text={
                'all':'All Media',
                'image':'Photo',
                'video':'Video',
                'audio':'Audio',
            };

            $('.selected .text').text(text[type]);
            $('.selected .icon span').attr('class',icons[type]);
            var user_id = {{$user->id}};
            $.ajax({ 
                type: "POST",
                url: "{{route('gallery.fetch')}}",
                dataType: "JSON", 
                data: {'type': type, 'user_id': user_id ,_token: '{{csrf_token()}}'},
                beforeSend: function () {
                    $('.container-for-assets').html('<div class="col-md-12 text-center"><h1><i class="spinner-border spinner-border-large"></i></h1></div>')
                },
                success: function (data) {
                    $('.container-for-assets').html(data);
                },
                error: function (xhr) {
                    erroralert(xhr);
                }
            });
        }
        $(function () {
            fetch('{{$type}}');
            $(document).on('click','.gallery-link',function (e) {
                $('.selected .text').text($(this).find('.text').text());
                $('.selected .icon span').attr('class',$(this).find('span').attr('class'));

                e.preventDefault();
                $('.inner-navigation-li.active').removeClass('active');
                $(this).parent().addClass('active');
                var type= $(this).attr('data-type');
                fetch(type);
                window.history.replaceState({}, null, '/gallery/'+type);
            });
        });

    </script>
    <style>
        .container-for-assets{
            min-height: 400px;
        }
        .spinner-border-large{
            display: inline-block;
            width: 5rem;
            height: 5rem;
            vertical-align: -.125em;
            border: .15em solid #007bff;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: .75s linear infinite spinner-border;
            animation: .75s linear infinite spinner-border;
        } 
    </style>
@endpush
 