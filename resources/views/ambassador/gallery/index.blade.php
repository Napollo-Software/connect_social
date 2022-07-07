@extends('ambassador.layouts.app')
@section('content')
    @include('ambassador.layouts.gallery-navigation')
    <div class="gallary-grid">
        <div class="gallary-grid-inner">
            <div class="container">
                <div class="gallary-top-bar">
                    <div class="gallary-top-bar-inner">
                        <div class="gallary-top-title">
                            All Media 
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

            });
        });
    </script>
    <script>
        function fetch(type){
            $.ajax({
                type: "POST",
                url: "{{route('gallery.fetch')}}",
                dataType: "JSON", 
                data: {'type': type, _token: '{{csrf_token()}}'},
                beforeSend: function () {
                    $('.friends-grid-main').html('<div class="col-md-12 text-center"><h1><i class="spinner-border spinner-border-large"></i></h1></div>')
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
                e.preventDefault();
                $('.inner-navigation-li.active').removeClass('active');
                $(this).parent().addClass('active');
                var type= $(this).attr('data-type');
                fetch(type);
                window.history.pushState({}, null, '/gallery/'+type);
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
