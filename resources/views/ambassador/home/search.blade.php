@extends('ambassador.layouts.app2')
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
                                                                <input type="text" value="{{$key}}" name="key" required>
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
                                                                @foreach($results as $user)
                                                                <div class="search-result-box-single custom-padding">
                                                                    <div class="search-result-box-single-inner">
                                                                        <div class="search-result-box-profile-info">
                                                                            <div class="search-result-box-profile-image">
                                                                                <img src="{{$user->profile_image()}}" alt="">
                                                                            </div>
                                                                            <div class="search-result-box-profile-text">
                                                                                <div class="user-name">
                                                                                    <a href="{{url('profile-view/'.$user->id)}}" class="text-decoration-none text-secondary">{{$user->fullName()}}</a>
                                                                                </div>
                                                                                <div class="user-relation">
                                                                                    @if(in_array($user->id,$friends))
                                                                                    Friends
                                                                                    @elseif(in_array($user->id,$connections))
                                                                                    Connections
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="search-result-box-profile-actions">
                                                                            <div class="search-result-box-profile-buttons">
                                                                                @if(in_array($user->id,$friends))
                                                                                    <button class='black-button'>Remove Friend</button>
                                                                                @elseif(in_array($user->id,$connections))
                                                                                    <button class='black-button'>Remove Connection</button>
                                                                                @endif
                                                                                <a href="{{route('chat',['receiver'=>$user->id])}}" class='black-button text-decoration-none py-2'>Send Message</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @endforeach
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
    @endpush
@endsection

