@extends('auth.layouts.app')
@section('content')
    <div class="form-div">
        <div class="container">
            <div class="form-div-inner">
                <div class="form-div-main-upper">
                    <div class="col-md-8">
                        <div class="form-div-main mb-0">
                            <form id="verify-code">
                                @csrf
                                <div class="form-box text-center">
                                    <div class="form-title pb-3">
                                        <h2>Email Verification</h2>
                                    </div>
                                    <div class="form-sub-title">
                                        <p class="mb-3">We have just sent you a verification code on
                                            <b>{{auth()->user()->email}}</b>
                                            Please enter your verification code to activate your account.
                                        </p>
                                    </div>
                                    <div class="form-field mb-4">
                                        <input type="number" class="form-field-input form-control" placeholder="Enter one time code" name="code">
                                    </div>
                                    <div class="form-action-button">
                                        <button class="custom-black-btn mr-3" type="submit">Submit</button>
                                        <button class="custom-black-btn mr-3" id="resend-code" type="button">Resend Code</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="{{url('index.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $(function () {
            $(document).on('submit', '#verify-code', function (e) {
                e.preventDefault();
                var route = '{{route('email.verify.code')}}';
                var method = 'POST';
                var data = new FormData(this);
                var next = {'type': 'next-route','url':'{{route('dashboard')}}'};
                submit($(this).find('button[type=submit]'), method, route, data, next);

            });
            $(document).on('click', '#resend-code', function (e) {
                e.preventDefault();
                var route = '{{route('email.resend.code')}}';
                var method = 'GET';
                var next = {'type': 'next-route','url':'{{route('dashboard')}}'};
                var data = {_token:'{{csrf_token()}}'};
                submit($(this), method, route, data, next);
            });

        });
        </script>
@endsection
