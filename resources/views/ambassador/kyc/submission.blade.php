@extends('ambassador.kyc.layouts.app')
@section('title')
Kyc Submission
@endsection
@section('content')
    <div class="form-card-spliter bg-custom">
        <div class="container">
        <div class="form-card-spliter-inner">
            <div class="form-card-spliter-main">
                <div class="form-card-div">
                    <div class="form-card-div-inner custom-card custom-shadow custom-padding custom-border text-center">
                        <div class="top-text-kyc">
                            Unlock the World of Connect Coins
                        </div>
                        <div class="image-kyc">
                            <img src="{{asset('kyc_assets/images/coin.png')}}" alt="">
                        </div>
                        <div class="bottom-text-kyc">
                            Know Your Customer (KYC) verification
                        </div>
                    </div>
                    <div class="form-card-div-inner custom-card custom-shadow custom-padding custom-border">
                        <!-- <div class="container"> -->
                            <div class="row-flexed">
                                <div class="card-title">
                                    <!-- Unlock the World of Connect Coins -->
                                </div>
                                <div class="rejected-text text-danger margin-bottom text-center">
                                    @if(auth()->user()->details->kyc_status==KYC::STATUS_PENDING)
                                        <button class='btn btn-warning'>Pending</button>
                                    @elseif(auth()->user()->details->kyc_status==KYC::STATUS_REQUESTED)
                                        <button class='btn btn-info'>Requested</button>
                                    @elseif(auth()->user()->details->kyc_status==KYC::STATUS_REJECTED)
                                        <button class='btn btn-danger'>Rejected <i class="fa fa-ban"></i> </button>

                                    @elseif(auth()->user()->details->kyc_status==KYC::STATUS_APPROVED)
                                        <button class='btn btn-success'> Approved <i class="fa fa-check-circle"></i> </button>
                                    @endif
                                </div>
                            </div>
                            @if(auth()->user()->details->kyc_status==KYC::STATUS_REJECTED)
                            <div class="rejected-reasons margin-bottom">
                                <div class="reason-title">
                                    <b>Rejection Reason</b> :
                                </div>
                                <div class="reason-text">
                                    {{auth()->user()->details->kyc_reject_reason}}
                                </div>
                            </div>
                                @endif
                        <!-- </div> -->
                        <div class="form-card-div-main">
                            <form id="kyc-form" enctype="multipart/form-data">
                                @csrf
                                <div class="form-card-profile-pic">
                                    <div class="form-card-profile-pic-outer">
                                        <div class="row align-items-center custom-row">
                                            <div class="col-md-3">
                                                <div class="form-card-profile-pic-inner">
                                                    <img src="{{auth()->user()->profile_image()}}"  alt="" id="view-profile">
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

                                                            <div class="uploa-file-buttons">
                                                                <input type="file" onchange="document.getElementById('view-profile').src = window.URL.createObjectURL(this.files[0])" name="profile" id="file-input" class="d-none">

                                                                <button class="black-button" for="file-input" onclick="$('#file-input').click()" name="profile" type="button">Change Picture</button>
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
                                                            <input type="text" placeholder="First Name" value="{{auth()->user()->fname}}" name="fname" class="form-div-field-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-card-div-field">
                                                            <input type="text" placeholder="Last Name" value="{{auth()->user()->lname}}" name="lname" class="form-div-field-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-card-div-field">
                                                            <input type="text" placeholder="Address Line 1" value="{{auth()->user()->details->address_1}}" name="address_1" class="form-div-field-input form-control">
                                                        </div>
                                                        <div class="form-card-div-field">
                                                            <input type="text" placeholder="Address Line 2" value="{{auth()->user()->details->address_2}}" name="address_2" class="form-div-field-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-card-div-field">
                                                            <input type="text" placeholder="City" name="city" value="{{auth()->user()->details->city}}" class="form-div-field-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-card-div-field">
                                                            <input type="text" placeholder="State" name="state"  value="{{auth()->user()->details->city}}" class="form-div-field-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-card-div-field">
                                                            <input type="text" placeholder="Country" name="country"  value="{{auth()->user()->details->country}}" class="form-div-field-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="form-card-div-field">
                                                            <input type="text" placeholder="Zip Code" name="country_code"
                                                                   value="{{auth()->user()->country_code}}"
                                                                   class="form-div-field-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-card-div-field">
                                                            <input type="text" placeholder="Phone Number"
                                                                   value="{{auth()->user()->phone}}"
                                                                   name="phone"
                                                                   class="form-div-field-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-card-div-field date-field">
                                                            <input type="date" name="date_of_birth" id="date_of_birth" class="Itrigger change-value form-div-field-input form-control" value="{{auth()->user()->details->date_of_birth ? auth()->user()->details->date_of_birth : null }}" data-trigger="change" data-target=".change-text" data-action="change.html">
                                                            <span class="date-text change-text Itrigger" for="date_of_birth"  data-trigger="click" data-target="#date_of_birth" data-action="focus">{{auth()->user()->details->date_of_birth ? auth()->user()->details->date_of_birth : 'Date of Birth' }}</span>
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
                                                           name="passport_no" value="{{auth()->user()->details->passport_no}}"
                                                           class="form-div-field-input form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-card-profile-doc-sub-title">
                                            Add front and back side of Driving License or Passport
                                        </div>
                                        <div class="doc-uploader">
                                            <div class="doc-uploader-inner  custom-padding custom-shadow input-radius">
                                                <div class="doc-uploader-main input-radius">
                                                    <div id="doc-uploader">
                                                        <div class="input-driving-licence"></div>
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
                                                        <div class="input-cinic-image"></div>
                                                    </div>
                                                    <div class="uploader-text">
                                                        <div class="uploader-text-inner">
                                                            <div class="uploader-text-main">
                                                                <div class="icon">
                                                                    <img src="{{asset('kyc_assets/images/icon/attachment.svg')}}" alt="">
                                                                </div>
                                                                Drag & Drop Attachment
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if(auth()->user()->details->kyc_status==KYC::STATUS_PENDING or auth()->user()->details->kyc_status==KYC::STATUS_REJECTED)
                                <div class="submit-button">
                                    <button class="black-button"  type="submit">Submit</button>
                                </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </div>

    @push('scripts')  
<script src="{{url('index.js')}}"></script>

    <script>
        $(function () {
            $(document).on('submit', '#kyc-form', function (e) { 
                e.preventDefault();
                var button=$(this).find('button[type=submit]');
                var method = 'POST';
                var previous= button.text();
                button.attr('disabled','disabled').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing ...');

                $.ajax({
                    type:method,
                    url:'{{route('kyc.submit')}}',
                    data: new FormData(this),
                    dataType:'JSON', 
                    processData: false,
                    contentType: false,
                    cache: false,
                    success:function(data) {
                        button.attr('disabled',null).html(previous);
                        swal("Success!", data.success, "success").then(function () {
                            window.location.reload();
                        });
                    },
                    error:function (xhr) {
                        button.attr('disabled',null).html(previous);
                        erroralert(xhr);
                    }
                });

            });
        });

       
    </script>
    
    @endpush
@endsection