<div class="profile-navigation">
    <div class="container">
        <div class="home-navigation-inner">
            <div class="home-navigation-nav">
                <div class="inner-navigation-logo to-show-sticky">
                    <div class="inner-navigation-logo-image">
                        <img src="assets/images/favicon" alt="">
                    </div>
                </div>
                <div class="search-input-home-navigation">
                    <div class="search-input-home-navigation-inner">
                        <div class="search-input-home-navigation-main">
                            <input type='text' placeholder="Search by name" id='input-trigger-div'>
                            <button class='search-btn black-button'><span class="ti-search"></span></button>
                        </div>
                        <div class="recent-searches-box" id="recent-searches-box">
                            <div class="recent-searches-box-inner">
                                <div class="recent-searches-box-main">
                                    <div class="search-input-home-navigation-main">
                                        <form action="{{url('search')}}" method="get">
                                            <div class="back-btn close-recent-search" onclick="document.getElementById('recent-searches-box').style.display = 'none'">
                                                <span class="ti-arrow-left"></span>
                                            </div>
                                            <input type='text' placeholder="Search by name" name="key" id="key" required>
                                            <button class='search-btn black-button' type="submit"><span class="ti-search"></span></button>
                                        </form>
                                    </div>
                                    <div class="recent-search-box">
                                        <div class="title">Recent Searches</div>
                                        <div class="recent-search-list">
                                            <ul class="recent-search-ul">
                                                <li class="recent-search-li">
                                                    <div class="recent-search-list-div">
                                                        <div class="recent-search-list-inner">
                                                            <div class="recent-search-rofile">
                                                                <div class="profile-image">
                                                                    <img src="assets/images/user-profile/user-01.png" alt="">
                                                                </div>
                                                                <div class="profile-text">
                                                                    <a href='javascript:void(0)'>User Name</a>
                                                                </div>
                                                            </div>
                                                            <div class="remove-div">
                                                                <span class="ti-close"></span>
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
                <ul class="home-navigation-ul">
                    <li class="home-navigation-li {{Route::getCurrentRoute()->type=='friends'?'active':''}}"><a href="{{url('home/friends')}}" class="home-navigation-link">Friends</a></li>
                    <li class="home-navigation-li {{Route::getCurrentRoute()->type=='connections'?'active':''}}"><a href="{{url('home/connections')}}" class="home-navigation-link">Connections</a></li>
                    <li class="home-navigation-li"><a href="javascript:void(0)" class="home-navigation-link">Personal Network (<small>Tier 01</small>)</a></li>
                    <li class="home-navigation-li"><a href="javascript:void(0)" class="home-navigation-link">Extended Network (<small>Tier 02</small>)</a></li>
                </ul>
                <div class="message-button">
                    <div class="message-button-inner">
                        <a href="{{url('chat')}}" class='black-button text-decoration-none'><span class="ti-comment-alt"></span> <span class="text"> Message</span></a>
                    </div>
                </div>
                <div class="inner-navigation-sub-menu to-show-sticky">
                    <div class="inner-navigation-sub-menu-inner">
                        <div class="inner-navigation-sub-menu-main"></div>
                        <ul class="inner-navigation-sub-menu-ul">
                            <li class="inner-navigation-sub-menu-li hover position  open-dropdown" data-target=".drop-00124">
                                <span class="nav-icon"><span class="ti-layout-grid4-alt"></span></span>
                                <div class="inner-mega-menu drop-00124">
                                    <div class="inner-mega-menu-inner">
                                        <div class="inner-mega-menu-main">
                                            <ul class="inner-mega-navigation-ul">
                                                <li class="inner-mega-navigation-li black-bg">
                                                    <a href="javascript:void(0)" class="inner-mega-navigation-link">
                                                    <span class="icon">
                                                        <img src="assets/images/icons/coin.svg" alt="">
                                                    </span>
                                                        <span class="text">$100</span>
                                                    </a>
                                                </li>
                                                <li class="inner-mega-navigation-li active">
                                                    <a href="javascript:void(0)" class="inner-mega-navigation-link">
                                                    <span class="icon">
                                                        <img src="assets/images/nav-icon/black-social.png" alt="">
                                                    </span>
                                                        <span class="text">
                                                        Social
                                                    </span>
                                                    </a>
                                                </li>
                                                <li class="inner-mega-navigation-li">
                                                    <a href="javascript:void(0)" class="inner-mega-navigation-link">
                                                    <span class="icon">
                                                        <img src="assets/images/nav-icon/black-network.png" alt="">
                                                    </span>
                                                        <span class="text">Network</span>
                                                    </a>
                                                </li>
                                                <li class="inner-mega-navigation-li">
                                                    <a href="javascript:void(0)" class="inner-mega-navigation-link">
                                                    <span class="icon">
                                                        <img src="assets/images/nav-icon/black-shop.png" alt="">
                                                    </span>
                                                        <span class="text">Shops</span>
                                                    </a>
                                                </li>
                                                <li class="inner-mega-navigation-li">
                                                    <a href="javascript:void(0)" class="inner-mega-navigation-link">
                                                    <span class="icon">
                                                        <img src="assets/images/nav-icon/black-bill.png" alt="">
                                                    </span>
                                                        <span class="text">Receipts</span>
                                                    </a>
                                                </li>
                                                <li class="inner-mega-navigation-li">
                                                    <a href="javascript:void(0)" class="inner-mega-navigation-link">
                                                    <span class="icon">
                                                        <img src="assets/images/nav-icon/black-incentive.png" alt="">
                                                    </span>
                                                        <span class="text">Incentives</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="inner-navigation-sub-menu-li hover"><span class="nav-icon"><span class="ti-bell"></span></span></li>
                            <li class="inner-navigation-sub-menu-li">
                                <div class="inner-navigation-sub-menu-li-profile  open-dropdown" data-target=".drop-0012">
                                    <div class="profile-user-options-icon">
                                        <img src="assets/images/user-profile/user-01.png" alt="">
                                    </div>
                                    <div class="user-dropdown-inner drop-0012">
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
                                                <a href="javascript:void(0)">Log out</a>
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
