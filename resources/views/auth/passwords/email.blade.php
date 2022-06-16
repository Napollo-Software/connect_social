@extends('auth.layouts.app')
@section('content')
<div class="form-div">
    <div class="container">
        <div class="form-div-inner">
            <div class="form-div-main-upper">
                <div class="col-md-7">
                    <div class="form-div-main">
                        <form method="post" action="{{route('forgot.send.email')}}">
                            @csrf
                            <div class="form-box text-center">
                                <div class="form-title pb-3">
                                    <h2>Forgot Password</h2>
                                </div>
                                <div class="form-sub-title">
                                    <p class="mb-1">Enter your email address to receive a password reset link.</p>
                                </div>
                                <div class="form-field mb-4">
                                    <input type="email" class="form-field-input form-control" placeholder="Enter your email" name="email">
                                    <span class="text-danger">@error('email'){{$message}} @enderror</span>
                                </div>
                                <div class="form-action-button">
                                    <button class="custom-black-btn" type="submit">Reset Password</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{url('index.js')}}"></script>

@endsection

