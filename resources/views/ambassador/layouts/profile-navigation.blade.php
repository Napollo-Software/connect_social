<div class="profile-navigation">
    <div class="container">
        <div class="profile-navigation-inner">
            <div class="profile-navigation-nav">
                <ul class="profile-navigation-ul">
                    <li class="profile-navigation-li"><a href="javascript:void(0)" class="profile-navigation-link">Home/Social</a></li>
                    
                    <li class="profile-navigation-li {{Route::currentRouteName()=='home'?'active':''}}"><a href="{{route('home')}}" class="profile-navigation-link">Social Information</a></li>
                    
                    <li class="profile-navigation-li {{Route::currentRouteName()=='gallery'?'active':''}}"><a href="{{route('gallery')}}" class="profile-navigation-link">Gallery</a></li>
                    
                    <li class="profile-navigation-li {{in_array(Route::currentRouteName(),['friends.show','connections.show'])?'active':''}}" ><a href="{{route('friends.show')}}" class="profile-navigation-link">Friends({{getFriendsList($user->id)->count()}})</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
