<script>
    $(function () {
        $('.comment_form').submit(function (e) {
            e.preventDefault();
            var comment_input = $(this).find('textarea[id=comment]');
            var button = $(this).find('button[type=submit]');
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
                success:function(response) {
                    button.attr('disabled',null).html(previous);
                    $(comment_input).val('');
                    $('#comment-count-'+post).text(parseInt($('#comment-count-'+post).text())+1).parent().removeClass('d-none');
                    if (response.data.more_comments_toggle){
                        $('#comment-box-'+post).closest('.all-comments-box').append(response.data.more_comments_html);
                    }
                    if (response.data.total_comments<=5){
                        $('#comment-box-'+post).append(response.data.comment_html);
                    }


                },
                error:function (xhr) {
                    button.attr('disabled',null).html(previous);
                    erroralert(xhr);
                }
            });

        });
        $(document).on('click','.show-more-comments',function () {
            var previousBtn=$(this);
            var previousTxt=previousBtn.html();
            previousBtn.html('<i class="spinner-border spinner-border-sm"></i> Loading more comments...');
            var post= $(this).attr('data-post');
            var total_comments=$('#comment-box-'+post).children().length;
            var more_comment=$(this).parent().parent();

            $.ajax({
                type:"POST",
                url:"{{route('comments.show.more')}}",
                data: {'post':post,'previous':total_comments,'_token':'{{csrf_token()}}'},
                dataType:'JSON',
                success:function(response) {
                    previousBtn.text(previousTxt);
                    $('#comment-box-'+post).append(response.html);

                    if ($('#comment-box-'+post).children().length == response.total_comments){
                        if ($('#comment-box-'+post).children().length >=15){
                            more_comment.html(response.show_post);
                        }else{
                            more_comment.remove();
                        }
                    }


                },
                error:function (xhr) {
                    previousBtn.text(previousTxt);
                    erroralert(xhr);
                }
            });
        });
    });
</script>