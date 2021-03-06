@extends('ambassador.layouts.app')
@section('title')
    My Profile
@endsection
@section('content')
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
                                                <div class="content-top-bar custom-padding">
                                                    <div class="content-top-bar-inner">
                                                        <div class="content-top-bar-title">
                                                            <div class="text">
                                                                About
                                                            </div>
                                                            @if($user->id==auth()->user()->id)
                                                                <div class="edit-button"
                                                                     data-target=".abouy-text-editor"
                                                                     data-hide=".about-content" data-type="div">
                                                                    <div class="edit-button-inner">
                                                                        <span class="icon"><span
                                                                                    class="ti-pencil-alt"></span></span>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        </div>
                                                        @if($user->id==auth()->user()->id)
                                                            <div class="social-dropdown">
                                                                <div class="social-dropdown-inner open-dropdown dropdown-box"
                                                                     data-target=".drop-01">
                                                                    <div class="social-dropdown-main">
                                                                        <div class="icon">
                                                                            <img src="{{getPrivacyDetails(getSocialPrivacy('about'))['url']}}"
                                                                                 alt="">
                                                                        </div>
                                                                        <div class="text">
                                                                            <i style="font-style: normal">{{getPrivacyDetails(getSocialPrivacy('about'))['name']}}</i>
                                                                        </div>
                                                                        <div class="drop-icon">
                                                                            <span class="ti-angle-down"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="set-privacy-dropdown-inner social-privacy custom-dropdown custom-dropdown drop-01"
                                                                     data-key="about">
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="content-card-content">
                                                    <div class="content-card-content-inner about-content custom-padding">
                                                        <p id="about-text">
                                                            {{auth()->user()->details->about}}
                                                        </p>
                                                    </div>
                                                    @if($user->id==auth()->user()->id)

                                                        <div class="abouy-text-editor custom-padding"
                                                             style="display:none">
                                                            <div class="abouy-text-editor-inner">
                                                                <form id="about_form">
                                                                    @csrf
                                                                    <div class="abouy-text-editor-textarea">
                                                                        <textarea name="about" id="about"
                                                                                  rows="5">{{auth()->user()->details->about}}</textarea>
                                                                    </div>
                                                                    <div class="abouy-text-editor-button mt-2">
                                                                        <button type="submit">Save</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-card">
                                            <div class="content-card-inner">
                                                <div class="content-top-bar custom-padding">
                                                    <div class="content-top-bar-inner">
                                                        <div class="content-top-bar-title">
                                                            <div class="text">
                                                                Social Information
                                                            </div>
                                                        </div>
                                                        @if($user->id==auth()->user()->id)
                                                            <div class="edit-button" data-toggle="modal"
                                                                 data-target="#update-social-info-modal">
                                                                <div class="edit-button-inner">
                                                                <span class="icon"><span
                                                                            class="ti-pencil-alt"></span></span>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="content-card-content">
                                                    <div class="content-card-content-inner custom-padding">
                                                        <div class="social-info-editor-box">
                                                            <div class="social-info-editor-box-inner">
                                                                <ul class="social-info-editor-box-ul">
                                                                    <li class="social-info-editor-box-li custom-padding">
                                                                        <div class="info-editor-box">
                                                                            <div class="info-editor-box-title">
                                                                                <div class="info-editor-box-title-text">
                                                                                    City
                                                                                </div>
                                                                            </div>

                                                                            <div class="info-editor-box-value">
                                                                                <div class="info-editor-box-value-text"
                                                                                     id="city-text">
                                                                                    {{auth()->user()->details->city}}
                                                                                </div>
                                                                                @if($user->id==auth()->user()->id)
                                                                                    <div class="set-privacy-dropdown">
                                                                                        <div class="set-privacy-dropdown-value open-dropdown dropdown-box"
                                                                                             data-target=".drop-03">
                                                                                            <img src="{{getPrivacyDetails(getSocialPrivacy('city'))['url']}}"
                                                                                                 alt="">
                                                                                        </div>
                                                                                        <div class="set-privacy-dropdown-inner social-privacy custom-dropdown drop-03"
                                                                                             data-key="city">

                                                                                        </div>
                                                                                    </div>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="social-info-editor-box-li custom-padding">
                                                                        <div class="info-editor-box">
                                                                            <div class="info-editor-box-title">
                                                                                <div class="info-editor-box-title-text">
                                                                                    Current State
                                                                                </div>
                                                                            </div>

                                                                            <div class="info-editor-box-value">
                                                                                <div class="info-editor-box-value-text"
                                                                                     id="state-text">
                                                                                    {{auth()->user()->details->state}}

                                                                                </div>
                                                                                @if($user->id==auth()->user()->id)

                                                                                    <div class="set-privacy-dropdown">
                                                                                        <div class="set-privacy-dropdown-value open-dropdown dropdown-box"
                                                                                             data-target=".drop-04">
                                                                                            <img src="{{getPrivacyDetails(getSocialPrivacy('state'))['url']}}"
                                                                                                 alt="">
                                                                                        </div>
                                                                                        <div class="set-privacy-dropdown-inner social-privacy custom-dropdown drop-04"
                                                                                             data-key="state">

                                                                                        </div>
                                                                                    </div>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="social-info-editor-box-li custom-padding">
                                                                        <div class="info-editor-box">
                                                                            <div class="info-editor-box-title">
                                                                                <div class="info-editor-box-title-text">
                                                                                    Relationship Status
                                                                                </div>
                                                                            </div>

                                                                            <div class="info-editor-box-value">
                                                                                <div class="info-editor-box-value-text"
                                                                                     id="relationship-text">
                                                                                    {{auth()->user()->details->relationship}}

                                                                                </div>
                                                                                @if($user->id==auth()->user()->id)

                                                                                    <div class="set-privacy-dropdown">
                                                                                        <div class="set-privacy-dropdown-value open-dropdown dropdown-box"
                                                                                             data-target=".drop-05">
                                                                                            <img src="{{getPrivacyDetails(getSocialPrivacy('relationship'))['url']}}"
                                                                                                 alt="">
                                                                                        </div>
                                                                                        <div class="set-privacy-dropdown-inner social-privacy custom-dropdown drop-05"
                                                                                             data-key="relationship">

                                                                                        </div>
                                                                                    </div>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="social-info-editor-box-li custom-padding">
                                                                        <div class="info-editor-box">
                                                                            <div class="info-editor-box-title">
                                                                                <div class="info-editor-box-title-text">
                                                                                    Date of Joining
                                                                                </div>
                                                                            </div>

                                                                            <div class="info-editor-box-value">
                                                                                <div class="info-editor-box-value-text">
                                                                                    {{dateFormat(auth()->user()->details->joining,'d M Y')}}

                                                                                </div>
                                                                                @if($user->id==auth()->user()->id)

                                                                                    <div class="set-privacy-dropdown">
                                                                                        <div class="set-privacy-dropdown-value open-dropdown dropdown-box"
                                                                                             data-target=".drop-06">
                                                                                            <img src="{{getPrivacyDetails(getSocialPrivacy('joining'))['url']}}"
                                                                                                 alt="">
                                                                                        </div>
                                                                                        <div class="set-privacy-dropdown-inner social-privacy custom-dropdown drop-06"
                                                                                             data-key="joining">

                                                                                        </div>
                                                                                    </div>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="social-info-editor-box-li custom-padding">
                                                                        <div class="info-editor-box">
                                                                            <div class="info-editor-box-title">
                                                                                <div class="info-editor-box-title-text">
                                                                                    Workplace
                                                                                </div>
                                                                            </div>

                                                                            <div class="info-editor-box-value">
                                                                                <div class="info-editor-box-value-text"
                                                                                     id="workplace-text">
                                                                                    {{auth()->user()->details->workplace}}

                                                                                </div>
                                                                                @if($user->id==auth()->user()->id)
                                                                                    <div class="set-privacy-dropdown">
                                                                                        <div class="set-privacy-dropdown-value open-dropdown dropdown-box"
                                                                                             data-target=".drop-07">
                                                                                            <img src="{{getPrivacyDetails(getSocialPrivacy('workplace'))['url']}}"
                                                                                                 alt="">
                                                                                        </div>
                                                                                        <div class="set-privacy-dropdown-inner social-privacy custom-dropdown drop-07"
                                                                                             data-key="workplace">

                                                                                        </div>
                                                                                    </div>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="social-info-editor-box-li custom-padding">
                                                                        <div class="info-editor-box">
                                                                            <div class="info-editor-box-title">
                                                                                <div class="info-editor-box-title-text">
                                                                                    High School
                                                                                </div>
                                                                            </div>

                                                                            <div class="info-editor-box-value">
                                                                                <div class="info-editor-box-value-text"
                                                                                     id="high_school-text">
                                                                                    {{auth()->user()->details->high_school}}

                                                                                </div>
                                                                                @if($user->id==auth()->user()->id)
                                                                                    <div class="set-privacy-dropdown">
                                                                                        <div class="set-privacy-dropdown-value open-dropdown dropdown-box"
                                                                                             data-target=".drop-08">
                                                                                            <img src="{{getPrivacyDetails(getSocialPrivacy('high_school'))['url']}}"
                                                                                                 alt="">
                                                                                        </div>
                                                                                        <div class="set-privacy-dropdown-inner social-privacy custom-dropdown drop-08"
                                                                                             data-key="high_school">

                                                                                        </div>
                                                                                    </div>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="social-info-editor-box-li custom-padding">
                                                                        <div class="info-editor-box">
                                                                            <div class="info-editor-box-title">
                                                                                <div class="info-editor-box-title-text">
                                                                                    Hobbies
                                                                                </div>
                                                                            </div>

                                                                            <div class="info-editor-box-value">
                                                                                <div class="info-editor-box-value-text"
                                                                                     id="hobbies-text">
                                                                                    {{auth()->user()->details->hobbies}}
                                                                                </div>
                                                                                @if($user->id==auth()->user()->id)
                                                                                    <div class="set-privacy-dropdown">
                                                                                        <div class="set-privacy-dropdown-value open-dropdown dropdown-box"
                                                                                             data-target=".drop-09">
                                                                                            <img src="{{getPrivacyDetails(getSocialPrivacy('hobbies'))['url']}}"
                                                                                                 alt="">
                                                                                        </div>
                                                                                        <div class="set-privacy-dropdown-inner social-privacy custom-dropdown drop-09"
                                                                                             data-key="hobbies">

                                                                                        </div>
                                                                                    </div>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="social-info-editor-box-li custom-padding">
                                                                        <div class="info-editor-box">
                                                                            <div class="info-editor-box-title">
                                                                                <div class="info-editor-box-title-text">
                                                                                    Email Address
                                                                                </div>
                                                                            </div>

                                                                            <div class="info-editor-box-value">
                                                                                <div class="info-editor-box-value-text">
                                                                                    {{auth()->user()->email}}

                                                                                </div>
                                                                                @if($user->id==auth()->user()->id)
                                                                                    <div class="set-privacy-dropdown">
                                                                                        <div class="set-privacy-dropdown-value open-dropdown dropdown-box"
                                                                                             data-target=".drop-10">
                                                                                            <img src="{{getPrivacyDetails(getSocialPrivacy('email'))['url']}}"
                                                                                                 alt="">
                                                                                        </div>
                                                                                        <div class="set-privacy-dropdown-inner social-privacy custom-dropdown drop-10"
                                                                                             data-key="email">

                                                                                        </div>
                                                                                    </div>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="social-info-editor-box-li custom-padding">
                                                                        <div class="info-editor-box">
                                                                            <div class="info-editor-box-title">
                                                                                <div class="info-editor-box-title-text">
                                                                                    Mobile Number
                                                                                </div>
                                                                            </div>

                                                                            <div class="info-editor-box-value">
                                                                                <div class="info-editor-box-value-text">
                                                                                    {{auth()->user()->phone}}

                                                                                </div>
                                                                                @if($user->id==auth()->user()->id)
                                                                                    <div class="set-privacy-dropdown">
                                                                                        <div class="set-privacy-dropdown-value open-dropdown dropdown-box"
                                                                                             data-target=".drop-11">
                                                                                            <img src="{{getPrivacyDetails(getSocialPrivacy('phone'))['url']}}"
                                                                                                 alt="">
                                                                                        </div>
                                                                                        <div class="set-privacy-dropdown-inner social-privacy custom-dropdown drop-11"
                                                                                             data-key="phone">

                                                                                        </div>
                                                                                    </div>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="social-info-editor-box-li custom-padding">
                                                                        <div class="info-editor-box">
                                                                            <div class="info-editor-box-title">
                                                                                <div class="info-editor-box-title-text">
                                                                                    Gender
                                                                                </div>
                                                                            </div>

                                                                            <div class="info-editor-box-value">
                                                                                <div class="info-editor-box-value-text"
                                                                                     id="gender-text">
                                                                                    {{auth()->user()->gender}}

                                                                                </div>
                                                                                @if($user->id==auth()->user()->id)
                                                                                    <div class="set-privacy-dropdown">
                                                                                        <div class="set-privacy-dropdown-value open-dropdown dropdown-box"
                                                                                             data-target=".drop-12">
                                                                                            <img src="{{getPrivacyDetails(getSocialPrivacy('gender'))['url']}}"
                                                                                                 alt="">
                                                                                        </div>
                                                                                        <div class="set-privacy-dropdown-inner social-privacy custom-dropdown drop-12"
                                                                                             data-key="gender">

                                                                                        </div>
                                                                                    </div>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-card">
                                            <div class="content-card-inner">
                                                <div class="content-top-bar custom-padding">
                                                    <div class="content-top-bar-inner">
                                                        <div class="content-top-bar-title">
                                                            <div class="text">
                                                                Gallery
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content-card-content">
                                                    <div class="content-card-content-inner">
                                                        <div class="photo-galary-grid">
                                                            <div class="photo-galary-grid-inner">
                                                                @foreach($images as $k=>$image)
                                                                    @if($k<15)
                                                                        <div class="photo-grid-col">
                                                                            <div class="photo-grid-col-inner">
                                                                                <img src="{{$image}}" alt="{{$image}}">
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="see-all custom-padding">
                                                        <div class="see-all-inner">
                                                            <a href="{{route('gallery',['all'])}}">See All</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-card">
                                            <div class="content-card-inner">
                                                <div class="content-top-bar custom-padding">
                                                    <div class="content-top-bar-inner w-100">
                                                        <div class="content-top-bar-title w-100">
                                                            <div class="text w-100 custom-flex">
                                                                <div class="icon-hover-network">
                                                                    <span class="icon hover profile-network"
                                                                          {{$type=='friends'?'active':''}} data-type='friends'>
                                                                            <img src="{{url('ambassador_assets/images/icons/users.svg')}}"
                                                                                 alt=""
                                                                                 style="width: 25px;margin-right: 2px;">
                                                                    </span>
                                                                    <div class="text-badge-01">
                                                                        {{getFriendsList($user->id)->count()}}
                                                                    </div>
                                                                </div>
                                                                <div class="icon-hover-network">
                                                                    <span class="icon profile-network"
                                                                          data-type='connections'>
                                                                        <img src="{{url('ambassador_assets/images/icons/connection.svg')}}"
                                                                             alt="">
                                                                    </span>
                                                                    <div class="text-badge-01">
                                                                        {{getConnectionsList($user->id)->count()}}
                                                                    </div>
                                                                </div>
                                                                <div class="icon-hover-network">
                                                                    <span class="icon profile-network"
                                                                          data-type='tier-1'>
                                                                        <img src="{{url('ambassador_assets/images/icons/personal-network.svg')}}"
                                                                             alt="">
                                                                    </span>
                                                                    <div class="text-badge-01">
                                                                        {{auth()->user()->tier_1()->count()}}
                                                                    </div>
                                                                </div>
                                                                <div class="icon-hover-network">
                                                                    <span class="icon profile-network"
                                                                          data-type='tier-2'>
                                                                        <img src="{{url('ambassador_assets/images/icons/extended-network.svg')}}"
                                                                             alt="">
                                                                    </span>
                                                                    <div class="text-badge-01">
                                                                        {{auth()->user()->tier_2()->count()}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content-card-content">
                                                    <div class="content-card-content-inner">
                                                        <div class="friend-grid">
                                                            <div class="friend-grid-inner">

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="see-all custom-padding">
                                                        <div class="see-all-inner see-all-url">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-side-02">
                                    <div class="content-cards">
                                        @if($user->id==auth()->user()->id)
                                        @include('ambassador.profile.components.add_post')
                                        @endif
                                    </div>
                                    @include('ambassador.profile.components.show_posts')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="privacy_dropdown" style='display: none'>
        <ul class="set-privacy-dropdown-ul">
            <li class="set-privacy-dropdown-li" data-value="{{Privacy::PRIV_FRIENDS}}">
                <div class="set-privacy-dropdown-icon">
                    <img src="{{url('ambassador_assets/images/icons/users.svg')}}" alt=""> <span
                            class="text">Friends</span>
                </div>
            </li>
            <li class="set-privacy-dropdown-li" data-value="{{Privacy::PRIV_PUBLIC}}">
                <div class="set-privacy-dropdown-icon">
                    <img src="{{url('ambassador_assets/images/icons/globe.svg')}}" alt=""> <span
                            class="text">Public</span>
                </div>
            </li>
            <li class="set-privacy-dropdown-li" data-value="{{Privacy::PRIV_CONNECTIONS}}">
                <div class="set-privacy-dropdown-icon">
                    <img src="{{url('ambassador_assets/images/icons/connection.svg')}}" alt=""> <span class="text">Connections</span>
                </div>
            </li>
            <li class="set-privacy-dropdown-li" data-value="{{Privacy::PRIV_TIER_1}}">
                <div class="set-privacy-dropdown-icon">
                    <img src="{{url('ambassador_assets/images/icons/personal-network.svg')}}" alt=""> <span
                            class="text">Personal Tier 1</span>
                </div>
            </li>
            <li class="set-privacy-dropdown-li" data-value="{{Privacy::PRIV_TIER_2}}">
                <div class="set-privacy-dropdown-icon">
                    <img src="{{url('ambassador_assets/images/icons/extended-network.svg')}}" alt=""> <span
                            class="text">Extended Tier 2</span>
                </div>
            </li>
        </ul>
    </div>
    @if($user->id==auth()->user()->id)
        <div class="modal fade" id="update-social-info-modal" tabindex="-1" role="dialog"
             aria-labelledby="update-social-info-modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h5 class="modal-title" id="update-social-info-modalLabel"><i class="ti-pencil"></i> Update
                            Social
                            Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="social_info_form">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                @if (auth()->user()->details->kyc_status==KYC::STATUS_APPROVED)
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" value="{{auth()->user()->username}}"
                                                   name="username" id="username">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="username">Phone</label>
                                            <input type="text" class="form-field-input form-control w-100"
                                                   value="{{auth()->user()->phone}}" id="phone"
                                                   placeholder='Mobile Number' name="phone">
                                            <input type="hidden" value="" name="country_code" id="country_code">
                                        </div>
                                    </div>
                                @endif
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control"
                                               value="{{auth()->user()->details->city}}"
                                               name="city" id="city">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="state">Current State</label>
                                        <input type="text" class="form-control"
                                               value="{{auth()->user()->details->state}}"
                                               name="state" id="state">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="relationship">Relationship Status</label>
                                        <select name="relationship" id="relationship" class="form-control">
                                            <option value="" hidden>Select Status</option>
                                            <option value="single" {{auth()->user()->details->relationship=='single'?'selected':''}}>
                                                Single
                                            </option>
                                            <option value="married" {{auth()->user()->details->relationship=='married'?'selected':''}}>
                                                Married
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="workplace">Workplace</label>
                                        <input type="text" name="workplace" id="workplace" class="form-control"
                                               value="{{auth()->user()->details->workplace}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="high_school">High School</label>
                                        <input type="text" name="high_school" id="high_school" class="form-control"
                                               value="{{auth()->user()->details->high_school}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="hobbies">Hobbies</label>
                                        <input type="text" class="form-control" id="hobbies" name="hobbies"
                                               value="{{auth()->user()->details->city}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select name="gender" id="gender" class="form-control">
                                            <option value="" hidden>Select Gender</option>
                                            <option value="male" {{auth()->user()->gender=='male'?'selected':''}}>Male
                                            </option>
                                            <option value="female" {{auth()->user()->gender=='female'?'selected':''}}>
                                                Female
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer share-post-button">
                            <button type="button" data-dismiss="modal">Close</button>
                            <button type="submit">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    @endif
@endsection
<script src="{{url('index.js')}}"></script>
@push('scripts')
    <script>
        var token = '{{csrf_token()}}';
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            separateDialCode: true,
            initialCountry: "auto",
        });
        $(function () {
            fetchNetworkOnProfile('{{$type}}', '{{route('ambassador.fetch.network')}}', token, '{{route('network',['friends'])}}')
            $(document).on('click', '.profile-network', function (e) {
                e.preventDefault();
                var type = $(this).attr('data-type');
                fetchNetworkOnProfile(type, '{{route('ambassador.fetch.network')}}', token, '{{route('network',['friends'])}}')
            });
            @if($user->id==auth()->user()->id)
            $(document).on('submit', '#about_form', function (e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "{{route('ambassador.update.about')}}",
                    data: new FormData(this),
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: function (data) {
                        $('.abouy-text-editor').hide();
                        $('.about-content').show();
                        $('#about-text').text(data.response.about);
                    },
                    error: function (xhr) {
                        erroralert(xhr);
                    }
                });

            });
            $(document).on('submit', '#social_info_form', function (e) {
                e.preventDefault();
                $('#country_code').val($('.iti__selected-dial-code').text());
                $.ajax({
                    type: "POST",
                    url: "{{route('ambassador.update.social.info')}}",
                    data: new FormData(this),
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: function (data) {
                        $('#update-social-info-modal').modal('hide');
                        $('#city-text').text(data.response.city);
                        $('#gender-text').text(data.response.gender);
                        $('#high_school-text').text(data.response.high_school);
                        $('#hobbies-text').text(data.response.hobbies);
                        $('#relationship-text').text(data.response.relationship);
                        $('#state-text').text(data.response.state);
                        $('#workplace-text').text(data.response.workplace);

                    },
                    error: function (xhr) {
                        erroralert(xhr);
                    }
                });

            });

            @endif
        });

        function changePrivacy(key, value) {
            $.ajax({
                type: "POST",
                url: "{{route('ambassador.update.privacy')}}",
                dataType: "JSON",
                data: {'key': key, 'value': value, _token: '{{csrf_token()}}'},
                success: function (data) {
                },
                error: function (xhr) {
                    erroralert(xhr);
                }
            });
        }
    </script>
    @stack('subscripts')
@endpush

