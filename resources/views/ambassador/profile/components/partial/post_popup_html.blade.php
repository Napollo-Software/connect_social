<div class="single-post-pop-up-outer">
    <div class="single-post-pop-up-inner">
        <div class="single-post-pop-up-content">
            <div class="single-podt-box">
                <div class="single-podt-box-inner">
                    <div class="singal-post-top-bar custom-padding">
                        <div class="singal-post-top-bar-user-info">
                            <div class="close-post-popup">
                                <span class="ti-arrow-left"></span>
                            </div>
                            <div class="single-post-top-bar-photo">
                                <div class="single-post-top-bar-photo-inner">
                                    <img src="{{$post->user->profile_image()}}" alt="" class="profile_photo_preview">
                                </div>
                            </div>
                            <div class="singal-post-top-bar-post-detail">
                                <div class="singal-post-top-bar-post-detail-inner">
                                    <div class="user-name">
                                        {{$post->user->fullName()}}
                                    </div>
                                    <div class="date-and-privacy">
                                        <div class="time-stamp">
                                            <div class="date">{{$post->created_at->format('l d F Y')}}</div>
                                            <div class="at">at</div>
                                            <div class="time">{{$post->created_at->format('H:i')}} h</div>
                                        </div>
                                        <div class="privacy-icon">
                                            <img src="{{getPrivacyDetails($post->privacy)['url']}}" title="{{getPrivacyDetails($post->privacy)['name']}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="singal-post-top-bar-options d-none open-dropdown dropdown-box" data-target=".post-actions-{{$post->id}}">
                            <div class="icon">
                                <span class="ti-angle-down"></span>
                            </div>
                            <div class="singal-post-top-bar-options-bar custom-dropdown post-actions-{{$post->id}}" style="display: none;">
                                <div class="singal-post-top-bar-options-bar-inner">
                                    <ul class="singal-post-top-bar-options-ul">
                                        <li class="singal-post-top-bar-options-li">
                                            <a href="javascript:void(0)"
                                               class="singal-post-top-bar-options-link open-post-editor"
                                               data-target=".edit-post-box-{{$post->id}}"
                                               data-close=".single-post-{{$post->id}}">Edit</a>
                                        </li>
                                        <li class="singal-post-top-bar-options-li">
                                            <a href="javascript:void(0)"
                                               class="singal-post-top-bar-options-link post-delete"
                                               data-id="{{$post->id}}">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="singal-post-content single-post-{{$post->id}}">
                        <div class="singal-post-content-pop-up">
                            <div class="text">
                                <p>{{$post->details}}</p>
                            </div>
                            <div class="image">
                            @if($post->assets()->exists())
                                @if($post->assets->type=='link')
                                    <a href="{{$post->assets->data()}}">{{$post->assets->data()}}</a>
                                @elseif($post->assets->type=='image')
                                    <img src="{{$post->assets->data()}}" alt="">
                                @elseif($post->assets->type=='video')
                                    <video src="{{$post->assets->data()}}" style="width: 100%;" controls></video>

                                @elseif($post->assets->type=='audio')
                                    <audio controls>
                                        <source src="{{$post->assets->data()}}">
                                    </audio>
                                @endif
                            @endif
                            </div>
                        </div>
                    </div>
                    <div class="edit-post-box edit-post-box-{{$post->id}}" style="display:none">
                        <form class="edit_post_form edit_post_form_{{$post->id}}" id="edit_post_form_{{$post->id}}">
                            @csrf
                            <div class="modal fade" id="p-edit-post-upload-file-modal-{{$post->id}}" data-post=""
                                 tabindex="-1" role="dialog" aria-labelledby="create-post-upload-file-modalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="edit-post-upload-file-modalLabel">Add File</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <input type="hidden" class="form-control" name="file_type"
                                                   id="p-file_type{{$post->id}}">
                                            <div class="row edit_attachments_div">
                                                <div class="col-md-12 file-div">
                                                    <div class="form-group">
                                                        <label>Choose File</label>
                                                        <input type="file" class="form-control pt-1 pb-3"
                                                               name="attachment" id="attachment{{$post->id}}">
                                                    </div>
                                                </div>

                                                <div class="col-md-12 url-div">
                                                    <div class="form-group">
                                                        <label>Paste Link</label>
                                                        <input type="text" class="form-control" placeholder="Paste Link"
                                                               name="url" id="url{{$post->id}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" data-post="{{$post->id}}"
                                                    class="btn btn-secondary p-edit-post-close-btn">Close
                                            </button>
                                            <button type="button" data-post="{{$post->id}}"
                                                    class="btn btn-primary edit-post-upload-btn" data-type="post-popup">Upload
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="edit-post-box-inner">
                                <div class="edit-post-box-main">
                                    <input type="hidden" value="{{$post->id}}" name="id">
                                    <input type="hidden" value="{{$post->privacy}}" name="privacy"
                                           id="edit_post_privacy">
                                    <textarea rows="{{$post->details?'10':'1'}}" name="details"
                                              style="height: auto!important;">{{$post->details}}</textarea>
                                </div>
                                @if($post->assets()->exists())
                                    <div class="post-edit-photo">
                                        <div class="post-edit-photo-outer">
                                            <div class="post-edit-photo-main post-edit-photo-main-{{$post->id}}">
                                                @if($post->assets->type=='link')
                                                    <a href="{{$post->assets->data()}}">{{$post->assets->data()}}</a>
                                                @elseif($post->assets->type=='image')
                                                    <img src="{{$post->assets->data()}}" alt="">
                                                @elseif($post->assets->type=='video')
                                                    <video src="{{$post->assets->data()}}" style="width: 100%;"
                                                           controls></video>
                                                @elseif($post->assets->type=='audio')
                                                    <audio controls>
                                                        <source src="{{$post->assets->data()}}">
                                                    </audio>
                                                @endif
                                                <div class="delete-photo-div">
                                                    <div class="delete-photo-div-inner">
                                                        <div class="delete-photo-div-main">
                                                            <span class="ti-trash remove-post-attachment"
                                                                  data-id="{{$post->assets->id}}"
                                                                  data-post="{{$post->id}}"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="edit-post-bar">
                                    <div class="share-post-box-main-bottom">
                                        <div class="share-post-box-main-bottom-inner">
                                            <div class="share-post-box-attachments">
                                                <div class="share-post-box-attachments-inner">
                                                    <ul class="share-post-attachments">
                                                        <li class="edit-post-attachment-enabler-{{$post->id}} share-post-attachments-li {{!$post->assets()->exists()?'p-edit-post-modal-show':''}}"
                                                            data-post="{{$post->id}}" data-type="image"
                                                            data-modal="#p-edit-post-upload-file-modal-{{$post->id}}">
                                                            <div class="attachment-option">
                                                                <div class="attachment-icon">
                                                                    <span class="ti-camera"></span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="edit-post-attachment-enabler-{{$post->id}} share-post-attachments-li {{!$post->assets()->exists()?'p-edit-post-modal-show':''}}"
                                                            data-post="{{$post->id}}" data-type="video"
                                                            data-modal="#p-edit-post-upload-file-modal-{{$post->id}}">
                                                            <div class="attachment-option">
                                                                <div class="attachment-icon">
                                                                    <span class="ti-control-play"></span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="edit-post-attachment-enabler-{{$post->id}} share-post-attachments-li {{!$post->assets()->exists()?'p-edit-post-modal-show':''}}"
                                                            data-post="{{$post->id}}" data-type="audio"
                                                            data-modal="#p-edit-post-upload-file-modal-{{$post->id}}">
                                                            <div class="attachment-option">
                                                                <div class="attachment-icon">
                                                                    <span class="ti-microphone"></span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="edit-post-attachment-enabler-{{$post->id}} share-post-attachments-li {{!$post->assets()->exists()?'p-edit-post-modal-show    ':''}}"
                                                            data-post="{{$post->id}}" data-type="link"
                                                            data-modal="#upload-link-modal">
                                                            <div class="attachment-option">
                                                                <div class="attachment-icon">
                                                                    <span class="ti-link"></span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="set-privacy-share">
                                                <div class="set-privacy-share-inner">
                                                    <div class="set-privacy-dropdown dropdown-box">
                                                        <div class="set-privacy-dropdown-value open-dropdown"
                                                             data-target=".drop-002" data-value="{{$post->privacy}}">
                                                            <img src="{{getPrivacyDetails($post->privacy)['url']}}"
                                                                 alt="">
                                                            <i>{{getPrivacyDetails($post->privacy)['name']}}</i>
                                                            <span class="more-icon"><span
                                                                        class="ti-angle-down"></span></span>
                                                        </div>
                                                        <div class="set-privacy-dropdown-inner custom-dropdown drop-002">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="share-post-button">
                                                    <button>Update Post</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-post-pop-up-comment">
            <div class="single-post-pop-up-comment-outer">
                <div class="single-post-pop-up-comment-inner">
                    <div class="single-post-pop-up-comment-box">
                        <div class="single-post-pop-up-comment-all">
                            <div class="coment-top-title custom-padding">
                                Comments
                            </div>
                            <div class="all-comments-box single-post-comments-1 d-block p-0 all-comment-box-{{$post->id}}">
                                <div class="all-comments-box-inner">
                                    <div class="all-comments-box-grid comment-box-{{$post->id}}" id="comment-box-{{$post->id}}">
                                        <!-- All -->
                                        @foreach($post->comments as $comment)

                                        <div class="singal-comment-row custom-padding" >
                                            <div class="singal-comment-row-inner">
                                                <div class="singal-comment-row-user-image">
                                                    <div class="singal-comment-row-user-image-inner">
                                                        <img src="{{$comment->user->profile_image()}}" alt="" class="">
                                                    </div>
                                                </div>
                                                <div class="singal-comment-row-comment-text bg-white">
                                                    {{$comment->text}}
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- End All -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-post-pop-up-comment-add">
                            <div class="add-comment-input-bar">
                                <div class="add-comment-input-bar-inner">
                                    <div class="add-comment-input-bar-user-image">
                                        <div class="add-comment-input-bar-image-inner">
                                            <img src="{{auth()->user()->profile_image()}}" alt=""
                                                 style="width: 30px;height: 30px;object-fit: cover" class="profile_photo_preview">
                                        </div>
                                    </div>
                                    <div class="add-comment-input-bar-textarea">
                                        <div class="add-comment-input-bar-textarea-inner">
                                            <form class="comment_form_popup m-0">
                                                @csrf
                                                <input type="hidden" value="{{$post->id}}" name="post_id">
                                                <div class="add-comment-outer-div">
                                                    <div class="add-comment-input-bar-textarea-main">
                                                        <input type="text" class="add-comment-input bg-white" name="comment" id="comment" {{--class="add-comment-input"--}}

                                                               placeholder="Write something">
                                                        <!-- <button type="submit" data-post-id="1">Add</button> -->
                                                        <!-- <textarea name="comment" id="comment"></textarea> -->
                                                    </div>
                                                    <div class="add-button">
                                                        <button type="submit" data-post-id="{{$post->id}}">Add</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
