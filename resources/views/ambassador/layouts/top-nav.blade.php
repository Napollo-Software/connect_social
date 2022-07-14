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
                                <a href="{{route('wallet.dashboard')}}">My Balance</a>
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
                            <a href="{{url('')}}">
                                <img src="{{url('assets/images/logo.png')}}" alt="">
                            </a>
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
                                            <span class="ti-bell"></span>
                                        </div>
                                    </div>
                                </li>
                                <li class="profile-user-options-li">
                                    <div class="profile-user-options-inner">
                                        <div class="profile-user-options-icon">
                                            <span class="ti-help-alt"></span>
                                        </div>
                                    </div>
                                </li>
                                <li class="profile-user-options-li user-pic open-dropdown dropdown-box" data-target=".drop-00">
                                    <div class="profile-user-options-inner">
                                        <div class="profile-user-options-icon">
                                            <img src="{{auth()->user()->profile_image()}}" alt="" class="profile_photo_preview">
                                        </div>
                                        <div class="user-dropdown-inner drop-00 custom-dropdown left-dropdown">
                                            <ul class="user-dropdown-ul">
                                                <li class="user-dropdown-li">
                                                    <a href="{{route('ambassador.profile')}}">My Profile</a>
                                                </li>
                                                <li class="user-dropdown-li">
                                                    <a href="javascript:void(0)" class="open-modal" data-modal="#Send-InvitationModal">Send Invite</a>
                                                </li>
                                                <li class="user-dropdown-li">
                                                    <a href="javascript:void(0)">Settings</a>
                                                </li>
                                                <li class="user-dropdown-li">
                                                    <a href="{{ route('logout') }}"
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
