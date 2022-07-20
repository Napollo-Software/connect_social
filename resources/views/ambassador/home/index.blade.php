@extends('ambassador.layouts.app2')
@section('title')
Home
@endsection
@section('content') 
    @include('ambassador.home.layouts.navigation')
    <div class="profile-content">
        <div class="container"> 
            <div class="profile-content-inner">
                <div class="profile-content-boxs">
                    <div class="profile-content-boxs-single social-information-content-box">
                        <div class="social-information-content-inner">
                            <div class="content-sides">

                                <div class="content-side-01 hide-on-mobile-ads">
                                    <div class="content-cards">
                                        <div class="content-card">
                                            <div class="content-card-inner">
                                                <div class="content-top-bar">
                                                    <div class="content-top-bar-inner">
                                                        <div class="content-top-bar-title">
                                                            <div class="text">
                                                                Merchant Ads
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="add-image-inner">
                                                    <div class="add-image-main">
                                                        <img src="{{url('ambassador_assets/images/merchants/01.png')}}" alt="">
                                                    </div>
                                                </div>
                                                <div class="add-image-inner">
                                                    <div class="add-image-main">
                                                        <img src="{{url('ambassador_assets/images/merchants/02.png')}}" alt="">
                                                    </div>
                                                </div>
                                                <div class="add-image-inner m-0">
                                                    <div class="add-image-main">
                                                        <img src="{{url('ambassador_assets/images/merchants/03.png')}}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-side-02">
                                    <div class="content-cards"> 
                                        @include('ambassador.profile.components.add_post')
                                        @include('ambassador.home.components.show_posts')
                                    </div>
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
                    <img src="{{asset('ambassador_assets/images/icons/users.svg')}}" alt=""> <span
                            class="text">Friends</span>
                </div>
            </li>
            <li class="set-privacy-dropdown-li" data-value="{{Privacy::PRIV_PUBLIC}}">
                <div class="set-privacy-dropdown-icon">
                    <img src="{{asset('ambassador_assets/images/icons/globe.svg')}}" alt=""> <span
                            class="text">Public</span>
                </div>
            </li>
            <li class="set-privacy-dropdown-li" data-value="{{Privacy::PRIV_CONNECTIONS}}">
                <div class="set-privacy-dropdown-icon">
                    <img src="{{asset('ambassador_assets/images/icons/connection.svg')}}" alt=""> <span class="text">Connections</span>
                </div>
            </li>
            <li class="set-privacy-dropdown-li" data-value="{{Privacy::PRIV_TIER_1}}">
                <div class="set-privacy-dropdown-icon">
                    <img src="{{asset('ambassador_assets/images/icons/personal-network.svg')}}" alt=""> <span
                            class="text">Personal Tier 01</span>
                </div>
            </li>
            <li class="set-privacy-dropdown-li" data-value="{{Privacy::PRIV_TIER_2}}">
                <div class="set-privacy-dropdown-icon">
                    <img src="{{asset('ambassador_assets/images/icons/extended-network.svg')}}" alt=""> <span
                            class="text">Extended Tier 02</span>
                </div>
            </li>
        </ul>
    </div>
    @push('scripts')
        <script src="{{url('index.js')}}"></script>
 
        <script>
            setInterval(function(){
                offset = $(".profile-navigation").offset();
                var w = $(window);
                if(offset.top-w.scrollTop() == 0) {
                    $(".to-show-sticky").show();
                    $('.message-button-inner button').addClass('hide-text');
                    $('.profile-navigation-nav').removeClass('aligned')
                } else {
                    $(".to-show-sticky").hide();
                    $('.message-button-inner button').removeClass('hide-text');
                    $('.profile-navigation-nav').addClass('aligned')
                } 
            }, 100);

            $("#input-trigger-div").click(function() {
                $(".recent-searches-box").show();
                $(".recent-searches-box input").focus();
            });
        </script>
        @stack('subscripts')
    @endpush
@endsection

