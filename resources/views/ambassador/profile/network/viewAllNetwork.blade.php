@extends('ambassador.layouts.app')
@section('title')
    Network
@endsection
@section('content')
    <!-- @include('ambassador.layouts.friends-navigation') -->
    <div class="friends-grid">
        <div class="friends-grid-inner">
            <div class="container">
                <div class="gallary-top-bar">
                    <div class="gallary-top-bar-inner">
                        <div class="network-filter">
                            <div class="network-filter-inner">
                                <div class="network-filter-inner-main">
                                    <div class="text">
                                        Social Network :
                                    </div>
                                    <div class="selected">
                                        <div class="icon">
                                            <img src="{{getPrivacyDetails($type)['url']}}" alt="">
                                        </div>
                                        <div class="text">
                                            {{getPrivacyDetails($type)['name']}}
                                        </div>
                                    </div>
                                </div>
                                <div class="network-dropdown">
                                    <div class="network-dropdown-inner">
                                        <div class="network-dropdown-main">
                                            <ul class="network-dropdown-ul">
                                                <li class="network-dropdown-li">
                                                    <a href="javascript:void(0)" class="network-link network-dropdown-link"  data-type="friends">
                                                        <div class="icon">
                                                            <img src="{{asset('ambassador_assets/images/icons/users.svg')}}" alt="">
                                                        </div>
                                                        <div class="text">
                                                            Friends <span class="count">{{count(getFriendsListUsers($user->id))}}</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="network-dropdown-li">
                                                    <a href="javascript:void(0)" class="network-link network-dropdown-link"  data-type="connections">
                                                        <div class="icon">
                                                            <img src="{{asset('ambassador_assets/images/icons/connection.svg')}}" alt="">
                                                        </div>
                                                        <div class="text">
                                                            Connections <span class="count">{{count(getConnectionsListUsers($user->id))}}</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="network-dropdown-li">
                                                    <a href="javascript:void(0)" class="network-link network-dropdown-link" data-type="tier-1">
                                                        <div class="icon">
                                                            <img src="{{asset('ambassador_assets/images/icons/personal-network.svg')}}" alt="">
                                                        </div>
                                                        <div class="text">
                                                            Personalized Network Tier 1 <span class="count">{{$user->tier_1()->count()}}</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="network-dropdown-li">
                                                    <a href="javascript:void(0)" class="network-link network-dropdown-link" data-type="tier-2">
                                                        <div class="icon">
                                                            <img src="{{asset('ambassador_assets/images/icons/extended-network.svg')}}" alt="">
                                                        </div>
                                                        <div class="text">
                                                            Extended Network Tier 2 <span class="count">{{$user->tier_2()->count()}}</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="selection-icon">
                            <div class="selection-privacy-text">
                            </div>
                            <div class="current-privacy">
                                <div class="icon">
                                    <img src="{{in_array($type,['friends','connections'])?getNetworkPrivacy($type)['url']:''}}" alt="">
                                </div>
                                <p>{{in_array($type,['friends','connections'])?getNetworkPrivacy($type)['name']:''}}</p>
                            </div>
                            <div class="selection-dropdown">
                                <div class="selection-dropdown-inner">
                                    <ul class="selection-dropdown-ul selected-type" data-type="{{$type}}">
                                        {{-- @foreach($reflection->getConstants() as $constant)
                                            <li class="selection-dropdown-li change-privacy" data-privacy="{{$constant}}">
                                                <div class="icon">
                                                    <img src="{{getPrivacyDetails($constant)['url']}}"
                                                         alt="">
                                                </div>
                                                {{getPrivacyDetails($constant)['name']}}
                                            </li>
                                        @endforeach --}}
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

    @push('scripts')
        <script>

            $(document).ready(function() {
                $(".selection-icon").click(function () {
                    $(".selection-dropdown").toggle();
                });
                $(document).on('click',".friend-grid-col-options-icon",function() {
                    $(this).find(".friend-grid-col-options-dropdown").toggle()
                });
               
                fetch('{{$type}}','{{$user->id}}');
                $(document).on('click','.network-link',function (e) {
                    e.preventDefault();
                    $('.inner-navigation-li.active').removeClass('active');
                    $(this).parent().addClass('active');
                    var type= $(this).attr('data-type');
                    $('.selected-type').attr('data-type',type);
                    fetch(type,'{{$user->id}}');
                    $('.selected.text').html();
                    window.history.replaceState({}, null, '/profile-view/viewAllnetwork/'+type);
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
                            $('.selection-privacy-text').text('Privacy :');
                            $('.current-privacy').find('img').attr('src',data.p.privacy.url);
                            $('.current-privacy').find('p').text(data.p.privacy.name);
                        } else{
                            $('.selection-privacy-text').text('');
                            $('.current-privacy').hide();
                        }
                        $('.selected .icon img').attr('src',data['privacy-details']['url']);
                        $('.selected .text').text(data['privacy-details']['name']);
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

