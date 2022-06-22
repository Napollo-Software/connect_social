<div class="content-card">
    <div class="content-card-inner">
        <div class="share-post-box">
            <div class="share-post-box-inner">
                <div class="share-post-user-image">
                    <div class="share-post-user-image-inner">
                        <img src="{{auth()->user()->profile_image()}}" alt="" style="width: 40px;height: 40px;object-fit: cover" class="profile_photo_preview">
                    </div>
                </div>
                <div class="share-post-box-main">
                    <form id="add_post">
                        <div class="share-post-box-main-inner">
                            @csrf
                            <input type="hidden" value="{{Privacy::PRIV_FRIENDS}}" name="privacy" id="post_privacy">
                            <div class="share-post-input-box">
                                <div class="share-post-input-box-inner">
                                    <textarea class="form-control" name="details" id="" cols="30" rows="10" placeholder="Write Something"></textarea>
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
@push('subscripts')
    <script>
        $(function () {
            $('#add_post').submit(function (e) {
                e.preventDefault();
                var privacy = $(this).find('.set-privacy-dropdown-value').attr('data-value');
                $('#post_privacy').val(privacy);
                var button = $(this).find('button[type=submit]');
                var previous= button.text();
                button.attr('disabled','disabled').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing ...');

                $.ajax({
                    type:"POST",
                    url:"{{route('post.store')}}",
                    data: new FormData(this),
                    dataType:'JSON',
                    processData: false,
                    contentType: false,
                    cache: false,
                    success:function(data) {
                        button.attr('disabled',null).html(previous);
                        swal("Success", data.success, "success").then(function () {
                            window.location.reload();
                        });
                    },
                    error:function (xhr) {
                        button.attr('disabled',null).html(previous);
                        erroralert(xhr);
                    }
                });
            });
            $('.add-post-close-btn').click(function () {
                $('#file_type').val('');
                $('#create-post-upload-file-modal').modal('hide');
            });
            $('.add-post-upload-btn').click(function () {
                if (($('#attachment').val()== null || $('#attachment').val()=='') && ($('#url').val()==null || $('#url').val()=='')){
                    alert('null');
                }
                else{
                    $('.share-post-attachments-li.add-post-modal-show').removeClass('add-post-modal-show');
                    $('#create-post-upload-file-modal').modal('hide');
                }
            });
            $(document).on('click','.add-post-modal-show',function() {
                var type= $(this).attr('data-type');
                if (type=='link'){
                    $('.url-div').show();
                    $('.file-div').hide();
                } else{
                    $('.url-div').hide();
                    $('.file-div').show();
                }

                $('#file_type').val(type);
                $('#create-post-upload-file-modal').modal('show');
            });
        });
    </script>
@endpush
