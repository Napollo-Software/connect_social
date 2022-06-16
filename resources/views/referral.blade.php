@extends('auth.layouts.app')
@section('content')
    <div class="form-div">
        <div class="container">
            <div class="form-div-inner">
                <div class="form-div-main-upper">
                    <div class="col-md-7">
                        <div class="form-div-main">
                            <div class="form-box text-center">
                                <div class="form-title pb-3">
                                    <h2>Referral Link</h2>
                                </div>
                                <div class="form-sub-title">
                                    <p class="mb-3 small-text"><a href="javascript:void(0);" id="sign-up">{{url('referral-link/'.$name.'/'.$id)}}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script>
        $(function () {
            $('#sign-up').click(function (e) {
                e.preventDefault();
                $('#submit-sign-up').submit();
            });
        });
    </script>
    <form action="{{route('join.as')}}" id="submit-sign-up" method="post">
        @csrf
        <input type="hidden" value="{{$id}}" name="referer">
    </form>
@endsection

















