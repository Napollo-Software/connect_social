@extends('auth.layouts.app')
@section('content')

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{url('index.js')}}"></script>

    <div class="form-div">
        <div class="container">
            <div class="form-div-inner">
                <div class="form-div-main-upper">
                    <div class="col-md-7">
                        <div class="form-div-main">
                            @if($account)
                                @if($tokenverify)
                                    <form id="change-password">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$user->id}}">
                                        <div class="form-box text-center">
                                            <div class="form-title pb-3">
                                                <h2>Create New Password</h2>
                                            </div>
                                            <div class="form-field mb-4">
                                                <input type="password" class="form-field-input form-control"
                                                       name="password" placeholder="Enter new password">
                                            </div>
                                            <div class="form-field mb-4">
                                                <input type="password" class="form-field-input form-control"
                                                       name="password_confirmation" placeholder="Confirm new password">
                                            </div>
                                            <div class="form-action-button">
                                                <button class="custom-black-btn mr-3" type="submit">Reset Password</button>
                                                <a href="{{route('login')}}" class="custom-black-btn">Back</a>
                                            </div>
                                        </div>
                                    </form>
                                    <script>
                                        $(function () {
                                           $('#change-password').submit(function (e) {
                                               e.preventDefault();
                                               var route = '{{route('forgot.change.password')}}';
                                               var method = 'POST';
                                               var data = new FormData(this);
                                               var next = {'type':'reload'};
                                               submit($(this).find('button[type=submit]'),method,route,data,next);
                                           });
                                        });
                                    </script>
                                @else
                                    <div class="form-box text-center">
                                        <h2>Your token is expired.</h2>
                                    </div>
                                @endif
                            @else
                                <div class="form-box text-center">
                                    <h2>User not found</h2>
                                </div>
                            @endif
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