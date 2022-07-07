@include('kyc.components.top-bar')
@extends('kyc.layouts.app')
            @section('content')

            <div class="form-card-div padding-div bg-custom">
                <div class="form-card-div-inner custom-card custom-shadow custom-padding custom-border custom-width">
                    <div class="form-card-div-main">
                        <div class="row-flexed">
                            <div class="card-title">
                                KYC Verification Response from Admin
                            </div>
                            <div class="rejected-text text-danger margin-bottom text-center">
                                <button class='btn btn-danger'>Rejected</button>
                            </div>
                        </div>
                        <div class="rejected-reasons margin-bottom">
                            <div class="reason-title">
                                <b>Rejection Reason</b> :
                            </div>
                            <div class="reason-text">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus ducimus ad laborum nam soluta necessitatibus quibusdam molestiae in eligendi, non, et maxime dicta tenetur omnis, alias id repellendus eaque? Debitis!
                            </div>
                        </div>
                        <div class="rejected-reasons margin-bottom">
                            <div class="reason-title">
                                <b>Additional Info Required</b> :
                            </div>
                            <div class="reason-text">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus ducimus ad laborum nam soluta necessitatibus quibusdam molestiae in eligendi, non, et maxime dicta tenetur omnis, alias id repellendus eaque? Debitis!
                            </div>
                        </div>
                        <form action="#">
                            <div class="passport-field">
                                <div class="passport-field-inner  m-0 margin-bottom>
                                    <div class="form-card-div-field">
                                        <textarea name="" ows="5" class="form-div-field-input clasic-shadow input-radius text-area-input" placeholder="Enter Details"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-card-profile-doc">
                                <div class="form-card-profile-doc-inner">
                                    <div class="doc-uploader">
                                        <div class="doc-uploader-inner  custom-padding clasic-shadow input-radius">
                                            <div class="doc-uploader-main input-radius">
                                                <div id="doc-uploader">
                                                    <div class="input-images"></div>
                                                </div>
                                                <div class="uploader-text">
                                                    <div class="uploader-text-inner">
                                                        <div class="uploader-text-main">
                                                            <div class="icon"><img src="assets/images/icon/attachment.svg" alt=""></div>
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
            @endsection