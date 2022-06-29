<div class="load-posts"></div>
<center>
    <button id="scroll-to" class="black-button">Show more posts</button>
</center>
<input type="hidden" value="0" id="increment">
@push('subscripts')
    @if($user->id==auth()->user()->id)
        <script>
            function fetch_post(n){
                $.ajax({
                    type: "POST",
                    url: "{{route('post.fetch')}}",
                    dataType: "JSON",
                    data: {'n':n,'user':'{{$user->id}}',_token: '{{csrf_token()}}'},
                    beforeSend: function () {
                        $('.load-posts').append('<div class="col-md-12 text-center spinner-gif"><img src="{{url('img/loading.gif')}}"></div>');
                    },
                    success: function (data) {
                        $('.spinner-gif').remove();
                        if (data){
                            $('.load-posts').append(data);
                            $('#increment').val(n+1);
                        } else{
                            $('#scroll-to').attr('disabled','disabled').text('No more posts').removeClass('black-button').addClass('');
                        }
                    },
                    error: function (xhr) {
                        erroralert(xhr);
                    }
                });
            }
            $(document).ready(function () {
                var page=0;
                fetch_post(page);
                $(document).on('click','#scroll-to',function () {
                    page++;
                    fetch_post(page);
                });
                $(document).on('click', '.edit-post-close-btn', function () {
                    var id = $(this).attr('data-post');
                    $('#file_type' + id).val('');
                    $('#edit-post-upload-file-modal-' + id).modal('hide');
                });
                $(document).on('click', '.edit-post-modal-show', function () {
                    var type = $(this).attr('data-type');
                    var id = $(this).attr('data-post');
                    if (type == 'link') {
                        $('.url-div').show();
                        $('.file-div').hide();
                    } else {
                        $('.url-div').hide();
                        $('.file-div').show();
                    }
                    $('#file_type' + id).val(type);
                    $('#edit-post-upload-file-modal-' + id).attr('data-post', $(this).attr('data-post')).modal('show');
                });
                $(document).on('click', '.edit-post-upload-btn', function () {
                    var id = $(this).attr('data-post');

                    if (($('#attachment' + id).val() == null || $('#attachment' + id).val() == '') && ($('#url' + id).val() == null || $('#url' + id).val() == '')) {
                        alert('Fields are required to continue...');
                    }
                    else {

                        var modalfalse = $('#edit_post_form_' + id).find('.share-post-attachments-li.edit-post-modal-show');
                        modalfalse.removeClass('edit-post-modal-show');
                        $('#edit-post-upload-file-modal-' + id).modal('hide');
                    }
                });
                $(document).on('click', '.post-delete', function (e) {
                    var targetToRemove = $(this).closest('.content-card');
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
                                    data: {'id': id, _token: token},
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

                                var toEnableModal = $('.edit-post-attachment-enabler-' + post);
                                var token = '{{csrf_token()}}';


                                e.preventDefault();
                                $.ajax({
                                    url: "{{route('post.asset.destroy')}}",
                                    data: {'id': id, _token: token},
                                    dataType: "JSON",
                                    type: "delete",
                                    success: function (data) {
                                        $('#post-edit-photo-main-' + post).remove();
                                        toEnableModal.addClass('edit-post-modal-show');
                                    },
                                    error: function (xhr) {
                                        erroralert(xhr);
                                    },
                                });
                            }
                        });
                });
                $('.edit_post_form').submit(function (e) {
                    e.preventDefault();
                    var privacy = $(this).find('.set-privacy-dropdown-value').attr('data-value');
                    $('#edit_post_privacy').val(privacy);

                    var button = $(this).find('button[type=submit]');
                    var previous = button.text();
                    button.attr('disabled', 'disabled').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing ...');

                    $.ajax({
                        type: "POST",
                        url: "{{route('post.update')}}",
                        data: new FormData(this),
                        dataType: 'JSON',
                        processData: false,
                        contentType: false,
                        cache: false,
                        success: function (data) {
                            button.attr('disabled', null).html(previous);
                            swal("Success", data.success, "success").then(function () {
                                window.location.reload();
                            });
                        },
                        error: function (xhr) {
                            button.attr('disabled', null).html(previous);
                            erroralert(xhr);
                        }
                    });
                });
            });

        </script>
    @endif
    @include('ambassador.profile.components.comments_js')
    @include('ambassador.profile.components.likes_js')
    <script>
         // Open Target
        $(document).on("click",".open-target",function() {
            var targeted_div = $(this).attr("data-target");
            console.log(targeted_div)
            $(targeted_div).toggle();
        });
</script>
@endpush