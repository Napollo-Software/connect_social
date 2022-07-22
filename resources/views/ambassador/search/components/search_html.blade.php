@foreach($results as $user)
<div class="search-result-box-single custom-padding">
    <div class="search-result-box-single-inner">
        <div class="search-result-box-profile-info">
            <div class="search-result-box-profile-image">
                <img src="{{$user->profile_image()}}" alt="">
            </div>
            <div class="search-result-box-profile-text">
                <div class="user-name">
                    <a href="{{url('profile-view/'.$user->username)}}" class="text-decoration-none text-secondary">{{$user->fullName()}}</a>
                </div>
                <div class="user-relation">
                    @if(in_array($user->id,$friends))
                        Friends
                    @elseif(in_array($user->id,$connections))
                        Connections
                    @endif
                </div>
            </div>
        </div>
        <div class="search-result-box-profile-actions">
            <div class="search-result-box-profile-buttons">
                @if(in_array($user->id,$friends))
                    <button class='black-button'>Remove Friend</button>
                @elseif(in_array($user->id,$connections))
                    <button class='black-button'>Remove Connection</button>
                @endif
                <a href="{{route('chat',['receiver'=>$user->id])}}" class='black-button text-decoration-none py-2'>Send Message</a>
            </div>
        </div>
    </div>
</div>
@endforeach