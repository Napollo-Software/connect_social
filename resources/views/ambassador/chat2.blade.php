@extends('ambassador.layouts.app2')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <div class="container">
        <div class="wrapper">
            <nav id="sidebar">
                <div class="sidebar-header p-0 ">
                    <form id="search-form">
                        @csrf
                        <div class="input-group">
                            <input type="text" class="form-control search-input border-radius-0"
                                   placeholder="&#xF002; Search or start chat here.." id="search">
                        </div>
                    </form>
                </div>
                <ul class="list-unstyled components pt-0 border-bottom">
                </ul>
            </nav>
            <div class="container-fluid">
                <div class="row">
                    <div class="chat-header col-12 border-bottom">
                        <button class="float-left btn mt-2 p-0 mr-2 btn-sm btn-toggle" id="sidebarCollapse"><i
                                    class="fa fa-arrow-left"></i></button>
                        <img src="" id="header-to-img" class="float-left ml-2">
                        <h6 class="font-weight-bold float-left mt-2" id="header-to-h5"></h6>
                    </div>
                </div>
                <div class="row content bg-light">
                    <div class="col-12 p-0 message-box-cover">
                        <div class="message-box nav-pills-bg"></div>
                        <form id="message-send-form">
                            @csrf
                            <div class="input-group">
                                <input type="hidden" name="to" id="to">
                                <input type="file" name="file" id="file" style="visibility:hidden;width: 0px">
                                <div class="input-group-prepend position-relative">
                                    <button class="btn btn-sm rounded-0 border btn-attachment" id="btn-attachment"
                                            type="button"><i class="fa fa-paperclip"></i></button>
                                    <a href="" class="remove-attachment">x</a>
                                </div>

                                <input type="text"
                                       class="form-control border-radius-0 border-left-0 border-right-0 border-bottom"
                                       name="message" id="message" placeholder="Type your message here..">
                                <div class="input-group-append">
                                    <button class="btn btn-sm text-light rounded-0 btn-primary btn-msg-send" id="btn-msg-send" type="submit"><i class="fa fa-paper-plane"></i></button>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="{{url('assets/js/pusher.min.js')}}"></script>
    @push('scripts')
        <script>
            function search(search) {
                $.ajax({
                    url: "{{route('chat.users')}}",
                    type: "POST",
                    data: {'search': search, _token: '{{csrf_token()}}'},
                    dataType: "JSON",
                    beforeSend: function () {
                        $('.list-unstyled').empty();
                        $('.list-unstyled').append('<center><i class="fa fa-spinner fa-spin"></i></center>');
                        $('.lazy-loader').show();
                    },
                    success: function (data) {
                        $('.list-unstyled').empty();
                        $.each(data, function (i, v) {
                            var span = v['unread'] != 0 ? '<span class="float-right badge badge-dark">' + v['unread'] + '</span>' : '';
                            var online = v['online'] == 1 ? 'text-success' : '';
                            $('.list-unstyled').append('<li class="user-of-chat-list ' + online + '" data-id="' + v['id'] + '"><a href="#" id="chat-list-items"><img src="' + v['src'] + '" class="profile-chat" alt=""><span id="full-name">' + v['fname'] + ' ' + v['lname'] + '</span>' + span + '</a></li>');
                        });
                    },
                    error: function (xhr) {
                    }
                });
            }

            $(document).ready(function () {
                search();
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebarCollapse').find("i").toggleClass("fa-arrow-right fa-arrow-left");
                    $('#sidebar').toggleClass('active');
                });

                $('.message-box').on('click', function () {
                    if (window.matchMedia('(max-width: 400px)').matches) {
                        $('#sidebarCollapse').find("i").toggleClass("fa-arrow-right fa-arrow-left");
                        $('#sidebar').toggleClass('active');
                    }
                });
                $('.btn-attachment').on('click', function () {
                    $('#file').click();
                });
                $(document).on('change', '#file', function () {
                    $('.btn-attachment').addClass('btn-primary').attr('title', $('#file').val().replace(/.*(\/|\\)/, ''));
                    $('a.remove-attachment').show();
                });
                $(document).on('click', '.remove-attachment', function (e) {
                    e.preventDefault();
                    $('#file').val('');
                    $('.btn-attachment').removeClass('btn-primary').attr('title', '');
                    $(this).hide();
                });
                $(document).on('click','.open-file',function (e) {
                    window.open($(this).attr('data-url'), '_blank', 'width=300,height=400')
                });
                $('#search').on("input", function () {
                    search($('#search').val());
                });
                $('#message-send-form').on("submit", function (e) {
                    e.preventDefault();
                    $.ajax({
                        url: "{{route('chat.store')}}",
                        type: "POST",
                        data: new FormData(this),
                        dataType: "JSON",
                        processData: false,
                        contentType: false,
                        cache: false,
                        success: function (data) {
                            var mes='';
                            if (data.chat.message){
                                mes=data.chat.message;
                            }
                            if (data.file){
                                $('#file').val('');
                                $('.btn-attachment').removeClass('btn-primary').attr('title','');
                                $('.remove-attachment').hide();
                                $('.message-box').append('<div class="col-12 p-0 text-right"><p class="message-pills message-pills-right"><span class="fa fa-paperclip open-file" data-url="'+data.file+'"></span>  ' + mes  + ' <small>' + data.time + '</small></p></div>');
                            } else{
                                $('.message-box').append('<div class="col-12 p-0 text-right"><p class="message-pills message-pills-right">' +  mes + ' <small>' + data.time + '</small></p></div>');
                            }
                            $('#message').val('');
                            scrollbottom();
                        },
                        error: function (xhr) {
                            if (typeof  xhr.responseJSON.errors === 'object') {
                                var error = '';
                                $.each(xhr.responseJSON.errors, function (key, item) {
                                    error += item;
                                    if(key == 'message'){
                                        $('#message').addClass('is-invalid');
                                    }
                                });
                            }
                        }
                    });
                });
                $(document).on('change paste keyup','#message',function () {
                  if ($(this).val().length!=0){
                      $('#message').removeClass('is-invalid')
                  }
                });
                $(document).on('click', '.user-of-chat-list', function (e) {
                    if (window.matchMedia('(max-width: 400px)').matches) {
                        e.preventDefault();
                        $('#sidebar').toggleClass('active');
                    }
                    $(this).addClass('active').siblings().removeClass('active');
                    var id = $(this).attr('data-id');
                    var name = $(this).find('#full-name');
                    $('#header-to-img').attr('src', $(this).find('img').attr('src')).addClass('profile-header');
                    $('#header-to-h5').text(name.text());
                    $('.message-box').removeClass('nav-pills-bg').addClass('nav-pills-no-bg');
                    $('#to').val(id);
                    getMessages(id);
                    scrollbottom();
                    $('#message').focus();
                });
                var input = document.getElementById("message");
                input.addEventListener("keyup", function (event) {
                    if (event.keyCode === 13) {
                        event.preventDefault();
                        if ($('#message').val() != '') {
                            document.getElementById("btn-msg-send").click();
                        }
                    }
                });
            });

            function getMessages(user) {
                $.ajax({
                    url: "{{route('chat.fetch')}}",
                    type: "POST",
                    data: {'user': user, _token: '{{csrf_token()}}'},
                    dataType: "JSON",
                    beforeSend: function () {
                        $('.message-box').empty();
                        $('.message-box').append('<center><i class="fa fa-spinner fa-spin"></i></center>');
                    },
                    success: function (data) {
                        $('.message-box').empty();
                        $.each(data, function (i, v) {



                            $('.message-box').append('<div class="col-12 p-0 message-pills-date"> <p class="message-pills"><small><b>' + i + '</b></small></p> </div>');
                            $.each(v, function (ni, nv) {
                                var textp = (nv['left'] == false) ? 'text-left' : 'text-right';
                                var position = (nv['left'] == false) ? 'message-pills-left' : 'message-pills-right';
                                var mes = (nv['message']) ? nv['message'] : '';


                                if (nv['file_path']){
                                    $('.message-box').append('<div class="col-12 p-0 ' + textp + '"><p class="message-pills ' + position + ' "> <span class="fa fa-paperclip open-file" data-url="'+nv['file_path']+'"></span>' + mes + ' <small>' + nv['time'] + '</small></p></div>');

                                } else{
                                    $('.message-box').append('<div class="col-12 p-0 ' + textp + '"><p class="message-pills ' + position + ' ">' + mes + ' <small>' + nv['time'] + '</small></p></div>');

                                }
                            });
                        });
                    },
                });
            }

            function scrollbottom() {
                $('.message-box').animate({
                    scrollTop: $('.message-box').height() * 1000
                }, 1000);
            }
        </script>
    @endpush
    <style>
        .nav-pills-bg {
            background-image: url("{{url('img/chat.jpg')}}");
        }

        .nav-pills-no-bg {
            background-image: none;
        }

        #wrapper {
            align-items: flex-start;
            border: 1px solid green;
            overflow: hidden;
        }

        #sidebar-wrapper {
            min-height: 100%;
            margin-left: -15rem;
            transition: margin 0.25s ease-out;
        }

        .chat-room {
            height: calc(100% - 50px);
        }

        .chat-list-user {
            height: 100%;
            overflow-y: scroll;
        }

        .chat-list-user::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background-color: #F5F5F5;
        }

        .chat-list-user::-webkit-scrollbar {
            width: 5px;
            background-color: #F5F5F5;
        }

        #sidebar-wrapper .list-group {
            width: 15rem;
        }

        #page-content-wrapper {
            width: 100%;
            min-width: 100%;
        }

        body.sb-sidenav-toggled #wrapper #sidebar-wrapper {
            margin-left: 0;
        }

        @media (min-width: 768px) {
            #sidebar-wrapper {
                margin-left: 0;
            }

            #page-content-wrapper {
                min-width: 0;
                width: 100%;
            }

            body.sb-sidenav-toggled #wrapper #sidebar-wrapper {
                margin-left: -15rem;
            }
        }

        .pcoded-content {
            padding: 0;
        }

        textarea:focus,
        textarea.form-control:focus,
        input.form-control:focus,
        input[type=text]:focus,
        [type=text].form-control:focus,
        [contenteditable].form-control:focus {
            box-shadow: inset 0 -1px 0 #ddd;
        }

        .btn-toggle, .btn-toggle:active, .btn-toggle:focus {
            border: none;
            outline: none;
            box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0);
        }

        .nav-pills {
            height: inherit;
            overflow-y: scroll;
        }

        .nav-pills-bg {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .nav-pills-no-bg {
            background: transparent;
        }

        @media (max-width: 400px) {
            .nav-pills-bg {
                background-position: center;
                background-repeat: no-repeat;
                background-size: auto 600px;
            }
        }

        .profile-chat {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 10px;
            object-fit: cover;
        }

        .profile-header {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
            object-fit: cover;
        }

        .mail-section {
            width: 100%;
            align-self: flex-start;
        }

        .card-footer {
            align-items: flex-start;
            padding-bottom: 0;
        }

        .wrapper {
            display: flex;
            width: 100%;
            align-items: stretch;
        }

        #sidebar {
            min-width: 250px;
            max-width: 250px;
            transition: all 0.3s;
        }

        #sidebar.active {
            margin-left: -250px;
        }

        #sidebar .sidebar-header {
            padding: 20px;
        }

        #sidebar ul.components {
            height: 80vh;
            background: white;
            overflow-y: scroll;
        }

        #sidebar ul li a {
            padding-top: 10px;
            padding-bottom: 10px;
            font-size: 1.1em;
            display: block;
        }

        #sidebar ul li.active > a,
        a[aria-expanded="true"] {
            color: black;
            background: #eaeaea;
        }

        a[data-toggle="collapse"] {
            position: relative;
        }

        #sidebar ul.components::-webkit-scrollbar-track, .message-box::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background-color: #F5F5F5;
        }

        #sidebar ul.components::-webkit-scrollbar, .message-box::-webkit-scrollbar {
            width: 5px;
            background-color: #F5F5F5;
        }

        #sidebar ul.components::-webkit-scrollbar-thumb, .message-box::-webkit-scrollbar-thumb {
            background-color: #3f6fc4;
            background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .2) 50%, rgba(255, 255, 255, .2) 75%, transparent 75%, transparent);
        }

        a,
        a:hover,
        a:focus {
            color: black;
            text-decoration: none;
            transition: all 0.3s;
        }

        .chat-header {
            width: calc(100%);
        }

        .style-toggler {
            display: none;
        }

        .message-pills {
            font-weight: 600;
            display: inline-block;
            color: #0656b2;
            padding: 10px;
        }

        .message-pills-left {
            border-radius: 0 20px 20px 0;
            background: rgba(0, 0, 0, 0.05);
            border-color: rgba(0, 0, 0, 0.1);
            padding-right: 20px;
        }

        .message-pills-right {
            border-radius: 20px 0 0 20px;
            background: rgba(0, 0, 0, 0.05);
            border-color: rgba(0, 0, 0, 0.1);
            padding-left: 20px;
        }

        .message-pills-date {
            align-items: center;
            text-align: center;
        }

        .message-box {
            background-color: white;
            height: calc(80vh - calc(1.5em + 0.75rem + 2px));
            overflow-y: scroll;
        }

        .lazy-loader {
            margin-top: 40px;
            width: 30px;
        }

        .badge-dark {
            border-radius: 50%;
            background-color: #3f6fc4;
            background-image: linear-gradient(rgba(255, 255, 255, .2), #3f6fc4, rgba(255, 255, 255, .1));
        }

        .status-active {
            top: 8px;
            left: 30px;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #2ed8b6;
            z-index: 2;
        }

        .status-inactive {
            top: 8px;
            left: 30px;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: rgba(156, 156, 156, 0.8);
            z-index: 2;
        }

        #full-name {
            left: 50px;
        }

        a.remove-attachment {
            position: absolute;
            right: -6px;
            top: -16px;
            z-index: 10;
            display: none;;
        }

        button#btn-attachment {
            position: relative;
        }
    </style>
@endsection