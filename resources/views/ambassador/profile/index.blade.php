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
                                                                        <img src="{{getPrivacyDetails(getSocialPrivacy('about'))['url']}}" alt="">
                                                                    </div>
                                                                    <div class="text">
                                                                        <i style="font-style: normal">{{getPrivacyDetails(getSocialPrivacy('about'))['name']}}</i>
                                                                    </div>
                                                                    <div class="drop-icon">
                                                                        <span class="ti-angle-down"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="set-privacy-dropdown-inner social-privacy drop-01" data-key="about">
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
                                                            <form id="about_form">
                                                                @csrf
                                                                <div class="abouy-text-editor-textarea">
                                                                    <textarea name="about" id="about" rows="5">{{auth()->user()->details->about}}</textarea>
                                                                </div>
                                                                <div class="abouy-text-editor-button">
                                                                    <button type="submit">Save</button>
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
                                                                                        <img src="{{getPrivacyDetails(getSocialPrivacy('city'))['url']}}" alt="">
                                                                                    </div>
                                                                                    <div class="set-privacy-dropdown-inner social-privacy drop-03" data-key="city">

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
                                                                                        <img src="{{getPrivacyDetails(getSocialPrivacy('state'))['url']}}" alt="">
                                                                                    </div>
                                                                                    <div class="set-privacy-dropdown-inner social-privacy drop-04" data-key="state">

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
                                                                                        <img src="{{getPrivacyDetails(getSocialPrivacy('relationship'))['url']}}" alt="">
                                                                                    </div>
                                                                                    <div class="set-privacy-dropdown-inner social-privacy drop-05" data-key="relationship">

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
                                                                                        <img src="{{getPrivacyDetails(getSocialPrivacy('joining'))['url']}}" alt="">
                                                                                    </div>
                                                                                    <div class="set-privacy-dropdown-inner social-privacy drop-06" data-key="joining">

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
                                                                                        <img src="{{getPrivacyDetails(getSocialPrivacy('workplace'))['url']}}" alt="">
                                                                                    </div>
                                                                                    <div class="set-privacy-dropdown-inner social-privacy drop-07" data-key="workplace">

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
                                                                                        <img src="{{getPrivacyDetails(getSocialPrivacy('high_school'))['url']}}" alt="">
                                                                                    </div>
                                                                                    <div class="set-privacy-dropdown-inner social-privacy drop-08" data-key="high_school">

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
                                                                                        <img src="{{getPrivacyDetails(getSocialPrivacy('hobbies'))['url']}}" alt="">
                                                                                    </div>
                                                                                    <div class="set-privacy-dropdown-inner social-privacy drop-09" data-key="hobbies">

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
                                                                                        <img src="{{getPrivacyDetails(getSocialPrivacy('email'))['url']}}" alt="">
                                                                                    </div>
                                                                                    <div class="set-privacy-dropdown-inner social-privacy drop-10" data-key="email">

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
                                                                                        <img src="{{getPrivacyDetails(getSocialPrivacy('phone'))['url']}}" alt="">
                                                                                    </div>
                                                                                    <div class="set-privacy-dropdown-inner social-privacy drop-11" data-key="phone">

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
                                                                                        <img src="{{getPrivacyDetails(getSocialPrivacy('gender'))['url']}}" alt="">
                                                                                    </div>
                                                                                    <div class="set-privacy-dropdown-inner social-privacy drop-12" data-key="gender">

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
                                                                @foreach($images as $image)
                                                                <div class="photo-grid-col">
                                                                    <div class="photo-grid-col-inner">
                                                                        <img src="{{$image}}" alt="">
                                                                    </div>
                                                                </div>
                                                                @endforeach
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
                var dropdownContainer=$(this).closest('.set-privacy-dropdown-inner');
                var icon=$(this).find('img');
                var text=$(this).find('.text');
                $(this).parent().parent().parent().find('.set-privacy-dropdown-value').attr('data-value',$(this).attr('data-value'));
                var next_icon = $(this).parent().parent().siblings().find('img');
                var next_text = $(this).parent().parent().siblings().find('i');
                $(next_icon).attr('src',$(icon).attr('src'));
                $(next_text).html($(text).html());
                $(this).parent().parent().hide();
                if (dropdownContainer.hasClass('social-privacy')){
                    changePrivacy($(dropdownContainer).attr('data-key'),$(this).attr('data-value'));
                }
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
            $(document).on('submit','#about_form',function (e) {
                e.preventDefault();
                $.ajax({
                    type:"POST",
                    url:"{{route('ambassador.update.about')}}",
                    data: new FormData(this),
                    dataType:'JSON',
                    processData: false,
                    contentType: false,
                    cache: false,
                    success:function(data) {
                        $('.abouy-text-editor').hide();
                        $('.about-content').show();
                        $('#about-text').text(data.response.about);
                    },
                    error:function (xhr) {
                        erroralert(xhr);
                    }
                });

            });
            $(document).on('submit','#social_info_form',function (e) {
                e.preventDefault();
                $.ajax({
                    type:"POST",
                    url:"{{route('ambassador.update.social.info')}}",
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
            $(document).on('submit','#update_cover_photo_form',function (e) {
                e.preventDefault();
                swal({
                    title: "Are you sure to change cover photo?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            $.ajax({
                                url: "{{route('ambassador.update.cover')}}",
                                data: new FormData(this),
                                dataType: "JSON",
                                type: "post",
                                processData: false,
                                contentType: false,
                                cache: false,
                                success: function (data) {
                                    $('#cover_photo_preview').attr('src',data.response);
                                    $('#cover_photo_input').val('');
                                },
                                error: function (xhr) {
                                    erroralert(xhr);
                                },
                            });
                        }
                    });
            });
            $(document).on('submit','#update_profile_photo_form',function (e) {
                e.preventDefault();
                swal({
                    title: "Are you sure to change profile photo?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            $.ajax({
                                url: "{{route('ambassador.update.profile')}}",
                                data: new FormData(this),
                                dataType: "JSON",
                                type: "post",
                                processData: false,
                                contentType: false,
                                cache: false,
                                success: function (data) {
                                    $('.profile_photo_preview').attr('src',data.response);
                                    $('#profile_photo_input').val('');
                                },
                                error: function (xhr) {
                                    erroralert(xhr);
                                },
                            });
                        }
                    });
            });
        });
        function changePrivacy(key,value) {
            $.ajax({
                type:"POST",
                url:"{{route('ambassador.update.privacy')}}",
                dataType: "JSON",
                data: {'key':key,'value':value,_token:'{{csrf_token()}}'},
                success:function(data) {
                },
                error:function (xhr) {
                    erroralert(xhr);
                }
            });

        }
    </script>
    @stack('subscripts')
@endpush
<div class="modal fade" id="update-social-info-modal" tabindex="-1" role="dialog" aria-labelledby="update-social-info-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="update-social-info-modalLabel"><i class="ti-pencil"></i> Update Social Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="social_info_form">
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
