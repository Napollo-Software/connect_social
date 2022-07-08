@extends("admin.layouts.app")

@section("style")
    <link href="admin_assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
@endsection

@section("wrapper")
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">KYC Ambassador Details</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Approvals</li>
                        </ol>
                    </nav>
                </div>

            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <tr>
                                <th>First Name</th>
                                <td>{{$show->user->fname}}</td>
                            </tr>
                            <tr>
                                <th>Last Name</th>
                                <td>{{$show->user->lname}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$show->user->email}}</td>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <td>{{$show->user->username}}</td>
                            </tr>

                            <tr>
                                <th>Country Code</th>
                                <td>{{$show->user->country_code}}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{$show->user->phone}}</td>
                            </tr>
                            <tr>
                                <th>Date of Joining</th>
                                <td>{{$show->joining}}</td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td>{{ucfirst($show->user->gender)}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    @if ($show->kyc_status==\KYC::STATUS_PENDING)
                                        <span class="btn btn-sm py-0 btn-danger">Not Requested</span>
                                    @elseif ($show->kyc_status==\KYC::STATUS_REQUESTED)
                                        <span class="btn btn-sm py-0 btn-info">Pending for Approval</span>
                                    @elseif ($show->kyc_status==\KYC::STATUS_APPROVED)
                                        <span class="btn btn-sm py-0 btn-success">Approved</span>
                                    @elseif ($show->kyc_status==\KYC::STATUS_REJECTED)
                                        <span class="btn btn-sm py-0 btn-warning">Rejected</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Passport No</th>
                                <td>{{$show->passport_no}}</td>
                            </tr>
                            <tr>
                                <th>Address Line 1</th>
                                <td>{{$show->address_1}}</td>
                            </tr>
                            <tr>
                                <th>Address Line 2</th>
                                <td>{{$show->address_2}}</td>
                            </tr>
                            <tr>
                                <th>Passport 1</th>
                                <td>{{$show->passport_1}}</td>
                            </tr>
                            <tr>
                                <th>Passport 2</th>
                                <td>{{$show->passport_2}}</td>
                            </tr>
                            <tr>
                                <th>ID Card 1</th>
                                <td>{{$show->id_card_1}}</td>
                            </tr>
                            <tr>
                                <th>ID Card 2</th>
                                <td>{{$show->id_card_2}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection