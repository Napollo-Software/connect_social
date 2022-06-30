<script>
    $(function () {
        $(document).on('submit', '.like-submit', function (e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "{{route('likes.store')}}",
                data: new FormData(this),
                dataType: 'JSON',
                processData: false,
                contentType: false,
                cache: false,
                success: function (data) {
                    var like = $('#likes-count-' + data.data.post_id);
                    var likescount = parseInt(like.text());
                    if (data.success == 'liked') {
                        like.text(likescount + 1);
                        $('.like-btn-' + data.data.post_id).addClass('text-primary like-animation');
                        var obj = document.createElement('audio');
                        obj.src = '{{url("ambassador_assets/music/like-music.mp3")}}';
                        obj.play();
                    } else {
                        like.text(likescount - 1);
                        $('.like-btn-' + data.data.post_id).removeClass('text-primary like-animation');
                    }
                },
                error: function (xhr) {
                    erroralert(xhr);
                }
            });
        });
    });
</script>