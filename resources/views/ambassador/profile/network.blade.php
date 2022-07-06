@extends('ambassador.layouts.app')
@section('content')
    @include('ambassador.layouts.friends-navigation')
    <div class="friends-grid">
        <div class="friends-grid-inner">
            <div class="container">
                <div class="gallary-top-bar">
                    <div class="gallary-top-bar-inner">
                        <div class="gallary-top-title">
                        </div>
                        <div class="gallary-top-date">

                        </div>
                        <div class="selection-icon">
                            <div class="current-privacy">
                                <div class="icon">
                                    <img src="{{getNetworkPrivacy($type)['url']}}" alt="">
                                </div>
                                <p>{{getNetworkPrivacy($type)['name']}}</p>
                            </div>
                            <div class="selection-dropdown">
                                <div class="selection-dropdown-inner">
                                    <ul class="selection-dropdown-ul selected-type" data-type="{{$type}}">
                                        @foreach($reflection->getConstants() as $constant)
                                            <li class="selection-dropdown-li change-privacy" data-privacy="{{$constant}}">
                                                <div class="icon">
                                                    <img src="{{getPrivacyDetails($constant)['url']}}"
                                                         alt="">
                                                </div>
                                                {{getPrivacyDetails($constant)['name']}}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">

                <div class="friends-grid-main">

                </div>
            </div>
        </div>
    </div>
    <div id="repeated-html" class="d-none">
        {{$repeated_html}}
    </div>
    @push('scripts')
        <script>
            $(document).ready(function() {
                $(".selection-icon").click(function () {
                    $(".selection-dropdown").toggle();
                });
                $(document).on('click',".friend-grid-col-options-icon",function() {
                    $(this).find(".friend-grid-col-options-dropdown").toggle()
                });
                $(document).on('click', '.change-privacy', function () {
                    var privacy=$(this).attr('data-privacy');
                    var type=$(this).parent().attr('data-type');


                    $.ajax({
                        type: "POST",
                        url: "{{route('network.change.privacy')}}",
                        dataType: "JSON",
                        data: {'type': type,'privacy': privacy, _token: '{{csrf_token()}}'},
                        success: function (data) {

                            $('.current-privacy').find('img').attr('src',data.data.url);
                            $('.current-privacy').find('p').text(data.data.name);

                        },
                        error: function (xhr) {
                            erroralert(xhr);
                        }
                    });
                });

                $(document).on('click', '.remove-friend', function () {
                    var id =$(this).parent().parent().parent().parent().parent().attr('data-id');
                    var now= $(this);
                    $.ajax({
                        type: "POST",
                        url: "{{route('friends.remove.friend')}}",
                        dataType: "JSON",
                        data: {'id': id, _token: '{{csrf_token()}}'},
                        success: function (data) {
                            $('#total-friends').text(parseInt($('#total-friends').text())-1);
                            now.closest('.friend-grid-col').remove();
                        },
                        error: function (xhr) {
                            erroralert(xhr);
                        }
                    });
                });


                $(document).on('click', '.remove-connection', function () {
                    var id =$(this).parent().parent().parent().parent().parent().attr('data-id');
                    var now= $(this);

                    $.ajax({
                        type: "POST",
                        url: "{{route('connections.remove.connection')}}",
                        dataType: "JSON",
                        data: {'id': id, _token: '{{csrf_token()}}'},
                        success: function (data) {
                            $('#total-connections').text(parseInt($('#total-connections').text())-1);
                            now.closest('.friend-grid-col').remove();

                        },
                        error: function (xhr) {
                            erroralert(xhr);
                        }
                    });
                });
                fetch('{{$type}}','{{$user->id}}');
                $(document).on('click','.network-link',function (e) {
                    e.preventDefault();
                    $('.inner-navigation-li.active').removeClass('active');
                    $(this).parent().addClass('active');
                    var type= $(this).attr('data-type');
                    $('.selected-type').attr('data-type',type);
                    fetch(type,'{{$user->id}}');
                    window.history.pushState({}, null, '/network/'+type);
                });
            });
            function fetch(type,user) {
                $.ajax({
                    type: "POST",
                    url: "{{route('network.fetch')}}",
                    dataType: "JSON",
                    data: {'type': type,'user': user, _token: '{{csrf_token()}}'},
                    beforeSend: function () {
                        $('.friends-grid-main').html('<div class="col-md-12 text-center"><h1><i class="spinner-border spinner-border-large"></i></h1></div>');
                    },
                    success: function (data) {
                        $('.friends-grid-main').html(data.html);
                        $(".friend-grid-col-options-dropdown").html(data.repeated_html);
                        if (data.p.show_privacy){
                            $('.current-privacy').show();
                            $('.current-privacy').find('img').attr('src',data.p.privacy.url);
                            $('.current-privacy').find('p').text(data.p.privacy.name);
                        } else{
                            $('.current-privacy').hide();
                        }
                    },
                    error: function (xhr) {
                        console.log(xhr);
                    }
                });
            }
        </script>
    @endpush
    <style>
        .friends-grid-main{
            min-height: 300px;
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
@endsection

