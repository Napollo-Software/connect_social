@if (auth()->user()->details->kyc_status!=KYC::STATUS_APPROVED)
    <div class="alerts-outer">
        <div class="alerts-inner">
            <div class="singal-alert">
                <div class="alert-icon">
                    <span class="ti-info-alt"></span>
                </div>
                @if(is_numeric(auth()->user()->details->kyc_status))
                    @if(auth()->user()->details->kyc_status == KYC::STATUS_REQUESTED)
                        <div class="alert-text">
                            Your KYC verification details have been received. You will be notified as we review and
                            verify your profile
                        </div>
                        <div class="alert-link">
                            <a href='{{route('kyc.submission')}}'> View your request</a>.
                        </div>
                    @endif
                    @if(auth()->user()->details->kyc_status == KYC::STATUS_REJECTED)
                        <div class="alert-text">
                            Your KYC verification request is rejected.
                        </div>
                        <div class="alert-link">
                            <a href='{{route('kyc.submission')}}'> Please review the reason here</a>.
                        </div>
                    @endif
                @else
                    <div class="alert-text">
                        Complete Your KYC Verification & Open The World of Connect Coins!
                    </div>
                    <div class="alert-link">
                        <a href='{{route('kyc.submission')}}'> Submit details here</a>.
                    </div>
                @endif
            </div>
        </div>
    </div>
@endif