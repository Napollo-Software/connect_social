<div class="content-cards load-posts">
</div>

<div class="text-center col-md-12">
    <button id="scroll-to" class="black-button">Show more posts</button>
</div>
@push('subscripts')
    <script>
        function fetch_post(n,t){
            if (n == 0){ 
                $('.load-posts').empty();
            }
            $.ajax({
                type: "POST",
                url: "{{route('post.fetch.all')}}",
                dataType: "JSON", 
                data: {'n':n,'type':t,'user':'{{$user->id}}',_token: '{{csrf_token()}}'},
                beforeSend: function () {
                    $('#scroll-to').attr('disabled','disabled').html('<span class="spinner-border spinner-border-sm"></span> Processing ...');
                },
                success: function (data) {
                    if (data){
                        $('#scroll-to').attr('disabled',null).text('Show more posts');

                        $('.load-posts').append(data);
                    } else{
                        $('#scroll-to').text('No more posts').removeClass('black-button').addClass('white-button').addClass('button-disabled');
                    }
                },
                error: function (xhr) {
                    erroralert(xhr);
                }
            });
        }
        $(function () {
            var page=0;
            var type='<?= $type ?>';
            fetch_post(page,type);
            $(document).on('click','#scroll-to',function () {
                page++;
                fetch_post(page,type);
            });
            $(document).on('click','.home-posts',function (e) {
                e.preventDefault();
                type=$(this).attr('data-type');
                page=0;
                fetch_post(page,type);
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