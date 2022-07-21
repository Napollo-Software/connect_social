<div class="content-card">
    <div class="content-card-inner">
        <div class="share-post-box">
            <div class="share-post-box-inner">
                <div class="share-post-user-image custom-padding">
                    <div class="singal-post-top-bar-user-info-01">
                        <div class="single-post-top-bar-photo">
                            <div class="single-post-top-bar-photo-inner">
                                <img src="{{auth()->user()->profile_image()}}" alt="" class="profile_photo_preview">
                            </div>
                        </div>
                        <div class="singal-post-top-bar-post-detail">
                            <div class="singal-post-top-bar-post-detail-inner">
                                <div class="user-name"> 
                                    {{auth()->user()->fullName()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="share-post-box-main">
                    <form id="add_post">
                        <div class="share-post-box-main-inner">
                            @csrf
                            <input type="hidden" value="{{Privacy::PRIV_FRIENDS}}" name="privacy" id="post_privacy">
                            <div class="post-preview">
                                <div class="post-preview-inner d-none">
                                    <div class="post-preview-name">
                                        <div class="post-preview-icon">
                                            <span class="ti-camera"></span>
                                        </div>
                                        post-image.png
                                    </div>
                                    <div class="delete-attachment">
                                        <span class="ti-close"></span>
                                    </div>
                                </div>
                                <div class="post-preview-inner d-none">
                                    <div class="post-preview-name">
                                        <div class="post-preview-icon">
                                            <span class="ti-control-play"></span>
                                        </div>
                                        post-video.mp4
                                    </div>
                                    <div class="delete-attachment">
                                        <span class="ti-close"></span>
                                    </div>
                                </div>
                                <div class="post-preview-inner d-none">
                                    <div class="post-preview-name">
                                        <div class="post-preview-icon">
                                            <span class="ti-microphone"></span>
                                        </div>
                                        post-audio.mp4
                                    </div>
                                    <div class="delete-attachment">
                                        <span class="ti-close"></span>
                                    </div>
                                </div>
                                <div class="post-preview-inner d-none">
                                    <div class="post-preview-name">
                                        <div class="post-preview-icon">
                                            <span class="ti-link"></span>
                                        </div>
                                        <div class="link">
                                            https://busy-leakey.18-118-49-57.plesk.page/ambassador
                                        </div>
                                    </div>
                                    <div class="delete-attachment">
                                        <span class="ti-close"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="share-post-input-box">
                                <div class="share-post-input-box-inner">
                                    <textarea class="form-control add-post-input" id="Add-Post-input" name="details" placeholder="Write Something"></textarea>
                                    <!-- <input class="form-control add-post-input" name="details" placeholder="Write Something"/> -->
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
                                                            <span class="ti-control-play custom-icon"></span>
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
                                                            <span class="ti-link custom-icon-01"></span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="set-privacy-share">
                                        <div class="set-privacy-share-inner">
                                            <div class="set-privacy-dropdown dropdown-box">
                                                <div class="set-privacy-dropdown-value open-dropdown" data-target=".drop-02" data-value="{{Privacy::PRIV_PUBLIC}}">
                                                    <img src="{{url('ambassador_assets/images/icons/globe.svg')}}" alt=""> <i>Public</i> <span class="more-icon"><span class="ti-angle-down"></span></span>
                                                </div>
                                                <div class="set-privacy-dropdown-inner custom-dropdown drop-02"></div>
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
            var formHTML=$('#add_post').html();

            $('#add_post').submit(function (e) {
                e.preventDefault();
                var showPostDiv=$('.load-posts');
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
                            showPostDiv.prepend(data.html);
                            $('#add_post').html(formHTML);
                        });
                    },
                    error:function (xhr) {
                        button.attr('disabled',null).html(previous);
                        erroralert(xhr);
                    }
                });
            });
            $(document).on('click','.add-post-close-btn',function () {
                $('#file_type').val('');
                $('#create-post-upload-file-modal').modal('hide');
            });
            $(document).on('click','.remove-attached-file',function () {
                $('#file_type').val('');
                $('#attachment').val('');
                $('.post-preview').empty();
                $('#url').val('');
                $('.share-post-attachments-li').addClass('add-post-modal-show');
                $('#create-post-upload-file-modal').modal('hide');
            });

            $(document).on('click','.add-post-upload-btn',function () {
                if (($('#attachment').val()== null || $('#attachment').val()=='') && ($('#url').val()==null || $('#url').val()=='')){
                    alert('null');
                }
                else{
                    var type=$('#file_type').val();
                    var icon='';
                    var file_value='';
                    if (type=='image'){ icon='ti-camera'; }
                    if (type=='video'){ icon='ti-control-play'; }
                    if (type=='audio'){ icon='ti-microphone'; }
                    if (type=='link'){
                        icon='ti-link';
                        file_value=$('#url').val();
                    }else{
                        file_value=document.getElementById('attachment').files.item(0).name;
                    }

                    $('.share-post-attachments-li.add-post-modal-show').removeClass('add-post-modal-show');
                    $('.post-preview').html('<div class="post-preview-inner">\n' +
                        '                                    <div class="post-preview-name">\n' +
                        '                                        <div class="post-preview-icon">\n' +
                        '                                            <span class="'+icon+'"></span>\n' +
                        '                                        </div>'+file_value+' </div>\n' +
                        '                                    <div class="delete-attachment remove-attached-file">\n' +
                        '                                        <span class="ti-close"></span>\n' +
                        '                                    </div>\n' +
                        '                                </div>');
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

        $("#Add-Post-input").keydown(function(){
            var textInput = document.getElementById('Add-Post-input');
            console.log(textInput.scrollHeight)
            if (textInput.scrollHeight <= 200) {
                textInput.style.height = (textInput.scrollHeight) + 'px';
            } else {
                textInput.style.height = '200px';
            }
        });
    </script>
@endpush
