<div class="profile-box-cover">
    <div class="profile-box-cover-inner">
        <div class="profile-box-cover-image">
            <img src="ambassador_assets/images/cover/cover-bg.svg" alt="">
            <div class="edit-button">
                <div class="edit-button-inner">
                    <span class="icon"><span class="ti-camera"></span></span> <i>Edit cover photo</i>
                </div>
            </div>
        </div>
        <div class="profile-box-user-info">
            <div class="profile-box-user-info-inner">
                <div class="profile-box-user-info-main">
                    <div class="profile-box-photo">
                        <div class="profile-box-photo-inner">
                            <div class="profile-box-photo-main">
                                <div class="profile-box-photo-image">
                                    <img
                                            @if(auth()->user()->profile)
                                            src="{{Storage::disk('local')->url('/profile/'.auth()->user()->profile)}}"
                                            @else
                                            src="admin_assets//images/avatars/avatar-2.png"
                                            @endif

                                            alt="">
                                    <div class="edit-button">
                                        <div class="edit-button-inner">
                                            <span class="icon"><span class="ti-pencil-alt"></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-box-info-name">
                        <div class="profile-box-info-name-text">
                            {{auth()->user()->fname}}
                            {{auth()->user()->lname}}

                        </div>
                        <div class="edit-button">
                            <div class="edit-button-inner">
                                <span class="icon"><span class="ti-pencil-alt"></span></span>
                            </div>
                        </div>
                    </div>
                    <div class="profile-box-info-type text-center">
                        {{auth()->user()->roles->name}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>