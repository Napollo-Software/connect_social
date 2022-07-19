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
                            <input type="text"   data-change='0' data-title="Bonus for Ambassador new user" class="form-control title">
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
                            <input type="text" data-change='0' data-title="Bouns For Merchant Tier1" class="form-control title">
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
                            <input type="text" data-change='0' data-title="Bouns For Merchant Tier2" class="form-control title">
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
                            <input type="text"   data-change='0' data-title="Bonus For Recruiting Merchant Recuriting Ambassador Amount" class="form-control title">
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
                            <input type="text"   data-title="Bonus For Recruiting Merchant Recuriting Tier 1" class="form-control title">
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
                            <input type="text"  data-title="Bonus For Recruiting Merchant Recuriting Tier 2" class="form-control title">
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
                            <input type="text" data-change='0'  data-title="Bonus For Uploading Receipt For Ambassador Amount" class="form-control title">
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
                            <input type="text" data-change='0'  data-title="Bonus For Uploading Receipt For Ambassador Tier1" class="form-control title">
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
                            <input type="text" data-change='0' data-title="Bonus For Uploading Receipt For Ambassador Tier2" class="form-control title">
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
                            <input type="text" data-change='0' data-title="Bonus For Uploading Receipt For Resident Paid User" class="form-control title">
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
                            <input type="text"  data-change='0' data-title="Bonus For Uploading Receipt For Resident Tier 1" class="form-control title">
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
                            <input type="text" data-change='0' data-title="Bonus For Uploading Receipt For Resident Tier 2" class="form-control title">
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
                            <input type="text" data-change='0' data-title="Bonus For Uploading Receipt For Citizen User will Paid" class="form-control title">
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
                            <input type="text" data-change='0' data-title="Bonus For Uploading Receipt For Citizen Tier 1" class="form-control title">
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
                            <input type="text"  data-change='0' data-title="Bonus For Uploading Receipt For Citizen Tier 2" class="form-control title">
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
                            <input type="text" data-change='0' data-title="Bonus On Purchases On Resident Amount" class="form-control title"> 
                        </div>
                        <div class="col-md-5 pt-3">
                            <label for="coins"> %of the purchase payment.</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 pt-2">
                            <input type="text" data-change='0' data-title="Bonus On Purchases On Resident Tier1" class="form-control title">
                        </div>
                        <div class="col-md-4 pt-3">
                            % will be credited to tier 1 referee and   
                        </div>
                        <div class="col-md-2 pt-2">
                            <input type="text" data-title="Bonus On Purchases On Resident Tier 2" class="form-control title">
                        </div>
                        <div class="col-md-3 pt-3">
                            <label for="coins">% to tier 2 referee.</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 pt-2">
                            <input type="text" data-change='0' data-title="Bonus On Purchases On Resident Ambassador Who Acquired" class="form-control title">
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
                            <input type="text" data-change='0' data-title="Bonus On Purchases On Citizens Amount"  class="form-control title"> 
                        </div>
                        <div class="col-md-5 pt-3">
                            <label for="coins"> %of the purchase payment.</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 pt-2">
                            <input type="text" data-change='0' data-title="Bonus On Purchases On Citizens Tier1" class="form-control title">
                        </div>
                        <div class="col-md-3 pt-3">
                            % will be credited to tier 1 referee and   
                        </div>
                        <div class="col-md-2 pt-2">
                            <input type="text" data-change='0' data-title="Bonus On Purchases On Citizens Tier2" class="form-control title">
                        </div>
                        <div class="col-md-3 pt-3">
                            <label for="coins">% to tier 2 referee.</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 pt-2">
                            <input type="text" data-change='0' data-title="Bonus On Purchases On Citizens Ambassador Who Acquired" class="form-control title">
                        </div>
                        <div class="col-md-5 pt-3">
                            <label for="coins">  %  will be credited to the ambassador who has acquired the merchant.</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 pt-3 ">
                           <button class="form-control title btn btn-dark" type="submit" >Submit</button>
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
    
var countTitle=0,countValue=0;
var title=[];
var value=[];
$(document).on('change','.title',function(e)
{
    e.preventDefault();
    var check=$(this).attr('data-change');
    if(check=='0')
    { 
        title[countTitle++]=$(this).attr('data-title');
        value[countValue++]=$(this).val();

    }
});

$(document).on('submit','#configurations',function(e){
    e.preventDefault();
    $.ajax({
        type : "POST",
        url  : "{{route('update.ambassador.config')}}",
        data : {
            _token : "{{csrf_token()}}",
            'title' : title,
            'value' : value,
        },
        dataType : "json",
        
        success : function(data){
            swal({ title :  data , icon : "success" , button : false});
        },
        error :function(xhr){
            erroralert(xhr);
        }
    })
})

</script>
@endsection