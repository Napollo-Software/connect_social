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
                <div class="breadcrumb-title pe-3">Ambassador Receipts</div>
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
            <h6 class="mb-0 text-uppercase">All Receipts</h6>
            <hr/>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Ambassador</th>
                                <th>Merchant Name</th>
                                <th>Receipts</th>
                                <th></th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Coins</th>
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
                {"data": "ambassador"},
                {"data": "merchant_name"},
                {"data": "merchant_type"},
                {"data": "attachment"},
                {"data": "status"},
                {"data": "date"},
                {"data": "receipt_amount"},
                {"data": "action",orderable: false, searchable: false},

            ];
            var route = '{{ route('admin.ambassador.receipt.fetch')}}';
            InitTable(route,token,columns);


            $(document).on('click','.action',function (e) {
                e.preventDefault();
                var type=$(this).attr('data-type');
                var warning='';
                if (type=='approve'){
                    warning='Are you sure to approve this Ambassador Receipt?';
                }
                if (type=='reject'){
                    warning='Are you sure to reject this Ambassador Receipt?';
                }

                var data = {'id':$(this).attr('data-id'),'type':type};
                var route = '{{route('admin.ambassador.receipt.action')}}';
                var next = {'type':'soft-dt'};
                cdelete(warning,data,token,route,next)
            });

        });
    </script>
    <script src="{{url('index.js')}}"></script>

@endsection