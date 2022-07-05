<div class="single-post-pop-up">

</div>
@push('subscripts')
    <script>
        $(function () {
            $(document).on('click', '.p-edit-post-close-btn', function () {
                var id = $(this).attr('data-post');
                $('#p-file_type' + id).val('');
                $('#p-edit-post-upload-file-modal-' + id).modal('hide');
            });
            $(document).on('click', '.p-edit-post-modal-show', function () {
                var type = $(this).attr('data-type');
                var id = $(this).attr('data-post');
                if (type == 'link') {
                    $('.url-div').show();
                    $('.file-div').hide();
                } else {
                    $('.url-div').hide();
                    $('.file-div').show();
                }
                $('#p-file_type_popup' + id).val(type);
                $('#p-edit-post-upload-file-modal-' + id).attr('data-post', $(this).attr('data-post')).modal('show');
                $('.single-post-pop-up').hide();
                $('.modal-backdrop.fade.show').hide();
            });
        });
    </script>
@endpush