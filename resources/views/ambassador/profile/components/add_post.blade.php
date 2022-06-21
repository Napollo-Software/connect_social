<div class="content-card">
    <div class="content-card-inner">
        <div class="share-post-box">
            <div class="share-post-box-inner">
                <div class="share-post-user-image">
                    <div class="share-post-user-image-inner">
                        <img src="{{auth()->user()->profile_image()}}" alt="">
                    </div>
                </div>
                <div class="share-post-box-main">
                    <form id="add_post">

                        <div class="share-post-box-main-inner">
                            @csrf
                            <input type="hidden" value="{{Privacy::PRIV_FRIENDS}}" name="privacy" id="post_privacy">
                            <div class="share-post-input-box">
                                <div class="share-post-input-box-inner">
                                    <textarea name="details" id="" cols="30" rows="10" placeholder="Write Something"></textarea>
                                </div>
                            </div>
                            <div class="share-post-box-main-bottom">
                                <div class="share-post-box-main-bottom-inner">
                                    <div class="share-post-box-attachments">
                                        <div class="share-post-box-attachments-inner">
                                            <ul class="share-post-attachments">
                                                <li class="share-post-attachments-li add-post-modal-show" data-type="image">
                                                    <div class="attachment-option">
                                                        <div class="attachment-icon">
                                                            <span class="ti-camera"></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="share-post-attachments-li add-post-modal-show" data-type="video" >
                                                    <div class="attachment-option">
                                                        <div class="attachment-icon">
                                                            <span class="ti-control-play"></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="share-post-attachments-li add-post-modal-show" data-type="audio" >
                                                    <div class="attachment-option">
                                                        <div class="attachment-icon">
                                                            <span class="ti-microphone"></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="share-post-attachments-li add-post-modal-show" data-type="link">
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
                                                <div class="set-privacy-dropdown-value open-dropdown" data-target=".drop-02" data-value="{{Privacy::PRIV_FRIENDS}}">
                                                    <img src="{{url('ambassador_assets/images/icons/users.svg')}}" alt=""> <i>Friends</i> <span class="more-icon"><span class="ti-angle-down"></span></span>
                                                </div>
                                                <div class="set-privacy-dropdown-inner drop-02"></div>
                                            </div>
                                        </div>
                                        <div class="share-post-button">
                                            <button type="submit">Share Post</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="create-post-upload-file-modal" tabindex="-1" role="dialog" aria-labelledby="create-post-upload-file-modalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="create-post-upload-file-modalLabel">Add File</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" class="form-control" name="file_type" id="file_type">
                                        <div class="row">
                                            <div class="col-md-12 file-div">
                                                <div class="form-group">
                                                    <label>Choose File</label>
                                                    <input type="file" class="form-control pt-1 pb-3" name="attachment" id="attachment">
                                                </div>
                                            </div>

                                            <div class="col-md-12 url-div">
                                                <div class="form-group">
                                                    <label>Paste Link</label>
                                                    <input type="text" class="form-control" placeholder="Paste Link" name="url" id="url">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary add-post-close-btn">Close</button>
                                        <button type="button" class="btn btn-primary add-post-upload-btn">Upload</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

