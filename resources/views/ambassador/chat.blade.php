
@extends('ambassador.layouts.app2')
@section('title')
Chat
@endsection
@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{url('ambassador_assets/css/chat.css')}}">
    <div class="user-chat section-padding bg-custom">
        <div class="container">
            <div class="user-chat-inner">
                <div class="chat-contacts">
                    <div class="chat-contacts-inner">
                        <div class="chat-contacts-main">
                            <div class="chat-contacts-filter custom-card custom-border custom-shadow custom-padding">
                                <form id="search-form">
                                    @csrf
                                    <div class="chat-contacts-field">
                                        <div class="chat-contacts-inner">
                                            <input type="text" class="chat-contact-field-input"
                                                   placeholder="Search with name" id="search" autocomplete="off">
                                            <span class="icon"><span class="ti-search"></span></span>
                                        </div>
                                    </div>

                                    <div class="chat-contacts-field">
                                        <div class="chat-contacts-inner">
                                            <select name="network" id="network" class="chat-contact-field-input">
                                                <option value="all">All</option>
                                                <option value="friends">Friends</option>
                                                <option value="connections">Connections</option>
                                                <option value="tier-1">Personal Network</option>
                                                <option value="tier-2">Extended Network</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="chat-contacts-all custom-card custom-border custom-shadow margin-top">
                                <div class="chat-contacts-all-inner">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="chat-box">
                    <div class="chat-box-inner custom-card custom-border custom-shadow margin-top">
                        <div class="chat-box-main">
                            <div class="chat-box-overlay">
                                <div class="chat-box-overlay-inner">
                                    <div class="chat-box-overlay-inner-main">
                                        <div class="top-text">
                                            Welcome to your inbox !
                                        </div>
                                        <div class="bottom-text">
                                            Please select a contact to start a conversation
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-box-top-bar border-0">
                                <div class="chat-box-top-bar-inner">
                                    <div class="back-btn close-chat-box" >
                                        <div class="back-btn-icon">
                                            <span class="ti-arrow-left"></span>
                                        </div>
                                    </div>
                                    <div class="user-info-bar">
                                        <a href="javascript:void(0)" id="user-url" class="chat-view-profile" target="_blank">
                                            <div class="user-profile-image">
                                                <img src="{{asset('ambassador_assets/images/user-profile/user-01.png')}}" alt="">
                                            </div>
                                            <div class="user-name" id="user-name"></div>
                                        </a>
                                        <!-- <div class="view-profile"><a href="javascript:void(0)" target="_blank"
                                                                    id="user-url"></a></div>
                                        <div class="date-time"></div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="chat-box-inner-main">
                                <div class="chat-box-inner-div">
                                    <div class="chat-bx-all-messages">

                                    </div>
                                </div>
                                <form id="message-send-form">
                                    @csrf
                                    <input type="hidden" name="to" id="to">
                                    <input type="file" name="file" id="file" style="visibility:hidden;width: 0px">
                                    <div class="sned-message-chat">
                                        <div class="sned-message-chat-inner">
                                            <div class="attachment ">
                                                <span class="icon btn-attachment position-relative" id="btn-attachment">
                                                    <i class="fa fa-paperclip"></i>
                                                </span>
                                                <span class="icon">
                                                    <a href="" class="remove-attachment"><i
                                                                class="fa fa-times-circle"></i></a>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="send-message-input-outer">
                                            <input type="text" id="message" name="message"
                                                   class="form-control send-message-input">
                                        </div>
                                        <div class="send-message-button">
                                            <button class="black-button  btn-msg-send" id="btn-msg-send" type="submit">
                                                Send
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="https://js.pusher.com/7.1/pusher.min.js"></script>

        <script>
            var onetimechatopen = true;
            @if($receiver)
                onetimechatopen = true;
            @else
                onetimechatopen = false;
            @endif
            var defaultChatBox=$('.chat-box').html();
            function search(data) {
                var user_container = $('.chat-contacts-all-inner');
                $.ajax({
                    url: "{{route('chat.users')}}",
                    type: "POST",
                    data: {'data': data, _token: '{{csrf_token()}}'},
                    dataType: "JSON",
                    beforeSend: function () {
                        user_container.empty().append('<div class="chat-contacts-single text-center"><span class="fa fa-spin fa-spinner"></span></div>');
                    },
                    success: function (d) {
                        user_container.empty();
                        console.log(d.length);
                        if (d.length>0){
                            $.each(d, function (i, v) {
                                user_container.append('<div class="chat-contacts-single user-of-chat-list" data-id="' + v['id'] + '"><div class="chat-contacts-single-inner"><div class="chat-contacts-single-info"><div class="chat-contacts-single-image"><img src="' + v['src'] + '" alt=""></div><div class="chat-contacts-single-name-message"><div><span class="chat-contacts-single-name">' + v['name'] + '</span><span class="badge badge-primary float-right ml-1"  id="unread-' + v['id'] + '" data-user="' + v['id'] + '">' + v['unread'] + '</span></div><div class="chat-contacts-single-message"></div></div></div><div class="chat-contacts-single-time"><span class="time"></span></div></div></div>');
                            });
                        } else{
                            if(data.search){
                                user_container.html('<div class="chat-contacts-single user-of-chat-list" data-id="6"><i class="font-italic">Empty</i></div>');
                            }else{
                                user_container.html('<div class="chat-contacts-single user-of-chat-list" data-id="6"><i class="font-italic">No '+data.network+'</i></div>');
                            }

                        }

                        if (onetimechatopen) {
                            var user_to_chat = $('.user-of-chat-list[data-id="{{$receiver}}"]');
                            user_to_chat.trigger('click');
                            onetimechatopen = false;
                        }
                    },
                    error: function (xhr) {
                        user_container.empty().append('<div class="chat-contacts-single text-center"><i>Empty</i></div>');
                    }
                });
            }

            function getMessages(user) {
                var container = $('.chat-bx-all-messages');
                $.ajax({
                    url: "{{route('chat.fetch')}}",
                    type: "POST",
                    data: {'user': user, _token: '{{csrf_token()}}'},
                    dataType: "JSON",
                    beforeSend: function () {
                        container.empty().append('<div class="text-center h1"><span class="fa fa-spin fa-spinner"></span></div>');
                    },
                    success: function (data) {
                        container.empty();
                        var html = '';
                        $.each(data, function (i, v) {
                            $.each(v, function (ni, nv) {
                                html += nv['body'];
                            });
                        });
                        container.html(html);
                        scrollbottom();
                    },
                });
            }

            function scrollbottom() {
                var to_scroll = $('.chat-box-inner-div');
                to_scroll.scrollTop(to_scroll.height())
            }

            $(function () {
                search();

                $('#message-send-form').on("submit", function (e) {
                    e.preventDefault();


                    var container = $('.chat-bx-all-messages');
                    $.ajax({
                        url: "{{route('chat.store')}}",
                        type: "POST",
                        data: new FormData(this),
                        dataType: "JSON",
                        processData: false,
                        contentType: false,
                        cache: false,
                        success: function (data) {
                            container.append(data.html);
                            $('#message').val('');
                            if (data.remove_file) {
                                $('.btn-attachment').removeClass('text-primary h3').attr('title', '');
                                $('a.remove-attachment').hide();
                                $('#file').val('');
                            }
                            scrollbottom();

                        },
                        error: function (xhr) {
                            if (typeof  xhr.responseJSON.errors === 'object') {
                                var error = '';
                                $.each(xhr.responseJSON.errors, function (key, item) {
                                    error += item;
                                    if (key == 'message') {
                                        $('#message').addClass('is-invalid');
                                    }
                                    if (key == 'to') {
                                        $('#message').addClass('is-invalid');
                                    }

                                });
                            }
                        }
                    });
                });
                $('#search').on("input", function () {
                    $('.chat-box').html(defaultChatBox);
                    search({'search':$('#search').val(),'network':$('#network').val()});
                });
                $('#network').on("change", function () {
                    $('.chat-box').html(defaultChatBox);
                    search({'search':$('#search').val(),'network':$('#network').val()});
                });

                $('.btn-attachment').on('click', function () {
                    $('#file').click();
                });

                $(document).on('click','.close-chat-box',function() {
                    $(".chat-box").hide();
                    $(".chat-contacts").show();
                });
                $(document).on('change', '#file', function () {
                    $('.btn-attachment').addClass('text-primary h3').attr('title', $('#file').val().replace(/.*(\/|\\)/, ''));
                    $('a.remove-attachment').show();
                });
                $(document).on('click', '.remove-attachment', function (e) {
                    e.preventDefault();
                    $('#file').val('');
                    $('.btn-attachment').removeClass('text-primary h3').attr('title', '');
                    $(this).hide();
                });
                $(document).on('change paste keyup', '#message', function () {
                    if ($(this).val().length != 0) {
                        $('#message').removeClass('is-invalid')
                    }
                });
                $(document).on('click', '.open-file', function (e) {
                    window.open($(this).attr('data-url'), '_blank', 'width=300,height=400')
                });
                $(document).on('click', '.user-of-chat-list', function (e) {
                    var id = $(this).attr('data-id');
                    $('#to').val(id);
                    var name = $(this).find('.chat-contacts-single-name');
                    $('#user-name').text(name.text());
                    $('#user-url').attr('href', '{{url('profile-view')}}/' + id);
                    getMessages($(this).attr('data-id'));
                    $('.chat-box-top-bar').removeClass('border-0');
                    $('#message').focus();
                    $('#unread-' + id).remove();
                    if (window.innerWidth <= 768) {
                        $('.chat-contacts').hide();
                        $('.chat-box').show();
                    }
                    $('.chat-box-overlay').hide();
                });

            });
            Pusher.logToConsole = false;
            var pusher = new Pusher('2cd0e268445c56eb6d8d', {
                cluster: 'ap2'
            });
            var channel = pusher.subscribe('channel-chat');
            channel.bind('App\\Events\\Chat', function (data) {
                if (data.chat['to'] == '{{auth()->user()->id}}') {
                    if (data.chat['from'] == $('#to').val()) {
                        markAsRead(data.chat['id']);
                        $('.chat-bx-all-messages').append(data.html);
                        scrollbottom();
                    } else {
                        var unread = $('#unread-' + data.chat['from']);
                        if (unread.text()) {
                            unread.text(parseInt(unread.text()) + 1);
                        } else {
                            unread.text(1);
                        }
                    }
                }
            });

            function markAsRead(id) {
                $.ajax({
                    url: "{{route('chat.mark.as.read')}}",
                    type: "POST",
                    data: {'id': id, _token: '{{csrf_token()}}'},
                    dataType: "JSON",
                    success: function (data) {

                    },
                });
            }
        </script>
    @endpush
@endsection
<style>
    a.remove-attachment {
        position: absolute;
        z-index: 10;
        display: none;
        color: black;
        font-size: 14px;
        margin-top: -7px;
        margin-left: -1px;
    }
</style>
