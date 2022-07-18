@push('scripts')
    @if (\Session::has('message'))
        <script>
            $(function () {
                swal("KYC", "{!! Session::get('message') !!}", "warning")
            });
        </script>
    @endif
@endpush
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
                                            <a href="javascript:void(0)"><span class="ti-comment-alt"></span></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="profile-user-options-li">
                                    <div class="profile-user-options-inner">
                                        <div class="profile-user-options-icon">
                                            <div class="search-input-home-navigation-inner dropdown-box">
                                                <div class="search-input-home-navigation-main">
                                                    <!-- <input type='text' placeholder="Search by name" id='input-trigger-div'> -->
                                                    <button class="hover-button open-dropdown" data-target=".search-menu-02"><span class="ti-search"></span></button>
                                                </div>
                                                <div class="recent-searches-box custom-dropdown search-menu-02" id="recent-searches-box" style="display: none;">
                                                    <div class="recent-searches-box-inner">
                                                        <div class="recent-searches-box-main">
                                                            <div class="search-input-home-navigation-main">
                                                                <form action="http://127.0.0.1:8000/search" method="get">
                                                                    <div class="back-btn close-recent-search" onclick="document.getElementById('recent-searches-box').style.display = 'none'">
                                                                        <span class="ti-arrow-left"></span>
                                                                    </div>
                                                                    <input type="text" placeholder="Search by name" name="key" class="key-drop-down" id="key-dropdown" required="" autocomplete="off">
                                                                    <button class="search-btn black-button" type="submit"><span class="ti-search"></span></button>
                                                                </form>
                                                            </div>
                                                            <div class="recent-search-box">
                                                                <div class="title">Search Results</div>
                                                                <div class="recent-search-list">
                                                                    <ul class="recent-search-ul">
                                                                        <li class="recent-search-li">
                                                                            <div class="recent-search-list-div">
                                                                                <div class="recent-search-list-inner">
                                                                                    <div class="recent-search-rofile">
                                                                                        <div class="profile-text">
                                                                                            <small><i>No search results</i></small>
                                                                                        </div>
                                                                                    </div>
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
                                                    <a href="{{route('ambassador.profile')}}"><i class="fa fa-user"></i> My Profile</a>
                                                </li>
                                                <li class="user-dropdown-li">
                                                    <a href="javascript:void(0)" class="open-modal" data-modal="#Send-InvitationModal"><i class="fa fa-share"></i> Send Invite</a>
                                                </li>
                                                <li class="user-dropdown-li">
                                                    <a href="javascript:void(0)"><i class="fa fa-cogs"></i> Settings</a>
                                                </li>
                                                <li class="user-dropdown-li">
                                                    <a href="javascript:void(0)"><span class="ti-help-alt"></span> FAQ's</a>
                                                </li>
                                                <li class="user-dropdown-li">
                                                    <a href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Log out</a>
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
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
