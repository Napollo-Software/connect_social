<div class="content-cards load-posts">
</div>
<div class="text-center col-md-12">
    <button id="scroll-to" class="black-button">Show more posts</button>
</div>
@include('ambassador.profile.components.post_popup')
@push('subscripts')
    @if($user->id==auth()->user()->id)
        <script>
            function fetch_post(n) {
                $.ajax({
                    type: "POST",
                    url: "{{route('post.fetch')}}",
                    dataType: "JSON",
                    data: {'n': n, 'user': '{{$user->id}}', _token: '{{csrf_token()}}'},
                    beforeSend: function () {
                        $('#scroll-to').attr('disabled', 'disabled').html('<span class="spinner-border spinner-border-sm"></span> Processing ...');
                    },
                    success: function (data) {

                        if (data) {
                            $('.load-posts').append(data);
                            $('#scroll-to').attr('disabled', null).text('Show more posts');
                        } else {
                            $('#scroll-to').text('No more posts').removeClass('black-button').addClass('white-button');
                        }
                    },
                    error: function (xhr) {
                        erroralert(xhr);
                    }
                });
            }

            $(document).ready(function () {
                var page = 0;
                fetch_post(page);
                $(document).on('click', '#scroll-to', function () {
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
                    $('#file_type_popup' + id).val(type);
                    $('#file_type' + id).val(type);
                    $('#edit-post-upload-file-modal-' + id).attr('data-post', $(this).attr('data-post')).modal('show');
                });
                $(document).on('click', '.edit-post-upload-btn', function () {
                    var id = $(this).attr('data-post');

                    if (($('#attachment' + id).val() == null || $('#attachment' + id).val() == '') && ($('#url' + id).val() == null || $('#url' + id).val() == '')) {
                        alert('Fields are required to continue...');
                    }
                    else {
                        var modalfalse = $('.edit_post_form_' + id).find('.share-post-attachments-li.edit-post-modal-show');
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
                                        $('.post-edit-photo-main-' + post).remove();
                                        toEnableModal.addClass('edit-post-modal-show');
                                    },
                                    error: function (xhr) {
                                        erroralert(xhr);
                                    },
                                });
                            }
                        });
                });
                $(document).on('submit', '.edit_post_form', function (e) {
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
                $(document).on('click', '.show-post-pop-up', function () {
                    $('body').addClass('show-post');
                    var id = $(this).attr('data-id');
                    $.ajax({
                        url: "{{route('post.popup')}}",
                        data: {'id': id, _token: '{{csrf_token()}}'},
                        dataType: "JSON",
                        type: "POST",
                        success: function (data) {
                            $('.single-post-pop-up').html(data).show(500);
                        },
                        error: function (xhr) {
                            erroralert(xhr);
                        },
                    });
                });
            });

        </script>
    @endif
    @include('ambassador.profile.components.comments_js')
    @include('ambassador.profile.components.likes_js')
    <script>
        // Open Target
        $(document).on("click", ".open-target", function () {
            var targeted_div = $(this).attr("data-target");
            $(targeted_div).toggle();
        });
    </script>
    <style>
        .swal-overlay--show-modal {
            z-index: 99999999;
        }
    </style>
@endpush