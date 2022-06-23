<div class="inner-navigation">
    <div class="inner-navigation-outer">
        <div class="container">
            <div class="inner-navigation-inner">
                <div class="inner-navigation-main">
                    <ul class="inner-navigation-ul">
                        <li class="inner-navigation-li {{Route::getCurrentRoute()->type==''?'active':''}}">
                            <a href="{{route('gallery')}}" class="inner-navigation-link">
                                                            <span class="icon">
                                                                <span class="ti-layout-grid3"></span>
                                                            </span>
                                <span class="text">All Media</span>
                            </a>
                        </li>
                        <li class="inner-navigation-li {{Route::getCurrentRoute()->type=='images'?'active':''}}">
                            <a href="{{route('gallery',['image'])}}" class="inner-navigation-link">
                                                            <span class="icon">
                                                                <span class="ti-gallery"></span>
                                                            </span>
                                <span class="text">Photos</span>
                            </a>
                        </li>
                        <li class="inner-navigation-li {{Route::getCurrentRoute()->type=='videos'?'active':''}}">
                            <a href="{{route('gallery',['video'])}}" class="inner-navigation-link">
                                                            <span class="icon">
                                                                <span class="ti-control-play"></span>
                                                            </span>
                                <span class="text">Videos</span>
                            </a>
                        </li>
                        <li class="inner-navigation-li {{Route::getCurrentRoute()->type=='audio'?'active':''}}">
                            <a href="{{route('gallery',['audio'])}}" class="inner-navigation-link">
                                                            <span class="icon">
                                                                <span class="ti-microphone"></span>
                                                            </span>
                                <span class="text">Audios</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
