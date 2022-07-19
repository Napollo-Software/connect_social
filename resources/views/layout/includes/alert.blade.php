@if (auth()->user()->details->kyc_status!=KYC::STATUS_APPROVED)
    <div class="alerts-outer">
        <div class="alerts-inner">
            <div class="singal-alert">
                <div class="alert-icon">
                    <span class="ti-info-alt"></span>
                </div>
                <div class="alert-text">
                    Complete Your KYC Verification & Open The World of Connect Coins!
                </div>
                <div class="alert-link">
                    <a href='{{route('kyc.submission')}}'> Submit details here</a>.
                </div>
            </div>
        </div>
    </div>
@endif