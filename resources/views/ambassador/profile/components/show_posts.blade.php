@foreach($posts as $post)
    <div class="content-card">
        <div class="content-card-inner">
            <div class="single-podt-box">
                <div class="single-podt-box-inner">
                    <div class="singal-post-top-bar">
                        <div class="singal-post-top-bar-user-info">
                            <div class="single-post-top-bar-photo">
                                <div class="single-post-top-bar-photo-inner">
                                    <img src="{{auth()->user()->profile_image()}}" alt="" class="profile_photo_preview">
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
                                            <img src="{{getPrivacyDetails($post->privacy)['url']}}"
                                                 alt="{{getPrivacyDetails($post->privacy)['name']}}" title="{{getPrivacyDetails($post->privacy)['name']}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="singal-post-top-bar-options open-dropdown"
                             data-target=".post-actions-{{$post->id}}">
                            <div class="icon">
                                <span class="ti-angle-down"></span>
                            </div>
                            <div class="singal-post-top-bar-options-bar post-actions-{{$post->id}}"
                                 style="display: none;">
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
                    <div class="edit-post-box edit-post-box-{{$post->id}}" style="display:none">
                        <form class="edit_post_form" id="edit_post_form_{{$post->id}}">
                            @csrf
                            <div class="modal fade" id="edit-post-upload-file-modal-{{$post->id}}" data-post="" tabindex="-1" role="dialog" aria-labelledby="create-post-upload-file-modalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="edit-post-upload-file-modalLabel">Add File</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <input type="hidden" class="form-control" name="file_type" id="file_type{{$post->id}}">
                                            <div class="row edit_attachments_div">
                                                <div class="col-md-12 file-div">
                                                    <div class="form-group">
                                                        <label>Choose File</label>
                                                        <input type="file" class="form-control pt-1 pb-3" name="attachment" id="attachment{{$post->id}}">
                                                    </div>
                                                </div>

                                                <div class="col-md-12 url-div">
                                                    <div class="form-group">
                                                        <label>Paste Link</label>
                                                        <input type="text" class="form-control" placeholder="Paste Link" name="url" id="url{{$post->id}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" data-post="{{$post->id}}" class="btn btn-secondary edit-post-close-btn">Close</button>
                                            <button type="button" data-post="{{$post->id}}" class="btn btn-primary edit-post-upload-btn">Upload</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="edit-post-box-inner">
                                <div class="edit-post-box-main">
                                    <input type="hidden" value="{{$post->id}}" name="id">
                                    <input type="hidden" value="{{$post->privacy}}" name="privacy" id="edit_post_privacy">
                                    <textarea rows="{{$post->details?'10':'1'}}" name="details" style="height: auto!important;">{{$post->details}}</textarea>
                                </div>
                                @if($post->assets()->exists())
                                <div class="post-edit-photo">
                                    <div class="post-edit-photo-outer">
                                        <div class="post-edit-photo-main" id="post-edit-photo-main-{{$post->id}}">
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
                                                        <span class="ti-trash remove-post-attachment" data-id="{{$post->assets->id}}" data-post="{{$post->id}}"></span>
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
                                                        <li class="edit-post-attachment-enabler-{{$post->id}} share-post-attachments-li {{!$post->assets()->exists()?'edit-post-modal-show':''}}" data-post="{{$post->id}}" data-type="image" data-modal="#upload-file-modal">
                                                            <div class="attachment-option">
                                                                <div class="attachment-icon">
                                                                    <span class="ti-camera"></span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="edit-post-attachment-enabler-{{$post->id}} share-post-attachments-li {{!$post->assets()->exists()?'edit-post-modal-show':''}}" data-post="{{$post->id}}" data-type="video" data-modal="#upload-file-modal">
                                                            <div class="attachment-option">
                                                                <div class="attachment-icon">
                                                                    <span class="ti-control-play"></span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="edit-post-attachment-enabler-{{$post->id}} share-post-attachments-li {{!$post->assets()->exists()?'edit-post-modal-show':''}}" data-post="{{$post->id}}" data-type="audio" data-modal="#upload-file-modal">
                                                            <div class="attachment-option">
                                                                <div class="attachment-icon">
                                                                    <span class="ti-microphone"></span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="edit-post-attachment-enabler-{{$post->id}} share-post-attachments-li {{!$post->assets()->exists()?'edit-post-modal-show':''}}" data-post="{{$post->id}}" data-type="link" data-modal="#upload-link-modal">
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
                                                        <div class="set-privacy-dropdown-value open-dropdown"
                                                             data-target=".drop-002" data-value="{{$post->privacy}}">
                                                            <img src="{{getPrivacyDetails($post->privacy)['url']}}" alt=""> <i>{{getPrivacyDetails($post->privacy)['name']}}</i>
                                                            <span class="more-icon"><span
                                                                        class="ti-angle-down"></span></span>
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

                        </form>
                    </div>
                    <div class="singal-post-content single-post-{{$post->id}}">
                        <p>{{$post->details}}</p>
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
                    <div class="like-comment-bar">
                        <div class="like-comment-bar-inner">
                            <ul class="like-comment-bar-ul">
                                <li class="like-comment-bar-li">
                                    <div class="icon like-btn-{{$post->id}} {{myLikeOnPost($post)?'text-primary':''}}"
                                         onclick="$('#like-submit-{{$post->id}}').submit()"><span
                                                class="ti-thumb-up"></span></div>
                                    <form class="like-submit" id="like-submit-{{$post->id}}">
                                        @csrf
                                        <input type="hidden" value="{{$post->id}}" name="post">
                                    </form>
                                    <div class="text" id="likes-count-{{$post->id}}">{{$post->likes->count()}}</div>
                                </li>
                                <li class="like-comment-bar-li">
                                    <div class="text {{$post->comments->count()>0?'':'d-none'}}"><span
                                                id="comment-count-{{$post->id}}">{{$post->comments->count()}}</span>
                                        Comment{{$post->comments->count()>1?'s':''}}</div>
                                </li>
                            </ul>
                        </div>
                    </div>
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
                                    <form class="comment_form">
                                        @csrf
                                        <input type="hidden" value="{{$post->id}}" name="post_id">
                                        <div class="add-comment-input-bar-textarea-main"><label for="comment"></label>
                                            <textarea name="comment" id="comment"></textarea>
                                        </div>
                                        <div class="add-button">
                                            <button type="submit" data-post-id="{{$post->id}}">Add</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="all-comments-box">
                        <div class="all-comments-box-inner">
                            <div class="all-comments-box-grid" id="comment-box-{{$post->id}}">
                                @foreach($post->comments as $comment)
                                    <div class="singal-comment-row">
                                        <div class="singal-comment-row-inner">
                                            <div class="singal-comment-row-user-image">
                                                <div class="singal-comment-row-user-image-inner">
                                                    <img src="{{$comment->user->profile_image()}}" alt="" class="{{$comment->user->id==auth()->user()->id?'profile_photo_preview':''}}">
                                                </div>
                                            </div>
                                            <div class="singal-comment-row-comment-text">
                                                {{$comment->text}}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @if(count($post->comments)>5)
                        <div class="view-more-comments">
                            <div class="view-more-comments-inner">
                                <a href="javascript:void(0)">View more comments</a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endforeach
@push('subscripts')
    <script>
        $(function () {
            $(document).on('click','.edit-post-close-btn',function () {
                var id = $(this).attr('data-post');
                $('#file_type'+id).val('');
                $('#edit-post-upload-file-modal-'+id).modal('hide');
            });
            $(document).on('click','.edit-post-modal-show',function() {
                var type= $(this).attr('data-type');
                var id = $(this).attr('data-post');
                if (type=='link'){
                    $('.url-div').show();
                    $('.file-div').hide();
                } else{
                    $('.url-div').hide();
                    $('.file-div').show();
                }
                $('#file_type'+id).val(type);
                $('#edit-post-upload-file-modal-'+id).attr('data-post',$(this).attr('data-post')).modal('show');
            });
            $(document).on('click','.edit-post-upload-btn',function () {
                var id = $(this).attr('data-post');

                if (($('#attachment'+id).val()== null || $('#attachment'+id).val()=='') && ($('#url'+id).val()==null || $('#url'+id).val()=='')){
                    alert('Fields are required to continue...');
                }
                else{

                    var modalfalse=$('#edit_post_form_'+id).find('.share-post-attachments-li.edit-post-modal-show');
                    modalfalse.removeClass('edit-post-modal-show');
                    $('#edit-post-upload-file-modal-'+id).modal('hide');
                }
            });
            $(document).on('click', '.post-delete', function (e) {
                var targetToRemove=$(this).closest('.content-card');
                swal({
                    title: "Are you sure to remove this post?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            var id = $(this).attr('data-id');
                            var token = '{{csrf_token()}}';
                            e.preventDefault();

                            $.ajax({
                                url: "{{route('post.destroy')}}",
                                data: {'id':id,_token:token},
                                dataType: "JSON",
                                type: "delete",
                                success: function (data) {
                                    targetToRemove.remove();
                                },
                                error: function (xhr) {
                                    erroralert(xhr);
                                },
                            });
                        }
                    });
            });
            $(document).on('click', '.remove-post-attachment', function (e) {

                swal({
                    title: "Are you sure to remove?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                        if (willDelete) {

                            var id = $(this).attr('data-id');
                            var post = $(this).attr('data-post');

                            var toEnableModal=$('.edit-post-attachment-enabler-'+post);
                            var token = '{{csrf_token()}}';




                            e.preventDefault();
                            $.ajax({
                                url: "{{route('post.asset.destroy')}}",
                                data: {'id':id,_token:token},
                                dataType: "JSON",
                                type: "delete",
                                success: function (data) {
                                    $('#post-edit-photo-main-'+post).remove();
                                    toEnableModal.addClass('edit-post-modal-show');
                                },
                                error: function (xhr) {
                                    erroralert(xhr);
                                },
                            });
                        }
                    });
            });
            $('.comment_form').submit(function (e) {
                e.preventDefault();
                var button = $(this).find('button[type=submit]');
                var comment_input = $(this).find('textarea[id=comment]');
                var post= button.attr('data-post-id');
                var previous= button.text();
                button.attr('disabled','disabled').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing ...');

                $.ajax({
                    type:"POST",
                    url:"{{route('comments.store')}}",
                    data: new FormData(this),
                    dataType:'JSON',
                    processData: false,
                    contentType: false,
                    cache: false,
                    success:function(data) {
                        button.attr('disabled',null).html(previous);
                        $(comment_input).val('');
                        $('#comment-count-'+post).text(parseInt($('#comment-count-'+post).text())+1);
                        $('#comment-count-'+post).parent().removeClass('d-none');
                        $('#comment-box-'+post).closest('.all-comments-box-grid').prepend('<div class="singal-comment-row"><div class="singal-comment-row-inner"><div class="singal-comment-row-user-image"> <div class="singal-comment-row-user-image-inner"> <img src="{{auth()->user()->profile_image()}}" alt=""> </div> </div> <div class="singal-comment-row-comment-text">'+data.data.text+'</div> </div> </div>');
                    },
                    error:function (xhr) {
                        button.attr('disabled',null).html(previous);
                        erroralert(xhr);
                    }
                });

            });
            $('.edit_post_form').submit(function (e) {
                e.preventDefault();
                var privacy = $(this).find('.set-privacy-dropdown-value').attr('data-value');
                $('#edit_post_privacy').val(privacy);

                var button = $(this).find('button[type=submit]');
                var previous= button.text();
                button.attr('disabled','disabled').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing ...');

                $.ajax({
                    type:"POST",
                    url:"{{route('post.update')}}",
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
        });
    </script>
@endpush