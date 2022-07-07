<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login - ConnectSocial</title>
    <!-- Icon -->
    <link rel="icon" type="image/x-icon" href="{{url('assets/images/favicon.png')}}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <!-- Custom -->
    <link rel="stylesheet" href="{{url('assets/css/login.css')}}">
    <!-- Icons -->
    <link rel="stylesheet" href="{{url('assets/lib/icons/themify-icons.css')}}">
</head>
<body>
<div class="login-screen-wrapper">
    <div class="login-screen-wrapper-outer">
        <div class="login-screen-wrapper-inner">
            <div class="login-screen-wrapper-main">
                <div class="login-screen-sides">
                    <div class="login-screen-sides-outer">
                        <div class="login-screen-sides-inner">
                            <div class="login-form">
                                <div class="login-form-outer">
                                    <div class="login-form-inner">
                                        <div class="login-form-image">
                                            <div class="login-form-image-inner">
                                                <img src="{{url('assets/images/logo.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="login-form-box">
                                            {{--<div class="login-form-box-title">
                                                Log in to Admin Panel
                                            </div>
                                            <div class="login-form-box--bottom-title">
                                                Enter your email and password to sign in
                                            </div>
                                            --}}
                                            <div class="login-form-fields">
                                                <form action="{{route('login')}}" method="post">
                                                    @csrf
                                                    <div class="login-form-fields-outer">
                                                        <div class="login-form-fields-inner">
                                                            <div class="login-form-field-single">
                                                                <label id="email">Email</label>
                                                                <input type="email" placeholder="Email" name="email" id="email" value="{{old('email')}}">
                                                                <span class="text-danger">@error('email'){{$message}} @enderror</span>
                                                            </div>
                                                            <div class="login-form-field-single">
                                                                <label id="password">Password</label>
                                                                <input type="password" placeholder="Password" name="password" id="password" value="{{old('password')}}">
                                                                <span class="text-danger">@error('password'){{$message}} @enderror</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="forgot-password-link">
                                                        <a href="{{ route('password.request') }}">Forgot Password?</a>
                                                    </div>
                                                    <div class="login-button">
                                                        <button type="submit">Log in</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="login-image">
                                <div class="login-image-inner">
                                    <div class="login-image-main">
                                        <img src="{{url('assets/images/icons/coin.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
