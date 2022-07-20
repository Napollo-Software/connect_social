
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header text-center">
        <div >
            <h5 class="text-primary mt-1 " style="font-size: 20px  ">
                <div style="display: flex">
                <div>
                    <img src="{{url('assets/images/logo.png')}}"  alt="connectSocial" style="width: 100%"></div><div>
                    <i class='pt-2 toggle-icon ms-auto bx bx-arrow-to-left'></i></div>
                </div>
            </h5>
            
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        {{--<li class="menu-label">Menus</li>--}}
        <li>
            <a href="{{route('home')}}">
                <div class="parent-icon"><i class='bx bx-cookie'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        @can('super-admin-views')
            <li>
                <a href="{{route('invite')}}">
                    <div class="parent-icon"><i class='bx bx-send'></i></div>
                    <div class="menu-title">Invite</div>
                </a>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='bx bx-cog'></i>
                    </div>
                    <div class="menu-title">Configuration</div>
                </a>
                <ul>
                    <li> <a href="{{ route('merchant.config') }}"><i class="bx bx-right-arrow-alt"></i>Merchant</a>
                    </li>
                    <li> <a href="{{ route('ambassador.config') }}"><i class="bx bx-right-arrow-alt"></i>Ambassador</a>
                    </li>
                </ul>
            </li>
            <li>
            
            <li>
                <a href="{{route('users')}}">
                    <div class="parent-icon"><i class='bx bx-user'></i></div>
                    <div class="menu-title">Users</div>
                </a>
            </li>
            <li>
                <a href="{{route('roles')}}">
                    <div class="parent-icon"><i class='bx bxs-user-account'></i></div>
                    <div class="menu-title">Roles</div>
                </a>
            </li>
            <li>
                <a href="{{route('permission')}}">
                    <div class="parent-icon"><i class='bx bxs-lock'></i></div>
                    <div class="menu-title">Permissions</div>
                </a>
            </li>
            <li>
                <a href="{{route('kyc')}}">
                    <div class="parent-icon"><i class='bx bxs-dollar-circle'></i></div>
                    <div class="menu-title">KYC</div>
                </a>
            </li>
            <li>
                <a href="{{route('admin.ambassador.receipt')}}">
                    <div class="parent-icon"><i class='bx bxs-cloud-upload'></i></div>
                    <div class="menu-title">Ambassador Receipt</div>
                </a>
            </li>

        @endcan

        {{--                <li>
                            <a href="javascript:;" class="has-arrow">
                                <div class="parent-icon"><i class="bx bx-category"></i>
                                </div>
                                <div class="menu-title">Application</div>
                            </a>
                            <ul>
                                <li> <a href="{{ url('app-emailbox') }}"><i class="bx bx-right-arrow-alt"></i>Email</a>
                                </li>
                                <li> <a href="{{ url('app-chat-box') }}"><i class="bx bx-right-arrow-alt"></i>Chat Box</a>
                                </li>
                                <li> <a href="{{ url('app-file-manager') }}"><i class="bx bx-right-arrow-alt"></i>File Manager</a>
                                </li>
                                <li> <a href="{{ url('app-contact-list') }}"><i class="bx bx-right-arrow-alt"></i>Contatcs</a>
                                </li>
                                <li> <a href="{{ url('app-to-do') }}"><i class="bx bx-right-arrow-alt"></i>Todo List</a>
                                </li>
                                <li> <a href="{{ url('app-invoice') }}"><i class="bx bx-right-arrow-alt"></i>Invoice</a>
                                </li>
                                <li> <a href="{{ url('app-fullcalender') }}"><i class="bx bx-right-arrow-alt"></i>Calendar</a>
                                </li>
                            </ul>
                        </li>--}}
    </ul>
    <!--end navigation-->
</div>