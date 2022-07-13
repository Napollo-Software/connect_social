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
                <div class="breadcrumb-title pe-3">Users</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">View User</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <tr>
                                <th>Profile Picture</th>
                                <td><img src="{{$view->user->profile_image()}}" width="100" class="img-thumbnail" alt=""></td>
                            </tr>
                            <tr>
                                <th>Cover Picture</th>
                                <td><img src="{{$view->user->details->coverPhoto()}}" width="100" class="img-thumbnail" alt=""></td>
                            </tr>
                            <tr>
                                <th>First Name</th>
                                <td>{{$view->user->fname}}</td>
                            </tr>
                            <tr>
                                <th>Last Name</th>
                                <td>{{$view->user->lname}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$view->user->email}}</td>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <td>{{$view->user->username}}</td>
                            </tr>
                            <tr>
                                <th>About</th>
                                <td>{{$view->about}}</td>
                            </tr>
                            <tr>
                                <th>Country Code</th>
                                <td>{{$view->user->country_code}}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{$view->user->phone}}</td>
                            </tr>
                            <tr>
                                <th>Date of Joining</th>
                                <td>{{$view->joining}}</td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td>{{ucfirst($view->user->gender)}}</td>
                            </tr>
                            <tr>
                                <th>Friends</th>
                                <td>{{getFriendsList($view->id)->count()}}</td>
                            </tr>
                            <tr>
                                <th>Connections</th>
                                <td>{{getConnectionsList($view->id)->count()}}</td>
                            </tr>
                            <tr>
                                <th>Tier 1</th>
                                <td>{{$view->id}}</td>
                            </tr>
                            <tr>
                                <th>Tier 2</th>
                                <td>{{$view->id}}</td>
                            </tr>
                           <tr>
                                <th>Passport No</th>
                                <td>{{$view->passport_no}}</td>
                            </tr>
                            <tr>
                                <th>Address Line 1</th>
                                <td>{{$view->address_1}}</td>
                            </tr>
                            <tr>
                                <th>Address Line 2</th>
                                <td>{{$view->address_2}}</td>
                            </tr>
                          
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("script")
    <script src="{{url('index.js')}}"></script>
@endsection