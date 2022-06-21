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
                                                        <p>
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
                                                        <div class="edit-button" data-toggle="modal" data-target="#update-socialinformation-modal">
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
                                                                                <div class="info-editor-box-title-text">
                                                                                    City
                                                                                </div>
                                                                            </div>

                                                                            <div class="info-editor-box-value">
                                                                                <div class="info-editor-box-value-text">
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
                                                                                <div class="info-editor-box-value-text">
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
                                                                                <div class="info-editor-box-value-text">
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

                                                                            <div class="info-editor-box-value">
                                                                                <div class="info-editor-box-value-text">
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
                                                                                <div class="info-editor-box-value-text">
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
                                                                                <div class="info-editor-box-value-text">
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
                                                                                <div class="info-editor-box-value-text">
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
                                        @include('ambassador.profile.components.add_post')
                                        @include('ambassador.profile.components.show_posts')

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="update-name-modal" tabindex="-1" role="dialog" aria-labelledby="update-name-modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="update-name-modalLabel">Update Name</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" value="Jhon">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" value="Doe">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Social Information -->
    <div class="modal fade" id="update-socialinformation-modal" tabindex="-1" role="dialog" aria-labelledby="update-socialinformation-modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="update-socialinformation-modalLabel">Update Social Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" class="form-control" value="NYC">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Current State</label>
                                <input type="text" class="form-control" value="NY">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Relationship Status</label>
                                <select name="" id="" class="form-control">
                                    <option value="" hidden>Select Status</option>
                                    <option value="">Single</option>
                                    <option value="">In Relation</option>
                                    <option value="">Maried</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Workplace</label>
                                <input type="text" class="form-control" value="Lorem Ipsum">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>High School</label>
                                <input type="text" class="form-control" value="Lorem Ipsum">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Hobbies</label>
                                <input type="text" class="form-control" value="Lorem Ipsum">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Gender</label>
                                <select name="" id="" class="form-control">
                                    <option value="" hidden>Select Gender</option>
                                    <option value="">Male</option>
                                    <option value="">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Upload Photo -->



    <div id="privacy_dropdown" style='display: none'>
        <ul class="set-privacy-dropdown-ul">
            <li class="set-privacy-dropdown-li" data-value="{{Privacy::PRIV_FRIENDS}}">
                <div class="set-privacy-dropdown-icon" >
                    <img src="{{url('ambassador_assets/images/icons/users.svg')}}" alt=""> <span class="text">Friends</span>
                </div>
            </li>
            <li class="set-privacy-dropdown-li" data-value="{{Privacy::PRIV_PUBLIC}}">
                <div class="set-privacy-dropdown-icon">
                    <img src="{{url('ambassador_assets/images/icons/globe.svg')}}" alt=""> <span class="text">Public</span>
                </div>
            </li>
            <li class="set-privacy-dropdown-li" data-value="{{Privacy::PRIV_CONNECTIONS}}">
                <div class="set-privacy-dropdown-icon">
                    <img src="{{url('ambassador_assets/images/icons/connection.svg')}}" alt=""> <span class="text">Connections</span>
                </div>
            </li>
            <li class="set-privacy-dropdown-li" data-value="{{Privacy::PRIV_TIER_1}}">
                <div class="set-privacy-dropdown-icon">
                    <img src="{{url('ambassador_assets/images/icons/personal-network.svg')}}" alt=""> <span class="text">Personal Tier 01</span>
                </div>
            </li>
            <li class="set-privacy-dropdown-li" data-value="{{Privacy::PRIV_TIER_2}}">
                <div class="set-privacy-dropdown-icon">
                    <img src="{{url('ambassador_assets/images/icons/extended-network.svg')}}" alt=""> <span class="text">Extended Tier 02</span>
                </div>
            </li>
        </ul>
    </div>
@endsection
<script src="{{url('index.js')}}"></script>
@push('scripts')
    <script>
        $(function () {
            $('.set-privacy-dropdown-inner').html($('#privacy_dropdown').html());
            $('.set-privacy-dropdown-li').click(function () {
                var icon=$(this).find('img');
                var text=$(this).find('.text');
                $(this).parent().parent().parent().find('.set-privacy-dropdown-value').attr('data-value',$(this).attr('data-value'));
                var next_icon = $(this).parent().parent().siblings().find('img');
                var next_text = $(this).parent().parent().siblings().find('i');
                $(next_icon).attr('src',$(icon).attr('src'));
                $(next_text).html($(text).html());
                $(this).parent().parent().hide();
            });


            $('#add_post').submit(function (e) {
                e.preventDefault();
                var privacy = $(this).find('.set-privacy-dropdown-value').attr('data-value');
                $('#post_privacy').val(privacy);
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
            $('.comment_form').submit(function (e) {
                e.preventDefault();
                var button = $(this).find('button[type=submit]');
                var comment_input = $(this).find('textarea[id=comment]');
                var post= button.attr('data-post-id');
                var previous= button.text();
                button.attr('disabled','disabled').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing ...');

                $.ajax({
                    type:"POST",
                    url:"{{route('comments.store')}}",
                    data: new FormData(this),
                    dataType:'JSON',
                    processData: false,
                    contentType: false,
                    cache: false,
                    success:function(data) {
                        button.attr('disabled',null).html(previous);
                        $(comment_input).val('');
                        $('#comment-count-'+post).text(parseInt($('#comment-count-'+post).text())+1);
                        $('#comment-box-'+post).closest('.all-comments-box-grid').prepend('<div class="singal-comment-row"><div class="singal-comment-row-inner"><div class="singal-comment-row-user-image"> <div class="singal-comment-row-user-image-inner"> <img src="{{auth()->user()->profile_image()}}" alt=""> </div> </div> <div class="singal-comment-row-comment-text">'+data.data.text+'</div> </div> </div>');
                    },
                    error:function (xhr) {
                        button.attr('disabled',null).html(previous);
                        erroralert(xhr);
                    }
                });

            });
            $(document).on('submit','.like-submit',function (e) {
                e.preventDefault();
                $.ajax({
                    type:"POST",
                    url:"{{route('likes.store')}}",
                    data: new FormData(this),
                    dataType:'JSON',
                    processData: false,
                    contentType: false,
                    cache: false,
                    success:function(data) {
                        console.log(data);
                        var like=$('#likes-count-'+data.data.post_id);
                        var likescount=parseInt(like.text());
                        if (data.success == 'liked'){
                            like.text(likescount+1);
                            $('.like-btn-'+data.data.post_id).addClass('text-primary');
                        }else{
                            like.text(likescount-1);
                            $('.like-btn-'+data.data.post_id).removeClass('text-primary');
                        }
                    },
                    error:function (xhr) {
                        erroralert(xhr);
                    }
                });

            });


            $(document).on('click','.add-post-modal-show',function() {
                var type= $(this).attr('data-type');
                if (type=='link'){
                    $('.url-div').show();
                    $('.file-div').hide();
                } else{
                    $('.url-div').hide();
                    $('.file-div').show();
                }

                $('#file_type').val(type);
                $('#create-post-upload-file-modal').modal('show');
            });
            $('.add-post-close-btn').click(function () {
               $('#file_type').val('');
               $('#create-post-upload-file-modal').modal('hide');
            });
            $('.add-post-upload-btn').click(function () {
                if (($('#attachment').val()== null || $('#attachment').val()=='') && ($('#url').val()==null || $('#url').val()=='')){
                    alert('null');
                }
                else{
                    $('.share-post-attachments-li.add-post-modal-show').removeClass('add-post-modal-show');
                    $('#create-post-upload-file-modal').modal('hide');
                }
            });


            $(document).on('click', '.post-delete', function (e) {
                var targetToRemove=$(this).closest('.content-card');
                swal({
                    title: "Are you sure to remove this post?",
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


        });
    </script>
@endpush