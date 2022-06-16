@extends('auth.layouts.app')
@section('content')

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        @if(session()->has('successMsg'))
        <script>
            $(function () {
                swal("Success!", '{{session()->get('successMsg')}}', "success");
            });
        </script>
        {{ session()->get('success') }}
    @endif
    <div class="form-div">
        <div class="container">
            <div class="form-div-inner">
                <div class="form-div-main-upper">
                    <div class="col-md-7">
                        <div class="form-div-main">
                            <form method="post" action="{{route('forgot.send.email')}}">
                                @csrf
                                <input type="hidden" value="{{$email}}" name="email">
                                <div class="form-box text-center">
                                    <div class="form-title pb-3">
                                        <h2>Password Link Sent</h2>
                                    </div>
                                    <div class="form-sub-title">
                                        <p class="mb-0">We have sent you password reset link on your email. If you have not received it, please check your spam folder. If you are unable to find the email, please click on "Resend Link" button to try again.</p>
                                    </div>
                                    <div class="form-action-button">
                                        <button class="custom-black-btn mr-3" type="submit">Resend Link</button>
                                        <a href="{{route('login')}}" class="custom-black-btn">Back</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .swal-text{
            text-align: center;
        }
    </style>


@endsection