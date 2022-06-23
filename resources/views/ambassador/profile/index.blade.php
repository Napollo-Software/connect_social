@extends('ambassador.layouts.app')

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
                                                <div class="content-top-bar">
                                                    <div class="content-top-bar-inner">
                                                        <div class="content-top-bar-title">
                                                            <div class="text">
                                                                About
                                                            </div>
                                                            <div class="edit-button" data-target=".abouy-text-editor" data-hide=".about-content" data-type="div">
                                                                <div class="edit-button-inner">
                                                                    <span class="icon"><span class="ti-pencil-alt"></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="social-dropdown">
                                                            <div class="social-dropdown-inner open-dropdown" data-target=".drop-01">
                                                                <div class="social-dropdown-main">
                                                                    <div class="icon">
                                                                        <img src="ambassador_assets/images/icons/users.svg" alt="">
                                                                    </div>
                                                                    <div class="text">
                                                                        <i style="font-style: normal">Friends</i>
                                                                    </div>
                                                                    <div class="drop-icon">
                                                                        <span class="ti-angle-down"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="set-privacy-dropdown-inner drop-01">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content-card-content">
                                                    <div class="content-card-content-inner about-content">
                                                        <p id="about-text">
                                                            {{auth()->user()->details->about}}
                                                        </p>
                                                    </div>
                                                    <div class="abouy-text-editor"  style="display:none">
                                                        <div class="abouy-text-editor-inner">
                                                            <form action="#">
                                                                <div class="abouy-text-editor-textarea">
                                                                                            <textarea name="about_info" rows="5">{{auth()->user()->details->about}}</textarea>
                                                                </div>
                                                                <div class="abouy-text-editor-button">
                                                                    <button>Save</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-card">
                                            <div class="content-card-inner">
                                                <div class="content-top-bar">
                                                    <div class="content-top-bar-inner">
                                                        <div class="content-top-bar-title">
                                                            <div class="text">
                                                                Social Information
                                                            </div>
                                                        </div>
                                                        <div class="edit-button" data-toggle="modal" data-target="#update-social-info-modal">
                                                            <div class="edit-button-inner">
                                                                <span class="icon"><span class="ti-pencil-alt"></span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content-card-content">
                                                    <div class="content-card-content-inner">
                                                        <div class="social-info-editor-box">
                                                            <div class="social-info-editor-box-inner">
                                                                <ul class="social-info-editor-box-ul">
                                                                    <li class="social-info-editor-box-li">
                                                                        <div class="info-editor-box">
                                                                            <div class="info-editor-box-title">
                                                                                <div class="info-editor-box-title-text" >
                                                                                    City
                                                                                </div>
                                                                            </div>

                                                                            <div class="info-editor-box-value">
                                                                                <div class="info-editor-box-value-text" id="city-text">
                                                                                    {{auth()->user()->details->city}}

                                                                                </div>
                                                                                <div class="set-privacy-dropdown">
                                                                                    <div class="set-privacy-dropdown-value open-dropdown" data-target=".drop-03">
                                                                                        <img src="ambassador_assets/images/icons/users.svg" alt="">
                                                                                    </div>
                                                                                    <div class="set-privacy-dropdown-inner drop-03">

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="social-info-editor-box-li">
                                                                        <div class="info-editor-box">
                                                                            <div class="info-editor-box-title">
                                                                                <div class="info-editor-box-title-text">
                                                                                    Current State
                                                                                </div>
                                                                            </div>

                                                                            <div class="info-editor-box-value">
                                                                                <div class="info-editor-box-value-text" id="state-text">
                                                                                    {{auth()->user()->details->state}}

                                                                                </div>
                                                                                <div class="set-privacy-dropdown">
                                                                                    <div class="set-privacy-dropdown-value open-dropdown" data-target=".drop-04">
                                                                                        <img src="ambassador_assets/images/icons/users.svg" alt="">
                                                                                    </div>
                                                                                    <div class="set-privacy-dropdown-inner drop-04">

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="social-info-editor-box-li">
                                                                        <div class="info-editor-box">
                                                                            <div class="info-editor-box-title">
                                                                                <div class="info-editor-box-title-text">
                                                                                    Relationship Status
                                                                                </div>
                                                                            </div>

                                                                            <div class="info-editor-box-value">
                                                                                <div class="info-editor-box-value-text" id="relationship-text">
                                                                                    {{auth()->user()->details->relationship}}

                                                                                </div>
                                                                                <div class="set-privacy-dropdown">
                                                                                    <div class="set-privacy-dropdown-value open-dropdown" data-target=".drop-05">
                                                                                        <img src="ambassador_assets/images/icons/users.svg" alt="">
                                                                                    </div>
                                                                                    <div class="set-privacy-dropdown-inner drop-05">

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="social-info-editor-box-li">
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
                                                                                <div class="set-privacy-dropdown">
                                                                                    <div class="set-privacy-dropdown-value open-dropdown" data-target=".drop-06">
                                                                                        <img src="ambassador_assets/images/icons/users.svg" alt="">
                                                                                    </div>
                                                                                    <div class="set-privacy-dropdown-inner drop-06">

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="social-info-editor-box-li">
                                                                        <div class="info-editor-box">
                                                                            <div class="info-editor-box-title">
                                                                                <div class="info-editor-box-title-text">
                                                                                    Workplace
                                                                                </div>
                                                                            </div>

                                                                            <div class="info-editor-box-value" >
                                                                                <div class="info-editor-box-value-text" id="workplace-text">
                                                                                    {{auth()->user()->details->workplace}}

                                                                                </div>
                                                                                <div class="set-privacy-dropdown">
                                                                                    <div class="set-privacy-dropdown-value open-dropdown" data-target=".drop-07">
                                                                                        <img src="ambassador_assets/images/icons/users.svg" alt="">
                                                                                    </div>
                                                                                    <div class="set-privacy-dropdown-inner drop-07">

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="social-info-editor-box-li">
                                                                        <div class="info-editor-box">
                                                                            <div class="info-editor-box-title">
                                                                                <div class="info-editor-box-title-text">
                                                                                    High School
                                                                                </div>
                                                                            </div>

                                                                            <div class="info-editor-box-value">
                                                                                <div class="info-editor-box-value-text" id="high_school-text">
                                                                                    {{auth()->user()->details->high_school}}

                                                                                </div>
                                                                                <div class="set-privacy-dropdown">
                                                                                    <div class="set-privacy-dropdown-value open-dropdown" data-target=".drop-08">
                                                                                        <img src="ambassador_assets/images/icons/users.svg" alt="">
                                                                                    </div>
                                                                                    <div class="set-privacy-dropdown-inner drop-08">

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="social-info-editor-box-li">
                                                                        <div class="info-editor-box">
                                                                            <div class="info-editor-box-title">
                                                                                <div class="info-editor-box-title-text">
                                                                                    Hobbies
                                                                                </div>
                                                                            </div>

                                                                            <div class="info-editor-box-value">
                                                                                <div class="info-editor-box-value-text" id="hobbies-text">
                                                                                    {{auth()->user()->details->hobbies}}

                                                                                </div>
                                                                                <div class="set-privacy-dropdown">
                                                                                    <div class="set-privacy-dropdown-value open-dropdown" data-target=".drop-09">
                                                                                        <img src="ambassador_assets/images/icons/users.svg" alt="">
                                                                                    </div>
                                                                                    <div class="set-privacy-dropdown-inner drop-09">

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="social-info-editor-box-li">
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
                                                                                <div class="set-privacy-dropdown">
                                                                                    <div class="set-privacy-dropdown-value open-dropdown" data-target=".drop-10">
                                                                                        <img src="ambassador_assets/images/icons/users.svg" alt="">
                                                                                    </div>
                                                                                    <div class="set-privacy-dropdown-inner drop-10">

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="social-info-editor-box-li">
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
                                                                                <div class="set-privacy-dropdown">
                                                                                    <div class="set-privacy-dropdown-value open-dropdown" data-target=".drop-11">
                                                                                        <img src="ambassador_assets/images/icons/users.svg" alt="">
                                                                                    </div>
                                                                                    <div class="set-privacy-dropdown-inner drop-11">

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="social-info-editor-box-li">
                                                                        <div class="info-editor-box">
                                                                            <div class="info-editor-box-title">
                                                                                <div class="info-editor-box-title-text">
                                                                                    Gender
                                                                                </div>
                                                                            </div>

                                                                            <div class="info-editor-box-value">
                                                                                <div class="info-editor-box-value-text" id="gender-text">
                                                                                    {{auth()->user()->gender}}

                                                                                </div>
                                                                                <div class="set-privacy-dropdown">
                                                                                    <div class="set-privacy-dropdown-value open-dropdown" data-target=".drop-12">
                                                                                        <img src="ambassador_assets/images/icons/users.svg" alt="">
                                                                                    </div>
                                                                                    <div class="set-privacy-dropdown-inner drop-12">

                                                                                    </div>
                                                                                </div>
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
                                                <div class="content-top-bar">
                                                    <div class="content-top-bar-inner">
                                                        <div class="content-top-bar-title">
                                                            <div class="text">
                                                                Photos/Gallery
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content-card-content">
                                                    <div class="content-card-content-inner">
                                                        <div class="photo-galary-grid">
                                                            <div class="photo-galary-grid-inner">
                                                                <div class="photo-grid-col">
                                                                    <div class="photo-grid-col-inner">
                                                                        <img src="ambassador_assets/images/default/default-02.png" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="photo-grid-col">
                                                                    <div class="photo-grid-col-inner">
                                                                        <img src="ambassador_assets/images/default/default-02.png" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="photo-grid-col">
                                                                    <div class="photo-grid-col-inner">
                                                                        <img src="ambassador_assets/images/default/default-02.png" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="photo-grid-col">
                                                                    <div class="photo-grid-col-inner">
                                                                        <img src="ambassador_assets/images/default/default-02.png" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="photo-grid-col">
                                                                    <div class="photo-grid-col-inner">
                                                                        <img src="ambassador_assets/images/default/default-02.png" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="photo-grid-col">
                                                                    <div class="photo-grid-col-inner">
                                                                        <img src="ambassador_assets/images/default/default-02.png" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="photo-grid-col">
                                                                    <div class="photo-grid-col-inner">
                                                                        <img src="ambassador_assets/images/default/default-02.png" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="photo-grid-col">
                                                                    <div class="photo-grid-col-inner">
                                                                        <img src="ambassador_assets/images/default/default-02.png" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="photo-grid-col">
                                                                    <div class="photo-grid-col-inner">
                                                                        <img src="ambassador_assets/images/default/default-02.png" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="see-all">
                                                        <div class="see-all-inner">
                                                            <a href="javascript:void(0)">See All</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-card">
                                            <div class="content-card-inner">
                                                <div class="content-top-bar">
                                                    <div class="content-top-bar-inner">
                                                        <div class="content-top-bar-title">
                                                            <div class="text">
                                                                Friends (28)
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content-card-content">
                                                    <div class="content-card-content-inner">
                                                        <div class="friend-grid">
                                                            <div class="friend-grid-inner">
                                                                <div class="friend-grid-col">
                                                                    <div class="friend-grid-col-inner">
                                                                        <div class="firend-grid-col-image">
                                                                            <img src="ambassador_assets/images/default/default-02.png" alt="">
                                                                        </div>
                                                                        <div class="friend-grid-col-text">
                                                                            Jhone Doe
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="friend-grid-col">
                                                                    <div class="friend-grid-col-inner">
                                                                        <div class="firend-grid-col-image">
                                                                            <img src="ambassador_assets/images/default/default-02.png" alt="">
                                                                        </div>
                                                                        <div class="friend-grid-col-text">
                                                                            Jhone Doe
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="friend-grid-col">
                                                                    <div class="friend-grid-col-inner">
                                                                        <div class="firend-grid-col-image">
                                                                            <img src="ambassador_assets/images/default/default-02.png" alt="">
                                                                        </div>
                                                                        <div class="friend-grid-col-text">
                                                                            Jhone Doe
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="friend-grid-col">
                                                                    <div class="friend-grid-col-inner">
                                                                        <div class="firend-grid-col-image">
                                                                            <img src="ambassador_assets/images/default/default-02.png" alt="">
                                                                        </div>
                                                                        <div class="friend-grid-col-text">
                                                                            Jhone Doe
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="friend-grid-col">
                                                                    <div class="friend-grid-col-inner">
                                                                        <div class="firend-grid-col-image">
                                                                            <img src="ambassador_assets/images/default/default-02.png" alt="">
                                                                        </div>
                                                                        <div class="friend-grid-col-text">
                                                                            Jhone Doe
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="friend-grid-col">
                                                                    <div class="friend-grid-col-inner">
                                                                        <div class="firend-grid-col-image">
                                                                            <img src="ambassador_assets/images/default/default-02.png" alt="">
                                                                        </div>
                                                                        <div class="friend-grid-col-text">
                                                                            Jhone Doe
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="friend-grid-col">
                                                                    <div class="friend-grid-col-inner">
                                                                        <div class="firend-grid-col-image">
                                                                            <img src="ambassador_assets/images/default/default-02.png" alt="">
                                                                        </div>
                                                                        <div class="friend-grid-col-text">
                                                                            Jhone Doe
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="friend-grid-col">
                                                                    <div class="friend-grid-col-inner">
                                                                        <div class="firend-grid-col-image">
                                                                            <img src="ambassador_assets/images/default/default-02.png" alt="">
                                                                        </div>
                                                                        <div class="friend-grid-col-text">
                                                                            Jhone Doe
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="see-all">
                                                        <div class="see-all-inner">
                                                            <a href="javascript:void(0)">See All</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-side-02">
                                    <div class="content-cards">
                                        @include('ambassador.profile.posts.post')
                                        @include('ambassador.profile.posts.show_posts')

                                    </div>
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
            <li class="set-privacy-dropdown-li">
                <div class="set-privacy-dropdown-icon" >
                    <img src="{{url('ambassador_assets/images/icons/users.svg')}}" alt=""> <span class="text">Friends</span>
                </div>
            </li>
            <li class="set-privacy-dropdown-li">
                <div class="set-privacy-dropdown-icon">
                    <img src="{{url('ambassador_assets/images/icons/globe.svg')}}" alt=""> <span class="text">Public</span>
                </div>
            </li>
            <li class="set-privacy-dropdown-li">
                <div class="set-privacy-dropdown-icon">
                    <img src="{{url('ambassador_assets/images/icons/connection.svg')}}" alt=""> <span class="text">Connections</span>
                </div>
            </li>
            <li class="set-privacy-dropdown-li">
                <div class="set-privacy-dropdown-icon">
                    <img src="{{url('ambassador_assets/images/icons/personal-network.svg')}}" alt=""> <span class="text">Personal Tier 01</span>
                </div>
            </li>
            <li class="set-privacy-dropdown-li">
                <div class="set-privacy-dropdown-icon">
                    <img src="{{url('ambassador_assets/images/icons/extended-network.svg')}}" alt=""> <span class="text">Extended Tier 02</span>
                </div>
            </li>
        </ul>
    </div>
     <!-- Social Information -->
     <div class="modal fade" id="update-social-info-modal" tabindex="-1" role="dialog" aria-labelledby="update-social-info-modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="update-social-info-modalLabel"><i class="ti-pencil"></i> Update Social Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="update_social">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input type="text" class="form-control" value="{{auth()->user()->details->city}}" name="city" id="city">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="state">Current State</label>
                                    <input type="text" class="form-control" value="{{auth()->user()->details->state}}" name="state" id="state">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="relationship">Relationship Status</label>
                                    <select name="relationship" id="relationship" class="form-control">
                                        <option value="" hidden>Select Status</option>
                                        <option value="single" {{auth()->user()->details->relationship=='single'?'selected':''}}>Single</option>
                                        <option value="married" {{auth()->user()->details->relationship=='married'?'selected':''}}>Married</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="workplace">Workplace</label>
                                    <input type="text" name="workplace" id="workplace" class="form-control" value="{{auth()->user()->details->workplace}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="high_school">High School</label>
                                    <input type="text" name="high_school" id="high_school" class="form-control" value="{{auth()->user()->details->high_school}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="hobbies">Hobbies</label>
                                    <input type="text" class="form-control" id="hobbies" name="hobbies" value="{{auth()->user()->details->city}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <select name="gender" id="gender" class="form-control">
                                        <option value="" hidden>Select Gender</option>
                                        <option value="male" {{auth()->user()->gender=='male'?'selected':''}}>Male</option>
                                        <option value="female" {{auth()->user()->gender=='female'?'selected':''}}>Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer share-post-button">
                        <button type="button" data-dismiss="modal">Close</button>
                        <button type="submit" >Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
<script src="{{url('index.js')}}"></script>
@push('scripts')
    <script>
        $(function () {

            $('#add_post').submit(function (e) {
                e.preventDefault();
                var button = $(this).find('button[type=submit]');
                var previous= button.text();
                button.attr('disabled','disabled').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing ...');

                $.ajax({
                    type:"POST",
                    url:"{{route('post.store')}}",
                    data: new FormData(this),
                    dataType:'JSON',
                    processData: false,
                    contentType: false,
                    cache: false,
                    success:function(data) {
                        button.attr('disabled',null).html(previous);
                        swal("Success", data.success, "success").then(function () {
                            window.location.reload();
                        });
                    },
                    error:function (xhr) {
                        button.attr('disabled',null).html(previous);
                        erroralert(xhr);
                    }
                });
            });
            
            $(document).on('submit','#change_name_form',function (e) {
                e.preventDefault();
                $.ajax({
                    type:"POST",
                    url:"{{route('ambassador.update.name')}}",
                    data: new FormData(this),
                    dataType:'JSON',
                    processData: false,
                    contentType: false,
                    cache: false,
                    success:function(data) {
                        $('#update-name-modal').modal('hide');
                        $('#full-name-of-current-user').html(data.response.fname+' '+data.response.lname);
                    },
                    error:function (xhr) {
                        erroralert(xhr);
                    }
                });

            });

            $(document).on('click', '.post-delete', function (e) {
                var targetToRemove=$(this).closest('.content-card');
                swal({
                    title: "Delete this post?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            var id = $(this).attr('data-id');
                            var token = '{{csrf_token()}}';
                            e.preventDefault();

                            $.ajax({
                                url: "{{route('post.destroy')}}",
                                data: {'id':id,_token:token},
                                dataType: "JSON",
                                type: "delete",
                                success: function (data) {
                                    targetToRemove.remove();
                                },
                                error: function (xhr) {
                                    erroralert(xhr);
                                },
                            });
                        }
                    });
            });

            $(document).on('submit','#update_social',function (e) {
                e.preventDefault();
                $.ajax({
                    type:"POST",
                    url:"{{route('ambassador.update.details')}}",
                    data: new FormData(this),
                    dataType:'JSON',
                    processData: false,
                    contentType: false,
                    cache: false,
                    success:function(data) {
                        console.log(data);
                        $('#update-social-info-modal').modal('hide');
                        $('#city-text').text(data.response.city);
                        $('#gender-text').text(data.response.gender);
                        $('#high_school-text').text(data.response.high_school);
                        $('#hobbies-text').text(data.response.hobbies);
                        $('#relationship-text').text(data.response.relationship);
                        $('#state-text').text(data.response.state);
                        $('#workplace-text').text(data.response.workplace);

                    },
                    error:function (xhr) {
                        erroralert(xhr);
                    }
                });

            });

        });
    </script>
   
@endpush