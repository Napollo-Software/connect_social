@extends("admin.layouts.app")
@section('wrapper')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Configurations</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Merchant Configuration</li>
                    </ol>
                </nav>
            </div>

        </div>
        <div class="card radius-10">
            <div class="card-body" style="position: relative;">
                <div class="d-flex align-items-center">
                    <form id="configurations">
                        @csrf
                        <input type="hidden" name="check" value="updateAmbassadorConfig">
                    <div>
                        <p class="mb-0 text-secondary"></p>
                        <h4 class="my-1">Bonus for Recruiting Ambassador</h4>
                        <br>
                        <p class="mb-0 text-secondary"></p>An ambassador will receive upto 2 levels as fee for the registration</p>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-md-1 pt-3">
                            <label for="New User">New User</label>
                        </div>
                        <div class="col-md-2 pt-2">
                            <input type="text" name="bonusForAmbassador_NewUser" class="form-control">
                        </div>
                        <div class="col-md-1 pt-3">
                            <label for="coins">Coins</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 pt-3">
                            <label for="New User">Tier 1</label>
                        </div>
                        <div class="col-md-2 pt-2">
                            <input type="text" name="bounsForMerchant_Tier1" class="form-control">
                        </div>
                        <div class="col-md-1 pt-3">
                            <label for="coins">Coins</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 pt-3">
                            <label for="New User">Tier 2</label>
                        </div>
                        <div class="col-md-2 pt-2">
                            <input type="text" name="bonusForMerchant_Tier2" class="form-control">
                        </div>
                        <div class="col-md-1 pt-3">
                            <label for="coins">Coins</label>
                        </div>
                    </div>
                </div>
        </div>
        <div class="card radius-10">
            <div class="card-body" style="position: relative;">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-secondary"></p>
                        <h4 class="my-1">Bonus for Recruiting Merchant</h4>
                        <br>
                        <p class="mb-0 text-secondary"></p>An ambassador will receive upto 2 levels as for recruiting a merchant </p>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-md-4 pt-3">
                            <label for="New User">Ambassador who has recruited a merchant gains</label>
                        </div>
                        <div class="col-md-2 pt-2">
                            <input type="text" name="bonusForRecruitingMerchant_RecuritingAmbassadorAmount" class="form-control">
                        </div>
                        <div class="col-md-1 pt-3">
                            <label for="coins">Coins</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 pt-3">
                            <label for="New User">Tier 1</label>
                        </div>
                        <div class="col-md-2 pt-2">
                            <input type="text"  name="bonusForRecruitingMerchant_Tier1" class="form-control">
                        </div>
                        <div class="col-md-1 pt-3">
                            <label for="coins">Coins</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 pt-3">
                            <label for="New User">Tier 2</label>
                        </div>
                        <div class="col-md-2 pt-2">
                            <input type="text" name="bonusForRecruitingMerchant_Tier2" class="form-control">
                        </div>
                        <div class="col-md-1 pt-3">
                            <label for="coins">Coins</label>
                        </div>
                    </div>
                </div>
        </div>
        <div class="card radius-10">
            <div class="card-body" style="position: relative;">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-secondary"></p>
                        <h4 class="my-1">Bonus for Uploading Receipt for the ambassador</h4>
                        <br>
                        <p class="mb-0 text-secondary"></p>Configuration Level of user when upload receipt </p>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-md-2 pt-3">
                            <label for="New User">The user will be paid </label>
                        </div>
                        <div class="col-md-2 pt-2">
                            <input type="text" name="bonusForUploadingReceiptForAmbassador_Amount" class="form-control">
                        </div>
                        <div class="col-md-6 pt-3">
                            <label for="coins"> % of the total payment made.(i.e., in the uploaded receipt) after verification</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 pt-3">
                            <label for="New User">Tier 1</label>
                        </div>
                        <div class="col-md-2 pt-2">
                            <input type="text" name="bonusForUploadingReceiptForAmbassador_Tier1" class="form-control">
                        </div>
                        <div class="col-md-1 pt-3">
                            <label for="coins">Coins</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 pt-3">
                            <label for="New User">Tier 2</label>
                        </div>
                        <div class="col-md-2 pt-2">
                            <input type="text" name="bonusForUploadingReceiptForAmbassador_Tier2" class="form-control">
                        </div>
                        <div class="col-md-1 pt-3">
                            <label for="coins">Coins</label>
                        </div>
                    </div>
                </div>
        </div>
        <div class="card radius-10">
            <div class="card-body" style="position: relative;">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-secondary"></p>
                        <h4 class="my-1">Bonus for Uploading Receipt for the Resident</h4>
                        <br>
                        <p class="mb-0 text-secondary"></p>Configuration Level of user when upload receipt </p>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-md-2 pt-3">
                            <label for="New User">The user will be paid </label>
                        </div>
                        <div class="col-md-2 pt-2">
                            <input type="text" name="bonusForUploadingReceiptForMerchant_Amount" class="form-control">
                        </div>
                        <div class="col-md-6 pt-3">
                            <label for="coins"> % of the total payment made.(i.e., in the uploaded receipt) after verification</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 pt-3">
                            <label for="New User">Tier 1</label>
                        </div>
                        <div class="col-md-2 pt-2">
                            <input type="text" name="bonusForUploadingReceiptForMerchant_Tier1" class="form-control">
                        </div>
                        <div class="col-md-1 pt-3">
                            <label for="coins">Coins</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 pt-3">
                            <label for="New User">Tier 2</label>
                        </div>
                        <div class="col-md-2 pt-2">
                            <input type="text"  name="bonusForUploadingReceiptForMerchant_Tier2" class="form-control">
                        </div>
                        <div class="col-md-1 pt-3">
                            <label for="coins">Coins</label>
                        </div>
                    </div>
                </div>
        </div>
        <div class="card radius-10">
            <div class="card-body" style="position: relative;">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-secondary"></p>
                        <h4 class="my-1">Bonus for Uploading Receipt for the Citizen</h4>
                        <br>
                        <p class="mb-0 text-secondary"></p>Configuration Level of user when upload receipt </p>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-md-2 pt-3">
                            <label for="New User">The user will be paid </label>
                        </div>
                        <div class="col-md-2 pt-2">
                            <input type="text" name="bonusForUploadingReceiptForCitizen_Amount" class="form-control">
                        </div>
                        <div class="col-md-6 pt-3">
                            <label for="coins"> % of the total payment made.(i.e., in the uploaded receipt) after verification</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 pt-3">
                            <label for="New User">Tier 1</label>
                        </div>
                        <div class="col-md-2 pt-2">
                            <input type="text"  name="bonusForUploadingReceiptForCitizen_Tier1" class="form-control">
                        </div>
                        <div class="col-md-1 pt-3">
                            <label for="coins">Coins</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 pt-3">
                            <label for="New User">Tier 2</label>
                        </div>
                        <div class="col-md-2 pt-2">
                            <input type="text" name="bonusForUploadingReceiptForCitizen_Tier2" class="form-control">
                        </div>
                        <div class="col-md-1 pt-3">
                            <label for="coins">Coins</label>
                        </div>
                    </div>
                </div>
        </div>
        <div class="card radius-10">
            <div class="card-body" style="position: relative;">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-secondary"></p>
                        <h4 class="my-1">Bonus on Purchases on Resident</h4>
                        <br>
                        <p class="mb-0 text-secondary"></p>Configure Purchases from marketplace</p>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-md-4 pt-3">
                            <label for="New User">Purchasing customers will be given</label>
                        </div>
                        <div class="col-md-2 pt-2">
                            <input type="text" name="bonusOnPurchasesOnResident_Amount" class="form-control"> 
                        </div>
                        <div class="col-md-5 pt-3">
                            <label for="coins"> %of the purchase payment.</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 pt-2">
                            <input type="text" name="bonusOnPurchasesOnResident_Tier1" class="form-control">
                        </div>
                        <div class="col-md-4 pt-3">
                            % will be credited to tier 1 referee and   
                        </div>
                        <div class="col-md-2 pt-2">
                            <input type="text" name="bonusOnPurchasesOnResident_Tier2" class="form-control">
                        </div>
                        <div class="col-md-3 pt-3">
                            <label for="coins">% to tier 2 referee.</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 pt-2">
                            <input type="text" name="bonusOnPurchasesOnResident_AmbassadorAmount" class="form-control">
                        </div>
                        <div class="col-md-7 pt-3">
                            <label for="coins">  %  will be credited to the ambassador who has acquired the merchant.</label>
                        </div>
                    </div>
                </div>
        </div>
       
        <div class="card radius-10">
            <div class="card-body" style="position: relative;">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-secondary"></p>
                        <h4 class="my-1">Bonus on Purchases on Citizens</h4>
                        <br>
                        <p class="mb-0 text-secondary"></p>Configure Purchases from marketplace</p>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-md-4 pt-3">
                            <label for="New User">Purchasing customers will be given</label>
                        </div>
                        <div class="col-md-2 pt-2">
                            <input type="text"  name="bonusOnPurchasesOnCitizens_Amount" class="form-control"> 
                        </div>
                        <div class="col-md-5 pt-3">
                            <label for="coins"> %of the purchase payment.</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 pt-2">
                            <input type="text" name="bonusOnPurchasesOnCitizens_Tier1" class="form-control">
                        </div>
                        <div class="col-md-3 pt-3">
                            % will be credited to tier 1 referee and   
                        </div>
                        <div class="col-md-2 pt-2">
                            <input type="text"  name="bonusOnPurchasesOnCitizens_Tier2" class="form-control">
                        </div>
                        <div class="col-md-3 pt-3">
                            <label for="coins">% to tier 2 referee.</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 pt-2">
                            <input type="text" name="bonusOnPurchasesOnCitizens_AmbassadorAmount" class="form-control">
                        </div>
                        <div class="col-md-5 pt-3">
                            <label for="coins">  %  will be credited to the ambassador who has acquired the merchant.</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 pt-3 ">
                           <button class="form-control btn btn-dark" type="submit" >Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>

$(document).on('submit','#configurations',function(e)
{
    e.preventDefault();
    $.ajax({
        type : "POST",
        url  : "{{route('update.ambassador.config')}}",
        data : new FormData(this),
        dataType:"JSON",
        contentType:false,
        processData:false,
        cache:false,
        success : function(data){
          swal({ title : data, icon  : "success", button: true, });
        },
        error : function(xhr){
            erroralert(xhr);
        }
    })
    

});

</script>
@endsection