<div class="profile-box-cover">
    <div class="profile-box-cover-inner">
        <div class="profile-box-cover-image">
            <img src="{{$user->details->coverPhoto()}}" alt="" id="cover_photo_preview">
            @if($user->id==auth()->user()->id)
                <form id="update_cover_photo_form" enctype="multipart/form-data" class="d-none">
                    @csrf
                    <input type="file" name="cover" id="cover_photo_input"
                           onchange="$('#update_cover_photo_form').submit()">
                </form>
                <div class="edit-button upload-selector {{--with-bg--}}" title="Edit cover photo" data-target="#cover_photo_input">
                    <div class="edit-button-inner">
                        <span class="icon"><span class="ti-camera"></span></span>{{-- <i>Edit cover photo</i>--}}
                    </div>
                </div>
            @endif
        </div>
        <div class="profile-box-user-info">
            <div class="profile-box-user-info-inner">
                <div class="profile-box-user-info-main">
                    <div class="profile-box-photo">
                        <div class="profile-box-photo-inner">
                            <div class="profile-box-photo-main">
                                <div class="profile-box-photo-image">
                                    <img src="{{$user->profile_image()}}" alt="" class="profile_photo_preview">
                                    @if($user->id==auth()->user()->id)
                                        <form id="update_profile_photo_form" enctype="multipart/form-data"
                                              class="d-none">
                                            @csrf
                                            <input type="file" name="profile" id="profile_photo_input"
                                                   onchange="$('#update_profile_photo_form').submit()">
                                        </form>
                                        @if (auth()->user()->details->kyc_status==Kyc::STATUS_APPROVED)
                                        <div class="edit-button upload-selector" data-target="#profile_photo_input">
                                            <div class="edit-button-inner">
                                                <span class="icon"><span class="ti-pencil-alt"></span></span>
                                            </div>
                                        </div>
                                        @endif
                                    @endif
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
                        <span class="full-name-of-current-user" title="{{$user->id}}">{{$user->fullName()}}</span>
                    </div>
                    @if($user->id==auth()->user()->id)
                        <div class="edit-button open-editor-modal" data-toggle="modal" data-target="#update-name-modal">
                            <div class="edit-button-inner">
                                <span class="icon"><span class="ti-pencil-alt"></span></span>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="profile-box-info-type text-center">
            <span>{{$user->roles->name}}</span>
        </div>
        @if($user->id!=auth()->user()->id)
            <div class="profile-action-btns">
                <div class="profile-action-btns-inner">

                </div>
            </div>
        @endif
    </div>
</div>
@if($user->id==auth()->user()->id)
    <div class="modal fade" id="update-name-modal" tabindex="-1" role="dialog" aria-labelledby="update-name-modalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="update-name-modalLabel"><i class="ti-pencil"></i> Update Name</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="change_name_form">
                    <div class="modal-body">
                        @csrf
                        <div class="row">
                            <div class="col-md-6"> 
                                <div class="form-group">
                                    <label for="fname">First Name</label>
                                    <input type="text" id="fname" name="fname" class="form-control"
                                           value="{{$user->fname}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lname">Last Name</label>
                                    <input type="text" class="form-control" value="{{$user->lname}}" name="lname"
                                           id="lname">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer share-post-button">
                        <button type="button" data-dismiss="modal">Close</button>
                        <button type="submit">Save changes</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endif
