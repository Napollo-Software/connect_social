<div class="profile-site-navigation">
    <div class="container">
        <div class="profile-site-navigation-inner">
            <ul class="profile-site-navigation-ul">
                {{--<li class="profile-site-navigation-li {{(Route::currentRouteName()=='home')?'active':''}}">
					<a href="{{route('home')}}" class="profile-site-navigation-link"> <span class="icon">
                    <img src="{{url('ambassador_assets/images/nav-icon/home.png')}}" alt="">
                    </span> <span class="text">Timeline</span> </a>
				</li>
				--}}
                <li class="profile-site-navigation-li {{(Route::currentRouteName()=='ambassador.home')?'active':''}}">
                    <a href="javascript:void(0)" class="profile-site-navigation-link"> <span class="icon">
               <img src="{{url('ambassador_assets/images/nav-icon/connection.png')}}" alt="">
               </span> <span class="text">Timeline</span> </a>
                    <div class="navigation-drop-down">
                        <div class="navigation-drop-down-inner">
                            <ul class="navigation-drop-down-">
                                <li class="navigation-drop-down-li home-posts" data-type="public">
                                    <a href="{{route('home')}}" class="navigation-drop-down-link">
                                        <div class="icon"><img
                                                    src="{{asset('ambassador_assets/images/icons/globe.svg')}}" alt="">
                                        </div>
                                        <div class="text">Public</div>
                                    </a>
                                </li>
                                <li class="navigation-drop-down-li home-posts" data-type="friends">
                                    <a href="{{route('home')}}" class="navigation-drop-down-link">
                                        <div class="icon"><img
                                                    src="{{asset('ambassador_assets/images/icons/users.svg')}}" alt="">
                                        </div>
                                        <div class="text">Friends</div>
                                    </a>
                                </li>

                                <li class="navigation-drop-down-li home-posts" data-type="connections">
                                    <a href="{{route('home')}}" class="navigation-drop-down-link">
                                        <div class="icon"><img
                                                    src="{{asset('ambassador_assets/images/icons/connection.svg')}}"
                                                    alt=""></div>
                                        <div class="text">Connections</div>
                                    </a>
                                </li>
                                <li class="navigation-drop-down-li home-posts" data-type="tier-1">
                                    <a href="{{route('home')}}" class="navigation-drop-down-link">
                                        <div class="icon"><img
                                                    src="{{asset('ambassador_assets/images/icons/personal-network.svg')}}"
                                                    alt=""></div>
                                        <div class="text">Personal Network</div>
                                    </a>
                                </li>
                                <li class="navigation-drop-down-li home-posts" data-type="tier-2">
                                    <a href="{{route('home')}}" class="navigation-drop-down-link">
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
                <li class="profile-site-navigation-li {{(Route::currentRouteName()=='ambassador.profile' or Route::currentRouteName()=='gallery')?'active':''}}">
                    <a href="javascript:void(0)" class="profile-site-navigation-link"> <span class="icon">
               <img src="{{url('ambassador_assets/images/icons/user.png')}}" alt="">
               </span> <span class="text">
               Profile
               </span> </a>
                    <div class="navigation-drop-down">
                        <div class="navigation-drop-down-inner">
                            <ul class="navigation-drop-down-">
                                <li class="navigation-drop-down-li">
                                    <a href="{{route('ambassador.profile')}}" class="navigation-drop-down-link">
                                        <div class="icon"><img
                                                    src="{{asset('ambassador_assets/images/nav-icon/social-information.png')}}"
                                                    alt=""></div>
                                        <div class="text">Social Information</div>
                                    </a>
                                </li>
                                <li class="navigation-drop-down-li">
                                    <a href="{{route('gallery',['all'])}}" class="navigation-drop-down-link">
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
                <li class="profile-site-navigation-li {{(Route::currentRouteName()=='network')?'active':''}}">
                    <a href="{{route('network',['friends'])}}" class="profile-site-navigation-link"> <span class="icon">
               <img src="{{url('ambassador_assets/images/nav-icon/network.png')}}" alt="">
               </span> <span class="text" style="width:100px; text-align:center;">Social Network</span> </a>
                </li>
                <li class="profile-site-navigation-li">
                    <a href="javascript:void(0)" class="profile-site-navigation-link"> <span class="icon">
               <img src="{{url('ambassador_assets/images/nav-icon/shop.png')}}" alt="">
               </span> <span class="text">Shops</span> </a>
                </li>
                <li class="profile-site-navigation-li {{(Route::currentRouteName()=='ambassador.receipts')?'active':''}}">
                    <a href="{{route('ambassador.receipts')}}" class="profile-site-navigation-link"> <span class="icon">
               <img src="{{url('ambassador_assets/images/nav-icon/receipts.png')}}" alt="">
               </span> <span class="text">Receipts</span> </a>
                </li>
                <li class="profile-site-navigation-li">
                    <a href="javascript:void(0)" class="profile-site-navigation-link"> <span class="icon">
               <img src="{{url('ambassador_assets/images/nav-icon/incentive.png')}}" alt="">
               </span> <span class="text">Incentives</span> </a>
                </li>
                <li class="profile-site-navigation-li {{(Route::currentRouteName()=='wallet.dashboard')?'active':''}}">
                    <a href="javascript:void(0)" class="profile-site-navigation-link"> <span class="icon">
               <img src="{{url('ambassador_assets/images/nav-icon/wallet.png')}}" alt="">
               </span> <span class="text">Wallet</span> </a>
                    <div class="navigation-drop-down">
                        <div class="navigation-drop-down-inner">
                            <ul class="navigation-drop-down-">
                                <li class="navigation-drop-down-li">
                                    <a href="{{route('wallet.dashboard')}}" class="navigation-drop-down-link">
                                        <div class="icon"><img
                                                    src="{{asset('ambassador_assets/images/wallet-icons/dashboard.png')}}"
                                                    alt=""></div>
                                        <div class="text">Dashboard</div>
                                    </a>
                                </li>
                                <li class="navigation-drop-down-li">
                                    <a href="{{route('network.dashboard')}}" class="navigation-drop-down-link">
                                        <div class="icon"><img
                                                    src="{{asset('ambassador_assets/images/wallet-icons/earnings.png')}}"
                                                    alt=""></div>
                                        <div class="text">Network Earnings</div>
                                    </a>
                                </li>
                                <li class="navigation-drop-down-li">
                                    <a href="{{route('wallet.coin.packages')}}" class="navigation-drop-down-link">
                                        <div class="icon"><img
                                                    src="{{asset('ambassador_assets/images/wallet-icons/purchase.png')}}"
                                                    alt=""></div>
                                        <div class="text">Coin Purchase</div>
                                    </a>
                                </li>
                                <li class="navigation-drop-down-li">
                                    <a href="javascript:void(0)" class="navigation-drop-down-link">
                                        <div class="icon"><img
                                                    src="{{asset('ambassador_assets/images/wallet-icons/transaction.png')}}"
                                                    alt=""></div>
                                        <div class="text">Transactions</div>
                                    </a>
                                </li>
                                <li class="navigation-drop-down-li">
                                    <a href="javascript:void(0)" class="navigation-drop-down-link">
                                        <div class="icon"><img
                                                    src="{{asset('ambassador_assets/images/wallet-icons/card.png')}}"
                                                    alt=""></div>
                                        <div class="text">Payment Methods</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>