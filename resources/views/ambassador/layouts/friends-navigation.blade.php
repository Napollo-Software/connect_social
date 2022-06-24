<div class="inner-navigation">
    <div class="inner-navigation-outer">
        <div class="container">
            <div class="inner-navigation-inner">
                <div class="inner-navigation-main">
                    <ul class="inner-navigation-ul">
                        <li class="inner-navigation-li {{Route::currentRouteName()=='friends.show'?'active':''}}">
                            <a href="{{route('friends.show')}}" class="inner-navigation-link">
                                <span class="icon">
                                    <img src="{{url('ambassador_assets/images/icons/users.svg')}}" alt="">
                                </span>
                                <span class="text">Friends <span id="total-friends">{{getFriendsList($user->id)->count()}}</span> </span>
                            </a>
                        </li>
                        <li class="inner-navigation-li {{Route::currentRouteName()=='connections.show'?'active':''}}">

                            <a href="{{route('connections.show')}}" class="inner-navigation-link">
                                <span class="icon">
                                    <img src="{{url('ambassador_assets/images/icons/connection.svg')}}" alt="">
                                </span>
                                <span class="text">Connections <span id="total-connections">{{getConnectionsList($user->id)->count()}}</span></span>
                            </a>
                        </li>
                        <li class="inner-navigation-li">
                            <a href="javascript:void(0)" class="inner-navigation-link">
                                <span class="icon">
                                    <img src="{{url('ambassador_assets/images/icons/personal-network.svg')}}" alt="">
                                </span>
                                <span class="text">Personalized Network-Tier 1</span>
                            </a>
                        </li>
                        <li class="inner-navigation-li">
                            <a href="javascript:void(0)" class="inner-navigation-link">
                                <span class="icon">
                                    <img src="{{url('ambassador_assets/images/icons/extended-network.svg')}}" alt="">
                                </span>
                                <span class="text">Extended Network-Tier 2</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>