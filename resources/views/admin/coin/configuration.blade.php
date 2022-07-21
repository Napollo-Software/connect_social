@extends("admin.layouts.app")

@section("style")
    <link href="{{url('admin_assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
@endsection

@section("wrapper")
    <!--start page wrapper -->
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
                            <li class="breadcrumb-item active" aria-current="page">Ambassador Configuration</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <div class="card radius-10">
                <div class="card-body" style="position: relative;">
                    <div class="d-flex align-items-center">
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">$</span>
                            </div>
                            <input type="text" class="form-control dollar-value" aria-label="Amount (to the nearest dollar)">
                            <input type="text" class="form-control confirm-dollar-value" aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-append">
                              <button class="input-group-text bx bx-plus" id="configCoin"></button>
                            </div>
                          </div>
                    </div>

                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Doller Price</th>
                                        <th>Created At</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                </div>
            </div>
        </div>
    </div>
    
@endsection

@section("script")
    <script src="{{url('admin_assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('admin_assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
    <script>
            function InitTable() {
            $('#example').DataTable({
                responsive: true,
                "bDestroy": true,
                "processing": true,
                "serverSide": true,
                "Paginate": true,
                "order": [[0, 'asc']],
                "pageLength": 25,
                "ajax": {
                    "url": "{{ route('fetch.coin.config') }}",
                    "dataType": "json",
                    "type": "POST",
                    "data": {_token: "{{csrf_token()}}"}
                },
                "columns": [
                    {"data": "id"},
                    {"data": "price"},
                    {"data": "created_at"},
                    ]
            });
        }
        $(document).ready(function () {
            InitTable();
        });

        $(document).on('click','#configCoin',function(e)
        {
            e.preventDefault();
            var dollarValue=$('.dollar-value').val();
            var confirmValue=$('.confirm-dollar-value').val();
            if(dollarValue.length===0||confirmValue.length===0)
            {
                swal({
                    title : "Both Fields are required !",
                    icon  : "warning",
                    dangerMode : true
                });
            }
            if(dollarValue!==confirmValue)
            {
                swal({
                    title : "Confirm dollar value not match !",
                    icon  : "warning",
                    dangerMode : true
                });
            }
            if(dollarValue===confirmValue)
            {
               $.ajax({
                type : "post",
                url  : "{{route('store.coin.config')}}",
                data :{_token : "{{csrf_token()}}", "dollar_value":dollarValue},
                success : function(data){
                    InitTable();
                }
               })
            }
        })

    </script>

@endsection