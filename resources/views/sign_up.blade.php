<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <script src="{{url('js/jquery.slim.min.js')}}"></script>
    <script src="{{url('js/popper.min.js')}}"></script>
    <script src="{{url('js/bootstrap.bundle.min.js')}}"></script>
    <style>
        .header {
            text-align: center;
            background-color: #F0F0F0;
            height: 100px;
        }

        .header > img {
            height: 100px;
        }

        .profile-s {
            font-weight: 700;
            Size: 20px;
            Line-height: 23px;
            font-family: arial;
        }

        .btn {
            background-color: black;
            border-color: #010101;
        }

        .btn-primary:hover {
            color: black;
            background-color: white;
            border-color: black;
        }

        .profile-pic {
            height: 141px;
            width: 141px;
            border-radius: 50%;
            background-color: grey;
            position: relative;
        }

        .profile-pic-main {
            text-align: center;
            width: 100%;
            padding-block: 2rem;
            position: relative;
        }

        .sign-up-main-div {
            padding-block: 3rem;
        }

        .sign-up-row {
            width: 100%;
        }

        .text-sign-up {

            color: #929292;
        }

        .pic-change {
            left: 52%;
            height: 35px;
            width: 35px;
            position: absolute;
            bottom: 34px;
            border-radius: 50%;
        }
    </style>

</head>

<body>
<div class="header">
    <img src="{{url('img/logo.png')}}">
</div>
<div class="profile-pic-main">
    <h3 class="profile-s">Profile Picture</h3>
    <img src="{{url('img/logo.png')}}" class="profile-pic">
    <img src="{{url('img/logo.png')}}" class="camera-logo">
</div>
<div class="container sign-up-main-div">
    <div class="sign-up-main">
        <form action="{{route('register')}}" method="post" id="sign-up-form">
            @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
            @csrf
                <input type="hidden" value="2" name="role">
            <div class="row ">
                <div class="form-group col-lg-6 ">
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    <span class="text-danger">@error('email'){{$message}} @enderror</span>
                </div>
                <div class="form-group col-lg-6 ">
                    <input name="phone" class="form-control" type="text" id="phone" placeholder="Mobile Number"/>
                    <span class="text-danger">@error('phone'){{$message}} @enderror</span>
                </div>
            </div>
            <div class="row ">
                <div class="form-group col-lg-6 ">
                    <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname">
                    <span class="text-danger">@error('fname'){{$message}} @enderror</span>

                </div>
                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname">
                    <span class="text-danger">@error('lname'){{$message}} @enderror</span>
                </div>
            </div>
            <div class="row ">
                <div class="form-group col-lg-6 ">
                    <input type="text" class="form-control" id="User_name" placeholder="User Name" name="username">
                    <span class="text-danger">@error('username'){{$message}} @enderror</span>

                </div>
                <div class="form-group col-lg-6">

                    <select id="gender" class="form-control" name="gender">
                        <option selected disabled>-- Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    <span class="text-danger">@error('gender'){{$message}} @enderror</span>

                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-6 ">
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                    <span class="text-danger">@error('password'){{$message}} @enderror</span>
                </div>
                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <input type="password" class="form-control" id="password_confirmation" placeholder="Confirm password"
                           name="password_confirmation">
                    <span class="text-danger">@error('password_confirmation'){{$message}} @enderror</span>

                </div>
            </div>
            <button type="submit" class="btn btn-primary col-lg-2">Sign Up</button>
            <p class="text-sign-up">Already have an account?<a href="#"> Log In</a></p>
        </form>
    </div>
</div>
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>
    $(function () {
        $('.sign-up-form').click(function (e) {
            e.preventDefault()
            $()
        });
    });
</script>

</body>
</html>
