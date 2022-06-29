<div class="content-cards load-posts">
</div>

<div class="text-center col-md-12">
    <button id="scroll-to" class="black-button">Show more posts</button>
</div>
@push('subscripts')
    <script>
        function fetch_post(n){
            $.ajax({
                type: "POST",
                url: "{{route('post.fetch.all')}}",
                dataType: "JSON",
                data: {'n':n,'user':'{{$user->id}}',_token: '{{csrf_token()}}'},
                beforeSend: function () {
                    $('#scroll-to').attr('disabled','disabled').html('<span class="spinner-border spinner-border-sm"></span> Processing ...');
                },
                success: function (data) {
                    if (data){
                        $('#scroll-to').attr('disabled',null).text('Show more posts');
                        $('.load-posts').append(data);
                    } else{
                        $('#scroll-to').text('No more posts').removeClass('black-button').addClass('white-button');
                    }
                },
                error: function (xhr) {
                    erroralert(xhr);
                }
            });
        }
        $(function () {
            var page=0;
            fetch_post(page);
            $(document).on('click','#scroll-to',function () {
                page++;
                fetch_post(page);
            });
        });

    </script>
    <script>
        // Open Target
        $(document).on("click",".open-target",function() {
            var targeted_div = $(this).attr("data-target");
            console.log(targeted_div)
            $(targeted_div).toggle();
        });
    </script>
    @include('ambassador.profile.components.comments_js')
    @include('ambassador.profile.components.likes_js')
@endpush