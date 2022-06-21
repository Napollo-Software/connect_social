@foreach($posts as $post)
    <div class="content-card">
        <div class="content-card-inner">
            <div class="single-podt-box">
                <div class="single-podt-box-inner">
                    <div class="singal-post-top-bar">
                        <div class="singal-post-top-bar-user-info">
                            <div class="single-post-top-bar-photo">
                                <div class="single-post-top-bar-photo-inner">
                                    <img src="{{auth()->user()->profile_image()}}" alt="">
                                </div>
                            </div>
                            <div class="singal-post-top-bar-post-detail">
                                <div class="singal-post-top-bar-post-detail-inner">
                                    <div class="user-name">
                                        {{$post->user->fullName()}}
                                    </div>
                                    <div class="date-and-privacy">
                                        <div class="time-stamp">
                                            <div class="date">{{$post->created_at->format('d M Y')}}</div>
                                            <div class="at">at</div>
                                            <div class="time">{{$post->created_at->format('H.i')}} h</div>
                                        </div>
                                        <div class="privacy-icon">
                                            <img src="{{getPrivacyDetails($post->privacy)['url']}}" alt="{{getPrivacyDetails($post->privacy)['name']}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="singal-post-top-bar-options open-dropdown" data-target=".singal-post-top-bar-options-bar">
                            <div class="icon">
                                <span class="ti-angle-down"></span>
                            </div>
                            <div class="singal-post-top-bar-options-bar" style="display: none;">
                                <div class="singal-post-top-bar-options-bar-inner">
                                    <ul class="singal-post-top-bar-options-ul">
                                        <li class="singal-post-top-bar-options-li">
                                            <a href="javascript:void(0)" class="singal-post-top-bar-options-link open-post-editor" data-target=".edit-post-box-{{$post->id}}" data-close=".single-post-{{$post->id}}">Edit</a>
                                        </li>
                                        <li class="singal-post-top-bar-options-li">
                                            <a href="javascript:void(0)" class="singal-post-top-bar-options-link">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="edit-post-box edit-post-box-{{$post->id}}" style="display:none">
                        <div class="edit-post-box-inner">
                            <div class="edit-post-box-main">
                                                                    <textarea  rows="10">

                                                                    </textarea>
                            </div>
                            <div class="post-edit-photo">
                                <div class="post-edit-photo-outer">
                                    <div class="post-edit-photo-main">
                                        <img src="assets/images/post-content/01.png" alt="">
                                        <div class="delete-photo-div">
                                            <div class="delete-photo-div-inner">
                                                <div class="delete-photo-div-main">
                                                    <span class="ti-trash"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="edit-post-bar">
                                <div class="share-post-box-main-bottom">
                                    <div class="share-post-box-main-bottom-inner">
                                        <div class="share-post-box-attachments">
                                            <div class="share-post-box-attachments-inner">
                                                <ul class="share-post-attachments">
                                                    <li class="share-post-attachments-li" data-modal="#upload-file-modal">
                                                        <div class="attachment-option">
                                                            <div class="attachment-icon">
                                                                <span class="ti-camera"></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="share-post-attachments-li"  data-modal="#upload-file-modal">
                                                        <div class="attachment-option">
                                                            <div class="attachment-icon">
                                                                <span class="ti-control-play"></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="share-post-attachments-li"  data-modal="#upload-file-modal">
                                                        <div class="attachment-option">
                                                            <div class="attachment-icon">
                                                                <span class="ti-microphone"></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="share-post-attachments-li"  data-modal="#upload-link-modal">
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
                                                <div class="set-privacy-dropdown">
                                                    <div class="set-privacy-dropdown-value open-dropdown" data-target=".drop-002">
                                                        <img src="ambassador_assets/images/icons/users.svg" alt=""> <i>Friends</i> <span class="more-icon"><span class="ti-angle-down"></span></span>
                                                    </div>
                                                    <div class="set-privacy-dropdown-inner drop-002">

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
                    </div>
                    <div class="singal-post-content single-post-{{$post->id}}">
                        <p>{{$post->details}}</p>
                        @if($post->assets)
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
                    <div class="like-comment-bar">
                        <div class="like-comment-bar-inner">
                            <ul class="like-comment-bar-ul">
                                <li class="like-comment-bar-li">
                                    <div class="icon"><span class="ti-thumb-up"></span></div>
                                    <div class="text">58.6K</div>
                                </li>
                                <li class="like-comment-bar-li">
                                    <div class="text">28 Comments</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="add-comment-input-bar">
                        <div class="add-comment-input-bar-inner">
                            <div class="add-comment-input-bar-user-image">
                                <div class="add-comment-input-bar-image-inner">
                                    <img src="assets/images/user-profile/user-01.png" alt="">
                                </div>
                            </div>
                            <div class="add-comment-input-bar-textarea">
                                <div class="add-comment-input-bar-textarea-inner">
                                    <form id="comment_box">
                                        @csrf
                                        <div class="add-comment-input-bar-textarea-main"><label for="comment"></label>
                                            <textarea name="comment" id="comment"></textarea>
                                        </div>
                                        <div class="add-button">
                                            <button type="submit">Add</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="all-comments-box">
                        <div class="all-comments-box-inner">
                            <div class="all-comments-box-grid">
                                <div class="singal-comment-row">
                                    <div class="singal-comment-row-inner">
                                        <div class="singal-comment-row-user-image">
                                            <div class="singal-comment-row-user-image-inner">
                                                <img src="assets/images/user-profile/user-01.png" alt="">
                                            </div>
                                        </div>
                                        <div class="singal-comment-row-comment-text">
                                            Is simply dummy text of the printing and typesetting.
                                        </div>
                                    </div>
                                </div>
                                <div class="singal-comment-row">
                                    <div class="singal-comment-row-inner">
                                        <div class="singal-comment-row-user-image">
                                            <div class="singal-comment-row-user-image-inner">
                                                <img src="assets/images/user-profile/user-01.png" alt="">
                                            </div>
                                        </div>
                                        <div class="singal-comment-row-comment-text">
                                            Is simply dummy text of the printing and typesetting.
                                        </div>
                                    </div>
                                </div>
                                <div class="singal-comment-row">
                                    <div class="singal-comment-row-inner">
                                        <div class="singal-comment-row-user-image">
                                            <div class="singal-comment-row-user-image-inner">
                                                <img src="assets/images/user-profile/user-01.png" alt="">
                                            </div>
                                        </div>
                                        <div class="singal-comment-row-comment-text">
                                            Is simply dummy text of the printing and typesetting.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="view-more-comments">
                        <div class="view-more-comments-inner">
                            <a href="javascript:void(0)">View more comments</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
