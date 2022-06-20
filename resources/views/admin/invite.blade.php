@extends("admin.layouts.app")
@section("style")
    <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

@section("wrapper")
    <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Invites</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page"> Invites</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--end breadcrumb-->


                <div class="row">
                    <div class="col-12 mx-auto">
                        <h6 class="mb-0 text-uppercase">Invites</h6>
                        <hr/>
                        <div class="card">
                            <div class="card-body">
                                <form id="send-invite-form">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Recipient Name</label>
                                        <input class="form-control mb-3" type="text" name="name" id="name" placeholder="Please type recipient name">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Recipient email</label>
                                        <input class="form-control mb-3" type="email" name="email" id="email" placeholder="Please type recipient email">
                                    </div>
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input class="form-control mb-3" type="hidden" name="subject" value="Join Through Referral Link ">
                                        <input class="form-control mb-3" type="text" id="subject" value="Join Through Referral Link " disabled readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <p class="bg-light border rounded p-3 message-value">
                                            Hi XXXXX,
                                            <br>
                                            <br>
                                            {{auth()->user()->fullName()}} has sent you an invitation link to join Connect Social network.
                                            <br>
                                            <br>
                                            You can use the below link to either join as Ambassador or Merchant on Connect Social network. You will be rewarded with XX Connect Coins as a welcome bonus after successful registration.
                                            <br>
                                            <br>
                                            Referral link: <a href="{{url('referral-link/join-as/'.auth()->user()->fullName().'/'.auth()->user()->id)}}">{{url('referral-link/join-as/'.auth()->user()->fullName().'/'.auth()->user()->id)}}</a><br>
                                            <br>
                                            <br>
                                            If you have any questions, feel free to contact us at mailto:abcxyz@gmail.com.
                                            <br>
                                            <br>
                                            Best Regards,
                                            Connect Social Team
                                        </p>
                                    </div>
                                    <div class="form-group" style="text-align: right;">
                                        <button type="submit" class="btn btn-primary px-5 btn-sm">Send</button>
                                    </div>

                                    <textarea class="form-control mb-3" name="message" id="message" placeholder="Message" rows="10" style="display: none"></textarea>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script>
        $(function () {
            $(document).on('submit','#send-invite-form',function (e) {
                e.preventDefault();
                var route = '{{route('invite.send')}}';
                var method = 'POST';
                var data = new FormData(this);
                var next = {'type':'form-reset','target':$('#send-invite-form')};
                submit($(this).find('button[type=submit]'),method,route,data,next);
            });
            var message= $('.message-value').html();
            message = message.substring(1)
            $('#message').val(message);
        });
    </script>
@endsection
@section('script')
    <script src="{{url('index.js')}}"></script>
@endsection