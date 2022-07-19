@if (auth()->user()->details->kyc_status!=KYC::STATUS_APPROVED)
    <div class="alerts-outer">
        <div class="alerts-inner">
            <div class="singal-alert">
                <div class="alert-icon">
                    <span class="ti-info-alt"></span>
                </div>
                @if(auth()->user()->details->kyc_status===KYC::STATUS_PENDING)
                    <div class="alert-text">
                        Complete Your KYC Verification & Open The World of Connect Coins!
                    </div>
                    <div class="alert-link">
                        <a href='{{route('kyc.submission')}}'> Submit details here</a>.
                    </div>
                @endif
                @if(auth()->user()->details->kyc_status===KYC::STATUS_REQUESTED)
                    <div class="alert-text">
                        Your details have been submitted for verification, you will be notified as review and verify your profile.
                    </div>
                @endif
            </div>
        </div>
    </div>
@endif
