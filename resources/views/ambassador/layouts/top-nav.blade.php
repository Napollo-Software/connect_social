<div class="profile-top-bar">
    <div class="profile-top-bar-inner">
        <div class="container">
            <div class="profile-top-bar-main">
                <div class="profile-top-bar-wallete">
                    <div class="profile-top-bar-wallete-inner">
                        <div class="profile-wallete-coin-image">
                            <img src="{{url('assets/images/icons/coin.png')}}" alt="">
                        </div>
                        <div class="profile-wallete-text">
                            <div class="profile-wallete-top-text">
                                My Balance
                            </div>
                            <div class="profile-wallete-balance">
                                10 Coins (Worth $1500)
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-logo">
                    <div class="site-logo-inner">
                        <div class="site-logo-main">
                            <img src="{{url('assets/images/logo.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="profile-user-options">
                    <div class="profile-user-options-inner">
                        <div class="profile-user-options-main">
                            <ul class="profile-user-options-ul">
                                <li class="profile-user-options-li">
                                    <div class="profile-user-options-inner">
                                        <div class="profile-user-options-icon">
                                            <img src="{{url('ambassador_assets/images/icons/bell.svg')}}" alt="">
                                        </div>
                                    </div>
                                </li>
                                <li class="profile-user-options-li">
                                    <div class="profile-user-options-inner">
                                        <div class="profile-user-options-icon">
                                            <img src="{{url('ambassador_assets/images/icons/info.svg')}}" alt="">
                                        </div>
                                    </div>
                                </li>
                                <li class="profile-user-options-li user-pic open-dropdown" data-target=".drop-00">
                                    <div class="profile-user-options-inner">
                                        <div class="profile-user-options-icon">
                                            <img src="{{auth()->user()->profile_image()}}" alt="">
                                        </div>
                                        <div class="user-dropdown-inner drop-00">
                                            <ul class="user-dropdown-ul">
                                                <li class="user-dropdown-li">
                                                    <a href="javascript:void(0)">My Profile</a>
                                                </li>
                                                <li class="user-dropdown-li">
                                                    <a href="javascript:void(0)">Settings</a>
                                                </li>
                                                <li class="user-dropdown-li">
                                                    <a href="javascript:void(0)">Settings</a>
                                                </li>
                                                <li class="user-dropdown-li">
                                                    <a ref="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Log out</a>
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
        </div>
    </div>
</div>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>