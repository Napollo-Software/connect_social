@extends('ambassador.layouts.app')
@section('content')
    @include('ambassador.layouts.friends-navigation')
    <div class="friends-grid">
        <div class="friends-grid-inner">
            <div class="container">
                <div class="friends-grid-main">
                    @foreach($friends as $friend)
                    <div class="friend-grid-col">
                        <div class="friend-grid-col-inner-div">
                            <div class="friend-grid-col-profile">
                                <div class="friend-grid-col-profile-inner">
                                    <div class="friend-grid-col-profile-image">
                                        <img src="{{getFriendDetails($friend)->profile_image()}}" alt="">
                                    </div>
                                    <div class="friend-grid-col-profile-text">
                                        <div class="friend-grid-col-profile-text-top">
                                            {{getFriendDetails($friend)->fullName()}}
                                        </div>
                                        <div class="friend-grid-col-profile-text-bottom">
                                            Friend
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="friend-grid-col-options">
                                <div class="friend-grid-col-options-inner">
                                    <div class="friend-grid-col-options-icon">
                                        <span class="ti-more-alt"></span>
                                        <div class="friend-grid-col-options-dropdown" data-id="{{getFriendDetails($friend)->id}}">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div id="repeated-html" class="d-none">
        <div class="friend-grid-col-options-dropdown-inner">
            <div class="friend-grid-col-options-dropdown-main">
                <ul class="friend-grid-col-options-dropdown-ul">
                    <li class="friend-grid-col-options-dropdown-li">
                        <a href="javascript:void(0)" class="friend-grid-col-options-dropdown-link remove-friend">Remove Friend</a>
                    </li>
                    <li class="friend-grid-col-options-dropdown-li">
                        <a href="{{url('chat')}}" class="friend-grid-col-options-dropdown-link">Send Message</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="modal fade show" id="exampleFullScreenModal" tabindex="-1" style=";" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur.</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')

        <script>
        $(document).ready(function() {
            var repeated_html = $("#repeated-html").html();
            $(".friend-grid-col-options-dropdown").html(repeated_html);

            // More Trigger

            $(".friend-grid-col-options-icon").click(function() {
                // $(".friend-grid-col-options-dropdown").hide();
                $(this).find(".friend-grid-col-options-dropdown").toggle()
            })
            $(document).on('click', '.remove-friend', function () {
                var id =$(this).parent().parent().parent().parent().parent().attr('data-id');
                var now= $(this);
                $.ajax({
                    type: "POST",
                    url: "{{route('friends.remove.friend')}}",
                    dataType: "JSON",
                    data: {'id': id, _token: '{{csrf_token()}}'},
                    success: function (data) {
                        $('#total-friends').text(parseInt($('#total-friends').text())-1);
                        now.closest('.friend-grid-col').remove();
                    },
                    error: function (xhr) {
                        erroralert(xhr);
                    }
                });
            });

        })
    </script>
    @endpush
@endsection

