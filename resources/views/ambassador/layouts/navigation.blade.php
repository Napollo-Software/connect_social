<div class="profile-site-navigation">
    <div class="container">
        <div class="profile-site-navigation-inner">
            <ul class="profile-site-navigation-ul">
                <li class="profile-site-navigation-li">
                    <a href="javascript:void(0)" class="profile-site-navigation-link">
               <span class="icon">
                <img src="{{url('ambassador_assets/images/icons/user.png')}}" alt="">
               </span>
                        <span class="text">
               Profile
               </span>
                    </a>
                    <div class="navigation-drop-down">
                        <div class="navigation-drop-down-inner">
                            <ul class="navigation-drop-down-">
                                <li class="navigation-drop-down-li">
                                    <a href="{{route('home')}}" class="navigation-drop-down-link">
                                        <div class="icon"><img
                                                    src="{{asset('ambassador_assets/images/nav-icon/home.png')}}"
                                                    alt=""></div>
                                        <div class="text">Home</div>
                                    </a>
                                </li>
                                <li class="navigation-drop-down-li">
                                    <a href="{{route('ambassador.profile')}}" class="navigation-drop-down-link">
                                        <div class="icon"><img
                                                    src="{{asset('ambassador_assets/images/nav-icon/social-information.png')}}"
                                                    alt=""></div>
                                        <div class="text">Social Information</div>
                                    </a>
                                </li>
                                <li class="navigation-drop-down-li">
                                    <a href="{{route('gallery',['friends'])}}" class="navigation-drop-down-link">
                                        <div class="icon"><img
                                                    src="{{asset('ambassador_assets/images/nav-icon/gallery.png')}}"
                                                    alt=""></div>
                                        <div class="text">Gallery</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="profile-site-navigation-li {{Route::currentRouteName()=='ambassador.home'?'active':''}}">
                    <a href="javascript:void(0)" class="profile-site-navigation-link">
                        <span class="icon">
                            <img src="{{url('ambassador_assets/images/nav-icon/social.png')}}" alt="">
                        </span>
                        <span class="text">Social</span>
                    </a>
                    <div class="navigation-drop-down">
                        <div class="navigation-drop-down-inner">
                            <ul class="navigation-drop-down-">
                                <li class="navigation-drop-down-li">
                                    <a href="{{route('ambassador.home')}}" class="navigation-drop-down-link">
                                        <div class="icon">
                                            <img src="{{asset('ambassador_assets/images/icons/globe.svg')}}" alt="">
                                        </div>
                                        <div class="text">Everyone</div>
                                    </a>
                                </li>
                                <li class="navigation-drop-down-li">
                                    <a href="{{route('ambassador.home',['friends'])}}"
                                       class="navigation-drop-down-link">
                                        <div class="icon"><img
                                                    src="{{asset('ambassador_assets/images/icons/users.svg')}}" alt="">
                                        </div>
                                        <div class="text">Friends</div>
                                    </a>
                                </li>
                                <li class="navigation-drop-down-li">
                                    <a href="{{route('ambassador.home',['connections'])}}"
                                       class="navigation-drop-down-link">
                                        <div class="icon"><img
                                                    src="{{asset('ambassador_assets/images/icons/connection.svg')}}"
                                                    alt=""></div>
                                        <div class="text">Connections</div>
                                    </a>
                                </li>
                                <li class="navigation-drop-down-li">
                                    <a href="{{route('ambassador.home',['tier-1'])}}" class="navigation-drop-down-link">
                                        <div class="icon"><img
                                                    src="{{asset('ambassador_assets/images/icons/personal-network.svg')}}"
                                                    alt=""></div>
                                        <div class="text">Personal Network</div>
                                    </a>
                                </li>
                                <li class="navigation-drop-down-li">
                                    <a href="{{route('ambassador.home',['tier-2'])}}" class="navigation-drop-down-link">
                                        <div class="icon"><img
                                                    src="{{asset('ambassador_assets/images/icons/extended-network.svg')}}"
                                                    alt=""></div>
                                        <div class="text">Extended Network</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="profile-site-navigation-li">
                    <a href="javascript:void(0)" class="profile-site-navigation-link">
               <span class="icon">
               <img src="{{url('ambassador_assets/images/nav-icon/network.png')}}" alt="">
               </span>
                        <span class="text">Network</span>
                    </a>
                </li>
                <li class="profile-site-navigation-li">
                    <a href="javascript:void(0)" class="profile-site-navigation-link">
               <span class="icon">
               <img src="{{url('ambassador_assets/images/nav-icon/shop.png')}}" alt="">
               </span>
                        <span class="text">Shops</span>
                    </a>
                </li>
                <li class="profile-site-navigation-li">
                    <a href="javascript:void(0)" class="profile-site-navigation-link">
               <span class="icon">
               <img src="{{url('ambassador_assets/images/nav-icon/receipts.png')}}" alt="">
               </span>
                        <span class="text">Receipts</span>
                    </a>
                </li>
                <li class="profile-site-navigation-li">
                    <a href="javascript:void(0)" class="profile-site-navigation-link">
               <span class="icon">
               <img src="{{url('ambassador_assets/images/nav-icon/incentive.png')}}" alt="">
               </span>
                        <span class="text">Incentives</span>
                    </a>
                </li>
                <li class="profile-site-navigation-li">
                    <a href="javascript:void(0)" class="profile-site-navigation-link">
               <span class="icon">
               <img src="{{url('ambassador_assets/images/nav-icon/wallet.png')}}" alt="">
               </span>
                        <span class="text">Wallet</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
