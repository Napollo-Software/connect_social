@extends('ambassador.layouts.app')
@section('content')
    @include('ambassador.layouts.friends-navigation')
    <div class="friends-grid">
        <div class="friends-grid-inner">
            <div class="container">
                <div class="friends-grid-main">

                </div>
            </div>
        </div>
    </div>
    <div id="repeated-html" class="d-none">
        <div class="friend-grid-col-options-dropdown-inner">
            <div class="friend-grid-col-options-dropdown-main">
                <ul class="friend-grid-col-options-dropdown-ul">
                    <li class="friend-grid-col-options-dropdown-li">
                        <a href="javascript:void(0)" class="friend-grid-col-options-dropdown-link remove-{{$type}}">Remove {{ucfirst($type)}}</a>
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


                $(document).on('click',".friend-grid-col-options-icon",function() {
                    $(this).find(".friend-grid-col-options-dropdown").toggle()
                });
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
                $(document).on('click', '.remove-connection', function () {
                    var id =$(this).parent().parent().parent().parent().parent().attr('data-id');
                    var now= $(this);

                    $.ajax({
                        type: "POST",
                        url: "{{route('connections.remove.connection')}}",
                        dataType: "JSON",
                        data: {'id': id, _token: '{{csrf_token()}}'},
                        success: function (data) {
                            $('#total-connections').text(parseInt($('#total-connections').text())-1);
                            now.closest('.friend-grid-col').remove();

                        },
                        error: function (xhr) {
                            erroralert(xhr);
                        }
                    });
                });


                fetch('{{$type}}','{{$user->id}}');

                $(document).on('click','.network-link',function (e) {
                    e.preventDefault();
                    $('.inner-navigation-li.active').removeClass('active');
                    $(this).parent().addClass('active');
                    var type= $(this).attr('data-type');
                    fetch(type,'{{$user->id}}');
                    window.history.pushState({}, null, '/network/'+type);
                });

            });
            function fetch(type,user) {
                $.ajax({
                    type: "POST",
                    url: "{{route('network.fetch')}}",
                    dataType: "JSON",
                    data: {'type': type,'user': user, _token: '{{csrf_token()}}'},
                    beforeSend: function () {
                        $('.friends-grid-main').html('<div class="col-md-12 text-center"><h1><i class="spinner-border spinner-border-large"></i></h1></div>')

                    },
                    success: function (data) {
                        $('.friends-grid-main').html(data);
                        var repeated_html = $("#repeated-html").html();
                        $(".friend-grid-col-options-dropdown").html(repeated_html);
                        if (type=='tier-1' || type=='tier-2'){
                            $(".friend-grid-col-options-dropdown").find($('.remove-'+type).hide());
                        }else{
                            $(".friend-grid-col-options-dropdown").find($('.remove-'+type).show());
                        }
                    },
                    error: function (xhr) {
                        console.log(xhr);
                    }
                });
            }
        </script>
    @endpush
    <style>
        .friends-grid-main{
            min-height: 300px;
        }
        .spinner-border-large{
            display: inline-block;
            width: 5rem;
            height: 5rem;
            vertical-align: -.125em;
            border: .15em solid #007bff;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: .75s linear infinite spinner-border;
            animation: .75s linear infinite spinner-border;
        }
    </style>
@endsection

