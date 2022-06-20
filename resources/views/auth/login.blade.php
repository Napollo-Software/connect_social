{{--
<!DOCTYPE html>
<html>
<head>
    <title>Login | Connect Social</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/coin.png') }}">
</head>
<style type="text/css">
    .btn-csutom {
        background-color: #333;
        width: 100%;
        border: none;
    }
    .btn-csutom:hover {
        background-color: #000;
    }
    .footer-text {
        text-align: center;
    }
    .section-cis {
        padding-top: 60px;
        padding-bottom: 60px;
    }
    .heading {
        font-size: 30px;
        font-weight: 600;
        text-align: center;
    }
    .small-text {
        font-size: 17px;
        margin-bottom: 23px;
        text-align: center;
    }
    img.img-ctrl {
        width: 500px;
        margin-left: 250px;
    }
    .logo {
        width: 364px;
    }
</style>
<body>
<section class="section-cis">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:30px; ">
                <p style="text-align: center;"><img class="logo" src="{{ asset('img/logo.png') }}" alt="tag"></p>
                <h4 class="heading">Log in to Admin Panel</h4>
                <p class="small-text">Enter your email and password to sign in</p>
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <div class="form-group" style="margin-bottom:20px;">
                        <label for="names">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Your Email here" value="{{old('email')}}">
                        <span class="text-danger">@error('email'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group" style="margin-bottom:20px;">
                        <label for="names">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password" value="{{old('password')}}">
                        <span class="text-danger">@error('password'){{$message}} @enderror</span>
                    </div>
                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                    <div class="form-group">
                        <button class="btn btn-block btn-primary btn-csutom" type="submit">Login</button>
                    </div>
                    <br>
                    <!--<a href="registration">New to our platform? Registration</a>-->
                </form>
            </div>
            <div class="col-md-8 col-md-offset-8" style="margin-top:30px; ">
                <p style="text-align: center;"><img class="img-ctrl" src="{{ url('img/coin.png') }}" alt="tag"></p>
            </div>
        </div>
    </div>
</section>
<footer>
    <p class="footer-text">Copyright 2022 © Connect Social</p>
</footer>

</body>
</html>


--}}

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
                                            <div class="login-form-box-title">
                                                Log in to Admin Panel
                                            </div>
                                            <div class="login-form-box--bottom-title">
                                                Enter your email and password to sign in
                                            </div>
                                            <div class="login-form-fields">
                                                <form action="{{route('login')}}" method="post">
                                                    @csrf
                                                    <div class="login-form-fields-outer">
                                                        <div class="login-form-fields-inner">
                                                            <div class="login-form-field-single">
                                                                <label id="email">Email</label>
                                                                <input type="email" placeholder="Email Address" name="email" id="email" value="{{old('email')}}">
                                                                <span class="text-danger">@error('email'){{$message}} @enderror</span>
                                                            </div>
                                                            <div class="login-form-field-single">
                                                                <label id="password">Password</label>
                                                                <input type="password" placeholder="Email Address" name="password" id="password" value="{{old('password')}}">
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
