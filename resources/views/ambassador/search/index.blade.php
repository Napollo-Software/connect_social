@extends('ambassador.layouts.app2')
@section('title')
Search
@endsection
@section('content')
    @include('ambassador.home.layouts.alert')
    @include('ambassador.home.layouts.navigation')
    <div class="profile-content">
        <div class="container">
            <div class="profile-content-inner">
                <div class="profile-content-boxs">
                    <div class="profile-content-boxs-single social-information-content-box">
                        <div class="social-information-content-inner">
                            <div class="content-sides">
                                <div class="content-side-01">
                                    <div class="content-cards">
                                        <div class="content-card">
                                            <div class="content-card-inner">
                                                <div class="content-top-bar">
                                                    <div class="content-top-bar-inner">
                                                        <div class="content-top-bar-title">
                                                            <div class="text">
                                                                Merchant Adds
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="add-image-inner">
                                                    <div class="add-image-main">
                                                        <img src="assets/images/adds-connent/01.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="add-image-inner">
                                                    <div class="add-image-main">
                                                        <img src="assets/images/adds-connent/02.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="add-image-inner m-0">
                                                    <div class="add-image-main">
                                                        <img src="assets/images/adds-connent/03.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-side-02">
                                    <div class="content-cards">
                                        <div class="content-card">
                                            <div class="content-card-inner">
                                                <div class="search-page-input-outer">
                                                    <div class="search-page-input-inner">
                                                        <div class="search-page-input-main">
                                                            <form action="{{url('search')}}" method="get">
                                                                <input type="text" value="{{$key}}" name="key" id="key" required autocomplete="off">
                                                                <button class='search-page-button black-button' type="submit"><span class="ti-search"></span></button>
                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="content-card">
                                            <div class="content-card-inner">
                                                <div class="search-result-box">
                                                    <div class="search-result-box-outer">
                                                        <div class="search-result-box-main">
                                                            <div class="title custom-padding">
                                                                Search Results
                                                            </div>
                                                            <div class="search-result-box-all">

                                                            </div>
                                                            <div class="show-more-resuls custom-padding text-center">
                                                                <a href='javascript:void(0)'>Show more results</a>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            function search(key) {
                $.ajax({
                    type: "POST",
                    url: "{{route('search.fetch')}}",
                    dataType: "JSON",
                    data: {'key': key, _token: '{{csrf_token()}}'},
                    beforeSend: function () {
                        $('.search-result-box-all').html('<div class="col-md-12 text-center"><h1><i class="spinner-border spinner-border-large"></i></h1></div>');
                    },
                    success: function (data) {
                        if (key){
                            $('.search-result-box-all').html(data);
                        } else{
                            $('.search-result-box-all').html('');
                        }
                    },
                    error: function (xhr) {
                        console.log(xhr);
                    }
                });
            }

            $(function () {
                search('{{$key}}');
                $(document).on('input paste','#key',function () {
                    search($(this).val());
                });

            });
        </script>
    @endpush
    <style>
        .friends-grid-main{
            min-height: 300px;
        }
        .spinner-border-large{
            display: inline-block;
            width: 5rem;
            height: 5rem;
            vertical-align: -.125em;
            border: .15em solid #007bff;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: .75s linear infinite spinner-border;
            animation: .75s linear infinite spinner-border;
        }
    </style>
@endsection

