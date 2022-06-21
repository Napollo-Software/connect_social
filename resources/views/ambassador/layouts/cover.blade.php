
<div class="profile-box-cover">
    <div class="profile-box-cover-inner">
        <div class="profile-box-cover-image">
            <img src="ambassador_assets/images/cover/cover-bg.svg" alt="">
            <form id="update_cover_photo_form" enctype="multipart/form-data" class="d-none">
                <input type="file" name="cover_photo" id="cover_photo_input">
            </form>
            <div class="edit-button upload-selector" data-target="#cover_photo_input">
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
                                    <img src="{{auth()->user()->profile_image()}}" alt="">
                                    <form id="update_profile_photo_form" enctype="multipart/form-data" class="d-none">
                                        <input type="file" name="profile_photo" id="profile_photo_input">
                                    </form>
                                    <div class="edit-button upload-selector" data-target="#profile_photo_input">
                                        <div class="edit-button-inner">
                                            <span class="icon"><span class="ti-pencil-alt"></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="profile-box-info-name">
            <div class="profile-box-info-name-inner">
                <div class="profile-box-info-name-main">
                    <div class="profile-box-info-name-text">
                        <span>{{auth()->user()->fullName()}}</span>
                    </div>
                    <div class="edit-button open-editor-modal" data-toggle="modal" data-target="#update-name-modal">
                        <div class="edit-button-inner">
                            <span class="icon"><span class="ti-pencil-alt"></span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="profile-box-info-type text-center">
            <span>{{auth()->user()->roles->name}}</span>

        </div>
    </div>
</div>
