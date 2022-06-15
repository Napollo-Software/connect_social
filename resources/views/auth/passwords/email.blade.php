<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot Password -  Connect Social</title>
    <link rel="icon" type="image/x-icon" href="{{url('favicon.png')}}">
    <link rel="stylesheet" href="{{url('css/normalize.css')}}">
    <link rel="stylesheet" href="{{url('css/main.css')}}">
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{url('css/all.css')}}">
</head>
<body>
    <div class="action-div p-5">
        <div class="action-div-inner">
            <div class="containetr">
                <div class="row justify-content-center">
                    <div class="col-md-4 col-sm-8 col-xs-12">
                        <div class="action-div-logo-inner">
                            <img src="{{ asset('img/logo.png') }}" alt="" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-div">
        <div class="container">
            <div class="form-div-inner">
                <div class="form-div-main-upper">
                    <div class="col-md-7">
                        <div class="form-div-main">
                            <form  method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="form-box text-center">
                                    @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                    <div class="form-title pb-3">
                                       
                                        <h2>Forgot Password</h2>
                                    </div>
                                    <div class="form-sub-title">
                                        <p class="mb-0">Enter your email address to <br> receive a password reset link</p>
                                    </div>
                                    
                                    <div class="form-field mb-4">
                                        <input type="email" class="form-field-input form-control" placeholder="Enter Your Email" @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >
                                    </div>
                                    <div class="form-action-button">
                                        <button class="custom-black-btn"> {{ __(' Password Reset ') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>



