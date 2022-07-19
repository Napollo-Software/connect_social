@extends("admin.layouts.app")

@section("style")
    <link href="admin_assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section("wrapper")
    <!--start page wrapper -->
    <div class="page-wrapper"> 
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">KYC </div>
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

            <!--end breadcrumb-->
            <h6 class="mb-0 text-uppercase">All Requests</h6>
            <hr/>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Country</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection

@section("script")
    <script src="admin_assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="admin_assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            var columns=[
                {"data": "name"},
                {"data": "email"},
                {"data": "city"},
                {"data": "state"},
                {"data": "country"},
                {"data": "status"},
                {"data": "action",orderable: false, searchable: false},

            ];
            var route = '{{ route('kyc.fetch')}}';

            InitTable(route,token,columns);

        });
    </script>
    <script src="{{url('index.js')}}"></script>

@endsection