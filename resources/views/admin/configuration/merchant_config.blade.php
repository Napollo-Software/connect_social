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
                                <h4 class="my-1">Opt in Charges for Shop</h4>
                                <br>
                                <p class="mb-0 text-secondary"></p></p>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 pt-3">
                            <label for="New User">Monthly charges for Merchants</label>
                        </div>
                        <div class="col-md-2 pt-2">
                            <input type="text" data-change='0' data-title="Bonus for Ambassador new user"
                                   class="form-control title">
                        </div>
                        <div class="col-md-1 pt-3">
                            <label for="coins">Coins</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection