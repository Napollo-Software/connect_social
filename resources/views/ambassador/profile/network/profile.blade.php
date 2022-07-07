@extends('ambassador.layouts.app')
@section('content')
    <div class="profile-content">
        <div class="container">
            <div class="profile-content-inner">
                <div class="profile-content-boxs">
                    <div class="profile-content-boxs-single social-information-content-box">
                        <div class="social-information-content-inner">
                            <div class="content-sides">
                                <div class="content-side-01">
                                    <div class="content-cards">
                                        @if(checkPrivacyInNetwork(getSocialPrivacyofUser('about',$user),$user->id))
                                        <div class="content-card">
                                            <div class="content-card-inner">
                                                <div class="content-top-bar custom-padding">
                                                    <div class="content-top-bar-inner">
                                                        <div class="content-top-bar-title">
                                                            <div class="text">
                                                                About
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="content-card-content">
                                                        <div class="content-card-content-inner about-content custom-padding">
                                                            <p id="about-text">
                                                                {{$user->details->about}}
                                                            </p>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="content-card">
                                            <div class="content-card-inner">
                                                <div class="content-top-bar custom-padding">
                                                    <div class="content-top-bar-inner">
                                                        <div class="content-top-bar-title">
                                                            <div class="text">
                                                                Social Information
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="content-card-content">
                                                    <div class="content-card-content-inner custom-padding">
                                                        <div class="social-info-editor-box">
                                                            <div class="social-info-editor-box-inner">
                                                                <ul class="social-info-editor-box-ul">
                                                            @if (checkPrivacyInNetwork(getSocialPrivacyofUser('city',$user),$user->id))                                                         
                                                                    <li class="social-info-editor-box-li custom-padding">
                                                                        <div class="info-editor-box">
                                                                            <div class="info-editor-box-title">
                                                                                <div class="info-editor-box-title-text">
                                                                                    City
                                                                                </div>
                                                                            </div>

                                                                            <div class="info-editor-box-value">
                                                                                <div class="info-editor-box-value-text"
                                                                                     id="city-text">
                                                                                    {{$user->details->city}}
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    @endif
                                                                    @if (checkPrivacyInNetwork(getSocialPrivacyofUser('state',$user),$user->id)) 
                                                                    <li class="social-info-editor-box-li custom-padding">
                                                                        <div class="info-editor-box">
                                                                            <div class="info-editor-box-title">
                                                                                <div class="info-editor-box-title-text">
                                                                                    Current State
                                                                                </div>
                                                                            </div>

                                                                            <div class="info-editor-box-value">
                                                                                <div class="info-editor-box-value-text"
                                                                                     id="state-text">
                                                                                    {{$user->details->state}}

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    @endif
                                                                    @if (checkPrivacyInNetwork(getSocialPrivacyofUser('relationship',$user),$user->id)) 
                                                                    <li class="social-info-editor-box-li custom-padding">
                                                                        <div class="info-editor-box">
                                                                            <div class="info-editor-box-title">
                                                                                <div class="info-editor-box-title-text">
                                                                                    Relationship Status
                                                                                </div>
                                                                            </div>

                                                                            <div class="info-editor-box-value">
                                                                                <div class="info-editor-box-value-text"
                                                                                     id="relationship-text">
                                                                                    {{$user->details->relationship}}

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    @endif
                                                                    @if (checkPrivacyInNetwork(getSocialPrivacyofUser('joining',$user),$user->id)) 
                                                                    <li class="social-info-editor-box-li custom-padding">
                                                                        <div class="info-editor-box">
                                                                            <div class="info-editor-box-title">
                                                                                <div class="info-editor-box-title-text">
                                                                                    Date of Joining
                                                                                </div>
                                                                            </div>

                                                                            <div class="info-editor-box-value">
                                                                                <div class="info-editor-box-value-text">
                                                                                    {{dateFormat($user->details->joining,'d M Y')}}

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    @endif
                                                                    @if (checkPrivacyInNetwork(getSocialPrivacyofUser('workplace',$user),$user->id)) 
                                                                    <li class="social-info-editor-box-li custom-padding">
                                                                        <div class="info-editor-box">
                                                                            <div class="info-editor-box-title">
                                                                                <div class="info-editor-box-title-text">
                                                                                    Workplace
                                                                                </div>
                                                                            </div>

                                                                            <div class="info-editor-box-value">
                                                                                <div class="info-editor-box-value-text"
                                                                                     id="workplace-text">
                                                                                    {{$user->details->workplace}}

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    @endif
                                                                    @if (checkPrivacyInNetwork(getSocialPrivacyofUser('high_school',$user),$user->id)) 
                                                                    <li class="social-info-editor-box-li custom-padding">
                                                                        <div class="info-editor-box">
                                                                            <div class="info-editor-box-title">
                                                                                <div class="info-editor-box-title-text">
                                                                                    High School
                                                                                </div>
                                                                            </div>

                                                                            <div class="info-editor-box-value">
                                                                                <div class="info-editor-box-value-text"
                                                                                     id="high_school-text">
                                                                                    {{$user->details->high_school}}

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    @endif
                                                                    @if (checkPrivacyInNetwork(getSocialPrivacyofUser('hobbies',$user),$user->id)) 
                                                                    <li class="social-info-editor-box-li custom-padding">
                                                                        <div class="info-editor-box">
                                                                            <div class="info-editor-box-title">
                                                                                <div class="info-editor-box-title-text">
                                                                                    Hobbies
                                                                                </div>
                                                                            </div>

                                                                            <div class="info-editor-box-value">
                                                                                <div class="info-editor-box-value-text"
                                                                                     id="hobbies-text">
                                                                                    {{$user->details->hobbies}}
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    @endif
                                                                    @if (checkPrivacyInNetwork(getSocialPrivacyofUser('email',$user),$user->id)) 
                                                                    <li class="social-info-editor-box-li custom-padding">
                                                                        <div class="info-editor-box">
                                                                            <div class="info-editor-box-title">
                                                                                <div class="info-editor-box-title-text">
                                                                                    Email Address
                                                                                </div>
                                                                            </div>

                                                                            <div class="info-editor-box-value">
                                                                                <div class="info-editor-box-value-text">
                                                                                    {{$user->email}}

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    @endif
                                                                    @if (checkPrivacyInNetwork(getSocialPrivacyofUser('phone',$user),$user->id)) 
                                                                    <li class="social-info-editor-box-li custom-padding">
                                                                        <div class="info-editor-box">
                                                                            <div class="info-editor-box-title">
                                                                                <div class="info-editor-box-title-text">
                                                                                    Mobile Number
                                                                                </div>
                                                                            </div>

                                                                            <div class="info-editor-box-value">
                                                                                <div class="info-editor-box-value-text">
                                                                                    {{$user->phone}}

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    @endif
                                                                    @if (checkPrivacyInNetwork(getSocialPrivacyofUser('gender',$user),$user->id)) 
                                                                    <li class="social-info-editor-box-li custom-padding">
                                                                        <div class="info-editor-box">
                                                                            <div class="info-editor-box-title">
                                                                                <div class="info-editor-box-title-text">
                                                                                    Gender
                                                                                </div>
                                                                            </div>

                                                                            <div class="info-editor-box-value">
                                                                                <div class="info-editor-box-value-text"
                                                                                     id="gender-text">
                                                                                    {{$user->gender}}

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    @endif
                                                                </ul>
                                                            </div>
                                                        </div>                                                             
                                                   
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-card">
                                            <div class="content-card-inner">
                                                <div class="content-top-bar custom-padding">
                                                    <div class="content-top-bar-inner">
                                                        <div class="content-top-bar-title">
                                                            <div class="text">
                                                                Photos/Gallery
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content-card-content">
                                                    <div class="content-card-content-inner">
                                                        <div class="photo-galary-grid">
                                                            <div class="photo-galary-grid-inner">
                                                                @foreach($images as $image)
                                                                    <div class="photo-grid-col">
                                                                        <div class="photo-grid-col-inner">
                                                                            <img src="{{$image}}" alt="{{$image}}">
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="see-all custom-padding">
                                                        <div class="see-all-inner">
                                                            <a href="{{route('gallery',['all'])}}">See All</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-card">
                                            <div class="content-card-inner">
                                                <div class="content-top-bar custom-padding">
                                                    <div class="content-top-bar-inner">
                                                        <div class="content-top-bar-title">
                                                            <div class="text">
                                                                Friends ({{getFriendsList($user->id)->count()}})
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content-card-content">
                                                    <div class="content-card-content-inner">
                                                        <div class="friend-grid">
                                                            <div class="friend-grid-inner">
                                                                @if(getFriendsList($user->id)->count()>0)
                                                                    @foreach(getFriendsListUsers($user->id) as $friend)
                                                                        <div class="friend-grid-col">
                                                                            <div class="friend-grid-col-inner">
                                                                                <div class="firend-grid-col-image">
                                                                                    <img src="{{$friend->profile_image()}}"
                                                                                         alt="">
                                                                                </div>
                                                                                <div class="friend-grid-col-text">
                                                                                    <a href="{{url('profile-view/'.$friend->id)}}"
                                                                                       class="text-decoration-none text-muted">{{$friend->fullName()}}</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                @else
                                                                    <i class="text-muted ml-4">No friend</i>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="see-all custom-padding">
                                                        <div class="see-all-inner">
                                                            <a href="{{route('network',['friends'])}}">See All</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-side-02">
                                    @include('ambassador.profile.components.show_posts')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="privacy_dropdown" style='display: none'>
        <ul class="set-privacy-dropdown-ul">
            <li class="set-privacy-dropdown-li" data-value="{{Privacy::PRIV_FRIENDS}}">
                <div class="set-privacy-dropdown-icon">
                    <img src="{{url('ambassador_assets/images/icons/users.svg')}}" alt=""> <span
                            class="text">Friends</span>
                </div>
            </li>
            <li class="set-privacy-dropdown-li" data-value="{{Privacy::PRIV_PUBLIC}}">
                <div class="set-privacy-dropdown-icon">
                    <img src="{{url('ambassador_assets/images/icons/globe.svg')}}" alt=""> <span
                            class="text">Public</span>
                </div>
            </li>
            <li class="set-privacy-dropdown-li" data-value="{{Privacy::PRIV_CONNECTIONS}}">
                <div class="set-privacy-dropdown-icon">
                    <img src="{{url('ambassador_assets/images/icons/connection.svg')}}" alt=""> <span class="text">Connections</span>
                </div>
            </li>
            <li class="set-privacy-dropdown-li" data-value="{{Privacy::PRIV_TIER_1}}">
                <div class="set-privacy-dropdown-icon">
                    <img src="{{url('ambassador_assets/images/icons/personal-network.svg')}}" alt=""> <span
                            class="text">Personal TR 01</span>
                </div>
            </li>
            <li class="set-privacy-dropdown-li" data-value="{{Privacy::PRIV_TIER_2}}">
                <div class="set-privacy-dropdown-icon">
                    <img src="{{url('ambassador_assets/images/icons/extended-network.svg')}}" alt=""> <span
                            class="text">Extended TR 02</span>
                </div>
            </li>
        </ul>
    </div>
@endsection
<script src="{{url('index.js')}}"></script>
@push('scripts')
    <script>
        $(function () {
            showControls('{{$user->id}}');
            $(document).on('click', '#add-as-friend', function () {
                var to = $(this).attr('data-to');
                $.ajax({
                    type: "POST",
                    url: "{{route('friends.send.request')}}",
                    dataType: "JSON",
                    data: {'to': to, _token: '{{csrf_token()}}'},
                    success: function (data) {
                        showControls('{{$user->id}}');
                    },
                    error: function (xhr) {
                        erroralert(xhr);
                    }
                });
            });
            $(document).on('click', '.cancel-friend-request', function () {
                var id = $(this).attr('data-id');
                $.ajax({
                    type: "POST",
                    url: "{{route('friends.cancel.request')}}",
                    dataType: "JSON",
                    data: {'id': id, _token: '{{csrf_token()}}'},
                    success: function (data) {
                        showControls('{{$user->id}}');
                    },
                    error: function (xhr) {
                        erroralert(xhr);
                    }
                });
            });
            $(document).on('click', '.cancel-connection-request', function () {
                var id = $(this).attr('data-id');
                $.ajax({
                    type: "POST",
                    url: "{{route('connections.cancel.request')}}",
                    dataType: "JSON",
                    data: {'id': id, _token: '{{csrf_token()}}'},
                    success: function (data) {
                        showControls('{{$user->id}}');
                    },
                    error: function (xhr) {
                        erroralert(xhr);
                    }
                });
            });
            $(document).on('click', '.remove-friend', function () {
                var id = $(this).attr('data-id');
                $.ajax({
                    type: "POST",
                    url: "{{route('friends.remove.friend')}}",
                    dataType: "JSON",
                    data: {'id': id, _token: '{{csrf_token()}}'},
                    success: function (data) {
                        showControls('{{$user->id}}');
                    },
                    error: function (xhr) {
                        erroralert(xhr);
                    }
                });
            });
            $(document).on('click', '.remove-connection', function () {
                var id = $(this).attr('data-id');
                $.ajax({
                    type: "POST",
                    url: "{{route('connections.remove.connection')}}",
                    dataType: "JSON",
                    data: {'id': id, _token: '{{csrf_token()}}'},
                    success: function (data) {
                        showControls('{{$user->id}}');
                    },
                    error: function (xhr) {
                        erroralert(xhr);
                    }
                });
            });
            $(document).on('click', '.friend-request-sent', function () {
                var id = $(this).attr('data-id');
                var status = null;
                if ($(this).hasClass('approve')) {
                    status = '{{Friends::STATUS_APPROVED}}'
                }
                if ($(this).hasClass('decline')) {
                    status = '{{Friends::STATUS_REJECTED}}'
                }

                $.ajax({
                    type: "POST",
                    url: "{{route('friends.action')}}",
                    dataType: "JSON",
                    data: {'id': id, 'status': status, _token: '{{csrf_token()}}'},
                    success: function (data) {
                        showControls('{{$user->id}}');
                    },
                    error: function (xhr) {
                        erroralert(xhr);
                    }
                });
            });
            $(document).on('click', '.connection-request-sent', function () {
                var id = $(this).attr('data-id');
                var status = null;
                if ($(this).hasClass('approve')) {
                    status = '{{Connections::STATUS_APPROVED}}'
                }
                if ($(this).hasClass('decline')) {
                    status = '{{Connections::STATUS_REJECTED}}'
                }

                $.ajax({
                    type: "POST",
                    url: "{{route('connections.action')}}",
                    dataType: "JSON",
                    data: {'id': id, 'status': status, _token: '{{csrf_token()}}'},
                    success: function (data) {
                        showControls('{{$user->id}}');
                    },
                    error: function (xhr) {
                        erroralert(xhr);
                    }
                });
            });
            $(document).on('click', '#add-as-connection', function () {
                var to = $(this).attr('data-to');
                $.ajax({
                    type: "POST",
                    url: "{{route('connections.send.request')}}",
                    dataType: "JSON",
                    data: {'to': to, _token: '{{csrf_token()}}'},
                    success: function (data) {
                        showControls('{{$user->id}}');
                    },
                    error: function (xhr) {
                        erroralert(xhr);
                    }
                });
            });

        });

        function showControls(id) {
            $.ajax({
                type: "POST",
                url: "{{route('ambassador.show.control')}}",
                dataType: "JSON",
                data: {'id': id, _token: '{{csrf_token()}}'},
                success: function (data) {
                    $('.profile-action-btns-inner').html(data);
                },
                error: function (xhr) {
                    erroralert(xhr);
                }
            });
        }
    </script>
    @stack('subscripts')
@endpush

