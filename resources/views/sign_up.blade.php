@extends('auth.layouts.app')
@section('content')
    <link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    <div class="form-div">
        <div class="container">
            <div class="form-div-inner">
                <div class="form-div-main-upper">
                    <div class="col-md-9">
                        <div class="form-div-main">
                            <form id="register-form" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" value="{{$role}}" name="role">
                                <input type="hidden" value="{{$by}}" name="referred_by">
                                <input type="file" onchange="document.getElementById('user-image').src = window.URL.createObjectURL(this.files[0])" id="choose-pic-input" class='d-none' name="profile">

                                <div class="form-box text-center">
                                    <div class="form-sub-title">
                                        <p class="mb-3"><b>Profile Picture</b></p>
                                    </div>
                                    <div class="upload-profile-div">
                                        <div class="upload-profile-div-inner">
                                            <div class="upload-profile-image-div">
                                                <img src="{{url('assets/images/icons/user.png')}}" alt="" id="user-image">
                                                <div class="camera-icon" id="choose-pic-trigger"><img src="{{url('assets/images/icons/camera.png')}}" alt=""></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-field-grid">
                                        <div class="single-field">
                                            <div class="form-field">
                                                <input type="text" class="form-field-input form-control"
                                                       placeholder='Email Address' name="email">
                                            </div>
                                        </div>
                                        <div class="single-field">
                                            <div class="phone-number-field">
                                                <!-- <div class="flage-div">
                                                    <img src="../assets/images/icons/flage.png" alt=""> <span class="country-code">+1</span>
                                                </div> -->
                                                <div class="input">
                                                    <input type="text" class="form-field-input form-control w-100"
                                                           id="phone" placeholder='Mobile Number' name="phone">
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" value="" name="country_code" id="country_code">
                                        <div class="single-field">
                                            <div class="form-field">
                                                <input type="text" class="form-field-input form-control"
                                                       placeholder='First Name' name="fname">

                                            </div>
                                        </div>
                                        <div class="single-field">
                                            <div class="form-field">
                                                <input type="text" class="form-field-input form-control"
                                                       placeholder='Last Name' name="lname">
                                            </div>
                                        </div>
                                        <div class="single-field">
                                            <div class="form-field">
                                                <input type="text" class="form-field-input form-control"
                                                       placeholder='User Name' name="username">
                                            </div>
                                        </div>
                                        <div class="single-field">
                                            <div class="form-field">
                                                <select name="gender" id="gender" class='form-field-input form-control'>
                                                    <option value="" hidden>Gender</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="single-field">
                                            <div class="form-field">
                                                <input type="password" class="form-field-input form-control"
                                                       placeholder='Password' name="password">
                                            </div>
                                        </div>
                                        <div class="single-field">
                                            <div class="form-field">
                                                <input type="password" class="form-field-input form-control"
                                                       placeholder='Password' name="password_confirmation">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-info-text mt-2">
                                        <div class="small-text text-left">
                                            <i>*Password must be at least 8 characters long.</i>
                                        </div>
                                    </div>
                                    <div class="form-action-button justify-content-start">
                                        <button class="custom-black-btn" type="submit">Sign Up</button>
                                    </div>
                                    <div class="form-bottom-link text-left mt-2 small-text">
                                        <i>Already have an account?</i> <a href="{{url('login')}}">Log In</a>
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
            $(document).on('submit', '#register-form', function (e) {
                e.preventDefault();
                $('#country_code').val($('.iti__selected-dial-code').text());
                var method = 'POST';
                var button=$(this).find('button[type=submit]');
                var previous= button.text();
                button.attr('disabled','disabled').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing ...');

                $.ajax({
                    type:method,
                    url:'{{route('register')}}',
                    data: new FormData(this),
                    dataType:'JSON',
                    processData: false,
                    contentType: false,
                    cache: false,
                    success:function(data) {
                        button.attr('disabled',null).html(previous);
                        swal("Success!", "Congratulations! You account has been successfully created!", "success").then(function () {
                            window.location.href='{{route('home')}}';
                        });
                    },
                    error:function (xhr) {
                        button.attr('disabled',null).html(previous);
                        erroralert(xhr);
                    }
                });

            });
        });

        $('#choose-pic-trigger').click(function () {
            $("#choose-pic-input").trigger('click');
        });
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            separateDialCode: true
        });
    </script>
    <style>
        .iti{
            width: 100%;
        }
        #user-image {
            width: 142px;
            height: 142px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
@endsection
