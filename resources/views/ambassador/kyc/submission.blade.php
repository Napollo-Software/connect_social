@extends('ambassador.kyc.layouts.app')
@section('content')
    <div class="form-card-spliter bg-custom">
        <div class="form-card-spliter-inner">
            <div class="form-card-spliter-main">
                <div class="form-card-div">
                    <div class="form-card-div-inner custom-card custom-shadow custom-padding custom-border">
                        <!-- <div class="row justify-content-center">
                            <div class="col-md-4 col-sm-8 col-xs-12">
                                <div class="action-div-logo-inner">
                                    <img src="{{asset('assets/images/logo.png')}}" alt="" class="w-100">
                                </div>
                            </div>
                        </div> -->
                        <div class="form-card-div-main">
                            <form action="#">
                                <div class="form-card-profile-pic">
                                    <div class="form-card-profile-pic-outer">
                                        <div class="row align-items-center custom-row">
                                            <div class="col-md-3">
                                                <div class="form-card-profile-pic-inner">
                                                    <img src="{{asset('kyc_assets/images/default/profile.png')}}"
                                                         alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-card-profile-pic-text margin-bottom">
                                                    We will use your profile picture for verification, in case you want
                                                    to submit a different picture , please use the option given below.
                                                </div>
                                                <div class="form-card-profile-pic-input">
                                                    <div class="form-card-profile-input-outer">
                                                        <div class="form-card-profile-input-inner">
                                                            <!-- <div class="upload-file-text custom-shadow">
                                                                Your Profile pic name
                                                            </div> -->
                                                            <div class="uploa-file-buttons">
                                                                <input type="file" id="file-input" class="d-none">
                                                                <button class="black-button" for="file-input"
                                                                        type="button">Choose File
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-card-field-box">
                                    <div class="form-card-field-box-inner">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-card-div-field">
                                                            <input type="text" placeholder="First Name"
                                                                   name="house_appartment_number"
                                                                   class="form-div-field-input custom-shadow input-radius">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-card-div-field">
                                                            <input type="text" placeholder="Last Name"
                                                                   name="house_appartment_number"
                                                                   class="form-div-field-input custom-shadow input-radius">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-card-div-field">
                                                            <input type="text" placeholder="Address Line 01"
                                                                   name="house_appartment_number"
                                                                   class="form-div-field-input custom-shadow input-radius">
                                                        </div>
                                                        <div class="form-card-div-field">
                                                            <input type="text" placeholder="Address Line 02"
                                                                   name="house_appartment_number"
                                                                   class="form-div-field-input custom-shadow input-radius">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-card-div-field">
                                                            <select name="" id=""
                                                                    class="form-div-field-input custom-shadow input-radius">
                                                                <option value="" hidden>State</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-card-div-field">
                                                            <select name="" id=""
                                                                    class="form-div-field-input custom-shadow input-radius">
                                                                <option value="" hidden>City</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-card-div-field">
                                                            <select name="" id=""
                                                                    class="form-div-field-input custom-shadow input-radius">
                                                                <option value="" hidden>Country</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-card-div-field">
                                                            <input type="text" placeholder="Zip Code"
                                                                   name="house_appartment_number"
                                                                   class="form-div-field-input custom-shadow input-radius">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-card-div-field">
                                                            <input type="text" placeholder="Phone Number"
                                                                   name="house_appartment_number"
                                                                   class="form-div-field-input custom-shadow input-radius">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-card-div-field date-field">
                                                            <input type="date" name="house_appartment_number"
                                                                   class="form-div-field-input custom-shadow input-radius">
                                                            <span class="date-text">Date of Birth</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-card-profile-doc">
                                    <div class="form-card-profile-doc-inner">
                                        <div class="form-card-profile-doc-title">
                                            Proof Documents (Driving License or Passport)
                                        </div>
                                        <div class="passport-field">
                                            <div class="passport-field-inner">
                                                <div class="form-card-div-field">
                                                    <input type="text" placeholder="Passport or Driving License Number"
                                                           name="house_appartment_number"
                                                           class="form-div-field-input custom-shadow input-radius">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-card-profile-doc-sub-title">
                                            Add front and back side of Government Issued Photo ID
                                        </div>
                                        <div class="doc-uploader">
                                            <div class="doc-uploader-inner  custom-padding custom-shadow input-radius">
                                                <div class="doc-uploader-main input-radius">
                                                    <div id="doc-uploader">
                                                        <div class="input-images"></div>
                                                    </div>
                                                    <div class="uploader-text">
                                                        <div class="uploader-text-inner">
                                                            <div class="uploader-text-main">
                                                                <div class="icon"><img
                                                                            src="{{asset('kyc_assets/images/icon/attachment.svg')}}"
                                                                            alt=""></div>
                                                                Drag & Drop Attachment
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-card-profile-doc">
                                    <div class="form-card-profile-doc-inner">
                                        <div class="form-card-profile-doc-title">
                                            Upload Government ID Card
                                        </div>
                                        <div class="form-card-profile-doc-sub-title">
                                            Add Front & Back side of the ID Card
                                        </div>
                                        <div class="doc-uploader">
                                            <div class="doc-uploader-inner custom-padding custom-shadow input-radius">
                                                <div class="doc-uploader-main  input-radius">
                                                    <div id="doc-uploader">
                                                        <div class="input-images"></div>
                                                    </div>
                                                    <div class="uploader-text">
                                                        <div class="uploader-text-inner">
                                                            <div class="uploader-text-main">
                                                                <div class="icon"><img
                                                                            src="{{asset('kyc_assets/images/icon/attachment.svg')}}"
                                                                            alt=""></div>
                                                                Drag & Drop Attachment
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-button">
                                    <button class="black-button">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="form-card-image-div">
                <div class="form-card-image-div-inner">
                    <div class="form-card-image-div-main">
                        <div class="form-card-div-coin-image">
                            <div class="form-card-div-coin-image-inner margin-bottom">
                                <img src="{{asset('kyc_assets/images/coin.png')}}" alt="" class="custom-shadow">
                            </div>
                            <div class="form-card-div-coin-bottom-text">
                                Know Your Customer (KYC) Verification
                            </div>
                        </div>
                        <div class="card-title">
                            Unlock the World of Connect Coins
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
@endsection