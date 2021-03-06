@extends("admin.layouts.app")

@section("style")
    <link href="{{url('admin_assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet"/>
@endsection

@section("wrapper")
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Packages</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Packages History</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <div class="card radius-10">
                <div class="card-body" style="position: relative;">
                    <div class="row addPackage" >
                        <div class="col-md-12 pb-2" align="right" >
                        <button class="btn btn-sm btn-primary " ><i class="bx bx-plus-circle"></i> Add Package</button>
                    </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="text" class="form-control coin-value"
                                   aria-label="Amount (to the nearest dollar)" placeholder="Coin">
                            <input type="text" class="form-control dollar-value" placeholder="Dollar Value"
                                   aria-label="Amount (to the nearest dollar)">
                            <input type="hidden" class="edit-id"  value="0">
                            <div class="input-group-append create">
                                <button class="input-group-text btn btn-primary" id="coinPackage"><i class="bx bx-plus-circle"></i></button>
                            </div>
                            <div class="input-group-append update" >
                                <button class="input-group-text btn btn-danger" id="coinPackage"><i class="bx bx-edit"></i></button>
                            </div>
                        </div>
                    </div>

                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Coin</th>
                            <th>$</th>
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
                    "url": "{{ route('fetch.package') }}",
                    "dataType": "json",
                    "type": "POST",
                    "data": {_token: "{{csrf_token()}}"}
                },
                "columns": [
                    {"data": "date"},
                    {"data": "time"},
                    {"data": "coin"},
                    {"data": "dollar"},
                    {"data": "action"}
                ]
            });
        }

        $(document).ready(function () {
            $('.addPackage').hide();
            $('.update').hide();
            InitTable();
        });

        $(document).on('click', '#coinPackage', function (e) {
            e.preventDefault();
            var dollarValue = $('.dollar-value').val();
            var coinValue = $('.coin-value').val();
            var editId = $('.edit-id').val();
            if (dollarValue.length === 0 || coinValue.length === 0) {
                swal('Warning','Both Fields are required !','warning');
            }
            else {
                $.ajax({
                    type: "post",
                    url: "{{route('store.package')}}",
                    data: {_token: "{{csrf_token()}}", "dollar_value": dollarValue,'coin_value':coinValue,'edit_id':editId},
                    success: function (data) {
                        InitTable();
                        $('.dollar-value').val('');
                        $('.coin-value').val('');
                        $('.edit-id').val('0');
                        $('.update').hide();
                        $('.create').show();
                        $('.addPackage').hide();
                    }
                })
            }
        });

        $(document).on('click','.delete' ,function(e){
            e.preventDefault();
            var id=$(this).attr('data-id');
            swal({
                title : "Warning",
                text : "Are you sure , You want to delete!",
                icon  : "warning",
                buttons :true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if(willDelete)
                {
                $.ajax({
                type : "post",
                url  : "{{route('delete.package')}}",
                data : { _token : "{{csrf_token()}}" , "id" : id },
                dataType : "json",
                success : function(data){
                    InitTable();
                }
              })
            }
            })
        });

        $(document).on('click','.edit' ,function(e){
            e.preventDefault();
            var id=$(this).attr('data-id');
            $.ajax({
                type : "post",
                url  : "{{route('edit.package')}}",
                data : { _token : "{{csrf_token()}}" , "id" : id },
                dataType : "json",
                success : function(data){
                    $('.addPackage').show();
                    $('.create').hide();
                    $('.update').show();
                    $('.dollar-value').val(data.dollar);
                    $('.coin-value').val(data.coin);
                    $('.edit-id').val(id);
                }
            });
        });

        $(document).on('click','.addPackage',function(e){
            e.preventDefault();
            $('.addPackage').hide();
            $('.update').hide();
            $('.create').show();
            $('.dollar-value').val('');
            $('.coin-value').val('');
            $('.edit-id').val('0');
        })

    </script>

@endsection